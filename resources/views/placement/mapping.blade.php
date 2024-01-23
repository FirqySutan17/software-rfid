@extends('layouts.master')

@section('title')
Placement
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/display.css') }}">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">

<style>
    .select2-container--bootstrap4 .select2-selection--single .select2-selection__rendered {
        padding: 5px 0px;
        padding-left: 0rem;
    }

    .select2-container--bootstrap4 .select2-selection--single {
        height: 43px !important;
    }

    .select2-hidden-accessible {
        width: 100% !important;
    }

    .select2-container {
        width: 100% !important;
        text-align: center
    }

    .placement-item {
        height: 130px;
        overflow-y: auto;
        padding: 0px 20px;
    }

    .placement-item input[type="radio"],
    .placement-item input[type="checkbox"] {
        cursor: pointer;
        outline-style: none;
        position: relative;
        -webkit-appearance: none;
        height: 20px;
        width: 20px;
        margin-bottom: -0.25em;
        margin-right: 5px;
        vertical-align: top;
    }

    th,
    td {
        font-size: 13px !important;
        padding: 0px 15px;
    }

    th {
        font-weight: 600 !important;
        height: 40px !important;
        background: #e9ecef !important;
    }

    td {
        height: 40px !important;
    }

    .placement-item input[type="checkbox"] {
        background-color: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 4px;
        color: #484848;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
    }

    .placement-item input[type="radio"] {
        background-color: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 50px;
        color: #484848;
        outline-style: none;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
    }

    .detail-box ._form-group {
        margin-bottom: 15px;
    }

    .placement-item input[type="checkbox"]:checked:after,
    .placement-item input[type="radio"]:checked:after {
        background: #4a8cff;
        border: solid 1px #4a8cff;
        color: #ffffff;
        font-weight: bold;
        position: absolute;
        text-align: center;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;

    }

    .placement-item input[type="checkbox"]:checked:after {
        border-radius: 4px;
        content: "\2713";
        font-size: 0.7em;
        line-height: 1.5;
    }

    .placement-item input[type="radio"]:checked:after {
        border-radius: 50px;
        content: "lens";
        font-size: 0.34em;
        line-height: 2.3;
    }

    .placement-item input[type="radio"]:disabled,
    .placement-item input[type="checkbox"]:disabled {
        background: #F2F6F9;
        border: solid 1px #e8e8e8;
        pointer-events: none;
    }

    .placement-item input[type="radio"]:disabled:checked:after,
    .placement-item input[type="checkbox"]:disabled:checked:after {
        color: #cdd3d9;
        background: #f2f6f9;
        border: solid 1px #e8e8e8;
    }

    .placement-item .Checkbox-parent {
        border-top: solid 1px #e8e8e8;
        margin-top: 16px;
        padding-top: 16px;
        height: 40px;
    }

    .placement-item .Checkbox-child {
        margin-bottom: 8px;
    }

    .placement-item ul {
        list-style: none;
        padding-left: 30px !important;
        margin-top: 20px !important;
    }

    .placement-item .Checkbox-child li {
        margin-bottom: 15px;
        font-size: 13px
    }

    label.place-detail {
        margin-bottom: 5px !important;
        font-size: 14px
    }

    /* Accordion */

    .placement-item .Accordion:after {
        content: '\002B';
        color: #4f5766;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .placement-item .Accordion--active:after {
        content: "\2212";
        color: #4f5766;
    }

    .placement-item .Accordion-panel {
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }

    .placement-item .Accordion-panel:last-of-type {
        border-bottom: solid 1px #e8e8e8;
        padding-bottom: 16px;
    }

    .seat label:hover {
        background-color: yellow !important;
        color: #000 !important
    }

    @media(max-width: 940px) {
        .placement-item {
            height: auto;
        }
    }
</style>

