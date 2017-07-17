<html>
<head>
<title>Contoh Pemakaian variabel</title>
</head>
<body>
<?php
$program['web'] = "PHP Bertype"; // associative cthay
$a_index[0] = "array index";
$cth['contoh'][0] = "Belajar PHP <br>";
$cth['contoh'][1] = "Mudah dan Menyenangkan";
// Type assosiatif dan indexed (Multidimensi)
echo"$program[web] $a_index[0] <br>";
echo"{$cth[contoh][0]}{$cth[contoh][1]} " ; ?>
</body>
</html>
