<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Audio Books For Free - Thanks!</title>
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
        <h3>Thank you!</h3>
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