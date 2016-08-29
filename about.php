<?php

$pageTitle = "About";


?>

<!doctype html>
<html>
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/about.css">
</head>
<body>
<?php include ('includes/navigation.php') ?>
<div class="container">

    <br>
    <div class="section">
        <h3>About Just Write It</h3>
        <p>Just Write It is a website filled with fiction writing resources. I hope to eventually cover more than just
            fiction writing but for now that is what I know so that is what I'll include.</p>
    </div>
    <div class="section">
        <h3>About Author</h3>
        <p>My Name is Skyler. I am a writer, programmer and cat lover. I've been writing since I was 12 and
            I've been an author since I was 18.</p>
    </div>
    <div class="section size100">
        <h3>Credit goes to...</h3>
        <p>
            Ideas and posts that are on this website are from a lot of different sources. Most of the resources will
            list where they come from at the bottom of the page. Some specific sources will be listed here once there is
            more content on the website.
        </p>
    </div>
</div>

<?php include('includes/footer.php') ?>
</body>
</html>
