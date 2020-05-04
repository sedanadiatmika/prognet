@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Tambah Products
		@endsection

		@section('konten')
			<form action="/admin/products" method="POST">
				@csrf

                
				<p>
					<label for="product_name">Nama Produk</label>
					<input type="text" name="product_name" required>
				</p>
                <p>
					<label for="price">Harga</label>
					<input type="number" name="price" required>
				</p>
				<p>
					<label for="description">Deskripsi</label>
					<input type="text" name="description">
				</p>
				<p>
					<label for="product_rate">Rating Produk</label>
					<input type="number" name="product_rate">
				</p>
                <p>
					<label for="stock">Stok</label>
					<input type="number" name="stock" required>
				</p>
                <p>
					<label for="weight">Berat Produk(gram)</label>
					<input type="number" name="weight" required>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/admin/products'">
				</p>
			</form>
		@endsection