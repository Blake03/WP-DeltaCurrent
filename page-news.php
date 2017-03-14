<?php
/* Template Name: page-news */

/**
 * The template for displaying sports-page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DeltaCurrent.com
 */

get_header(); ?>

	<div id="primary" class="content-area-full-width">
		<main id="main" class="site-main" role="main">

			<ul class="mobile-feed-menu">
				<li class="mobile-feed-menu__items"><a href="#primary">ArkansasOnline</li>
				<li class="mobile-feed-menu__items"><a href="#searktoday">SearkToday</a></li>
				<li class="mobile-feed-menu__items"><a href="#monticellolive">MonticelloLive</a></li>
			</ul><!--mobile-menu-->


		<!-- CUSTOM LOOP
			<div class="scoreboard-wrapper">
				<ul class="scoreboard">
					
				<?php $scoreQuery = new WP_Query('catogory_name=robopost'); ?>
					
					<?php while ($scoreQuery -> have_posts() ) : $scoreQuery ->the_post();?>

						<li>
						<?php the_title(); ?> 
						</li>

					<?php endwhile; ?> 
					

				</ul>
			</div>
		-->	
			<div class="news-flex-wrapper">
				
				<div id="arkansasonline" class="news-box animated1 rotateInDownRight">
					<h2>ArkansasOnline.com</h2>
					<?php getFeed("http://www.arkansasonline.com/rss/headlines"); ?>
				</div><!--news-box-->

				<div id="searktoday" class="news-box animated2 rotateInDownRight">
					<h2>SearkToday.com</h2>
					<?php getFeed("http://searktoday.com/feed"); ?>
				</div><!--news-box-->

				<div id="monticellolive" class="news-box animated3 rotateInDownRight">
					<h2>MonticelloLive.com</h2>
					<?php getFeed("http://monticellolive.com/feed"); ?>
					<?php dynamic_sidebar( 'news-feed-widget' ); ?>
				</div><!--news-box-->

			</div><!--news-flex-wrapper-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
