<?php 
/* Template Name: Contact */

get_header(); 

$themeurl = get_bloginfo('template_url');

$headline = get_field("headline");
$form_shortcode = get_field("form_shortcode");
$info = get_field("info");
$image = get_field("image");

?>

<section class="banner">
  <!--  img class="w-100" src="assets/img/home/HFMA-0087-1800.jpg" alt=""  -->
  <div
    class="container position-relative"
    data-aos="fade-in"
    data-aos-delay="2"
  >
    <h1>
      <br />
      Get in touch
    </h1>
  </div>
</section>

<section class="about" style="margin-top: -10px">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <?php if ($headline): ?>
          <h2 class="green-title"><?php echo $headline; ?></h2>
        <?php endif; ?>
        <h2 class="green-title">&nbsp;</h2>
        <h4 class="text-description mb-3">
          <?php echo $form_shortcode ? $form_shortcode : null; ?>
        </h4>
        <h4 class="text-description mb-3">
          <br />
          <br />
        </h4>

        <?php if ($info): ?>
          <h4 class="text-description mb-3">
            <?php echo $info; ?>
          </h4>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php if ($image): ?>
  <section class="banner" style="padding-bottom: 0">
    <?php echo wp_get_attachment_image( $image['id'], 'full', "", array('class' => 'd-block w-100 h-auto') ); ?>
  </section>
<?php endif; ?>

<?php get_footer(); ?>