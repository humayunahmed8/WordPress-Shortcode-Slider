# WordPress ShortCode Slider 

"WordPress Shortcode Slider" build with "Visual Composer" addons & "Codestar Framework", 
Inspired by the [Rasel Ahmed](https://www.facebook.com/raselahmed7).


## Preview

<img src="https://github.com/humayunahmed8/Carousel-with-Pure-CSS/blob/master/assets/img/Webp.net-gifmaker%20(1).gif" width="100%">

<br/>

## Configurable Options

* Single Hero Section 
* Static Slide with Custom Height
* Define Slider Height
* Customisable Navigation Icon
* Customisable Navigation Dots
* AutoPlay
* SlideTime
* Slide Loop
* Different Overlay in Different Slides
* Cutom Slider Text & Content
* Different Button in Different Slides
* Customisable Slider Opacity Percentage
* Input Custom Pages or External Link in Slides Button

## Installation Requirment

* WordPress 
* WordPress Shortcode Slider
* Codestar Framework
* Visual Composer 

## Installation steps

### Download Codestar Framework
[Codestar Framework Download](https://github.com/Codestar/codestar-framework/archive/1.0.2.zip)

1. Download Codestar Framework, Then Include it in your WordPress Site directoy.

```
Directory Path => /inc/codestar-framework
```
2. Call the codestar framework in your functions.php

```
require get_template_directory() . '/inc/codestar-framework/cs-framework.php';
```
3. Collect metabox page and slider options 

[Metabox and slider options](https://gist.github.com/humayunahmed8/710517640e2f4e5417476735dd81dde7)

4. Input this custom metabox page & slider options in your WordPress inc. directory

```
Directory Path => /inc/metabox-and-options-php
```
5. Then, call the metabox custom page & slider options in functions.php

```
require get_template_directory() . '/inc/metabox-and-options.php';
```
6. Download Visual Composer premium or free version. Then, active this plugin form your dashboard.


7. Download this "WordPress Shortcode Slider, integrate the slider in your "WordPress Plugin" directory. Then, Active this plugin from your dashboard.

### Plugin Activation Preview

<img src="https://github.com/humayunahmed8/Carousel-with-Pure-CSS/blob/master/assets/img/Screenshot_10.png" width="100%">

**NOTE**: You will see the "WordPress Shortcode Slider" name as "Stock toolkit".

### Finally, You will be see a post type "Slides". Add single slide in your "Slides" post type.

<img src="https://github.com/humayunahmed8/Carousel-with-Pure-CSS/blob/master/assets/img/Screenshot_14.png" width="100%">

**NOTE**: Add Some Slides in "Slides" Option. 

### At the end of full process, you can add a full slider at any pages.

<img src="https://github.com/humayunahmed8/Carousel-with-Pure-CSS/blob/master/assets/img/Screenshot_13.png" width="100%">

**NOTE**: If you want to only one slider, Type -1 value in count option. 

## License

[![License](https://img.shields.io/github/license/mashape/apistatus.svg
            )](http://mit-license.org) 
License Under MIT 
</br>
All Right Reserved By - [Humayun Ahmed](https://www.facebook.com/humayunahmed8).

Permission is hereby granted, free of charge, to any person obtaining a copy of this slider and associated documentation files (the "slider"), to deal in the Slider without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Slider, and to permit persons to whom the Slider is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Slider.
