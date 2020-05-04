@extends('layout.app')

		@section('title','CRUD Courier')

		@section('judul')
			Edit Kurir
		@endsection

		@section('konten')
			<form action="/admin/courier/{{$courier->id}}" method="POST">
				@csrf
				@method('PUT')
				<p>
					<label for="courier">Nama Produk</label>
					<input type="text" name="courier" value="{{$courier->courier}}">
				</p>

				
				<p>
					<input type="submit" value="Simpan">
				</p>
			</form>
		@endsection