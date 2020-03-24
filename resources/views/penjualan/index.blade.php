@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Company Management Enterprise</h1>

            <div class="section-header-breadcrumb">
              <a href="{{ url('/penjualan/buat_penjualan') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Penjualan</a>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-donate"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Penjualan Belum dibayar (Rp) </h4>
                      </div>
                      <div class="card-body">
                        {{ $tampilpenjualanbelum }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-upload"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Penjualan Jatuh Tempo (Rp) </h4>
                      </div>
                      <div class="card-body">
                        140.000.000
                        masihbelom
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Saldo (Rp)</h4>
                      </div>
                      <div class="card-body">
                        {{ $tampillunas }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        {{-- table --}}
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Penjualan Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="table-1">
                    <thead>                                 
                      <tr class="">
                        <th scope="col" width="10">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No.Faktur</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                      <tbody>
                        @foreach ( $penjualan as $p)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{$p->tanggal}}</td>
                            <td>{{$p->nomor_faktur}}</td>
                            <td>{{$p->nama_pelanggan}}</td>
                            <td>{{$p->status_penjualan}}</td>
                            <td>Rp. <div class="currency" style="display:inline-table;">{{$p->total}}</div></td>
                            <td>@if ($p->status_penjualan == "Lunas")
                              <a class="badge badge-info" href="#">Verifikasi</a>
                                @else
                                  -
                                @endif
                              </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>

@endsection