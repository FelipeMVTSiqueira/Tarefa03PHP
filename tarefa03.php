<?php
    for($i=0;$i<=rand(1,100);$i++){
        echo $i."<br>";
    } echo "<br>"."<br>";
?>

<?php 
    for($io=0;$io<=10;$io++){
        echo "2 x ".$io." = ".(2*$io)."<br>";
    } echo "<br>"."<br>";
?>




<?php
    $qntCara = 0;
    $qntLancamento = 0;
    while ($qntCara < 5) {
        $moeda = rand(0,1);
        $qntLancamento ++;
        if ($moeda == 1){
            $qntCara++;
            echo "Cara"."<br>"."<br>";
        }
        else {
            $qntCara;
            echo "Coroa"."<br>"."<br>";
            }
        } echo "Levaram ".$qntLancamento." lançamentos!"."<br>"."<br>";
?>

<?php
    $qntCara = 0;
    $qntLancamento = 0;
    do {
        $moeda=rand(0,1);
        $qntLancamento++;
        if ($moeda==1){
            $qntCara++;
            echo "Cara"."<br>"."<br>";
        } else echo "Coroa"."<br>"."<br>";
    } while ($qntCara<5);
    echo "Levaram ".$qntLancamento." lançamentos!"."<br>"."<br>";
?>

<?php
    $nomes=["Luiz","Maria","Gabriel","Felipe","Victoria"];
    for ($i=0;$i<count($nomes);$i++){
        echo $nomes[$i]."<br>";
    }
    echo "<br>"."<br>";
?>

<?php
    $nomes=["Luiz","Maria","Gabriel","Felipe","Victoria"];
    foreach($nomes as $nome){
        echo "$nome"."<br>";
    }
    echo "<br>"."<br>";
?>

<?php
    $nomes=["Luiz","Maria","Gabriel","Felipe","Victoria"];
    $i=0;
    while ($i<count($nomes)){
        echo $nomes[$i]."<br>";
        $i++;
    }
    echo "<br>"."<br>";
?>

<?php
    $nomes=["Luiz","Maria","Gabriel","Felipe","Victoria"];
    $i=0;
    do {
        echo $nomes[$i]."<br>";
        $i++;
    } while ($i<count($nomes));
    echo "<br>"."<br>";
?>

<?php
    $arrayatorio=[];
    for($i=0;$i<10;$i++){
        array_push($arrayatorio,rand(0,10));
        echo $arrayatorio[$i]."<br>";
        if($arrayatorio[$i]==5){
            echo "Encontramos um número 5!";
            break;
        }
    }
    echo "<br>"."<br>";
?>

<?php 
    $arrayatorio=[];
    $i=0;
    while ($i<10){
        array_push($arrayatorio,rand(0,10));
        if($i==5){
            echo $i."<br>"."Encontramos um número 5!"."<br>";
            break;
        } else {
        echo $arrayatorio[$i]."<br>";
        $i++;
        }
    }
    echo "<br>"."<br>";
?>