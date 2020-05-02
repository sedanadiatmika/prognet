@extends('layout.app')

		@section('title','CRUD Produk')

		@section('judul')
			Detail Data Produk
		@endsection

		@section('konten')
			
			<p>
				<label for="product_name">Nama Produk</label>
				<input type="text" name="product_name" value="{{$products->product_name}}" readonly>
			</p>
            <p>
				<label for="price">Harga Produk</label>
				<input type="number" name="price" value="{{$products->price}}" readonly>
			</p>
			<p>
				<label for="description">Deskripsi Produk</label>
				<input type="text" name="description" value="{{$products->description}}" readonly>
			</p>
			<p>
				<label for="product_rate">Rating Produk</label>
				<input type="number" name="product_rate" value="{{$products->product_rate}}" readonly>
			</p>
            <p>
				<label for="created_at">Tgl Tambah Produk</label>
				<input type="text" name="created_at" value="{{$products->created_at}}" readonly>
			</p>
            <p>
				<label for="updated_at">Tgl Update Produk</label>
				<input type="text"  name="updated_at" value="{{$products->updated_at}}" readonly>
			</p>
            <p>
				<label for="stock">Stok Produk</label>
				<input type="number" name="stock" value="{{$products->stock}}" readonly>
			</p>
            <p>
				<label for="weight">Berat Produk(gram)</label>
				<input type="number" name="weight" value="{{$products->weight}}" readonly>
			</p>

			<p>
				<input type="button" value="Kembali" onclick="location.href='/products'">
			</p>
		@endsection	