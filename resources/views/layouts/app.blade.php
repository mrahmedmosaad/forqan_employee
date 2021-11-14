<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="{{ asset('js/toastr.min.js') }}" defer></script> --}}
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"/> --}}
        @livewireStyles
        {{-- @toastr_css --}}
        <style>
            .breaking-news , .badge{
                 color: rgb(157, 255, 0);
                 text-shadow: 1px 2px rgb(58, 58, 59);
             }
             .rtl{direction:rtl!important;}
     .ltr{direction:ltr!important;}
       
       
       
       </style>
<style>
    .dropbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #ddd;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>

<style>
    svg:hover{
        cursor: pointer;
        fill-opacity: 0.4;
        fill: #093079;
    }
       svg:active{
        cursor: pointer;
        fill-opacity: 0.1;
        fill: #223fc4;
    }     svg{
            width: 33px;
    }
    .svgsm:hover{
        cursor: pointer;
        fill-opacity: 0.4;
        fill: #093079;
    }
    .svgsm:active{
        cursor: pointer;
        fill-opacity: 0.1;
        fill: #223fc4;
    }     svg{
            width: 30px;
    }
    
.svgsm{
     width: 24px ; 
    }
.svgvsm:hover{
        cursor: pointer;
        fill-opacity: 0.4;
        fill: #094fd1;
    }
    .svgvsm:active{
        cursor: pointer;
        fill-opacity: 0.1;
        fill: #162a85;
    
     }
.svgvsm{
     width: 15px ; 
    }
    /* .icoview{
        background: url('/icon/view.svg') no-repeat;
    } */
</style>







<style>
    .form-input {
      position: relative;
      font-family: "Source Sans Pro", sans-serif;
      font-weight: 600;
      width: 100%;
      text-align: center;
      /* min-width:   25px; */
      height: 40px;
      border: none;
      padding: 0 4px;
      box-shadow: none;
      outline: none;
      -webkit-transition: all .2s ease;
         -moz-transition: all .2s ease;
          -ms-transition: all .2s ease;
           -o-transition: all .2s ease;
              transition: all .2s ease;
    }
    .form-input.round {
      border-radius: 20px;
    }
    .form-input.basic {
      border: 1px solid rgba(0, 0, 0, .15);
    }
    .form-input.basic:hover {
      border-color: rgba(0, 0, 0, .35);
      box-shadow: 0 0 5px rgba(0, 0, 0, .2);
    }
    .form-input.basic:focus {
      border-color: #4285F4;
      box-shadow: 0 0 10px rgba(66, 133, 244, .5);
    
    
    }
      input:focus{
        border-color: #4285F4;
      box-shadow: 0 0 10px rgba(66, 133, 244, .5);
      }
      }
      input:hover{
        border-color: #4285F4;
      box-shadow: 0 0 10px rgba(66, 133, 244, .5) !important ;
      }    
      form-control:focus{
        border-color: #4285F4;
      box-shadow: 0 0 10px rgba(66, 133, 244, .5);
      }
    
    
    
    
    
      .spantext 
    {
        border: solid 1px black;
    }
     
    .form-control:focus,
    textarea:focus,
    select:focus,
input[type="text"]:focus,
/* input[type="select"]:focus, */
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {   
  border-color: rgba(133, 104, 239, 0.8);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(104, 147, 239, 0.6);
  outline: 0 none;
}

.form-control:hover,
textarea:hover,
    select:hover,
input[type="text"]:hover,
/* input[type="select"]:hover, */
input[type="password"]:hover,
input[type="datetime"]:hover,
input[type="datetime-local"]:hover,
input[type="date"]:hover,
input[type="month"]:hover,
input[type="time"]:hover,
input[type="week"]:hover,
input[type="number"]:hover,
input[type="email"]:hover,
input[type="url"]:hover,
input[type="search"]:hover,
input[type="tel"]:hover,
input[type="color"]:hover,
.uneditable-input:hover {   
  /* border-color: rgba(7, 151, 156, 0.712); */
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(104, 178, 239, 0.6);
  outline: 0 none;
}

.noborder{
    padding: 0;
border: none;
background: none;
}



    
    </style>

