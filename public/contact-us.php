<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Contact us - QualityBuilders";
    require "../inc/head.php";
?>

<body>
    <?php
        require "../inc/header.php";
    ?>

    <section id="contact-form">
        <container>

            <h1>Contact Us</h3>

            <!-- Form -->
            <?php
                // CSRF
                session_start();
                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                    $_SESSION["token"] = md5(uniqid(mt_rand(), true));
                }
            ?>
            <form method="POST" action="">
                <!-- CSRF Token -->
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">

                <div class="narrow">
                    <label>First Name</label>
                    <input name="first_name" />
                </div>
                
                <div class="narrow">
                    <label>Last Name</label>
                    <input name="last_name" />
                </div>

                <div class="narrow">
                    <label>Email Address</label>
                    <input name="email" />
                </div>

                <div class="narrow">
                    <label>Phone Number</label>
                    <input name="phone" />
                </div>

                <div class="wide">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                </div>

                <button>Submit Form</button>
            </form>
            <!-- Form Submit Code -->
            <?php
                $request_method = strtoupper($_SERVER["REQUEST_METHOD"]);
                if ($request_method === "POST") {
                    // Get submitted values
                    $token = htmlspecialchars($_POST["token"]);
                    $fname = htmlspecialchars($_POST["first_name"]);
                    $lname = htmlspecialchars($_POST["last_name"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $phone = htmlspecialchars($_POST["phone"]);
                    $message = htmlspecialchars($_POST["message"]);

                    // CSRF
                    if (!$token || $token !== $_SESSION["token"]) {
                        // CSRF Fail Path

                    } else {
                        // Validation
                    }
                }
            ?>
        </container>
    </section>

</body>
</html>