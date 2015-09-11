<div id="sidebar">
<?php 
	if (of_get_option('esell_sharebut' ) =='1' ) {get_template_part('/includes/social'); } 
	if (of_get_option('esell_activate_ltposts' ) =='1' ) {get_template_part('/includes/ltposts'); }
	dynamic_sidebar('esellsidebar');
?>	</div>	<!-- end div #sidebar -->
