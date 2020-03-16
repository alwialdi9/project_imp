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
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
  {{-- <script src="{{ asset('datepicker/picker.js') }} "></script> --}}

  

</head>

<body>

    @yield('sidebar')
    @yield('content')

    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2020 <div class="bullet"></div><a href="https://impstudio.id/">IMP Studio</a>
      </div>
      <div class="footer-right">
        {{-- 2.3.0 --}}
      </div>
    </footer>
  </div>
</div>

    <!-- General JS Scripts -->
  <script src="{{ asset('modules/jquery.min.js') }}"></script>
  <script src="{{ asset('modules/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/tooltip.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('modules/moment.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  
  <!-- Template JS File -->
  <script src="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
  <script src="{{ asset('modules/select2/dist/js/select2.full.min.js') }} "></script>
  <script src="{{ asset('modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }} "></script>
  <script src="{{ asset('modules/cleave-js/dist/cleave.min.js') }} "></script>
  
  <script src="{{ asset('modules/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
  
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <!-- Page Specific JS File -->

  <script type="text/javascript">
    $(document).ready(function(){

        // Format mata uang.
        $( '.currency' ).mask('000,000,000,000,000,000', {reverse: true});

    })
</script>

</body>
</html>