{{-- search --}}
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font: 16px Arial;  
    }
    
    /*the container must be positioned relative:*/
    .autocomplete {
      position: relative;
      display: inline-block;
    }
    
    input {
      border: 1px solid transparent;
      background-color: #f1f1f1;
      padding: 10px;
      font-size: 16px;
    }
    
    input[type=text] {
      background-color: #f1f1f1;
      width: 100%;
    }
    
    input[type=submit] {
      background-color: DodgerBlue;
      color: #fff;
      cursor: pointer;
    }
    
    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      /*position the autocomplete items to be the same width as the container:*/
      top: 100%;
      left: 0;
      right: 0;
    }
    
    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff; 
      border-bottom: 1px solid #d4d4d4; 
    }
    
    /*when hovering an item:*/
    .autocomplete-items div:hover {
      background-color: #e9e9e9; 
    }
    
    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
      background-color: DodgerBlue !important; 
      color: #ffffff; 
    }
    </style>
{{-- search --}}
{{-- box shadow --}}
  <style>
  
.box {
    width: 600px;
    background: #fff;
    margin: 0 auto;
    /* height: 150px; */
    }

.box h2 {
    text-align: center;
    position: relative;
    top: 50px;
    }

.effect {
    position: relative;
    }

.effect:after, .effect:before {
    content: "";
    background: #777;
    width: 300px;
    position: absolute;
    bottom: 15px;
    top: 70%;
    -moz-transform: rotate(-3deg);
    -ms-transform: rotate(-3deg);
    -o-transform: rotate(-3deg);
    -webkit-transform: rotate(-3deg);
    transform: rotate(-3deg);
    -moz-box-shadow: 0 15px 10px #777;
    -webkit-box-shadow: 0 15px 10px #777;
    box-shadow: 0 15px 3px #777;
    left: 10px;
    z-index: -1;
    }

.effect:before {
    right: 10px;
    -moz-transform: rotate(3deg);
    -ms-transform: rotate(3deg);
    -o-transform: rotate(3deg);
    -webkit-transform: rotate(3deg);
    transform: rotate(3deg);
    left: auto;
    }  </style>
    {{-- 
      <div class="box effect">
      <h2>
         Shadow Style 1
      </h2>
 </div>
  --}}
  {{-- load awsome --}}
  <style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-square-jelly-box,
