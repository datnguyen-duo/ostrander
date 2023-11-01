<?php 
/* Template Name: About */

get_header(); 

$themeurl = get_bloginfo('template_url');

?>

<section class="banner">
  <img class="w-100" src="<?php echo $themeurl; ?>/assets/img/about/about-hero-conf.jpg" alt="" />
  <div
    class="container position-relative"
    data-aos="fade-in"
  >
    <h1>About us</h1>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">OUR COMPANY</h2>
        <h4 class="text-description mb-3">
          Our success is attributed to open communication, problem-solving skills, dependability and project leadership. These qualities are foundational to Ostrander Construction and the way we work and have helped us build trust-based relationships with our clients as well as our employees, subcontractors, architects/engineers, and others involved in the construction process.
        </h4>
        <h2 class="green-title">&nbsp;</h2>
        <h2 class="green-title">HISTORY</h2>
        <h4 class="text-description mb-3">
        In 1993, with an entrepreneurial spirit and deep knowledge of commercial construction, Lee Ostrander founded Ostrander Construction. Beginning as a “team of one,” Ostrander built a trust-based commercial construction firm that now employs more than 25 people in the Chicagoland market.
        </h4>
        <h4 class="text-description mb-3">
        From its inception, Ostrander has focused on delivering high-quality construction projects and building long-term relationships with each client. With steady growth came a diverse and experienced management team who have allowed us to pursue other markets including medical office, industrial, retail, education, wellness, and government facilities.
        </h4>
        
      </div>
    </div>
  </div>
</section>

<section class="banner">
  <img class="w-100" src="<?php echo $themeurl; ?>/assets/img/about/people-hero-const-1800.jpg" alt="" />
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
        <h2 class="green-title">OUR MANAGEMENT TEAM</h2>
        <h4 class="text-description mb-3">
          Our years of amazing work would not have been possible without committed and passionate people. We are fortunate to have many long-term employees on our team.
        </h4>

        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <h4>
              <ul>
                <li class="name">Lee Ostrander</li>
                <li>President and Founder</li>
                 
              </ul>
            </h4>

            <h4>
              <ul>
                <li class="name">Bill Schmitz</li>
                <li>Senior Project Manager</li>
                
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Steve Koss</li>
                <li>Senior Project Manager</li>
                
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Jack Machalek</li>
                <li>Project Manager</li>
                
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Dennis Tynan</li>
                <li>Project Manager</li>
                
              </ul>
            </h4>
          </div>
          <div class="col-lg-6">
            <h4>
              <ul>
                <li class="name">Connor Ostrander</li>
                <li>Project Manager</li>
                 
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Scott Solverson</li>
                <li>Business Development</li>
                 
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Sonya Levoy</li>
                <li>Controller</li>
                
              </ul>
            </h4>
            <h4>
              <ul>
                <li class="name">Marie Ostrander</li>
                <li>Administrative Services</li>
                
              </ul>
            </h4>
          </div>
        </div>

        <!--  div class="row my-5 pt-3">
            <div class="col-lg-6">
              <img class="img-fluid" src="assets/img/about/grid-graybox.jpg" alt="">
              <h5 class="project-title">Name</h5>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="assets/img/about/grid-graybox.jpg"  alt="">
              <h5 class="project-title">Name  </h5>
            </div>
          </div>

           <div class="row my-5 pt-3">
            <div class="col-lg-6">
              <img class="img-fluid" src="assets/img/about/grid-graybox.jpg"  alt="">
              <h5 class="project-title">Name  </h5>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="assets/img/about/grid-graybox.jpg"  alt="">
              <h5 class="project-title">Name </h5>
            </div>
          </div        hiding these bc we don't have any  headshots -->
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">KNOWLEDGE OF THE REGION</h2>
        <h4 class="text-description mb-3">
          We work primarily in the Chicago Metropolitan Area; however, client relationships have presented many project opportunities outside the CMA.
        </h4>
        <h4>
          <img
            class="img-fluid"
            src="<?php echo $themeurl; ?>/assets/img/about/map-ostrander-4-1600w.jpg"
            alt="map"
          />
        </h4>
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

<section class="about">
  <h4 class="text-description mb-3">&nbsp;</h4>
</section>

<?php get_footer(); ?>
