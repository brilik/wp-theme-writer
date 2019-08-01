<?php get_header(); 
global $themeAR;?> 
    <div class="bg-main"><img src="<?php $themeAR->the_src();?>/assets/img/news-single-bg.jpg" alt=""></div>
    <section class="news_single">
      <div class="container">
<?php while ( have_posts() ) :
				the_post();?>
        <div class="news__head">
          <div class="news__left">
            <div class="news__heading">Новости</div>
            <div class="breadcrumbs">
              <?php ar_the_view("breadcrumbs");?> 
            </div>
            <h1><?php the_title();?></h1>
          </div>
<?php $next = get_next_post(); 
      if (!$next ) {
        $next = get_previous_post(); 
      }
      if ($next ) {
          $next = new BlogPost($next);?>
          <a class="news__right tablet-hide" href="<?php echo $next->get_link();?>">
            <img class="news__next-img" src="<?php echo $next->get_image_src("full");?>">
            <div class="news__next-btn"></div>
            <div class="news__next-title"><?php echo $next->get_title();?></div>
          </a>
<?php } ?>
        </div>
        <?php the_content();?>
<?php if ($next ) { ?>
        <div class="preview-next tablet-show"> 
          <a class="news__right" href="<?php echo $next->get_link();?>">
            <img class="news__next-img" src="<?php echo $next->get_image_src("full");?>">
            <div class="news__next-btn"></div>
            <div class="news__next-title"><?php echo $next->get_title();?></div>
          </a>
        </div>
<?php } ?>
<?php  endwhile; ?>
      </div>
    </section> 
<?php get_footer(); ?>
