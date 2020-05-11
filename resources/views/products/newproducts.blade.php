@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Tambah Products
		@endsection

		@section('konten')

		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Tambah Produk</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/products" method="POST">
									@csrf
									
									<p>
										<label for="product_name">Nama Produk</label>
										<input type="text" class="form-control" name="product_name" required>
									</p>
									<p>
										<label for="price">Harga</label>
										<input type="number" class="form-control" name="price" required>
									</p>
									<p>
										<label for="description">Deskripsi</label>
										<input type="text" class="form-control" name="description">
									</p>
									<p>
										<label for="product_rate">Rating Produk</label>
										<input type="number" class="form-control" name="product_rate">
									</p>
									<p>
										<label for="stock">Stok</label>
										<input type="number" class="form-control" name="stock" required>
									</p>
									<p>
										<label for="weight">Berat Produk(gram)</label>
										<input type="number" class="form-control" name="weight" required>
									</p>
									<p>
										<input type="submit" class="btn btn-primary" value="Simpan">
										<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/admin/products'">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		@endsection