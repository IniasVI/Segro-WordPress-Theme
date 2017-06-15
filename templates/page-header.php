<?php use Roots\Sage\Titles; 
    $rootmap = get_stylesheet_directory_uri();

//Check if Contactpage
if ( is_page(1967)) { 

    //Set map as header ?>
    <div class="page-header map">
        <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=17&center=51.0715%2C4.2960&key=AIzaSyBEXhF_H59WT_RVFal7RfQHMDBV-umNQA4" class="kaart"></iframe>

        <!--<h1><?= Titles\title(); ?></h1>-->
    </div>



<?php 
//Check if Aboutpage
} elseif ( is_page(1963) || is_404()) { 

//Set About header
?>




<?php 
//Check if Homepage
} elseif (is_front_page()) { 

//Get BG-image
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

//Set Headerimage
?>
    <div class="home page-header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; Background-position: center;">
      <!--<h1><?= Titles\title(); ?></h1>-->
        <img src="<?php echo $rootmap. '/assets/images/logo.png' ?>" alt="Logo Grondwerken Segro BVBA" class="logo">
        <a href="wordpress/contact"><button class="contactbtn">Neem snel contact met ons op!</button></a>
    </div>



<?php
//Other pages
}  else {

//Get BG-image
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

//Set Headerimage
?>
    <div class="page-header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; Background-position: center;">
      <!--<h1><?= Titles\title(); ?></h1>-->
    </div>


<?php } ?>