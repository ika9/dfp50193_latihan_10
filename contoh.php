<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:Arial,Helvetica,sans-serif;
        }
    </style>
</head>
<body>
    <h1>Contoh function</h1>

    <?php 
    $harga = 1.70;
    $berat = 2;
    $total = kira($harga,$berat);
    ?>
    <p>
        Harga sekilogram buah betik adalah <?php echo number_format($harga,2); ?>
        <br>
        untuk <?php echo $berat; ?>KG, total harga adalah
        RM <?php echo number_format($total,2); ?>
    </p>

    <p><a href="bmi.php">BMI</p>
</body>
</html>

<?php function kira($harga,$berat) {
    $total = $harga * $berat;
    return $total;
}