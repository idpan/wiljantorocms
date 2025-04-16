@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')

{{-- Hero section kecil --}}
<section class="projects-hero" style="background-image: url({{asset('images/wiljantoro-section-image.jpg')}})">
  <div class="projects-hero__content">
    <h1 class="heading">Project Kami</h1>
    <p class="subheading" >Telusuri berbagai project dari berbagai layanan yang telah kami kerjakan.</p>
  </div>
  <div class="overlay"></div>
</section>

{{-- Filter project by kategori --}}
<section class="projects">
  <form action="{{ url('/projects') }}" method="get">
    <select class="project__filter" name="tag" id="service" onchange="this.form.submit()">
      <option value="">Semua Kategori</option>
      @foreach ($services as $service)
        <option value="{{ $service->id }}" {{ request('tag') == $service->id ? 'selected' : '' }}>
          {{ $service->title }}
        </option>
      @endforeach
    </select>
  </form>

  <div class="project__container">
    @if($projects->isEmpty())
      <p>Tidak ada project yang ditemukan untuk kategori ini.</p>
    @else
      @foreach ($projects as $project)
        <div class="card">
          <div class="card__image">
            {{-- <img src="{{ asset('storage/'.$project->image) }}" alt="{{ $project->name }}"> --}}
          </div>
          <div class="card__info">
            <div class="card__name">{{ $project->name }}</div>
            <h2 class="card__clientName">{{ $project->client }}</h2>
          </div>
        </div>
      @endforeach
    @endif
  </div>
</section>

@endsection
