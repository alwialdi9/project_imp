@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Surat </h1>
            <div class="card-header-action mx-3">
              <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
            </div>
            <div class="collapse" id="mycard-collapse">
              <div class="card-body">
                <div class="form-group">
                  <label>Transaksi Surat :</label>
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

            <div class="section-header-breadcrumb dropdown">
              <a href="{{ url('buatpattycash') }} " data-toggle="dropdown" class="badge badge-primary dropdown-toggle"><i class="fas fa-plus"></i> Buat Surat</a>
                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                      <li class="dropdown-title">Buat Surat</li>
                      <li><a href="{{ url('suratmasuk') }} " class="dropdown-item">Surat Masuk</a></li>
                      <li><a href="{{ url('suratkeluar') }}" class="dropdown-item">Surat Keluar</a></li>
                    </ul>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-download"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Surat Masuk </h4>
                      </div>
                      <div class="card-body">
                        1
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
                        <h4>Surat Keluar </h4>
                      </div>
                      <div class="card-body">
                        3
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Transaksi Surat</h4>
                      </div>
                      <div class="card-body">
                        4
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
                  <h4>Daftar Surat</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="table-1">
                      <thead>                                 
                        <tr>
                          <th class="text-center">
                            #
                          </th>
                          <th>Tanggal</th>
                          <th>Nomor Surat</th>
                          <th>Jenis Surat</th>
                          <th>Perihal</th>
                          <th>Dari/Kepada</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td class="text-center">
                          1
                        </td>
                        <td>09-02-2020</td>
                        <td class="align-middle">
                          121/SM/TB/II/2020
                        </td>
                        <td>
                          <div class="badge badge-info">Masuk</div>
                        </td>
                        <td> Surat Magang </td>
                        <td>SMK Taruna Bakti</td>
                        <td>-</td>
                      </tr>

                      <tr>
                        <td class="text-center">
                          2
                        </td>
                        <td>10-02-2020</td>
                        <td class="align-middle">
                          122/FT/IMP/II/2020
                        </td>
                        <td>
                          <div class="badge badge-warning">Keluar</div>
                        </td>
                        <td>Faktur</td>
                        <td>Kemenag RI</td>
                        <td> </td>
                      </tr>

                      <tr>
                        <td class="text-center">
                          3
                        </td>
                        <td>11-02-2020</td>
                        <td class="align-middle">
                          123/KW/IMP/II/2020
                        </td>
                        <td>
                          <div class="badge badge-warning">Keluar</div>
                        </td>
                        <td>Kwitansi</td>
                        <td>BNN</td>
                        <td><a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Verifikasi</a></td>
                      </tr>

                      <tr>
                        <td class="text-center">
                         4
                        </td>
                        <td>12-02-2020</td>
                        <td class="align-middle">
                          124/MOU/IMP/II/2020
                        </td>
                        <td>
                          <div class="badge badge-warning">Keluar</div>
                        </td>
                        <td>Kerjasama</td>
                        <td>Yayasan KEHATI</td>
                        <td><a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Verifikasi</a></td>
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