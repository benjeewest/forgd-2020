<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>

<div class="wrapper" id="page-wrapper">
	<div class="hero" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-bg.svg'); background-repeat:no-repeat;background-size:cover">
		<div class="inner">
			<div class="row">
				<div class="hero-col hero-col-left">
					<h1>Forging the new common ground</h1>

					<hr />
					<div class="btn-row">
						<a class="btn btn-secondary" href="about">What we believe</a>
						<a class="btn btn-primary" href="signup">Join the newsletter</a>
					</div>
				</div>
				<div class="hero-col hero-col-right">
					<form class="hero-form hero-col-form">
						<h3>Newsletter</h3>
						<div>
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

						</div>

						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
						</div>
						<button type="submit" class="btn">Sign up</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<section class="page-section">
		<div class="inner" id="description">

			<h2>Introduction</h2>
			<p class="balance-text">We believe that a fairer, more prosperous and more equal society is within our reach. But getting there means a politics of the common ground, based on celebrating the things we share in common, and the responsibilities we owe to one other.</p>
			<p class="balance-text">

				We are building a movement for a Labour Party that puts country before itself. One prepared not only listen, but to reflect and speak the priorities of a country it genuinely loves—as it once did.</p>
			<div class="d-flex">
				<a class="btn btn-lg btn-outline-dark btn-plus mr-auto" href="#">More</a>
			</div>
		</div>
	</section>
	<section class="wrapper bg-dark text-light">
		<div class="inner">
			<div class="internal-nav">
				<div class="internal-nav-brand" href="#">Find us on</div>
				<ul class="nav-links">
					<li class="nav-item"><a href="#">Facebook</a></li>
					<li class="nav-item"><a href="#">Podcast</a></li>
					<li class="nav-item"><a href="#">Digest</a></li>
					<li class="nav-item"><a href="#">Newsletter</a></li>
					<li class="nav-item"><a href="#">Events</a></li>
				</ul>

			</div>
		</div>
	</section>
	<section class="page-section">
		<div class="inner">
			<h2>Campaigns</h2>
			<div class="row">
				<div class="cta-col">

					<img class="cta-col-img" src="https://i0.wp.com/order-order.com/wp-content/uploads/2020/06/WhatsApp-Image-2020-06-04-at-16.13.27.jpeg?resize=630%2C419&ssl=1" alt="Card image cap">
					<div class="cta-col-content">
						<h3>Abolish Citizenship Fees</h3>
						<div class="petition-results">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

							</div>
							<div class="results-label"><span>100</span> of 500 signatures</div>
						</div>
						<a href="#" class="btn btn-primary">Add my name</a>
					</div>
				</div>
				<div class="cta-col">

					<img class="cta-col-img" src="https://i0.wp.com/order-order.com/wp-content/uploads/2020/06/WhatsApp-Image-2020-06-04-at-16.13.27.jpeg?resize=630%2C419&ssl=1" alt="Card image cap">
					<div class="cta-col-content">
						<h3>For an English Parliament</h3>
						<div class="petition-results">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

							</div>
							<div class="results-label"><span>100</span> of 500 signatures</div>
						</div>
						<a href="#" class="btn btn-primary">Add my name</a>
					</div>
				</div>

				<div class="cta-col">
					<img class="cta-col-img" src="https://i0.wp.com/order-order.com/wp-content/uploads/2020/06/WhatsApp-Image-2020-06-04-at-16.13.27.jpeg?resize=630%2C419&ssl=1" alt="Card image cap">


					<div class="cta-col-content">
						<h3>Stand up to Huiwei</h3>
						<div class="petition-results">
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="results-label"><span>100</span>of 500 signatures</div>
						</div>
						<a href="#" class="btn btn-primary">Add my name</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section bg-mustard">
		<div class="inner">
			<h2>What we believe</h2>
			<div class="text-grid">
				<div class="text-grid-item">
					<h3>Valuing what we share in common</h3>
					<p>
						We achieve more together than we do on our own. And those shared successes depend on a sense of belonging, and on values and institutions that everyone in our country can feel a part of. We urgently need to renew the stories, symbols and ideas that connect us to one another, so that everyone can feel part of them – no matter their background or where they have come from.</p>

				</div>
				<div class="text-grid-item">
					<h3>Recognising our duties to one another</h3>
					<p>
						Our individual rights are made real by the responsibilities we have to one another. To build a strong society with strong public services and institutions we can be proud of, we need to recognise and strengthen this mutual responsibility, building a welfare state that recognises contribution, a taxation system based on fairness, and employment system based on dignity and security. </p>

				</div>
				<div class="text-grid-item">
					<h3>Putting power in the hands of people</h3>
					<p>
						The goal of the Labour Party is not state socialism, but to give ordinary people a voice in decisions which affect their lives. That means making power accountable, by breaking up private and public monopolies, encouraging a level playing field, and strengthening our rights of citizens and consumers.</p>

				</div>
				<div class="text-grid-item">
					<h3>Standing up for democratic values</h3>
					<p>
						In our lifetimes, we risk a world in which democracy and individual liberties are no longer the norm. If we value our freedoms, we need the means to defend them at home and when our interests are at stake abroad. That means renewing our alliances and friendships in Europe and across the Atlantic and Commonwealth, and investment in our diplomatic, soft power and military capabilities.</p>

				</div>
			</div>
		</div>

	</section>

	<section class="page-section">
		<div class="inner">
			<h2>Latest</h2>
			<div class="row">
				<div class="col">
					<h3>News</h3>
					<ul class="item-list text-teal">
						<li>
							<h4>This is the post title</h4>
							<p class="meta">Posted 6 days ago</p>
						</li>
						<li>
							<h4>This is the post title</h4>
							<p class="meta">Posted 6 days ago</p>
						</li>
						<li>
							<h4>This is the post title</h4>
							<p class="meta">Posted 6 days ago</p>
						</li>
						<li>
							<h4>This is the post title</h4>
							<p class="meta">Posted 6 days ago</p>
						</li>
						<li>
							<h4>This is the post title</h4>
							<p class="meta">Posted 6 days ago</p>
						</li>

					</ul>
				</div>
				<div class="col">
					<h3>Twitter</h3>
				</div>
				<div class="col">
					<h3>Events</h3>
				</div>
			</div>
		</div>
	</section>

</div><!-- #content -->



<?php get_footer(); ?>
