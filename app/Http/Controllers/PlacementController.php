<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PlacementServices;
use RealRashid\SweetAlert\Facades\Alert;

class PlacementController extends Controller
{
    public function index($rack_no, Request $request) {
    	$cold_storage_name = $rack_no[1];
    	$cold_storage 	= $rack_no[0].$rack_no[1];
    	$rack_position	= $rack_no[2].$rack_no[3];
    	$sequence 		= $rack_no[4].$rack_no[5];

    	if ($sequence < 10) {
    		$sequence 	= $rack_no[5];
    	}

    	$rack_data = [
    		"cold_storage_name"	=> $cold_storage_name,
    		"cold_storage" 	=> $cold_storage,
    		"rack_position"	=> $rack_position,
    		"sequence"		=> $sequence
    	];

    	$username   = "CJCMS";
        $password   = "admin99";
        $database   = "RPA_SVR/RPA";
        $conn   = oci_connect($username, $password, $database);
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        } 

        $query 	= "
        	SELECT
        		a.ITEM,
        		b.FULL_NAME as ITEM_NAME,
        		a.RFIDNO,
        		a.RACK_NO,
        		a.LOGDATE,
        		a.QTY,
        		a.WEIGHT,
        		a.PROD_DATE
        	FROM 
        		SH_PD_ABF_RESULT a, CD_ITEM b 
        	WHERE 
        		a.ITEM = b.ITEM
        		AND a.EPCNO IS NOT NULL
        		AND a.DEL_DATE IS NULL
        		AND a.STATUS = '".$cold_storage."'
        	ORDER BY a.LOGDATE ASC
        ";
        $stid 	= oci_parse($conn, $query);
        oci_execute($stid);

