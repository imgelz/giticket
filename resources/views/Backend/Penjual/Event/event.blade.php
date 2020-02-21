@extends('layouts.Backend.Penjual.event')

@section('content')

    <div class="content-wrapper" style="background:transparent">
    <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Event Saya</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <a style="float:right" href=""><button style="background-color:#007bff; color:white" class="btn btn-lg">Buat Event</button></a>
            </div>
            </div><!-- /.row -->
            <hr style="border: 3px solid #a7a7a7">
        </div><!-- /.container-fluid -->
        </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box card" style="border:1px solid #71707085">
                            <a href=""><img class="card-img-top" src="/frontend/images/konser.jpg" alt="Card image cap"></a>
                            <div class="card-body fade-in">
                                <h5 class="card-title">Card Title</h5>
                                <br>
                                <small style="color:#e86b32">Kategori</small>
                                <br><hr>
                                <div class="row">
                                    <div class="col-sm-1" style="">
                                        <img src="/frontend/icon/calendar.png" width="20px">
                                    </div>
                                    <div class="col-sm" style="">
                                        <span style="margin-left:0.5rem; color:#948e8e">20 Feb 2020 - 25 Feb 2020</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:0.5rem">
                                    <div class="col-sm-1" style="">
                                        <img src="/frontend/icon/clock.png" width="20px">
                                    </div>
                                    <div class="col-sm" style="">
                                        <span style="margin-left:0.5rem; color:#948e8e">09:00 - 10:00  WIB</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:0.5rem">
                                    <div class="col-sm-1" style="">
                                        <img src="/frontend/icon/pin.png" width="20px">
                                    </div>
                                    <div class="col-sm" style="">
                                        <span style="margin-left:0.5rem; color:#948e8e">Gedung Sasana Budaya Ganesha,Bandung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /.content -->
  </div>

@endsection
