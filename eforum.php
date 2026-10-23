```php
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Alumni Connect | E-Forum</title>
<link rel="stylesheet" href="css/index.css">

<style>
.forum-container {
    max-width: 900px;
    margin: 35px auto;
    padding: 35px 25px;
    background: #fff;
    border-radius: 12px;
    border-top: 5px solid #D9AD5B;
    box-shadow: 0 5px 20px rgba(20,43,74,.12);
    text-align: center;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}
.forum-label {
    display: inline-block;
    background: #f5eddc;
    color: #142B4A;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
}
.forum-container h1 {
    color: #142B4A;
    font-size: 30px;
}
.forum-tagline {
    color: #B28736;
    font-size: 19px;
    font-weight: bold;
}
.forum-description {
    color: #555;
    line-height: 1.8;
    max-width: 700px;
    margin: 20px auto;
}
.forum-features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
    margin: 25px 0;
}
.forum-feature {
    flex: 1 1 180px;
    max-width: 230px;
    padding: 20px 12px;
    background: #f5f7fa;
    border: 1px solid #e2e7ed;
    border-radius: 10px;
    box-sizing: border-box;
}
.forum-feature h3 {
    color: #142B4A;
}
.forum-feature p {
    color: #555;
    line-height: 1.6;
    font-size: 14px;
}
.forum-icon {
    font-size: 30px;
}
.forum-login-note {
    background: #142B4A;
    color: white;
    padding: 18px;
    border-radius: 8px;
    line-height: 1.7;
}
.forum-login-note strong {
    color: #D9AD5B;
}
</style>
</head>

<body>

<?php include_once "setting/eforum_navigation.php"; ?>

<div class="forum-container">
    <div class="forum-label">ALUMNI COMMUNITY</div>

    <h1>Welcome to Alumni Connect E-Forum</h1>
    <p class="forum-tagline">Connect. Share. Grow Together.</p>

    <p class="forum-description">
        Connect with fellow graduates, exchange knowledge, share
        experiences, and explore career opportunities.