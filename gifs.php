<?php

$gifs = glob('*.gif');
$jpg = glob('*.jpg');

$all = array_merge( $jpg, $gifs );

foreach ($all as $img) {
    ?>
    <a href="/<?php echo $img; ?>"><?php echo $img; ?></a><br /><br />
    <?php
}
