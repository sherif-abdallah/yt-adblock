<?php
$query = $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/demo.css" />
    <style>
        body{
            background-color: white;
        }

        #vid{
            width: 100%;
            height: 100%;

    
        }


        .plyr__video-embed iframe {
            top: -50%;
            height: 200%;
        }
        .plyr--full-ui.plyr--video .plyr__control--overlaid{
            background-color: red;
        }
        .plyr__controls .plyr__controls__item:first-child:hover{
            background-color: red;
        }
        .plyr--full-ui input[type=range]{
            color: red;
        }
        iframe button {
            background-color: red;
        }
    </style>
</head>
<body>

    <div style="border-radius: 0em; width: 100%; height: 100%;" class="plyr__video-embed" id="player">
        
        <iframe
          src=       <?php echo '"' . $query . "?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"  . '"' ;?>
          allowfullscreen
          allowtransparency
          allow="autoplay"
          title=""
        ></iframe>
      </div>

      <script src="https://cdn.plyr.io/3.6.8/demo.js" crossorigin="anonymous"></script>
</body>
</html>