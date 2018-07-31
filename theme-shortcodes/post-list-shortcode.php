<?php

// Post List Shortcode

function post_list_shortcode($atts){

	extract(shortcode_atts(array(
		'count' => '-1',
		'type' => 'post',
		'color' => '#000',
		'icon' => ''
	) , $atts));
	$q = new WP_Query(array(
		'posts_per_page' => $count,
		'post_type' => $type
	));

	$list = '<ul>';

		while ($q->have_posts()):
			$q->the_post();
			$idd = get_the_ID();
			$post_content = get_the_content();

			$list.= '
		    	<li><a style="color:' . $color . '" href="' . get_permalink() . '">';
				if (!empty($icon)){
						$list.= '<i class="' . $icon . '"></i>';
					}
				$list.= '' . get_the_title() . '</a></li>';

		endwhile;

	$list.= '</ul>';
	wp_reset_query();
	return $list;

	}

add_shortcode('post_list', 'post_list_shortcode');