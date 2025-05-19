<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // This header tells browser that content has already expired and should not be cached
    header ('Last-Modified: ' . gmdate('D, d M Y H:i:s').'GMT'); // indicating when content was last changed
    header ('Cache-Control: no-store, no cache, must-revalidate'); // cache-control header to prevent caching tells browser
    // not to store content, not to cache it, and always validate with server before using content 
    header('Cache-Control: post-check=0, pre-check=0', false); // additional cache-control directive
    header('Pragma: no-cache'); // pragma header, older way to prevent caching 
    header('Location: ../'); // Location header tells browser to navigate to new URL
    exit; // to terminate current script
    ?>
</body>
</html>