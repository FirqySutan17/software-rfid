@extends('layouts.master')

@section('title')
Transaction
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
                <input type="search" id="query" name="q" placeholder="Search transaction"
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
        <table class="table table-w-message">
            <thead>
                <tr>
                    <th scope="col">Transaction number</th>

                    <th scope="col">Subscriber</th>

                    <th scope="col">Package</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="name-cus">
                        MOC-678298
                    </td>
                    <td>
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Anita Sari
                    </td>
                    <td>Professional</td>
                    <td>Yearly</td>
                    <td>Mar 20, 2023</td>
                    <td><span class="red-tag"><i class="fa-solid fa-square"></i> Rejected</span></td>
                    <td>Rp 200.000</td>
                    <td style="text-align: center; width: 5%">
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">
                                <a href="{{ route('transaction.detail') }}">Detail</a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td scope="row" class="name-cus">
                        MOC-678298
                    </td>
                    <td>
                        <img class="img-fluid avatar-style custo-img" src="{{ asset('icon/avatar.png') }}" alt="">
                        &nbsp;
                        Bayu Pramudita
                    </td>
                    <td>Professional</td>
                    <td>Yearly</td>
                    <td>Mar 20, 2023</td>
                    <td><span class="blue-tag"><i class="fa-solid fa-square"></i> Confirmation</span></td>
                    <td>Rp 200.000</td>
                    <td style="text-align: center; width: 5%">
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>

                        </div>
                    </td>
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
      document.getElementById("main").style.marginRight = "23%";
      document.getElementById("mySidebar").style.width = "23%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
      document.getElementById("main").style.marginRight = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
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
@endpush