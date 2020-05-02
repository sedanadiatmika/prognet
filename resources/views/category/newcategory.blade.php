@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Tambah Kategori
		@endsection

		@section('konten')
			<form action="/category" method="POST">
				@csrf

                
				<p>
					<label for="category_name">Nama Kategori</label>
					<input type="text" name="category_name" required>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/category'">
				</p>
			</form>
		@endsection