@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Pelanggan</h1>

            <div class="section-header-breadcrumb">
              <a href="#" class="btn btn-primary" id="modal-6"><i class="fas fa-user-plus"></i> Tambah Pelanggan</a>
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
                        <h4>Total Pelanggan </h4>
                      </div>
                      <div class="card-body">
                        {{ $total }}
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
                <h4>Data Pelanggan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="table-1">
                    <thead>                                 
                      <tr>
                          <th class="text-center">
                            #
                          </th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Faksimile</th>
                        <th>Instansi</th>
                        <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pelanggan as $p)    
                          <tr>
                            <td class="text-center">
                              {{ $loop->iteration }}
                            </td>
                            <td>{{ $p->nama_lengkap }} </td>
                            <td class="align-middle">
                              {{ $p->email }}
                            </td>
                            <td>
                              {{ $p->faksimile }}
                            </td>
                            <td>
                              {{ $p->instansi }}
                            </td>
                            <td>
                              {{ $p->alamat }}
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
          <label>Nama Lengkap</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-user-cog"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
          </div>
        </div>

        <div class="form-group">
          <label>Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-at"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Email" name="email">
          </div>
        </div>

        <div class="form-group">
          <label>Telepon</label>
          <div class="input-group only-numbers">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-phone"></i>
              </div>
            </div>
            <input type="text" class="form-control phone-number" placeholder="Telepon" name="telepon" id="telepon">
          </div>
        </div>

        <div class="form-group">
          <label>Faksimile</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-fax"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Faksimile" name="faksimile">
          </div>
        </div>

        <div class="form-group">
          <label>Instansi</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-fw fa-building"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Instansi" name="instansi">
          </div>
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-map-marked-alt"></i>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
          </div>
        </div>

      </form>

</div>

@endsection