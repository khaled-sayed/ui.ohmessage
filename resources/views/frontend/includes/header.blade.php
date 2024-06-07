<!doctype html>
<html lang="en">
  <head>
    <meta name='copyright' content='''>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="chat app, security, mobile application, Communication, best chat app">
    <meta name="title" content="Oh! Message">
    <meta name="description" content="Oh! Message Messenger: More than 8000 thousand  people in over 180 countries use OhMessage to stay in touch with friends and family, anytime and anywhere. Oh Message is free and offers simple, secure, reliable messaging, available on phones all over the world.">
    <meta property="og:url" content="http://ohmessage.com/">
    <meta property="og:type" content="Communication">
    <meta property="og:title" content="Oh! Message">
    <meta property="og:image" content="{{asset("images/ohlogo.png")}}">
    <meta property="og:description" content="Oh! Message Messenger: More than 8000 thousand  people in over 180 countries use OhMessage to stay in touch with friends and family, anytime and anywhere. Oh Message is free and offers simple, secure, reliable messaging, available on phones all over the world.">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Oh Message</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="/"><img src="{{asset("images/ohlogo.png")}}" width="80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    
  </div>
  <form class="form-inline my-2 my-lg-0">
      <a href="lang/<?php if(app()->getLocale() == 'en') echo'ar'; else echo 'en';?>"  class="btn btn-primary languageButton"><?php if(app()->getLocale() == 'en') echo'العربية'; else echo 'English';?></a>
    </form>
</nav>

</div>