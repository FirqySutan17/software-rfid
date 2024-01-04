@extends('layouts.master')

@section('title')
Customer
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

            <div class="split-btn">
                <button class="btnIm">Add contact</button>
                <div class="dropdown">
                    <button onclick="importContact()" class="svg-btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div id="importCon" class="dropdown-content">
                        <button data-bs-toggle="modal" data-bs-target="#createCustomer">New contact</button>
                        <button data-bs-toggle="modal" data-bs-target="#formUpload">Form .csv/.xls</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="table-content table-responsive">
        <table class="table table-width">
            <thead>
                <tr>
                    <th scope="col">Customer name</th>
                    <th scope="col">Whatsapp number</th>
                    <th scope="col">Message history</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Gender</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="name-cus">
                        @if(Auth::check() && Auth::user()->role === 'member')
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        @endif
                        Anita Sari
                    </th>
                    <td>+62 822-4020-0649</td>
                    <td>Delivery confirmation</td>
                    <td><span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span></td>
                    <td>Female</td>
                    <td>
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">
                                <button id="editBtn" data-bs-toggle="modal" data-bs-target="#editCustomer">Edit</button>
                                <button id="openNav" onclick="w3_open()">Detail</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        @if(Auth::check() && Auth::user()->role === 'member')
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        @endif
                        Bayu Pramudita
                    </th>
                    <td>+62 822-4020-0649</td>
                    <td>Done delivery</td>
                    <td><span class="green-tag"><i class="fa-solid fa-square"></i> Promo</span></td>
                    <td>Female</td>
                    <td><i class="fa-solid fa-ellipsis"></i></td>
                </tr>
                <tr>
                    <th scope="row">
                        @if(Auth::check() && Auth::user()->role === 'member')
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        @endif
                        Dewi Kusuma
                    </th>
                    <td>+62 822-4020-0649</td>
                    <td>Repeat order</td>
                    <td><span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span></td>
                    <td>Female</td>
                    <td><i class="fa-solid fa-ellipsis"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-right profile-sidebar"
    style="right: 0; top: 64px; overflow: hidden" id="mySidebar">
    <div class="userInfo">
        <h5>User info</h5>
        <button onclick="w3_close()"><i class="fa-solid fa-x"></i></button>
    </div>
    <div class="userHeader">
        <div class="box">
            <img src="{{ asset('img/user.png') }}" alt="">
        </div>
        <div class="box">
            <h2>Anita Sari</h2>
            <div class="icons">
                <i class="fa-regular fa-phone"></i>
                +62 822-4020-0649
            </div>
            <div class="icons">
                <i class="fa-regular fa-flag"></i>
                Female
            </div>
            <div class="icons">
                <i class="fa-solid fa-square red-square"></i>
                Offered
            </div>
        </div>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openInfo(event, 'Mh')" id="defaultOpen">Message history</button>
        <button class="tablinks" onclick="openInfo(event, 'Pi')">Purchased items</button>
    </div>

    <div id="Mh" class="tabcontent">
        <div class="itemInfo">
            <div class="infoItem">
                <h3>Delivery confirmation</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>16 Apr</p>
            </div>
        </div>

        <div class="itemInfo">
            <div class="infoItem">
                <h3>Repeat Order</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>16 Apr</p>
            </div>
        </div>

        <div class="itemInfo">
            <div class="infoItem">
                <h3>Done delivery</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>16 Apr</p>
            </div>
        </div>
    </div>

    <div id="Pi" class="tabcontent">
        <div class="itemInfo">
            <div class="infoItem">
                <h3>Delivery confirmation</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>17 Apr</p>
            </div>
        </div>

        <div class="itemInfo">
            <div class="infoItem">
                <h3>Repeat Order</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>17 Apr</p>
            </div>
        </div>

        <div class="itemInfo">
            <div class="infoItem">
                <h3>Done delivery</h3>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatk...</p>
            </div>
            <div class="infoDate">
                <p>17 Apr</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12">
                            <!-- image -->
                            <div class="form-group _form-group">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input name="image" type="file" value="" class="form-control" type='file'
                                            id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload">Change photo</label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url('{{ asset('img/user.png') }}');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end image -->

                            <div class="form-group _form-group">
                                <input id="custoName" name="custo_name" type="text" class="form-control"
                                    placeholder="Write name here.." value="Anita Sari" />
                                <!-- error message -->
                            </div>

                            <div class="form-group _form-group">
                                <input id="custoPhone" name="custo_phone" type="text" class="form-control"
                                    placeholder="Write phone here.." value="+62 822-4020-0649" />
                                <!-- error message -->
                            </div>

                            <div class="form-group  _form-group">
                                <select id="select_tag" name="tags[]" data-placeholder="Choose tags"
                                    class="custom-select" required multiple>
                                    <option value="Offered" selected>Offered
                                    </option>
                                    <option value="Awaiting payment" selected>Awaiting payment
                                    </option>

                                </select>
                            </div>

                            <div class="form-group" style="padding: 0px 10px">
                                <label for="input_gender" class="font-weight-bold">
                                    Gender
                                </label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male">
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                checked>
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-12">
                                    <button type="submit" class="btn-save">Save</button>
                                    <a href="#" class="btn-close-modal" data-bs-dismiss="modal"
                                        aria-label="Close">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12">
                            <!-- image -->
                            <div class="form-group _form-group">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input name="image" type="file" value="" class="form-control" type='file'
                                            id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload" class="add-photo">Add photo</label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url('{{ asset('img/user.png') }}');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end image -->

                            <div class="form-group _form-group">
                                <input id="custoName" name="custo_name" type="text" class="form-control"
                                    placeholder="Input customer name" />
                                <!-- error message -->
                            </div>

                            <div class="form-group _form-group">
                                <input id="custoPhone" name="custo_phone" type="text" class="form-control"
                                    placeholder="Input customer phone" />
                                <!-- error message -->
                            </div>

                            <div class="form-group  _form-group">
                                <select id="select_add_tag" name="tags[]" data-placeholder="Add tags"
                                    class="custom-select" placeholder="Add tags" required multiple>

                                </select>
                            </div>

                            <div class="form-group" style="padding: 0px 10px">
                                <label for="input_gender" class="font-weight-bold">
                                    Gender
                                </label>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male">
                                            <label class="form-check-label" for="male">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female">
                                            <label class="form-check-label" for="female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-12">
                                    <button type="submit" class="btn-save">Save</button>
                                    <a href="#" class="btn-close-modal" data-bs-dismiss="modal"
                                        aria-label="Close">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="formUpload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12">
                            <div class="upload-files-container">
                                <div class="drag-file-area">
                                    <span class="material-icons-outlined upload-icon"> <i
                                            class="fa-solid fa-arrow-up-from-bracket"></i> </span>
                                    <h3 class="dynamic-message"> Upload file </h3>
                                    <label class="label"> <span class="browse-files"> <input type="file"
                                                class="default-file-input" /> <span class="browse-files-text">browse
                                                file</span> <span>from device</span> </span> </label>
                                </div>
                                <span class="cannot-upload-message"> <span class="material-icons-outlined"><i
                                            class="fa-regular fa-circle-exclamation"></i></span>
                                    Please select a file first
                                    {{-- <span class="material-icons-outlined cancel-alert-button">cancel</span> --}}
                                </span>
                                <div class="file-block">
                                    <div class="file-info"> <span class="material-icons-outlined file-icon"><i
                                                class="fa-regular fa-file"></i></span> <span class="file-name"> </span>
                                        | <span class="file-size"> </span> </div>
                                    {{-- <span class="material-icons remove-file-icon">delete</span> --}}
                                    <div class="progress-bar"> </div>
                                </div>
                                <button type="button" class="upload-button"> Upload </button>
                            </div>
                        </div>
                    </div>
                </form>
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
    function importContact() {
      document.getElementById("importCon").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.svg-btn')) {
        var dropdownsImpo = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdownsImpo.length; i++) {
          var openDropdownImpo = dropdownsImpo[i];
          if (openDropdownImpo.classList.contains('show')) {
            openDropdownImpo.classList.remove('show');
          }
        }
      }
    }
