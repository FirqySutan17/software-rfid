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

}