@extends('frontend.layouts.main')

@section('content')
    <div class="test" style="position: relative">
        <img style="
        max-height: 479px;
        height: 70%;
        width: 100%;
    " src="{{asset("images/img3.png")}}" class="img-fluid" />
    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.ohmessages"><img class="google-logo"  src="{{asset('images/oh/google.png')}}" alt="google"></a>
    <a target="_blank" href="https://apps.apple.com/ae/app/oh-message/id1576047285"><img class="apple-logo" src="{{asset('images/oh/apple.png')}}" alt="apple"></a>
    
    
    </div>
@endsection