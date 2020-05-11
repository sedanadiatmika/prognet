@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Edit Products
		@endsection

		@section('konten')
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/admin/products" class="active"><i class="lnr lnr-code"></i> <span>Products</span></a></li>
						<li><a href="/admin/category" class=""><i class="lnr lnr-chart-bars"></i> <span>Category</span></a></li>
						<li><a href="/admin/courier" class=""><i class="lnr lnr-cog"></i> <span>Courier</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Produk</h3>
							</div>
							<div class="panel-body">
								<form action="/admin/products/{{$products->id}}" method="POST">
									@csrf
									@method('PUT')
									<p>
										<label for="product_name">Nama Produk</label>
										<input type="text" class="form-control" name="product_name" value="{{$products->product_name}}">
									</p>
									<p>
										<label for="price">Harga</label>
										<input type="number" class="form-control" name="price" value="{{$products->price}}">
									</p>
									<p>
										<label for="description">Deskripsi</label>
										<input type="text" class="form-control" name="description" value="{{$products->description}}">   
									</p>
									<p>
										<label for="product_rate">Rating Produk</label>
										<input type="number" class="form-control" name="product_rate" value="{{$products->product_rate}}">
									</p>
									<p>
										<label for="stock">Stok</label>
										<input type="number" class="form-control" name="stock" value="{{$products->stock}}">
									</p>
									<p>
										<label for="weight">Berat (gram)</label>
										<input type="number" class="form-control" name="weight" value="{{$products->weight}}">
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