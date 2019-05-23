<?php
include('test.php');



$dir = 'img';


$pictures = [];
$d = opendir($dir);

while($fileName = readdir($d)) {
    if($fileName == '.' || $fileName == '..') continue;

    $pictures[] = 'img/' . $fileName;
};
closedir($d);



// $foto = scandir($dir);
// echo "<pre>";
// var_export($pictures);
// echo "<pre/>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .preview, .preview img {
            width: 275px;
            height: 300px;
            background-color: bisque;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .thumbnails {
            padding: 0;
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
        }

        .thumbnails li, .thumbnails img{
            width: 120px;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

    </style>

    <script>
    function init() {
        let $thumbnails = document.getElementById('thumbnails');
        $thumbnails.addEventListener('click', handleThumbnailsClick);
    }
      

        function handleThumbnailsClick(event) {
            event.preventDefault();
            if(event.target.tagName == 'IMG') {
               let $a = event.target.parentElement;
               let path = $a.href;

               let $image = document.createElement('img');
               $image.src = path;

               let $preview = document.getElementById('preview');
               $preview.innerHTML = '';
               $preview.appendChild($image);
            };
        };

        window.addEventListener('load', init);
    </script>
</head>
<body>
    <div id="preview" class="preview"></div>
    <ul id="thumbnails" class="thumbnails"> 

 
        <?php foreach($pictures as $Value):?>
            <li>
                <a href=<?=$Value?>>
                    <img src=<?=$Value?> width="100" alt="foto">
                </a>
            </li>
        <?php endforeach; ?>
    
    </ul>
    
</body>
</html>