</script>

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

<script>
    var editCustomer = document.getElementById('editCustomer')
    var editBtn = document.getElementById('editBtn')

    editCustomer.addEventListener('shown.bs.modal', function () {
    editBtn.focus()
    })
</script>

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
    $(function() {
        $('#select_tag').select2({
            theme: 'bootstrap4 select-tags',
            language: "{{ app()->getLocale() }}",
            allowClear: true,

        });
    });

    $(function() {
        $('#select_add_tag').select2({
            theme: 'bootstrap4 select-tags',
            language: "{{ app()->getLocale() }}",
            allowClear: true,

        });
    });
</script>

<script>
    function w3_open() {
        var sidebarNav = document.getElementById("mySidebar");
      sidebarNav.classList.remove("close-sidebar");
      sidebarNav.classList.add("open-sidebar");
    }
    function w3_close() {
        var sidebarNav = document.getElementById("mySidebar");
      sidebarNav.classList.remove("open-sidebar");
      sidebarNav.classList.add("close-sidebar");
    }
</script>

<script>
    function openInfo(evt, infoName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(infoName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<script>
    var isAdvancedUpload = function() {
  var div = document.createElement('div');
  return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
}();

let draggableFileArea = document.querySelector(".drag-file-area");
let browseFileText = document.querySelector(".browse-files");
let uploadIcon = document.querySelector(".upload-icon");
let dragDropText = document.querySelector(".dynamic-message");
let fileInput = document.querySelector(".default-file-input");
let cannotUploadMessage = document.querySelector(".cannot-upload-message");
let cancelAlertButton = document.querySelector(".cancel-alert-button");
let uploadedFile = document.querySelector(".file-block");
let fileName = document.querySelector(".file-name");
let fileSize = document.querySelector(".file-size");
let progressBar = document.querySelector(".progress-bar");
let removeFileButton = document.querySelector(".remove-file-icon");
let uploadButton = document.querySelector(".upload-button");
let fileFlag = 0;

fileInput.addEventListener("click", () => {
	fileInput.value = '';
	console.log(fileInput.value);
});

fileInput.addEventListener("change", e => {
	console.log(" > " + fileInput.value)
	uploadIcon.innerHTML = '<i class="fa-solid fa-check"></i>';
	dragDropText.innerHTML = 'File Dropped Successfully!';
	document.querySelector(".label").innerHTML = `<span class="browse-files"> <input type="file" class="default-file-input" style=""/> <span class="browse-files-text" style="top: 0;"> browse file</span></span>`;
	uploadButton.innerHTML = `Upload`;
	fileName.innerHTML = fileInput.files[0].name;
	fileSize.innerHTML = (fileInput.files[0].size/1024).toFixed(1) + " KB";
	uploadedFile.style.cssText = "display: flex;";
	progressBar.style.width = 0;
	fileFlag = 0;
});

uploadButton.addEventListener("click", () => {
	let isFileUploaded = fileInput.value;
	if(isFileUploaded != '') {
		if (fileFlag == 0) {
    		fileFlag = 1;
    		var width = 0;
    		var id = setInterval(frame, 50);
    		function frame() {
      			if (width >= 390) {
        			clearInterval(id);
					uploadButton.innerHTML = `<span class="material-icons-outlined upload-button-icon"> <i class="fa-solid fa-check"></i> </span> Uploaded`;
      			} else {
        			width += 5;
        			progressBar.style.width = width + "px";
      			}
    		}
  		}
	} else {
		cannotUploadMessage.style.cssText = "display: flex; animation: fadeIn linear 1.5s;";
	}
});

cancelAlertButton.addEventListener("click", () => {
	cannotUploadMessage.style.cssText = "display: none;";
});

if(isAdvancedUpload) {
	["drag", "dragstart", "dragend", "dragover", "dragenter", "dragleave", "drop"].forEach( evt => 
		draggableFileArea.addEventListener(evt, e => {
			e.preventDefault();
			e.stopPropagation();
		})
	);

	["dragover", "dragenter"].forEach( evt => {
		draggableFileArea.addEventListener(evt, e => {
			e.preventDefault();
			e.stopPropagation();
			uploadIcon.innerHTML = '<i class="fa-regular fa-download"></i>';
			dragDropText.innerHTML = 'Drop your file here!';
		});
	});

	draggableFileArea.addEventListener("drop", e => {
		uploadIcon.innerHTML = '<i class="fa-solid fa-check"></i>';
		dragDropText.innerHTML = 'File Dropped Successfully!';
		document.querySelector(".label").innerHTML = `drag & drop or <span class="browse-files"> <input type="file" class="default-file-input" style=""/> <span class="browse-files-text" style="top: -23px; left: -20px;"> browse file</span> </span>`;
		uploadButton.innerHTML = `Upload`;
		
		let files = e.dataTransfer.files;
		fileInput.files = files;
		console.log(files[0].name + " " + files[0].size);
		console.log(document.querySelector(".default-file-input").value);
		fileName.innerHTML = files[0].name;
		fileSize.innerHTML = (files[0].size/1024).toFixed(1) + " KB";
		uploadedFile.style.cssText = "display: flex;";
		progressBar.style.width = 0;
		fileFlag = 0;
	});
}

removeFileButton.addEventListener("click", () => {
	uploadedFile.style.cssText = "display: none;";
	fileInput.value = '';
	uploadIcon.innerHTML = '<i class="fa-solid fa-arrow-up-from-bracket"></i>';
	dragDropText.innerHTML = 'Drag & drop any file here';
	document.querySelector(".label").innerHTML = `or <span class="browse-files"> <input type="file" class="default-file-input"/> <span class="browse-files-text">browse file</span> <span>from device</span> </span>`;
	uploadButton.innerHTML = `Upload`;
});
</script>
@endpush