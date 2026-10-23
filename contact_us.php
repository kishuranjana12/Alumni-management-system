<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Connect | Contact Us</title>

<link rel="stylesheet" href="css/contact_us.css">

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: #ffffff;
    color: #444;
}

#contact, #faq {
    max-width: 900px;
    margin: 30px auto;
    padding: 25px;
    line-height: 1.8;
}

.p1 {
    color: #142B4A;
    font-size: 28px;
    font-weight: bold;
    border-bottom: 3px solid #D9AD5B;
    padding-bottom: 10px;
}

.p2 {
    color: #142B4A;
    font-size: 20px;
    font-weight: bold;
    margin-top: 25px;
    margin-bottom: 8px;
}

.p3 {
    color: #555;
    font-size: 16px;
    line-height: 1.8;
    margin-top: 5px;
}

.email {
    color: #142B4A;
    font-weight: bold;
    text-decoration: none;
}

.email:hover {
    color: #B8862B;
    text-decoration: underline;
}

.social a {
    display: inline-block;
    margin-right: 15px;
    text-decoration: none;
}

.social img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

#faq {
    border-top: 2px solid #D9AD5B;
    margin-top: 15px;
}

.faq-question {
    color: #142B4A;
    font-size: 17px;
    font-weight: bold;
    margin-top: 22px;
    margin-bottom: 5px;
}

.faq-answer {
    color: #555;
    font-size: 15px;
    line-height: 1.8;
    margin-top: 5px;
}

@media (max-width: 600px) {
    #contact, #faq {
        padding: 15px;
        margin: 15px auto;
    }

    .p1 {
        font-size: 24px;
    }

    .p2 {
        font-size: 18px;
    }
}
</style>
</head>

<body>

<?php include_once "setting/contactus_navigation.php"; ?>

<div id="contact">

    <p class="p1">Contact Us</p>

    <p class="p2">Alumni Connect Community</p>
    <p class="p3">
        Stay connected with your fellow alumni! Whether you have questions
        about registration, updating your profile, upcoming events, or
        connecting with graduates, we're here to help.
    </p>

    <p class="p2">Get in Touch</p>
    <p class="p3">
        Have a question or suggestion? We'd love to hear from you.
        Reach out to us for assistance and share your ideas to help
        make our alumni community better.
    </p>

    <p class="p2">Email Us</p>
    <p class="p3">
        For any queries or feedback, please email us at:
        <a class="email" href="mailto:alumniconnect@gmail.com">
            alumniconnect@gmail.com
        </a>
    </p>

    <p class="p2">Connect With Us</p>
    <p class="p3">
        Follow our social media pages to stay updated with alumni news,
        events, reunions, and networking opportunities.
    </p>

    <p class="p3 social">
        <a href="https://www.facebook.com/" target="_blank">
            <img src="pictures/facebook.png" alt="Facebook">
        </a>

        <a href="https://www.instagram.com/" target="_blank">
            <img src="pictures/instagram.png" alt="Instagram">
        </a>

        <a href="https://twitter.com/" target="_blank">
            <img src="pictures/twitter.png" alt="Twitter">
        </a>
    </p>

</div>

<div id="faq">

    <p class="p1">Frequently Asked Questions (FAQ)</p>

    <p class="faq-question">1. What is Alumni Connect?</p>
    <p class="faq-answer">
        Alumni Connect is a platform that brings graduates together to stay
        connected, share experiences, and explore career opportunities.
    </p>

    <p class="faq-question">2. How can I join the Alumni Connect community?</p>
    <p class="faq-answer">
        Register on our website by filling in the required details and
        creating your alumni account.
    </p>

    <p class="faq-question">3. Can I update my profile after registration?</p>
    <p class="faq-answer">
        Yes, you can keep your academic, contact, and professional
        information updated through your account.
    </p>

    <p class="faq-question">4. Where can I find upcoming alumni events?</p>
    <p class="faq-answer">
        Visit the News &amp; Events section for announcements and updates
        about alumni gatherings and activities.
    </p>

    <p class="faq-question">5. How can I connect with other alumni?</p>
    <p class="faq-answer">
        Use the alumni community features and E-Forum to connect,
        exchange ideas, and share experiences.
    </p>

</div>

</body>
</html>
