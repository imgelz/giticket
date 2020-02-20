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
                            <label for="name" class="control-label">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Artikel" maxlength="50" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" maxlength="50" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Deskripsi</label>
                            <textarea name="konten" id="konten" class="form-control" placeholder="Deskripsi" cols="30" rows="10"></textarea>
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
