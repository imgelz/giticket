<div id="modal-buat-event" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-buat-event" name="form" class="form-horizontal">
                <input type="hidden" name="id" id="data-id">
                <div class="form-group">
                    <div class="col-lg-12">
                        <img id="image-preview" src="/backend/dist/img/modal-event.png" class="form-control previw" style="height:450px; width:100%" alt="image preview">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12" style="margin-top:-1rem">
                        <input type="file" class="form-control" id="image-source" id="spanduk" name="spanduk" placeholder="Gambar" maxlength="50" autocomplete="off" onchange="previewImage();">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Nama Event*</label>
                        <input type="text" class="form-control" id="nama_event" name="nama_event" placeholder=" nama event" maxlength="50" autocomplete="off" onchange="previewImage();">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-lg-6">
                        <label for="name" class="control-label">Kategori*</label>
                        <select name="id_kategori" id="id_kategori" class="form-control" placeholder="Pilih Kategori">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row" style="margin-left:0.1rem">
                        <div class="col-lg-3">
                            <label for="name" class="control-label">Tanggal Mulai*</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" maxlength="50" autocomplete="off" onchange="previewImage();">
                        </div>
                        <div class="col-lg-3">
                            <label for="name" class="control-label">Tanggal Selesai*</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" maxlength="50" autocomplete="off" onchange="previewImage();">
                        </div>
                        <div class="col-lg-2">
                            <label for="name" class="control-label">Waktu Mulai*</label>
                            <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" maxlength="50" autocomplete="off" onchange="previewImage();">
                        </div>
                        <div class="col-lg-2">
                            <label for="name" class="control-label">Waktu Selesai*</label>
                            <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai" maxlength="50" autocomplete="off" onchange="previewImage();">
                        </div>
                        <div class="col-lg-2">
                            <label for="name" class="control-label">Format Waktu*</label>
                            <select class="custom-select" id="inputGroupSelect01" name="format_waktu">
                                <option value=""></option>
                                <option value="WIB">WIB</option>
                                <option value="WITA">WITA</option>
                                <option value="WIT">WIT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Lokasi Event*</label>
                        <textarea name="lokasi" id="lokasi" class="form-control" placeholder="Tempat, Alamat, Ds/Kel, Kecamatan, Kab/Kota, Privinsi" cols="30" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Deskripsi*</label>
                        <textarea class="textarea" name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Syarat & Ketentuan*</label>
                        <textarea class="textarea" name="syarat" id="syarat" class="form-control" cols="30" rows="7"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-block btn-primary" id="simpan">Simpan</button>
        </div>
    </div>
  </div>
</div>

<style>
    .form-control {
        padding: .1rem .1rem;
    }
</style>

<script>
    function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>
<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
