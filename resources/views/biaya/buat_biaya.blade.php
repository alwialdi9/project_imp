@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ url('/biaya') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Biaya</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/dashboard')}}">Keuangan</a></div>
              <div class="breadcrumb-item"><a href="{{url('/biaya/buat_biaya')}}">Buat Biaya</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Isi Form Biaya</h4>
                  </div>
                  <form method="post" action="{{url ('/biaya')}}">
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
                                <input type="text" id="tanggal" name="tanggal" class="form-control datepicker" placeholder="Search..." autocomplete="off" required="" value="{{old ('tanggal')}}">
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
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Biaya</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control" id="jenis_biaya" name="jenis_biaya" required value="{{old ('jenis_biaya')}}">
                            <option label="Pilih Jenis Biaya"></option>
                            <option value="masuk">Masuk</option>
                            <option value="keluar">Keluar</option>
                          </select>
                          <div class="has-feedback{{ $errors->has('jenis_biaya') ? 'has-error' : ''}}">
                            @if ($errors->has('jenis_biaya'))
                            <span class="help-block">
                              <p>{{ $errors->first('jenis_biaya') }} </p>
                            </span>
                            @endif
                        </div>
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Referensi Akun</label>
                        <div class="col-sm-12 col-md-7">
                          <select class="form-control select2" id="referensi_akun" name="referensi_akun" required value="{{old ('referensi_akun')}}">
                            @foreach ($ref_akun as $akun)
                          <option value="{{ $akun->nama_akun }} ">{{ $akun->nama_akun }} </option>
                          @endforeach
                          </select>
                          <div class="has-feedback{{ $errors->has('referensi_akun') ? 'has-error' : ''}}">
                            @if ($errors->has('referensi_akun'))
                            <span class="help-block">
                              <p>{{ $errors->first('referensi_akun') }}</p>
                            </span>
                            @endif
                            {{-- formvalidation --}}
                            {{-- jika valid, tambahkan di input class is_valid --}}
                            {{-- jika invalid, tambahkan di input class is_invalid --}}
                          </div>
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" placeholder="Masukkan Keterangan" name="keterangan" id="keterangan" required value="{{old ('keterangan')}}">
                        <div class="has-feedback{{ $errors->has('keterangan') ? 'has-error' : ''}}">
                          @if ($errors->has('keterangan'))
                          <span class="help-block">
                            <p>{{ $errors->first('keterangan') }} </p>
                          </span>
                          @endif
                            {{-- formvalidation --}}
                            {{-- jika valid, tambahkan di input class is_valid --}}
                            {{-- jika invalid, tambahkan di input class is_invalid --}}
                          </div>
                      </div>
                    </div>
                    

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penerima</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control inputtags" placeholder="Masukkan Penerima" name="penerima" required value="{{old ('penerima')}}">
                          <div class="has-feedback{{ $errors->has('penerima') ? 'has-error' : ''}}">
                            @if ($errors->has('penerima'))
                            <span class="help-block">
                              <p>{{ $errors->first('penerima') }} </p>
                            </span>
                            @endif
                        </div>
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="status" required value="{{old ('status')}}">
                          <option>Lunas</option>
                          <option>Belum</option>
                          {{-- <option>Pending</option> --}}
                        </select>
                        <div class="has-feedback{{ $errors->has('status') ? 'has-error' : ''}}">
                          @if ($errors->has('status'))
                          <span class="help-block">
                            <p>{{ $errors->first('status') }} </p>
                          </span>
                          @endif
                      </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tag</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control select2" id="tag" name="tag" value="{{old ('tag')}}" multiple required>
                              <option value="Kemenag RI">Kemenag RI</option>
                              <option value="Server">Server</option>
                              <option value="Pending">Pending</option>
                              <option value="Option 4">Option 4</option>
                              <option value="Option 5">Option 5</option>
                            </select>
                            <div class="has-feedback{{ $errors->has('tag') ? 'has-error' : ''}}">
                              @if ($errors->has('tag'))
                              <span class="help-block">
                                <p>{{ $errors->first('tag') }} </p>
                              </span>
                              @endif
                              {{-- formvalidation --}}
                              {{-- jika valid, tambahkan di input class is_valid --}}
                              {{-- jika invalid, tambahkan di input class is_invalid --}}
                            </div>
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
                          <input type="text" class="form-control currency" placeholder="Masukkan Total" name="total" required="" value="{{old ('total')}}">
                          <div class="has-feedback{{ $errors->has('total') ? 'has-error' : ''}}">
                            @if ($errors->has('total'))
                            <span class="help-block">
                              <p>{{ $errors->first('total') }} </p>
                            </span>
                            @endif
                        </div>
                        </div>
                        </div>
                      </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a href="{{ url('/biaya') }}" class="btn btn-danger mx-2">Batal</a>
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