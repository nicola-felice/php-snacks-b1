<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. 
// Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
// Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
  [
    "name" => "marco",
    "lastname" => "bianchi",
    "grades" => [7,4,8,6,7,7,6]
  ],
  [
    "name" => "mario",
    "lastname" => "rossi",
    "grades" => [7,8,9]
  ],
  [
    "name" => "paolo",
    "lastname" => "verdi",
    "grades" => [5,6,4,8,5,6,4]
  ]
];

function getAverageGrades($arr) {
  $sum = 0;
  foreach ( $arr as $grade ) {
    $sum += $grade;
  }
  $averageGrades = $sum / count($arr);
  return number_format($averageGrades, 1, '.', '');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-7</title>
</head>
<body>
  <main>
    <ul>
      <?php foreach ( $students as $student ): ?>
        <li>
          <div>nome: <?= "{$student["name"]}" ?></div>
          <div>cognome: <?= "{$student["lastname"]}" ?></div>
          <div>media voti: <?php echo getAverageGrades($student["grades"]) ?></div>
        </li>
      <?php endforeach; ?>      
    </ul>
  </main>
</body>
</html>