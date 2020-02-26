@extends('layouts.Backend.Penjual.event')

@section('content')

@include('Backend.Penjual.Event.modal')

    <div class="content-wrapper" style="background:transparent">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Event Saya</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a class="btn btn-lg btn-primary buton-modal" style="float:right" href="javascript:void(0)" id="buat-event">Buat Event</a>
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

@section('css')
    <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.css">
@endsection

@section('js')
    <script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <script type="text/javascript">
    $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });

                $('#buat-event').click(function () {
                $('.modal-title').html('Buat Event');
                $('#form-buat-event').trigger("reset");
                $('#modal-buat-event').modal({backdrop: 'static', keyboard: false});
                $('#modal-buat-event').modal('show');
            });

            $.ajax({
                url: "{{ url('admin/kategori') }}",
                method: "GET",
                dataType: "json",
                success: function (berhasil) {
                    $.each(berhasil.data, function (key, value) {
                        $('#id_kategori').append(
                            `
                            <option value="${value.id}">
                                ${value.nama_kategori}
                            </option>
                            `
                        )
                    })
                },
                error: function () {
                    console.log('data tidak ada');
                }
            });
    });
</script>

@endsection
