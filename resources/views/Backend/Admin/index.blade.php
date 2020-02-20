@extends('layouts.Backend.Admin.index')

@section('content')

<div class="content-wrapper" style="background:transparent">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #ededed" style="background-color: #ededed">
              <div class="inner">
                <h3>44</h3>

                <p>Penjual</p>
              </div>
              <div class="icon">
                <i><img class="icon-template" src="/backend/icon/booth1.png" width="100px"></i> 
                </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #ededed">
              <div class="inner">
                <h3>44</h3>

                <p>Event</p>
              </div>
              <div class="icon">
                <i><img class="icon-template" src="/backend/icon/circus.png" width="100px"></i>
              </div>
              <a class="small-box-footer">More info <i></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #ededed">
              <div class="inner">
                <h3>44</h3>

                <p>Tiket</p>
              </div>
              <div class="icon">
              <i><img class="icon-template" src="/backend/icon/ticket.png" width="100px"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #ededed">
              <div class="inner">
                <h3>44</h3>

                <p>Pembeli</p>
              </div>
              <div class="icon">
              <i><img class="icon-template" src="/backend/icon/values.png" width="100px"></i>
              </div>
              <a class="small-box-footer">Data Perhitungan Pembeli </a>
            </div>
          </div>

          
          {{-- PENGHITUNG KECIL --}}



          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Pesan Publik</span>
                <span class="info-box-number">?</span>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penjual</span>
                <span class="info-box-number">?</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          {{-- <div class="clearfix hidden-md-up"></div> --}}

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengunjung</span>
                <span class="info-box-number">?</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Member</span>
                <span class="info-box-number">?</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
