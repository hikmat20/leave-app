<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Leave Application | Sentral Sistem</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/conf/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/libs/plugins/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/libs/plugins/lobibox/dist/css/lobibox.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/libs/dist/css/style.min.css" rel="stylesheet">
    <script src="<?= base_url(); ?>assets/libs/plugins/jquery/dist/jquery.min.js"></script>
    <script>
        let site_url = '<?= base_url() ?>';
        let controller = '<?= $this->uri->segment(1) ?>'
        let url_controller = '<?= base_url() . $this->uri->segment(1) ?>'
    </script>
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <?= $contents; ?>

    <script src="<?= base_url(); ?>assets/libs/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/sparkline/sparkline.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/toastr/build/toastr.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/lobibox/dist/js/notifications.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url(); ?>assets/libs/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url(); ?>assets/libs/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="assets/libs/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/excanvas.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/jquery.flot.time.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot/jquery.flot.crosshair.js"></script>
    <script src="<?= base_url(); ?>assets/libs/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>