@extends('layout.app')

		@section('title','CRUD Courier')

		@section('judul')
			Daftar Kurir
		@endsection

		@section('konten')
			<input type="button" value="Tambah Kurir Baru" onclick="location.href='/courier/create'">
			<br>
			@if($all_courier->isEmpty())
				Belum ada data ...
			@else
			<table align='center' border=1>
				<tr>
					<th>ID</th>
					<th>Nama Kurir</th>
                    <th>Action</th>
				</tr>
				@foreach($all_courier as $courier)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$courier->courier}}</td>
						<td>
							<span>
								<input type="button" value="Edit" onclick="location.href='/courier/{{$courier->id}}/edit'">
								<form style="display:inline-block;" action="/courier/{{$courier->id}}" method="post">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
								</form>
								<input type="button" value="Details" onclick="location.href='/courier/{{$courier->id}}'">
							</span>
						</td>
					</tr>
				@endforeach
			</table>
			@endif
		@endsection