<style type="text/css">
    #example1 tr:hover {
        background-color: #FFFFAA;
    }

    #example1 tr.selected td {
        background: none repeat scroll 0 0 #FFCF8B;
        color: #000000;
    }

    .wrap-cs {
        border-radius: 10px;
        background: #3c8dbc;
        border: 4px solid #fff;
        margin: 0px 0px;
    }

    .wrap-cs h2 {
        text-align: center;
        font-weight: 600;
        color: #fff;
    }

    .row {
        margin-right: 0px;
        margin-left: 0px;
    }

    .exit div:nth-child(2) {
        flex: 0 1 5%;
        background: #3c8dbc;
    }

    .seat {
        height: 80px;
        flex: 1 1 21%;
        padding: 0px
    }

    .seat:nth-child(2) {
        margin-right: 0;
        border-right: 3px solid #fff;
        padding-right: 5px;
    }

    .seat:nth-child(3) {
        padding-left: 5px;
    }

    .seat label {
        border-radius: 0px;
        border: 1px solid #ffffff87;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        flex-wrap: nowrap;
        align-content: center;
    }

    .seat label::before {
        border-radius: 0px;
        background: none;
    }

    .seat label:hover {
        box-shadow: none;
        /* background: #ffffff9e !important; */
        border: 1px solid #fff
    }

    .status-cs {
        margin-top: 5px;
        font-size: 10px
    }

    .bg-green {
        background-color: #00a65a !important;
    }

    #CS-2,
    #CS-3 {
        display: none
    }
</style>
@endpush

@section('content')
<div class="main-content">
    <div class="wrapper">
        <div class="content-wrapper" style="margin-left: 0px">
            <div class="container-fluid" style="padding: 0">
                <div class="box box-primary box-solid" style="margin-top: 10px;">
                    {{-- <div class="box-header with-border">
                        <center>
                            <h5 class="box-title">Mapping Cold Storage</h5>
                        </center>
                    </div> --}}
                    <div class="w3-bar w3-black" style="border-radius: 10px;">
                        <button class="w3-bar-item w3-button tablink w3-red" onclick="openCs(event,'CS-1')">CS
                            1</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCs(event,'CS-2')">CS 2</button>
                        <button class="w3-bar-item w3-button tablink" onclick="openCs(event,'CS-3')">CS 3</button>
                    </div>
                    <br>
                </div>
                <div class="row">
                    <?php foreach ($placement as $plc): ?>
                    <div id="CS-{{ $plc['NAME'] }}" class="col-md-12 wrap-cs storage" style="margin-bottom: 20px">
                        <h2>COLD STORAGE <br> {{ $plc['NAME'] }}</h2>
                        <div class="train">
                            <div class="exit front train-body">
                                <div>A</div>
                                <div></div>
                                <div>B</div>
                            </div>
                            <ol class="wagon train-body">
                                <?php for ($i = 1; $i <= $plc['TOTAL_ROW']; $i++): ?>
                                <?php $no_rack = $i < 10 ? "0".$i : $i; ?>
                                <li class="row">
                                    <ol class="seats">
                                        <?php 
                                            $rackno     = "2".$plc['NAME']."Ab".$no_rack;
                                            $total_data = $coldStorageData[$plc['NAME']][$i]['Ab'];
                                            $bg_class   = "bg-green";
                                            $style      = "";
                                            if ($total_data > 0 && $total_data < 4) {
                                                $bg_class = "bg-warning";
                                            } elseif ($total_data >= 4) {
                                                $bg_class   = "bg-danger";
                                                $rackno     = "";
                                                $style      = "cursor:default";
                                            }
                                        ?>
                                        <li style="{{ $style }}" class="seat" data-rackno="{{ $rackno }}">
                                            <label class="{{ $bg_class }}">
                                                {{ $i }}b
                                                <br>
                                                {{ $total_data }}/4
                                            </label>
                                        </li>
                                        <?php 
                                            $rackno = "2".$plc['NAME']."Aa".$no_rack;
                                            $total_data = $coldStorageData[$plc['NAME']][$i]['Aa'];
                                            $bg_class   = "bg-green";
                                            $style      = "";
                                            if ($total_data > 0 && $total_data < 4) {
                                                $bg_class = "bg-warning";
                                            } elseif ($total_data >= 4) {
                                                $bg_class = "bg-danger";
                                                $rackno     = "";
                                                $style      = "cursor:default";
                                            }
                                        ?>
                                        <li style="{{ $style }}" class="seat" data-rackno="{{ $rackno }}">
                                            <label class="{{ $bg_class }}">
                                                {{ $i }}a
                                                <br>
                                                {{ $total_data }}/4
                                            </label>
                                        </li>
                                        <?php 
                                            $rackno = "2".$plc['NAME']."Ba".$no_rack;
                                            $total_data = $coldStorageData[$plc['NAME']][$i]['Ba'];
                                            $bg_class   = "bg-green";
                                            $style      = "";
                                            if ($total_data > 0 && $total_data < 4) {
                                                $bg_class = "bg-warning";
                                            } elseif ($total_data >= 4) {
                                                $bg_class = "bg-danger";
                                                $rackno     = "";
                                                $style      = "cursor:default";
                                            }
                                        ?>
                                        <li style="{{ $style }}" class="seat" data-rackno="{{ $rackno }}">
                                            <label class="{{ $bg_class }}">
                                                {{ $i }}a
                                                <br>
                                                {{ $total_data }}/4
                                            </label>
                                        </li>
                                        <?php 
                                            $rackno = "2".$plc['NAME']."Bb".$no_rack;
                                            $total_data = $coldStorageData[$plc['NAME']][$i]['Bb'];
                                            $bg_class   = "bg-green";
                                            $style      = "";
                                            if ($total_data > 0 && $total_data < 4) {
                                                $bg_class = "bg-warning";
                                            } elseif ($total_data >= 4) {
                                                $bg_class   = "bg-danger";
                                                $rackno     = "";
                                                $style      = "cursor:default";
                                            }
                                        ?>
                                        <li style="{{ $style }}" class="seat" data-rackno="{{ $rackno }}">
                                            <label class="{{ $bg_class }}">
                                                {{ $i }}b
                                                <br>
                                                {{ $total_data }}/4
                                            </label>
                                        </li>
                                    </ol>
                                </li>
                                <?php endfor ?>
                            </ol>
                            <div class="exit back train-body">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
            <!-- /.box-body -->

        </div>

    </div>
