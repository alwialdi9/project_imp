@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Company Management Enterprise</h1>

            <div class="section-header-breadcrumb">
<<<<<<< HEAD
              <a href="{{ url('/pembelian/buat_pembelian') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Pembelian</a>
=======
              <a href="{{ url('buatpembelian') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Pembelian</a>
>>>>>>> 9b7c64d1e7f913c1a70a50a722c3b06fb32605c1
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
                        20.000.000
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
                        <h4>Saldo (Rp)</h4>
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
                  <table class="table table-striped table-hover" id="table-1">
                    <thead>                                 
                      <tr>
<<<<<<< HEAD
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No.Faktur</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                        <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $pembelian as $b)
                        <tr>
                            <th class="border border-success" scope="row"> {{ $loop->iteration }} </th>
                            <td class="border border-success">{{$b->tanggal}}</td>
                            <td class="border border-success">{{$b->nomor_faktur}}</td>
                            <td class="border border-success">{{$b->supplier}}</td>
                            <td class="border border-success">{{$b->status_penjualan}}</td>
                            <td class="border border-success">Rp. {{$b->total}}</td>
                            <td class="border border-success">@if ($b->status_penjualan == "Lunas")
                              <a class="text-black" href="#">[Verifikasi]</a>
                                @else
                                  -
                                @endif
                              </td>
                        </tr>
                        @endforeach
                    </tbody>
=======
                          <th class="text-center">
                            #
                          </th>
                          <th>Tanggal</th>
                        <th>No. Faktur</th>
                        <th>Supplier</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="p-0 text-center">
                          1
                        </td>
                        <td>12-12-2020</td>
                        <td class="align-middle">
                          F-11
                        </td>
                        <td>
                          Rohmat Eko
                        </td>
                        <td><div class="badge badge-success">Lunas</div></td>
                        <td>Rp. 100.000.000</td>
                        <td>-</td>
                      </tr>

                      <tr>
                        <td class="p-0 text-center">
                          2
                        </td>
                        <td>12-12-2020</td>
                        <td class="align-middle">
                          F-15
                        </td>
                        <td>
                          Samsul Mulya
                        </td>
                        <td><div class="badge badge-warning">Belum</div></td>
                        <td>Rp. 100.000.000</td>
                        <td> </td>
                      </tr>

                      <tr>
                        <td class="p-0 text-center">
                          3
                        </td>
                        <td>19-12-2020</td>
                        <td class="align-middle">
                          F-77
                        </td>
                        <td>
                          Bambang Wijakarko
                        </td>
                        <td><div class="badge badge-success">Lunas</div></td>
                        <td>Rp. 100.000.000</td>
                        <td><a href="#" class="btn btn-primary">Verifikasi</a></td>
                      </tr>

                      <tr>
                        <td class="p-0 text-center">
                          4
                        </td>
                        <td>23-12-2020</td>
                        <td class="align-middle">
                          F-12
                        </td>
                        <td>
                          Sovia
                        </td>
                        <td><div class="badge badge-success">Lunas</div></td>
                        <td>Rp. 100.000.000</td>
                        <td><a href="#" class="btn btn-primary">Verifikasi</a></td>
                      </tr>
                      </tbody>
>>>>>>> 9b7c64d1e7f913c1a70a50a722c3b06fb32605c1
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</div>

@endsection