<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['url'])) {
    $url = $_POST['url'];

    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="downloaded.pdf"');
    readfile($url);
}
?>
