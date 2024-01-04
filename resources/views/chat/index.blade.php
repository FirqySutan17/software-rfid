@extends('layouts.master')

@section('title')
Chat
@endsection

@section('content')
<div class="main-content" style="padding: 0px">
    <div class="main-container">
        <div id="contactList" class="left-container">
            <!--chats -->
            <div class="chat-list">
                <div class="chat-box" onclick="closeslideContact()">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://lh5.googleusercontent.com/-7ssjf_mDE1Q/AAAAAAAAAAI/AAAAAAAAASo/tioYx2oklWEHoo5nAEyCT-KeLxYqE5PuQCLcDEAE/s100-c-k-no-mo/photo.jpg"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Nowfal</h4>
                            <p class="time unread">11:49</p>
                        </div>
                        <div class="text-message">
                            <p>“How are you?”</p>
                            <b>1</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Rohan</h4>
                            <p class="time unread">10:49</p>
                        </div>
                        <div class="text-message">
                            <p>“I’ll be there.”</p>
                            <b>4</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/8367221/pexels-photo-8367221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Zoya</h4>
                            <p class="time unread">09:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Make somebody’s day.”</p>
                            <b>2</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/1382731/pexels-photo-1382731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Ava</h4>
                            <p class="time">08:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Dreams come true.”</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box active">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2474307/pexels-photo-2474307.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Leo</h4>
                            <p class="time">07:49</p>
                        </div>
                        <div class="text-message">
                            <p>Awesome! I'll start a vid..</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/3564412/pexels-photo-3564412.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Azariah</h4>
                            <p class="time">06:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Love, light, laughter.”</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2919367/pexels-photo-2919367.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Oliver</h4>
                            <p class="time unread">Yesterday</p>
                        </div>
                        <div class="text-message">
                            <p>“Appreciate the mome..”</p>
                            <b>2</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/14526673/pexels-photo-14526673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Jeslin</h4>
                            <p class="time">Yesterday</p>
                        </div>
                        <div class="text-message">
                            <p>“Now or never.”</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://lh5.googleusercontent.com/-7ssjf_mDE1Q/AAAAAAAAAAI/AAAAAAAAASo/tioYx2oklWEHoo5nAEyCT-KeLxYqE5PuQCLcDEAE/s100-c-k-no-mo/photo.jpg"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Nowfal</h4>
                            <p class="time unread">11:49</p>
                        </div>
                        <div class="text-message">
                            <p>“How are you?”</p>
                            <b>1</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Rohan</h4>
                            <p class="time unread">10:49</p>
                        </div>
                        <div class="text-message">
                            <p>“I’ll be there.”</p>
                            <b>4</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/8367221/pexels-photo-8367221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Zoya</h4>
                            <p class="time unread">09:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Make somebody’s day.”</p>
                            <b>2</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/1382731/pexels-photo-1382731.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Ava</h4>
                            <p class="time">08:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Dreams come true.”</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2474307/pexels-photo-2474307.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Leo</h4>
                            <p class="time">07:49</p>
                        </div>
                        <div class="text-message">
                            <p>Awesome! I'll start a vid..</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/3564412/pexels-photo-3564412.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Azariah</h4>
                            <p class="time">06:49</p>
                        </div>
                        <div class="text-message">
                            <p>“Love, light, laughter.”</p>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/2919367/pexels-photo-2919367.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Oliver</h4>
                            <p class="time unread">Yesterday</p>
                        </div>
                        <div class="text-message">
                            <p>“Appreciate the mome..”</p>
                            <b>2</b>
                        </div>
                    </div>
                </div>
                <div class="chat-box">
                    <div class="img-box">
                        <img class="img-cover"
                            src="https://images.pexels.com/photos/14526673/pexels-photo-14526673.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <div class="chat-details">
                        <div class="text-head">
                            <h4>Jeslin</h4>
                            <p class="time">Yesterday</p>
                        </div>
                        <div class="text-message">
                            <p>“Now or never.”</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <div class="right-container">
            <!--header -->
            <div class="header">
                <div class="img-text">
                    <i class="fa-solid fa-arrow-left arrow-back-chat" onclick="openslideContact()"></i>
                    <div class="user-img">
                        <img class="dp"
                            src="https://images.pexels.com/photos/2474307/pexels-photo-2474307.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="">
                    </div>
                    <h4>Leo</h4>
                </div>
                <div class="nav-icons">
                    <li id="openNav" onclick="w3_open()"><i class="fa-solid fa-ellipsis-vertical"></i></li>
                </div>
            </div>

            <!--chat-container -->
            <div class="chat-container">
                <div class="message-box my-message">
                    <p>Thanks, Dear, atas pesannya. Ditunggu, ya. Admin bakal membalas pesan kamu
                        secepatnya.<br><span>07:43</span></p>
                </div>
                <div class="message-box friend-message">
                    <p>Ahh, I can't believe you do too!<br><span>07:45</span></p>
                </div>
                <div class="message-box friend-message">
                    <p>The trailer looks good<br><span>07:45</span></p>
                </div>
                <div class="message-box friend-message">
                    <p>I've been waiting to watch it!!<br><span>07:45</span></p>
                </div>
                <div class="message-box my-message">
                    <p>😐😐😐<br><span>07:46</span></p>
                </div>
                <div class="message-box my-message">
                    <p>Mee too! 😊<br><span>07:46</span></p>
                </div>
                <div class="message-box friend-message">
                    <p>We should video chat to discuss, if you're up for it!<br><span>07:48</span></p>
                </div>
                <div class="date-chat">
                    <p>Today</p>
                </div>
                <div class="message-box my-message">
                    <p>Sure<br><span>07:48</span></p>
                </div>
                <div class="message-box my-message">
                    <p>I'm free now!<br><span>07:48</span></p>
                </div>
                <div class="message-box friend-message">
                    <p>Awesome! I'll start a video chat with you in a few.<br><span>07:49</span></p>
                </div>
            </div>

            <!--input-bottom -->
            <div class="inside-chatbox">
                <div class="chatbox-input">

                    {{-- <button>
                        <i class="fa-regular fa-face-smile"></i>
                    </button> --}}
                    <button data-bs-toggle="modal" data-bs-target="#formUpload">
                        <i class="fa-sharp fa-solid fa-paperclip"></i>
                    </button>
                    <textarea type="text" placeholder="Type a message"
                        style="width: 100%; border: none; padding: 10px; height: 46px; margin-right: 10px"></textarea>
                    <button class="btnSend">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 12L3 20L6.5625 12L3 4L22 12Z" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6.5 12L22 12" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </button>
                </div>

            </div>
        </div>

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

