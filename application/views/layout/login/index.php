<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/_partials/head'); ?>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <i class="fab fa-staylinked"></i><br>
                <h4>
                    <b>SISTEM MANAJEMEN DATA</b>
                </h4>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php
                /*
			*variable $contentnya diambil dari core/My_controller.php
			*(application/core/My_Controller)
			*/
                echo $contentnya;
                ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('layout/_partials/footer'); ?>
</body>

</html>