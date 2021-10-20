
<?php 
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack-3</title>
  <style>
    .teachers {
      background-color: lightgray;
      padding: 1rem;
    }
    .pm {
      background-color: lightgreen;
      padding: 1rem;
    }
  </style>
</head>
<body>
  <main>
    <ul>
      <?php foreach( $db as $key => $elm ) { ?>
        <div class="<?= $key ?>">
          <ul>
            <?php foreach( $elm as $person ) { ?>
              <li>
                <?= "{$person["name"]} {$person["lastname"]}" ?>
              </li>
            <?php } ?>
          </ul>
        </div>
      <?php } ?>
    </ul>
  </main>
</body>
</html>