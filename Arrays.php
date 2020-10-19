<?php
    /*
    My Name is Sonawap
    Github: https://Github/Sonawap
    Here is my Array Files
    ==================   ARRAYS  ====================
    1)  Numeric Array
    2)  Associative Array
    3)  Multi-dimensional Array
    */


    //  *************** Numeric Arrays  ***************
    echo "<h1>Numeric Arrays</h1>";
    //array declaration
    $names = array("Sola", "Paul", "Moses", "Kayode", "Olu");

    // this will show the array with Keys and Value

    var_dump($names);

    echo "<br><br><br>";

    echo "The 1st item in our array is: ".$names[0]."<br/>";
    echo "The 2nd item in our array is: ".$names[1]."<br/>";
    echo "The 3rd item in our array is: ".$names[2]."<br/>";
    echo "The 4th item in our array is: ".$names[3]."<br/>";
    echo "The 5th item in our array is: ".$names[4]."<br/>";


    // This will Change the Value of the First Array

    $names[0] = 'Ajayi';

    echo "This is now the new Value of first array: ".$names[0];

    echo "<br><br><br>";




    //  *************** Associative Arrays  ***************
    echo "<h1>Associative Arrays</h1>";

    $password = array(
                        "$names[0]" => "paul",
                        "$names[1]" => "S",
                        "$names[2]" => 1234.5,
                        "$names[3]" => "sonawap"
                    );

    echo "$names[3]'s password is <strong>".$password["$names[3]"].$password["$names[2]"]."</strong>";

    echo "<br><br><br>";

    var_dump($password);





    //  *************** Multi-dimensional Arrays  ***************
    echo "<h1>Multi-dimensional Arrays</h1>";
    
    $interns = [
                ['Sonawap', 12, 'Web Development'],
                ['Toppy', 34, 'Graphic Design'],
                ['Lanre', 12, 'Mobile App']
    ];


    for ($row = 0; $row < 3; $row++) {
      echo "<p><b>Array Object $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$interns[$row][$col]."</li>";
      }
      echo "</ul>";
}

    


?>