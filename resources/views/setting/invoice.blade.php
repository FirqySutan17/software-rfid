@extends('layouts.master')

@section('title')
Transaction
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
@includeIf('layouts.partials.setting')
<div class="main-content follow-up-page" style="width: auto">
    <div class="br-title mt-82">
        <h2 class="breadcrumb-title-non"><a href="{{ route('setting.subscription')}}">Subscription</a></h2>
        <i class="fa-solid fa-chevron-right"></i>
        <h2 class="breadcrumb-title-active">Invoice#0100</h2>
    </div>

    <div class="trans-detail">
        <div class="invoice-due">
            <div class="title">Invoice date</div>
            <div class="date">: &nbsp; Sunday, April 18th 2021</div>
        </div>
        <div class="invoice-due">
            <div class="title">Due date</div>
            <div class="date">: &nbsp; Saturday, May 8th 2021</div>
        </div>

        <div class="pay-invo">
            <div class="box">
                <h4>Pay to :</h4>

                <div class="box-payinvo">
                    <h5>PT Angin</h5>
                    <p>NPWP: 67.789.933.5-677.00</p>
                    <p>Asia - Afrika Sentral Senayan II, Gelora, Tanah Abang. Kota Adm. Jakarta Pusat< DKI Jakarta</p>
                </div>
            </div>
            <div class="box">
                <h4>Invoice to :</h4>

                <div class="box-payinvo">
                    <h5>PT Ribut</h5>
                    <p>Irfan Widodo</p>
                    <p>c7/4 Griya Tugu Asri, Jl. RTM Depok, West Java, 1651 Indonesia</p>
                </div>
            </div>
        </div>

        <h4 class="title-transdet">Invoice items</h4>

        <div class="wrap-box" style="border: none">

            <div class="boxie" style="border-bottom: 1px solid #ededf0;">
                <div class="box desc">Description</div>
                <div class="box desc" style="text-align: right">Amount</div>
            </div>
            <div class="boxie">
                <div class="box desc">Business</div>
                <div class="box amount">Rp 1.200.000</div>
            </div>
            <div class="boxie">
                <div class="box desc">3users</div>
                <div class="box amount">Rp 47.000</div>
            </div>
            <div class="boxie">
                <div class="box desc">Discount(-20%)</div>
                <div class="box amount green">-Rp350.000</div>
            </div>
            <div class="boxie">
                <div class="box desc">Total
                    <p>Due on 11 February 2022 <br> than every month</p>
                </div>
                <div class="box amount">IDR 897.000</div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">
            <div class="col-12">
                <button type="submit" class="btn-close-modal" style="margin-right: 10px">Download</button>
                <button type="submit" class="btn-save" data-bs-toggle="modal" data-bs-target="#processPayment">Process
                    payment</button>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="processPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Process payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="form-group _form-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select bank</option>
                    </select>
                </div>


                <div class="form-group _form-group">
                    <label for="title" style="margin-bottom: 5px">On behalf</label>
                    <input id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Input title broadcast" value="Ayu lestari" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <label for="accountNumber" style="margin-bottom: 5px">Account number</label>
                    <input id="accountNumber" name="accountNumber" type="number" class="form-control"
                        placeholder="Input account number" value="71891820298" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <div class="uploadEvidance">
                        <input name="image" type="file" value="" class="form-control" type='file' id="imageUpload" />
                        <label for="imageUpload"
                            style="font-family: pjsSemiBold; font-size: 16px; text-align: left; padding: 16px">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px">
                                <path d="M12 22V13M12 13L15.5 16.5M12 13L8.5 16.5" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Upload evidance</label>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <button type="submit" class="btn-save">Send</button>
                        <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

@endpush