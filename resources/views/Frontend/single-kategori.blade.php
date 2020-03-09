@extends('layouts.Frontend.single-kategori')

@section('content')
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/assets/img/kategori/{{$kategori   ->foto}});">
        <div class="container">
            <div class="text">
                <center>
                <h1 style="font-size:80px; color:white"><strong class="name-banner"><font face="Arial">{{$kategori  ->nama_kategori}}</font><strong></h1>
                </center>
            </div>
        </div>
    </section>

    <section class="ftco-section cari" style="background-color:#112041" >
        <div class="container">
			<div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                </div>
            </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row">
                @foreach ($event as $data)
                    <div class="col-lg-3 col-6" style="margin-bottom:1rem">
                        <a href="/event/{{ $data->slug }}" target="_blank">
                            <div class="small-box card" style="border:1px solid #71707085">
                                <img class="card-img-top" src="/assets/front/event/{{ $data->spanduk }}" alt="Card image cap" style="height:170px">
                                <div class="card-body fade-in">
                                    <h5 class="card-title" style="margin-bottom:-0.5rem">{{ $data->nama_event }}</h5>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/calendar.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:; color:#948e8e">{{ \Carbon\Carbon::parse($data->tanggal_mulai)->format('d M Y')}} - {{ \Carbon\Carbon::parse($data->tanggal_selesai)->format('d M Y')}}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0.5rem">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/clock.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:; color:#948e8e">{{ \Carbon\Carbon::parse($data->waktu_mulai)->format('H:i')}} - {{ \Carbon\Carbon::parse($data->waktu_selesai)->format('H:i')}}  {{ $data->format_waktu }}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0.5rem">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/pin.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:; color:#948e8e">{{ $data->lokasi }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
    		</div>
    	</div>
    </section>
    <hr>
    <center><div class="col-md-6">
        <div class="boxed-3rd">
            <h5>Metode Pembayaran :</h5>
            <ul class="logo-3rd">
                <figure class="logo" >
                    <img src="/frontend/images/dana.png" width="100px" style="height:30px">
                </figure>
            </ul>
        </div>
    </div></center>
@endsection
