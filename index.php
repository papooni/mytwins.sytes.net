<html>
<head>
    <meta http-equiv="content-type">
    <meta charset="utf-8">

    <!-- Page Title Here -->
    <title> MyTwins / Raquel & Pedro </title>

    <!-- Page Description Here -->
    <meta name="description" content="A chegada do Tico e do Teco">

    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

    <!-- Initializer -->
    <link rel="stylesheet" href="./css/normalize.css">

    <!-- Web fonts and Web Icons -->
    <link rel="stylesheet" href="./css/pageloader.css">
    <link rel="stylesheet" href="./fonts/opensans/stylesheet.css">
    <link rel="stylesheet" href="./fonts/asap/stylesheet.css">
    <link rel="stylesheet" href="./css/ionicons.min.css">

    <!-- Vendor CSS style -->
    <link rel="stylesheet" href="./css/foundation.min.css">
    <link rel="stylesheet" href="./js/vendor/jquery.fullPage.css">
    <link rel="stylesheet" href="./js/vegas/vegas.min.css">

    <!-- Main CSS files -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/main_responsive.css">
    <link rel="stylesheet" href="./css/style-color1.css">

    <script src="./js/vendor/modernizr-2.7.1.min.js"></script>
</head>
<body id="menu" class="alt-bg">
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page Loader -->
<div class="page-loader" id="page-loader">
    <div><i class="ion ion-loading-d"></i>
        <p>loading</p></div>
</div>


<!-- BEGIN OF site cover -->
<div class="page-cover" id="s-cover">
    <!-- Cover Background -->
    <div class="cover-bg pos-abs full-size bg-img" data-image-src="img/bg-default.jpg"></div>

    <!-- BEGIN OF Slideshow Background -->
    <div class="cover-bg pos-abs full-size slide-show">
        <!--<i class='img' data-src='./img/1.png'></i>-->
        <!--<i class='img' data-src='./img/2.png'></i>
        <i class='img' data-src='./img/3.png'></i>
        <i class='img' data-src='./img/4.png'></i>
        <i class='img' data-src='./img/5.png'></i>
        <i class='img' data-src='./img/6.png'></i>
        <i class='img' data-src='./img/7.png'></i>
        <i class='img' data-src='./img/8.png'></i>
        <i class='img' data-src='./img/8.png'></i>
        <i class='img' data-src='./img/8.png'></i>
        <i class='img' data-src='./img/9.jpg'></i>
        <i class='img' data-src='./img/10.png'></i>-->
        <!-- <i class='img' data-src='./img/11.png'></i> -->
        <!--<i class='img' data-src='./img/12.png'></i>
        <i class='img' data-src='./img/13.png'></i>
        <i class='img' data-src='./img/14.jpg'></i>
        <i class='img' data-src='./img/15.png'></i>
        <i class='img' data-src='./img/16.png'></i>
        <i class='img' data-src='./img/17.png'></i>
        <i class='img' data-src='./img/18.png'></i>
        <i class='img' data-src='./img/19.jpg'></i>-->
        <?php
        $dir = "/home/forge/mytwins.sytes.net/img-background/";
        $scanned_directory = array_slice(scandir($dir), 2);
        //print_r($scanned_directory);
        $count = 0;
        if (!empty($scanned_directory)) {
            foreach ($scanned_directory as $key => $ficheiro) {
                $file = pathinfo($ficheiro);
                //echo 'file ---- '. print_r($file);
                if (($file['extension'] == 'jpg' || $file['extension'] == 'JPG' || $file['extension'] == 'png' ) && !is_dir($ficheiro) ){
                 $count = $count + 1;
                   ?>

                <i class='img' data-src="./img-background/<?php echo $ficheiro; ?>" ></i>
                <?php
               }
            }
        }else{
            echo 'Não vejo nada!';
        }
      // echo 'files -> '.$count ;
        ?>

    </div>
    <!-- END OF Slideshow Background -->

    <!--BEGIN OF Static video bg  - uncomment below to use Video as Background-->
    <!--<div id="container" class="video-container show-for-medium-up">
        <video autoplay="autoplay" loop="loop" autobuffer="autobuffer" muted="muted"
               width="640" height="360">
            <source src="vid/flower_loop.mp4" type="video/mp4">
        </video>
    </div>-->
    <!--END OF Static video bg-->

    <!-- Solid color as background -->
    <!-- <div class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgb(59, 59, 59)"></div>-->

    <!-- Solid color as filter -->
    <div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(0, 0, 0, 0.41)"></div>

