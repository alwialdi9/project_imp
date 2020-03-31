@extends('templates.header')
@extends('templates.sidebar')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laba / Rugi</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Isi Form Laba / Rugi</h4>
                  </div>
                  
                  <form action="{{url('/labarugi')}}" method="post" class="wizard-content mt-2">
                    @csrf
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

                            <div class="wizard-step" id="biaya_projek">
                                <div class="wizard-step-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="wizard-step-label">
                                  Biaya Project
                                </div>
                              </div>

                            <div class="wizard-step" id="biaya_tetap">
                              <div class="wizard-step-icon">
                                <i class="fas fa-donate"></i>
                              </div>
                              <div class="wizard-step-label">
                                Biaya Tetap
                              </div>
                            </div>

                            <div class="wizard-step" id="biaya_administrasi">
                              <div class="wizard-step-icon">
                                <i class="fas fa-comment-dollar"></i>
                              </div>
                              <div class="wizard-step-label">
                                Biaya Administrasi
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
    
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
                                <input type="text" class="form-control" placeholder="Penerimaan Jasa Projek" name="jasa_projek" id="jasa_projek" required>
                            </div>
                          </div>

                          <div class="form-group row align-items-center">
                            <label class="col-md-4 text-md-right text-left">Total Penerimaan</label>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control currency" placeholder="Total Penerimaan" name="total_penerimaan" id="total_penerimaan" required>
                            </div>
                          </div>
                            </div>

                        {{-- tentang biaya projek --}}
                        <div class="biaya_projek">
            
                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Server</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Server" name="svr" id="svr" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Transportasi</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Transportasi" name="transportasi" id="transportasi" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Laporan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Laporan" name="laporan" id="laporan" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Lain-lain</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Lainnya" name="lain_lain_biayaprojek" id="lain_lain_biayaprojek" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Biaya Projek</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Total Biaya Projek" name="total_biaya_projek" id="total_biaya_projek" required>
                                </div>
                              </div>

                        </div>

                        {{-- biaya tetap --}}
                        <div class="biaya_tetap">
                            <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Gaji Direktur</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="gaji_direktur" name="gaji_direktur" id="gaji_direktur" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Gaji Staff</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Gaji Staff" name="gaji_staf" id="gaji_staf" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Biaya Penyusutan</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Biaya Penyusutan" name="biaya_penyusutan_labarugi" id="biaya_penyusutan_labarugi" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Biaya Tetap</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Total Biaya Tetap" name="total_biaya_tetap" id="total_biaya_tetap" required>
                                </div>
                              </div>

                        </div>

                        {{-- biaya administrasi --}}
                        <div class="biaya_administrasi">
                            <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Alat Tulis Kantor</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Alat Tulis Kantor" name="atk" id="atk" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Listrik, Air, Telepon</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Masukkan Biaya" name="listrik_air_telepon" id="listrik_air_telepon" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Internet</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Internet" name="internet" id="internet" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Lain-lain</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Lain-lain" name="lain_lain_administrasi" id="lain_lain_administrasi" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Total Biaya</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="Total Biaya" name="total_biaya_administrasi" id="total_biaya_administrasi" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Laba Sebelum Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="" name="laba_sb_pajak" id="laba_sb_pajak" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Pajak</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="" name="pajak_adm" id="pajak_adm" required>
                                </div>
                              </div>

                              <div class="form-group row align-items-center">
                                <label class="col-md-4 text-md-right text-left">Laba Bersih</label>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control currency" placeholder="" name="laba_bersih_adm" id="laba_bersih_adm" required>
                                </div>
                              </div>

                        </div>

                          <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-lg-4 col-md-6 text-right">
                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-laba" id="back-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-laba" id="back-mid-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-left mx-3 btn-info btn-wizard-laba" id="back-mid2-button"><i class="fas fa-arrow-left"></i> Back</a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-laba" id="next-button">Next <i class="fas fa-arrow-right"></i></a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-laba" id="next-mid-button">Next <i class="fas fa-arrow-right"></i></a>

                              <a href="#" class="btn btn-icon icon-right btn-primary btn-wizard-laba" id="next-mid2-button">Next <i class="fas fa-arrow-right"></i></a>

                              <button type="submit" class="btn btn-icon icon-right btn-primary btn-wizard-laba" id="save-button">Simpan <i class="fas fa-save"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection