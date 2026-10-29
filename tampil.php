<?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $jurursan = $_POST["jurusan"];
    $minat = $_POST["minat"];
    $alamat = $_POST["alamat"];

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styletampil.css" rel="stylesheet" type="text/html">
</head>
        </head>
        <body>
            <style>
                body {
                    background-color: #1e293b;
                    color: #fff;
                    text-align: center;

                }
                table {
                    margin: 0 auto;
                    border-collapse: collapse;
                    background-color: #fff;
                    height: fit-content;
                    color: aqua;
                }
            </style>
            <table>
            <h2>hasil input from</h2>
            <p>nama : <?=$nama?> </p>
            <p>email : <?=$email?> </p>
            <p>gender : <?=$gender?> </p>
            <p>jurursan : <?=$jurursan?> </p>
            <p>minat : <?=$minat?> </p>
            <p>alamat : <?=$alamat?> </p>
                </table>
        </body>
</html>