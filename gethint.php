<?php
// Array with names
$a[] = "Golden Carrot";
$a[] = "Golden Apple";
$a[] = "Enchanted Golden Apple";
$a[] = "Steak";
$a[] = "Cooked Pork";
$a[] = "Cooked Mutton";
$a[] = "Cooked Salmon";
$a[] = "Cooked Fish";
$a[] = "Spider eye";
$a[] = "Cooked Chicken";
$a[] = "Cooked Rabbit";
$a[] = "Rabbit Stew";
$a[] = "Mushroom Stew";
$a[] = "Bread";
$a[] = "Carrot";
$a[] = "Baked Potato";
$a[] = "Beetroot";
$a[] = "Beetroot Juice";
$a[] = "Dried Kelp";
$a[] = "Pumpkin pie";
$a[] = "Apple";
$a[] = "Raw Beef";
$a[] = "Raw Porkchop";
$a[] = "Raw Mutton";
$a[] = "Raw Chicken";
$a[] = "Raw Rabbit";
$a[] = "Poisonous Potato";
$a[] = "Chorus Fruit";
$a[] = "Cake";
$a[] = "Cookie";
$a[] = "Rotten Flesh";
$a[] = "Raw Fish";
$a[] = "Clown Fish";
$a[] = "Pufferfish";
$a[] = "Raw Salmon";





// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "<a style='color: red;text-decoration: underline'>no suggestion</a>" : $hint;
?>
