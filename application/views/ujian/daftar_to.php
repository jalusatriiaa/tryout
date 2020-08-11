<?php
$jml_to = $tryout;
echo "</br>";
// print_r($jml_to);
foreach ($jml_to as $key => $value) :
  foreach ($value as $sub_key => $sub_value) :

?>
    <div class="col-sm-3 col-xl-3 col-md-6 mb-4">
      <div class="card animated fadeIn fast" style="width: 18rem;">
        <!-- <img class="card-img-top" class= "img-fluid" src="../assets/dist/img/Asset 6.png" alt="Card image cap"> -->
        <div class="card-body ">
          <h5 class="card-title">Tryout <?= $sub_value; ?></h5>
          <p class="card-text">Tryout Online SKD</p>
          <div class="text-center">
            <h4><a href="<?= base_url('ujian/list/' . $sub_value) ?>" class="btn btn-primary" name="tryout" id="tryout" value="<?= $sub_value; ?>">Kerjakan Tryout</a></h4>
            <input type="hidden" name="tryout_id" value="<?= $sub_value; ?>">
            <h4><a href="<?= base_url('hasilujian/evaluasi_hasil/' . $sub_value) ?>" class="btn btn-success" name="tryout" id="tryout" value="<?= $sub_value; ?>">Evaluasi Hasil</a></h4>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
<?php endforeach; ?>
