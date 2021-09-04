<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Video Downloader</title>
</head>
<body class="container">

    <header class="my-5">

        <h1>PHP Video Downloader</h1>

    </header>

    <div class="content my-5">

        <div id="home">

            <?php

                function makeLink($fileName){
                    echo "<p><a href=\"./videos2/{$fileName}\" download>{$fileName}</a></p>";
                }

                if ($handle = opendir('./videos2')) {

                    while (false !== ($entry = readdir($handle))) {
                
                        if ($entry != "." && $entry != ".." && $entry != ".htaccess" && $entry != "info.txt") {
                
                            makeLink($entry);
                        }
                    }
                
                    closedir($handle);
                }
            ?>

        </div>

    </div>

</body>
</html>