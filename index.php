<!DOCTYPE html>
<html lang="en-us" ng-app="weatherApp">
    <head>
        <title>AngularJS Weather Forecast SPA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8">
		<link rel="icon" href="favicon.ico?v=1.1"> 
<!--		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether.min.css" />-->
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
        <script src="https://code.angularjs.org/1.3.0-rc.2/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.3.0-rc.2/angular-route.min.js"></script>
        <script src="https://code.angularjs.org/1.3.0-rc.2/angular-resource.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<!--		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/umd/collapse.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRsHYUL5ap5Yd8l6SX6a_muOQmGeH1pGI&libraries=places"></script>
		<script src="app.js"></script>
		<script src="routes.js"></script>
		<script src="services.js"></script>
		<script src="controllers.js"></script>
		<script src="directives.js"></script>
    </head>
    <body>
        <header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        					<span class="sr-only">Toggle navigation</span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
      					</button>
      						<a class="navbar-brand" href="#/" ><i class="fa fa-home fa-2x" id="homeIcon" aria-hidden="true" fa-4x></i></a>
    				</div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#/about">
									<i class="fa fa-bath fa-2x" id="tubIcon" aria-hidden="true" fa-4x></i>
								</a>	
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
  				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<div class="container">
			<div class="jumbotron">
				<h1>Check Ahead</h1>
					<p><em>enter a city name below to see its weather forecast</em></p>
			</div>
			<div ng-view></div>
		</div>
    </body>
</html>