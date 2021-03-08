@extends('layouts.master')

@section('title', 'Home')
@section('slider')
    <!-- SLIDER -->
    <div class="site-slider">
        <div class="flexslider">
            <ul class="slides">
                <li class="slide">
                    <img src="images/slide1.jpg" alt="">
                    <div class="slider-caption">
                        <div class="title">
                            <p><font size="30px" color="black">Halaman Home</font></p>
                            <a href="https://www.educastudio.com/" size="20px"> Educa Studio </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->

@endsection
