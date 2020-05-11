@extends('layout.app')

		@section('title','CRUD Produk')

		@section('judul')
			Detail Data Produk
		@endsection

		@section('konten')
			
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Detail Produk</h3>
							</div>
							<div class="panel-body">
								<p>
									<label for="product_name">Nama Produk</label>
									<input type="text" class="form-control" name="product_name" value="{{$products->product_name}}" readonly>
								</p>
								<p>
									<label for="price">Harga Produk</label>
									<input type="number" class="form-control" name="price" value="{{$products->price}}" readonly>
								</p>
								<p>
									<label for="description">Deskripsi Produk</label>
									<input type="text" class="form-control" name="description" value="{{$products->description}}" readonly>
								</p>
								<p>
									<label for="product_rate">Rating Produk</label>
									<input type="number" class="form-control" name="product_rate" value="{{$products->product_rate}}" readonly>
								</p>
								<p>
									<label for="created_at">Tgl Tambah Produk</label>
									<input type="text" class="form-control" name="created_at" value="{{$products->created_at}}" readonly>
								</p>
								<p>
									<label for="updated_at">Tgl Update Produk</label>
									<input type="text" class="form-control"  name="updated_at" value="{{$products->updated_at}}" readonly>
								</p>
								<p>
									<label for="stock">Stok Produk</label>
									<input type="number" class="form-control" name="stock" value="{{$products->stock}}" readonly>
								</p>
								<p>
									<label for="weight">Berat Produk(gram)</label>
									<input type="number" class="form-control" name="weight" value="{{$products->weight}}" readonly>
								</p>
					
								<p>
									<input type="button" class="btn btn-warning" value="Kembali" onclick="location.href='/admin/products'">
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		@endsection	