</div>
<!--END OF site Cover -->

<!-- Begin of timer pane -->
<div class="pane-when " id="s-when">
    <div class="content">
        <!-- Clock -->
        <div class="clock clock-countdown">
            <div class="site-config"
                 data-date="06/21/2017 12:55:00"
                 data-date-timezone="+0"
            ></div>
            <div class="elem-center">
                <div class="digit">
                    <span class="days">81</span>
                    <span class="txt">dias</span>

                </div>
            </div>
            <!-- Logo instead -->
            <!--
            <div class="logo">
                <a href="#">
                    <img src="img/logo_only.png">
                </a>
            </div>
            -->

            <div class="elem-bottom">
                <div class="deco">de Vida!</div>
                <span class="hours">18</span><span class="thin">H</span>
                <span class="minutes">45</span><span class="thin">MN</span>
                <span class="seconds">36</span><span class="thin">S</span>
            </div>
        </div>


        <footer>
           <!-- <p>O Nosso Mundo vai sacudir, <strong>vai abalar!</strong></p>-->
        </footer>
    </div>
</div>
<!-- End of timer pane -->

<!-- BEGIN OF site main content content here -->
<main class="page-main" id="mainpage">

    <!-- Begin of home page -->
    <div class="section page-home page page-cent" id="s-home">

        <!-- Logo -->
        <!--<div class="logo-container">
            <img class="h-logo" src="img/logo_only.png" alt="Logo">
        </div>-->
        <!-- Content -->
        <section class="content">
            <header class="header">
                <div class="h-left">
                    <h2><strong>Raquel & Pedro</strong></h2>
                </div>
                <div class="h-right">
                    <h3>Silva <br>de Sousa</h3>
                    <!-- <h4 class="subhead"><a href=""></a></h4> -->
                </div>
            </header>
        </section>
        <!-- Scroll down button -->
    </div>

</main>

<!-- END OF site main content content here -->

<!-- Begin of site footer -->
<footer class="page-footer">
    <div>

    </div>
</footer>
<!-- End of site footer -->

<audio id="musica" controls autoplay onended="nextAudioNode()">
    <source src="heart.mp3"/>
</audio>

<script src="./js/vendor/jquery-1.11.2.min.js"></script>
<script src="./js/vendor/all.js"></script>

<!-- Downcount JS -->
<script src="./js/jquery.downCount.js"></script>

<!-- Form script -->
<script src="./js/form_script.js"></script>

<!-- Javascript main files -->
<script src="./js/main.js"></script>


<?php
$dir = "/home/forge/mytwins.sytes.net/music/";
$musicas = array();
$count = 0;
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
if (!empty($scanned_directory)) {
    foreach ($scanned_directory as $key => $ficheiro) {
        $file_parts = pathinfo($ficheiro);
        if ($file_parts['extension'] == 'mp3') {
            array_push($musicas, $ficheiro);
            $count = $count + 1;
        }
    }
}

?>
<script type="text/javascript">
    var elements = new Array();
    <?php foreach ($musicas as $key => $musica){ ?>
    elements.push("<?php echo $musica; ?>");
    <?php } ?>
    var i;
    function nextAudioNode() {
        var element = document.getElementById('musica');
        i = Math.floor((Math.random() * <?php echo $count - 1; ?>) + 1);
        //alert(i);
        element.src = "music/" + elements[i];
        element.play();
    }
</script>

</body>
</html>
