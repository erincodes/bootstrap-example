<!--Updated this code to be the solution to Rochelle's Bootstrap challenge during demo in class on 2/8-->

<!--Left some of the Bootstrap template/documentation code for reference; doesn't match the challenge reqs exactly: https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-4-challenge/-->

<!--Refer to Rochelle's github as needed: https://github.com/rlewis2892/bootstrap-4-wireframe-->

<html lang="en">
	<head>
<!--		/> closing tag is strict HTML, according to class style guide-->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- ADD CUSTOM CSS BELOW -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<title>Boostrap Challenge</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<!--sr-only means screenreaders only-->
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>
			<section>
				<div class="container">
					<div class="row"></div>
						<div class="col">
							<div class="jumbotron">
								<h1 class="display-4">Hello, world!</h1>
								<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
								<hr class="my-4">
								<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
								<p class="lead">
									<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
								</p>
							</div>
						</div>
				</div>
			</section>

			<section class="row bg-light">
				<div class="container">
<!--					Not sure how to get the bg color to extend full width - need to look at Rochelle's final solution on github-->
					<div>
						<div class="col-sm-3">
<!--							img fluid bootstrap class makes an image scale to the size of its container!!! super useful. D-block makes it block level (images are naturally inline). Mx-auto makes the image centered when responsive squished. Mb=margin bottom. Margin is space on the outside of the element, padding is space inside. Mb-sm-0 removes margin in any size larger than xs.-->
							<img class="img-fluid d-block mx-auto mb-3 mb-sm-0" src="https://www.bet.com/topics/s/samuel-l-jackson/_jcr_content/image.custom0x0.dimg/__1379265976259__1337698892477/052212-shows-beta-host-samuel-l-jackson.jpg" alt="samuel l jackson">
						</div>
						<div class="col-sm-9">
							<p class="lead">You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
						</div>
					</div>
				</div>
			</section>

			<section>
<!--				Had to step outside to visit with Nana, need to look at Rochelle's solution here-->
<!--				Bootstrap cards are great for little features/call out sections-->
<!--				offset-2 bumps an image over -->
			</section>
<!--use py-5 to add padding on the y axis...I don't really get this. PY is a padding class in Bootstrap.-->
	</body>
</html>