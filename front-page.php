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
    <h1>Building trust by delivering better projects</h1>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <h2 class="green-title">&nbsp;</h2>
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">30 YEARS OF BUILDING</h2>
        <h4 class="text-description mb-3">
          Commercial construction projects are defined by quick turnarounds,
          strict budgets and high expectations. Niched in this unique market
          since 1993, Ostrander Construction emphasizes clear communication,
          transparency and collaboration to thoroughly understand your
          priorities and deliver successful projects. These same, value-based
          qualities have also allowed us to be successful in new construction
          markets including corporate and medical offices, industrial, retail,
          education, wellness and government facilities.
        </h4>
        <a href="<?php echo $themeurl; ?>/projects" class="text-links">Featured Projects</a>
        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/485halfday-9908-513.jpg"
              alt=""
            />
            <h5 class="project-title">Kitchen at Spec Suites</h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/leeco-lounge-213-513.jpg"
              alt=""
            />
            <h5 class="project-title">Lounge Area</h5>
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
    <h2>Prioritizing communication</h2>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">CONSISTENT MANAGEMENT APPROACH</h2>
        <h4 class="text-description mb-3">
          Understanding your priorities, proactively addressing potential
          challenges and learning building specifics allows us to customize our
          approach to project delivery. We believe that listening first is
          fundamental to forming the foundation of open communication and
          transparency, defining elements of each of our client relationships.
          Our highly-coordinated process is designed to adapt to evolving
          project dynamics, ensure productivity and, ultimately, deliver.
        </h4>
        <a href="<?php echo $themeurl; ?>/services" class="text-links">OUR SERVICES</a>
        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-img-4533-4.jpg"
              alt=""
            />
            <h5 class="project-title">Workspace with Kitchen</h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl ?>/assets/img/home/grid-img-halfday5.jpg"
              alt=""
            />
            <h5 class="project-title">Lounge Area</h5>
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
    <h2>Relationships matter at Ostrander</h2>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">DEFINING THE STANDARD</h2>
        <h4 class="text-description mb-3">
          Since our inception more than 30 years ago, Ostrander Construction has
          placed a high value on clear communication. We believe that this
          transparency is the foundation of quality relationships with our
          clients and employees, as well as subcontractors, architects/engineers
          and others involved in the construction process. We understand that
          project success is often defined by a thorough understanding of
          project needs, priorities and dynamics making productive communication
          critical.
        </h4>
        <a href="<?php echo $themeurl; ?>/about-us" class="text-links">ABOUT US</a>
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
            <a href="<?php echo $themeurl; ?>/contact" class="text-links">CONTACT US</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>