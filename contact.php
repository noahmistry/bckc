<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Best Choice Kitchen Cabinets</title>
    <meta name="description" content="Quality and Variety Built Kitchen Cabinets">

    <!--  Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow">

    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Playfair+Display|Raleway|Arima+Madurai|Suez+One|Italianno|Italiana|Vesper+Libre|Source+Sans+Pro|Cabin"
        rel="stylesheet">

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="dist/css/site.css">
    <link rel="stylesheet" href="dist/css/plugins/animate.css">
    <link rel="stylesheet" href="dist/css/plugins/hover-min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

    <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" sizes="32x32" href="dist/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="dist/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="dist/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#e8eef0">
    <link rel="apple-touch-icon" sizes="76x76" href="dist/images/favicons/apple-touch-icon.png">
</head>

<body>

    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header>
        <div class="u-full-width">
            <div class="row">
                <div class="twelve columns">
                    <div class="main-header">
                        <div class="pusher"></div>
                        <div class="nav-header u-full-width">
                            <div class="container">
                                <div class="row">
                                    <div class="twelve columns nav-logo">
                                        <a href="http://bestchoicekitchencabinets.ca/">
                                            <img src="dist/images/logo/BestChoiceLogo.png" alt="Best Choice Kitchen Logo">
                                        </a>
                                        <span id="bc-title">Best Choice</span>
                                        <span id="kc-title">Kitchen Cabinets</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="twelve columns">
                                <nav>
                                    <ul class="container flex">
                                        <a href="index.html">
                                            <li>HOME</li>
                                        </a>
                                        <a href="about.html">
                                            <li>ABOUT US</li>
                                        </a>
                                        <a href="services.html">
                                            <li>SERVICES</li>
                                            <ul class="sub-menu">
                                                <li>CONSTRUCTION</li>
                                                <li>CONSTRUCTION</li>
                                            </ul>
                                        </a>
                                        <a href="gallery.html">
                                            <li>GALLERY</li>
                                        </a>
                                        <a href="contact.php">
                                            <li>CONTACT US</li>
                                        </a>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="eight columns">
                <form id="form" action="/contact.php" method="POST">
                    <div class="row pd-tp">
                        <div class="container u-pull-left wd-div">
                            <div class="six columns">
                                <label for="exampleNameInput">Name</label>
                                <input class="u-full-width" id="exampleNameInput" type="text" name="name" placeholder="Name" required />
                            </div>
                            <div class="six columns">
                                <label for="exampleEmailInput">Your email</label>
                                <input class="u-full-width" type="email" name="email" placeholder="Email" id="exampleEmailInput"
                                    required>
                            </div>
                            <div class="twelve columns">
                                <label for="exampleRecipientInput">Reason for contacting</label>
                                <select id="exampleRecipientInput" required>
                                    <option value="" disabled selected>Select One</option>
                                    <option value="Option 1">Product Information</option>
                                    <option value="Option 2">Warranty</option>
                                    <option value="Option 3">Other</option>
                                </select>
                                <div class="twelve columns">
                                    <label for="exampleMessage">Message</label>
                                    <textarea placeholder="Message" id="exampleMessage" required></textarea>
                                    <br>
                                    <input class="button-primary" type="submit" value="Submit">
                                </div>
                            </div>
                
                           
                
                        </div>
                
                </form>
            </div>
            
        </div>
    </main>

// PHP Sanitizing //
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){ 

    if (!isset($_POST['exampleNameInput']) || !isset($_POST['exampleEmailInput']) || !isset($_POST['exampleRecipientInput']) || !isset($_POST['exampleMessage'])){ 

        $errors .= 'Please complete all the required fields.'; 
     } 

    if ($_POST['exampleNameInput'] != "") { 
        $_POST['exampleNameInput'] = filter_var($_POST['exampleNameInput'], FILTER_SANITIZE_STRING); 
        if ($_POST['exampleNameInput'] == "") { 
            $errors .= 'Please input a valid name.<br/>'; 
        }
    }
 
    // if ($_POST['exampleEmailInput'] != "") { 
    //     $_POST['exampleEmailInput'] = filter_var($_POST['exampleEmailInput'], FILTER_SANITIZE_STRING); 
    //     if ($_POST['exampleEmailInput'] == "") { 
    //         $errors .= 'Please input a valid email address.<br/>'; 
    //     }
    // }
 
    if ($_POST['exampleEmailInput'] != "") { 
        $email = filter_var($_POST['exampleEmailInput'], FILTER_SANITIZE_EMAIL); 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $errors .= 'Email is not valid.<br/>'; 
        }
    }
 
    // if ($_POST['Telephone'] != "") { 
    //     $_POST['Telephone'] = filter_var($_POST['Telephone'], FILTER_SANITIZE_STRING); 
    //     if ($_POST['Telephone'] == "") { 
    //         $errors .= 'Telephone is not valid.<br/>'; 
    //     }
    // }
 
    if ($_POST['exampleRecipientInput'] != "") { 
        $_POST['exampleRecipientInput'] = filter_var($_POST['exampleRecipientInput'], FILTER_SANITIZE_STRING); 
        if ($_POST['exampleRecipientInput'] == "") { 
            $errors .= 'Please select one.<br/>'; 
        }
    }
 
    if(!$errors) { 
        $to = 'info@bestchoicekitchencabinets.ca'; 
        $from = $_POST['Email']; 
        $subject = 'Web Contact Form'; 
        $content = "
        Name: " . $_POST['exampleNameInput'] . "
        //Second Name: " . $_POST['SecondName'] . "
        Email: " . $_POST['exampleEmailInput'] . "
        //Telephone: " . $_POST['Telephone'] . "
        exampleMessage: " . $_POST['exampleMessage']; 

        if(mail($to, $subject, $content, 'From:' . $from)){
            echo '<p class="alert alert-success">Thank you for contacting us, your message has been sent.</p>'; 
        } else { 
           echo '<p class="alert alert-danger">There was a problem sending your message</p>'; 
        } 
    } else { 
        echo '<p class="alert alert-danger">' . $errors . '</p>'; 
    }
}
?>

// END //


    <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>

</html>