</div>
@endsection


@push('javascript-external')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

<script type="text/javascript">
    $(".seat").on('click', function() {
        var rackno  = $(this).data('rackno');
        if (rackno !== "") {
            var url     = "{{ route('placement.index', ':id') }}";
                url     = url.replace(':id', rackno);
            window.location.href = url;
        }
    });
</script>
<script>
    $(".Checkbox-parent input").on('click',function(){
    var _parent=$(this);
    var nextli=$(this).parent().next().children().children();
    
    if(_parent.prop('checked')){
        console.log('Checkbox-parent checked');
        nextli.each(function(){
        $(this).children().prop('checked',true);
        });
        
    }
    else{
        console.log('Checkbox-parent un checked');
        nextli.each(function(){
        $(this).children().prop('checked',false);
        });
    
    }
    });

    $(".Checkbox-child input").on('click',function(){
    
    var ths=$(this);
    var parentinput=ths.closest('div').prev().children();
    var sibblingsli=ths.closest('ul').find('li');
    
    if(ths.prop('checked')){
        console.log('Checkbox-child checked');
        parentinput.prop('checked',true);
    }
    else{
        console.log('Checkbox-child unchecked');
        var status=true;
        sibblingsli.each(function(){
        console.log('sibb');
        if($(this).children().prop('checked')) status=false;
        });
        if(status) parentinput.prop('checked',false);
    }
    });

    // show hide accordion

    var acc = document.getElementsByClassName("Accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("Accordion--active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
</script>

<script>
    function openCs(evt, cityName) {
      var i, x, tablinks;
      x = document.getElementsByClassName("storage");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " w3-red";
    }
</script>
@endpush