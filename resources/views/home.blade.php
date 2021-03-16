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
                            @foreach ($homes as $home) 
                            <p><font size="30px" color="black">{{$home->deskripsi}}</font></p>
                            <a href={{$home->link}} size="20px"> Educa Studio </a>
                            @endforeach
                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>   
    </div> <!-- .site-slider -->

@endsection
