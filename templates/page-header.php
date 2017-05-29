<?php use Roots\Sage\Titles; 


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
} elseif (is_page(1961)) { 

//Get BG-image
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

//Set Headerimage
?>
    <div class="home page-header" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; Background-position: center;">
      <!--<h1><?= Titles\title(); ?></h1>-->
    </div>




<?php
//WERKT NOG NIET
    
//Check if Realisaties
//}  elseif (is_page(1965)) {

//Get BG-image
 //$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(1965), 'full' );

//Set Headerimage
?>
<!--
    <div class="page-header" style="background: url('<?php// echo $backgroundImg[0]; ?>'); background-size: cover; Background-position: center;">
      <h1><?php // Titles\title(); ?></h1>
    </div>
-->




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