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
                      <li><a href="{{ url('/surat/suratmasuk') }} " class="dropdown-item">Surat Masuk</a></li>
                      <li><a href="{{ url('/surat/suratkeluar') }}" class="dropdown-item">Surat Keluar</a></li>
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
                    <table class="table table-striped table-hover text-center" id="table-1">
                      <thead>                                 
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Nomor Surat</th>
                          <th>Jenis Surat</th>
                          <th>Perihal</th>
                          <th>Dari/Kepada</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($surat as $s)
                        <tr>
                        <td class="border">{{ $loop->iteration }} </td>
                        <td class="border">{{ $s->tanggal_surat }} </td>
                        <td class="border">{{ $s->nomor_surat }} </td>
                        <td class="border">{{ $s->jenis }} </td>
                        <td class="border">{{ $s->perihal }} </td>
                        <td class="border">
                          @if ( $s->asal_surat == null)
                            {{ $s->tujuan_surat }}
                          @else
                            {{ $s->asal_surat }}
                          @endif
                          </td>
                        <td class="text-center border">
                          @if ($s->jenis == "Keluar" && $s->kategori_id == '2' || $s->kategori_id == '4' && $s->jenis == "Keluar")
                          <button type="button" class="btn btn-outline-success">Verifikasi</button>
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