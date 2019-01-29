<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "he_cac_doi_tuong_hinh_hoc.php";
$circle = new Circle('Circle 01', 3);
echo 'Circle area '. $circle->caculeteAtea() . '<br>';
$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->caculeteAtea() . '<br>';
echo 'Cylinder perimeter ' . $cylinder->caculatePerimetter() . '<br>';
$rectangle = new Retangle('Rectangle 01', 3, 4);
echo 'rectangle Area: ' . $rectangle->caculateArea() . '<br>';
echo 'Rectang Perimeter ' . $rectangle->caculatePerimetter() . '<br>';
?>
</body>
</html>