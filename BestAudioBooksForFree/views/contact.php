<?php 
if(isset($_POST['submit'])){
    $to = "bestaudiobooksforfree@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('location: /thank_you.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Audio Books For Free - Contact</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Link to external stylesheet -->
</head>

<body>
    <header>
        <div id="header" class="header">
            <div id="profile" class="profile">
                <img src="../imgs/Icons/profile.jpg" alt="profileToken">
            </div>
            <h1 id="name" class="name">Best Audio Books For Free</h1>
            <!-- Simulate a smartphone / tablet -->
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="../index.html">Home</a>
                <a href="library.html">Browse Series</a>
                <a href="newsletterAndUpdates.html">Newsletters / Updates</a>
                <a href="contact.php">Contact</a>
            </div>
            <div id="main">
                <button class="openbtn" onclick="openNav()">☰</button>
            </div>
        </div>

    </header>


    <div class="container" id="container">
        <h3>Thank you for visting Best Audio Books For Free! Please feel free to reach out with any suggestions or recommendations. Please include purpouse of contact in the subject line. Keep on reading!</h3>
        <br>
        <br>
        <br>
        <form id="contact-form" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="subject" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>


    <footer id="footer" class="footer">
        <p>&copy; 2024 Best Audio Books For Free - <a href="https://www.youtube.com/@BestAudioBooksforFree">YouTube</a> - <a href="mailto:bestaudiobooksforfree@gmail.com">Email</a></p>
    </footer>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("container").style.zIndex = "-1";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("container").style.zIndex = "0";
        }
    </script>
    <script src="script.js"></script> <!-- Link to external JavaScript file -->
</body></html>