<div class="row justify-content-center">
    <div class="col-sm-12">
        <?=form_open_multipart('soal/save', array('id'=>'formsoal'), array('method'=>'add'));?>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="box-title"><?=$subjudul?></h3>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-group col-sm-12">
                            <label>Dosen (Mata Kuliah)</label>
                            <?php if( $this->ion_auth->is_admin() ) : ?>
                            <select name="dosen_id" required="required" id="dosen_id" class="select2 form-group" style="width:100% !important">
                                <option value="" disabled selected>Pilih Dosen</option>
                                <?php foreach ($dosen as $d) : ?>
                                    <option value="<?=$d->id_dosen?>:<?=$d->mataujian_id?>"><?=$d->nama_dosen?> (<?=$d->nama_mataujian?>)</option>
                                <?php endforeach; ?>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('dosen_id')?></small>
                            <?php else : ?>
                            <input type="hidden" name="dosen_id" value="<?=$dosen->id_dosen;?>">
                            <input type="hidden" name="mataujian_id" value="<?=$dosen->mataujian_id;?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?=$dosen->nama_dosen; ?> (<?=$dosen->nama_mataujian; ?>)">
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-12">
                            <label for="soal" class="control-label">Soal</label>
                            <div class="form-group">
                                <input type="file" name="file_soal" class="form-control">
                                <small class="help-block" style="color: #dc3545"><?=form_error('file_soal')?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="soal" class="form-control summernote"><?=set_value('soal')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('soal')?></small>
                            </div>
                        </div>

                        <!--
                            Membuat perulangan A-E
                        -->
                        <?php
                        $abjad = ['a', 'b', 'c', 'd', 'e'];
                        foreach ($abjad as $abj) :
                            $ABJ = strtoupper($abj); // Abjad Kapital
                        ?>

                        <div class="col-sm-12">
                            <label for="file">Jawaban <?= $ABJ; ?></label>
                            <div class="form-group">
                                <input type="file" name="file_<?= $abj; ?>" class="form-control">
                                <small class="help-block" style="color: #dc3545"><?=form_error('file_'.$abj)?></small>
                            </div>
                            <div class="form-group">
                                <textarea name="jawaban_<?= $abj; ?>" id="jawaban_<?= $abj; ?>" class="form-control summernote"><?=set_value('jawaban_a')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('jawaban_'.$abj)?></small>
                            </div>
                            <div class="form-group">
                                <label for="poin_<?= $abj; ?>" class="control-label">Poin Jawaban</label>
                                <input required="required" value="0" type="number" name="poin_<?= $abj; ?>" id="poin_<?= $abj; ?>" class="form-control"><?=set_value('poin_a')?></input>
                                <small class="help-block" style="color: #dc3545"><?=form_error('poin_'.$abj)?></small>
                            </div>
                        </div>

                        <?php endforeach; ?>

                        <div class="form-group col-sm-12">
                            <label for="jawaban" class="control-label">Kunci Jawaban</label>
                            <select required="required" name="jawaban" id="jawaban" class="form-control select2" style="width:100%!important">
                                <option value="" disabled selected>Pilih Kunci Jawaban</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <small class="help-block" style="color: #dc3545"><?=form_error('jawaban')?></small>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="bobot" class="control-label">Bobot Soal</label>
                            <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" id="bobot" class="form-control">
                            <small class="help-block" style="color: #dc3545"><?=form_error('bobot')?></small>
                        </div>
                        <div class="col-sm-12">
                            <label for="pembahasan" class="control-label">Pembahasan</label>
                            <div class="form-group">
                                <textarea name="pembahasan" id="pembahasan" class="form-control summernote"><?=set_value('soal')?></textarea>
                                <small class="help-block" style="color: #dc3545"><?=form_error('pembahasan')?></small>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a href="<?=base_url('soal')?>" class="btn btn-warning btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-success bg-purple"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=form_close();?>
    </div>
</div>
