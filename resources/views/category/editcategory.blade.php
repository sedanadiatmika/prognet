@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Edit Kategori
		@endsection

		@section('konten')

		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Kategori</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/category/{{$category->id}}" method="POST">
									@csrf
									@method('PUT')
									<p>
										<label for="category_name">Nama Produk</label>
										<input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
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