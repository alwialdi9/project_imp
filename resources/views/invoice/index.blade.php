@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Invoice </h1>
            <div class="card-header-action mx-3">
              <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
            </div>
            <div class="collapse" id="mycard-collapse">
              <div class="card-body">
                <div class="form-group">
                  <label>Transaksi :</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-calendar"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control daterange">
                  </div>
                </div>
                <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-search-plus"></i> Search</a>
              </div>
              
            </div>

            <div class="section-header-breadcrumb">
              <a href="{{ url('buatinvoice') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Invoice</a>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-donate"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Transaksi </h4>
                      </div>
                      <div class="card-body">
                        3
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Transaksi (Rp) </h4>
                      </div>
                      <div class="card-body">
                        155.000.000
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
                  <h4>Invoice Table</h4>
                </div>
                <div class="card-body">
                  <a class="table-responsive">
                    <table class="table table-striped table-hover" id="table-1">
                      <thead>                                 
                        <tr>
                          <th class="text-center">
                            #
                          </th>
                          <th>Tanggal</th>
                          <th>Nomor Faktur</th>
                          <th>Pelanggan</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          <th>Nilai Transaksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="text-center">
                          1
                        </td>
                        <td>09-02-2020</td>
                        <td class="align-middle">
                          134/FT/IMP/II/2020
                          <div class="table-links">
                            <a href="#"><i class="fas fa-fw fa-share-alt"></i> Kirim</a>
                            <div class="bullet"></div>
                            <a href="#"><i class="fas fa-fw fa-print"></i> Cetak</a>
                            <div class="bullet"></div>
                            <a href="{{ url('invoicepreview') }} "><i class="fas fa-fw fa-book-open"></i> Preview</a>
                          </div>
                        </td>
                        <td>
                          Kemenag RI
                        </td>
                        <td> <div class="badge badge-success">Lunas</div> </td>
                        <td>Aplikasi Guru PAI</td>
                        <td>Rp. 45.000.000</td>
                        
                      </tr>

                      <tr>
                        <td class="text-center">
                          2
                        </td>
                        <td>11-02-2020</td>
                        <td class="align-middle">
                          134/FT/IMP/II/2020
                          <div class="table-links">
                            <a href="#"><i class="fas fa-fw fa-share-alt"></i> Kirim</a>
                            <div class="bullet"></div>
                            <a href="#"><i class="fas fa-fw fa-print"></i> Cetak</a>
                            <div class="bullet"></div>
                            <a href="{{ url('invoicepreview') }} "><i class="fas fa-fw fa-book-open"></i> Preview</a>
                          </div>
                        </td>
                        <td>
                            BNN
                        </td>
                        <td><div class="badge badge-warning">Termin I</div></td>
                        <td>Aplikasi SIPUSPA</td>
                        <td>Rp. 20.000.000</td>
                        
                      </tr>

                      <tr>
                        <td class="text-center">
                          3
                        </td>
                        <td>12-02-2020</td>
                        <td class="align-middle">
                          135/FT/IMP/II/2020
                          <div class="table-links">
                            <a href="#"><i class="fas fa-fw fa-share-alt"></i> Kirim</a>
                            <div class="bullet"></div>
                            <a href="#"><i class="fas fa-fw fa-print"></i> Cetak</a>
                            <div class="bullet"></div>
                            <a href="{{ url('invoicepreview') }} "><i class="fas fa-fw fa-book-open"></i> Preview</a>
                          </div>
                        </td>
                        <td>
                            BNI
                        </td>
                        <td><div class="badge badge-success">Lunas</div></td>
                        <td>Mobile Banking</td>
                        <td>Rp. 90.000.000</td>
                        
                      </tr>

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