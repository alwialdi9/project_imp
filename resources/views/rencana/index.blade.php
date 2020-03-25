@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Rencana Arus Kas</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Isi Form Rencana Arus Kas</h4>
                  </div>
                  
                  <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-12 col-lg-8 offset-lg-2">
                          <div class="wizard-steps">
                            <div class="wizard-step wizard-step-active" id="penerimaan">
                              <div class="wizard-step-icon">
                                <i class="fas fa-vote-yea"></i>
                              </div>
                              <div class="wizard-step-label">
                                Penerimaan
                              </div>
                            </div>

                            <div class="wizard-step" id="pengeluaran">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="wizard-step-label">
                                  Pengeluaran
                                </div>
                              </div>

                            <div class="wizard-step" id="pengeluaran_lain">
                              <div class="wizard-step-icon">
                                <i class="fas fa-donate"></i>
                              </div>
                              <div class="wizard-step-label">
                                Pengeluaran Lainnya
                              </div>
                            </div>

                            <div class="wizard-step" id="total_keseluruhan">
                              <div class="wizard-step-icon">
                                <i class="fas fa-comment-dollar"></i>
                              </div>
                              <div class="wizard-step-label">
                                Total Keseluruhan
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
  
                      <form action="{{url('/invoice')}}" method="post" class="wizard-content mt-2">
                        @csrf
                        <div class="wizard-pane">
                            <div class="penerimaan">
                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Bulan Transaksi</label>
                            <div class="col-lg-4 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <i class="far far-fw fa-calendar-alt"></i>
                                      </div>
                                    </div>
                                    <input type="text" id="bulan_transaksi" name="bulan_transaksi" class="form-control datepicker" placeholder="Search..." autocomplete="off">
                                  </div>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Penerimaan Jasa Projek</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Penerimaan Jasa Projek" name="penerimaan_jasa_projek" id="penerimaan_jasa_projek" required>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Total Penerimaan</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Total Penerimaan" name="total_penerimaan" id="total_penerimaan" required>
                            </div>
                          </div>

                            </div>

                        {{-- tentang pengeluaran --}}
                        <div class="pengeluaran">
            
                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Server</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Server" name="server" id="server" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Transportasi</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Transportasi" name="transport" id="transport" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Laporan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Laporan" name="laporan" id="laporan" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Gaji Direktur</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="gaji_direktur" name="gaji_direktur" id="gaji_direktur" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Gaji Staff</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Gaji Staff" name="gaji_staff" id="gaji_staff" required>
                                </div>
                              </div>

                        </div>

                        {{-- pengeluaran --}}
                        <div class="pengeluaran_lainnya">
                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Penyusutan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Biaya Penyusutan" name="biaya_penyusutan" id="biaya_penyusutan" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Administrasi</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Biaya Administrasi" name="biaya_administrasi" id="biaya_administrasi" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Bunga Bank</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Bunga Bank" name="bunga_bank" id="bunga_bank" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Biaya Pajak" name="bunga_bank" id="bunga_bank" required>
                                </div>
                              </div>

                        </div>

                        {{-- Total --}}
                        <div class="total_keseluruhan">
                            <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Pengeluaran</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Total Pengeluaran" name="total_pengeluaran" id="total_pengeluaran" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Biaya</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Total Biaya" name="total_biaya" id="total_biaya" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Laba Sebelum Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="" name="laba_sebelum_pajak" id="laba_sebelum_pajak" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="" name="pajak" id="pajak" required>
                                </div>
                              </div>

                        </div>

                          <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-lg-4 col-md-6 text-right">
                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-kas" id="back-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-kas" id="back-mid-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-kas" id="back-mid2-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-kas" id="next-button">Next <i class="fas fa-arrow-right"></i></a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-kas" id="next-mid-button">Next <i class="fas fa-arrow-right"></i></a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-kas" id="next-mid2-button">Next <i class="fas fa-arrow-right"></i></a>

                              <button type="submit" class="btn btn-icon icon-right btn-primary btn-wizard-kas" id="save-button">Simpan <i class="fas fa-save"></i></button>
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