<div class="modal fade" id="newChat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New chat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12">
                            <div class="tab-settings" style="padding-bottom: 10px">
                                <div class="tab-left"
                                    style="width: 100%; border: 1px solid #E2E8F0; border-radius: 8px; padding: 6px;">
                                    <form role="search" id="form">
                                        <input type="search" id="query" name="q" placeholder="Search..."
                                            aria-label="Search through site content">
                                        <button class="search-btn" style="margin-right: 6px">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17 17L21 21" stroke="black" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </form>
                                </div>
                                <div class="tab-right" style="width: 0%">
                                </div>

                            </div>

                            <div class="form-new">
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anisa sari</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Bayu Pramudita</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anisa Dewi</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anita sari</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Desi Amelia</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Doni Prasetyo</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Dewi Kusuma</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anisa sari</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Bayu Pramudita</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anisa Dewi</p>
                                </button>
                                <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anita sari</p>
                                </button>
                                {{-- <button class="modal-chat">
                                    <img class="img-fluid brand-style" src="{{ asset('icon/avatar.png') }}" alt="">
                                    <p class="breadcrumb b-style">Anisa sari</p>
                                </button> --}}

                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-12">
                                    <button type="submit" class="btn-save">Write message</button>
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

<div class="modal fade" id="newBroadcast" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New broadcast</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12">
                            <div class="tab-settings" style="padding-bottom: 10px">
                                <div class="tab-left"
                                    style="width: 100%; border: 1px solid #E2E8F0; border-radius: 8px; padding: 6px;">
                                    <form role="search" id="form">
                                        <input type="search" id="query" name="q" placeholder="Search..."
                                            aria-label="Search through site content">
                                        <button class="search-btn" style="margin-right: 6px">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17 17L21 21" stroke="black" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M3 11C3 15.4183 6.58172 19 11 19C13.213 19 15.2161 18.1015 16.6644 16.6493C18.1077 15.2022 19 13.2053 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </button>
                                    </form>
                                </div>
                                <div class="tab-right" style="width: 0%">
                                </div>

                            </div>

                            <div class="form-new">
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>
                                <button class="modal-broad">
                                    <h5>Offered</h5>
                                    <p>Terima kasih sudah menghubungi kami. Tapi, sayangnya kamu menghubungi kami di
                                        luar waktu operasional nih...</p>
                                </button>

                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-12">
                                    <button type="submit" class="btn-save">Send</button>
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
    function openslideContact() {
        var slideContact = document.getElementById("contactList");
      slideContact.classList.remove("close-slide");
      slideContact.classList.add("open-slide");
    }
    function closeslideContact() {
        var slideContact = document.getElementById("contactList");
      slideContact.classList.remove("open-slide");
      slideContact.classList.add("close-slide");
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