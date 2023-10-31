<?php 
get_header(); 

$themeurl = get_bloginfo('template_url');

?>

<section class="banner">
  <div class="owl-carousel owl-theme">
    <div class="item">
      <img
        class="d-block w-100"
        src="<?php echo $themeurl ?>/assets/img/home/HFMA-0087-1800x812.jpg"
        alt="First slide"
        draggable="false"
      />
    </div>

    <div class="item">
      <img
        class="d-block w-100"
        src="<?php echo $themeurl ?>/assets/img/home/home-big-conf-1800.jpg"
        alt="Second slide"
        draggable="false"
      />
    </div>

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
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <h2 class="green-title">&nbsp;</h2>
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
        </div>
      </div>
    </div>
  </div>
</section>

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
        </div>
      </div>
    </div>
  </div>
</section>

<section class="lets-talk">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h2 class="title mb-4">Let’s talk about your next project.</h2>
        <div class="d-flex justify-content-end align-items-end">
          <div class="contact">
            <a href="<?php echo $themeurl; ?>/contact" class="text-links">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
