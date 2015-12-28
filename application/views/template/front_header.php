<!doctype html>
<html lang="en">
    <head>
        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>Katalog - Satker PPLP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
        <script type="text/javascript">
          var root = '<?php echo base_url() ?>';
        </script>
    </head>
  <body>

    <!-- Header -->
        
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="modal" data-target="#loginModal">
                    <a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span>Login</span></a>
                </button>

                <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="<?php echo base_url(); ?>assets/front/img/slider/blog5.png" width="550" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="#loginModal" data-toggle="modal" data-target="#loginModal"><span>Login</span></a>
                    </li>
                </ul>         
            </div>

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="loginModalLabel">Login Administrator</h4>
                  </div>
                  <div class="modal-body">
                    <div class="alert" id="login_result"></div>
                    <form class="form-horizontal" role="form" method="post" id="form_login">
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="username" name="user" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-lg btn-default btn-block">LOGIN</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </nav>

    <!-- End Header -->

    