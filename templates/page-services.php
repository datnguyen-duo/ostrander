<?php 
/* Template Name: Services */

get_header(); 

$themeurl = get_bloginfo('template_url');

$hero_headline = get_field("hero_headline");
$hero_image = get_field("hero_image");

$tg_image = get_field("tg_image");
$tg_headline = get_field("tg_headline");
$tg_paragraph = get_field("tg_paragraph");
$tg_grid = get_field("tg_grid");

$hi_headline = get_field("hi_headline");
$hi_images = get_field("hi_images");

$tl_headline = get_field("tl_headline");
$tl_paragraph = get_field("tl_paragraph");
$tl_list = get_field("tl_list");
$tl_paragraph_bottom = get_field("tl_paragraph-bottom");

$cta_headline = get_field("cta_headline");
$cta_button = get_field("cta_button");
?>

<?php if ($hero_image): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $hero_image['id'], 'full', "", array('class' => 'w-100 h-auto') ); ?>
    <?php if ($hero_headline): ?>
      <div
        class="container position-relative"
        data-aos="fade-in"
      >
        <h1><?php echo $hero_headline; ?></h1>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if ($tg_headline || $tg_paragraph || $tg_image || $tg_grid): ?>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($tg_headline): ?>
            <h2 class="green-title"><?php echo $tg_headline; ?></h2>
          <?php endif; ?>

          <?php if ($tg_paragraph): ?>
            <h4 class="text-description mb-3"><?php echo $tg_paragraph; ?></h4>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if ($tg_grid): ?>
      <div class="service-grid" 
      style="--data-attr-bg: url(<?php echo "'" . $tg_image["url"] . "'";?>)">
        <?php foreach($tg_grid as $item): ?>
          <div class="gridbox"><div class="s-type"><?php echo $item['text']; ?></div></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if ($hi_headline || $hi_images): ?>
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($hi_headline): ?>
            <h2 class="green-title"><?php echo $hi_headline; ?></h2>
          <?php endif; ?>

          <h4 class="text-description mb-3">
            <?php echo wp_get_attachment_image( $hi_images[0]['image']['id'], 'full', "", 
              array('style' => 
                'margin: 0 auto 0 -5%;
                padding: 0;
                width: 110%;
                height: auto;
                overflow: visible;') ); 
            ?>
          </h4>
          <div class="row my-5 pt-3">
            <?php foreach($hi_images as $key => $image): if ($key > 0): ?>
            <div class="col-lg-6">
              <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array('class' => 'img-fluid') ); ?>
              <?php if($image['caption']): ?>
                <h5><a href="#" class="project-title"><?php echo $image['caption']; ?></a></h5>
              <?php endif; ?>
            </div>
            <?php endif; endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<section class="banner">
  <div
    class="container position-relative"
    data-aos="fade-in"
  >
    <h2 style="color: #666"></h2>
  </div>
</section>

<?php if ($tl_headline || $tl_paragraph || $tl_list || $tl_paragraph_bottom): ?>
  <section class="about" style="padding-top: 0; padding-bottom: 0">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($tl_headline): ?>
            <h2 class="green-title"><?php echo $tl_headline; ?></h2>
          <?php endif; ?>
          <?php if ($tl_paragraph): ?>
          <h4 class="text-description mb-3"><?php echo $tl_paragraph; ?></h4>
          <?php endif; ?>
          <h4 class="text-description mb-3">
            <?php if ($tl_list): ?>
            <ul>
              <?php foreach($tl_list as $item): ?>
              <li class="spaced">
                <span class="strong"><?php echo $item['title'];?></span>
                <br /><?php echo $item['paragraph']; ?>
              </li>
              <?php endforeach; ?>
         
            </ul>
            <?php endif; ?>
          </h4>
          <?php if ($tl_paragraph_bottom): ?>
          <h4 class="text-description mb-3"><?php echo $tl_paragraph_bottom; ?></h4>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <section class="banner">&nbsp;</section>
  </section>
<?php endif; ?>
<?php if ($cta_headline && $cta_button): ?>
  <section class="lets-talk">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <h2 class="title mb-4"><?php echo $cta_headline; ?></h2>
          <div class="d-flex justify-content-end align-items-end">
            <div class="contact">
              <a class="text-links" href="<?php echo $cta_button['url']?>" target="<?php echo $cta_button['target'] ? $cta_button['target'] : '_self' ;?>"><?php echo $cta_button['title']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
