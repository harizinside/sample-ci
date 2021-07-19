			<?php
			defined('BASEPATH') OR exit('No direct script access allowed');
			?><!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
			<!-- Main Footer -->
			<footer class="main-footer">
				<!-- To the right -->
				<div class="float-right d-none d-sm-inline">
					Anything you want
				</div>
				<!-- Default to the left -->
				<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
			</footer>
		</div>
		<?php foreach ($js as $src) :  ?>
		<script type="text/javascript" src="<?= $src ?>" charset="utf-8"></script>
		<?php endforeach; ?>
		<?php if (!is_null($app)) { ?>
		<script type="text/javascript" src="<?= $app ?>" charset="utf-8"></script>
		<?php } ?>
	</body>
</html>