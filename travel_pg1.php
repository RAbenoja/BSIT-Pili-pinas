<!-- Homepage -->

	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
					  <img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
						<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url('Pilipinas/home/');?>">Home</a></li>
							<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="">Travel
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="<?php echo base_url('Pilipinas/travel/');?>"> Breathtaking Tourist Spots </a></li>
									  <li class="divider"></li>
									  <li><a href="<?php echo base_url('Pilipinas/travel2/');?>">Must Try Outdoor Activities</a></li>
									  <li class="divider"></li>
									  <li><a href="<?php echo base_url('Pilipinas/travel3/');?>">Calendar of Festivals</a></li> 
									</ul>
								  </li>
						    <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">History
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="<?php echo base_url('Pilipinas/history/');?>">World Heritage Sites</a></li>
									  <li class="divider"></li>
									  <li><a href="#">Heritage Events</a></li>
									</ul>
								  </li>
							 <li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">About
									<span class="caret"></span></a>
									<ul class="dropdown-menu">
									  <li><a href="#">Contact Us</a></li>
									  <li class="divider"></li>
									  <li><a href="#">Terms and Conditions</a></li>
									</ul>
								  </li>			
			    </ul> 
						  
						
						  <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"/> 
									<input type="submit" value="Search" />
								</form> 
						  </li>
						  </ul>
						 
						 
						</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background')">	

	<div class = "row">
	<br />
	<br />
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	  
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li> 
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		  <li data-target="#myCarousel" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style = "box-shadow: 0px 2px 35px black;">
		  <div class="item active">
			<img src="<?php echo base_url('img/slider_1.jpg') ?>" alt="welcome to philippines" style="width:100%;">
		  </div>

		  <div class="item">
			<img src="<?php echo base_url('img/slider_2.jpg') ?>" alt="" style="width:100%;">
		  </div>
		
		  <div class="item">
			<img src="<?php echo base_url('img/slider_3.jpg') ?>" alt="" style="width:100%;">
		  </div>
		  
		  <div class="item">
			<img src="<?php echo base_url('img/slider_4.jpg') ?>" alt="" style="width:100%;">
		  </div>
		  
		  <div class="item">
			<img src="<?php echo base_url('img/slider_5.jpg') ?>" alt="" style="width:100%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	
	
	
	<div class="item">
	<img src="img/slider_3.jpg" alt="" style="width:100%;">
	</div>
		<div class = "container-fluid">
		<div class = "row text-center">
		<h1 style="color:#C92E2E;"> INSERT CITY/PROVINCE HERE</h1>
		<h4 style="color:#b9b5b5;"> details here</h4>
				<ul id="rig">
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti1.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Lorem Ipsum Dolor</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti2.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Consectetur Adipiscing</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti3.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Vivamus ut Felis</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti4.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Curabitur tempus</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti5.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Sed et nunc luctus</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti6.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Suspendisse tellus</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti1.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">pellentesque odio</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti2.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Nam euismod</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti3.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Vestibulum ultricies</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti4.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">quis interdum sapien</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti5.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Maecenas vitae</span>
						</a>
					</li>
					<li>
						<a class="rig-cell" href="#">
							<img class="rig-img" src="img/desti6.png">
							<span class="rig-overlay"></span>
							<span class="rig-text">Proin Scelerisque</span>
						</a>
					</li>
				</ul>
			</div>
		</div>

	
	
	<!-- footer -->
	<div class = "row text-center" id = "footer">
		<div class = "col-md-4">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "100%" class="img-responsive" alt="Los Angeles">
		</div>
		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
			<a href = ""> Twitter</a>
			<a href = ""> Facebook  </a>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> ABOUT US</h3>
			<h4> Sitemap</h4>
			<h4> Privacy Policy</h4>
			<h4> Terms and Conditions</h4>
		</div>
		<div class = "col-md-2">
		</div>
	</div>
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>
</div>

