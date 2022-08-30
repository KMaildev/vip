<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbartopleft = array(
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => '<i class="fa fa-user-plus "></i>'
		),
		
		array(
			'path' => 'activities', 
			'label' => 'Activities', 
			'icon' => '<i class="fa fa-file-photo-o "></i>'
		),
		
		array(
			'path' => 'blogs', 
			'label' => 'Blogs', 
			'icon' => '<i class="fa fa-file-text-o "></i>'
		),
		
		array(
			'path' => 'projects', 
			'label' => 'Projects', 
			'icon' => '<i class="fa fa-building-o "></i>'
		),
		
		array(
			'path' => 'contacts', 
			'label' => 'Contacts', 
			'icon' => '<i class="fa fa-phone-square "></i>'
		)
	);
		
	
	
			public static $project_status = array(
		array(
			"value" => "Completed Project", 
			"label" => "Completed Project", 
		),
		array(
			"value" => "Current Project", 
			"label" => "Current Project", 
		),);
		
}