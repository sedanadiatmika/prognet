@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Daftar Kategori
		@endsection

		@section('konten')
			<input type="button" value="Tambah Kategori Baru" onclick="location.href='/admin/category/create'">
			<br>
			@if($all_category->isEmpty())
				Belum ada data ...
			@else
			<table align='center' border=1>
				<tr>
					<th>ID</th>
					<th>Nama Kategori</th>
                    <th>Action</th>
				</tr>
				@foreach($all_category as $category)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$category->category_name}}</td>
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/admin/category/{{$category->id}}/edit'">
								<form style="display:inline-block;" action="/admin/category/{{$category->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/admin/category/{{$category->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection