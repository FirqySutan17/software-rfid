<?php

namespace App\Http\Services;

class PlacementServices {
    public static function getRackList() {
    	$username   = "SUJA";
        $password   = "SUJA";
        $database   = "//10.137.26.67:1521/BRS";
        $conn   = oci_connect($username, $password, $database);
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $query 	= "
        	SELECT
			   CSDATA, (COUNT(SEQ) / 4) as TOTAL_SEQ
			FROM (
			    SELECT
			        REGEXP_SUBSTR(A.CODE, '[^.]+', 1, 1) AS CSDATA,
			        REGEXP_SUBSTR(A.CODE, '[^.]+', 1, 2) AS SEQ
			    FROM 
			        CD_CODE A
			    WHERE 
			        A.HEAD_CODE = 'SH11'
			        AND (A.CODE LIKE 'B61%' OR A.CODE LIKE 'B62%' OR A.CODE LIKE 'B63%')
			) tabledata
			GROUP BY tabledata.CSDATA
			ORDER BY tabledata.CSDATA ASC
        ";
        $stid 	= oci_parse($conn, $query);
        oci_execute($stid);

        $coldStorageData = [];
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        	$coldStorage 	= substr($row['CSDATA'], 2, 1);
        	$rackStorage 	= substr($row['CSDATA'], 3, 2);
        	if (!array_key_exists($coldStorage, $coldStorageData)) {
        		$coldStorageData[$coldStorage] = [
        			"NAME"			=> $coldStorage,
        			"TOTAL_ROW"		=> 0
        		];
        	}
        	$coldStorageData[$coldStorage]['TOTAL_ROW'] = $row['TOTAL_SEQ'];
        }

        return $coldStorageData;
    }

    public static function getRackData($coldStorage) {
    	$username   = "SUJA";
        $password   = "SUJA";
        $database   = "//10.137.26.67:1521/BRS";
        $conn   = oci_connect($username, $password, $database);
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        $coldStorageCode = "B6".$coldStorage;
        $query 	= "
        	SELECT 
        		DISTINCT regexp_substr(A.CODE, '[^.]+', 1, 1) CSDATA,
        		TO_NUMBER(regexp_substr(A.CODE, '[^.]+', 1, 2)) BARIS, 
				CASE 
					WHEN regexp_substr(A.CODE, '[^.]+', 1, 1) = '".$coldStorageCode."Ab' THEN 1
					WHEN regexp_substr(A.CODE, '[^.]+', 1, 1) = '".$coldStorageCode."Aa' THEN 2
					WHEN regexp_substr(A.CODE, '[^.]+', 1, 1) = '".$coldStorageCode."Ba' THEN 3
					WHEN regexp_substr(A.CODE, '[^.]+', 1, 1) = '".$coldStorageCode."Bb' THEN 4
				END AS POSITION,
				(SELECT COUNT(DISTINCT(RACK_NO)) FROM SH_SS_STORAGE_INVENTORY WHERE COLD_STORAGE = '".$coldStorage."' AND RACK_NO LIKE SUBSTR(A.CODE, 4, 5) || '%') as JUMLAH_DATA,
				(SELECT MIN(PROD_DATE) as tanggalStok FROM SH_SS_STORAGE_INVENTORY  WHERE COLD_STORAGE = '".$coldStorage."' AND RACK_NO LIKE SUBSTR(A.CODE, 4, 5) || '%') as TANGGAL_TERTUA
			FROM 
				CD_CODE A,
				( 
					select plant||cold_storage||RACK_NO CD, ITEM, RACK_NO, PALLET_NO,SUM(QTY) QTY,SUM(BW) BW,SUM(SACK_BAG) SACK_BAG
					from SH_SS_STORAGE_INVENTORY 
				WHERE COMPANY = '01'
				GROUP BY plant||cold_storage||RACK_NO, ITEM, RACK_NO, PALLET_NO
				) B
			WHERE 
				HEAD_CODE = 'SH11'
				AND A.CODE LIKE '".$coldStorageCode."%'
				AND  A.CODE = B.CD(+)
			GROUP BY A.CODE
			ORDER BY POSITION ASC
        ";
        // echo "<pre/>";print_r($query);exit();
        $stid 	= oci_parse($conn, $query);
        oci_execute($stid);

        $rackStorage = [];
        $positionArray = [ 1 => "Ab", 2 => "Aa", 3 => "Ba", 4 => "Bb"];
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        	$baris = $row['BARIS'];
        	$position = $positionArray[$row['POSITION']];
        	$jumlah_data = (int) $row['JUMLAH_DATA'];
        	if (!array_key_exists($baris, $rackStorage)) {
        		$rackStorage[$baris] = [
        			"Ab" 	=> 0,
        			"Aa"	=> 0,
        			"Ba"	=> 0,
        			"Bb"	=> 0
        		];
        	}

        	if ($jumlah_data > 0) {
        		$rackStorage[$baris][$position] = $jumlah_data;
        	}
        }
        return $rackStorage;
    	
    }

}