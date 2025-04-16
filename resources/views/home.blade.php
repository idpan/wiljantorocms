@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

<section class="hero" style="background-image: url({{asset("images/wiljantoro-hero-image.jpg")}})" >
<div class="content"  >

    <h1 class="heading" >{{$page['heading']}}</h1>
    <p class="subheading" >{{$page['subheading']}}</p>
</div>
</section>
{{-- about section --}}
@include('components.aboutSection',['data'=>$about_section])
{{-- featured projects section --}}
@include('components.featuredProjectsSection',['data'=>$featured_projects_section,'featured_projects'=>$featured_projects])
@endsection


@section('script')
<script>
  $(document).ready(function(){
    $('.project-slider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: true,
      dots: true,
      pauseOnHover: true,
      fade: true,
      infinite: true,
      speed: 500,
    });
  });
</script>

@endsection