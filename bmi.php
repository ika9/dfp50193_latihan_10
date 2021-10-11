<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>BMI</h1>

    <?php 
    $berat = 60;
    $tinggi = 1.6;
    $total = bmi($berat,$tinggi);
    ?>

     <table>
        <tr>
         <td> Berat :</td>
         <td> <?php echo $berat; ?> kilogram</td>
        </tr>
        <tr>
         <td> Tinggi :</td>
         <td><?php echo $tinggi; ?> meter</td>
        </tr>
        <tr>
         <td> BMI :</td>
         <td><?php echo $total; ?></td>
        </tr>
    </table>
</body>
</html>

<?php 
function bmi($berat,$tinggi) {
    $total = $berat / ($tinggi * $tinggi);
    return $total;
}