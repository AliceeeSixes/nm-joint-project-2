<?php
$title = "Home - QualityBuilders";
require "../inc/head.php";
require "../inc/header.php";
require "hero-slider.php";
?>

<div class="container">
  <section class="welcome-section">
    <div class="welcome-container">
      <div class="welcome-text">
        <h2>Welcome to <span class="navbar__logo--bold">Quality</span><span class="navbar__logo--highlight"> Builders</span></h2>
        <p>
        At Quality Builders, we take pride in transforming your ideas into exceptional spaces with craftsmanship you can trust. Our team brings years of experience across a wide range of projects, including home renovations, extensions, and complete new builds. We understand that every client’s needs are unique, so we work closely with you at every stage—from the initial consultation to project completion—to ensure your vision is realized to the highest standard. With a strong commitment to quality, reliability, and transparent communication, we aim to deliver results that stand the test of time, on schedule and within budget. Whether you’re updating a single room or embarking on a large-scale construction, you can rely on Quality Builders to provide professional service and outstanding results, every step of the way
        </p>
        <a href="contact-us.php" class="welcome-btn">Get in Touch</a>
      </div>
      <div class="welcome-images">
        <div class="image-collage">
          <img src="img/Quality_Builders_Roofing-Collage.jpg" alt="Collage of Building work being carried out">
        </div>
      </div>
    </div>
  </section>
</div>

<div class="services">
    <div class="container">
        <div class="services-title">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Somnis iste natus. voluptatem accusantium</p>
        </div>
        <div class="services-cards">
            <a href="#">
                <img src="img/placeholder.webp" alt>
                <div class="service-description">
                    <h3>Architecture</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Somnis iste natus.</p>
                </div>
                <i class="service-icon fa fa-home"></i>
            </a>
            <a href="#">
                <img src="img/placeholder.webp" alt>
                <div class="service-description">
                    <h3>Construction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Somnis iste natus.</p>
                </div>
                <i class="service-icon fa fa-wrench"></i>
            </a>
            <a href="#">
                <img src="img/placeholder.webp" alt>
                <div class="service-description">
                    <h3>Installation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Somnis iste natus.</p>
                </div>
                <i class="service-icon fa fa-cogs"></i>
            </a>
        </div>
    </div>

</div>

<!-- Testimonials Section -->
<section id="testimonials">
    <div class="container">
        <h3>Our Testimonials</h3>


        <!-- Slick Slider -->
        <div id="testimonials-carousel">
            <div class="testimonial-quote">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus.</blockquote>
                <cite>
                    <span>Aaron David,</span> Construction Manager
                </cite>
            </div>
            <div class="testimonial-quote">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus.</blockquote>
                <cite>
                    <span>Aaron David,</span> Construction Manager
                </cite>
            </div>
            <div class="testimonial-quote">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus.</blockquote>
                <cite>
                    <span>Aaron David,</span> Construction Manager
                </cite>
            </div>
            <div class="testimonial-quote">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum laudantium officia natus et. Ab praesentium recusandae voluptatum et, sit, iure, minima eius voluptate earum vitae rem culpa aliquid delectus.</blockquote>
                <cite>
                    <span>Aaron David,</span> Construction Manager
                </cite>
            </div>
        </div>
    </div>
</section>

<?php require "../inc/footer.php"; ?>

    <!-- JS Includes -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/plugins/slick-1.8.1/slick/slick.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>