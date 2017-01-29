<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Efren Vasquez Blank Template</title>

    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
</head>
<body>
    <div class="container">
        <header class="row">
            <div clas="twelve columns">
                <h1>Blank WordPress Template</h1>
                <p>This is my WordPress template.</p>
            </div>
        </header>
<!-- Begin Section Container -->
        <section class="row">
            <div class="twelve columns">
                <!--Begin Loop -->
                <?php
                    if (have_posts() ){
                        while (have_posts() ){
                            the_post();
                        } //end while
                    } //end if
                ?>
                <!--End Loop-->
            </div>
        </section>

        <footer class="row">
            <div class="twelve columns">
                <h2>This is the Footer</h2>
                <p>This is some cool footer content</p>
            </div>
        </footer>
    </div>
</body>
</html>