.la-square-jelly-box > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-square-jelly-box {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-square-jelly-box.la-dark {
    color: #333;
}
.la-square-jelly-box > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-square-jelly-box {
    width: 32px;
    height: 32px;
}
.la-square-jelly-box > div:nth-child(1),
.la-square-jelly-box > div:nth-child(2) {
    position: absolute;
    left: 0;
    width: 100%;
}
.la-square-jelly-box > div:nth-child(1) {
    top: -25%;
    z-index: 1;
    height: 100%;
    border-radius: 10%;
    -webkit-animation: square-jelly-box-animate .6s -.1s linear infinite;
       -moz-animation: square-jelly-box-animate .6s -.1s linear infinite;
         -o-animation: square-jelly-box-animate .6s -.1s linear infinite;
            animation: square-jelly-box-animate .6s -.1s linear infinite;
}
.la-square-jelly-box > div:nth-child(2) {
    bottom: -9%;
    height: 10%;
    background: #000;
    border-radius: 50%;
    opacity: .2;
    -webkit-animation: square-jelly-box-shadow .6s -.1s linear infinite;
       -moz-animation: square-jelly-box-shadow .6s -.1s linear infinite;
         -o-animation: square-jelly-box-shadow .6s -.1s linear infinite;
            animation: square-jelly-box-shadow .6s -.1s linear infinite;
}
.la-square-jelly-box.la-sm {
    width: 16px;
    height: 16px;
}
.la-square-jelly-box.la-2x {
    width: 64px;
    height: 64px;
}
.la-square-jelly-box.la-3x {
    width: 96px;
    height: 96px;
}
/*
 * Animations
 */
@-webkit-keyframes square-jelly-box-animate {
    17% {
        border-bottom-right-radius: 10%;
    }
    25% {
        -webkit-transform: translateY(25%) rotate(22.5deg);
                transform: translateY(25%) rotate(22.5deg);
    }
    50% {
        border-bottom-right-radius: 100%;
        -webkit-transform: translateY(50%) scale(1, .9) rotate(45deg);
                transform: translateY(50%) scale(1, .9) rotate(45deg);
    }
    75% {
        -webkit-transform: translateY(25%) rotate(67.5deg);
                transform: translateY(25%) rotate(67.5deg);
    }
    100% {
        -webkit-transform: translateY(0) rotate(90deg);
                transform: translateY(0) rotate(90deg);
    }
}
@-moz-keyframes square-jelly-box-animate {
    17% {
        border-bottom-right-radius: 10%;
    }
    25% {
        -moz-transform: translateY(25%) rotate(22.5deg);
             transform: translateY(25%) rotate(22.5deg);
    }
    50% {
        border-bottom-right-radius: 100%;
        -moz-transform: translateY(50%) scale(1, .9) rotate(45deg);
             transform: translateY(50%) scale(1, .9) rotate(45deg);
    }
    75% {
        -moz-transform: translateY(25%) rotate(67.5deg);
             transform: translateY(25%) rotate(67.5deg);
    }
    100% {
        -moz-transform: translateY(0) rotate(90deg);
             transform: translateY(0) rotate(90deg);
    }
}
@-o-keyframes square-jelly-box-animate {
    17% {
        border-bottom-right-radius: 10%;
    }
    25% {
        -o-transform: translateY(25%) rotate(22.5deg);
           transform: translateY(25%) rotate(22.5deg);
    }
    50% {
        border-bottom-right-radius: 100%;
        -o-transform: translateY(50%) scale(1, .9) rotate(45deg);
           transform: translateY(50%) scale(1, .9) rotate(45deg);
    }
    75% {
        -o-transform: translateY(25%) rotate(67.5deg);
           transform: translateY(25%) rotate(67.5deg);
    }
    100% {
        -o-transform: translateY(0) rotate(90deg);
           transform: translateY(0) rotate(90deg);
    }
}
@keyframes square-jelly-box-animate {
    17% {
        border-bottom-right-radius: 10%;
    }
    25% {
        -webkit-transform: translateY(25%) rotate(22.5deg);
           -moz-transform: translateY(25%) rotate(22.5deg);
             -o-transform: translateY(25%) rotate(22.5deg);
                transform: translateY(25%) rotate(22.5deg);
    }
    50% {
        border-bottom-right-radius: 100%;
        -webkit-transform: translateY(50%) scale(1, .9) rotate(45deg);
           -moz-transform: translateY(50%) scale(1, .9) rotate(45deg);
             -o-transform: translateY(50%) scale(1, .9) rotate(45deg);
                transform: translateY(50%) scale(1, .9) rotate(45deg);
    }
    75% {
        -webkit-transform: translateY(25%) rotate(67.5deg);
           -moz-transform: translateY(25%) rotate(67.5deg);
             -o-transform: translateY(25%) rotate(67.5deg);
                transform: translateY(25%) rotate(67.5deg);
    }
    100% {
        -webkit-transform: translateY(0) rotate(90deg);
           -moz-transform: translateY(0) rotate(90deg);
             -o-transform: translateY(0) rotate(90deg);
                transform: translateY(0) rotate(90deg);
    }
}
@-webkit-keyframes square-jelly-box-shadow {
    50% {
        -webkit-transform: scale(1.25, 1);
                transform: scale(1.25, 1);
    }
}
@-moz-keyframes square-jelly-box-shadow {
    50% {
        -moz-transform: scale(1.25, 1);
             transform: scale(1.25, 1);
    }
}
@-o-keyframes square-jelly-box-shadow {
    50% {
        -o-transform: scale(1.25, 1);
           transform: scale(1.25, 1);
    }
}
@keyframes square-jelly-box-shadow {
    50% {
        -webkit-transform: scale(1.25, 1);
           -moz-transform: scale(1.25, 1);
             -o-transform: scale(1.25, 1);
                transform: scale(1.25, 1);
    }
}
  </style>
  <style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-climbing-dot,
.la-ball-climbing-dot > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-climbing-dot {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-climbing-dot.la-dark {
    color: #333;
}
.la-ball-climbing-dot > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-climbing-dot {
    width: 42px;
    height: 32px;
}
.la-ball-climbing-dot > div:nth-child(1) {
    position: absolute;
    bottom: 32%;
    left: 18%;
    width: 14px;
    height: 14px;
    border-radius: 100%;
    -webkit-transform-origin: center bottom;
       -moz-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
         -o-transform-origin: center bottom;
            transform-origin: center bottom;
    -webkit-animation: ball-climbing-dot-jump .6s ease-in-out infinite;
       -moz-animation: ball-climbing-dot-jump .6s ease-in-out infinite;
         -o-animation: ball-climbing-dot-jump .6s ease-in-out infinite;
            animation: ball-climbing-dot-jump .6s ease-in-out infinite;
}
.la-ball-climbing-dot > div:not(:nth-child(1)) {
    position: absolute;
    top: 0;
    right: 0;
    width: 14px;
    height: 2px;
    border-radius: 0;
    -webkit-transform: translate(60%, 0);
       -moz-transform: translate(60%, 0);
        -ms-transform: translate(60%, 0);
         -o-transform: translate(60%, 0);
            transform: translate(60%, 0);
    -webkit-animation: ball-climbing-dot-steps 1.8s linear infinite;
       -moz-animation: ball-climbing-dot-steps 1.8s linear infinite;
         -o-animation: ball-climbing-dot-steps 1.8s linear infinite;
            animation: ball-climbing-dot-steps 1.8s linear infinite;
}
.la-ball-climbing-dot > div:not(:nth-child(1)):nth-child(2) {
    -webkit-animation-delay: 0ms;
       -moz-animation-delay: 0ms;
         -o-animation-delay: 0ms;
            animation-delay: 0ms;
}
.la-ball-climbing-dot > div:not(:nth-child(1)):nth-child(3) {
    -webkit-animation-delay: -600ms;
       -moz-animation-delay: -600ms;
         -o-animation-delay: -600ms;
            animation-delay: -600ms;
}
.la-ball-climbing-dot > div:not(:nth-child(1)):nth-child(4) {
    -webkit-animation-delay: -1200ms;
       -moz-animation-delay: -1200ms;
         -o-animation-delay: -1200ms;
            animation-delay: -1200ms;
}
.la-ball-climbing-dot.la-sm {
    width: 20px;
    height: 16px;
}
.la-ball-climbing-dot.la-sm > div:nth-child(1) {
    width: 6px;
    height: 6px;
}
.la-ball-climbing-dot.la-sm > div:not(:nth-child(1)) {
    width: 6px;
    height: 1px;
}
.la-ball-climbing-dot.la-2x {
    width: 84px;
    height: 64px;
}
.la-ball-climbing-dot.la-2x > div:nth-child(1) {
    width: 28px;
    height: 28px;
}
.la-ball-climbing-dot.la-2x > div:not(:nth-child(1)) {
    width: 28px;
    height: 4px;
}
.la-ball-climbing-dot.la-3x {
    width: 126px;
    height: 96px;
}
.la-ball-climbing-dot.la-3x > div:nth-child(1) {
    width: 42px;
    height: 42px;
}
.la-ball-climbing-dot.la-3x > div:not(:nth-child(1)) {
    width: 42px;
    height: 6px;
}
/*
 * Animations
 */
@-webkit-keyframes ball-climbing-dot-jump {
    0% {
        -webkit-transform: scale(1, .7);
                transform: scale(1, .7);
    }
    20% {
        -webkit-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    40% {
        -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
    }
    50% {
        bottom: 125%;
    }
    46% {
        -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
    }
    80% {
        -webkit-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    90% {
        -webkit-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    100% {
        -webkit-transform: scale(1, .7);
                transform: scale(1, .7);
    }
}
@-moz-keyframes ball-climbing-dot-jump {
    0% {
        -moz-transform: scale(1, .7);
             transform: scale(1, .7);
    }
    20% {
        -moz-transform: scale(.7, 1.2);
             transform: scale(.7, 1.2);
    }
    40% {
        -moz-transform: scale(1, 1);
             transform: scale(1, 1);
    }
    50% {
        bottom: 125%;
    }
    46% {
        -moz-transform: scale(1, 1);
             transform: scale(1, 1);
    }
    80% {
        -moz-transform: scale(.7, 1.2);
             transform: scale(.7, 1.2);
    }
    90% {
        -moz-transform: scale(.7, 1.2);
             transform: scale(.7, 1.2);
    }
    100% {
        -moz-transform: scale(1, .7);
             transform: scale(1, .7);
    }
}
@-o-keyframes ball-climbing-dot-jump {
    0% {
        -o-transform: scale(1, .7);
           transform: scale(1, .7);
    }
    20% {
        -o-transform: scale(.7, 1.2);
           transform: scale(.7, 1.2);
    }
    40% {
        -o-transform: scale(1, 1);
           transform: scale(1, 1);
    }
    50% {
        bottom: 125%;
    }
    46% {
        -o-transform: scale(1, 1);
           transform: scale(1, 1);
    }
    80% {
        -o-transform: scale(.7, 1.2);
           transform: scale(.7, 1.2);
    }
    90% {
        -o-transform: scale(.7, 1.2);
           transform: scale(.7, 1.2);
    }
    100% {
        -o-transform: scale(1, .7);
           transform: scale(1, .7);
    }
}
@keyframes ball-climbing-dot-jump {
    0% {
        -webkit-transform: scale(1, .7);
           -moz-transform: scale(1, .7);
             -o-transform: scale(1, .7);
                transform: scale(1, .7);
    }
    20% {
        -webkit-transform: scale(.7, 1.2);
           -moz-transform: scale(.7, 1.2);
             -o-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    40% {
        -webkit-transform: scale(1, 1);
           -moz-transform: scale(1, 1);
             -o-transform: scale(1, 1);
                transform: scale(1, 1);
    }
    50% {
        bottom: 125%;
    }
    46% {
        -webkit-transform: scale(1, 1);
           -moz-transform: scale(1, 1);
             -o-transform: scale(1, 1);
                transform: scale(1, 1);
    }
    80% {
        -webkit-transform: scale(.7, 1.2);
           -moz-transform: scale(.7, 1.2);
             -o-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    90% {
        -webkit-transform: scale(.7, 1.2);
           -moz-transform: scale(.7, 1.2);
             -o-transform: scale(.7, 1.2);
                transform: scale(.7, 1.2);
    }
    100% {
        -webkit-transform: scale(1, .7);
           -moz-transform: scale(1, .7);
             -o-transform: scale(1, .7);
                transform: scale(1, .7);
    }
}
@-webkit-keyframes ball-climbing-dot-steps {
    0% {
        top: 0;
        right: 0;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        top: 100%;
        right: 100%;
        opacity: 0;
    }
}
@-moz-keyframes ball-climbing-dot-steps {
    0% {
        top: 0;
        right: 0;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        top: 100%;
        right: 100%;
        opacity: 0;
    }
}
@-o-keyframes ball-climbing-dot-steps {
    0% {
        top: 0;
        right: 0;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        top: 100%;
        right: 100%;
        opacity: 0;
    }
}
@keyframes ball-climbing-dot-steps {
    0% {
        top: 0;
        right: 0;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        top: 100%;
        right: 100%;
        opacity: 0;
    }
}

.fixed1{
  position:fixed;
  left:100px;
  top:100px;
  z-index:9999 ;

}
  </style>

  {{-- loading 3 --}}
  <style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-line-scale,
.la-line-scale > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-line-scale {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-line-scale.la-dark {
    color: #333;
}
.la-line-scale > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-line-scale {
    width: 40px;
    height: 32px;
}
.la-line-scale > div {
    width: 4px;
    height: 32px;
    margin: 2px;
    margin-top: 0;
    margin-bottom: 0;
    border-radius: 0;
    -webkit-animation: line-scale 1.2s infinite ease;
       -moz-animation: line-scale 1.2s infinite ease;
         -o-animation: line-scale 1.2s infinite ease;
            animation: line-scale 1.2s infinite ease;
}
.la-line-scale > div:nth-child(1) {
    -webkit-animation-delay: -1.2s;
       -moz-animation-delay: -1.2s;
         -o-animation-delay: -1.2s;
            animation-delay: -1.2s;
}
.la-line-scale > div:nth-child(2) {
    -webkit-animation-delay: -1.1s;
       -moz-animation-delay: -1.1s;
         -o-animation-delay: -1.1s;
            animation-delay: -1.1s;
}
.la-line-scale > div:nth-child(3) {
    -webkit-animation-delay: -1s;
       -moz-animation-delay: -1s;
         -o-animation-delay: -1s;
            animation-delay: -1s;
}
.la-line-scale > div:nth-child(4) {
    -webkit-animation-delay: -.9s;
       -moz-animation-delay: -.9s;
         -o-animation-delay: -.9s;
            animation-delay: -.9s;
}
.la-line-scale > div:nth-child(5) {
    -webkit-animation-delay: -.8s;
       -moz-animation-delay: -.8s;
         -o-animation-delay: -.8s;
            animation-delay: -.8s;
}
.la-line-scale.la-sm {
    width: 20px;
    height: 16px;
}
.la-line-scale.la-sm > div {
    width: 2px;
    height: 16px;
    margin: 1px;
    margin-top: 0;
    margin-bottom: 0;
}
.la-line-scale.la-2x {
    width: 80px;
    height: 64px;
}
.la-line-scale.la-2x > div {
    width: 8px;
    height: 64px;
    margin: 4px;
    margin-top: 0;
    margin-bottom: 0;
}
.la-line-scale.la-3x {
    width: 120px;
    height: 96px;
}
.la-line-scale.la-3x > div {
    width: 12px;
    height: 96px;
    margin: 6px;
    margin-top: 0;
    margin-bottom: 0;
}
/*
 * Animation
 */
@-webkit-keyframes line-scale {
    0%,
    40%,
    100% {
        -webkit-transform: scaleY(.4);
                transform: scaleY(.4);
    }
    20% {
        -webkit-transform: scaleY(1);
                transform: scaleY(1);
    }
}
@-moz-keyframes line-scale {
    0%,
    40%,
    100% {
        -webkit-transform: scaleY(.4);
           -moz-transform: scaleY(.4);
                transform: scaleY(.4);
    }
    20% {
        -webkit-transform: scaleY(1);
           -moz-transform: scaleY(1);
                transform: scaleY(1);
    }
}
@-o-keyframes line-scale {
    0%,
    40%,
    100% {
        -webkit-transform: scaleY(.4);
             -o-transform: scaleY(.4);
                transform: scaleY(.4);
    }
    20% {
        -webkit-transform: scaleY(1);
             -o-transform: scaleY(1);
                transform: scaleY(1);
    }
}
@keyframes line-scale {
    0%,
    40%,
    100% {
        -webkit-transform: scaleY(.4);
           -moz-transform: scaleY(.4);
             -o-transform: scaleY(.4);
                transform: scaleY(.4);
    }
    20% {
        -webkit-transform: scaleY(1);
           -moz-transform: scaleY(1);
             -o-transform: scaleY(1);
                transform: scaleY(1);
    }
}
  </style>


<style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-pulse,
.la-ball-pulse > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-pulse {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-pulse.la-dark {
    color: #333;
}
.la-ball-pulse > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-pulse {
    width: 54px;
    height: 18px;
}
.la-ball-pulse > div:nth-child(1) {
    -webkit-animation-delay: -200ms;
       -moz-animation-delay: -200ms;
         -o-animation-delay: -200ms;
            animation-delay: -200ms;
}
.la-ball-pulse > div:nth-child(2) {
    -webkit-animation-delay: -100ms;
       -moz-animation-delay: -100ms;
         -o-animation-delay: -100ms;
            animation-delay: -100ms;
}
.la-ball-pulse > div:nth-child(3) {
    -webkit-animation-delay: 0ms;
       -moz-animation-delay: 0ms;
         -o-animation-delay: 0ms;
            animation-delay: 0ms;
}
.la-ball-pulse > div {
    width: 10px;
    height: 10px;
    margin: 4px;
    border-radius: 100%;
    -webkit-animation: ball-pulse 1s ease infinite;
       -moz-animation: ball-pulse 1s ease infinite;
         -o-animation: ball-pulse 1s ease infinite;
            animation: ball-pulse 1s ease infinite;
}
.la-ball-pulse.la-sm {
    width: 26px;
    height: 8px;
}
.la-ball-pulse.la-sm > div {
    width: 4px;
    height: 4px;
    margin: 2px;
}
.la-ball-pulse.la-2x {
    width: 108px;
    height: 36px;
}
.la-ball-pulse.la-2x > div {
    width: 20px;
    height: 20px;
    margin: 8px;
}
.la-ball-pulse.la-3x {
    width: 162px;
    height: 54px;
}
.la-ball-pulse.la-3x > div {
    width: 30px;
    height: 30px;
    margin: 12px;
}
/*
 * Animation
 */
@-webkit-keyframes ball-pulse {
    0%,
    60%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    30% {
        opacity: .1;
        -webkit-transform: scale(.01);
                transform: scale(.01);
    }
}
@-moz-keyframes ball-pulse {
    0%,
    60%,
    100% {
        opacity: 1;
        -moz-transform: scale(1);
             transform: scale(1);
    }
    30% {
        opacity: .1;
        -moz-transform: scale(.01);
             transform: scale(.01);
    }
}
@-o-keyframes ball-pulse {
    0%,
    60%,
    100% {
        opacity: 1;
        -o-transform: scale(1);
           transform: scale(1);
    }
    30% {
        opacity: .1;
        -o-transform: scale(.01);
           transform: scale(.01);
    }
}
@keyframes ball-pulse {
    0%,
    60%,
    100% {
        opacity: 1;
        -webkit-transform: scale(1);
           -moz-transform: scale(1);
             -o-transform: scale(1);
                transform: scale(1);
    }
    30% {
        opacity: .1;
        -webkit-transform: scale(.01);
           -moz-transform: scale(.01);
             -o-transform: scale(.01);
                transform: scale(.01);
    }
}

/* <div class="la-ball-pulse">
	<div></div>
	<div></div>
	<div></div>
</div> */
</style>

<style>
    
.me1{
  font-size: 14px;
    border: none;
    border-radius: 2px;
    /* background-color: #007704;
    color: #FAFAFA; */
    transition-duration: 0.2s;
    /* text-shadow: 2px 2px 4px #000000; */
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    /* box-shadow: 0 10px 10px -5px; */


    -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;





    
    /* -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg); */






}
.me1:hover{
    background-color: #52b9f5; /* Green */
  /* color: white; */
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 3px 1px blue;


  /* -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg); */

  }
  .me1:active{
    background-color: #b0ffb3; /* Green */
  
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 10px 5px blue;
  }





  .me2{
  font-size: 14px;
    border: none;
    border-radius: 2px;
    /* background-color: #007704;
    color: #FAFAFA; */
    transition-duration: 0.2s;
    /* text-shadow: 2px 2px 4px #000000; */
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    /* box-shadow: 0 10px 10px -5px; */


    -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;





    
    /* -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg); */






}
.me2:active{
    background-color: #4CAF50; /* Green */
  /* color: white; */
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 3px 1px blue;


  /* -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg); */

  }
  .me2:hover{
    background-color: #b0ffb3; /* Green */
  
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 10px 5px blue;
  }

  .me3{
    /* background-color: #b0ffb3; Green */
  
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 10px 5px blue;
  }
</style>

<style>
    button{
        /* background: linear-gradient(); */
        background-color: rgba(32, 153, 1, 0.856);
        color: white;
        border-radius: 4px;
        padding: 5px;
        min-width: 32px;
        border: none;

        transition-duration: 0.2s;

        -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
    }

    
    button:hover{
    background-color: #52b9f5; /* Green */
  /* color: white; */
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 3px 1px blue;
 

  /* -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg); */

  }
  button:active{
    background-color: #b0ffb3; /* Green */
  
  /* box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); */
  box-shadow: 0 0 10px 5px blue;
  }



</style>
    </head>





<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div class="bg-danger w-25">

                    @yield('statusme')
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    {{-- @jquery
    @toastr_js
    @toastr_render --}}
    <script>
        // return a promise
function copyToClipboard(textToCopy) {
    // navigator clipboard api needs a secure context (https)
    if (navigator.clipboard && window.isSecureContext) {
        // navigator clipboard api method'
        return navigator.clipboard.writeText(textToCopy);
    } else {
        // text area method
        let textArea = document.createElement("textarea");
        textArea.value = textToCopy;
        // make the textarea out of viewport
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        textArea.style.top = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        return new Promise((res, rej) => {
            // here the magic happens
            document.execCommand('copy') ? res() : rej();
            textArea.remove();
            alert("Copied!");
        });
    }
}
        </script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</script>
 
<x-livewire-alert::scripts />
{{-- 

<script>
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    
</script>
@if (session()->has('success'))
<script>
toastr.success("{!! session()->get('success')!!}");
</script>
@endif


<script>
    window.addEventListener('alert', event => { 
                 toastr[event.detail.type](event.detail.message, 
                 event.detail.title ?? ''), toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                    }
                });
    </script> --}}

</body>
</html>
