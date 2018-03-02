<div id="slider" class="flexslider">


			<li>
				<img src="/aset/images/slider/slider3.jpg">

				<div class="caption">
					<h1><b>
					<?php
					foreach( $blogs as $blog ){
						echo "<a href='/blog/" . $blog['blog_ID'] ."'>" . $blog['judul']." <a><br>";
					}?></h1></b>
				</div>

			</li>
		</ul>

	</div>
