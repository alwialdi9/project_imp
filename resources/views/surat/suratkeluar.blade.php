@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ url('surat') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Surat Keluar</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Surat</a></div>
              <div class="breadcrumb-item"><a href="#">Surat Keluar</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Buat Surat Keluar</h4>
                  </div>
                  
                  <div class="card-body">

                    {{-- belum ada select jenis surat  --}}


                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Surat</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" placeholder="Masukkan Nomor Surat" required="" name="nomor_surat" id="nomor_surat">
                          <div class="valid-feedback">
                            {{-- formvalidation --}}
                            {{-- jika valid, tambahkan di input class is_valid --}}
                            {{-- jika invalid, tambahkan di input class is_invalid --}}
                          </div>
                        </div>
                      </div>

                    <div class="form-group row mb-4 floating-addon">
                        <div class="input-group mb-2">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Surat :</label>
                                <div class="input-group col-sm-12 col-md-7">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text ml-3">
                                      <i class="far far-fw fa-calendar-alt"></i>
                                    </div>
                                  </div>
                                  <input type="text" id="tanggal_penjualan" name="tanggal_penjualan" class="form-control datepicker" placeholder="Search..." autocomplete="off" required="">
                                  <div class="valid-feedback">
                                    {{-- formvalidation --}}
                                    {{-- jika valid, tambahkan di input class is_valid --}}
                                    {{-- jika invalid, tambahkan di input class is_invalid --}}
                                  </div>
                                </div>
                          </div>
                      {{-- <div class="col-sm-10 col-md-7">
                        
                      </div> --}}
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan Surat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Masukkan Tujuan Surat" required="" name="tujuan_surat">
                        <div class="valid-feedback">
                          {{-- formvalidation --}}
                          {{-- jika valid, tambahkan di input class is_valid --}}
                          {{-- jika invalid, tambahkan di input class is_invalid --}}
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perihal</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" placeholder="Masukkan Perihal" name="perihal">
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File Surat</label>
                        <div class="col-sm-12 col-md-7">
                          <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="surat_path" id="image-upload" />
                          </div>
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ url('penjualan') }} " class="btn btn-danger mx-2">Kembali</a>
                        <a href="#" class="btn btn-info">Reset</a>
                        <a href="#" class="btn btn-success mx-2">Cetak</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection