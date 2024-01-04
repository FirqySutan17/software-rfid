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
            <h2>Integration</h2>
        </div>
        <div class="tab-right">
        </div>
    </div>
    <div class="tab-message">
        <button class="tablinks-message" onclick="openInteg(event, 'Tools')" id="defaultOpenInteg">Tools</button>
        <button class="tablinks-message" onclick="openInteg(event, 'Platforms')">Platforms</button>
    </div>
    <hr class="line-tab" style="margin-bottom: 20px">

    <div id="Tools" class="tabcontent-message">
        <div class="integ-wrap">
            <div class="left-integ">
                <img src="{{ asset('icon/whatsapp.png') }}" alt="">
                Whatsapp
            </div>
            <div class="right-integ">
                <button class="connect">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13.1538V21" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M17 8.38452V11.1538C17 12.2583 16.1046 13.1538 15 13.1538H9C7.89543 13.1538 7 12.2583 7 11.1538V8.38452C7 7.27995 7.89543 6.38452 9 6.38452H15C16.1046 6.38452 17 7.27995 17 8.38452Z"
                            stroke-width="1.5" stroke-linecap="round" />
                        <path d="M15.3335 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8.6665 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    Connect
                </button>
            </div>
        </div>

    </div>

    <div id="Platforms" class="tabcontent-message">
        <div class="integ-wrap">
            <div class="left-integ">
                <img src="{{ asset('icon/moc.png') }}" alt="">
                Moc membership
            </div>
            <div class="right-integ">
                <button class="connect active">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13.1538V21" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M17 8.38452V11.1538C17 12.2583 16.1046 13.1538 15 13.1538H9C7.89543 13.1538 7 12.2583 7 11.1538V8.38452C7 7.27995 7.89543 6.38452 9 6.38452H15C16.1046 6.38452 17 7.27995 17 8.38452Z"
                            stroke-width="1.5" stroke-linecap="round" />
                        <path d="M15.3335 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8.6665 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    Connected
                </button>
            </div>
        </div>
        <div class="integ-wrap">
            <div class="left-integ">
                <img src="{{ asset('icon/shopee.png') }}" alt="">
                Shopee
            </div>
            <div class="right-integ">
                <button class="connect">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13.1538V21" stroke-width="1.5" stroke-linecap="round" />
                        <path
                            d="M17 8.38452V11.1538C17 12.2583 16.1046 13.1538 15 13.1538H9C7.89543 13.1538 7 12.2583 7 11.1538V8.38452C7 7.27995 7.89543 6.38452 9 6.38452H15C16.1046 6.38452 17 7.27995 17 8.38452Z"
                            stroke-width="1.5" stroke-linecap="round" />
                        <path d="M15.3335 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M8.6665 6.38462V3" stroke-width="1.5" stroke-linecap="round" />
                    </svg>

                    Connect
                </button>
            </div>
        </div>
    </div>
</div>


@endsection

@push('javascript-external')
<script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('vendor/select2/js/' . app()->getLocale() . '.js') }}"></script>

<script>
    function openInteg(evt, messageName) {
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
    document.getElementById("defaultOpenInteg").click();
</script>
@endpush