<?php 
/* Template Name: About */

get_header(); 

$themeurl = get_bloginfo('template_url');

$hero_headline = get_field("hero_headline");
$hero_image = get_field("hero_image");

$intro_group = get_field("intro_group");

$banner_headline = get_field("banner_headline");
$banner_image = get_field("banner_image");

$tl_headline = get_field("tl_headline");
$tl_paragraph = get_field("tl_paragraph");
$tl_list = get_field("tl_list");

$ta_headline = get_field("ta_headline");
$ta_paragraph = get_field("ta_paragraph");
$ta_image = get_field("ta_image");

?>

<?php if ($hero_image): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $hero_image['id'], 'full', "", array('class' => 'd-block w-100 h-auto') ); ?>
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

<?php if ($intro_group): ?>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php foreach ($intro_group as $key => $group): ?>
            <h2 class="green-title"><?php echo $group['headline']; ?></h2>
            <h4 class="text-description mb-3"><?php echo $group['paragraph']; ?></h4>
            <?php if ($key < count($intro_group) - 1): ?>
              <h2 class="green-title">&nbsp;</h2>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($banner_image): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $banner_image['id'], 'full', "", array('class' => 'w-100 h-auto') ); ?>
    <?php if ($banner_headline): ?>
      <div
        class="container position-relative"
        data-aos="fade-in"
        data-aos-delay="1"
      >
        <h2><?php echo $banner_headline; ?></h2>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>

<?php if ($tl_headline || $tl_paragraph || $tl_list): ?>
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <?php if ($tl_headline): ?>
          <h2 class="green-title"><?php echo $tl_headline; ?></h2>
        <?php endif; ?>
        <?php if ($tl_paragraph): ?>
          <h4 class="text-description mb-3"><?php echo $tl_paragraph; ?></h4>
        <?php endif; ?>

        <?php if ($tl_list): ?>
          <div class="grid my-5 pt-3">
            <?php foreach ($tl_list as $key => $item): ?>
                <h4>
                  <ul>
                    <li class="name"><?php echo $item['name']?></li>
                    <li><?php echo $item['title']?></li>
                    <li>
                      <a href="mailto:<?php echo $item['email']?>"><?php echo $item['email']?></a>
                    </li>
                  </ul>
                </h4>
              <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($ta_headline || $ta_paragraph || $ta_image):?>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($ta_headline): ?>
            <h2 class="green-title"><?php echo $ta_headline; ?></h2>
          <?php endif; ?>
          
          <?php if ($ta_paragraph): ?>
          <h4 class="text-description mb-3"><?php echo $ta_paragraph; ?></h4>
          <?php endif; ?>

          <?php if ($ta_image): ?>
          <h4>
            <?php ?>
              <?php echo wp_get_attachment_image( $ta_image['id'], 'full', "", array('class' => 'img-fluid') ); ?>
          </h4>
          <?php endif; ?>
          <h5>&nbsp;</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <!--a href="projects.html" class="text-links">FEATURED PROJECTS</a -->
          <div class="row my-5 pt-3">
            <div class="col-lg-6"></div>
            <div class="col-lg-6"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<section class="about">
  <h4 class="text-description mb-3">&nbsp;</h4>
</section>

<?php get_footer(); ?>
