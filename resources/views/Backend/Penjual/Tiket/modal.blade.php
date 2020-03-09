<div id="modal-buat-tiket" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-buat-tiket" name="form" class="form-horizontal">
                <input type="hidden" name="id" id="data-id">
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Nama Tiket*</label>
                        <input type="text" class="form-control" id="nama_tiket" name="nama_tiket" maxlength="50" autocomplete="off">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Pilih Event*</label>
                        <select id="id_event" name="id_event" class="form-control" placeholder="Pilih Event">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Harga*</label>
                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="harga" name="harga" min="10000" max="10000000">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Jumlah Tiket*</label>
                        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" maxlength="50" autocomplete="off" min="1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="name" class="control-label">Deskripsi*</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="7"></textarea>
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
