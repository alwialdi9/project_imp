<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('img/logo/favicon.ico') }}" type="image/x-icon">
  <title>IMP Studio</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  {{-- <link rel="stylesheet" href="{{ asset('datepicker/picker.css') }} "> --}}
  <link rel="stylesheet" href="{{ asset('modules/select2/dist/css/select2.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/bootstrap-daterangepicker/daterangepicker.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/datatables/datatables.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/chocolat/dist/css/chocolat.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/prism/prism.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  {{-- <script src="{{ asset('datepicker/picker.js') }} "></script> --}}
  <script src="{{ asset('modules/jquery.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/wizard.js') }} "></script>

  

</head>

<body>

    @yield('sidebar')
    @yield('content')

    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; <?= date('Y') ?> <div class="bullet"></div><a href="https://impstudio.id/">IMP Studio</a>
      </div>
      {{-- <div class="footer-right">
        
      </div> --}}
    </footer>
  </div>
</div>

    <!-- General JS Scripts -->
  <script src="{{ asset('modules/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('modules/tooltip.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('modules/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  
  <!-- Template JS File -->
  <script src="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>

  @if ($surat ?? '')
  <script src="{{ asset('modules/jquery-selectric/jquery.selectric.min.js') }} "></script>
  @endif
  <script src="{{ asset('modules/select2/dist/js/select2.full.min.js') }} "></script>

  <script src="{{ asset('modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }} "></script>
  <script src="{{ asset('modules/cleave-js/dist/cleave.min.js') }} "></script>
  <script src="{{ asset('js/page/forms-advanced-forms.js') }} "></script>
  <script src="{{ asset('modules/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
  {{-- datatables --}}
  <script src="{{ asset('modules/datatables/datatables.min.js') }} "></script>
  <script src="{{ asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }} "></script>
  <script src="{{ asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }} "></script>
  <script src="{{ asset('modules/jquery-ui/jquery-ui.min.js') }} "></script>
  <script src="{{ asset('js/page/modules-datatables.js') }} "></script>
  
  {{-- datepicker --}}
  <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }} "></script>
  <script src="{{ asset('modules/jquery-ui/jquery-ui.min.js') }} "></script>
  
  {{-- upload file --}}
  <script src="{{ asset('modules/summernote/summernote-bs4.js') }} "></script>

  <script src="{{ asset('modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }} "></script>
  <script src="{{ asset('js/page/features-post-create.js') }} "></script>
  
  <script src="{{ asset('modules/prism/prism.js') }} "></script>
  <script src="{{ asset('js/page/bootstrap-modal.js') }} "></script>

  {{-- <script src="{{ asset('terbilang/jquery.mask.min.js') }}"></script> --}}
  <script src="{{ asset('terbilang/terbilang.js') }}"></script>

  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/footer.js') }}"></script>

  {{-- terbilang --}}


  <!-- Page Specific JS File -->

  <script type="text/javascript">
    $(document).ready(function(){
        // Format mata uang.
        $( '.currency' ).mask('000,000,000,000,000,000', {reverse: true});
    })
</script>

</body>
</html>