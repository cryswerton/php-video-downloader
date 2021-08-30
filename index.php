<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Video Downloader</title>
</head>
<body>
    
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

</body>
</html>