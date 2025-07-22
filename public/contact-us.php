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
            <?php
                // CSRF
                session_start();
                $_SESSION["token"] = md5(uniqid(mt_rand(), true));
            ?>
            <form>
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
                    <textarea></textarea>
                </div>

                <button>Submit Form</button>


            </form>
        </container>
    </section>

</body>
</html>