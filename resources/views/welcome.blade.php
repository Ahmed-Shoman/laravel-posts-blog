<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../public/css/welcome.css">
<!-- Adding A favicon -->
<link rel="icon" type="image/png" href="../../public/images/welcomePage.png">
<!-- Font Awesome Library -->
<script src="https://kit.fontawesome.com/5ef60b71ad.js" crossorigin="anonymous"></script>
<title>Welcome</title>
<style>
    /* Header Logo Font */
@import url("https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap");

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-size: cover;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 100px;
}

/* Header Style */
header {
    position: absolute;
    top: 0;
    left: 0;
    padding: 30px 100px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Header Logo Style */
header .logo {
    position: relative;
    text-decoration: none;
    color: #000000;
    font-size: 1.4em;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: capitalize;
    transition: 0.5s;
    font-family: "Kode Mono", monospace;
}

header .logo:hover {
    color: #03a9f4;
}

/* Header Navigation Menu Style */

header .navigation {
    position: relative;
    display: flex;
}

header .navigation li {
    list-style: none;
}

header .navigation li a {
    display: inline-block;
    text-decoration: none;
    color: #000000;
    margin-right: 30px;
    transition: 0.5s;
    font-size: 17px;
    font-weight: 500;
}

header .navigation li a:hover {
    color: #03a9f4;
    transform: scale(1.1);
}

/* Content Style */
.content {
    max-width: 700px;
}

.content .contentBox h2 {
    color: #000000;
    font-size: 3.5em;
}

.content .contentBox p {
    color: #000000;
    font-weight: 300;
    font-size: 1.2em;
    line-height: 1.4;
    margin: 20px 0;
}

.content .contentBox a{
    display: inline-block;
    text-decoration: none;
    color: #000000;
    background-color: #03a9f4;
    text-align: center;
    padding: 10px 30px;
    letter-spacing: 1px;
    font-weight: 500;
    transition: 0.5s;
    border-radius: 20px;
    margin: 10px 0;
}

.content .contentBox a:hover{
    transform: scale(0.8);
}

/* Social Media Icon Style */
ul.sci {
    display: flex;
    position: absolute;
    bottom: 30px;
}

ul.sci li {
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul.sci li a {
    position: relative;
    display: inline-block;
    margin-right: 20px;
    color: #000000;
    font-size: 1.6em;
    transition: 0.3s;
}

ul.sci li a:hover {
    transform: scale(0.8);
}

/* End Styling of the page*/

</style>
</head>
<body>
    <section>
    <header>
    <a href="#" class="logo">Posts Blog</a>
    <ul class="navigation">
    <li><a href="#">Login</a></li>
    <li><a href="#">Sign Up</a></li>
    </ul>
</header>
<div class="content">
    <div class="contentBox">
    <h2>Dive into our blog for endless inspiration!</h2>
        <p>
Explore our captivating blog filled with thought-provoking insights, inspiring stories, and informative articles. Unleash your imagination, broaden your horizons, and embark on a journey of discovery with us.
        </p>
        <a href="{{('/posts')}}" class="button">Recent Posts</a>
    </div>
    </div>
    <ul class="sci">
    <li><a href="https://www.facebook.com/profile.php?id=100011816132504" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
    <li><a href="https://github.com/Ahmed-Shoman" target="_blank"><i class="fa-brands fa-github"></i></a></li>
    <li><a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAADu_UukBhz_pJALfZRpWlXZfqcKZkG6sJ14&keywords=ahmed%20shoman&origin=RICH_QUERY_SUGGESTION&position=2&searchId=daaba311-0094-4174-88cc-42567da58eb5&sid=c2l&spellCorrectionEnabled=false" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
    </ul>
</section>
</body>
</html>