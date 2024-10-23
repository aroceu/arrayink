<?php get_header(); ?>

<body id="pagetype">

      <nav role="navigation" class="site-navigation main-navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>

<div id="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="page">

	<h1><?php the_title(); ?></a> </h1>

	<div id="entry"><?php the_content(); ?>
	</div>

	</div>

<div style="clear: both;"></div>


<?php endwhile; ?>

<?php endif; ?>

<div id="footer">

<div class="box">
<ul id="socials">
	<li><a href="http://twitter.com/arrayink"><i class="fab fa-twitter"></i> arrayink</a></li>
	<li><a href="http://twitch.tv/arrayink"><i class="fab fa-twitch"></i> ArrayInk</a></li>
	<li><a href="https://www.youtube.com/channel/UCJ4JnPHk8JKwENXdQA7_dUw"><i class="fab fa-youtube"></i> Array Ink</a></li>
	<li><a href="http://ko-fi.com/arrayink"><i class="fas fa-coffee"></i> arrayink</a></li>
	<li><a href="mailto:arrayink@gmail.com"><i class="far fa-paper-plane"></i> array.ink@gmail.com</a>
	</li>
</ul>
</div>

<div class="box">
	

</div>

<div class="box" style="text-align: right;">

<p></p>		

</div>

<div class="box">

	<p>&copy; 2019-<?php echo date('Y')?>  Array.Ink
		<br /><a href="https://array.ink/wp-admin/">Dashboard</a> / <a href="http://array.ink/wp-login.php">Login</a> / <a href="http://wordpress.org">CMS</a>
	</p>

<?php get_footer(); ?>