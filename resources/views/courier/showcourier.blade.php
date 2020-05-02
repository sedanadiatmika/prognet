@extends('layout.app')

		@section('title','CRUD Produk')

		@section('judul')
			Detail Data Kurir
		@endsection

		@section('konten')
			
			<p>
				<label for="courier">Nama Kurir</label>
				<input type="text" name="courier" value="{{$courier->courier}}" readonly>
			</p>
            <p>
				<label for="created_at">Tgl Tambah Kurir</label>
				<input type="text" name="created_at" value="{{$courier->created_at}}" readonly>
			</p>
            <p>
				<label for="updated_at">Tgl Update Kurir</label>
				<input type="text"  name="updated_at" value="{{$courier->updated_at}}" readonly>
			</p>

			<p>
				<input type="button" value="Kembali" onclick="location.href='/courier'">
			</p>
		@endsection	