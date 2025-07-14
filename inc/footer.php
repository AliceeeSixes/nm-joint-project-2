<?php
// ... existing code ...
if (basename($_SERVER['SCRIPT_NAME']) === 'index.php') {
    echo '<script src="js/jquery-3.7.1.min.js"></script>';
    echo '<script src="js/plugins/slick-1.8.1/slick/slick.min.js"></script>';
    echo '<script src="js/hero-slider.js"></script>';
}
?>
<script src="js/app.js"></script>
</body>
</html>
