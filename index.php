<?php require 'processor.php'; //Require the form processor ?>
<!DOCTYPE HTML>
<!--[if lte IE 7]><html class="ie7" lang="en-GB" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="en-GB" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en-GB" dir="ltr"><![endif]-->
<!--[if !IE]><!--><html lang="en-GB" dir="ltr"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Contact Form Example</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index,follow" />
        <meta name="author" content="Ryan Fitton">
    </head>


    <body>
        
        <!-- Start of Header -->
        <header>
            <h1>Contact Form Example</h1>
        </header>
        <!-- End of Header -->


        <!-- Start of Main Content -->
        <main role="main">

            <?php
                //Gain access to the global $message variable
                global $message;

                //Check if form has been sent, if true display success message and track virtual page view
                if (isset($_GET['formstatus']) && $_GET['formstatus'] == 'success') {
                    echo "<h2>Email has been sent and data added to the database</h2>";
                }
            ?>
            
            
            <form action="<?php echo $_SERVER['PHP_SELF']; //Post to itself ?>" method="post">
                <div style="margin-top:20px;">
                    <?php if (isset($message['name'])) { echo "<strong>" . $message['name'] . "</strong>"; }?><br>
                    <label for="name">Enter your name (required)</label><br>
                    <input type="text" id="name" name="name" placeholder="Enter your name (required)" value="<?php if (isset($_POST['name'])) { echo $_POST['name']; }?>" required>
                </div>

                <div style="margin-top:20px;">
                    <?php if (isset($message['number'])) { echo "<strong>" . $message['number'] . "</strong>"; }?><br>
                    <label for="number">Enter your contact number</label><br>
                    <input type="number" id="number" name="number" placeholder="Enter your contact number" value="<?php if (isset($_POST['number'])) { echo $_POST['number']; }?>" min="0" required>
                </div>

                <div style="margin-top:20px;">
                    <?php if (isset($message['email'])) { echo "<strong>" . $message['email'] . "</strong>"; }?><br>
                    <label for="email">Enter your email address (required)</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter your email address (required)" value="<?php if (isset($_POST['email'])) { echo $_POST['email']; }?>" required>
                </div>

                <div style="margin-top:20px;">
                    <?php if (isset($message['company'])) { echo "<strong>" . $message['company'] . "</strong>"; }?><br>
                    <label for="company">Enter your company name</label><br>
                    <input type="text" id="company" name="company" placeholder="Company" value="<?php if (isset($_POST['company'])) { echo $_POST['company']; }?>" required>
                </div>
                
                <div style="margin-top:20px;">
                    <?php if (isset($message['subject'])) { echo "<strong>" . $message['subject'] . "</strong>"; }?><br>
                    <label for="subject">What is your enquiry regarding?</label><br>
                    <select id="subject" name="subject" required>
                        <option value="general" <?php if (isset($_POST['subject']) && $_POST['subject'] == 'general') { echo 'selected'; }?>>General</option>
                        <option value="support" <?php if (isset($_POST['subject']) && $_POST['subject'] == 'support') { echo 'selected'; }?>>Support</option>
                        <option value="other" <?php if (isset($_POST['subject']) && $_POST['subject'] == 'other') { echo 'selected'; }?>>Other</option>
                    </select>
                </div>

                <div style="margin-top:20px;">
                    <?php if (isset($message['enquiry'])) { echo "<strong>" . $message['enquiry'] . "</strong>"; }?><br>
                    <label for="enquiry">Your enquiry</label><br>
                    <textarea id="enquiry" name="enquiry" placeholder="Your enquiry" rows="3" required><?php if (isset($_POST['enquiry'])) { echo $_POST['enquiry']; }?></textarea>
                </div>

                <div style="margin-top:20px;">
                    <button type="submit" id="submit" name="submit">Submit</button>
                </div>
            </form>

        </main>
        <!-- End of Main Content -->

    </body>
</html>