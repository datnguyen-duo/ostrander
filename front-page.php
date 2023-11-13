<?php 
get_header(); 

$themeurl = get_bloginfo("template_url");

$hero_headline = get_field("hero_headline");
$hero_images = get_field("hero_images");

$ta_headline1 = get_field("ta_headline-1");
$ta_paragraph1 = get_field("ta_paragraph-1");
$ta_button1 = get_field("ta_button-1");
$ta_images1 = get_field("ta_images-1");

$banner_headline1 = get_field("banner_headline-1");
$banner_image1 = get_field("banner_image-1");

$ta_headline2 = get_field("ta_headline-2");
$ta_paragraph2 = get_field("ta_paragraph-2");
$ta_button2 = get_field("ta_button-2");
$ta_images2 = get_field("ta_images-2");

$banner_headline2 = get_field("banner_headline-2");
$banner_image2 = get_field("banner_image-2");

$ta_headline3 = get_field("ta_headline-3");
$ta_paragraph3 = get_field("ta_paragraph-3");
$ta_button3 = get_field("ta_button-3");
$ta_images3 = get_field("ta_images-3");

$cta_headline = get_field("cta_headline");
$cta_button = get_field("cta_button");


?>

<section class="banner">
  <?php if ($hero_images): ?>
    <div class="owl-carousel owl-theme">
      <?php foreach ($hero_images as $image): ?>
        <div class="item">
          <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array(
            'class' => 'd-block w-100 h-auto',
            'draggable' => 'false',
            ) ); ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php if ($hero_headline): ?>
    <div
      class="container position-relative"
      data-aos="fade-in"
    >
      <h1><?php echo $hero_headline; ?></h1>
    </div>
  <?php endif; ?>

</section>

<?php if ($ta_headline1 || $ta_paragraph1 || $ta_button1 || $ta_images1): ?>
<section class="about">
  <div class="container">
    <div class="row">
      <h2 class="green-title">&nbsp;</h2>
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">

        <?php if ($ta_headline1): ?>
          <h2 class="green-title"><?php echo $ta_headline1; ?></h2>
        <?php endif; ?>

        <?php if ($ta_paragraph1): ?>
          <h4 class="text-description mb-3"><?php echo $ta_paragraph1; ?></h4>
        <?php endif; ?>

        <?php if ($ta_button1): ?>
          <a class="text-links" href="<?php echo $ta_button1['url']?>" target="<?php echo $ta_button1['target'] ? $ta_button1['target'] : '_self' ;?>"><?php echo $ta_button1['title']; ?></a>
        <?php endif; ?>

        <?php if($ta_images1): ?>
          <div class="row my-5 pt-3">
            <?php foreach ($ta_images1 as $image): ?>
              <div class="col-lg-6">
                <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array('class' => 'img-fluid') ); ?>
                <?php if ($image['caption']): ?>
                  <h5 class="project-title"><?php echo $image['caption']; ?></h5>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($banner_image1): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $banner_image1['id'], 'full', "", array('class' => 'w-100 h-auto') ); ?>
    <?php if ($banner_headline1): ?>
      <div
        class="container position-relative"
        data-aos="fade-in"
        data-aos-delay="1"
      >
        <h2><?php echo $banner_headline1; ?></h2>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if ($ta_headline2 || $ta_paragraph2 || $ta_button2 || $ta_images2): ?>
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <h2 class="green-title">&nbsp;</h2>
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">

          <?php if ($ta_headline2): ?>
            <h2 class="green-title"><?php echo $ta_headline2; ?></h2>
          <?php endif; ?>

          <?php if ($ta_paragraph2): ?>
            <h4 class="text-description mb-3"><?php echo $ta_paragraph2; ?></h4>
          <?php endif; ?>

          <?php if ($ta_button2): ?>
            <a class="text-links" href="<?php echo $ta_button2['url']?>" target="<?php echo $ta_button2['target'] ? $ta_button2['target'] : '_self' ;?>"><?php echo $ta_button2['title']; ?></a>
          <?php endif; ?>

          <?php if($ta_images2): ?>
            <div class="row my-5 pt-3">
              <?php foreach ($ta_images2 as $image): ?>
                <div class="col-lg-6">
                  <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array('class' => 'img-fluid') ); ?>
                  <?php if ($image['caption']): ?>
                    <h5 class="project-title"><?php echo $image['caption']; ?></h5>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($banner_image2): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $banner_image2['id'], 'full', "", array('class' => 'w-100 h-auto') ); ?>
    <?php if ($banner_headline2): ?>
      <div
        class="container position-relative"
        data-aos="fade-in"
        data-aos-delay="1"
      >
        <h2><?php echo $banner_headline2; ?></h2>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if ($ta_headline3 || $ta_paragraph3 || $ta_button3 || $ta_images3): ?>
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <h2 class="green-title">&nbsp;</h2>
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">

          <?php if ($ta_headline3): ?>
            <h2 class="green-title"><?php echo $ta_headline3; ?></h2>
          <?php endif; ?>

          <?php if ($ta_paragraph3): ?>
            <h4 class="text-description mb-3"><?php echo $ta_paragraph3; ?></h4>
          <?php endif; ?>

          <?php if ($ta_button3): ?>
            <a class="text-links" href="<?php echo $ta_button3['url']?>" target="<?php echo $ta_button3['target'] ? $ta_button3['target'] : '_self' ;?>"><?php echo $ta_button3['title']; ?></a>
          <?php endif; ?>

          <?php if($ta_images3): ?>
            <div class="row my-5 pt-3">
              <?php foreach ($ta_images3 as $image): ?>
                <div class="col-lg-6">
                  <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array('class' => 'img-fluid') ); ?>
                  <?php if ($image['caption']): ?>
                    <h5 class="project-title"><?php echo $image['caption']; ?></h5>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif;?>
        </div>
      </div>
    </div>
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