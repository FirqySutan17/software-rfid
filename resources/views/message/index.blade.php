@extends('layouts.master')

@section('title')
Message templating
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="main-content">
    <div class="tab-message">
        <button class="tablinks-message" onclick="openMessage(event, 'Td')" id="defaultOpenMessage">Template
            default</button>
        <button class="tablinks-message" onclick="openMessage(event, 'Ct')">Custom text</button>
    </div>
    <hr class="line-tab">

    <div id="Td" class="tabcontent-message">
        <div class="wrap-temp">
            <button class="new-template" data-bs-toggle="modal" data-bs-target="#newTemplate">New template</button>
        </div>
        <div class="table-content table-responsive">
            <table class="table table-w-message">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Sub-category</th>
                        <th scope="col">Item</th>
                        <th scope="col">Message</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            Offeres
                        </td>
                        <td>Auto follow-up</td>
                        <td>Potential market</td>
                        <td>Offered</td>
                        <td style="width: 48%">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau.
                            Dapatkan informasi
                            langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah
                            dan menyenangkan.</td>
                        <td style="width: 5%; text-align: center">
                            <div class="dropdown-dot">
                                <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                                <div id="myDropdownDot" class="dropdown-content-dot">
                                    <button data-bs-toggle="modal" data-bs-target="#editBro">
                                        Edit broadcast
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            Offeres
                        </td>
                        <td>Auto follow-up</td>
                        <td>Transaction</td>
                        <td>Offered</td>
                        <td style="width: 48%">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau.
                            Dapatkan informasi
                            langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah
                            dan menyenangkan.</td>
                        <td style="width: 5%; text-align: center">
                            <div class="dropdown-dot">
                                <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="Ct" class="tabcontent-message table-responsive">
        <table class="table table-w-message">
            <thead>
                <tr>
                    <th scope="col">Member</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub-category</th>
                    <th scope="col">Item</th>
                    <th scope="col">Message</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        anita@gmail.com
                    </td>
                    <td>Offeres</td>
                    <td>Auto follow-up</td>
                    <td>Potential market</td>
                    <td>Offered</td>
                    <td style="width: 28%">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau.
                        Dapatkan informasi
                        langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                        menyenangkan.</td>
                    <td style="width: 5%; text-align: center">
                        <div class="dropdown-dot">
                            <i onclick="dotDetail()" class="fa-solid fa-ellipsis dropbtn-dot "></i>
                            <div id="myDropdownDot" class="dropdown-content-dot">

                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td scope="row">
                        anita@gmail.com
                    </td>
                    <td>Offeres</td>
                    <td>Auto follow-up</td>
                    <td>Potential market</td>
                    <td>Offered</td>
                    <td style="width: 28%">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau.
                        Dapatkan informasi
                        langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                        menyenangkan.</td>
                    <td style="width: 5%; text-align: center">
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

<div class="modal fade" id="editBro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group _form-group">
                    <input id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Input title broadcast" value="Offered" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <textarea id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Input title broadcast" value="Offered" rows="5">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan menyenangkan.
                    </textarea>
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <select id="category" name="category" class="custom-select" tabindex="2">
                        <option value="Auto follow-up">Auto follow-up</option>
                        <option value="Broadcast">Broadcast</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="sub-category" name="sub-category" class="custom-select" tabindex="2">
                        <option value="Potential market">Potential market</option>
                        <option value="Transaction">Transaction</option>
                        <option value="Aftersale">Aftersale</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="item" name="item" class="custom-select" tabindex="2">
                        <option value="Offered">Offered</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <button type="submit" class="btn-save">Create</button>
                        <a href="#" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="newTemplate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group _form-group">
                    <input id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Input title broadcast" />
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <textarea id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Add text sample" rows="5"></textarea>
                    <!-- error message -->
                </div>

                <div class="form-group _form-group">
                    <select id="category-create" name="category-create" class="custom-select" tabindex="2">
                        <option value="Category">Category</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="sub-category-create" name="sub-category-create" class="custom-select" tabindex="2">
                        <option value="Sub category">Sub category</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="item-create" name="item-create" class="custom-select" tabindex="2">
                        <option value="Item">Item</option>
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

<script>
    function openMessage(evt, messageName) {
      var i, tabcontentMessage, tablinks;
      tabcontentMessage = document.getElementsByClassName("tabcontent-message");
      for (i = 0; i < tabcontentMessage.length; i++) {
        tabcontentMessage[i].style.display = "none";
      }
      tablinksMessage = document.getElementsByClassName("tablinks-message");
      for (i = 0; i < tablinksMessage.length; i++) {
        tablinksMessage[i].className = tablinksMessage[i].className.replace(" active", "");
      }
      document.getElementById(messageName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpenMessage").click();
</script>

<script>
    $(function() {
        $('#category').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#sub-category').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#item').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#category-create').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#sub-category-create').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#item-create').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });
    });
</script>

@endpush