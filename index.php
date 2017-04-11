<!doctype html>

<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

</head>
<body>
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<audio id="musica" controls autoplay onended="nextAudioNode()">
    <source src="music/desce.mp3"/>
</audio>

<script src="./js/vendor/jquery-1.11.2.min.js"></script>
<script src="./js/vendor/all.js"></script>
<script src="./js/form_script.js"></script>


<?php
$dir = "/home/forge/mytwins.sytes.net/music/";
//$ficheiros = scandir($dir);
//if(!empty($ficheiros)){
$scanned_directory = array_diff(scandir($dir), array('..', '.')); ?>

<script type="text/javascript">
    var elements = new Array();
    <?php
        foreach ($scanned_directory as $key => $ficheiro) { ?>
            elements.push(" <?php echo $ficheiro; ?> ");
    <?php } ?>

    function nextAudioNode() {
        alert(elements);
        var element = document.getElementById('musica');
        element.src = "music/shape_of_you.mp3";
        element.play();
    }
</script>
<?
//   }
?>

</body>
</html>
