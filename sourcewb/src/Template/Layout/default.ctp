<!DOCTYPE html>
<html>

    <head>
        <?= $this->Html->meta(['charset' => 'utf-8']) ?>
        <?= $this->Html->meta(['name' => 'viewport', 'content' => "width=device-width, initial-scale=1.0"]); ?>
        <?= $this->Html->meta(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']) ?>


        <?= $this->Html->css(['bootstrap.min.css', 'font-awesome/css/font-awesome.css', 'plugins/toastr/toastr.min.css']) ?>
        <?= $this->Html->css(['jquery.gritter.css', 'animate.css', 'style.css']) ?>
        <?= $this->fetch('css') ?>
        <title>Admin | Dashboard</title>

    </head>

    <body>
        <div id="wrapper">
            <?= $this->element('navigation') ?>

            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Welcome to Admin</span>
                            </li>

                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

                <div class="row  border-bottom white-bg dashboard-header">
                    <div class="col-md-3">
                        <?= $this->element('breadcrumb') ?>
                    </div>
                </div>

                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <?= $this->fetch('content') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer" >
                    <div class="pull-right"><?php echo __('Meditation App') ?></div>
                    <div><strong>Copyright</strong> Findsoft &copy; 2016</div>
                </div>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Flot -->
        <script src="js/plugins/flot/jquery.flot.js"></script>
        <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="js/plugins/flot/jquery.flot.pie.js"></script>

        <!-- Peity -->
        <script src="js/plugins/peity/jquery.peity.min.js"></script>
        <script src="js/demo/peity-demo.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- GITTER -->
        <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <!-- Sparkline demo data  -->
        <script src="js/demo/sparkline-demo.js"></script>

        <!-- ChartJS-->
        <script src="js/plugins/chartJs/Chart.min.js"></script>

        <!-- Toastr -->
        <script src="js/plugins/toastr/toastr.min.js"></script>



    </body>


</html>
