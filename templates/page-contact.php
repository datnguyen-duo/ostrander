<?php 
/* Template Name: Contact */

get_header(); 

$themeurl = get_bloginfo('template_url');

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
        <h2 class="green-title">CONTACT US</h2>
        <h2 class="green-title">&nbsp;</h2>
        <h4 class="text-description mb-3">
          <form action="process_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required /><br /><br />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required /><br /><br />

            <label for="message">Message:</label><br />
            <textarea
              id="message"
              name="message"
              rows="5"
              style="float: left; width: 60%"
              required
            ></textarea
            ><br /><br /><br /><br /><br /><br /><br />

            <input
              type="submit"
              class="text-links"
              style="float: left; font-size: 25px"
              value="Submit"
            />
          </form>
        </h4>
        <h4 class="text-description mb-3">
          <br />
          <br />
        </h4>

        <h4 class="text-description mb-3">
          Phone: 630.971.2211<br />
          Email: info@ostrander.biz<br />
          <br />
          2001 Butterfield Road, Suite 1120<br />
          Downers Grove, IL 60515<br />
        </h4>
      </div>
    </div>
     <div class="row">
     [wpforms id="32"]
     </div>
  </div>
</section>

<section class="banner" style="padding-bottom: 0">
  <img
    class="w-100"
    src="<?php echo $themeurl; ?>/assets/img/projects/hero-kitchen-1800.jpg"
    alt="where we work"  />
</section>

<?php get_footer(); ?>
