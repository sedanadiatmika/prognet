@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Detail Data Kategori
		@endsection

		@section('konten')
			
			<p>
				<label for="category_name">Nama Produk</label>
				<input type="text" name="category_name" value="{{$category->category_name}}" readonly>
			</p>
            <p>
				<label for="created_at">Tgl Tambah Produk</label>
				<input type="text" name="created_at" value="{{$category->created_at}}" readonly>
			</p>
            <p>
				<label for="updated_at">Tgl Update Produk</label>
				<input type="text"  name="updated_at" value="{{$category->updated_at}}" readonly>
			</p>

			<p>
				<input type="button" value="Kembali" onclick="location.href='/category'">
			</p>
		@endsection	