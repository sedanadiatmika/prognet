@extends('layout.app')

		@section('title','CRUD Courier')

		@section('judul')
			Edit Kurir
		@endsection

		@section('konten')

		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Kurir</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/courier/{{$courier->id}}" method="POST">
									@csrf
									@method('PUT')
									<p>
										<label for="courier">Nama Produk</label>
										<input type="text" class="form-control" name="courier" value="{{$courier->courier}}">
									</p>
					
									<p>
										<input type="submit" class="btn btn-primary" value="Simpan">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection