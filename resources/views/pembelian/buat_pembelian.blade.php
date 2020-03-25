@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ url('/pembelian') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Pembelian</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ url('/') }}">Keuangan</a></div>
              <div class="breadcrumb-item"><a href="{{ url('/pembelian/buat_pembelian') }}">Buat Pembelian</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Isi Form Pembelian</h4>
                  </div>
                  <form method="post" action="{{url ('/pembelian')}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4 floating-addon">
                        <div class="input-group mb-2">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                                <div class="input-group col-sm-12 col-md-7">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text ml-3">
                                      <i class="far far-fw fa-calendar-alt"></i>
                                    </div>
                                  </div>
                                  <input type="text" id="tanggal" name="tanggal" class="form-control datepicker" placeholder="Search..." autocomplete="off" required="">
                                  <div class="has-feedback{{ $errors->has('tanggal') ? 'has-error' : ''}}">
                                    @if ($errors->has('tanggal'))
                                      <span class="help-block">
                                        <p>{{ $errors->first('tanggal') }} </p>
                                      </span>
                                      @endif
                                  </div>
                                </div>
                          </div>
                      {{-- <div class="col-sm-10 col-md-7">
                        
                      </div> --}}
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Faktur</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" placeholder="Masukkan Nomor Faktur" name="nomor_faktur" required="">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Referensi Akun</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control select2" id="referensi_akun" name="referensi_akun" required>
                              <option>5-10001 Pembelian</option>
                              <option>5-10002 Pembelian</option>
                              <option>5-10003 Pembelian</option>
                              <option>5-10004 Pembelian</option>
                              <option>5-10005 Pembelian</option>
                        </select>
                        <div class="has-feedback{{ $errors->has('referensi_akun') ? 'has-error' : ''}}">
                          @if ($errors->has('referensi_akun'))
                            <span class="help-block">
                              <p>{{ $errors->first('referensi_akun') }} </p>
                            </span>
                            @endif
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Supplier</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control inputtags" placeholder="Masukkan Supplier" name="supplier" required="">
                          <div class="has-feedback{{ $errors->has('supplier') ? 'has-error' : ''}}">
                            @if ($errors->has('supplier'))
                              <span class="help-block">
                                <p>{{ $errors->first('supplier') }} </p>
                              </span>
                              @endif
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Pembelian</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status_pembelian" id="status_pembelian" required>
                          <option>Lunas</option>
                          <option>Belum</option>
                          {{-- <option>Pending</option> --}}
                        </select>
                        <div class="has-feedback{{ $errors->has('status_pembelian') ? 'has-error' : ''}}">
                          @if ($errors->has('status_pembelian'))
                            <span class="help-block">
                              <p>{{ $errors->first('status_pembelian') }} </p>
                            </span>
                            @endif
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total</label>
                        <div class="col-sm-12 col-md-7">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                Rp
                              </div>
                            </div>                
                          <input type="text" class="form-control currency" placeholder="Masukkan Total" name="total" required>
                          <div class="has-feedback{{ $errors->has('total') ? 'has-error' : ''}}">
                            @if ($errors->has('total'))
                              <span class="help-block">
                                <p>{{ $errors->first('total') }} </p>
                              </span>
                              @endif
                        </div>
                       </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/pembelian') }} " class="btn btn-danger mx-2">Batal</a>
                      </div>
                    </div>
                   </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
@endsection