<?php
/*
    Template Name: Home Page
 */
//advanced custom fields
$about_title_1 =  get_post_meta( 16, 'about_title_1', true );
$about_title_2 =  get_post_meta( 16, 'about_title_2', true );
$about_description_1 = get_post_meta( 16, 'about_description_1', true );
$about_description_2 = get_post_meta( 16, 'about_description_2', true );
$main_menu_background_image = get_field('main_menu_background_image');
$image_2 = get_field('image_2');
$phone_number = get_field('phone_number');
$email = get_field('email');
get_header(); ?>
  <div id="content">


    <!-- <div class="row"> -->
    <!-- <div class="col-lg-12"> -->
    <div id="mainScreen" style="background: url(<?php echo $main_menu_background_image['url']; ?>) no-repeat center fixed; background-size: cover;">
      <h1 class="animated fadeIn">
        <?php bloginfo('name');?>
      </h1>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>
              <?php echo $about_title_1; ?>
            </h1>
            <p>
              <?php echo $about_description_1; ?>
            </p>
          </div>
          <div class="col-sm">
            <h1>
              <?php echo $about_title_2; ?>
            </h1>
            <p>
              <?php echo $about_description_2; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="background bg1" style="background: url(<?php echo $image_2['url']; ?>) no-repeat center center fixed; background-size: cover;">
    </div>
    <div id="kontakt">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>Kontakt</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="kontaktDiv">
              <i class="fas fa-mobile fa-3x"></i>
              <span class="contactinfo"><?php echo $phone_number; ?></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="kontaktDiv">
              <i class="fas fa-envelope fa-3x"></i>
              <span class="contactinfo"><?php echo $email; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



  <?php

get_footer();