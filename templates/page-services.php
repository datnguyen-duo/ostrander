<?php 
/* Template Name: Services */

get_header(); 

$themeurl = get_bloginfo('template_url');

?>

<section class="banner">
  <img
    class="w-100"
    src="<?php echo $themeurl; ?>/assets/img/services/svcs-interior-circles-mod-1800w.jpg"
    alt="hub interior"
  />
  <div
    class="container position-relative"
    data-aos="fade-in"
    data-aos-delay="1"
  >
    <h1>Services</h1>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">CONSISTENT MANAGEMENT APPROACH</h2>
        <h4 class="text-description mb-3">
          From concept development through project completion, Ostrander Construction is a transparent collaborator interested in fully understanding your goals and, ultimately, delivering your vision. With over 30 years of construction experience, we bring value to every project team, offering both our depth of expertise and our strong network of partners.
        </h4>
      </div>
    </div>
  </div>

  <div class="service-grid">
    <div class="gridbox"><div class="s-type">Pre-construction</div></div>
    <div class="gridbox">
      <div class="s-type">General<br />Construction</div>
    </div>
    <div class="gridbox">
      <div class="s-type">Construction<br />Management</div>
    </div>
    <div class="gridbox"><div class="s-type">Design Build</div></div>
    <div class="gridbox">
      <div class="s-type">Self-performing<br />Work</div>
    </div>
    <div class="gridbox">
      <div class="s-type">Sustainable<br />Construction</div>
    </div>
  </div>
</section>

<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <h2 class="green-title">MARKETS</h2>
        <h4 class="text-description mb-3">
          <img
            src="<?php echo $themeurl; ?>/assets/img/services/markets-icons-1-1800.jpg"
            style="
              margin: 0 auto 0 -5%;
              padding: 0;
              width: 110%;
              height: auto;
              overflow: visible;
            "
          />
          <!-- ul>
          <li>Corporate Offices</li>
          <li>Medical Offices</li>
          <li>Industrial </li>
          <li>Retail </li>
          <li>Education</li>
    <li>Wellness</li>
    <li>Government</li></ul   HIDING THIS WHILST WE TRY THE ICONS -->
        </h4>

        <div class="row my-5 pt-3">
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl; ?>/assets/img/services/grid-img-hfma.jpg"
              alt="waiting area"
            />
            <h5><a href="#" class="project-title">Office entry</a></h5>
          </div>
          <div class="col-lg-6">
            <img
              class="img-fluid"
              src="<?php echo $themeurl; ?>/assets/img/services/grid-img-breakthru.jpg"
              alt="seminar room"
            />
            <h5><a href="#" class="project-title">Seminar room</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="banner">
  <div
    class="container position-relative"
    data-aos="fade-in"
  >
    <h2 style="color: #666"></h2>
  </div>
</section>

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
              <span class="strong">1 Job start up notice</span> <br />Email that
              kicks off project include details on permit, schedule, list of
              contractors/subs, start date and anticipated completion
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
              <span class="strong">6 Punchlist Completion Letter</span> <br />At
              Significant Completion, space is walked with tenant, property
              manager, architect to develop a final punch list which is managed
              to completion.
            </li>
          </ul>
        </h4>
        <h4 class="text-description mb-3">
          Our initial imperative to to understand your priorities. We believe
          that listening first is fundamental to forming the foundation of open
          communication and transparency, elements that define each of our
          client relationships. Our highly-coordinated process targets
          consistent reporting and is designed to proactively address potential
          challenges, adapt to evolving project dynamics, ensure productivity
          and, ultimately, deliver success.
        </h4>
      </div>
    </div>
  </div>

  <section class="banner">&nbsp;</section>
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
