<?php
/*
* Index Page 
* eSell Theme
* 
*/

 if(get_option('show_on_front') == 'page') {get_template_part('page');} 
 elseif(get_option('show_on_front') == 'posts') {get_template_part('featured-home');} 
 else {	get_template_part('index');
}


 

?>