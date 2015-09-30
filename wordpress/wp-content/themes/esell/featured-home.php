<?php 

//Front page for you website set it from dashboard
//eSell WordPress Theme 

get_header(); ?>
<div id="page">
		<div id="frontpage" class="clearfix">
				
	<?php echo do_shortcode('[URIS id=23]') ?>
</div>
<div id="info1" class="clearfix">
<div class="info">
<?php esell_columnimage(); ?><h2><?php if ( of_get_option('esell_columnh1') <> "" ) { echo stripslashes(of_get_option('esell_columnh1')); } else {_e( 'Column Title here', 'esell' );} ?></h2>
<p><?php if ( of_get_option('esell_columndesc1') <> "" ) { echo stripslashes(of_get_option('esell_columndesc1')); } else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );} ?></p>
<?php esell_columnimage2(); ?><h2><?php if ( of_get_option('esell_columnh2') <> "" ) { echo stripslashes(of_get_option('esell_columnh2')); }else {_e( 'Column Title here', 'esell' );} ?></h2>
<p><?php if ( of_get_option('esell_columndesc2') <> "" ) { echo stripslashes(of_get_option('esell_columndesc2')); }else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );} ?></p>
</div>	

 <div class="info">
<?php esell_columnimage3(); ?><h2><?php if ( of_get_option('esell_columnh3') <> "" ) { echo stripslashes(of_get_option('esell_columnh3')); }else {_e( 'Column Title here', 'esell' );} ?></h2>
<p><?php if ( of_get_option('esell_columndesc3') <> "" ) { echo stripslashes(of_get_option('esell_columndesc3')); } else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );}?></p>
<?php esell_columnimage4(); ?><h2><?php if ( of_get_option('esell_columnh4') <> "" ) { echo stripslashes(of_get_option('esell_columnh4')); } else {_e( 'Column Title here', 'esell' );}?></h2>
<p><?php if ( of_get_option('esell_columndesc4') <> "" ) { echo stripslashes(of_get_option('esell_columndesc4')); } else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );}?></p>
</div>	

<div class="info info3">
<?php esell_columnimage5(); ?><h2><?php if ( of_get_option('esell_columnh5') <> "" ) { echo stripslashes(of_get_option('esell_columnh5')); } else {_e( 'Column Title here', 'esell' );}?></h2>
<p><?php if ( of_get_option('esell_columndesc5') <> "" ) { echo stripslashes(of_get_option('esell_columndesc5')); }else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );} ?></p>
<?php esell_columnimage6(); ?><h2><?php if ( of_get_option('esell_columnh6') <> "" ) { echo stripslashes(of_get_option('esell_columnh6')); }else {_e( 'Column Title here', 'esell' );} ?></h2>
<p><?php if ( of_get_option('esell_columndesc6') <> "" ) { echo stripslashes(of_get_option('esell_columndesc6')); }else {_e( 'Put description or feature detail here from theme option > home page and customize fonts', 'esell' );} ?></p>

</div>	
	<?php if ( of_get_option('esell_frontposts' ) =='on') { ?>
<div id="content">
<?php
$page_num = $paged;
if ($pagenum='') $pagenum =1;
query_posts('showposts=5&paged='.$page_num); ?>
   	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('/includes/post'); ?>
            <?php endwhile; ?>
			<?php endif; ?>
			</div>	<?php } ?>
<?php get_footer(); ?>

