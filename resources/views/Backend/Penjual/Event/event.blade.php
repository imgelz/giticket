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
                    @foreach ($event as $item)
                        <div class="col-lg-3 col-6">
                            <div class="small-box card" style="border:1px solid #71707085">
                                <a href=""><img class="card-img-top" src="/assets/front/event/{{ $item->spanduk }}" alt="Card image cap"></a>
                                <div class="card-body fade-in">
                                    <h5 class="card-title">{{ $item->nama_event }}</h5>
                                    <br>
                                    <small style="color:#e86b32">{{ $item->id_kategori }}</small>
                                    <br><hr>
                                    <div class="row">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/calendar.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:0.5rem; color:#948e8e">{{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d M Y')}} - {{ \Carbon\Carbon::parse($item->tanggal_selesai)->format('d M Y')}}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0.5rem">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/clock.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:0.5rem; color:#948e8e">{{ \Carbon\Carbon::parse($item->waktu_mulai)->format('H:i')}} - {{ \Carbon\Carbon::parse($item->waktu_selesai)->format('H:i')}}  {{ $item->format_waktu }}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0.5rem">
                                        <div class="col-sm-1" style="">
                                            <img src="/frontend/icon/pin.png" width="20px">
                                        </div>
                                        <div class="col-sm" style="">
                                            <span style="margin-left:0.5rem; color:#948e8e">{{ $item->lokasi }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
