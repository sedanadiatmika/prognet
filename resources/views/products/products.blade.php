@extends('layout.app')

		@section('title','CRUD Products')

		@section('judul')
			Daftar Products
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
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Produk</h3>
								</div>
								<div class="panel-body">
									<input type="button" class="btn btn-primary" value="Tambah Products Baru" onclick="location.href='/admin/products/create'">
									@if($all_products->isEmpty())
										Belum ada data ...
									@else
									<table class="table table-hover">
										<thead>
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
										</thead>
										<tbody>
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
															<input type="button" class="btn btn-warning" value="Edit" onclick="location.href='/admin/products/{{$products->id}}/edit'">
															<form style="display:inline-block;" action="/admin/products/{{$products->id}}" method="post">
																@csrf
																@method('DELETE')
																<input type="submit" class="btn btn-danger" value="Delete">
															</form>
															<input type="button" class="btn btn-info" value="Details" onclick="location.href='/admin/products/{{$products->id}}'">
														</span>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection