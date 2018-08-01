<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<?php
// http://php.net/manual/en/class.directoryiterator.php
//DIRECTORY_SEPARATOR
require_once './autoload.php';

$folder = './uploads';
if ( !is_dir($folder) ) {
    die('Folder <strong>' . $folder . '</strong> does not exist' );
}
$directory = new DirectoryIterator($folder);

?>
<?php
include './views/nav_logged.html.php';
?>

<div class="col-md-3"></div>
<div class="col-md-6">

    <table class="table table-bordered">
        <?php foreach ($directory as $fileInfo) : ?>
            <?php if ( $fileInfo->isFile() ) : ?>
                <tr>
                    <td><?php echo $fileInfo->getFilename(); ?></td>
                    <!--            <p>uploaded on <?php //echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <p>This file is <?php //echo $fileInfo->getSize(); ?> byte's</p>
                <img src="<?php //echo $fileInfo->getPathname(); ?>" />-->
                    <td><a href="file-reader.php?name=<?php echo $fileInfo->getFilename(); ?>">Details</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>

            <?php endif; ?>
        <?php endforeach; ?>
    </table>

</div>


</body>
</html>