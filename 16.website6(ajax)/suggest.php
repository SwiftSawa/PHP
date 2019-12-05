<?php
    $people[] = "Anna";
    $people[] = "Brittany";
    $people[] = "Cinderella";
    $people[] = "Diana";
    $people[] = "Eva";
    $people[] = "Fiona";
    $people[] = "Gunda";
    $people[] = "Hege";
    $people[] = "Inga";
    $people[] = "Johanna";
    $people[] = "Kitty";
    $people[] = "Linda";
    $people[] = "Nina";
    $people[] = "Ophelia";
    $people[] = "Petunia";
    $people[] = "Amanda";
    $people[] = "Raquel";
    $people[] = "Cindy";
    $people[] = "Doris";
    $people[] = "Eve";
    $people[] = "Evita";
    $people[] = "Sunniva";
    $people[] = "Tove";
    $people[] = "Unni";
    $people[] = "Violet";
    $people[] = "Liza";
    $people[] = "Elizabeth";
    $people[] = "Ellen";
    $people[] = "Wenche";
    $people[] = "Vicky";
    $people[] = "Gurswag";
    $people[] = "Swag";
    $people[] = "Dael";
    $people[] = "Ohho";
    $people[] = "Pulkit";
    $people[] = "Saare Bolo Manni Chu";

    $q= $_GET['q'];
    $suggestions= '';

    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
        foreach($people as $person) {
          if (stristr($q, substr($person, 0, $len))) { 
            // stristr it will find first occurence of q inside the person
            // substr using this to match exact number of elements of q and person
            if ($suggestions === "") {
              $suggestions = $person;
            } else {
              $suggestions .= ", $person";  
              // if we matches some one and we want to add to it, this is to add
            }
          }
        }
    }
    echo $suggestions === "" ? "No suggestion" : $suggestions;
?>