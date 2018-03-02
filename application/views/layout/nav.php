<!--top header-->

	<header id="home">

		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">

						</div>
					</div>

					<div class="col-md-6">
						<div class="top-right">
							<p>Location:<span>Makassar</span></p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<?php
						if( !isset( $this->session->nama ) ){
							?>
							<a href="/signin" class="navbar-brand">LOGIN</a>
						<?php } ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<?php
							if( isset( $this->session->nama ) ){?>
								<li><a href="/blog/post">post blog</a></li>
								<li><a href="/user/<?= $this->session->uid ?>">profile</a></li>
								<li><a href="/welcome">kembali awal</a></li>
							<?php } ?>
					</ul>

					</div>

					<div class="search-form">
						<form>
							<input type="text" id="s" size="40" placeholder="Search..." />
						</form>
					</div>

				</div>
			</nav>
		</div>

	</header>
