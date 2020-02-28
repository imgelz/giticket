@extends('layouts.Frontend.single-artikel')

@section('content')

<section class="ftco-section cari" style="background-color:#112041; padding: 1em 0;" >
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
            </div>
        </div>
    </div>
</section>

<div class="card mb-3">
    <img class="card-img-top" src="/assets/img/artikel/{{ $artikel->foto }}" alt="Card image cap">
    <div class="card-body">
        <h1 class="card-title">{{ $artikel->judul }}</h1>
        <br>
        <h5 class="card-text">{{ $artikel->konten }}</h5>
        <p class="card-text"><span class="text-muted">{{ \Carbon\Carbon::parse($artikel->created_at)->format('d M Y')}} | {{ \Carbon\Carbon::parse($artikel->created_at)->format('H:i')}}</span></p>
    </div>
</div>


@endsection
