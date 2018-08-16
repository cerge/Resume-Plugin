<?php
/*
Plugin Name: Admin Menu
Author: Cristian Gaitano Ornia
*/


add_action('admin_menu', 'agrego_pagina');


function agrego_pagina() {

add_menu_page(__('Resume'), __('Resume'), 'manage_options', 'mt-top-level-handle', 'contenido_pagina_resume' );
    add_submenu_page(  __('Resume'), 'My Custom Submenu Page', 'My Custom Submenu Page', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' );
    wp_register_script( 'my_plugin_script', plugins_url('/admin_menu.js', __FILE__), array('jquery'));
    wp_enqueue_script( 'my_plugin_script' );
}


function contenido_pagina_resume() {
echo "
" . __( '<b> Resume Page<b>

<div id="form_container">
	
		<h1><a>Test Wordpress</a></h1>
		<form id="form_22622" class="appnitro" method="post" action="">
					<div class="form_description">
			<h2>Test Wordpress</h2>
			<p>Este es un form para el test de KeyPress Media LLC</p>
		</div>						
			<ul>			
			<li id="li_1">
		<label class="description" for="element_1">Name </label>
		<div>
			<input id="element_1" name="element_1"  type="text" maxlength="255" value=""> 
		</div> 
		</li>		<li id="li_2">
		<label class="description" for="element_2">Resume </label>
		<div>
			<textarea id="element_2" name="element_2" ></textarea> 
		</div> 
		</li>		<li id="li_4">
		
		<span>
		    <label class="description" for="element_4">Send copy </label>
			<input id="element_4_1" name="element_4_1"  type="checkbox" value="1">


		</span> 
		</li>

		<li id="li_3" >
		<label class="description" for="element_3">Send Email </label>
		<div>
			<input id="element_3" name="element_3"  type="text" maxlength="255" value=""> 
		</div> 
		</li>
			
				<li class="buttons">
			   
			    
				<input id="saveForm" type="submit" name="submit" value="Send resume">
		</li>
			</ul>
		</form>	
		
	</div>




	' ) . "
";
}










?>