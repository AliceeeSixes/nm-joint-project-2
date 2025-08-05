<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Contact us - QualityBuilders";
    require "../inc/head.php";
?>

<body>
    <script src="js/plugins/jquery-3.7.1.min.js"></script>
    <?php
        require "../inc/header.php";
    ?>

    <section id="contact-form">
        <div class="container">

            <h1>Contact Us</h3>

            <!-- Form -->
            <?php
                // CSRF
                session_start();
                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                    $_SESSION["token"] = md5(uniqid(mt_rand(), true));
                }

                // DB Connection
                require "../inc/database-connection.php";
            ?>


            <!-- Form Submit Code -->
            <?php
                $request_method = strtoupper($_SERVER["REQUEST_METHOD"]);
                $valid = true;
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
                        echo "CSRF Failed (try reloading the page)<br>";
                    } else {
                        // Validation
                        $errors = [];

                        if (!$fname) {
                            $valid = false;
                            array_push($errors, "First name is required");
                        }
                        if (!$lname) {
                            $valid = false;
                            array_push($errors, "Last name is required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $valid = false;
                            array_push($errors, "Email is invalid");
                        }
                        if (!$phone) {
                            $valid = false;
                            array_push($errors, "Phone number is required");
                        }
                        if (!$message) {
                            $valid = false;
                            array_push($errors, "Message is required");
                        }

                        if ($valid) {
                            // Submit message to DB
                            storeMessage($fname, $lname, $email, $phone, $message, time());
                            // Form Submitted Popup
                            echo '<div id="form-success" class="form-popup"><button class="form-popup-close"><i class="fa fa-xmark"></i></button><div>';
                            echo 'Form submitted successfully';
                            echo '</div></div>';
                        } else {
                            // Validation failed popup
                            echo '<div id="form-error" class="form-popup"><button class="form-popup-close"><i class="fa fa-xmark"></i></button><div>';
                            foreach ($errors as $error) {
                                echo "$error <br>";
                            }
                            echo '</div></div>';
                        }
                    }

                }


 

            ?>




            <script>
                $(".form-popup-close").on("click", () => {
                    $(event.target).parents(".form-popup").slideUp();
                });
            </script>

            <form method="POST" action="">
                <!-- CSRF Token -->
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">

                <div class="narrow">
                    <label>First Name</label>
                    <input name="first_name" <?php if(!$valid) {echo "value='$fname'";} ?>/>
                </div>
                
                <div class="narrow">
                    <label>Last Name</label>
                    <input name="last_name" <?php if(!$valid) {echo "value='$lname'";} ?>/>
                </div>

                <div class="narrow">
                    <label>Email Address</label>
                    <input name="email" <?php if(!$valid) {echo "value='$email'";} ?>/>
                </div>

                <div class="narrow">
                    <label>Phone Number</label>
                    <input name="phone" <?php if(!$valid) {echo "value='$phone'";} ?>/>
                </div>

                <div class="wide">
                    <label>Message</label>
                    <textarea name="message"><?php if(!$valid) {echo "$message";} ?></textarea>
                </div>

                <button>Submit Form</button>
            </form>

        </div>
    </section>

    <?php
        require "../inc/footer.php";
    ?>

</body>
</html>