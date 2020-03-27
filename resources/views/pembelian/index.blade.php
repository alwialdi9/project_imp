@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Company Management Enterprise</h1>

            <div class="section-header-breadcrumb">
              <a href="{{ url('/pembelian/buat_pembelian') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Pembelian</a>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-upload"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Pengeluaran (Rp) </h4>
                      </div>
                      <div class="card-body">
                        {{ $tampilpembelianbelum }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Saldo (Rp) tidak tahu datanya darimana</h4>
                      </div>
                      <div class="card-body">
                        459.000
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
                <h4>Data Pembelian</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover text-center" id="table-1">
                    <thead>                                 
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No.Faktur</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $pembelian as $b)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td>{{$b->tanggal}}</td>
                            <td>{{$b->nomor_faktur}}
                              <div class="table-links">
                                <a href="/pembelian/edit/{{ $b->id }}"><i class="fas fa-edit"></i> Ubah</a>
                                <div class="bullet"></div>
                                <a href="#"><i class="far fa-eye"></i> Lihat</a>
                                <div class="bullet"></div>
                                <a href="/pembelian/hapus/{{ $b->id }}" class="text-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                              </div>
                            </td>
                            <td>{{$b->supplier}}</td>
                            <td>{{$b->status_pembelian}}</td>
                            <td>Rp. <div class="currency" style="display:inline-table;">{{$b->total}}</div></td>
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