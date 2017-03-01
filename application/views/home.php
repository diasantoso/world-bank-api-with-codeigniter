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

    <title>Countries Data</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assest/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url() ?>assest/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assest/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url() ?>assest/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('service/index/1')?>">Countries Data</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Show Data Countries in WORLD BANK</h1>
        <p>In this website, you can see list of countries in world bank data.</p>
      </div>
    </div>

    <div class="container">
	  <h1 class="page-header" style="text-align:right">Countries List</h1><br/>

    <div style="text-align:center">
      <ul class="pagination">
        <li><a href="<?php echo site_url('service/index/1')?>">1</a></li>
        <li><a href="<?php echo site_url('service/index/2')?>">2</a></li>
        <li><a href="<?php echo site_url('service/index/3')?>">3</a></li>
        <li><a href="<?php echo site_url('service/index/4')?>">4</a></li>
        <li><a href="<?php echo site_url('service/index/5')?>">5</a></li>
        <li><a href="<?php echo site_url('service/index/6')?>">6</a></li>
        <li><a href="<?php echo site_url('service/index/7')?>">7</a></li>
      </ul>
    </div>

	  <div class="table-responsive">
		<table class="table table-striped">
		  <thead>
			<tr>
        <th>ID Country</th>
			  <th>Country Name</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>

      <?php
     			foreach($countries as $things=> $value)
  			{
  		?>
          <tr>
    			  <td><?php echo $value['id'];?></td>
    			  <td><?php echo $value['name'];?></td>
    			  <td><a href="<?php echo site_url('service/search/'.$value['id'])?>" class="btn btn-primary">Detail</a></td>
    			</tr>
      <?php
  			}
  		?>
		  </tbody>
		</table>
	  </div>
      <hr>
      <footer>
        <p>&copy; 2017 PLBTW</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assest/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>assest/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
