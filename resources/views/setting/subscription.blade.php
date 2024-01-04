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
    <div class="tab-settings bro-tab setting-tab" style="width: auto">
        <div class="tab-left">
            <h2>Subscription</h2>
        </div>
        <div class="tab-right">

        </div>
    </div>

    <div class="my-plan">
        <h5>My plan</h5>
        <p>Change your plan based on your needs</p>
    </div>

    <div class="plan-choose">
        <div class="plan-title">
            <img src="{{ asset('icon/crown.png') }}" alt="">
            Business
            <span class="year-month">Billed yearly</span>
            <br>
            <p>IDR 1.200.000 <span class="expired">(next renew 24 September 2023)</span></p>
        </div>
        <div class="plan-btn">
            <a href="{{ route('setting.checkout')}}" class="btn-close-modal">Manage plans</a>
            <a href="#" class="btn-save">Explore plans</a>
        </div>
    </div>

    <div class="tab-settings bro-tab" style="width: auto">
        <div class="tab-left">
            <div class="my-plan">
                <h5>Payment history (24)</h5>
                <p>See history of your payment plan invoice</p>
            </div>
        </div>
        <div class="tab-right">
            <button class="createBro" data-bs-toggle="modal" data-bs-target="#createBro">
                <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                        stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                Download all
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-subs">
            <thead>
                <tr>
                    <th scope="col" style="border-bottom: 0px; display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        PAYMENT INVOICE
                    </th>
                    <th scope="col" style="border-bottom: 0px">AMOUNT</th>
                    <th scope="col" style="border-bottom: 0px">DATE</th>
                    <th scope="col" style="border-bottom: 0px">STATUS</th>
                    <th scope="col" style="border-bottom: 0px"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style=" display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        Invoice#0098 -Sep 2022
                    </td>
                    <td style="">Rp1.000.000</td>
                    <td style="">June 12-14, 2020</td>
                    <td><i class="fa-solid fa-circle" style="color: #4361EE"></i> &nbsp; Paid</td>
                    <td style="text-align: center;">
                        <a style="color: #F59E0B; text-align: right; background: transparent; border: none;"
                            href="{{ route('setting.invoice') }}">
                            <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Download all
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style=" display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        Invoice#0098 -Sep 2022
                    </td>
                    <td>Rp1.000.000</td>
                    <td>June 12-14, 2020</td>
                    <td><i class="fa-solid fa-circle" style="color: #4361EE"></i> &nbsp; Paid</td>
                    <td style="text-align: center">
                        <a style="color: #F59E0B; text-align: right; background: transparent; border: none;"
                            href="{{ route('setting.invoice') }}">
                            <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Download all
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style=" display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        Invoice#0098 -Sep 2022
                    </td>
                    <td>Rp1.000.000</td>
                    <td>June 12-14, 2020</td>
                    <td><i class="fa-solid fa-circle" style="color: #F48C06"></i> &nbsp; Unpaid</td>
                    <td style="text-align: center">
                        <a style="color: #F59E0B; text-align: right; background: transparent; border: none;"
                            href="{{ route('setting.invoice') }}">
                            <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Download all
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style=" display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        Invoice#0098 -Sep 2022
                    </td>
                    <td>Rp1.000.000</td>
                    <td>June 12-14, 2020</td>
                    <td><i class="fa-solid fa-circle" style="color: #E5383B"></i> &nbsp; Refund</td>
                    <td style="text-align: center">
                        <a href="#" style="color: #F59E0B; text-align: right; background: transparent; border: none;">
                            <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Download all
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style=" display: flex; align-items: center;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        </div>
                        Invoice#0098 -Sep 2022
                    </td>
                    <td>Rp1.000.000</td>
                    <td>June 12-14, 2020</td>
                    <td><i class="fa-solid fa-circle" style="color: #4361EE"></i> &nbsp; Paid</td>
                    <td style="text-align: center">
                        <a style="color: #F59E0B; text-align: right; background: transparent; border: none;"
                            href="{{ route('setting.invoice') }}">
                            <svg style="margin-right: 8px" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13V22M12 22L15.5 18.5M12 22L8.5 18.5" stroke="#F59E0B" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20 17.6073C21.4937 17.0221 23 15.6889 23 13C23 9 19.6667 8 18 8C18 6 18 2 12 2C6 2 6 6 6 8C4.33333 8 1 9 1 13C1 15.6889 2.50628 17.0221 4 17.6073"
                                    stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Download all
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="modal fade" id="createTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create tags</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group _form-group">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Input tag name" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select color</option>

                    </select>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <button type="submit" class="btn-save">Save</button>
                        <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit tags</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group _form-group">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Input tag name"
                        value="Offered" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Red</option>

                    </select>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <button type="submit" class="btn-save">Save</button>
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