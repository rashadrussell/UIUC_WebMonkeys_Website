<!DOCTYPE html>
<html>
    
<head>
    
    <title> Web Monkeys | <?php the_title(); ?> </title>
    
    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/text.css " />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
    <!-- Website Icon --- favicon -->
    <link rel="icon" type="image/png" href="http://www.acm.uiuc.edu/webmonkeys/2012/wp-content/uploads/2012/08/logo2.png">
    
    <!-- Internet Explorer 7 and less alternative stylesheet -->
    <!--[if lte IE 7]> <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css " /> <![endif]-->
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
</head>
 
<body>
	
    <div id="header_wrapper"><!-- header_wrapper -->
	<div id="header_container"><!-- header_container -->
                                      
	    <a class="logo" href="index.php"><img src="http://www.acm.uiuc.edu/webmonkeys/2012/wp-content/uploads/2012/08/logo2.png" alt="Web Monkeys" /></a>
		     
	    <div class="menu">		                          
		<?php wp_page_menu( 'show_home=1&sort_column=menu_order' ); ?>
	    </div>
	
	    <div id="bigImageArea">
		<img class="bigImage" src="http://www.acm.uiuc.edu/webmonkeys/2012/wp-content/uploads/2012/08/textCloud.png" />
	    </div><!-- end bigImageArea -->
	    
	</div><!-- end header_container -->   
    </div><!-- end header_wrapper -->