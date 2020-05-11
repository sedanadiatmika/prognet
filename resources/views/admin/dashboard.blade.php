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
								<h3 class="panel-title">{{ "Selamat datang ".Auth::guard('admin')->user()->name }}</h3>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
			
        
		@endsection	
