<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/_partials/head') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php $this->load->view('layout/_partials/navbar') ?>

        <?php $this->load->view('layout/_partials/sidebar') ?>

        <!-- Main Content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo $contentnya ?>
        </div>
        <!-- End Main Content -->
        <!-- /.content-wrapper -->

        <?php $this->load->view('layout/_partials/footer_content') ?>
        <?php $this->load->view('layout/_partials/control_sidebar') ?>
    </div>

    <?php $this->load->view('layout/_partials/footer') ?>

</body>

</html>