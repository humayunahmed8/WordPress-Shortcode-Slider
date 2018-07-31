<?php
   vc_map( 
	   	array(
	      "name" => __( "Stock Slider", "my-text-domain" ),
	      "base" => "stock_slides",
	      "category" => __( "Stock Slider", "my-text-domain"),
	      "params" => array(
	         array(
	            "type" => "textfield",
	            "heading" => __( "Count", "my-text-domain" ),
	            "param_name" => "count",
	            "value" => __( "3", "my-text-domain" ),
	            "description" => __( "Type slide limit, If you want to infinite slides you can type the numeric value -1", "my-text-domain" )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Select Slide", "my-text-domain" ),
	            "param_name" => "slide_id",
	            "value" => stock_toolkit_get_slide_as_list(), 
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("1"),
	            )
	         ),
	         array(
	            "type" => "textfield",
	            "heading" => __( "Slider height", "my-text-domain" ),
	            "param_name" => "height",
	            "std" => __( "730", "my-text-domain" ),
	            "description" => __( "Type slider height in numeric value,", "my-text-domain" )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Enable Loop", "my-text-domain" ),
	            "param_name" => "loop",
	            "std" => __( "true", "my-text-domain" ),
	            "value" => array(
	            	'Yes' => 'true',
	            	'No' => 'false',
	            ), 
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15",),
	            )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Enable autoplay", "my-text-domain" ),
	            "param_name" => "autoplay",
	            "std" => __( "true", "my-text-domain" ),
	            "value" => array(
	            	'Yes' => 'true',
	            	'No' => 'false',
	            ),
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15",),
	            )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Slide time", "my-text-domain" ),
	            "param_name" => "autoplayTimeout",
	            "std" => __( "5000", "my-text-domain" ),
	            "value" => array(
	            	'1 seconds' => '1000',
	            	'2 seconds' => '2000',
	            	'3 seconds' => '3000',
	            	'4 seconds' => '4000',
	            	'5 seconds' => '5000',
	            	'6 seconds'  => '6000',
	            	'7 seconds' => '7000',
	            	'8 seconds' => '8000',
	            	'9 seconds' => '9000',
	            	'10 seconds' => '10000',
	            	'10 seconds' => '10000',
	            	'11 seconds' => '11000',
	            	'11 seconds' => '11000',
	            	'12 seconds' => '12000',
	            	'12 seconds' => '12000',
	            	'13 seconds' => '13000',
	            	'13 seconds' => '13000',
	            	'14 seconds' => '14000',
	            	'15 seconds' => '15000',
	            ),
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15",),
	            )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Enable naviagation icon?", "my-text-domain" ),
	            "param_name" => "nav",
	            "std" => __( "true", "my-text-domain" ),
	            "value" => array(
	            	'Yes' => 'true',
	            	'No' => 'false',
	            ),
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15",),
	            )
	         ),
	         array(
	            "type" => "dropdown",
	            "heading" => __( "Enable dots?", "my-text-domain" ),
	            "param_name" => "dots",
	            "std" => __( "true", "my-text-domain" ),
	            "value" => array(
	            	'Yes' => 'true',
	            	'No' => 'false',
	            ),
	            "description" => __( "", "my-text-domain" ),
	            "dependency" => array(
	            	"element" => "count",
	            	"value" => array("2","3","4","5","6","7","8","9","10","11","12","13","14","15",),
	            )
	         )
	      )
	   ) 
   );

