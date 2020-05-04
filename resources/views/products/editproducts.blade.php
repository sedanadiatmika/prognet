@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Edit Products
		@endsection

		@section('konten')
			<form action="/products/{{$products->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="product_name">Nama Produk</label>
					<input type="text" name="product_name" value="{{$products->product_name}}">
				</p>
                <p>
					<label for="price">Harga</label>
					<input type="number" name="price" value="{{$products->price}}">
				</p>
                <p>
					<label for="description">Deskripsi</label>
					<input type="text" name="description" value="{{$products->description}}">   
				</p>
                <p>
				    <label for="product_rate">Rating Produk</label>
				    <input type="number" name="product_rate" value="{{$products->product_rate}}">
			    </p>
                <p>
					<label for="stock">Stok</label>
					<input type="number" name="stock" value="{{$products->stock}}">
				</p>
                <p>
					<label for="weight">Berat (gram)</label>
					<input type="number" name="weight" value="{{$products->weight}}">
				</p>

				
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection