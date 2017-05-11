<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $title ;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/jumbotron-narrow.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/contact.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url();?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
          <?php $this->load->view('comp/menu')?>
        <h3 class="text-muted">Dedi Hartono</h3>
      </div>

      <?php $this->load->view($content) ;?>

      
      <footer class="footer">
        &copy; 2017 Bootstrap - Dedi Hartono. 
        <div class="pull-right">
          <a href="https://www.facebook.com/dedhartono"><i class="fa fa-2x fa-facebook-square "></i></a>
          <a href="https://www.linkedin.com/in/dedi-hartono-62966210a/"><i class="fa fa-2x fa-linkedin-square"></i></a>
          <a href="https://twitter.com/Dedihartono_"><i class="fa fa-2x fa-twitter-square"></i></a>
          <a href="https://plus.google.com/u/0/101082223317243807104"><i class="fa fa-2x fa-google-plus-square"></i></a>
          <a href="https://www.youtube.com/channel/UC33I5QI3t-R9jgCjjkz6XQQ"><i class="fa fa-2x fa-youtube-square"></i></a>
        </div>
      </footer>

    </div> <!-- /container -->

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
    <!--Dinamis URL-->
     <script src="<?php echo base_url();?>assets/js/menu.js"></script>
  </body>
</html>
