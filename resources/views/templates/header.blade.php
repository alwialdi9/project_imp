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
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.btn-wizard').click(function(){
      var menu = $(this).attr('id');
      if (menu == "next-button") {
        var element = document.getElementById("nomor_invoice");
        var element2 = document.getElementById("aplikasi");
        element.classList.remove("wizard-step-active");
        element2.classList.add("wizard-step-active");
        $('#back-mid-button').show();
        $('#next-mid-button').show();
        $('#next-button').hide();
        $('#save-button').hide();
        $('#back-button').hide();
        $('.nomor-faktur').hide(1200);
        $('.about-aplikasi').show(1200);
        $('.total-harga').hide(1200);
      }if (menu == "back-mid-button") {
        var element = document.getElementById("nomor_invoice");
        var element2 = document.getElementById("aplikasi");
        element2.classList.remove("wizard-step-active");
        element.classList.add("wizard-step-active");
        $('#back-button').hide();
        $('#next-button').show();
        $('#next-mid-button').hide();
        $('#back-mid-button').hide();
        $('#save-button').hide();
        $('.nomor-faktur').show(1200);
        $('.about-aplikasi').hide(1200);
        $('.total-harga').hide(1200);
      }if (menu == "next-mid-button") {
        var element = document.getElementById("harga-total");
        var element2 = document.getElementById("aplikasi");
        element2.classList.remove("wizard-step-active");
        element.classList.add("wizard-step-active");
        $('#back-button').show();
        $('#save-button').show();
        $('#next-mid-button').hide();
        $('#back-mid-button').hide();
        $('#next-button').hide();
        $('.nomor-faktur').hide(1200);
        $('.about-aplikasi').hide(1200);
        $('.total-harga').show(1200);
      }if (menu == "back-button") {
        var element = document.getElementById("harga-total");
        var element2 = document.getElementById("aplikasi");
        element.classList.remove("wizard-step-active");
        element2.classList.add("wizard-step-active");
        $('#back-mid-button').show();
        $('#next-mid-button').show();
        $('#save-button').hide();
        $('#next-button').hide();
        $('#back-button').hide();
        $('.nomor-faktur').hide();
        $('.about-aplikasi').show(1200);
        $('.total-harga').hide();
      }
      })
      $('#back-button').hide();
      $('#back-mid-button').hide();
      $('#next-mid-button').hide();
      $('#save-button').hide();
      $('.total-harga').hide();
      $('.about-aplikasi').hide();
    })
  </script>

</head>

<body>

    @yield('sidebar')
    @yield('content')

    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2020 <div class="bullet"></div><a href="https://impstudio.id/">IMP Studio</a>
      </div>
      {{-- <div class="footer-right">
        
      </div> --}}
    </footer>
  </div>
</div>

    <!-- General JS Scripts -->
  <script src="{{ asset('modules/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
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

  {{-- <script src="{{ asset('modules/cleave-js/dist/addons/cleave-phone.id.js') }} "></script> --}}
  
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  {{-- terbilang --}}
  <script src="{{ asset('terbilang/jquery-1.11.2.min.js') }}"></script>
  <script src="{{ asset('terbilang/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('terbilang/terbilang.js') }}"></script>

  <!-- Page Specific JS File -->

  <script type="text/javascript">
    $(document).ready(function(){

        // Format mata uang.
        $( '.currency' ).mask('000.000.000.000.000', {reverse: true});

    })

  $(function() {
    $('.only-numbers').on('keydown', '#telepon', function(e){
        -1!==$
        .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
        .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
        || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
        && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
    });
  })
</script>

<script type="text/javascript">
  function inputTerbilang() {
    //membuat inputan otomatis jadi mata uang
    $('.mata-uang').mask('00.000.000.000.000', {reverse: true});

    //mengambil data uang yang akan dirubah jadi terbilang
     var input = document.getElementById("terbilang-input").value.replace(/\./g, "");

     //menampilkan hasil dari terbilang
     document.getElementById("terbilang-output").value = terbilang(input).replace(/  +/g, ' ');
  } 
</script>

</body>
</html>
