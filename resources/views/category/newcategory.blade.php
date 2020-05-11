@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Tambah Kategori
		@endsection

		@section('konten')
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/admin/products" class=""><i class="lnr lnr-code"></i> <span>Products</span></a></li>
						<li><a href="/admin/category" class="active"><i class="lnr lnr-chart-bars"></i> <span>Category</span></a></li>
						<li><a href="/admin/courier" class=""><i class="lnr lnr-cog"></i> <span>Courier</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Tambah Kategori</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/category" method="POST">
									@csrf
									<p>
										<label for="category_name">Nama Kategori</label>
										<input type="text" class="form-control" name="category_name" required>
									</p>
									<p>
										<input type="submit" class="btn btn-primary" value="Simpan">
										<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/category'">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endsection