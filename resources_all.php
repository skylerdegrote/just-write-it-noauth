
<?php

$pageTitle = "All Resources";


?>
<!doctype html>
<html>
<head>
    <title><?php   echo $pageTitle  ?></title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/resources-all.css">
</head>
<body>
<?php include ('includes/navigation.php') ?>
    <main class="container">
        <div class="card">
            <div class="card-title">Title</div>
            <div class="card-body">body text goes here
                <div class="card-img"><img></div>
            </div>
            <div class="card-footer">
                <div class="card-link"><a href="index.php">Read More</a> </div>
            </div>
        </div>
        <div class="card">
            <div class="card-title">Title</div>
            <div class="card-body">body text goes here
                <div class="card-img"><img></div>
            </div>
            <div class="card-footer">
                <div class="card-link"><a href="index.php">Read More</a> </div>
            </div>
        </div>
        <div class="card">
            <div class="card-title">Title</div>
            <div class="card-body">body text goes here
                <div class="card-img"><img></div>
            </div>
            <div class="card-footer">
                <div class="card-link"><a href="index.php">Read More</a> </div>
            </div>
        </div>
    </main>



<?php include('includes/footer.php') ?>
</body>
</html>

