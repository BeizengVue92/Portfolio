<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>

<div class="container text-center">

  <h1>Pig Latin Generator</h1>

</div>
      

    
    
    <?php

      function sanitizeString($field) {
        return filter_input(INPUT_GET, $field, FILTER_SANITIZE_STRING);
      }

      $submitPressed = sanitizeString('go');
  
      if (!isset($submitPressed)) {

        $formOut = <<<FORM
    <form action="$_SERVER[PHP_SELF]" method="get">
      <textarea name="inputString" rows="20" cols="40"></textarea>
      <br>
      <input type="submit" name="go" value="Pigify">
    </form>
                      
FORM;

        echo $formOut;
      } else { // else form has been submitted

        // Get the input string and check to see if it contains characters
        $inputData = sanitizeString('inputString');

        if ($inputData) {


          $newPhrase = "";

          // Ensure the input string is all lowercase
          $str = strtolower($inputData);

          //echo "<h3>$inputData</h3>";
          //echo "<h3>$str</h3>";

          // break the input string up into individual words
          $wordList = explode(" ", $str);

          //print_r($wordList);
      
          // for each individual word, perform the following tasks
          foreach ($wordList as $word) {

            // Strip out all non-letter characters - hint (".,;:'\"? \t\n-()_0..9")
            //$word = trim($word, ".,;:'\"? \t\n-()_0..9");

            // Use a regular expression pattern (everything between the //'s)
            // to find any character in $word that is NOT a letter and replace
            // it with nothing -> delete.
            //
            // ^ inside []'s (character set) means top before you hit this
            // character effectively telling the regular expression to "delete"
            // all but the type of charcters in the pattern.
            $word = preg_replace("/[^a-z]/i", "", $word,);

            // echo "<p>$word</p>\n";

            // Check to see if the word has any character's remaining
            if ($word) {

              // Break up the word into first letter and rest of word
              $firstLetter = substr($word, 0, 1);
              $restOfWord = substr($word, 1);


              // if the word still has characters perform the following tasks
        
              // if first letter is a vowel, leave it in place
              // and append "way" to the end of the word
              // else move the first letter to the end of the word
              // and append "ay"
              if (strstr("aeiou", $firstLetter)) {

                // first leter is a vowel (a, e, i, o, or u)
                $newWord = $word ."way";

              } else {

                // first leter is a constant
                $newWord = $restOfWord . $firstLetter . "ay";

              }
      
              // append the newly created pig Latin word to an output line
              $newPhrase .= $newWord . " ";

            }
        
          } // end foreach word

          // output translated pig Latin phrase in the following output line	
          echo "<h3 style=\"color:yellow;background-color:navy\">$inputData "
                  . "translated into Pig Latin: $newPhrase</h3>\n";


        } else {
          // If the input string was initially blank output the following line
          echo "<h3 style=\"color:yellow;background-color:navy\">Why you no enter text?</h3>";
        }
              
      } // end if form has been submitted
      ?> 
<?php include 'footer.php'; ?>