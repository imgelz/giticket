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
    			<div class="col-md-3 ftco-animate">
    				<div class="destination tiket">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/frontend/images/konser.jpg);">
    						{{-- <div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-link"></span>
    						</div> --}}
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><b>Comedy Festival</b></h3>
	    						</div>
	    						<div class="two">
	    							<span class="price"></span>
    							</div>
                            </div>
                            <br>
    						<p>19 Desember 2019</p>
                            <p>09:00 AM - 02:00 PM</p>
                            <p>Braga CityWalk ,Bandung</p>
    						<hr style="color: #bdbdbd">
    						<p class="bottom-area d-flex">
    							<span style="color:burlywood"><i class="icon-map-o" style="color:brown"></i> Comedy Show</span>
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
