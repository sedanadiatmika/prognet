@extends('layout.app')

		@section('title','CRUD Courier')

		@section('judul')
			Tambah Kurir
		@endsection

		@section('konten')
			<form action="/admin/courier" method="POST">
				@csrf

                
				<p>
					<label for="courier">Nama Kurir</label>
					<input type="text" name="courier" required>
				</p>
				<p>
					<input type="submit" value="Simpan">
					<input type="button" value="Kembali" onclick="location.href='/courier'">
				</p>
			</form>
		@endsection