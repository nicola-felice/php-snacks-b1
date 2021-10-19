
<?php 
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$todayMatches = [
  [
    "homeTeam" => "genova",
    "visitingTeam" => "milano",
    "homeTeamPoints" => 68,
    "visitingTeamPoints" => 45
  ],
  [
    "homeTeam" => "pordenone",
    "visitingTeam" => "torino",
    "homeTeamPoints" => 78,
    "visitingTeamPoints" => 25
  ],
  [
    "homeTeam" => "napoli",
    "visitingTeam" => "ancona",
    "homeTeamPoints" => 80,
    "visitingTeamPoints" => 40
  ],
  [
    "homeTeam" => "mantova",
    "visitingTeam" => "livorno",
    "homeTeamPoints" => 38,
    "visitingTeamPoints" => 63
  ]
];

foreach ( $today_matches as $elm ) {
  $homeTeam = $elm["homeTeam"];
  $visitingTeam = $elm["visitingTeam"];
  $homeTeamPoints = $elm["homeTeamPoints"];
  $visitingTeamPoints = $elm["visitingTeamPoints"];

  echo "{$homeTeam} - {$visitingTeam} | {$homeTeamPoints}-{$visitingTeamPoints} <br>";
}
?>