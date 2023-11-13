<?php
$themeurl = get_bloginfo('template_url');

$themeurl = get_bloginfo('template_url');

$logo = get_field('logo_min', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$address = get_field('address', 'option');

?>

</main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-lg-flex justify-content-between">
      <img src="<?php echo $logo['url']; ?>" height="60" width="60" alt="logo">
      <h4 class="text-uppercase inc p-3">OSTRANDER CONSTRUCTION INC</h4>
      <?php if ($address): ?>
      <p class="small p-3"><?php echo $address; ?></p>
      <?php endif; ?>
      
      <p class="small p-3 pe-0">
      <?php echo $phone ? $phone : null; ?><br>
        <a href="mailto:<?php echo $email ? $email : null; ?>"><?php echo $email ? $email : null; ?></a>
      </p>
    </div>
  </footer><!-- End Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
