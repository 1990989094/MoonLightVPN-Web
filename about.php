<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require "header.php" ?>
<div class="sec" id="sec">
    <h2>Who Created? </h2>
    <p>It does not matter who created this website. Our goal is to provide free service to bypass the ISP to get the freedom of internet for anyone.</p>

</div>
<script>
    let stars = document.getElementById('stars');
    let moons = document.getElementById('moon');
    let mountain_behind = document.getElementById('mountain_behind');
    let text = document.getElementById('text');
    let btn = document.getElementById('btn');
    let mountain_front = document.getElementById('mountain_front');
    let header = document.querySelector('header');

    window.addEventListener('scroll', function() {
        let value = window.scrollY;
        stars.style.left = value * 0.2 + "px";
        moons.style.top = value * 1.05 + "px";
        mountain_behind.style.top = value * 0.5 + "px";
        mountain_front.style.top = value * 0 + "px";
        text.style.marginRight = value * 3 + "px";
        text.style.marginTop = value * 1.5 + "px";
        btn.style.marginTop = value * 1.5 + "px";
        header.style.top = value * 0.5 + "px";
    })

</script>
</body>
</html>