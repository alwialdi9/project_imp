@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Akun</h1>

            <div class="section-header-breadcrumb">
              <a href="{{ url('buatakun') }} " class="btn btn-primary" id="modal-5"><i class="fas fa-user-plus"></i> Buat Akun</a>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Akun Tersedia </h4>
                      </div>
                      <div class="card-body">
                        {{ $totalakun }}
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
                <h4>Data Akun</h4>

                <div class="card-header-action dropdown">
                <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fas fa-filter"></i> Filter Akun</a>
                <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <li class="dropdown-title">Pilih Akun</li>
                    <li><a href="#" class="dropdown-item">Today</a></li>
                    <li><a href="#" class="dropdown-item">Week</a></li>
                    <li><a href="#" class="dropdown-item active">Month</a></li>
                    <li><a href="#" class="dropdown-item">This Year</a></li>
                  </ul>
            </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="table-1">
                    <thead>                                 
                      <tr>
                          <th class="text-center">
                            #
                          </th>
                        <th>Kode Akun</th>
                        <th>Nama Akun</th>
                        <th>Kategori Akun</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($akun as $akun)    
                          <tr>
                            <td class="text-center">
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $akun->kode_akun }} </td>
                            <td class="align-middle">
                              {{ $akun->nama_akun }}
                            </td>
                            <td>
                              {{ $akun->kategori_akun }}
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

    <form class="modal-part" id="modal-login-part">
        <div class="form-group">
          <label>Kode Akun</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-user-cog"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Kode Akun" name="email">
          </div>
        </div>

        <div class="form-group">
          <label>Nama Akun</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-user"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Nama Akun" name="email">
          </div>
        </div>

        <div class="form-group">
          <label>Kategori Akun</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-user-tag"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Kategori Akun" name="password">
          </div>
        </div>
      </form>

</div>

@endsection