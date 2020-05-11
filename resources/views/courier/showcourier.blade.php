@extends('layout.app')

		@section('title','CRUD Produk')

		@section('judul')
			Detail Data Kurir
		@endsection

		@section('konten')
			
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Kurir</h3>
							</div>
							<div class="panel-body">
								<p>
									<label for="courier">Nama Kurir</label>
									<input type="text" class="form-control" name="courier" value="{{$courier->courier}}" readonly>
								</p>
								<p>
									<label for="created_at">Tgl Tambah Kurir</label>
									<input type="text" class="form-control" name="created_at" value="{{$courier->created_at}}" readonly>
								</p>
								<p>
									<label for="updated_at">Tgl Update Kurir</label>
									<input type="text" class="form-control" name="updated_at" value="{{$courier->updated_at}}" readonly>
								</p>
					
								<p>
									<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/admin/courier'">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection	