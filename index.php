<?php

function random_pic()
{
    $files = glob('*.gif');
    $file = array_rand($files);
    return $files[$file];
}

?>
<html>
<body>
<img src="https://gifs.travisnorthcutt.com/<?php echo random_pic(); ?>" />
</body>
</html>
