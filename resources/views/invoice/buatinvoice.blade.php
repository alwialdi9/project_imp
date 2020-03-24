@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="{{ url('/invoice') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Invoice</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{url('/invoice')}}">Invoice</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Isi Form Invoice</h4>
                  </div>
                  
                  <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-12 col-lg-8 offset-lg-2">
                          <div class="wizard-steps">
                            <div class="wizard-step wizard-step-active" id="nomor_invoice">
                              <div class="wizard-step-icon">
                                <i class="fas fa-file-invoice"></i>
                              </div>
                              <div class="wizard-step-label">
                                Nomor Invoice
                              </div>
                            </div>
                            <div class="wizard-step" id="aplikasi">
                              <div class="wizard-step-icon">
                                <i class="fas fa-box-open"></i>
                              </div>
                              <div class="wizard-step-label">
                                Keterangan Aplikasi/Barang
                              </div>
                            </div>
                            <div class="wizard-step" id="harga-total">
                              <div class="wizard-step-icon">
                                <i class="fas fa-money-check-alt"></i>
                              </div>
                              <div class="wizard-step-label">
                                Total Harga
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <form action="{{url('/invoice')}}" method="post" class="wizard-content mt-2">
                        @csrf
                        <div class="wizard-pane">
                            <div class="nomor-faktur">
                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Nomor Faktur</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Masukkan Nomor Faktur" name="nomor_faktur" id="nomor_faktur" required="">
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Tanggal Invoice</label>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <i class="far far-fw fa-calendar-alt"></i>
                                      </div>
                                    </div>
                                    <input type="text" id="tanggal_invoice" name="tanggal_invoice" class="form-control datepicker" placeholder="Search..." autocomplete="off">
                                  </div>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-4 text-md-right text-left mt-2">Pelanggan</label>
                            <div class="col-lg-4 col-md-6">
                                <select class="form-control select2" id="pelanggan" name="pelanggan">
                                    <option value="masuk">Kementrian Agama RI</option>
                                    <option value="keluar">Direktorat Jenderal Pendidikan Islam</option>
                                  </select>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Alamat</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" id="alamat" required="">
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Telepon</label>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group only-numbers">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                      </div>
                                    </div>
                                    <input type="text" class="form-control phone-number" name="telepon" id="telepon" placeholder="Masukkan telepon">
                                  </div>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Faximile</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="faximile" id="faximile" placeholder="Masukkan faximile">
                            </div>
                          </div>
                        </div>

                        {{-- tentang Aplikasi --}}
                        <div class="about-aplikasi">
                            <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Tanggal Jatuh Tempo</label>
                                <div class="col-lg-4 col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <i class="far far-fw fa-calendar-alt"></i>
                                          </div>
                                        </div>
                                        <input type="text" id="jatuh_tempo" name="jatuh_tempo" class="form-control datepicker" placeholder="Search..." autocomplete="off">
                                      </div>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Cara Pembayaran</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" placeholder="Masukkan Metode Pembayaran" name="metode_pembayaran" id="metode_pembayaran" required="">
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Keterangan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" placeholder="Masukkan Keterangan" name="keterangan" id="keterangan" required="">
                                </div>
                              </div>

                        </div>

                        <div class="total-harga">
                            <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Kuantitas (Qty)</label>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group only-numbers">
                                    <input type="text" class="form-control phone-number" name="kuantitas" id="telepon" placeholder="Masukkan Kuantitas">
                                  </div>
                            </div>
                          </div>

                            <div class="form-group row">
                                <label class="col-md-4 text-md-right text-left mt-2">Satuan</label>
                                <div class="col-lg-4 col-md-6">
                                  <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                      <input type="radio" name="value" value="paket" class="selectgroup-input">
                                      <span class="selectgroup-button">Paket</span>
                                    </label>
                                    <label class="selectgroup-item">
                                      <input type="radio" name="value" value="pcs" class="selectgroup-input">
                                      <span class="selectgroup-button">Pcs</span>
                                    </label>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Harga Satuan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Masukkan Harga Satuan" name="harga_satuan" id="harga_satuan" required="">
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Masukkan Pajak" name="pajak" id="pajak" required="">
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Tagihan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency mata-uang" placeholder="Masukkan Total Tagihan" name="total_tagihan" id="terbilang-input" required="" onkeyup="inputTerbilang()">
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Terbilang</label>
                                <div class="col-lg-4 col-md-6">
                                    <textarea type="text" class="form-control currency" placeholder="Masukkan Terbilang" name="terbilang" id="terbilang-output" required="">

                                    </textarea>
                                </div>
                              </div>

                        </div>

                          <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-lg-4 col-md-6 text-right">
                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard" id="back-button"><i class="fas fa-arrow-left"></i> Back</a>
                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard" id="back-mid-button"><i class="fas fa-arrow-left"></i> Back</a>
                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard" id="next-button">Next <i class="fas fa-arrow-right"></i></a>
                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard" id="next-mid-button">Next <i class="fas fa-arrow-right"></i></a>
                              <button type="submit" class="btn btn-icon icon-right btn-primary btn-wizard" id="save-button">Simpan <i class="fas fa-arrow-right"></i></button>
                            </div>
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