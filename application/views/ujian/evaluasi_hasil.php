<div class="container animated fadeIn fast">
    <h2 class="text-center">Evaluasi Hasil</h2>
    <h3 class="text-center">Nama :
    <?php

                if(empty($hasil->nama)){
                    echo "Kerjakan Tryout Terlebih Dahulu";
                } else {
                    echo $hasil->nama;
                }

            ?>
    </h3>
    <table class="table table-striped">
        <tr>
            <td>Tes Wawasan Kebangsaan </td>
            <td><?php

            if(empty($hasil->nilai_twk)){
                echo "Kosong";
            } else {
                echo $hasil->nilai_twk;
            }

            ?></td>
        </tr>
        <tr>
            <td>Tes Intelegensia Umum </td>
            <td><?php

            if(empty($hasil->nilai_tiu)){
                echo "Kosong";
            } else {
                echo $hasil->nilai_tiu;
            }

            ?></td>
        </tr>
        <tr>
            <td>Tes Karakteristik Pribadi </td>
            <td><?php

            if(empty($hasil->nilai_tkp)){
                echo "Kosong";
            } else {
                echo $hasil->nilai_tkp;
            }

            ?></td>
        </tr>
        <tr>
            <td>Total SKD </td>
            <td><?php

                if(empty($hasil->nilai_twk) && empty($hasil->nilai_tiu) && empty($hasil->nilai_tkp)){
                    echo "Kosong";
                } else {
                    echo $hasil->nilai_twk + $hasil->nilai_tiu + $hasil->nilai_tkp;
                }

            ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <?php

                    if( empty($hasil->nilai_twk) && empty($hasil->nilai_tiu) && empty($hasil->nilai_tkp) ){
                        echo "Kosong";
                    }else{
                        if($hasil->nilai_twk>= 75 && $hasil->nilai_tiu >= 80 && $hasil->nilai_tkp >= 143){
                            echo "<strong>LULUS Ambang Batas</strong>";
                        }else{
                            echo "<stron>TIDAK LULUS Ambang Batas</strong>";
                        }
                    }


                ?>
            </td>
        </tr>
    </table>
</div>
