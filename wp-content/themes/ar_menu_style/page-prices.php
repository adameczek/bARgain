<?php
/*
    Template Name: Prices Page
 */

get_header(); ?>
<div class="container-fluid" id="pricesWrap">
    <div class="row">
        <div class="col-sm">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block active" id="starterPriceBtn">Opłata startowa</button>
        </div>
        <div class="col-sm">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" id="monthlyPriceBtn">Opłata miesięczna</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="circle" id="baseCircle">
              <div class="circleTextWrap">
              <p class="circlePrice" id="basePrice">1000zł</p>
              <p class="circleAbout" id="baseDescription">Model Podstawowy</p>
             </div>
          </div>
        </div>
        <div class="col-sm">
			<div class="circle" id="promotionCircle">
              <div class="circleTextWrap">
              <p class="circlePrice" id="promotionPrice">2000zł</p>
              <p class="circleAbout" id="promotionDescription">Model Promocyjny</p>
             </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>