@extends('layouts.Frontend.index')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('/frontend/images/tiket.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dapatkan <br>Tiket Eventmu <br> Sekarang !</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tanpa Wacana Hanya di Gitick.id</p>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-yatch"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Layanan</h3>
                <p>Kerjasama khususnya acara kecil dan besar dalam bentuk sistem manajemen E-tiketing yang bersifat online.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-around"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Promosi</h3>
                <p>Media sarana untuk mempermudah penjualan tiket yang telah anda sediakan melalui website kami.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-compass"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Afiliasi</h3>
                <p>Perluas jaringan publikasi dan distribusi tiket event kamu melalui media penjualan tiket kami yang telah disediakan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map-of-roads"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Pilihan</h3>
                <p>Temukan event page yang berhasil kamu buat sendiri dan juga event page yang dibuat oleh Event Creator lainnya!.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(/frontend/images/list-event.png);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Mencari Event ?</h2>
        </div>
        <div>
  				<p>Temukan segera jenis eventmu dengan tampilan design yang dinamis dan terstruktur.
                    Hidupkan hidupmu, Temukan berbagai event menarik yang kamu suka.
                  </p>
                  <a href="{{url('/event')}}"><button>Temukan Event</button></a>
  			</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>01</span> Travel</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>02</span> Experience</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="intro ftco-animate">
    					<h3><span>03</span> Relax</h3>
    					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
@endsection
