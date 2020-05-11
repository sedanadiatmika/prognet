@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Detail Data Kategori
		@endsection

		@section('konten')

		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Kategori</h3>
							</div>
							<div class="panel-body">
								<p>
									<label for="category_name">Nama Produk</label>
									<input type="text" class="form-control" name="category_name" value="{{$category->category_name}}" readonly>
								</p>
								<p>
									<label for="created_at">Tgl Tambah Produk</label>
									<input type="text" class="form-control" name="created_at" value="{{$category->created_at}}" readonly>
								</p>
								<p>
									<label for="updated_at">Tgl Update Produk</label>
									<input type="text" class="form-control"  name="updated_at" value="{{$category->updated_at}}" readonly>
								</p>
					
								<p>
									<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/admin/category'">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection	