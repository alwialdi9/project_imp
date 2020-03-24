$(document).ready(function () {
    $('.btn-wizard').click(function () {
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
        }
        if (menu == "back-mid-button") {
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
        }
        if (menu == "next-mid-button") {
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
        }
        if (menu == "back-button") {
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
