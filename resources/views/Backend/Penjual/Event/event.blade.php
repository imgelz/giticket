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
                    @if ($event->count() > 0)
                        @foreach ($event as $item)
                            <div class="col-lg-3 col-6">
                                <div class="small-box card" style="border:1px solid #71707085">
                                    <img class="card-img-top" src="/assets/front/event/{{ $item->spanduk }}" alt="Card image cap">
                                    <div class="card-body fade-in">
                                        <h5 class="card-title">{{ $item->nama_event }}</h5>
                                        <br>
                                        <small style="color:#e86b32">{{ $item->kategori->nama_kategori }}</small>
                                        <br><hr>
                                        <div class="row">
                                            <div class="col-sm-1" style="">
                                                <img src="/frontend/icon/calendar.png" width="20px">
                                            </div>
                                            <div class="col-sm" style="">
                                                <span style="margin-left:0.3rem; color:#948e8e">{{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d M Y')}} - {{ \Carbon\Carbon::parse($item->tanggal_selesai)->format('d M Y')}}</span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:0.5rem">
                                            <div class="col-sm-1" style="">
                                                <img src="/frontend/icon/clock.png" width="20px">
                                            </div>
                                            <div class="col-sm" style="">
                                                <span style="margin-left:0.3rem; color:#948e8e">{{ \Carbon\Carbon::parse($item->waktu_mulai)->format('H:i')}} - {{ \Carbon\Carbon::parse($item->waktu_selesai)->format('H:i')}}  {{ $item->format_waktu }}</span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:0.5rem">
                                            <div class="col-sm-1" style="">
                                                <img src="/frontend/icon/pin.png" width="20px">
                                            </div>
                                            <div class="col-sm" style="">
                                                <span style="margin-left:0.3rem; color:#948e8e">{{ $item->lokasi }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="hover-event">
                                        <div class="row" style="margin-left:2.5rem; margin-bottom:0.5rem">
                                            <div class="col-sm"><a href="/event/{{$item->slug}}" id="detail-event" target="_blank" title="Detail"><i class="fa fa-file-alt"></i></a></div>
                                            <div class="col-sm"><a href="javascript:void(0)" id="edit-event" data-id="{{ $item->id }}" title="Ubah"><i class="fa fa-pencil-alt"></i></a></div>
                                            <div class="col-sm"><a href="javascript:void(0)" id="hapus-event" title="Hapus"><i class="fa fa-trash-alt"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif ($event->count() == 0)
                        <div class="container" style="margin-top:7rem">
                            <center>
                                <img src="/backend/icon/fireworks.png">
                                <h1 style="color:black" class="display-4">Belum Ada Event</h1>
                                <p class="lead">Silakan buat eventmu dengan klik button “Buat Event” di atas.</p></<h1>
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

                $('#buat-event').click(function () {
                $('.modal-title').html('Buat Event');
                $('#form-buat-event').trigger("reset");
                $('#image-preview').trigger("reset");
                $('#modal-buat-event').modal({backdrop: 'static', keyboard: false});
                $('#modal-buat-event').modal('show');
            });

            $('#simpan').click(function (e) {
                e.preventDefault();
                // $(this).hide();
                var formdata = new FormData($('#form-buat-event')[0]);
                $.ajax({
                    data: formdata,
                    url: "{{ url('/penjual/event-store') }}",
                    type: "POST",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#form-buat-event').trigger("reset");
                        $('#modal-buat-event').modal('hide');
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

            $('#edit-event').click(function(){
                var idEvent = $(this).data('id');
                $.get("{{ url('penjual/event') }}"+"/"+idEvent+"/edit", function(data){
                    // console.log(data);
                    $('.modal-title').html('Edit Event');
                    $('#modal-buat-event').modal({backdrop: 'static', keyboard: false});
                    $('#modal-buat-event').modal('show');
                    $('#data-id').val(data.id);
                    $('#nama_event').val(data.nama_event);
                    $('#id_kategori').val('')
                    $('#id_kategori').val(data.id_kategori);
                    $('#tanggal_mulai').val(data.tanggal_mulai);
                    $('#tanggal_selesai').val(data.tanggal_selesai);
                    $('#waktu_mulai').val(data.waktu_mulai);
                    $('#waktu_selesai').val(data.waktu_selesai);
                    $('#format_waktu').val('')
                    $('#format_waktu').val(data.format_waktu);
                    $('#lokasi').val(data.lokasi);
                    $('#syarat').html(data.syarat);
                    $('#deskripsi').html(data.deskripsi);
                });
            });

            $.ajax({
                url: "{{ url('event-kategori') }}",
                method: "GET",
                dataType: "json",
                success: function (berhasil) {
                    $.each(berhasil.data, function (key, value) {
                        console.log(value);

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
