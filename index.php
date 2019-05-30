<?php
require('db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <title>Hello, world!</title>

    

  </head>
  <body>
  <div id="thumbnails" class="thumbnails">

    <?php foreach ($result as $img): ?>

    <a href="<?=$img['href']?>" ><img src="<?=$img['href']?>" id="<?=$img['id']?>" alt=""></a>
    <?php endforeach ?>
  </div>
   

 <script>
    function init() {
        let $thumbnails = document.getElementById('thumbnails');
        $thumbnails.addEventListener('click', handleThumbnailsClick);
    }
      

        function handleThumbnailsClick(event) {
            // event.preventDefault();
            let eventId = event.target.id;
          
             <?php
             $mysqli2 = mysqli_connect('localhost','root','','geekbrains');

             $sql = "UPDATE geekbrains.galery SET pop = (pop + 1) WHERE galery.id = eventId";

             $query = mysqli_query($mysqli2, $sql);

             mysqli_close($mysqli2);
             ?>

        };

        window.addEventListener('load', init);
    </script>
 
  </body>
</html>
