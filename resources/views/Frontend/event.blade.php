@extends('layouts.Frontend.event')

@section('content')
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/tiket.jpg);">
    	<div class="container">
    		<div class="text">
		        <center>
                    <h1 style="font-size:80px; color:burlywood"><strong class="name-banner"><font face="Arial">Beli Tiket Eventmu</font><strong></h1><h4 style="color:burlywood">Jadikan wacana eventmu menjadi sebuah rencana dengan Gitick.id</h4>
                </center>
		    </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1>Kategori Event</h1>
                </div>
            </div>
            <div class="row">
                @if ($kategori->count() > 0)
                @foreach ($kategori as $item)
                <div class="col-md-4 ftco-animate">
    				<div class="destination kategori">
    					<a href="/kategori/{{ $item->slug}}" class="img img-2 kate d-flex justify-content-center align-items-center" style="background-image: url(/assets/img/kategori/{{$item->foto}}) ;">
    						<div>
    							<h3 style="color:white;"><b>{{$item->nama_kategori}}</b></h3>
    						</div>
    					</a>
    				</div>
                </div>
                @endforeach
                @elseif ($kategori->count() == 0)
                    <div class="container">
                        <br><br>
                        <center><h1 style="color:black" class="display-4">Kategori Tidak Tersedia</h1>
                        <p class="lead">The contents of this page are inputted by Admin Gitick.id.</p></center>
                    </div>
                @endif

            </div>
    	</div>
    </section><br>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/people.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Konser</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>TalkShow</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="25">0</strong>
		                <span>Konferensi</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10">0</strong>
		                <span>Teater</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Rekomendasi Event</h2>
                </div>
            </div>
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-3 ftco-animate">
    				<div class="destination tiket">
    					<a class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/frontend/images/konser.jpg);">
    						{{-- <div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div> --}}
                        </a>
    					<div class="text p-3">
    						<div class="d-flex">
                                <h3><p>Comedy Festival</p></h3>
                            </div>
                            <div class="d-flex">
                                <small class="kategori" style="color:#e86b32">Kategori</small>
                            </div>
                                <img class="lol" src="/frontend/icon/calendar.png" width="20px">  <span>20 Feb 2020 - 21 Feb 2020</span>
                                <br>
                                <img class="lol" src="/frontend/icon/clock.png" width="20px">  <span>09:00 - 20:00 WIB</span><br>
    						<hr style="color: #bdbdbd">
    						<p class="bottom-area d-flex">
    							<span style="color:gray"><img src="/frontend/icon/pin.png" class="lol" width="20px"></i> Alamat Palsu</span>
    							<span class="ml-auto"><a href="#">Detail</a></span>
    						</p>
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
