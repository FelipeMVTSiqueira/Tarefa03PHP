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
?>