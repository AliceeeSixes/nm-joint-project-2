<?php
$title = "Home - QualityBuilders";
require "../inc/head.php";
require "../inc/header.php";
require "hero-slider.php";
?>

<div class="partners">
    <div class="container">
        <h2>Our Partners</h2>
    </div>
    <div class="container">
        <div id="partners-row">
            <img src="img/placeholder.webp" alt class="partner-img">
            <img src="img/placeholder.webp" alt class="partner-img">
            <img src="img/placeholder.webp" alt class="partner-img">
            <img src="img/placeholder.webp" alt class="partner-img">
            <img src="img/placeholder.webp" alt class="partner-img">
        </div>
    </div>
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
        <h2>Our Testimonials</h2>


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
    <script src="js/plugins/jquery-3.7.1.min.js"></script>
    <script src="js/plugins/slick.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/partners.js"></script>
</body>
</html>