@extends('layouts.master')

@section('title')
Broadcast
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="main-content">
    <div class="userHeader" style="padding: 0px">
        <div class="box" style="grid-column: span 1">
            <img class="bro-img" src="{{ asset('img/user.png') }}" alt="">
        </div>
        <div class="box info-user-bro" style="margin: auto; grid-column: span 5;">
            <h2 style="margin-bottom: 0px">Anita Sari</h2>
            <div class="icons" style="margin-bottom: 5px">
                anita@gmail.com
            </div>
        </div>
    </div>

    <div class="tab-settings bro-tab">
        <div class="tab-left">
            <h2>Broadcast</h2>
        </div>
        <div class="tab-right">
            <button class="createBro" data-bs-toggle="modal" data-bs-target="#createBro">Create broadcast</button>
        </div>
    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Offered</h4>
                <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di luar waktu operasional
                    nih.
                    Kami akan segera membalas pesan Anda. Selagi menunggu, mungkin FAQ kami dapat membantu kamu.</p>
                <button class="editBro" data-bs-toggle="modal" data-bs-target="#editBro">Edit text</button>
            </div>
            <div class="right">
                <div class="dropdown-dot">
                    <i onclick="dotDetail()" class="fa-solid fa-ellipsis-vertical dropbtn-dot "></i>
                    <div id="myDropdownDot" class="dropdown-content-dot">
                        <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#editBro">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus">
                <h5>Customer</h5>
                <div class="img-group">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                </div>
            </div>
            <div class="bro-tags">
                <h5>Tags</h5>
                <div class="tags-group">
                    <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span>
                    {{-- <span class="green-tag"><i class="fa-solid fa-square"></i> Done</span> --}}
                    {{-- <span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span> --}}
                </div>
            </div>
        </div>

    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Offered</h4>
                <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di luar waktu operasional
                    nih.
                    Kami akan segera membalas pesan Anda. Selagi menunggu, mungkin FAQ kami dapat membantu kamu.</p>
                <button class="editBro">Edit text</button>
            </div>
            <div class="right">
                <div class="dropdown-dot">
                    <i onclick="dotDetail()" class="fa-solid fa-ellipsis-vertical dropbtn-dot "></i>
                    <div id="myDropdownDot" class="dropdown-content-dot">
                        <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#subDetail">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus">
                <h5>Customer</h5>
                <div class="img-group">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                </div>
            </div>
            <div class="bro-tags">
                <h5>Tags</h5>
                <div class="tags-group">
                    <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span>
                    {{-- <span class="green-tag"><i class="fa-solid fa-square"></i> Done</span> --}}
                    {{-- <span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span> --}}
                    {{-- <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span> --}}
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