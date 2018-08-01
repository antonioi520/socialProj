<?php
include './views/nav_logged.html.php';
$finame = $_GET['name'];
$filename = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$finame;
/* SplFileObject extends from SplFileInfo so you can use the same functions
 * from SplFileInfo with SplFileObject
 */
$file = new SplFileObject($filename, "r");
$contents = $file->fread($file->getSize());
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($filename);
//header('Content-Type: '.$mimeType);
//header('Content-Length: ' . $file->getSize());
//echo $contents;
/* Alternative without the above headers */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<div style="padding-left:5%;">
    <?php
    if ( $file->isFile() ) {
        echo 'File Name: '; echo $file->getFilename(); echo '<br />';
        echo 'Date Uploaded: '; echo (date("l F j, Y, g:i a", $file->getMTime())); echo '<br />';
        echo 'Size: '; echo $file->getSize(); echo ' bytes <br />';
        echo 'Path: '; echo $file->getPathname(); echo '<br />';
    }
    $b64 = base64_encode($contents);
    echo '<img src="data:'.$mimeType.';base64,'.$b64.'"/>';
    ?>
    <input type='submit' value='Delete' name='Delete'  />
</div>

</body>