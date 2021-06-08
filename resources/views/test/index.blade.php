<?php
    echo "mensaje desde php <br>";
    print_r("segundo mensaje<br>");
    //return "ultimo mensaje";
    $num1=8;
    $num2=5;

    $suma=$num1+$num2;
    echo $suma."<br>";
    $nom="Adrian ";
    $ap="CasVal";
    $hola="hola";

    $saludo=$nom." ".$ap." ".$hola;
    echo $saludo."<br>";

    $saludo2="{$saludo}, como estas??";
    echo $saludo2."<br>";

    $edad=23;
    if ($edad>=18)
        echo "mayor de edad"."<br>";
    else
        echo "menor de edad"."<br>";

    for ($i=1;$i<5;$i++)
        echo $i."<br>";
    echo "tabla<br>";
    $num_tab=2;

    for ($j=1;$j<11;$j++)
        echo $j."*2=".$num_tab*$j."<br>";
