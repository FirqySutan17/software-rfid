@extends('layouts.master')

@section('title')
Settings
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
        <h2 class="breadcrumb-title-active">Manage plans</h2>
    </div>

    <div class="manage-plan">
        <div class="box">
            <div class="tab-settings bro-tab" style="width: auto">
                <div class="tab-left">
                    <div class="my-plan">
                        <h5 style="margin-bottom: 0px">Select plan</h5>
                    </div>
                </div>
                <div class="tab-right">
                    <div class="switches-container">
                        <input type="radio" id="switchMonthly" name="switchPlan" value="Monthly" checked="checked" />
                        <input type="radio" id="switchYearly" name="switchPlan" value="Yearly" />
                        <label for="switchMonthly">Monthly</label>
                        <label for="switchYearly">Yearly</label>
                        <div class="switch-wrapper">
                            <div class="switch">
                                <div>Monthly</div>
                                <div>Yearly</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-payment">
                <div id="div-started" class="acc-top">
                    <input type="checkbox" id="started" data-target="started" class="accordion__input">
                    <div class="head-accord">
                        <input id="check-started" data-target="started" class="form-check-input check-inp" type="radio"
                            name="flexRadioDefault">
                        <label for="started" class="accordion__label">
                            <div class="left">
                                Started
                                <p>Free, for trying things</p>
                            </div>
                            <div class="right">
                                Free
                            </div>
                        </label>
                    </div>

                    <div id="started-content" class="accordion__content">
                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Unlimited files, pages, and project
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Version history
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Team-wide
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Custom pages
                        </div>
                    </div>
                </div>
                <div id="div-professional" class="acc-top">
                    <input type="checkbox" id="professional" data-target="professional" class="accordion__input">
                    <div class="head-accord">
                        <input id="check-professional" class="form-check-input check-inp" data-target="professional"
                            type="radio" name="flexRadioDefault">
                        <label for="professional" class="accordion__label">
                            <div class="left">
                                Professional
                                <p>For bringing teams together, sharing an org-wide design system, and more</p>
                            </div>
                            <div class="right">
                                IDR 500.000
                            </div>
                        </label>
                    </div>
                    <div id="professional-content" class="accordion__content">
                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Unlimited files, pages, and project
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Version history
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Team-wide
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Custom pages
                        </div>
                    </div>
                </div>
                <div id="div-business" class="acc-top">
                    <input type="checkbox" id="business" data-target="business" class="accordion__input" checked>
                    <div class="head-accord">
                        <input id="check-business" class="form-check-input check-inp" data-target="business"
                            type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label for="business" class="accordion__label">
                            <div class="left">
                                Business
                                <p>For you and your team, with unlimited files and all pro feature</p>
                            </div>
                            <div class="right">
                                IDR 1.200.000
                            </div>
                        </label>
                    </div>
                    <div id="business-content" class="accordion__content">
                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Unlimited files, pages, and project
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Version history
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Team-wide
                        </div>

                        <div class="list-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13L9 17L19 7" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Custom pages
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group _form-group" style="margin-top: 20px">
                <label for="fullname" style="width: 100%">
                    Slots
                </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>5 user slot</option>

                </select>
            </div>

        </div>
        <div class="box">
            <div class="tab-settings bro-tab" style="width: auto">
                <div class="tab-left">
                    <div class="my-plan">
                        <h5 style="margin: 8px">Payment</h5>
                    </div>
                </div>
                <div class="tab-right">
                </div>
            </div>

            <div class="tab-checkout">
                <form role="search" id="form">
                    <input type="search" id="query" name="q" placeholder="Input coupon"
                        aria-label="Search through site content">
                    <button class="search-btn">
                        APPLY
                    </button>
                </form>
            </div>

            <div class="wrap-box" style="width: 100%; border: none">

                <div class="boxie">
                </div>
                <div class="boxie">
                    <div class="box desc">3 user slot</div>
                    <div class="box amount">Rp 47.000</div>
                </div>
                <div class="boxie">
                    <div class="box desc">Discount(-20%)</div>
                    <div class="box amount green">-Rp350.000</div>
                </div>
                <div class="boxie">
                    <div class="box desc" style="font-family: pjsBold">Total
                        <p>Due on 11 February 2022 <br> than every month</p>
                    </div>
                    <div class="box amount" style="font-size: 20px; font-family: pjsBold">IDR 897.000</div>
                </div>
            </div>
            <a class="btn-save" style="width: 100%; font-size: 18px; padding: 16px 32px;display:inline-block; text-align: center;
            width: 100%;" href="{{ route('setting.invoice') }}">Process payment</a>

        </div>
    </div>
</div>
@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

<script>
    $(".check-inp").on('click', function() {
        let target = $(this).data('target')
        control_accordion(target, 'displayed')
    })

    $(".accordion__input").on('click', function() {
        let target = $(this).data('target')
        control_accordion(target, 'hidden')
    })

    function control_accordion(target, source) {
        $(".accordion__content").hide();
        let ischeck_hid_inp = $("#" + target).is(':checked')
        let ischeck_inp = $("#check-" + target).is(':checked')
        console.log(ischeck_hid_inp, ischeck_inp)
        if (ischeck_inp == true && source == 'displayed') {
            $("#" + target).prop('checked', true)
            $("#check-" + target).prop('checked', true)
            $(`#${target}-content`).show()
        } else if (source == 'hidden') {
            if (ischeck_hid_inp == true) {
                $("#check-" + target).prop('checked', true)
                $(`#${target}-content`).show()
            } else if (ischeck_hid_inp == false) {
                $("#check-" + target).prop('checked', false)
            }

        }
        
    }

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