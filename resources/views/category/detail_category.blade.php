@extends('layout.app')

		@section('title','CRUD Detail Category')

		@section('judul')
			Daftar Kategori Detilnya
		@endsection

		@section('konten')
			<input type="button" value="Tambah Kategori Baru" onclick="location.href='/category/create'">
			<br>
			@if($all_detailcategory->isEmpty())
				Belum ada data ...
			@else
			<table align='center' border=1>
				<tr>
					<th>No</th>
					<th>ID detil Kategori</th>
                    <th>Produk</th>
				</tr>
				@foreach($all_detailcategory as $detailcategory)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$detailcategory->id}}</td>
                        
                        @foreach($detailcategory->products as $product)
						<tr>
							<td>{{ $product->product_name }}</td>
						</tr>
						@endforeach
					</tr>
				@endforeach
			</table>
			@endif
		@endsection