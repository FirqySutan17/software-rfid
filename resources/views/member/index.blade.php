@extends('layouts.master')

@section('title')
Member
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
                <input type="search" id="query" name="q" placeholder="Search member"
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
        <table class="table table-width">
            <thead>
                <tr>
                    <th scope="col">Subscriber</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Subscribe up to</th>
                    <th scope="col">Last package</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="name-cus">
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Anita Sari
                    </th>
                    <td>anita@gmail.com</td>
                    <td>082284789876</td>
                    <td>Mar 20, 2023</td>
                    <td>Business</td>
                    <td>
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">
                                <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#subDetail">
                                    Detail subscriber
                                </button>
                                <button style="color: #DB1020" id="susSubs" data-bs-toggle="modal"
                                    data-bs-target="#subSus">
                                    Suspend
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="name-cus">
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Bayu Pramudita
                    </th>
                    <td>bayu@gmail.com</td>
                    <td>082284789876</td>
                    <td>Mar 20, 2023</td>
                    <td>Professional</td>
                    <td>
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">

                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="name-cus">
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Anisa Dewi
                    </th>
                    <td>anisa@gmail.com</td>
                    <td>082284789876</td>
                    <td>Mar 20, 2023</td>
                    <td>Personal</td>
                    <td>
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">

                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="subDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="userHeader">
                    <div class="box">
                        <img src="{{ asset('img/user.png') }}" alt="">
                    </div>
                    <div class="box" style="margin: auto">
                        <h2>Anita Sari</h2>
                        <div class="icons" style="margin-bottom: 5px">
                            anita@gmail.com
                        </div>
                        <div class="icons">
                            082284789876
                        </div>
                    </div>
                </div>
                <div class="userBody">
                    <div class="subs-pack">
                        <p>Subscribe up to</p>
                        <h2>Mar 20, 2023</h2>
                    </div>
                    <div class="gap" style="width: 4%"></div>
                    <div class="subs-pack">
                        <p>Package</p>
                        <h2>Business</h2>
                    </div>
                </div>

                <div class="row" style="margin-top: 40px">
                    <div class="col-12">
                        <button type="submit" class="btn-suspend">Suspend</button>
                        <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="subSus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suspend member?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p class="sus-question">
                    Do you want to suspend your subscription member? Automatic members cannot carry out activities in
                    this application
                </p>

                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <button type="submit" class="btn-suspend">Yes, Suspend</button>
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