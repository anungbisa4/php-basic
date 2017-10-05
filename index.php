<html>
   <head>
      <title>Online PHP Script Execution</title>
   </head>

   <body>

      <?php
        //  echo "<h1>Hello, PHP!</h1>";
        //
        // $c="0000";
        // $d=0000;
        // echo $b;NACCI

        // var_dump($d);
        // var_dump($c);die();
        // var_dump($b);
        // for ($i=0;$i<=10;$i++) {
        //     echo $b."<br>";
        // }
        // $b="Halo halo bandung";
        // for ($i=0;$i<=10;$i++) {
        //     if ($i%2 == 0) {
        //         echo $i.".".$b."<br>";
        //     } else {
        //         echo $i.". ini bilangan ganjil"."<br>";
        //     }
        // }

        // FIBONACCI


$x = 0;
$a = 1;
$b = 0;

echo "Angka Maksimal 100 :  <br>";
echo "Deret angka Fibonacci : " .$b." , ".$a;
do {
    echo " , ";
    $f=$a+$b;
    echo $f;
    $b= $a;
    $a=$f;
    $x++;
} while ($a+$b<= 100);


        ?>


   </body>
</html>
