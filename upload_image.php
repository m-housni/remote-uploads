<?php
    if(isset($_POST['img_url']))
    {
        $url=$_POST['img_url'];
        $data = file_get_contents($url);
        $img = 'images/1.jpg';
        file_put_contents($img, $data);
        echo "Image successfully uploaded";
    }
    else
        echo "No image submitted";
?>