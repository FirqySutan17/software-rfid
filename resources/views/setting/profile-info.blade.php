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
            <h2>Profile info</h2>
        </div>
        <div class="tab-right">

        </div>
    </div>
    <div class="profile-info">
        <p>Photo profile</p>
        <form action="" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row d-flex align-items-stretch">
                <div class="col-12">
                    <!-- image -->
                    <div class="form-group _form-group">
                        <div class="avatar-upload" style="margin: 0px">
                            <div class="avatar-edit">
                                <input name="image" type="file" value="" class="form-control" type='file'
                                    id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload">Change photo</label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url('{{ asset('img/user.png') }}');">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end image -->

                    <div class="form-group _form-group">
                        <label for="fullname">
                            Fullname
                        </label>
                        <input id="fullname" name="fullname" type="text" class="form-control"
                            placeholder="Input fullname" value="Anita Sari" />
                    </div>

                    <div class="form-group _form-group">
                        <label for="email">
                            Email
                        </label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Input email"
                            value="anita@gmail.com" />
                    </div>

                    <div class="form-group _form-group">
                        <label for="phone">
                            Phone
                        </label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"
                                style="border-top-left-radius: 8px; border-bottom-left-radius: 8px">+62</span>
                            <input type="number" class="form-control" placeholder="8123456789" aria-label="8123456789"
                                value="8123456789">
                        </div>
                    </div>

                    <h4>Change password</h4>

                    <div class="form-group _form-group">
                        <label for="currentPassword">
                            Current password
                        </label>
                        <div class="input-box">
                            <input type="password" name="password" autocomplete="current-password" required=""
                                id="id_password" placeholder="Type current password">
                            <i class="fa fa-eye-slash" id="togglePassword"
                                style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>

                    <div class="form-group _form-group">
                        <label for="newPassword">
                            New password
                        </label>
                        <div class="input-box">
                            <input type="password" name="password" autocomplete="new-password" required=""
                                id="id_new_password" placeholder="Type new password">
                            <i class="fa fa-eye-slash" id="togglenewPassword"
                                style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>

                    <div class="form-group _form-group">
                        <label for="confirmPassword">
                            Confirm password
                        </label>
                        <div class="input-box">
                            <input type="password" name="password" autocomplete="confirm-password" required=""
                                id="id_confirm_password" placeholder="Type confirm password">
                            <i class="fa fa-eye-slash" id="toggleconfirmPassword"
                                style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; margin-bottom: 30px">
                        <div class="col-12">
                            <button type="submit" class="btn-save">Save</button>
                            <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

<script>
    function readURL(input) {
    	if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#imagePreview').css('background-image', 'url('+e.target.result +')');
				$('#imagePreview').hide();
				$('#imagePreview').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imageUpload").change(function() {
		readURL(this);
	});
</script>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye');
    });

    const togglenewPassword = document.querySelector('#togglenewPassword');
    const passwordNew = document.querySelector('#id_new_password');

    togglenewPassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = passwordNew.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordNew.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye');
    });

    const toggleconfirmPassword = document.querySelector('#toggleconfirmPassword');
    const passwordConfirm = document.querySelector('#id_confirm_password');

    toggleconfirmPassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = passwordConfirm.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordConfirm.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye');
    });
</script>
@endpush