<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alumni Connect</title>

    <link rel="stylesheet" href="css/index.css?v=2">
</head>

<body>
  <?php include_once "setting/index_navigation.php"; ?>

    <!-- Slideshow Section -->
    <div class="slideshow-container">

        <div class="mySlides fade" style="display: block;">
            <div class="numbertext">1 / 3</div>
            <img src="pictures/campus.jpg" style="width:100%" alt="College Campus">
            <div class="text">Connecting Alumni Worldwide</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="pictures/alumni.jpg" style="width:100%" alt="Alumni Community">
            <div class="text">Reunite with Your Batchmates</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="pictures/networking.jpg" style="width:100%" alt="Alumni Networking">
            <div class="text">Building Memories, Creating Opportunities</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>

    <br>

    <!-- Slideshow Dots -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <br><br>

    <!-- Welcome Section -->
    <div id="welcome">

        <p class="p1">Welcome to Alumni Connect</p>

        <p class="p2">
            Reconnect with Friends. Rebuild Connections.
        </p>

        <p class="p3">
            Are you missing your college friends, classmates, and the
            unforgettable memories you created together? Alumni Connect
            helps you reconnect with your batchmates and stay connected
            with your college community.

            <br><br>

            Our platform brings graduates together to share achievements,
            discover career opportunities, participate in alumni events,
            and build meaningful professional relationships. Join our
            growing network and stay connected with your fellow alumni
            wherever life takes you.
        </p>

    </div>

    <br><br>

    <hr color="#050119" size="4">

    <br><br>

    <!-- Alumni Community Section -->
    <div id="howto">

        <h2>Become a Part of Our Alumni Community</h2>

        <p>Your Journey with Alumni Connect Starts Here!</p>

        <img
            src="pictures/alumnidiagram.jpg"
            class="img2"
            alt="Alumni Community Diagram"
        >

    </div>

    <br><br>

    <!-- Footer -->
    <footer class="site-footer">

        <h3>Alumni Connect</h3>

        <p>Connecting Graduates. Building Futures.</p>

        <p>Stay connected with your college and fellow alumni.</p>

        <p class="copyright">
            &copy; 2026 Alumni Connect | Alumni Management System
        </p>

    </footer>

    <script>
let slideIndex = 1;

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Show the first image when the page is ready
window.addEventListener("load", function () {
    showSlides(1);
});
</script>