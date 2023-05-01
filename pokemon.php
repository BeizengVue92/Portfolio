<?php include 'header.php'; ?>

<?php include 'nav.php'; ?>

<div class="container text-center">

  <h1>Pokémon Application</h1>

  <?php

  function sanitizeString($field)
  {
    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING);
  }

  $submitPressed = sanitizeString("go");

  $myForm = <<<MYFORM

  <form action="" method="post">

    <label for="name">Pokémon Name or ID:</label>
    <input type="text" id="pokeInput" name="pokeInput" placeholder="Pokémon Name or ID" required>
    <br>
    <input type="submit" name="go" id="go" value="Submit">

  </form>

MYFORM;


  if (!isset($submitPressed)) {
    // form was NOT submitted, so display form
    // display the form here
    echo $myForm;
  } else {


    $base = "http://pokeapi.co/api/v2/pokemon/";
    $id = strtolower(sanitizeString('pokeInput'));

    $data = file_get_contents($base . $id . '/');

      $pokemon = json_decode($data);
      $sprite = $pokemon->sprites->front_default;
      $types = $pokemon->types;

      ?>
      <div class="row">

        <div class="col">


          <div class="card" style="width: 18rem;">
            <img class="pokemon-sprite" src="<?= $sprite ?>" alt="<?= $pokemon->name ?> picture">
            <div class="card-body">
              <h5 class="card-title">
                <?= strtoupper($pokemon->name) ?>
              </h5>
              <?php
              foreach ($types as $slot) {

                ?>
                <p class='card-text'>Type:
                  <?= $slot->type->name ?>
                </p>
                <?php
              }
              ?>

            </div>

          </div>


        </div>

      </div>
      <button onclick="history.go(-1);" class="btn btn-info">Back </button>

      <?php
  }
  ?>

</div>

<?php include 'footer.php'; ?>