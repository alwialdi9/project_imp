@extends('templates.header')
@extends('templates.sidebar')

@section('content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Invoice </h1>
            <div class="card-header-action mx-3">
              <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
            </div>
            <div class="collapse" id="mycard-collapse">
              <div class="card-body">
                <div class="form-group">
                  <label>Transaksi :</label>
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

            <div class="section-header-breadcrumb">
              <a href="{{ url('/invoice/buatinvoice') }} " class="btn btn-primary"><i class="fas fa-plus"></i> Buat Invoice</a>
            </div>
        </div>
        
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-donate"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Transaksi </h4>
                      </div>
                      <div class="card-body">
                        3
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="card-wrap">
                      <div class="card-header">
                        <h4>Total Transaksi (Rp) </h4>
                      </div>
                      <div class="card-body">
                        155.000.000
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
                  <h4>Invoice Table</h4>
                </div>
                <div class="card-body">
                  <a class="table-responsive">
                    <table class="table table-striped table-hover text-center" id="table-1">
                      <thead>                                 
                        <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Nomor Faktur</th>
                          <th>Pelanggan</th>
                          <th>Keterangan</th>
                          <th>Nilai Transaksi</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($invoice as $voice)
                      <tr>
                      <th class="border" scope="row">{{ $loop->iteration}}</th>
                      <th class="border">{{ $voice->tanggal_invoice }}</th>
                      <th class="border">{{ $voice->nomor_faktur }}</th>
                      <th class="border">{{ $voice->pelanggan }}</th>
                      <th class="border">{{ $voice->keterangan }}</th>
                      <th class="border">{{ $voice->total_tagihan }}</th>
                      <th class="border"><a href="" class="badge badge-success">view</a></th>
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