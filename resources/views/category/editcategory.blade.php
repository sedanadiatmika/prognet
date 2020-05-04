@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Edit Kategori
		@endsection

		@section('konten')
			<form action="/admin/category/{{$category->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="category_name">Nama Produk</label>
					<input type="text" name="category_name" value="{{$category->category_name}}">
				</p>

				
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection