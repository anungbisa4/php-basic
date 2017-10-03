<html>
   <head>
      <title>Online PHP Script Execution</title>
   </head>

   <body>

      <?php
        //  echo "<h1>Hello, PHP!</h1>";
        $b="Halo halo bandung";
        // $c="0000";
        // $d=0000;
        // echo $b;
        // var_dump($d);
        // var_dump($c);die();
        // var_dump($b);
        // for($i=0;$i<=10;$i++)
        // {
        //   echo $b."<br>";
        // }
        for($i=0;$i<=10;$i++)
        {
          if($i%2 == 0){
            echo $i.".".$b."<br>";
          }
          else{
            echo $i.". ini bilangan ganjil"."<br>";
          }
        }
      ?>

   </body>
</html>
