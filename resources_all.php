
<?php

$pageTitle = "All Resources";


//array of titles
$resourceTitle = ["The Write Practice", "Novel Now", "Twitter"];
$resourceBody = ["The Write Practice is a great way to receive daily tips and tricks", "Novel Now is new to me but seems to have a lot of neat tricks!", "Twitter is amazing when it comes to inspiration for writers!"]

?>
<!doctype html>
<html>
<head>
    <title><?php echo $pageTitle ?></title>

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/resources-all.css">
</head>
<body>
<?php include ('includes/navigation.php') ?>
    <main class="cardContainer">


        <div class="card">
            <div class="card-title">Title</div>
            <div class="card-body">body text goes here</div>
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

