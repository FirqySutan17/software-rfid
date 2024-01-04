@extends('layouts.master')

@section('title')
Broadcast
@endsection

@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@section('content')
@includeIf('layouts.partials.follow-up')
<div class="main-content follow-up-page">
    <div class="tab-settings bro-tab">
        <div class="tab-left">
            <h2>Aftersale</h2>
        </div>
        <div class="tab-right">

        </div>
    </div>

    <div class="info-follup">
        <i class="fa-solid fa-info circle-icon"></i>
        <p>Kamu bisa melakukan penawaran produk kepada calon pelanggan yang berpotensi menjadi pelanggan kamu,
            terdapat 10 penjadwalan yang bisa dipilih.</p>
    </div>
    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Delivery confirmation</h4>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi
                    langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                    menyenangkan.</p>
                <button class="editBro" data-bs-toggle="modal" data-bs-target="#editDC">Edit text</button>
            </div>
            <div class="right">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus" style="width: 100%">
                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2L15 2" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 10L12 14" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C16.4183 22 20 18.4183 20 14C20 9.58172 16.4183 6 12 6C7.58172 6 4 9.58172 4 14C4 18.4183 7.58172 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Setelah 4 hari pemesanan
                </div>

                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11.5V16.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 7.51L12.01 7.49889" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Delivery confirmation
                </div>
            </div>
        </div>

    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Delivery confirmation</h4>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi
                    langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                    menyenangkan.</p>
                <button class="editBro" data-bs-toggle="modal" data-bs-target="#editDC">Edit text</button>
            </div>
            <div class="right">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus" style="width: 100%">
                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2L15 2" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 10L12 14" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C16.4183 22 20 18.4183 20 14C20 9.58172 16.4183 6 12 6C7.58172 6 4 9.58172 4 14C4 18.4183 7.58172 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Setelah 4 hari pemesanan
                </div>

                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11.5V16.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 7.51L12.01 7.49889" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Delivery confirmation
                </div>
            </div>
        </div>

    </div>

    <div class="broadcast-box">
        <div class="top-box">
            <div class="left">
                <h4>Delivery confirmation</h4>
                <p>Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi
                    langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan
                    menyenangkan.</p>
                <button class="editBro" data-bs-toggle="modal" data-bs-target="#editDC">Edit text</button>
            </div>
            <div class="right">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                </div>
            </div>
        </div>
        <div class="bottom-box">
            <div class="bro-cus" style="width: 100%">
                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2L15 2" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 10L12 14" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C16.4183 22 20 18.4183 20 14C20 9.58172 16.4183 6 12 6C7.58172 6 4 9.58172 4 14C4 18.4183 7.58172 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Setelah 4 hari pemesanan
                </div>

                <div class="list-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11.5V16.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M12 7.51L12.01 7.49889" stroke="black" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                            stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Delivery confirmation
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="editDC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="width: 440px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit text message</h5>
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
                    <textarea id="titleBroadcast" name="title" type="text" class="form-control"
                        placeholder="Input title broadcast" value="Offered"
                        rows="5">Raih kesempatan mendapatkan produk berkualitas dengan harga terjangkau. Dapatkan informasi langsung tentang promo terbaru kami di WhatsApp dan nikmati pengalaman belanja yang mudah dan menyenangkan.</textarea>
                    <!-- error message -->
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


@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

@endpush