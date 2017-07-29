<html lang="es">
<head>
</head>
<body>
	<header></header>
    <?php include("menu.html"); ?>
    <section class="ContentPage full-width">
	<div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                <li style="padding:0 5px;">Juan Carlos</li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-Search" data-position="bottom" data-delay="50" data-tooltip="Search"><i class="zmdi zmdi-search"></i></a></li>
            </ul>
    </div>
	
	<!-- SLIDER -->
		
		<div class="slider">
			<ul class="slides">
			  <li>
				<img src="assets/img/slider1.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>This is our big Tagline!</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider2.jpg"> <!-- random image -->
				<div class="caption left-align">
				  <h3>Left Aligned Caption</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider3.jpg"> <!-- random image -->
				<div class="caption right-align">
				  <h3>Right Aligned Caption</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/slider4.jpg"> <!-- random image -->
				<div class="caption center-align">
				  <h3>This is our big Tagline!</h3>
				  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			  </li>
			</ul>
		</div>
		
	<!-- end SLIDER -->
	
	<div class="row">
            <!-- Tiles -->
            <article class="col s12">
                <div class="full-width center-align" style="margin: 40px 0;">
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-mail-send"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">77</span>
                            <p class="center-align">Lorem ipsum</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-shopping-cart"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">99</span>
                            <p class="center-align">Lorem ipsum</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-card"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">17</span>
                            <p class="center-align">Lorem ipsum</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                </div>   
            </article>
    </div>
	<!-- end Tiles -->
	
	</div>
	</section>
	<script>
		$(document).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('.collapsible').collapsible({
			  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			});
		$('.slider').slider({full_width: true});
			})
	  </script>
</body>
</html>