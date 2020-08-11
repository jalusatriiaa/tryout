<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <?=form_open('profil/editProfil')?>
                <div class="form-group">
                    <label for="nama_lengkap">Nama</label>
                    <input placeholder="Nama Lengkap" type="text" class="form-control" name="nama_lengkap" value="<?= ($identitas->nama) ?>">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input placeholder="Asal Sekolah" type="text" class="form-control" name="asal_sekolah" value="<?= ($identitas->sekolah) ?>">
                    <small class="help-block"></small>
                </div>
                <div class="form-group text-center">
                    <button type="reset" class="btn btn-primary">
                        <i class="fa fa-rotate-left"></i> Reset
                    </button>
                    <button id="submit" type="submit" class="btn btn-success bg-purple"><i class="fa fa-save"></i> Simpan</button>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/add.js"></script>
