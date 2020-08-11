			</div>
			<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Main Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Siap Tryout 2020</span>
				</div>
				</div>
			</footer>

			</div>

			<!-- Required JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap4.min.js"></script>

			<!-- Datatables Buttons -->
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

			<script src="<?= base_url() ?>assets/bower_components/pace/pace.min.js"></script>

			<!-- Textarea editor -->
			<script src="<?= base_url() ?>assets/bower_components/codemirror/lib/codemirror.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/codemirror/mode/xml.min.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>
			<script src="<?=base_url()  ?>assets/bower_components/summernote-0.8.16-dist/summernote-bs4.min.js"></script>

			<!-- App JS -->
			<script src="<?= base_url() ?>assets/dist/js/sb-admin-2.js"></script>
			<script src="<?= base_url() ?>assets/bower_components/jquery-easing/jquery.easing.min.js"></script>
			<script src="<?= base_url() ?>assets/dist/js/app/dashboard.js"></script>

			<!--Start of Tawk.to Script-->
			<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5e89601d69e9320caac058d5/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
			</script>
			<!--End of Tawk.to Script-->

			<!-- Custom JS -->
			<script type="text/javascript">
				$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
					return {
						"iStart": oSettings._iDisplayStart,
						"iEnd": oSettings.fnDisplayEnd(),
						"iLength": oSettings._iDisplayLength,
						"iTotal": oSettings.fnRecordsTotal(),
						"iFilteredTotal": oSettings.fnRecordsDisplay(),
						"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
						"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
					};
				};

				function ajaxcsrf() {
					var csrfname = '<?= $this->security->get_csrf_token_name() ?>';
					var csrfhash = '<?= $this->security->get_csrf_hash() ?>';
					var csrf = {};
					csrf[csrfname] = csrfhash;
					$.ajaxSetup({
						"data": csrf
					});
				}

				function reload_ajax() {
					table.ajax.reload(null, false);
				}
			</script>

			<!-- <a class="scroll-to-top rounded mb-5 mr-3" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a> -->

			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yakin mau Keluar??</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					</div>
					<div class="modal-body">Tekan "Keluar" Jika kamu ingin keluar dari Siap Tryout.</div>
					<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?=base_url('logout')?>">Keluar</a>
					</div>
				</div>
				</div>
			</div>

			</body>

			</html>
