<?php
//NAME ARRAY
$a = [
    "Akalanka",
    "Akila",
    "Amarasekara",
    "Amarasiri",
    "Amaya",
    "Ameesha",
    "Ananda",
    "Anjalika",
    "Anuradha",
    "Aravinda",
    "Asanka",
    "Asha",
    "Ashan",
    "Ayodya",
    "Bandara",
    "Buddhika",
    "Chamara",
    "Chamari",
    "Chathura",
    "Chatura",
    "Damith",
    "Danushka",
    "Darshana",
    "Dasun",
    "Devika",
    "Dilan",
    "Dileepa",
    "Dilhani",
    "Dinusha",
    "Disna",
    "Dulani",
    "Dushantha",
    "Eranga",
    "Gayan",
    "Gayathri",
    "Geethika",
    "Haritha",
    "Harsha",
    "Hasini",
    "Imesh",
    "Indika",
    "Isuru",
    "Jayani",
    "Jayantha",
    "Kavindu",
    "Lakshan",
    "Lahiru",
    "Lasantha",
    "Madusha",
    "Maheshi",
    "Malith",
    "Malsha",
    "Manju",
    "Manori",
    "Nadeesha",
    "Nalaka",
    "Nandana",
    "Nirosha",
    "Nuwan",
    "Pabasara",
    "Pradeep",
    "Prasanna",
    "Praveen",
    "Priyadarshani",
    "Ramesh",
    "Ranga",
    "Renuka",
    "Ruwan",
    "Sachithra",
    "Saman",
    "Sandun",
    "Sanjaya",
    "Sanka",
    "Sanoja",
    "Sashika",
    "Senanayake",
    "Shamila",
    "Shashika",
    "Shehan",
    "Shihan",
    "Sunil",
    "Suranga",
    "Tharanga",
    "Udari",
    "Udayanga",
    "Upeksha",
    "Vidusha",
    "Viraj",
    "Vishwa",
    "Wasantha",
    "Yasas",
    "Yashodha",
    "milan"
];

// Print the array to verify
// print_r($a);



// get the search quary form the form
 $q = $_REQUEST["q"];

 $hint = "";

//  go throught a name array to find a match- as long as quary is not empty

if($q !== ""){
    $q = strtolower($q);
    $len= strlen($q);
    foreach($a as $name){
        if(stristr($q,substr($name, 0 , $len))){
            if($hint === ""){
                $hint = $name;
            }else{
                $hint.=",$name";
            }

        }
    }
}

// output the twxt "NO suggestion "if queary was not found.

echo $hint === " " ? "No Suggestion" :$hint;

?>