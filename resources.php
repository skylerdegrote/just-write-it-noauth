<?php

$pageTitle = "Resources";


?>

<!doctype html>
<html>
<head>
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/resources.css">
</head>
<body>
<?php include ('includes/navigation.php') ?>
<div class="container">
<!--card-->
    <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <img src="images/resources/thewritepractice200.png">

        <div class="mdl-card__supporting-text">
            The Write Practice is a great place to go when you are looking for some...
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                Read More
            </a>
        </div>
    </div>
<!--card-->
    <div class="demo-card-square mdl-card mdl-shadow--2dp">
        <img src="images/resources/scrivener200.png">

        <div class="mdl-card__supporting-text">
           Scrivener is a great program. Of course there are others out there, but...
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
               Learn More
            </a>
        </div>
    </div>
<!--card-->
    <div class="demo-card-square mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
            <h2 class="mdl-card__title-text">Update</h2>
        </div>
        <div class="mdl-card__supporting-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aenan convallis.
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                View Updates
            </a>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>
</body>
</html>
