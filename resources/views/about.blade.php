@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')

<!-- Story Section -->
<section class="story">
  <div class="image">
    <img src="{{asset('images/wiljantoro-hero-image.jpg')}}" alt="{{$story_section['title']}}">
  </div>
  <div class="content">
    <h2 class="heading">{{$story_section['title']}}</h2>
    <p class="content__text">{{$story_section['content']}}</p>
  </div>
</section>

<div class="section-gap"></div>
<!-- vision Section -->
<section class="vision">
  <div class="image">
    <img src="{{asset('images/wiljantoro-section-image.jpg')}}" alt="{{$vision_section['title']}}">
  </div>
  <div class="content">
    <h2 class="heading">{{$vision_section['title']}}</h2>
    <p class="content__text">{{$vision_section['content']}}</p>
  </div>
</section>

<div class="section-gap"></div>
<!-- mission Section -->
<section class="mission">
  <div class="image">
    <img src="{{asset('images/wiljantoro-hero-image.jpg')}}" alt="{{$mission_section['title']}}">
  </div>
  <div class="content">
    <h2 class="heading">{{$mission_section['title']}}</h2>
    <p class="content__text">{{$mission_section['content']}}</p>
  </div>
</section>

@endsection
