<div class="row">
    <div class="col-lg-3">
        <div class="card animated fadeIn fast" style="width: 18rem;">
            <img class="card-img-top" src="assets/dist/img/user1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nama : <?= $profil->nama ?></h5>
            </div>
            <div class="card-body">
                <p class="text-center">Status :

                <?php if($profil->kelas_id == "1" ) : ?>
                    <strong>FREE</strong>
                <?php else : ?>
                    <strong>PREMIUM</strong>
                <?php endif; ?>
                 </p>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
    <div class="container">
    <table class="table animated fadeIn fast">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Username</td>
                <td><?= $profil->username ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?= $profil->email ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?= $profil->nama ?></td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td><?= $profil->sekolah ?></td>
            </tr>
        </tbody>
        </table>
        <!-- <a href="" class="btn btn-primary float-right">Edit Profil</a> -->
        </div>
    </div>
</div>