        $existing_data 	= [
        	1 => [],
        	2 => [],
        	3 => [],
        	4 => []
        ];
        $placement_data = [];
        $all_data = [];
        $rack = $rack_position.".".$sequence;
        $currdate   = date('Ymd');
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        	$timestamp = strtotime($row['LOGDATE']);
        	if ($row['RACK_NO'] == 'X') {
                $pecah_logdate = explode(" ", $row['LOGDATE']);

                $rowdate    = $pecah_logdate[0];
                if ($rowdate == $currdate) {
                    if (!array_key_exists($timestamp, $placement_data)) {
    	        		$placement_data[$timestamp] = [
    	        			"LOGDATE" 	=> $row['LOGDATE'],
    	        			"DATA"		=> []
    	        		];
    	        	}
    	        	$placement_data[$timestamp]["DATA"][] = $row;
                }
        	} else {
        		$pecah_rack = explode(".", $row['RACK_NO']);
                $rack_local = $pecah_rack[0].".".$pecah_rack[1];
                if ($rack_local == $rack) {
            		$sequence_data = $pecah_rack[2];
                    $indexed = $row['ITEM'].$row['PROD_DATE'];
                    if (!array_key_exists($indexed, $existing_data[$sequence_data])) {
                        $existing_data[$sequence_data][$indexed] = $row;
                    } else {
                        $existing_data[$sequence_data][$indexed]['QTY'] += $row['QTY'];
                        $existing_data[$sequence_data][$indexed]['WEIGHT'] += $row['WEIGHT'];
                    }
            		// $existing_data[$sequence_data][$row['ITEM']] = $row;
                }
        	}
            $all_data[] = $row;
        }
        return view('placement.index', compact('rack_no', 'rack_data', 'placement_data', 'existing_data'));
    }

    public function moving_item($rack_no, Request $request) {
        $explode_rackno = explode("-", $rack_no);
        $rack_no    = $explode_rackno[0];
        $item       = $explode_rackno[1];
        $prod_date  = $explode_rackno[2];
        
        $cold_storage_name = $rack_no[1];
        $cold_storage   = $rack_no[0].$rack_no[1];
        $rack_position  = $rack_no[2].$rack_no[3];
        $sequence       = $rack_no[4].$rack_no[5];
        $level          = $rack_no[6];

        $rack_data = [
            "cold_storage_name" => $cold_storage_name,
            "cold_storage"  => $cold_storage,
            "rack_position" => $rack_position,
            "sequence"      => (int) $sequence,
            "level"             => $level     
        ];

        $rack_no_real = $rack_data['rack_position'].".".$rack_data['sequence'].".".$rack_data['level'];
        $username   = "CJCMS";
        $password   = "admin99";
        $database   = "RPA_SVR/RPA";
        $conn   = oci_connect($username, $password, $database);
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        } 

        $query  = "
            SELECT
                a.ITEM,
                b.FULL_NAME as ITEM_NAME,
                a.RFIDNO,
                a.RACK_NO,
                a.LOGDATE,
                a.QTY,
                a.WEIGHT,
                a.PROD_DATE
            FROM 
                SH_PD_ABF_RESULT a, CD_ITEM b 
            WHERE 
                a.ITEM = b.ITEM
                AND a.EPCNO IS NOT NULL
                AND a.DEL_DATE IS NULL
                AND a.STATUS = '".$cold_storage."'
                AND a.RACK_NO = '".$rack_no_real."'
                AND a.ITEM = '".$item."'
                AND a.PROD_DATE = '".$prod_date."'
            ORDER BY a.PROD_DATE ASC
        ";
        $stid   = oci_parse($conn, $query);
        oci_execute($stid);

        $existing_data  = [
            1 => [],
            2 => [],
            3 => [],
            4 => []
        ];
        $placement_data = [];
        $all_data = [];
        $rack = $rack_position.".".$sequence;
        $currdate   = date('Ymd');
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            $timestamp = strtotime($row['LOGDATE']);
            $pecah_logdate = explode(" ", $row['LOGDATE']);

            if (!array_key_exists($timestamp, $placement_data)) {
                            $placement_data[$timestamp] = [
                                "LOGDATE"   => $row['LOGDATE'],
                                "DATA"      => []
                            ];
                        }
                        $placement_data[$timestamp]["DATA"][] = $row;
                $all_data[] = $row;
            }
        $total_rack          = PlacementServices::getRackList()[$cold_storage_name];
        return view('placement.moving', compact('rack_no', 'rack_data', 'placement_data', 'existing_data', 'total_rack'));
    }

	public function mapping_placement(Request $request) {
		$placement 			= PlacementServices::getRackList();
		$coldStorageData 	= [
			"1"	=> PlacementServices::getRackData(1),
			"2"	=> PlacementServices::getRackData(2),
			"3"	=> PlacementServices::getRackData(3),
		];
		return view('placement.mapping', compact('placement', 'coldStorageData'));
	} 

    public function store($rack_no, Request $request) {

    	$data_placement = $request->data_placement;
        $remark = $request->remark;
    	$rack_no_data	= $request->rak.".".$request->urutan_rak.".".$request->tingkat_rak;
        // dd($rack_no_data, $data_placement);
    	if (!empty($data_placement)) {
    		foreach ($data_placement as $v) {
    			$explode 	= explode("|", $v);
    			$item 		= $explode[0];
    			$log_date 	= $explode[1];
                $rfid       = $explode[2];

    			$query_update = "UPDATE SH_PD_ABF_RESULT SET RACK_NO = '".$rack_no_data."', REMARK = '".$remark."' WHERE ITEM = '".$item."' AND LOGDATE = '".$log_date."' AND RACK_NO = 'X' AND RFIDNO = '".$rfid."'";

    			$username   = "CJCMS";
		        $password   = "admin99";
		        $database   = "RPA_SVR/RPA";
		        $conn   = oci_connect($username, $password, $database);
		        if (!$conn) {
		            $e = oci_error();
		            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		        } 
    			$stmt = oci_parse($conn, $query_update);
				$result = oci_execute($stmt, OCI_DEFAULT);
				if (!$result) {
				  dd(oci_error());   
				} else {
					oci_commit($conn);
				}
    		}

			// Alert::success('Berhasil', 'Data berhasil tersimpan!');
    	} else {
			// Alert::success('Gagal', 'Data gagal tersimpan!');
    	}
    	return redirect()->route('mapping', $rack_no);
    }

    public function store_moving($rack_no, Request $request) {

        $data_placement = $request->data_placement;
        $remark = $request->remark;
        $rack_no_data   = $request->rak.".".$request->urutan_rak.".".$request->tingkat_rak;
        // dd($rack_no_data, $data_placement, $request->all());
        if (!empty($data_placement)) {
            foreach ($data_placement as $v) {
                $explode    = explode("|", $v);
                $item       = $explode[0];
                $log_date   = $explode[1];
                $rfid       = $explode[2];

                $query_update = "UPDATE SH_PD_ABF_RESULT SET RACK_NO = '".$rack_no_data."', REMARK = '".$remark."' WHERE ITEM = '".$item."' AND LOGDATE = '".$log_date."' AND RFIDNO = '".$rfid."'";

                $username   = "CJCMS";
                $password   = "admin99";
                $database   = "RPA_SVR/RPA";
                $conn   = oci_connect($username, $password, $database);
                if (!$conn) {
                    $e = oci_error();
                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                } 
                $stmt = oci_parse($conn, $query_update);
                $result = oci_execute($stmt, OCI_DEFAULT);
                if (!$result) {
                  dd(oci_error());   
                } else {
                    oci_commit($conn);
                }
            }

            // Alert::success('Berhasil', 'Data berhasil tersimpan!');
        } else {
            // Alert::success('Gagal', 'Data gagal tersimpan!');
        }
        return redirect()->route('mapping', $rack_no);
    }

    // public function message(Request $request) {
    //     return view('message.index');
    // }
}
