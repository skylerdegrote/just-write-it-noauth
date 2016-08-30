<!DOCTYPE html>
<html>
<head>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title></title>-->
<!--    <link href="../styles/main.css" rel="stylesheet" type="text/css" />-->
    <link href="../menu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="../menu/ddmenu.js" type="text/javascript"></script>
    <script src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="../styles/navigation.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
<!--    <header class="mdl-layout__header">-->
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"><a href="../index.php"><img src="../images/spritesheet.png"></a> </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav id="ddmenu" class="mdl-navigation mdl-layout--large-screen-only">
                <ul>
                            <li class="no-sub">
                                <a class="top-heading" id=<?php echo ($pageTitle == "home" ? "active" : "")?>"" href="../index.php">Home</a>
                            </li>
                            <li class="no-sub">
                                <!--     about just write it, about author, giving credit to everyone that contributes to the site       -->
                                <a class="top-heading" href="../about.php">About</a>
                            </li>
                            <li>
                                <span class="top-heading"><a href="../resources.php">Resources</a> </span>
                                <i class="caret"></i>
                                <div class="dropdown">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><a href="../resources-writepractice.php">The Write Practice</a></li>
                                            <li><a href="../resources-scrivener.php">Scrivener</a></li>
                                            <li><a href="#">Snowflake Method</a></li>

<!--snowflake method:::::     http://www.advancedfictionwriting.com/articles/snowflake-method/-->
                                            <li><a href="#">Planning in Detail</a></li>
                                            <li><a href="#">Almost No Planning</a></li>
                                            <li><a href="#">Need to know</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="top-heading">How To's</span>
                                <i class="caret"></i>
                                <div class="dropdown offset300">
                                    <div class="dd-inner">
                                        <ul class="column">
                                            <li><h3>Programs</h3></li>
                                            <li><a href="#">Scrivener</a></li>
                                            <li><h3>Planning</h3></li>
                                            <li><a href="#">In Lots of Detail</a></li>
                                            <li><a href="#">In Less Detail</a></li>
                                        </ul>
                                        <ul class="column">
                                            <li><h3>Build</h3></li>
                                            <li><a href="#">Characters</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Scenes</a></li>
                                            <li><a href="#">Chapters</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!--        <li>-->
                            <!--            <span class="top-heading">Blog</span>-->
                            <!--            <i class="caret"></i>-->
                            <!--            <div class="dropdown offset300">-->
                            <!--                <div class="dd-inner">-->
                            <!--                    <ul class="column">-->
                            <!--                        <li><h3>Dates</h3></li>-->
                            <!--                        <li><a href="#">August 2016</a></li>-->
                            <!--                        <li><h3>Recent Posts</h3></li>-->
                            <!--                        <li><a href="#">Hello!</a></li>-->
                            <!--                    </ul>-->
                            <!--                    <ul class="column">-->
                            <!--                        <li><h3>Categories</h3></li>-->
                            <!--                        <li><a href="#">Writing</a></li>-->
                            <!--                        <li><a href="#">Planning</a></li>-->
                            <!--                        <li><a href="#">Characters</a></li>-->
                            <!--                        <li><a href="#">Settings</a></li>-->
                            <!--                        <li><a href="#">Scenes</a></li>-->
                            <!--                        <li><a href="#">Chapters</a></li>-->
                            <!--                    </ul>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </li>-->

                        </ul>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here --></div>
    </main>
</div>


</body>
</html>