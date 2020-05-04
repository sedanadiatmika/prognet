@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Daftar Products
		@endsection

		@section('konten')
			<input type="button" value="Tambah Products Baru" onclick="location.href='/admin/products/create'">
			<br>
			@if($all_products->isEmpty())
				Belum ada data ...
			@else
			<table align='center' border=1>
				<tr>
					<th>No</th>
					<th>Nama</th>
                    <th>Harga</th>
					<th>Deskripsi</th>
					<th>Rating</th>
                    <th>Stok</th>
                    <th>Berat</th>
					<th>Action</th>
				</tr>
				@foreach($all_products as $products)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$products->product_name}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->description}}</td>
						<td>{{$products->product_rate}}</td>
                        <td>{{$products->stock}}</td>
                        <td>{{$products->weight}}</td>
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/admin/products/{{$products->id}}/edit'">
								<form style="display:inline-block;" action="/admin/products/{{$products->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/admin/products/{{$products->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection