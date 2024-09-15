<?php

function findJouetById($jouets, $id)
{
    foreach ($jouets as $jouet) {
        if ($jouet['id'] == $id) {
            return $jouet;
        }
    }
    return null;
}
?>
<?php

function findAccessoireById($accessoires, $id)
{
    foreach ($accessoires as $accessoire) {
        if ($accessoire['id'] == $id) {
            return $accessoire;
        }
    }
    return null;
}
?>
<?php

function findNourritureById($nourritures, $id)
{
    foreach ($nourritures as $nourriture) {
        if ($nourriture['id'] == $id) {
            return $nourriture;
        }
    }
    return null;
}
?>