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

<<<<<<< HEAD
=======
    <div class="item">
      <img
        class="d-block w-100"
        src="<?php echo $themeurl ?>/assets/img/home/SCCM-0046-1800.jpg"
        alt="Third slide"
        draggable="false"
      />
    </div>
  </div>

  <div
    class="container position-relative"
    data-aos="fade-in"
  >
    <h1> </h1>
  </div>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
</section>

<?php if ($ta_headline1 || $ta_paragraph1 || $ta_button1 || $ta_images1): ?>
<section class="about">
  <div class="container">
    <div class="row">
      <h2 class="green-title">&nbsp;</h2>
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
<<<<<<< HEAD

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
=======
        <h2 class="green-title">DEFINING THE STANDARD OF GENERAL CONTRACTING</h2>
        <h4 class="text-description mb-3">
          Since 1993, Ostrander Construction has been building trust with clients by building better projects. Today’s commercial construction projects are defined by aggressive schedules, strict budgets, and high expectations. Ostrander’s management team works closely with the project team to consistently deliver successful projects. Strong leadership, good organization skills, clear communication, transparency, and collaboration are qualities that separate us from our competition.
        </h4>
        <a href="<?php echo $themeurl; ?>/projects" class="text-links">Our Services</a>
        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/485halfday-9908-513.jpg"
              alt=""
            />
            <h5 class="project-title"> </h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/leeco-lounge-213-513.jpg"
              alt=""
            />
            <h5 class="project-title"> </h5>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<<<<<<< HEAD
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
=======
<section class="banner">
  <img class="w-100" src="<?php echo $themeurl ?>/assets/img/home/home-pano-cafe.jpg" alt="" />
  <div
    class="container position-relative"
    data-aos="fade-in"
    data-aos-delay="1"
  >
    <h2> </h2>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">30 YEARS OF BUILDING COMMERCIAL PROJECTS</h2>
        <h4 class="text-description mb-3">
          From the beginning, Ostrander Construction has focused on the interior remodel construction market. Tenant build-outs have been our specialty and have helped us establish a solid foundation in the marketplace. Over the years, our experienced management team, client trust, and financial stability have allowed us to expand into new construction markets including medical office, industrial, retail, education, wellness and government facilities.
        </h4>
        <a href="<?php echo $themeurl; ?>/services" class="text-links">Featured Projects</a>
        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-img-4533-4.jpg"
              alt=""
            />
            <h5 class="project-title"> </h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-img-halfday5.jpg"
              alt=""
            />
            <h5 class="project-title"> </h5>
          </div>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<<<<<<< HEAD
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
=======
<section class="banner">
  <img
    class="w-100"
    src="<?php echo $themeurl ?>/assets/img/projects/485halfday-9665-1800.jpg"
    alt="hfma interior"
  />
  <div
    class="container position-relative"
    data-aos="fade-in"
    data-aos-delay="1"
  >
    <h2> </h2>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">RELATIONSHIPS MATTER AT OSTRANDER</h2>
        <h4 class="text-description mb-3">
          Good relationships are essential to every organization. Ostrander Construction is committed to developing and maintaining strong relationships with our clients, employees, subcontractors, architects/engineers, municipalities, and others involved in the construction process. We understand that project success is often defined by a thorough understanding of project needs, priorities, and dynamics making productive communication critical.
        </h4>
        <a href="<?php echo $themeurl; ?>/about-us" class="text-links">About Us</a>
        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-construction-stock-placeholder.jpg"
              alt=""
            />
            <h5 class="project-title"></h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-meeting-scott-graham.jpg"
              alt=""
            />
            <h5 class="project-title"></h5>
          </div>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<<<<<<< HEAD
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
=======
<section class="lets-talk">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h2 class="title mb-4">Let’s talk about your next project.</h2>
        <div class="d-flex justify-content-end align-items-end">
          <div class="contact">
            <a href="<?php echo $themeurl; ?>/contact" class="text-links">Contact us</a>
>>>>>>> 8c623fdd7c08090fc0b8e7bb97da25369097d7d0
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
