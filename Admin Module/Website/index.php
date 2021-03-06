<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sound System</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body>
<script>
$(document).ready(function(){
		$('.navbar-fostrap').click(function(){
			$('.nav-fostrap').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
	});
	
</script>
	<!--Header-->
	<header id="showcase" class="grid">
	<!-- <div class="bg-image"></div> -->
	<!--SLIDER-->
		<div class='slider'>
		  <div class='slide1'></div>
		  <div class='slide2'></div>
		  <div class='slide3'></div>
		  <div class='slide4'></div>
		</div>
	
	
	
	
	
	
	
	
	<div class="content-wrap">
	<!-- <h1>rent. make music . enjoy! </h1> -->
	<!-- <p>Sound System Rentals tagline</p> -->
	</div>
	</header>
	<!--NAV BAR-->
	 <nav>
      <div class="nav-fostrap">
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="javascript:void(0)">Rental Equipments<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="">rental1</a></li>
              <li><a href="">rental2</a></li>
              <li><a href="">rental3</a></li>
              <li><a href="">rental4</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" >Production Services<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="">Services</a></li>
              <li><a href="">Rental Packages</a></li>
            </ul>
          </li>
         
          <li><a href="">About</a>
				<ul class="dropdown">
              <li><a href="">About us</a></li>
              <li><a href="">Contact</a></li>
            </ul>
		  </li>
		  <li><a href="signup.php">Sign Up</a></li>
		  <li><a href="signin.php">Sign in</a></li>
		  <li><a href="status.php">Approve/Deny Account</a></li>
          
        </ul>
      </div>
      <div class="nav-bg-fostrap">
        <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
      
      </div>
    </nav>
	<!--Main Section-->
	<main id="main">
		<section id="section-a" class="grid">
			<div class="content-wrap">
				<h2 class="content-title">Sound System rentals</h2>
				<p>content</p>
			</div>
		</section>
	</main>
	
	<!--Section-->
	<section id="section-b" class="grid">
		<ul>
			<li>
				<div class="card">
					<img src="img/img1.jpg" alt="">
				</div>
				<div class="card-content">
					<h2 class="card-title">TITLE 1</h2>
					<P>description what did just happen?</P>
				
				</div>
			</li>
		</ul>
	</section>
	
	 <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="img/rent.png">
          <h3>Rentals</h3>
          <p>Sound System Rentals offers a wide range of professional audio, video and lighting equipment for rental in our Allentown warehouse. </p>
        </div>
        <div class="box">
          <img src="img/retail.png">
          <h3>Retail</h3>
          <p>Professional audio, video and lighting equipment for rental in our Allentown warehouse.  Please feel free to review the detailed equipment listings and our FAQ below. Contact us for a specific quote or more information.</p>
        </div>
        <div class="box">
          <img src="img/user.png">
          <h3>eN</h3>
          <p>Pag-aari ko 'to!</p>
        </div>
      </div>
    </section>
	

</body>
 
</html>