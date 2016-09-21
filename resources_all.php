
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
                <div class="card-link"><a href="#">link</a></div>
            </div>
            <div class="card-footer">Footer</div>
        </div>

    </main>




<?php include('includes/footer.php') ?>
</body>
</html>