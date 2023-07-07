<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filename = $_POST['filename'];
        $filedata = $_POST['filedata'];

        // Create the file
        $file = fopen($filename, 'w');
        fwrite($file, $filedata);
        fclose($file);

        echo 'File created successfully.';
    }
?>
