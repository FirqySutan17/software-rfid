@extends('layouts.master')

@section('title')
Log chat
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="main-content">
    <div class="tab-settings">
        <div class="tab-left">
            <form role="search" id="form">
                <input type="search" id="query" name="q" placeholder="Search customer"
                    aria-label="Search through site content">
                <button class="search-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 17L21 21" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </form>
        </div>
        <div class="tab-right">
            <button class="filter-btn menu-style">
                Filter
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 6H21" stroke="black" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7 12L17 12" stroke="black" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M11 18L13 18" stroke="black" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </button>
        </div>

    </div>

    <div class="table-content table-responsive">
        <table class="table table-w-logchat">
            <thead>
                <tr>
                    <th scope="col">Customer name</th>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <th scope="col">Receiver</th>
                    @endif
                    <th scope="col">Follow-up via</th>
                    <th scope="col">Type</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Step</th>
                    <th scope="col">Date</th>
                    <th scope="col" style="width: 14%">Message</th>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <th scope="col" style="width: 5%;"></th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="name-cus">

                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Anita Sari
                    </th>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <td>
                        086789038909
                    </td>
                    @endif
                    <td>Whatsapp</td>
                    <td>Broadcast</td>
                    <td><span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span></td>
                    <td>Offered1</td>
                    <td>12/24/23, 12:00</td>
                    <td>
                        Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi
                        langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                        menyenangkan.
                    </td>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <td style="text-align: center">
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">
                                <button id="editBtn" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                <button id="openNav" onclick="w3_open()">Detail</button>
                            </div>
                        </div>
                    </td>
                    @endif
                </tr>

                <tr>
                    <th scope="row" class="name-cus">

                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Bayu Pramudita
                    </th>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <td>
                        086789038909
                    </td>
                    @endif
                    <td>Whatsapp</td>
                    <td>Broadcast</td>
                    <td><span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span></td>
                    <td>Offered1</td>
                    <td>12/24/23, 12:00</td>
                    <td>
                        Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi
                        langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                        menyenangkan.
                    </td>
                    @if(Auth::check() && Auth::user()->role === 'member')
                    <td style="text-align: center">
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">
                                <button id="editBtn" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                <button id="openNav" onclick="w3_open()">Detail</button>
                            </div>
                        </div>
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function dotDetail() {
      document.getElementById("myDropdownDot").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn-dot')) {
        var dropdownsDot = document.getElementsByClassName("dropdown-content-dot");
        var i;
        for (i = 0; i < dropdownsDot.length; i++) {
          var openDropdownDot = dropdownsDot[i];
          if (openDropdownDot.classList.contains('show')) {
            openDropdownDot.classList.remove('show');
          }
        }
      }
    }
</script>
@endpush