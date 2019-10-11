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

<?php
    $arrayatorio=[];
    $i=0;
    do {
        array_push($arrayatorio,rand(0,10));
        if($i==5){
            echo $i."<br>"."Encontramos um número 5!"."<br>";
            break;
        } else {
        echo $arrayatorio[$i]."<br>";
        $i++;
        }
    } while ($i<10);
    echo "<br>"."<br>";
?>

<?php
    $array=[];
    $i=0;
    foreach (range("a", "n") as $letter) {
        array_push($array,$letter);
        echo "Na posição ".$i." está o valor ".$array[$i]."<br>";
        $i++;
    }
    echo "<br>"."<br>";
?>

<?php
    $i=0;
    $mascote = [
        "Animal"=>"Tubarão",
        "Idade"=>50,
        "Altura"=>6,
        "Nome"=>"Jaws"
    ];
    foreach ($mascote as $dado=>$d_valor){
        echo $dado." = ".$d_valor."<br>";
        $i++;
    }
    echo "<br>"."<br>";
?>

<?php
    $ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo", "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen", "Finlândia"=>"Helsinki", "França" => "Paris", "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana", "Alemanha" => "Berlim", "Grécia" => "Atenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã", "Portugal"=>"Lisboa", "Espanha"=>"Madri", "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres", "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República Tcheca"=>"Praga", "Estônia"=>"Tallinn", "Hungria"=>"Budapeste", "Letônia"=>"Riga", "Malta"=>"Valletta", "Áustria" => "Viena", "Polônia"=>"Varsóvia"];
    foreach ($ceu as $pais=>$capital){
        echo "A Capital de ".$pais." é ".$capital."."."<br>";
    }
    echo "<br>"."<br>";
?>

<?php
    $ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
        "França" => ["Paris", "Nantes", "Lyon"],
        "Itália" => ["Roma", "Milão", "Veneza"],
        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];
    foreach ($ceu as $pais=>$cidades){
        echo "As cidades de ".$pais." são:"."<br>"."<br>";
        foreach ($cidades as $city){
          echo "<li>".$city."</li>"."<br>";
        }
    }
    echo "<br>"."<br>";
?>

<?php
    $paises = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé","naAmerica"],
        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo", "naAmerica"],
        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla", "naAmerica"],
        "França" => ["Paris", "Nantes", "Lyon"],
        "Itália" => ["Roma", "Milão", "Veneza"],
        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    ];
    foreach ($paises as $pais => $cidades) {
        echo "As cidades de ".$pais." que estão na América são:"."<br>"."<br>";
        foreach ($cidades as $city) {
            if("naAmerica"){
            echo "<li>".$city."</li>"."<br>";
            }
        }
      }
?>

