<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!-- Main content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title">Bordered Table</h3>
					</div>
					<div class="card-body">
						<form id="formCari">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="far fa-calendar-alt"></i>
										</span>
									</div>
									<input type="text" class="form-control float-right" id="daterange">
								</div>
								<!-- /.input group -->
							</div>
							<div class="form-group">
								<select class="form-control select2bs4" style="width: 100%;" id="cabang"></select>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-block btn-primary">Cari..</button>
							</div>
						</form>

						<table id="table" class="table table-bordered table-hover text-nowrap table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Tipe</th>
									<th>Cabang</th>
									<th>Create</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Tipe</th>
									<th>Cabang</th>
									<th>Create</th>
									<th>Delete</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="card-footer">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
				