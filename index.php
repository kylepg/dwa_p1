<?php require 'php/random-quote.php'; ?>
<html>

<head>
    <title> Kyle George - Project 1</title>
    <link rel="icon" href="/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/p1.css">
</head>

<body>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h1>Kyle George</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <img class="img-fluid" src="/images/young-kyle.jpg" />
                <p class="caption text-center">3 year old me wondering how a computer works.</p>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="col-12 mb-4">
                    <h2>About me</h2>
                    <p>I live right outside Boston and am currently working my dream job for the Boston Celtics as a front end
                        developer & designer.</p>
                    <p>Up until this point, my coding experience has been exclusively client-side. I’ve dabbled with node.js
                        here and there, but the more I am exposed to back end technologies the more curious I become about
                        how they work. It’s tough for me to be build things on the web and not know what's going on under
                        the hood. Can’t wait to learn all about it and expand my skillset.</p>
                    <p>When I’m out from behind the computer I like to hike, skateboard, play basketball, play piano, and hang
                        with my dog.</p>
                </div>
                <div class="col-12 mb-4">
                    <h2>Random quotation</h2>
                    <div style="display: inline-block">
                        <p>
                            <?php echo $quotations[$randomIndex][0] ?> </p>
                        <p style="text-align: right"> -
                            <?php echo $quotations[$randomIndex][1] ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>