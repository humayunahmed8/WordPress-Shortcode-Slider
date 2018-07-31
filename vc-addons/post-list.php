<?php

// Post List Addons


	vc_map(array(
		"name" => __("Post List", "my-text-domain") ,
		"base" => "post_list",
		"category" => __("Stock", "my-text-domain") ,
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __("Post type", "my-text-domain") ,
				"param_name" => "type",
				"value" => __("post", "my-text-domain") ,
				"description" => __("Type post type here.", "my-text-domain")
			) ,
			array(
				"type" => "textfield",
				"heading" => __("Post Count", "my-text-domain") ,
				"param_name" => "count",
				"value" => __("-1", "my-text-domain") ,
				"description" => __("Type how many items you want to show, Type -1 for unlimited item", "my-text-domain")
			) ,
			array(
				"type" => "colorpicker",
				"heading" => __("Link color", "my-text-domain") ,
				"param_name" => "color",
				"value" => __("#000", "my-text-domain") ,
				"description" => __("Select link color.", "my-text-domain")
			) ,
			array(
				"type" => "iconpicker",
				"heading" => __("Icon", "my-text-domain") ,
				"param_name" => "icon",
				"value" => __("fa fa-link", "my-text-domain") ,
				"description" => __("Select link icon.", "my-text-domain")
			)
		)
	));
