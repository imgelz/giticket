<div class="modal fade" id="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form id="form" name="form" class="form-horizontal">
                    <input type="hidden" name="id" id="data-id">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <img id="image-preview" src="/backend/dist/img/modal-event.png" class="form-control previw" style="height:400px; width:100%" alt="image preview">
                            <input type="file" id="image-source" class="form-control" id="foto" name="foto" placeholder="Foto" maxlength="50" autocomplete="off" required onchange="previewImage();">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel" maxlength="50" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Deskripsi</label>
                            <textarea name="konten" id="konten" class="form-control textarea" placeholder="Deskripsi" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-danger pull-left"id="reset">Batal</button>
                <button align="right" type="submit" class="btn btn-primary" id="simpan">Simpan</button>
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
