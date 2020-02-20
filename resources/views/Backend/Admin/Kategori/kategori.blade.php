@extends('layouts.Backend.Admin.kategori')

@section('content')
@include('Backend.Admin.Kategori.modal')

<div class="content-wrapper" style="background:transparent">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a class="btn btn-primary" href="javascript:void(0)" id="tambah-kategori">Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table id="dataTable" class="table table-bordered table-striped dataTable">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th width="350px">Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="data-kategori">
                                    </tbody>
                                </table>
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
<!-- DataTables -->
<link rel="stylesheet" href="/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<!-- Sweetalert -->
{{-- <link rel="stylesheet" href="/backend/sweetalert/package/dist/sweetalert2.css"> --}}
<link rel="stylesheet" href="{{asset('backend/sweetalert2/package/dist/sweetalert2.min.css')}}">
@endsection

@section('js')
  <!-- DataTables -->
<script src="/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Sweetalert -->
{{-- <script> src="/backend/sweetalert/package/dist/sweetalert2.js"</script> --}}
<script> src="/backend/sweetalert2/package/dist/sweetalert2.min.js"</script>
<script type="text/javascript">
    $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
            //Data di Tabel
            var table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/admin/kategori')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nama_kategori', name: 'nama_kategori'},
                    {data: 'foto', name: 'foto'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                ]
            });

                $('#tambah-kategori').click(function () {
                $('#form').trigger("reset");
                $('#modal').modal({backdrop: 'static', keyboard: false});
                $('#modal').modal('show');
            });

            $('#simpan').click(function (e) {
                e.preventDefault();
                // $(this).hide();
                var formdata = new FormData($('#form')[0]);
                $.ajax({
                    data: formdata,
                    url: "{{ url('/admin/kategori-store') }}",
                    type: "POST",
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#form').trigger("reset");
                        $('#modal').modal('hide');
                        table.draw();
                        Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                        )
                    },
                    error: function (request, status, error) {
                        console.log(error);
                    }
                });
            });

            //Edit
            $('body').on('click','.edit-kategori',function () {
                var idKategori = $(this).data('id');
                $.get("{{url('/admin/kategori')}}"+"/"+idKategori+"/edit", function(data){
                $('#modal').modal("show");
                $('#data-id').val(data.id);
                $('#nama_kategori').val(data.nama_kategori);
                });
            });
    });
</script>
@endsection
