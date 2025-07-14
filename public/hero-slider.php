<?php
// Hero Slider Section
$slides = [
    [
        'image' => 'img/Quality_Builders_Kitchen_being_refitted_in_large_house.png',
        'title' => 'Quality Kitchen Refitting',
        'description' => 'Transform your kitchen with our expert refitting services. We bring quality and craftsmanship to every project.',
        'cta_text' => 'Learn More',
        'cta_link' => '#'
    ],
    [
        'image' => 'img/quality_builders_extension_built.png',
        'title' => 'Professional Extensions',
        'description' => 'Extend your living space with our professional extension services. Quality construction that lasts.',
        'cta_text' => 'Get Quote',
        'cta_link' => '#'
    ],
    [
        'image' => 'img/Qulaity_Builders_garden_paving_slabs_being_put_down._in_a_large_garden.png',
        'title' => 'Garden Paving Solutions',
        'description' => 'Create beautiful outdoor spaces with our garden paving and landscaping services.',
        'cta_text' => 'View Projects',
        'cta_link' => '#'
    ]
];
?>

<div class="container">
  <section class="hero-slider">
    <div class="hero-slider-container">
      <?php foreach ($slides as $slide): ?>
        <div class="hero-slide">
          <div class="hero-slide-image-container">
            <div class="hero-slide-image">
              <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
            </div>
          </div>
          <div class="hero-slide-overlay-container">
            <div class="hero-slide-overlay">
              <div class="hero-slide-content">
                <h2><?php echo $slide['title']; ?></h2>
                <p><?php echo $slide['description']; ?></p>
                <a href="<?php echo $slide['cta_link']; ?>" class="hero-cta"><?php echo $slide['cta_text']; ?></a>
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