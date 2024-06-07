@extends('frontend.layouts.main')

@section('content')
<div class="container py-5 <?php if(app()->getLocale() != 'en') echo 'mainContent';?>">
    {!!$content !!}
</div>
@endsection