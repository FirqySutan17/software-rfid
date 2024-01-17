@extends('layouts.master')

@section('title')
Placement
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/display.css') }}">

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
</style>
@endpush

@section('content')
<div class="main-content">
    <div class="wrapper">
        <?php
                $data_racks1 = $get_data_rackcs1->result();
                $data_racks2 = $get_data_rackcs2->result();
                $data_racks3 = $get_data_rackcs3->result();
        ?>
        <div class="content-wrapper" style="margin-left: 0px">
            <div class="container-fluid">
                <div class="box box-primary box-solid" style="margin-top: 10px;">
                    <div class="box-header with-border">
                        <center>
                            <h5 class="box-title">Mapping Cold Storage</h5>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 wrap-cs">
                        <h2>COLD STORAGE <br> 1</h2>
                        <div class="train">
                            <div class="exit front train-body">
                                <div>A</div>
                                <div></div>
                                <div>B</div>
                            </div>
                            <ol class="wagon train-body">
                                <?php $i = 1; foreach ($get_data_cs1->result() as $CS): ?>
                                <li class="row row--<?=$CS->TES?>">
                                    <ol class="seats">
                                        <?php foreach ($data_racks1 as $CS2):?>
                                        <?php 
                            $label_class = "bg-red";
                            if ($CS2->JUMLAH_DATA < 1) {
                                $label_class = "bg-green";
                            } elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4) {
                                $label_class = "bg-orange";
                            }
    
                            $border_style = "";
                            if (!empty($CS2->TANGGAL_TERTUA)) {
                                $datetime1 = new DateTime(date("Y-m-d", strtotime($CS2->TANGGAL_TERTUA)));
                                $datetime2 = new DateTime(date("Y-m-d"));
                                $difference = $datetime1->diff($datetime2);
                                // echo "<pre/>";print_r($CS2);
                                // echo "<pre/>";print_r($difference);exit;
    
                                if ($difference->days > 90) {
                                $border_style = "border-bottom: 5px solid purple";
                                }
                            }
    
                            $nomor = $CS->TES;
                            if ($nomor < 10) {
                                $nomor = "0".$nomor;
                            }
                            ?>
                                        <?php if ((($CS2->CS1)=='B61Aa') AND ($CS2->TES)==$i): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>a"
                                                id="1.Aa.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="1.Aa.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B61Ab') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>b"
                                                id="1.Ab.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="1.Ab.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>

                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>

                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B61Ba') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>a"
                                                id="1.Ba.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="1.Ba.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B61Bb') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>b"
                                                id="1.Bb.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="1.Bb.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php endif ?>
                                        <?php endforeach ?>
                                    </ol>
                                </li>
                                <?php $i++; endforeach; ?>
                            </ol>
                            <div class="exit back train-body">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wrap-cs">
                        <h2>COLD STORAGE <br> 2</h2>
                        <div class="train">
                            <div class="exit front train-body">
                                <div>A</div>
                                <div></div>
                                <div>B</div>
                            </div>

                            <ol class="wagon train-body">
                                <?php $i = 1; foreach ($get_data_cs2->result() as $CS): ?>
                                <li class="row row--<?=$CS->TES?>">
                                    <ol class="seats">
                                        <?php foreach ($data_racks2 as $CS2):?>
                                        <?php 
                            $label_class = "bg-red";
                            if ($CS2->JUMLAH_DATA < 1) {
                                $label_class = "bg-green";
                            } elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4) {
                                $label_class = "bg-orange";
                            }
    
                            $border_style = "";
                            if (!empty($CS2->TANGGAL_TERTUA)) {
                                $datetime1 = new DateTime(date("Y-m-d", strtotime($CS2->TANGGAL_TERTUA)));
                                $datetime2 = new DateTime(date("Y-m-d"));
                                $difference = $datetime1->diff($datetime2);
                                // echo "<pre/>";print_r($CS2);
                                // echo "<pre/>";print_r($difference);exit;
    
                                if ($difference->days > 90) {
                                $border_style = "border-bottom: 5px solid purple";
                                }
                            }
    
                            $nomor = $CS->TES;
                            if ($nomor < 10) {
                                $nomor = "0".$nomor;
                            }
                            ?>
                                        <?php if ((($CS2->CS1)=='B62Aa') AND ($CS2->TES)==$i): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>a"
                                                id="2.Aa.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="2.Aa.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B62Ab') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>b"
                                                id="2.Ab.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="2.Ab.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B62Ba') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>a"
                                                id="2.Ba.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="2.Ba.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B62Bb') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>b"
                                                id="2.Bb.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="2.Bb.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php endif ?>
                                        <?php endforeach ?>
                                    </ol>
                                </li>
                                <?php $i++; endforeach; ?>
                            </ol>

                            <div class="exit back train-body">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wrap-cs">
                        <h2>COLD STORAGE <br> 3</h2>
                        <div class="train">
                            <div class="exit front train-body">
                                <div>A</div>
                                <div></div>
                                <div>B</div>
                            </div>

                            <ol class="wagon train-body">
                                <?php $i = 1; foreach ($get_data_cs3->result() as $CS): ?>
                                <li class="row row--<?=$CS->TES?>">
                                    <ol class="seats">
                                        <?php foreach ($data_racks3 as $CS2):?>
                                        <?php
                            $label_class = "bg-red";
                            if ($CS2->JUMLAH_DATA < 1) {
                                $label_class = "bg-green";
                            } elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4) {
                                $label_class = "bg-orange";
                            }
    
                            $border_style = "";
                            if (!empty($CS2->TANGGAL_TERTUA)) {
                                $datetime1 = new DateTime(date("Y-m-d", strtotime($CS2->TANGGAL_TERTUA)));
                                $datetime2 = new DateTime(date("Y-m-d"));
                                $difference = $datetime1->diff($datetime2);
                                // echo "<pre/>";print_r($CS2);
                                // echo "<pre/>";print_r($difference);exit;
    
                                if ($difference->days > 90) {
                                $border_style = "border-bottom: 5px solid purple";
                                }
                            }
    
                            $nomor = $CS->TES;
                            if ($nomor < 10) {
                                $nomor = "0".$nomor;
                            }
                            ?>
                                        <?php if ((($CS2->CS1)=='B63Aa') AND ($CS2->TES)==$i): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>a"
                                                id="3.Aa.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="3.Aa.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B63Ab') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="A-<?= $nomor ?>b"
                                                id="3.Ab.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="3.Ab.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B63Ba') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>a"
                                                id="3.Ba.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="3.Ba.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php elseif ((($CS2->CS1)=='B63Bb') AND (($CS2->TES)==$i)): ?>
                                        <li class="seat">
                                            <input type="checkbox" class="rb" data-rackname="B-<?= $nomor ?>b"
                                                id="3.Bb.<?=$CS->TES?>" />
                                            <label style="<?= $border_style ?>" class="<?= $label_class ?>"
                                                for="3.Bb.<?=$CS->TES?>">
                                                <?=$CS2->TES.substr($CS2->CS1,4)?>
                                                <?php if ($CS2->JUMLAH_DATA < 1): ?>
                                                <div class="status-cs">
                                                    AVAILABLE
                                                </div>
                                                <?php elseif ($CS2->JUMLAH_DATA >= 1 && $CS2->JUMLAH_DATA < 4): ?>
                                                <div class="status-cs">
                                                    <?= $CS2->JUMLAH_DATA ?>/4 RAK
                                                </div>
                                                <?php else: ?>
                                                <div class="status-cs">
                                                    FULL
                                                </div>
                                                <?php endif ?>
                                            </label>
                                        </li>
                                        <?php endif ?>
                                        <?php endforeach ?>
                                    </ol>
                                </li>
                                <?php $i++; endforeach; ?>
                            </ol>

                            <div class="exit back train-body">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
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

