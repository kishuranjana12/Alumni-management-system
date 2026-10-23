
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alumni Connect - News Navigation</title>
    <link rel="stylesheet" href="css/header_navigationbar.css">
</head>

<body>

<div>
    <img src="image/alumni-banner.jpg"
         width="100%"
         height="300"
         style="object-fit:cover;"
         alt="Alumni Connect Campus Banner">
</div>

<table class="table">
<tr>
<td>
<ul class="ul1">

    <li class="li_image">
        <a href="index.php" style="text-decoration:none;">
            <span style="font-size:20px;font-weight:bold;color:#f4c95d;">
                Alumni Connect
            </span>
        </a>
    </li>

    <div class="dropdown">
        <li class="li1">
            <a href="index.php"><span class="span1">Home</span></a>
        </li>
        <div class="dropdown-content">
            <a href="index.php#welcome">Welcome</a>
            <a href="index.php#howto">Join Our Community</a>
        </div>
    </div>

    <div class="dropdown">
        <li class="li1">
            <a href="about_us.php"><span class="span1">About Us</span></a>
        </li>
    </div>

    <div class="dropdown">
        <li class="li1 active">
            <a href="news.php"><span class="span1">News & Events</span></a>
        </li>
        <div class="dropdown-content">
            <a href="news.php#announcements">Announcements</a>
            <a href="news.php#events">Upcoming Events</a>
        </div>
    </div>

    <div class="dropdown">
        <li class="li1">
            <a href="eforum.php"><span class="span1">E-Forum</span></a>
        </li>
    </div>

    <div class="dropdown">
        <li class="li1">
            <a href="search_alumni.php"><span class="span1">Search Alumni</span></a>
        </li>
    </div>

    <div class="dropdown">
        <li class="li1">
            <a href="contact_us.php"><span class="span1">Contact Us</span></a>
        </li>
        <div class="dropdown-content">
            <a href="contact_us.php#contact">Contact</a>
            <a href="contact_us.php#faq">FAQs</a>
        </div>
    </div>

    <li class="li2">
        <a href="register.html"><span class="span1">Register</span></a>
    </li>

    <li class="li2">
        <a href="login.html"><span class="span1">Login</span></a>
    </li>

</ul>
</td>
</tr>
</table>

<button id="news_totop" onclick="topFunction()">
    <img src="image/top.jpg" width="50" height="50" alt="Back to top">
</button>

<script src="javascript/news_totop.js"></script>

</body>
</html>
