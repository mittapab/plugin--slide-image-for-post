<?php

function create_shortcode_cpt_slide(){ ob_start();
 
 $slide_arr = array();

 if(get_field('upload_image_slide_feature_cpt_1')){
   $slide_arr[0] = get_field('upload_image_slide_feature_cpt_1');
 }
 if(get_field('upload_image_slide_feature_cpt_2')){
   $slide_arr[1] = get_field('upload_image_slide_feature_cpt_2');
 }
 if(get_field('upload_image_slide_feature_cpt_3')){
   $slide_arr[2] = get_field('upload_image_slide_feature_cpt_3');
 }
 if(get_field('upload_image_slide_feature_cpt_4')){
   $slide_arr[3] = get_field('upload_image_slide_feature_cpt_4');
 }
 if(get_field('upload_image_slide_feature_cpt_5')){
   $slide_arr[4] = get_field('upload_image_slide_feature_cpt_5');
 }
 if(get_field('upload_image_slide_feature_cpt_6')){
   $slide_arr[5] = get_field('upload_image_slide_feature_cpt_6');
 }

 if(count($slide_arr) == 0){
   $slide_arr[0] = 'https://library.mfu.ac.th/km/wp-content/themes/maglist/assets/img/default-image.jpg';
 }

?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-inner">
   

   <?php  foreach($slide_arr as $val){ ?>
     <div class="carousel-item active">
     <img src="<?php echo $val;?>" class="d-block w-100 sl-img" alt="..."  style="height:495px;">
     </div>
 <?php  }   ?>
     
 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
 </button>
</div>

<?php  echo ob_get_clean();}

add_shortcode('cpt_slide', 'create_shortcode_cpt_slide');