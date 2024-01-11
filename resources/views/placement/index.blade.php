@extends('layouts.master')

@section('title')
Placement
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">

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
</style>
@endpush

@section('content')
<div class="main-content">
    <div class="br-title">
        <h2 class="breadcrumb-title-non"><a href="{{ route('placement.index')}}">Placement</a></h2>
        <i class="fa-solid fa-chevron-right"></i>
        <h2 class="breadcrumb-title-active">CS 1 - Aa - 12</h2>
    </div>

    <div class="placement-detail">
        <div class="placement-box">
            <h4 class="title-transdet">Form Placement</h4>
            <form action="" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="row d-flex align-items-stretch">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group _form-group">
                                    <label for="coldstorage">
                                        Cold Storage
                                    </label>
                                    <input id="coldstorage" name="coldstorage" type="text" class="form-control"
                                        placeholder="1" value="1" style="text-align: center; font-weight: 700;"
                                        readonly />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group _form-group">
                                    <label for="rak">
                                        Rak
                                    </label>
                                    <input id="rak" name="rak" type="text" class="form-control" placeholder="Aa"
                                        value="Aa" style="text-align: center; font-weight: 700;" readonly />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group _form-group">
                                    <label for="urutan_rak">
                                        Urutan
                                    </label>
                                    <input id="urutan_rak" name="urutan_rak" type="text" class="form-control"
                                        placeholder="12" value="12" style="text-align: center; font-weight: 700;"
                                        readonly />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group _form-group">
                                    <label for="tingkat_rak">
                                        Tingkat
                                    </label>
                                    <select id="select_tingkat" name="tingkat_rak" data-placeholder="Pilih tingkat"
                                        class="custom-select" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    {{-- <select name="tingkat_rak" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Pilih tingkat</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>

                        <hr style="">
                        <label for="coldstorage" style="font-family: pjsSemiBold;
                        font-size: 14px;
                        color: #0f172a;
                        margin-bottom: 15px;">
                            Item list
                        </label>
                        <div class="placement-item">
                            <div class="Checkbox-parent Accordion">
                                <input class="material-icons" type="checkbox" />
                                <label>Batch 1 (17-02-24)</label>
                                </input>

                            </div>
                            <div class="Accordion-panel">
                                <ul class="Checkbox-child">
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>

                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                </ul>
                            </div>

                            <div class="Checkbox-parent Accordion">
                                <input class="material-icons" type="checkbox" />
                                <label>Batch 2 (17-02-24)</label>
                                </input>
                            </div>
                            <div class="Accordion-panel">
                                <ul class="Checkbox-child">
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>

                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                </ul>
                            </div>

                            <div class="Checkbox-parent Accordion">
                                <input class="material-icons" type="checkbox" />
                                <label>Batch 3 (17-02-24)</label>
                                </input>
                            </div>
                            <div class="Accordion-panel">
                                <ul class="Checkbox-child">
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>

                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                </ul>
                            </div>

                            <div class="Checkbox-parent Accordion">
                                <input class="material-icons" type="checkbox" />
                                <label>Batch 4 (17-02-24)</label>
                                </input>
                            </div>
                            <div class="Accordion-panel">
                                <ul class="Checkbox-child">
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>

                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                    <li>
                                        <input class="material-icons" type="checkbox" />
                                        <label><b>860205005 - BONELESS SKINLESS DADA (FZ)</b> | <b>510.3 KG</b></label>
                                        </input>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px; margin-bottom: 15px">
                            <div class="col-12">
                                <button type="submit" class="btn-save"
                                    style="text-align: right; float: right">Submit</button>
                                {{-- <a href="#" class="btn-close-modal" data-bs-dismiss="modal"
                                    aria-label="Close">Close</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="placement-box detail-box">
            <h4 class="title-transdet">Detail Placement</h4>

            <div class="form-group _form-group">
                <label for="coldstorage" class="place-detail">
                    Tingkat 4
                </label>
                <table class="table">
                    <tr>
                        <th>Item Barang</th>
                        <th style="text-align: right">BW</th>
                    </tr>
                    <tr>
                        <td>860205005 - BONELESS SKINLESS DADA (FZ)</td>
                        <td style="text-align: right">510.3</td>
                    </tr>
                </table>
            </div>

            <div class="form-group _form-group">
                <label for="coldstorage" class="place-detail">
                    Tingkat 3
                </label>
                <table class="table">
                    <tr>
                        <th>Item Barang</th>
                        <th style="text-align: right">BW</th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td style="text-align: right">-</td>
                    </tr>
                </table>
            </div>

            <div class="form-group _form-group">
                <label for="coldstorage" class="place-detail">
                    Tingkat 2
                </label>
                <table class="table">
                    <tr>
                        <th>Item Barang</th>
                        <th style="text-align: right">BW</th>
                    </tr>
                    <tr>
                        <td>860205005 - BONELESS SKINLESS DADA (FZ)</td>
                        <td style="text-align: right">510.3</td>
                    </tr>
                </table>
            </div>

            <div class="form-group _form-group">
                <label for="coldstorage" class="place-detail">
                    Tingkat 1
                </label>
                <table class="table">
                    <tr>
                        <th>Item Barang</th>
                        <th style="text-align: right">BW</th>
                    </tr>
                    <tr>
                        <td>860205005 - BONELESS SKINLESS DADA (FZ)</td>
                        <td style="text-align: right">510.3</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection


@push('javascript-external')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

<script>
    $(function() {
        $('#select_tingkat').select2({
            theme: 'bootstrap4 select-tags',
            language: "{{ app()->getLocale() }}",
            allowClear: true,

        });
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
@endpush