<?php
    include "phpqrcode/qrlib.php";

    $text = '';

    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $phn = $_POST['phno'];
        $add = $_POST['address'];

        $text = $name."\n".$phn."\n".$add;
        $path = "img/";
        $file = $path.$_POST['name'].'.png';

        QRcode::png($text, $file);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QR code</title>
</head>
<body>
    <center>
        <h1>PHP QR Code Generator</h1>
        <form method="post">
            <div>
                <label>Name : </label>
                <input type="text" name="name">
            </div>
            <br>
            <div>
                <label>Phone : </label>
                <input type="tel" id="phone" name="phno">
            </div>
            <br>
            <div>
                <label>Adress : </label>
                <textarea name="address" rows="6"></textarea>
            </div>
            <div>
                <button type="submit" name="save">Save</button>
            </div>
            <br>
            <br>
        </form>
        <div>
            <h1>Generated QR code</h1>
            <img src="img/<?= $_POST['name'].'.png' ?>">
        </div>
    </center>
</body>
</html>