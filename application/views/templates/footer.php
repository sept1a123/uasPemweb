	<footer class="footer mt-auto bg-light">
		<div class="container">
			<div class="row my-4">
				<div class="col-lg footer-copyright my-auto">
					<h6 class="text-dark">Copyright &copy; 2024 by Kelompok 7</h6>
					<div class="row">
						<div class="col-sm-4 col-12 my-2 text-left">
							<a class="text-decoration-none text-dark" href="<?= base_url('admin'); ?>">Login Admin</a>
						</div>
						<div class="col-sm-4 col-12 my-2 text-left">
							<a class="text-decoration-none text-dark" href="<?= base_url('landing/privacyPolicy'); ?>">Privacy Policy</a>
						</div>
						<div class="col-sm-4 col-12 my-2 text-left">
							<a class="text-decoration-none text-dark" href="<?= base_url('landing/termsAndConditions'); ?>">Terms & Conditions</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</footer>

	<a class="scroll-to-top rounded" href="#page-top">
	  <i class="fas fa-angle-up"></i>
	</a>
	<div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
	<div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('message-success'); ?>"></div>
	<div class="flashdata-failed" data-flashdata="<?= $this->session->flashdata('message-failed'); ?>"></div>
	<!-- ./Sweet Alert 2 -->

</body>
</html>