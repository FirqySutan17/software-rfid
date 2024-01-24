<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Services\PlacementServices;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stock_balance()
    {
        if ($this->session->userdata('empno') == true) {

            $AS_EMPNO = $this->input->post('empno');
            $AS_SDATE       = str_replace('-', '', $this->input->post('AS_SDATE'));
            $AS_EDATE       = str_replace('-', '', $this->input->post('AS_EDATE'));
            $AS_MATERIAL    = !empty($this->input->post('AS_MATERIAL')) ? $this->input->post('AS_MATERIAL') : "%";
            $AS_SUPPLIER    = !empty($this->input->post('AS_SUPPLIER')) ? $this->input->post('AS_SUPPLIER') : "%";
            $AS_COMPANY     = !empty($this->input->post('AS_COMPANY')) ? $this->input->post('AS_COMPANY') : "%";
            $AS_PLANT       = !empty($this->input->post('AS_PLANT')) ? $this->input->post('AS_PLANT') : "%";
            $AS_CS          = !empty($this->input->post('AS_PO')) ? $this->input->post('AS_PO') : "%";
            $session_id     = $this->session->userdata('empno');

			$report = [];
			$report_data_raw = [];
			$data['List_Plant'] = $this->M_Warehouse->m_get_plant_name2();
			$data['List_Item'] = $this->M_Warehouse->m_get_item_name2();
			$data['List_Pallet'] = $this->M_Warehouse->m_get_pallet();
			$data['List_rackno'] = $this->M_Warehouse->m_get_rackno();
			$data['List_coldstorage'] = $this->M_Warehouse->m_get_coldstorage();          
            if ($AS_SDATE=="") {
                $AS_SDATE = date('Ymd');
                $AS_EDATE = date('Ymd');
            }
            $data['tanggal'] = $AS_SDATE; $data['tanggal2'] = $AS_EDATE;
            $report_data_raw = $this->M_Warehouse->m_wh_report($AS_SDATE,$AS_EDATE,$AS_MATERIAL,$AS_SUPPLIER,$AS_PLANT,$AS_COMPANY,$AS_CS)->result();
            
			if (!empty($report_data_raw)) {
				foreach ($report_data_raw as $vl) {
					$item = $vl->ITEM;
					try {
						$curr_data = [
							"ITEM"	=> trim($item),
							"FULL_NAME"	=> trim($vl->FULL_NAME),
							"BG_SACK_BAG"	=> trim($vl->BG_SACK_BAG),
							"IN_SACK_BAG"	=> trim($vl->IN_SACK_BAG),
							"OUT_SACK_BAG"	=> trim($vl->OUT_SACK_BAG),
							"END_SACK_BAG"	=> trim($vl->END_SACK_BAG),
							"BG_QTY"	=> trim($vl->BG_QTY),
							"IN_QTY"	=> trim($vl->IN_QTY),
							"OUT_QTY"	=> trim($vl->OUT_QTY),
							"END_QTY"	=> trim($vl->END_QTY),
							"BG_BW"	=> trim($vl->BG_BW),
							"IN_BW"	=> trim($vl->IN_BW),
							"OUT_BW"	=> trim($vl->OUT_BW),
							"END_BW"	=> trim($vl->END_BW),
						];
						if (
							$vl->BG_SACK_BAG == 0 && $vl->IN_SACK_BAG == 0 && $vl->OUT_SACK_BAG == 0 && $vl->END_SACK_BAG == 0 
							&& $vl->BG_QTY == 0 && $vl->IN_QTY == 0 && $vl->OUT_QTY == 0 && $vl->END_QTY == 0 
							&& $vl->BG_BW == 0 && $vl->IN_BW == 0 && $vl->OUT_BW == 0 && $vl->END_BW == 0
						) {
							// do nothing
						} else {
							if (!array_key_exists($item, $report)) {
								$report[$item] = $curr_data;
							} else {
								$report[$item]["BG_SACK_BAG"] += $curr_data["BG_SACK_BAG"];
								$report[$item]["IN_SACK_BAG"] += $curr_data["IN_SACK_BAG"];
								$report[$item]["OUT_SACK_BAG"] += $curr_data["OUT_SACK_BAG"];
								$report[$item]["END_SACK_BAG"] += $curr_data["END_SACK_BAG"];
								$report[$item]["BG_QTY"] += $curr_data["BG_QTY"];
								$report[$item]["IN_QTY"] += $curr_data["IN_QTY"];
								$report[$item]["OUT_QTY"] += $curr_data["OUT_QTY"];
								$report[$item]["END_QTY"] += $curr_data["END_QTY"];
								$report[$item]["BG_BW"] += $curr_data["BG_BW"];
								$report[$item]["IN_BW"] += $curr_data["IN_BW"];
								$report[$item]["OUT_BW"] += $curr_data["OUT_BW"];
								$report[$item]["END_BW"] += $curr_data["END_BW"];
							}
						}
					} catch (Exception $e) {
						echo "<pre/>";print_r($e->getMessage());print_r($vl);exit;
					}
				}
			}
			$data['Report'] = $report;
			
            return view('report.stock-balance');
        } else {
            redirect();
        }
        return view('report.stock-balance');
    }

    public function detail_balance()
    {
        error_reporting(0);
  		ini_set('display_errors', 0);
        if ($this->session->userdata('empno') == true) {
			$AS_EMPNO = $this->input->post('empno');
			$AS_SDATE       = str_replace('-', '', $this->input->post('AS_SDATE'));
			$AS_EDATE       = str_replace('-', '', $this->input->post('AS_EDATE'));
			$AS_MATERIAL    = !empty($this->input->post('AS_MATERIAL')) ? $this->input->post('AS_MATERIAL') : '%';
			$AS_SUPPLIER    = !empty($this->input->post('AS_PALLET')) ? $this->input->post('AS_PALLET') : '%';
			$AS_COMPANY     = !empty($this->input->post('AS_COMPANY')) ? $this->input->post('AS_COMPANY') : '%';
			$AS_PLANT       = !empty($this->input->post('AS_PLANT')) ? $this->input->post('AS_PLANT') : '%';
			$AS_CS          = !empty($this->input->post('AS_PO')) ? $this->input->post('AS_PO') : '%';
			$session_id     = $this->session->userdata('empno');

			$data['List_Plant'] = $this->M_Warehouse->m_get_plant_name2();
			$data['List_Item'] = $this->M_Warehouse->m_get_item_name2();
			$data['List_Pallet'] = $this->M_Warehouse->m_get_pallet();
			$data['List_rackno'] = $this->M_Warehouse->m_get_rackno();
			$data['List_coldstorage'] = $this->M_Warehouse->m_get_coldstorage();

			if ($AS_SDATE =="") {
			$AS_SDATE = date('Ymd');
			$AS_EDATE = date('Ymd');
			}
			$data['tanggal'] = $AS_SDATE; $data['tanggal2'] = $AS_EDATE;
			$data['Report'] = $this->M_Warehouse->m_wh_report_detail($AS_SDATE,$AS_EDATE,$AS_MATERIAL,$AS_SUPPLIER,$AS_PLANT,$AS_COMPANY,$AS_CS)->result();
			// echo "<pre/>";print_r($data["Report"]);exit;
            return view('report.detail-balance');
        } else {
            	redirect();
        }
        return view('report.detail-balance');
    }

    public function mapping_cs()
    {
        $placement 			= PlacementServices::getRackList();
		$coldStorageData 	= [
			"1"	=> PlacementServices::getRackData(1),
			"2"	=> PlacementServices::getRackData(2),
			"3"	=> PlacementServices::getRackData(3),
		];

        return view('report.mapping-cs', compact('placement', 'coldStorageData'));
    }
 
}
