@extends('layouts.master')

@section('title')
Broadcast
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
<div class="main-content">
    <div class="userHeader" style="padding: 0px">
        <div class="box" style="grid-column: span 1">
            <img class="bro-img" src="{{ asset('img/user.png') }}" alt="">
        </div>
        <div class="box info-user-bro" style="margin: auto; grid-column: span 5;">
            <h2 style="margin-bottom: 0px">Anita Sari</h2>
            <div class="icons" style="margin-bottom: 5px">
                anita@gmail.com
            </div>
        </div>
    </div>

    <div class="tab-settings bro-tab">
        <div class="tab-left">
            <h2>Broadcast</h2>
        </div>
        <div class="tab-right">
            <button class="createBro" data-bs-toggle="modal" data-bs-target="#createBro">Create broadcast</button>
        </div>
    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Offered</h4>
                <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di luar waktu operasional
                    nih.
                    Kami akan segera membalas pesan Anda. Selagi menunggu, mungkin FAQ kami dapat membantu kamu.</p>
                <button class="editBro" data-bs-toggle="modal" data-bs-target="#editBro">Edit text</button>
            </div>
            <div class="right">
                <div class="dropdown-dot">
                    <i onclick="dotDetail()" class="fa-solid fa-ellipsis-vertical dropbtn-dot "></i>
                    <div id="myDropdownDot" class="dropdown-content-dot">
                        <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#editBro">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus">
                <h5>Customer</h5>
                <div class="img-group">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                </div>
            </div>
            <div class="bro-tags">
                <h5>Tags</h5>
                <div class="tags-group">
                    <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span>
                    {{-- <span class="green-tag"><i class="fa-solid fa-square"></i> Done</span> --}}
                    {{-- <span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span> --}}
                </div>
            </div>
        </div>

    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Offered</h4>
                <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di luar waktu operasional
                    nih.
                    Kami akan segera membalas pesan Anda. Selagi menunggu, mungkin FAQ kami dapat membantu kamu.</p>
                <button class="editBro">Edit text</button>
            </div>
            <div class="right">
                <div class="dropdown-dot">
                    <i onclick="dotDetail()" class="fa-solid fa-ellipsis-vertical dropbtn-dot "></i>
                    <div id="myDropdownDot" class="dropdown-content-dot">
                        <button id="detailSubs" data-bs-toggle="modal" data-bs-target="#subDetail">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus">
                <h5>Customer</h5>
                <div class="img-group">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                    <img src="{{ asset('icon/avatar.png') }}" alt="">
                </div>
            </div>
            <div class="bro-tags">
                <h5>Tags</h5>
                <div class="tags-group">
                    <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span>
                    {{-- <span class="green-tag"><i class="fa-solid fa-square"></i> Done</span> --}}
                    {{-- <span class="blue-tag"><i class="fa-solid fa-square"></i> Awaiting payment</span> --}}
                    {{-- <span class="red-tag"><i class="fa-solid fa-square"></i> Offered</span> --}}
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="editBro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit broadcast</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="info-bro">
                    <h4>Panduan pengisian</h4>
                    <p style="margin-bottom: 5px">Text templating berisi data yang dinamis, anda dapar melampirkan data
                        seperti:</p>
                    <ul>
                        <li>Nama dengan memanggil ${nama}</li>
                        <li>Transaksi dengan memanggil ${transaksi}</li>
                        <li>Produk dengan memanggil ${produk}</li>
                    </ul>

                    <p>Contoh penerapannya:</p>
                    <p style="margin-bottom: 0px">
                        Hai kak ${nama},
                        <br>
                        Bagaimana kabarnya? Kemarin lusa sepertinya kakak melakukan transaksi dengan no transaksi
                        ${transaksi} ya yang terdiri dari ${produk}. Apakah sudah diterima kak? Jika ada kendala, jangan
                        sungkan untuk berkabar ya ☺
                    </p>
                </div>
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

                <div class="form-group  _form-group">
                    <select id="select_edit_tag" name="tags[]" data-placeholder="Add tags" class="custom-select"
                        placeholder="Add tags" required multiple>
                        <option value="Offered" selected>Offered</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="contact_edit" name="contact" class="custom-select" tabindex="2">
                        <option>Add contact</option>
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

<div class="modal fade" id="createBro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create broadcast</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="info-bro">
                    <h4>Panduan pengisian</h4>
                    <p style="margin-bottom: 5px">Text templating berisi data yang dinamis, anda dapar melampirkan data
                        seperti:</p>
                    <ul>
                        <li>Nama dengan memanggil ${nama}</li>
                        <li>Transaksi dengan memanggil ${transaksi}</li>
                        <li>Produk dengan memanggil ${produk}</li>
                    </ul>

                    <p>Contoh penerapannya:</p>
                    <p style="margin-bottom: 0px">
                        Hai kak ${nama},
                        <br>
                        Bagaimana kabarnya? Kemarin lusa sepertinya kakak melakukan transaksi dengan no transaksi
                        ${transaksi} ya yang terdiri dari ${produk}. Apakah sudah diterima kak? Jika ada kendala, jangan
                        sungkan untuk berkabar ya ☺
                    </p>
                </div>
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

                <div class="form-group  _form-group">
                    <select id="select_add_tag" name="tags[]" data-placeholder="Add tags" class="custom-select"
                        placeholder="Add tags" required multiple>
                        <option value="Add tag" selected>Add tag</option>
                    </select>
                </div>

                <div class="form-group _form-group">
                    <select id="add_contact" name="contact" class="custom-select" tabindex="2">
                        <option>Add contact</option>
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
    $(function() {
        $('#add_contact').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#select_add_tag').select2({
            theme: 'bootstrap4 select-tags',
            language: "{{ app()->getLocale() }}",
            allowClear: true,

        });

        $('#contact_edit').select2({
            theme: 'bootstrap4 select-modal',
            language: "{{ app()->getLocale() }}"
        });

        $('#select_edit_tag').select2({
            theme: 'bootstrap4 select-tags',
            language: "{{ app()->getLocale() }}",
            allowClear: true,

        });
    });

</script>
@endpush