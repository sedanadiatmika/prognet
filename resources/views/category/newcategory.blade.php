@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Tambah Kategori
		@endsection

		@section('konten')

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