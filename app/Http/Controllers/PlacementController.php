<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PlacementServices;

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
        $database   = "//10.137.26.67:1521/BRS";
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
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        	$timestamp = strtotime($row['LOGDATE']);

        	if ($row['RACK_NO'] == 'X') {
	        	if (!array_key_exists($timestamp, $placement_data)) {
	        		$placement_data[$timestamp] = [
	        			"LOGDATE" 	=> $row['LOGDATE'],
	        			"DATA"		=> []
	        		];
	        	}
	        	$placement_data[$timestamp]["DATA"][] = $row;
        	} else {
        		$pecah_rack = explode(".", $row['RACK_NO']);
        		$sequence_data = $pecah_rack[2];
        		$existing_data[$sequence_data][] = $row;
        	}

        }
        // dd($rack_no, $rack_data, $placement_data, $existing_data);
        return view('placement.index', compact('rack_no', 'rack_data', 'placement_data', 'existing_data'));
    }

	public function mapping_placement(Request $request) {
		$placement = PlacementServices::getRackList();

		// $data['get_data_rackcs1'] = $this->M_Warehouse->m_get_data_rack();
		// $data['get_data_cs1'] = $this->M_Warehouse->m_get_data_cs1();

		// $data['get_data_rackcs2'] = $this->M_Warehouse->m_get_data_rack2();
		// $data['get_data_cs2'] = $this->M_Warehouse->m_get_data_cs2();
		
		// $data['get_data_rackcs3'] = $this->M_Warehouse->m_get_data_rack3();
		// $data['get_data_cs3'] = $this->M_Warehouse->m_get_data_cs3();
		return view('placement.mapping');
	} 

    public function store($rack_no, Request $request) {

    	$data_placement = $request->data_placement;
    	$rack_no_data	= $request->rak.".".$request->urutan_rak.".".$request->tingkat_rak;

    	if (!empty($data_placement)) {
    		foreach ($data_placement as $v) {
    			$explode 	= explode("|", $v);
    			$item 		= $explode[0];
    			$log_date 	= $explode[1];

    			$query_update = "UPDATE SH_PD_ABF_RESULT SET RACK_NO = '".$rack_no_data."' WHERE ITEM = '".$item."' AND LOGDATE = '".$log_date."' AND RACK_NO = 'X'";


    			$username   = "CJCMS";
		        $password   = "admin99";
		        $database   = "//10.137.26.67:1521/BRS";
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
    	}

    	return redirect()->route('placement.index', $rack_no)->with('success', 'Placement success!');
    }

    // public function message(Request $request) {
    //     return view('message.index');
    // }
}
