<?php
$slides = [
    [
        'image' => 'img/Quality_Builders_Kitchen_being_refitted_in_large_house.png',
        'heading' => 'Your Trusted & Local Builders',
        'desc' => 'Our team of experts can manage any construction project from concept to build.',
        'cta' => 'Contact Me Today',
        'cta_link' => '#',
    ],
    [
        'image' => 'img/quality_builders_extension_built.png',
        'heading' => 'Extend Your Home',
        'desc' => 'Expand your living space with seamless, high-quality extensions.',
        'cta' => 'Get a Quote',
        'cta_link' => '#',
    ],
    [
        'image' => 'img/Qulaity_Builders_garden_paving_slabs_being_put_down._in_a_large_garden.png',
        'heading' => 'Transform Your Garden',
        'desc' => 'Create beautiful outdoor spaces with our expert garden redesigns.',
        'cta' => 'See Our Work',
        'cta_link' => '#',
    ]
];
?>
<div class="container">
  <section class="hero-slider">
    <div class="hero-slider-container">
      <?php foreach ($slides as $index => $slide): ?>
        <div class="hero-slide">
          <div class="slide-content">
            <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['heading']; ?>" class="slide-bg">
            <div class="slide-overlay-content">
              <div class="slide-text">
                <h2><?php echo $slide['heading']; ?></h2>
                <p class="desc"><?php echo $slide['desc']; ?></p>
              </div>
              <div class="slide-button">
                <a class="cta-button" href="<?php echo $slide['cta_link']; ?>">
                  <?php echo $slide['cta']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="hero-slider-nav">
      <button class="hero-slider-prev" aria-label="Previous slide">
        <i class="fa fa-chevron-left"></i>
      </button>
      <button class="hero-slider-next" aria-label="Next slide">
        <i class="fa fa-chevron-right"></i>
      </button>
    </div>
  </section>
</div> 