<?php
include 'layout/header.php';
?>
<?php

$color='';
if ($_GET){
    $color=($_GET['color']);
}else { $color = 'white';}
?>

<style>
    body { 
        background-color: <?php echo $color ?>;;
     
        
    }
</style>
<body>
    <div class=">
    <?php
$dir = 'pictures/';
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \'', $dir, '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
        $file_type = strtolower(end(explode('.', $file)));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
            echo '<img src="', $dir, '/', $file, '" alt="', $file, '" />';
        }
    }
}
?>

    </div>
    
</body>
</html>