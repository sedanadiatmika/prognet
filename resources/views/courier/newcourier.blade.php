@extends('layout.app')

		@section('title','CRUD Courier')

		@section('judul')
			Tambah Kurir
		@endsection

		@section('konten')

		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Tambah Kurir</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/courier" method="POST">
									@csrf
									<p>
										<label for="courier">Nama Kurir</label>
										<input type="text" class="form-control" name="courier" required>
									</p>
									<p>
										<input type="submit" class="btn btn-primary" value="Simpan">
										<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/courier'">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection