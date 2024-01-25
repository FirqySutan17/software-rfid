@extends('layouts.master')

@section('title')
Report - Detail Balance
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/display.css') }}">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs/css/buttons.dataTables.min.css') }}">
@endpush

@section('content')
<div class="main-content">
    <section class="content">
        <!-- Info boxes -->

        <div class="box box-info">
            <div class="box-header" style="text-align: center;">

                <h2 class="box-title"><B>Detail RPA Warehouse Inventory</B></h2><br>
                <span class="label label-default">
                    <?php echo substr($data['tanggal'], 6, 2)."/".substr($data['tanggal'], 4, 2)."/". substr($data['tanggal'], 0, 4) ?>
                    -
                    <?php echo substr($data['tanggal2'], 6, 2)."/".substr($data['tanggal2'], 4, 2)."/".substr($data['tanggal2'], 0,4) ?>
                </span>
            </div>
            <div class="box-body">
                <div style="overflow: auto;">
                    <table border="2" id="example2" class="table table-bordered table-striped">
                        <thead style="text-align: center;">
                            <tr style="text-align: center">
                                <th style="text-align: center; vertical-align: middle;width: 3%" rowspan="2"><input
                                        type="checkbox" style="width: 100%;" class="check-all" name="check_all"></th>
                                <th style="text-align: center; min-width: 250px; vertical-align: middle;" rowspan="2">
                                    Goods Item</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Cold Storage</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Rack No</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Pallet No</th>
                                <th style="text-align: center; min-width: 75px; vertical-align: middle;" rowspan="2">
                                    Prod Date</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Days</th>
                                <th style="text-align: center; vertical-align: middle;" rowspan="2">Unit</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="3">Begin</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="3">In</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="3">Out</th>
                                <th style="text-align: center; vertical-align: middle;" colspan="3">End</th>
                            </tr>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Bag</th>
                                <th style="text-align: center; vertical-align: middle;">Qty</th>
                                <th style="text-align: center; vertical-align: middle;">BW</th>
                                <th style="text-align: center; vertical-align: middle;">Bag</th>
                                <th style="text-align: center; vertical-align: middle;">Qty</th>
                                <th style="text-align: center; vertical-align: middle;">BW</th>
                                <th style="text-align: center; vertical-align: middle;">Bag</th>
                                <th style="text-align: center; vertical-align: middle;">Qty</th>
                                <th style="text-align: center; vertical-align: middle;">BW</th>
                                <th style="text-align: center; vertical-align: middle;">Bag</th>
                                <th style="text-align: center; vertical-align: middle;">Qty</th>
                                <th style="text-align: center; vertical-align: middle;">BW</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      $today = date("Ymd"); $no=1;
                      $totalBG_BAG = 0; $totalBG_QTY = 0; $totalBG_BW = 0;
                      $totalIN_BAG = 0; $totalIN_QTY = 0; $totalIN_BW = 0;
                      $totalOUT_BAG = 0; $totalOUT_QTY = 0; $totalOUT_BW = 0;
                      $totalEND_BAG = 0; $totalEND_QTY = 0; $totalEND_BW = 0;
                    ?>
                            <?php foreach ($data['Report'] as $baris):?>
                            <?php 
                        // $rack_no = "Queue";
                        // if ($baris['RACK_NO'] != "..") {
                          // $pecah_rack_no = explode(".", $baris['RACK_NO']);
                          // $row = $pecah_rack_no[0][0];
                          // $number = $pecah_rack_no[1].$pecah_rack_no[0][1];
                          // $level = $pecah_rack_no[2];
  
                          // $rack_no = $row.".".$number.".".$level;
                          // $row = $pecah_rack_no[0][0];
                          // $number = $pecah_rack_no[1].$pecah_rack_no[0][1];
                          // $level = $pecah_rack_no[2];
  
                          // $rack_no = $row." - ".$level." - ".$number;
                          // echo "<pre/>";print_r($pecah_rack_no);exit;
  
                          // $datetime1 = new DateTime(date("Y-m-d", strtotime($baris['PROD_DATE'])));
                          // $datetime2 = new DateTime($today);
                          // $difference = $datetime1->diff($datetime2);
                          // $days = $difference->days;
                        // }
                        $style = "";
                        if ($baris['DAYS'] > 90) {
                          $style = "color: red";
                        }
  
                        $totalBG_BAG += $baris['BG_SACK_BAG']; $totalBG_QTY += $baris['BG_QTY']; $totalBG_BW += $baris['BG_BW'];
                        $totalIN_BAG += $baris['IN_SACK_BAG']; $totalIN_QTY += $baris['IN_QTY']; $totalIN_BW += $baris['IN_BW'];
                        $totalOUT_BAG += $baris['OUT_SACK_BAG']; $totalOUT_QTY += $baris['OUT_QTY']; $totalOUT_BW += $baris['OUT_BW'];
                        $totalEND_BAG += $baris['END_SACK_BAG']; $totalEND_QTY += $baris['END_QTY']; $totalEND_BW += $baris['END_BW'];
                      ?>
                            <tr id="data-<?= $no ?>">
                                <td><input type="checkbox" style="width: 100%;" name="check_row" class="check-row"
                                        id="<?= $no ?>"
                                        value="<?= $baris['END_SACK_BAG'].'-'.$baris['END_QTY'].'-'.$baris['END_BW'] ?>"></td>
                                <td style="text-align: left;">
                                    <?php echo $baris['ITEM'];?> -
                                    <?php echo $baris['FULL_NAME'];?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">
                                    <?php echo $baris['COLD_STORAGE'];?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">
                                    <?php echo $baris['RACK_NO_TEXT'];?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">
                                    <?php echo $baris['PALLET_NO'];?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">
                                    <?php echo date("Y.m.d", strtotime($baris['PROD_DATE']));?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">
                                    <?php echo number_format($baris['DAYS']) ?>
                                </td>
                                <td style="text-align: center; <?= $style ?>">KG</td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['BG_SACK_BAG']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['BG_QTY']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['BG_BW'], 2);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['IN_SACK_BAG']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['IN_QTY']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['IN_BW'], 2);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['OUT_SACK_BAG']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['OUT_QTY']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['OUT_BW'], 2);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['END_SACK_BAG']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['END_QTY']);?>
                                </td>
                                <td style="text-align: right; <?= $style ?>">
                                    <?php echo number_format($baris['END_BW'], 2);?>
                                </td>
                            </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-align: right; vertical-align: middle;" colspan="8"><strong>Grand
                                        Total</strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalBG_BAG) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalBG_QTY) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalBG_BW, 2) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalIN_BAG) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalIN_QTY) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalIN_BW, 2) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalOUT_BAG) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalOUT_QTY) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalOUT_BW, 2) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalEND_BAG) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalEND_QTY) ?>
                                    </strong></th>
                                <th style="text-align: right; vertical-align: middle;"><strong>
                                        <?= number_format($totalEND_BW, 2) ?>
                                    </strong></th>
                            </tr>
                        </tfoot>
                    </table>

                    <div class="row" style="margin-top: 50px;">
                        <div class="col-lg-6">
                            <h3>Total Checked</h3>
                            <table border="2" class="table table-bordered table-striped">
                                <thead style="text-align: center; width: 100%">
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">Bag</th>
                                        <th style="text-align: center; vertical-align: middle;">Qty</th>
                                        <th style="text-align: center; vertical-align: middle;">BW</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center; vertical-align: middle;" id="END_BAG">0</td>
                                        <td style="text-align: center; vertical-align: middle;" id="END_QTY">0</td>
                                        <td style="text-align: center; vertical-align: middle;" id="END_BW">0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.row -->



    </section>
