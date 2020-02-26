@extends('layouts.Backend.Penjual.tiket')

@section('content')

@include('Backend.Penjual.tiket.modal')

    <div class="content-wrapper" style="background:transparent">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Tiket Event Saya</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a class="btn btn-lg btn-primary" style="float:right" href="javascript:void(0)" id="buat-tiket">Buat Tiket Event</a>
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
                    <div class="col-6">
                        <div class="card mb-3" style="border:1px solid #d7d7d7">
                            <div class="card-body">
                                <div class="tiketnya">
                                    <b style="font-size:1.5rem; color:#686868">Presale Ticket</b>
                                </div>
                                <hr>
                                <div class="destik">
                                    <small style="color:#a7a7a7">sdapsdapsdapsdapsdap</small>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm harga">
                                        <b style="font-size:1.8rem; color:#686868">Rp 5000</b>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-group-append">
                                            <span class="input-group-text">20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="card mb-3" style="border:1px solid #d7d7d7">
                            <div class="card-body">
                                <div class="tiketnya">
                                    <b style="font-size:1.5rem; color:#686868">Presale Ticket</b>
                                </div>
                                <hr>
                                <div class="destik">
                                    <small style="color:#a7a7a7">sdapsdapsdapsdapsdap</small>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm harga">
                                        <b style="font-size:1.8rem; color:#686868">Rp 5000</b>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-group-append">
                                            <span class="input-group-text">20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="card mb-3" style="border:1px solid #d7d7d7">
                            <div class="card-body">
                                <div class="tiketnya">
                                    <b style="font-size:1.5rem; color:#686868">Presale Ticket</b>
                                </div>
                                <hr>
                                <div class="destik">
                                    <small style="color:#a7a7a7">sdapsdapsdapsdapsdap</small>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm harga">
                                        <b style="font-size:1.8rem; color:#686868">Rp 5000</b>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="input-group-append">
                                            <span class="input-group-text">20</span>
                                        </div>
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

                $('#buat-tiket').click(function () {
                $('.modal-title').html('Buat Tiket');
                $('#form-buat-tiket').trigger("reset");
                $('#modal-buat-tiket').modal({backdrop: 'static', keyboard: false});
                $('#modal-buat-tiket').modal('show');
            });

            $.ajax({
                url: "{{ url('penjual/event') }}",
                method: "GET",
                dataType: "json",
                success: function (berhasil) {
                    $.each(berhasil.data, function (key, value) {
                        $('#id_event').append(
                            `
                            <option value="${value.id}">
                                ${value.nama_event}
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

