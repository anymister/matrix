<!DOCTYPE html>
<html>
<body>

<?php
$file = 'keyboard.exe';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
    else {
    echo('<p>file dont exist</p>');
    }
?>

<p>This is a paragraph 234.</p>
<p>This is a paragraph.</p>
<p>This is a paragraph.</p>

</body>
</html>
