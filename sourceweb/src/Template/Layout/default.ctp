<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->meta(['charset' => 'utf-8']) ?>
        <?= $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']) ?>
        <title>Amin | Basic Form</title>
        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
        <?= $this->Html->css(['bootstrap.min', '/font-awesome/css/font-awesome', 'plugins/iCheck/custom', 'animate', 'style', 'plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox']) ?>
    </head>

    <body>

        <div id="wrapper">

            <?= $this->element('left_menu') ?>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">Welcome to Admin Panel.</span>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>All form elements <small>With custom checbox and radion elements.</small></h5>

                                </div>
                                <div class="ibox-content">
                                    <?= $this->fetch('content') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2017
                    </div>
                </div>

            </div>
        </div>


        <!-- Mainly scripts -->

        <?= $this->Html->script('jquery-3.1.1.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('plugins/metisMenu/jquery.metisMenu.js') ?>
        <?= $this->Html->script('plugins/slimscroll/jquery.slimscroll.min.js') ?>
        <?= $this->Html->script('inspinia.js') ?>
        <?= $this->Html->script('plugins/pace/pace.min.js') ?>
        <?= $this->Html->script('plugins/iCheck/icheck.min.js') ?>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    </body>

</html>
