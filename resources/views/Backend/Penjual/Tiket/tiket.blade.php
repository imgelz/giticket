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
                    @if($tiket->count() > 0)
                    @foreach ($tiket as $item)
                        <div class="col-6">
                            <div class="card mb-3" style="border:1px solid #d7d7d7">
                                <div class="card-body">
                                    <div class="row" style="margin-top:-0.5rem; margin-bottom:-0.5rem">
                                        <div class="col-sm tiketnya">
                                            <b style="font-size:1.5rem; color:#686868">{{ $item->nama_tiket }}</b>
                                        </div>
                                        <div class="col-sm-1.5">
                                            <div class="input-group-append">
                                                <span class="input-group-text">{{ $item->jumlah_tiket }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="destik">
                                        <small style="color:#a7a7a7">{{ $item->deskripsi }}</small>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm harga">
                                            <b style="font-size:1.8rem; color:#686868">Rp {{ $item->harga }}</b>
                                        </div>
                                        <div class="col-sm-1"><a href="javascript:void(0)" id="edit-tiket" data-id="{{ $item->id }}" title="Ubah" ><i class="fa fa-pencil-alt"></i></a></div>
                                        <div class="col-sm-1"><a href="javascript:void(0)" id="hapus-tiket" title="Hapus" ><i class="fa fa-trash-alt"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @elseif ($tiket->count() == 0)
                        <div class="container" style="margin-top:7rem">
                            <center>
                                <img src="/backend/icon/tickets.png">
                                <h1 style="color:black" class="display-4">Belum Ada Tiket</h1>
                                <p class="lead">Silakan buat tiket eventmu dengan klik button “Buat Tiket Event” di atas.</p></<h1>
                            </center>
                        </div>
                    @endif
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

            $('#simpan').click(function (e) {
                e.preventDefault();
                // $(this).hide();
                var formdata = new FormData($('#form-buat-tiket')[0]);
                $.ajax({
                    data: formdata,
                    url: "{{ url('/penjual/tiket-store') }}",
                    type: "POST",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#form-buat-tiket').trigger("reset");
                        $('#modal-buat-tiket').modal('hide');
                        table.draw();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            showConfirmButton: false,
                            timer: 1000
                        });
                    },
                    error: function (request, status, error) {
                        console.log(error);
                    }
                });
            });

            $('#edit-tiket').click(function(){
                var idTiket = $(this).data('id');
                $.get("{{ url('penjual/tiket') }}"+"/"+idTiket+"/edit", function(data){
                    // console.log(data);
                    $('.modal-title').html('Edit Tiket Event');
                    $('#modal-buat-tiket').modal({backdrop: 'static', keyboard: false});
                    $('#modal-buat-tiket').modal('show');
                    $('#data-id').val(data.id);
                    $('#nama_tiket').val(data.nama_tiket);
                    $('#id_kategori').val('')
                    $('#id_event').val(data.id_event);
                    $('#jumlah_tiket').val(data.jumlah_tiket);
                    $('#harga').val(data.harga);
                    $('#deskripsi').html(data.deskripsi);
                });
            });


            $.ajax({
                url: "{{ url('penjual/get-tiket') }}",
                method: "GET",
                dataType: "json",
                success: function (berhasil) {
                    $.each(berhasil, function (key, value) {
                        console.log(value);
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
<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

@endsection

