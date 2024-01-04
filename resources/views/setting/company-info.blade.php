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
<div class="main-content follow-up-page">
    <div class="tab-settings bro-tab setting-tab">
        <div class="tab-left">
            <h2>Company info</h2>
        </div>
        <div class="tab-right">

        </div>
    </div>
    <div class="profile-info">
        <form action="" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row d-flex align-items-stretch">
                <div class="col-12">
                    <div class="form-group _form-group">
                        <label for="company">
                            Company name
                        </label>
                        <input id="company" name="company" type="text" class="form-control" placeholder="Input company"
                            value="Anita Sari" aria-describedby="emailHelp" />
                        <div id="emailHelp" class="form-text"
                            style="font-family: pjsReguler; font-size: 12px; color: #0F172A; margin-left: 5px">The
                            company name will be
                            shown on your WhatsApp Business
                            and known by your customers.</div>
                    </div>

                    <div class="form-group _form-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Industry</option>

                        </select>
                    </div>

                    <div class="form-group _form-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Number of employees</option>

                        </select>
                    </div>

                    {{-- <div class="row" style="margin-top: 30px; margin-bottom: 30px">
                        <div class="col-12">
                            <button type="submit" class="btn-save">Save</button>
                            <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

@endpush