<script>
    $(".disableclick").keydown(function(event) { 
        return false;
    });
</script>


<script>
    $(function () {
        $('#example1').DataTable(
          {"language": {"paginate": { "previous": "&lt","next": "&gt",}}}
          )
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
</script>
<script type="text/javascript">
    $("#example1 tr").click(function(){
        if ($(this).hasClass("selected")){
            $(this).removeClass("selected");
        }else{
            $(this).addClass("selected").siblings().removeClass("selected");
        }
    });
    
    $(document).ready(function() {
          setTimeout(() => {
            document.location.reload();
            console.log("Reload page 2detik")
          }, 900000);
        })
</script>

<script>
    function chartfunct() {
      $('#myChart').remove(); // this is my <canvas> element
      $('#chart1').append('<canvas id="myChart"><canvas>');
     
    const values = [];
      values.push(document.getElementById("dt1").value);
      values.push(document.getElementById("dt2").value);
      values.push(document.getElementById("dt3").value);
      values.push(document.getElementById("dt4").value);
      values.push(document.getElementById("dt5").value);
      values.push(document.getElementById("dt6").value);
      values.push(document.getElementById("dt7").value);
      values.push(document.getElementById("dt8").value);
      values.push(document.getElementById("dt9").value);
      values.push(document.getElementById("dt10").value);
      values.push(document.getElementById("dt11").value);
      values.push(document.getElementById("dt12").value);
      values.push(document.getElementById("dt13").value);
      values.push(document.getElementById("dt14").value);
      values.push(document.getElementById("dt15").value);
      /*var dtb1 = document.getElementById("dt1").innerText;
      var dtb2 = document.getElementById("dt2").innerText;
      var dtb3 = document.getElementById("dt3").innerText;
      var dtb4 = document.getElementById("dt4").innerText;
      var dtb5 = document.getElementById("dt5").innerText;
      var dtb6 = document.getElementById("dt6").innerText;
      var dtb7 = document.getElementById("dt7").innerText;
      var dtb8 = document.getElementById("dt8").innerText;
      var dtb9 = document.getElementById("dt9").innerText;
      var dtb10 = document.getElementById("dt10").innerText;
      var dtb11 = document.getElementById("dt11").innerText;
      var dtb12 = document.getElementById("dt12").innerText;
      var dtb13 = document.getElementById("dt13").innerText;
      var dtb14 = document.getElementById("dt14").innerText;
      var dtb15 = document.getElementById("dt15").innerText;
      */
    
      var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ["1", "2", "3", "4", "5", "6","7","8","9","10","11","12","13","14","15"],
            datasets: [{
              label: 'Depletion',
              data: values,
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              ],
              borderColor: [
              'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Tabel Of Depletion'
                        }
                    },
    
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                },
               
              }],
              xAxes: [{
                    display: true,
                    title: {
                    display: true,
                    text: 'Value'
                    }
              }],
            }
          }
        });
    
    
      
    }
    
