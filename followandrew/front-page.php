<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Rajpout.Tech</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rajpout.Tech">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="wp-content/themes/followandrew/assets/rt.png"> 
    
    <!-- FontAwesome CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
	<!-- Theme CSS -->
	<link rel="stylesheet" href="wp-content/themes/followandrew/styles.css">
	<?php
	get_header();
	?>

</head> 

<body>
    

    
    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">Rajpout.Tech - Your Trusted Digital Media Agency</h1>
		</header>
		<article class="content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead"> 
			In the ever-evolving landscape of digital media, businesses are constantly seeking innovative ways to connect with their audience, enhance their online presence, and stay ahead of the competition. Enter <b>Rajpout.Tech</b> – your go-to partner for navigating the digital realm and unleashing the full potential of your brand.
			</p>
			<h1>
			Who We Are
			</h1>
			<p>
			At Rajpout.Tech, we are not just a digital media agency; we are your strategic collaborators in the digital space. Our team of experts is dedicated to understanding your unique needs and crafting tailor-made solutions that drive real results.
			</p>
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="wp-content/themes/followandrew/assets/social.jpeg" class="d-block w-100" alt="1">
				  </div>
				  <div class="carousel-item">
					<img src="wp-content/themes/followandrew/assets/services.jpeg" class="d-block w-100" alt="2">
				  </div>
				  <div class="carousel-item">
					<img src="wp-content/themes/followandrew/assets/media.jpeg" class="d-block w-100" alt="3">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			  <section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Subscribe to the Newsletter</h3>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
				</section>
			<div class="row row-cols-1 mt-4 row-cols-md-2">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Web Development and Design</h5>
					  <p class="card-text">Your website is often the first interaction a potential customer has with your brand. We specialize in creating visually stunning, user-friendly websites that captivate and convert.</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Social Media Management</h5>
					  <p class="card-text">Social media is the heartbeat of modern communication. Our team excels at developing comprehensive social media strategies to elevate your brand, engage your audience, and foster meaningful connections.
						</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Content Creation</h5>
					  <p class="card-text">Compelling content is key to standing out in the digital noise. From blog posts and infographics to videos and podcasts, we create content that resonates with your audience and drives engagement.
						</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Search Engine Optimization (SEO)</h5>
					  <p class="card-text">Be seen by those who matter most. Our SEO experts employ cutting-edge techniques to ensure your brand ranks high on search engines, increasing visibility and driving organic traffic.
						</p>
					</div>
				  </div>
				</div>
		</div>
		<p>
		<center><h1><b>Why Choose Rajpout.Tech?</b></h1><br></center>
		<h3>1. Proven Track Record:</h3>
		Our portfolio speaks for itself. We have successfully partnered with diverse businesses, helping them achieve and exceed their digital goals.

		<h3>2. Innovation at the Core:</h3>
		We stay ahead of industry trends and leverage the latest technologies to keep your brand at the forefront of digital innovation.

		<h3>3. Client-Centric Approach:</h3>
		Your success is our success. We work closely with you, fostering open communication and collaboration throughout the entire process.

		<h3>4. Measurable Results:</h3>
		Our data-driven approach ensures that every strategy and campaign is backed by analytics, allowing you to track and measure your digital success.

		<h3>Get Started Today!</h3>
		Ready to take your digital presence to the next level? Contact Rajpout.Tech today for a consultation. Whether you're a startup looking to make a splash or an established business aiming for a digital refresh, we have the expertise to bring your vision to life.

		Don't just adapt to the digital age—thrive in it with Rajpout.Tech
		</p>
	    </article>
		<?php
		if( have_post()){
			while(have_posts() ){
				the_post();
				the_content();
			}
		}
		?>

	    <?php
		get_footer();
		?>
    
    </div>
    
    
    <!-- Bootstrap Javascript -->          
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>
</html> 

