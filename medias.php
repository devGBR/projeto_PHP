<?php
    $resultados = [];

    $notas = array(
        [10.0, 9.5, 7.0, 5.0],
        [5.0, 5.5, 4.5, 5.0],
        [1.0, 3.5, 2.5, 1.0],
        [0.5, 0.1, 1.0, 2.4]
    );

    for ($i = 0; $i < count($notas); $i++) {
        $resultados[$i] = array_sum($notas[$i]);
    };

    for ($j = 0; $j < count($notas); $j++) {
        $temp = $resultados[$j] / 4;

        if ($temp > 7) {
            echo "Aluno: Aprovado\n";
        } else {
            echo "Aluno: Reprovado\n";
        }
    };

//  for($i = 0; $i < count($notas); $i++){
//   if($a > 7){
//       echo "aluno joão: Aprovado \n";
//   }else{
//       echo "João: Reprovado\n";
//   } 
//   if($b > 7){
//     echo "aluno thiago: Aprovado\n";
// }else{
//     echo "Thiago: Reprovado\n";
// }
// if($c > 7){
//     echo "aluno Wesley: Aprovado\n";
// }else{
//     echo "Wesley: Reprovado\n";
// }
// if($d > 7){
//     echo "aluno Renan: Aprovado\n";
// }else{
//     echo "Renan: Reprovado\n";
//  }

//  for ($i = 0; $i < count($notas); $i++){
//       print_r($notas[$i]);
      
//  }