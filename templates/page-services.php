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

<<<<<<< HEAD
          <?php if ($tg_paragraph): ?>
            <h4 class="text-description mb-3"><?php echo $tg_paragraph; ?></h4>
          <?php endif; ?>
        </div>
=======
<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">CONSISTENT MANAGEMENT APPROACH</h2>
        <h4 class="text-description mb-3">
          From concept development through project completion, Ostrander Construction is a transparent collaborator interested in fully understanding your goals and, ultimately, delivering your vision. With over 30 years of construction experience, we bring value to every project team, offering both our depth of expertise and our strong network of partners.
        </h4>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
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

<<<<<<< HEAD
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
=======
<section class="about" style="padding-top: 0; padding-bottom: 0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">PROCESS AND COMMUNICATION</h2>
        <h4 class="text-description mb-3">
          We believe that listening first is fundamental to understanding your
          priorities. Our highly-coordinated process targets consistent
          communication and is designed to proactively address potential
          challenges, adapt to evolving project dynamics, ensure productivity
          and, ultimately, deliver success.
        </h4>
        <h4 class="text-description mb-3">
          <ul>
            <li class="spaced">
              <span class="strong">1 Job start up notice</span> <br />Email that kicks off project include details on permit, schedule, list of contractors/subs, start date, and anticipated completion
            </li>
            <li class="spaced">
              <span class="strong"
                >2 Weekly updates on project status / consistent project
                meetings</span
              >
              <br />Client is updated using a simple visual (bar chart) on
              project
            </li>
            <li class="spaced">
              <span class="strong">3 Change Orders</span> <br />Proactive
              approach with all Change Order Requests delivered to client in
              “real time” - no surprises at project close
            </li>
            <li class="spaced">
              <span class="strong"
                >4 Ongoing coordination with building management /
                engineering</span
              >
              <br />Communicate safety systems testing, large deliveries, etc.
            </li>
            <li class="spaced">
              <span class="strong">5 Final inspection Notice</span>
              <br />Communicates space is occupancy ready to entire project team
            </li>
            <li class="spaced">
              <span class="strong">6 Punchlist Completion Letter</span> <br />At Significant Completion, space is walked with tenant, property manager, and architect to develop a final punch list which is managed to completion
            </li>
          </ul>
        </h4>
        <h4 class="text-description mb-3">
            
        </h4>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
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
