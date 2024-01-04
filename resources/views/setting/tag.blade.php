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
            <h2>Tags</h2>
        </div>
        <div class="tab-right">
            <button class="createBro" data-bs-toggle="modal" data-bs-target="#createTag">Create tags</button>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" style="border-bottom: 0px">Tag</th>
                <th scope="col" style="border-bottom: 0px"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" style="width: 95%">
                    <span class="green-tag"><i class="fa-solid fa-square"></i> Promo</span>
                </td>
                <td>
                    <div class="dropdown-dot">
                        <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                        <div id="myDropdownDot" class="dropdown-content-dot">
                            <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#editTag">
                                Edit tags
                            </button>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td scope="row" style="width: 95%">
                    <span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span>
                </td>
                <td>
                    <div class="dropdown-dot">
                        <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                        <div id="myDropdownDot" class="dropdown-content-dot">
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td scope="row" style="width: 95%">
                    <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span>
                </td>
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