</div>
@endsection


@push('javascript-external')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>
<script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
    $(function () {
      $('#example1').DataTable(
        {"language": {"paginate": { "previous": "&lt","next": "&gt",}}}
        )
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
      })
    })
</script>
<script type="text/javascript">
    $(".select2").select2();
    $(".check-row").change(function() {
      calculateTotal();
    });
  
    $(".check-all").change(function() {
      if ($(this).prop('checked')) {
        $(`.check-row`).prop('checked', true);
        $(`.check-row`).addClass('bg-blue');
      } else {
        $(`.check-row`).prop('checked', false);
        $(`.check-row`).removeClass('bg-blue');
      }
      calculateTotal();
    });
    function calculateTotal() {
      var all_checkbox = $(".check-row");
      var checked_box = $(".check-row:checked");
  
      var totalBag  = 0;
      var totalQty  = 0;
      var totalBW   = 0;
      $.each(all_checkbox, function() {
        var id = $(this).attr('id');
        if ($(this).prop('checked')) {
          if (!$(`#data-${id}`).hasClass('bg-blue')) {
            $(`#data-${id}`).addClass('bg-blue');
          }
          var value = $(this).val();
          var split = value.split("-");
          var bag = parseInt(split[0]);
          var qty = parseInt(split[1]);
          var bw = parseInt(split[2]);
  
          totalBag += bag;
          totalQty += qty;
          totalBW  += bw;
        } else {
          if ($(`#data-${id}`).hasClass('bg-blue')) {
            $(`#data-${id}`).removeClass('bg-blue');
          }
        }
  
      });
  
      $("#END_BAG").text(totalBag);
      $("#END_QTY").text(totalQty);
      $("#END_BW").text(totalBW);
    }
    $("#example1 tr").click(function(){
      if ($(this).hasClass("selected")){
          $(this).removeClass("selected");
      }else{
          $(this).addClass("selected").siblings().removeClass("selected");
      }
  });
</script>
@endpush