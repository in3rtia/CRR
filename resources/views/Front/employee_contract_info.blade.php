<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee | Contract Information</title>

<link href="{{URL::asset('css/bootstrap.min.css')}}"  rel="stylesheet">
<link href="{{URL::asset(css/datepicker3.css')}}" rel="stylesheet">
<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="{{URL::asset('js/html5shiv.js')}}"></script>
<script src="{{URL::asset('js/respond.min.js')}}"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="employee_home.html"><img src="img/unza.png" alt="Unza logo" height="35" width="35" style="padding-bottom:5px"><span>Contract Renewal Reminder </span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="employee_profile.html" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="employee_profile.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked hourglass"><use xlink:href="#stroked-hourglass"></use></svg> Help</a></li>
							<li><a href="login.html"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<!--<input type="text" class="form-control" placeholder="Search">-->
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="employee_home.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Home</a></li>
			<!--<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>-->
			
			<li class="active"><a href="employee_contract_info.blade.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Contract Information</a></li>
			<li><a href="#"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Calendar</a></li>
			<!--<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>-->
			<!--<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>-->

			<li role="presentation" class="divider"></li>
			<li><a href="#"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"></use></svg> About</a></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="employee_home.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
		
		<!--<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms</h1>
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Contract Info.</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
						      <label class="col-sm-4 col-md-2 col-xs-6" for="status">Contract Status:</label>
						      <div class="col-sm-8 col-md-10 col-xs-6">
						 		<label class="text-danger" for="status">Expired</label>
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="col-sm-4 col-md-2 col-xs-6" for="status">Contract Expiry Date:</label>
						      <div class="col-sm-8 col-md-10 col-xs-6">
						 		<label class="text-primary" for="status">29.03.2016</label>
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="col-sm-4 col-md-4 col-xs-6" for="check">Click here if application has been submitted:</label>
						      <div class="col-sm-8 col-md-8 col-xs-6">
						 		<label id="demo">
									<input type="checkbox" value="" onchange="myFunction()"> <!--Include modal here to show after the check box is checked-->	
								</label>

								<script>
										function myFunction() {
										    //var x;
										    if (confirm("Are you sure!") == true) {
										       //Some code
										    } else {
										       //Some other code
										    }
										    //confirm("Are you sure?");
										}

									</script>
						      </div>
						    </div>

						    <div class="form-group">
						      <label class="col-sm-4 col-md-3 col-xs-6" for="tracking">Application Progress/Tracking:</label>
						      <div class="col-sm-8 col-md-9 col-xs-6">
						 		<label class="text-primary" for="progress">Contracts Office</label>
						      </div>
						    </div>
						
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/chart.min.js')}}"></script>
	<script src="{{URL::asset('js/chart-data.js')}}"></script>
	<script src="{{URL::asset('js/easypiechart.js')}}"></script>
	<script src="{{URL::asset('js/easypiechart-data.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>