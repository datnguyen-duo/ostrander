<?php 
/* Template Name: Projects */

get_header(); 

$themeurl = get_bloginfo('template_url');

$hero_headline = get_field("hero_headline");
$hero_image = get_field("hero_image");

$intro_headline = get_field("intro_headline");
$intro_paragraph = get_field("intro_paragraph");

$project = get_field("project");

$hl_headline = get_field("hl_headline");
$hl_list = get_field("hl_list");
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

<?php if ($intro_headline || $intro_paragraph): ?>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h2 class="green-title"><?php echo $intro_headline; ?></h2>
          <h4 class="text-description mb-3"><?php echo $intro_paragraph; ?></h4> 
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($project): foreach ($project as $key => $item): ?>
  <section class="banner">
    <?php echo wp_get_attachment_image( $item['image']['id'], 'full', "", array('class' => 'd-block w-100 h-auto') ); ?>
    <?php if ($item['name']): ?>
      <div
        class="container position-relative"
        data-aos="fade-in"
        data-aos-delay="1"
      >
        <h2 class="ltgray"><?php echo $item['name'] ?></h2>
      </div>
    <?php endif; ?>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($item['description']):?>
            <h4 class="text-description mb-3"><?php echo $item['description']; ?></h4>
          <?php endif; ?>
          <?php if ($item['images']): ?>
            <div class="row my-5 pt-3">
              <?php foreach($item['images'] as $image): ?>
                <div class="col-lg-6">
                  <a
                    href="<?php echo $image['image_full']['url']?>"
                    data-lightbox="example-set"
                    class="lightbox-pop"
                    data-title="<?php echo $image['caption']?>"
                  >
                    <?php echo wp_get_attachment_image( $image['image']['id'], 'full', "", array('class' => 'img-fluid') ); ?>
                  </a>
                  <?php if ($image['caption']): ?>
                  <h5 class="project-title"><?php echo $image['caption']?></h5>
                  <?php endif ?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; endif; ?>

<?php if ($hl_headline || $hl_list): ?>
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <?php if ($hl_headline): ?>
            <h2 class="green-title"><?php echo $hl_headline; ?></h2>
          <?php endif; ?>
          <h4 class="text-description mb-3">
            <?php if ($hl_list): ?>
              <div class="row my-5 pt-3">
                <div class="col-lg-6">
                  <ul>
                    <?php foreach ($hl_list as $key => $item): if ($key < 10): ?>
                      <li><?php echo $item['text']; ?></li>
                    <?php endif; endforeach; ?>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <?php foreach ($hl_list as $key => $item): if ($key > 9): ?>
                      <li><?php echo $item['text']; ?></li>
                    <?php endif; endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endif; ?>
            <br />
            <br />
          </h4>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>