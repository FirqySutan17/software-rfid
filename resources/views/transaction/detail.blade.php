@extends('layouts.master')

@section('title')
Transaction
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
<style>
    .wrap-box .boxie .box.amount {
        text-align: left
    }
</style>
@endpush

@section('content')
<div class="main-content">
    <div class="br-title">
        <h2 class="breadcrumb-title-non"><a href="{{ route('transaction.index')}}">Transaction</a></h2>
        <i class="fa-solid fa-chevron-right"></i>
        <h2 class="breadcrumb-title-active">MOC-678298</h2>
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

        <div class="wrap-box">

            <div class="boxie">
                <div class="box desc" style="font-family: pjsBold">Description</div>
                <div class="box amount" style="font-family: pjsBold">Amount</div>
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

        <h4 class="title-transdet">Proof of payment</h4>

        <div class="wrap-box">
            <div class="boxie"></div>
            <div class="boxie">
                <div class="box desc">On behalf</div>
                <div class="box amount">ANITA SARI</div>
            </div>
            <div class="boxie">
                <div class="box desc">Account number</div>
                <div class="box amount">8930239837</div>
            </div>
            <div class="boxie">
                <div class="box desc">Bank</div>
                <div class="box amount">BANK BRI</div>
            </div>
            <div class="boxie">
                <div class="box desc">
                    Evidence
                </div>
                <div class="box amount">
                    <img src="{{ asset('img/bukti-tf.png') }}" alt="">

                    <br>
                    <button class="download">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 20L18 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 4V16M12 16L15.5 12.5M12 16L8.5 12.5" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Download
                    </button>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-12">
                <button type="submit" class="btn-reject">Rejected</button>
                <button type="submit" class="btn-save">Save</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

@endpush