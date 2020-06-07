@extends('layouts.table')
@section('judul','Admin | Detail Kurir Page')
@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail Kurir</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Kode Kurir</td>
                          <td>{{ $couriers->code }}</td>
                      </tbody>
                      <tbody>
                          <td>Title Kurir</td>
                          <td>{{ $couriers->title }}</td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-warning btn-icon-text" onclick="/createProduct">
                          <i class="mdi mdi-file-restore btn-icon-prepend"></i>     
                          <a href="{{ route('couriers.edit', $couriers->id) }}" style="color: white;">Edit Kurir</a>
                  </button>
                  </div>
                </div>
              </div>
            </div>
@endsection