</script>

<script>
    $(function () {
      $("#dt1,#dt2,#dt3,#dt4,#dt5,#dt6,#dt7,#dt8,#dt9,#dt10,#dt11,#dt12,#dt13,#dt14,#dt15").keyup(function () {
        $("#jumlah").val(+$("#dt1").val() + +$("#dt2").val() + +$("#dt3").val() + +$("#dt4").val() + +$("#dt5").val() +
                         +$("#dt6").val() + +$("#dt7").val() + +$("#dt8").val() + +$("#dt9").val() + +$("#dt10").val() + 
                         +$("#dt11").val() + +$("#dt12").val() + +$("#dt13").val() + +$("#dt14").val() + +$("#dt15").val()
                        );
        });
       });
</script>

<!-- Untuk Multiple Upload -->
<script>
    $('.upload-wrap input[type=file]').change(function(){
        var id = $(this).attr("id");
        var newimage = new FileReader();
        newimage.readAsDataURL(this.files[0]);
        newimage.onload = function(e){
          $('.uploadpreview.' + id ).css('background-image', 'url(' + e.target.result + ')' );
        }
      });
    
</script>

<script>
    function myFunction() {
     
      var x = document.getElementById("farmes");
      var val = x.value;
      var n = val.split('|');
     
      document.getElementById("pemilik").value = n[1];
      document.getElementById("alamat").value = n[2];
    
    
      
    }
    
    // function confirmdelete(){
    //   var del = confirm('Delete Data, Are You Sure?');
    //   if (del)
    //     return true;
    //   else
    //     return false;
    // }
</script>
<script>
    document.getElementById('datePicker').valueAsDate = new Date();
     document.getElementById('datePicker2').valueAsDate = new Date();
</script>
<script type="text/javascript">
    function showDiv(select){
       if(select.value==2){
        document.getElementById('hidden_div').style.display = "none";
       } else{
        document.getElementById('hidden_div').style.display = "";
       }
    } 
</script>
<script>
    /*$(document).ready(function () {
          var cs = $('#cbs').val();*/
          
    function cs1Aa( i ){
      return function(){
        var cek = $('#v1Aa'+i).val();
        $('#1Aaa'+i).append(cek);
      }
    }
    
    $(document).ready(function(){
      for(var i = 0; i < 15; i++) {
        $('#1Aa' + i).click( cs1Aa( i ) );
      }
    
    
      $(".rb").change(function() {
        $('.display_rack').empty();
        $(".rb").prop('checked', false);
        $(this).prop('checked', true);
    
        var id_rack = $(this).attr('id');
        var rack_name = $(this).data('rackname');
    
        // $("#rack_name").text(rack_name);
        $.ajax({
          url:'<?=base_url()?>C_Warehouse/get_rack_detail',
          method: 'post',
          data: {id_rack: id_rack},
          dataType: 'json',
          success: function(response){
            $.each(response, function(level, data){
              var split_rackname = rack_name.split("-");
              var rn_level = split_rackname[0] + "-0" + level + "-" + split_rackname[1];
              var rackname_level = 'Rak : ' + rn_level;
              if (data) {
                var html = ``;
                var pallet_no = '';
                $.each(data, function(index, item){
                  pallet_no = "Pallet : " + item.PALLET_NO;
                  html += `<tr>`;
                    html += `<td>${item.NAME}</td>`;
                    html += `<td>${item.PROD_DATE}</td>`;
                    html += `<td>${item.DAYS}</td>`;
                    html += `<td>${item.SACK_BAG}</td>`;
                    html += `<td>${item.QTY}</td>`;
                    html += `<td>${item.BW}</td>`;
                  html += `</tr>`;
                });
                $("#pallet_name_level_" + level).text(pallet_no);
                $('#display_rack_' + level).append(html);
              }
              $("#rack_name_level_" + level).text(rackname_level);
            });
            $("#outofalldata").modal('show');
          }
        });
      });
    });
    
          /*
        $('#1Aa1').click(function () {
                 $('#1Aa1').append(cs);
        });*/
    /*});*/
</script>
@endpush