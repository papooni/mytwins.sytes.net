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

<audio id="musica" controls autoplay onended="nextAudioNode()" >
   <source src="music/heart.mp3"/>
</audio>

<script src="./js/vendor/jquery-1.11.2.min.js"></script>
<script src="./js/vendor/all.js"></script>
<script src="./js/form_script.js"></script>


<?php
$dir = "/home/forge/mytwins.sytes.net/music/";
$musicas = array();
$count = 0;
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
if(!empty($scanned_directory)) {
    foreach ($scanned_directory as $key => $ficheiro) {
        $file_parts = pathinfo($ficheiro);
        if ($file_parts['extension'] == 'mp3') {
            array_push($musicas,$ficheiro);
            $count = $count + 1;
        }
    }
}

?>
<script type="text/javascript">
    var elements = new Array();
    <?php foreach ($musicas as $key => $musica){ ?>
    elements.push("<?php echo $musica; ?>") ;
    <?php } ?>
    var i;
    function nextAudioNode() {
        var element = document.getElementById('musica');
        i = Math.floor((Math.random() * <?php echo $count; ?>) + 1);
        alert(i);
        element.src = "music/" + elements[i];
        element.play();
    }
</script>

</body>
</html>
