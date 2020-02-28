@extends('layouts.Frontend.blog')

@section('content')

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/tiket.jpg);">
    	<div class="container">
    		<div class="text">
		        <center>
                    <h1 style="font-size:80px; color:burlywood"><strong class="name-banner"><font face="Arial">Blog Artikel</font><strong></h1>
                        <h4 style="color:burlywood">Ketahui apa yang tidak kamu ketahui, Disini !</h4>
                </center>
		    </div>
    	</div>
    </section>
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2><strong>Tips</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
            @foreach ($artikel as $item)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="" class="block-20" style="background-image: url('/assets/img/artikel/{{ $item->foto }}'); width:350px">
                </a>
                <div class="text">
                    <span class="tag">Tips, Travel</span>
                    <h3 class="heading mt-3"><a href="/blog/{{ $item->slug }}">{{ $item->judul }}</a></h3>
                <div class="meta mb-3">
                    <div><a>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y')}}</a></div>
                    <div><a>|</a></div>
                    <div><a>Admin</a></div>
                </div>
                </div>
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection
