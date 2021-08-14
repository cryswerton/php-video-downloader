<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Video Downloader</title>
</head>
<body>
    
    <?php

        $path_parts = pathinfo('./videos/Angel Wicky.mp4');

        // echo $path_parts['dirname'], "<br>";
        // echo $path_parts['basename'], "<br>";
        // echo $path_parts['extension'], "<br>";
        // echo $path_parts['filename'], "<br>";

        function makeLink($fileName){
            echo "<p><a href=\"./videos/{$fileName}\" download>{$fileName}</a></p>";
        }

        if ($handle = opendir('./videos')) {

            while (false !== ($entry = readdir($handle))) {
        
                if ($entry != "." && $entry != "..") {
        
                    makeLink($entry);
                }
            }
        
            closedir($handle);
        }
    ?>

</body>
</html>