@extends('layout.app')

		@section('title','CRUD Category')

		@section('judul')
			Daftar Kategori
		@endsection

		@section('konten')
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/admin/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="/admin/products" class=""><i class="lnr lnr-code"></i> <span>Products</span></a></li>
						<li><a href="/admin/category" class="active"><i class="lnr lnr-chart-bars"></i> <span>Category</span></a></li>
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
									<h3 class="panel-title">Kategori</h3>
								</div>
								<div class="panel-body">
									<input type="button" class="btn btn-primary" value="Tambah Kategori Baru" onclick="location.href='/admin/category/create'">
									@if($all_category->isEmpty())
										Belum ada data ...
									@else
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID</th>
												<th>Nama Kategori</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($all_category as $category)
												<tr>
													<td>{{$loop->iteration}}</td>
													<td>{{$category->category_name}}</td>
													<td>
														<span>
															<input type="button" class="btn btn-warning" value="Edit" onclick="location.href='/admin/category/{{$category->id}}/edit'">
															<form style="display:inline-block;" action="/admin/category/{{$category->id}}" method="post">
																@csrf
																@method('DELETE')
																<input type="submit" class="btn btn-danger" value="Delete">
															</form>
															<input type="button" class="btn btn-info" value="Details" onclick="location.href='/admin/category/{{$category->id}}'">
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