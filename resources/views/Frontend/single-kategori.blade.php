@extends('layouts.Frontend.single-kategori')

@section('content')
    @foreach ($kategori as $item)
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/assets/img/kategori/{{$item->foto}});">
            <div class="container">
                <div class="text">
                    <center>
                    <h1 style="font-size:80px; color:white"><strong class="name-banner"><font face="Arial">{{$item->nama_kategori}}</font><strong></h1>
                    </center>
                </div>
            </div>
        </section>
    @endforeach

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
                <div class="col-lg-3 col-6" style="margin-bottom:1rem">
                    <div class="small-box card" style="border:1px solid #71707085">
                        <a href=""><img class="card-img-top" src="/frontend/images/konser.jpg" alt="Card image cap" style="height:170px"></a>
                        <div class="card-body fade-in">
                            <h5 class="card-title" style="margin-bottom:-0.5rem">Card Title</h5>
                            <br>
                            <div class="row">
                                <div class="col-sm" style="margin-bottom:0.5rem">
                                    <small style="margin-left:; color:#e86b32">Kategori</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1" style="">
                                    <img src="/frontend/icon/calendar.png" width="20px">
                                </div>
                                <div class="col-sm" style="">
                                    <span style="margin-left:; color:#948e8e">20 Feb 2020 - 25 Feb 2020</span>
                                </div>
                            </div>
                            <div class="row" style="margin-top:0.5rem">
                                <div class="col-sm-1" style="">
                                    <img src="/frontend/icon/clock.png" width="20px">
                                </div>
                                <div class="col-sm" style="">
                                    <span style="margin-left:; color:#948e8e">09:00 - 10:00  WIB</span>
                                </div>
                            </div>
                            <div class="row" style="margin-top:0.5rem">
                                <div class="col-sm-1" style="">
                                    <img src="/frontend/icon/pin.png" width="20px">
                                </div>
                                <div class="col-sm" style="">
                                    <span style="margin-left:; color:#948e8e">Gedung Sasana Budaya Ganesha,Bandung</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
