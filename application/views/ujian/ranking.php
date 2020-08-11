<!-- <h2> Real time ranking sedang dalam perbaikan, ranking nasional akan diumumkan di Instagram @ambiseducation setelah tryout berakhir</h2> -->
<div class="card animated fadeIn slow shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ranking Nasional</h6>
    </div>
    <div class="card-body animated fadeIn fast">
    <div class="table-responsive">
    <table class="table table-bordered" id="detail_hasil" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>TWK</th>
                <th>TIU</th>
                <th>TKP</th>
                <th>TOTAL SKD</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>TWK</th>
                <th>TIU</th>
                <th>TKP</th>
                <th>TOTAL SKD</th>
            </tr>
        </tfoot>
        </table>
    </div>
</div>
</div>

<script type="text/javascript">
    var id = '<?=$this->uri->segment(3)?>';
</script>

<script src="<?=base_url()?>assets/dist/js/app/ujian/ranking.js"></script>
