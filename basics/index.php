<?php

declare(strict_types=1);

require_once 'Oop.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP Basics</title>
</head>

<body>
    <div class="container">
        <h1>
            <?php
            echo "PHP Basics";
            ?>
        </h1>
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <?php
                echo "PHP is awesome!!!!<br>";
                /**
                 * --------------------------------------------------------------------------
                 * Difference between `Keyword` & `Statement`
                 * --------------------------------------------------------------------------
                 * 
                 * Keyword : Reserved work that has a specific meaning within the langauge.
                 * ex : echo , print_r , else etc
                 * 
                 * Statement : Single line of code that performs an action.
                 *      Each statement generally contains a semicolon at the end of the line.
                 * ex : echo "Hello World !!!!";
                 * 
                 */

                $msg = "Laravel + React = Synergy";

                echo $msg . "<br>";
                /**
                 * ---------------------------------------------------------------------------
                 * Variables
                 * ---------------------------------------------------------------------------
                 * Variables are used to store and manipulate data.
                 * 
                 * Some key point to keep in mind : 
                 * 1. Variables are declared using a `$` (dollar sign).
                 * 2. Variables are case senstive.
                 * 3. PHP is a loosly typed programming language i.e we don't need to declare a data type while declaring variables
                 * 4. PHP dynamically detemine the data type based upon the data assigned to it.
                 * 
                 * Variable Scope : 3 different scope 
                 * 1. Local variable : Defined within a function and only accessible inside that function.
                 * 2. Global Variable : Defined outside a function and can be accessed throughout the script.
                 * 3. Static Variable : Can be accessed globally.
                 * 
                 * 
                 * Variable Interpolation : 
                 * 1. When using double-quotation ("") variable can ne included directly in the string.
                 *  $msg = "Hello";
                 *  echo "$msg world!!!";
                 * 
                 * Constants : Similar to variables but once declared value can't be changed.
                 * syntex : const PI = 3.14;
                 * 
                 * 
                 * While Declaring the variable keep in mind the following points : 
                 * 1. Be descriptive.
                 * 2. Use meaningful abbrivation
                 * 3. Avoid using single letter.(except in loops)
                 * 4. Be consistent.
                 * 5. Avoid using generic names.
                 * 
                 * 
                 */

                echo "Data Types";

                /**
                 * ------------------------------------------------------------------------------------
                 * Data Types
                 * ------------------------------------------------------------------------------------
                 * PHP has total 9 Data types
                 * 1. null : empty / nothing ex NULL 
                 * 2. boolean : true/false or 0/1 or TRUE/FALSE
                 * 3. int : whole number ex 1,24, 0, -2,-56 etc (can add underscore if require for visibilty i.e 5_000_000 --> 5000000)
                 * 4. float : numbers with decimals : ex 0.324, 123.45 , -45.234
                 * 5. string : 'Hello','My name is Tarun Chauhan'.
                 * 6. array : used for storing & manipulate collection of data.
                 *          6.1. Index Array : uses numeric indices to access the data.
                 *                  ex : $color = ['Red','Green'];
                 *                  echo $color[0];
                 *          6.2  Associative Array : uses named keys(number or values) to associate values.
                 *                  ex : $data = ["name" => "Tarun Chauhan", "Location" => "Remote"];
                 *                  echo $data["name"];
                 *          6.3. Multidimensional Array : array containing another arrays
                 *                  ex : $multi = [[1,2,3],[4,6,5],[3,4,2]];
                 *                  echo $multi[0][1] = 2;
                 *      Array Functions : PHP in-built function to work with arrays : 
                 *          1. count($array) : returns the number for elements in an array.
                 *          2. array_push($array, $data) : add a new element to the end of an array.
                 *          3. array_pop($array) : remove the last element from the array.
                 *          4. array_merge($array_1,$array_2) : merge two arrays into a new array.
                 *          5. array_keys($array) : returns all keys in the array.
                 *          6. array_values($array) : returns all the values of an array.
                 * 
                 *      Array iteration :  used to loop through the array
                 *          foreach($array as $values){
                 *                   echo "$values"; 
                 *              }
                 * 
                 *     Array Destructuring : assign array elements to individual variables 
                 *           [$a,$b,$c] = $colors;
                 *              echo $a;
                 *       
                 * 7. object : 
                 * 8. callable :
                 * 9. resource : 
                 * 
                 * var_dump : A inbuilt PHP function used to return the data & data type 
                 * 
                 * 
                 * 
                 * ------------------------------------------------------------------------------------------------------
                 * PHP Typecasting : process of changing the data type of an existing value into a different data type 
                 * ------------------------------------------------------------------------------------------------------
                 * 1. Implicit type casting : PHP automatically try to convert one or all operands to a common data type.
                 *                  ex : $a = 3; -> int type
                 *                       $b = 3.13; -> float type
                 *                  echo $a + $b = 6.13 -> result is float  
                 * 
                 * 2. Explicit type casting : we can explicitly cast a specif data type to required data type.
                 *                  ex : $a = 3.14;
                 *                  echo (int)$a --> 3 i.e float to int
                 *                  set_type($a, 'int'); -> can also use this
                 * 
                 * 
                 * -----------------------------------------------------------------------------------------------------------------
                 * Type Juggling/type coercion  : automatically conversion of one data type to another during a certain operation.
                 * -----------------------------------------------------------------------------------------------------------------
                 * 
                 * ------------------------------------------------------------------------------------------------------------------
                 * Error Control Operator '@' : used to suppress error messages generated by the expressions 
                 * ------------------------------------------------------------------------------------------------------------------
                 * 
                 * ------------------------------------------------------------------------------------------------------------------
                 * Operator Precedence : which operator will have highest priority while execution
                 * ------------------------------------------------------------------------------------------------------------------
                 * 
                 * 
                 */

                echo "<br>Expressions<br>";
                /**
                 * --------------------------------------------------------------------------------------------------------------------
                 * Expresion : Line of code that evaluates to a value.
                 * --------------------------------------------------------------------------------------------------------------------
                 * 
                 * --------------------------------------------------------------------------------------------------------------------
                 * Control Structure : Used to manage the flow of the code exection
                 * --------------------------------------------------------------------------------------------------------------------
                 * 1. if-else / if -ifelse-else
                 *      if(expression){ // PHP will use type juggling and convert the `expression` to booleana.
                 *          DO SOMETHING
                 *      }else {
                 *          DO SOMETHING
                 *      }     
                 * 2. switch 
                 *      switch(expression){
                 *          case value_1:
                 *                  DO SOMETHING
                 *          break;
                 *          case value-2:
                 *                  DO SOMETHING
                 *          break;
                 *          default;
                 *                  DEFAULT ACTION
                 *          break;
                 *       }
                 * 3. while : 
                 *        while(expression){
                 *              DO SOMETHING
                 *          }
                 * 
                 * 4. for : 
                 *      for(init; condition;increment/decrement){
                 *          DO SOMETHING
                 *      }
                 * 
                 * 5. foreach : 
                 *         foreach($array as $value){
                 *              DO SOMETHING      
                 *          } 
                 * 
                 * 6. Break & continue : 
                 *    for($i = 0; $i <10 ; $i ++){
                 *              if($i == 5){
                 *                  break; // terminates the loop and code won't execute anymore
                 *                  continue; // skips the current loop and executes the next code
                 *              }
                 *      }  
                 * 
                 * 
                 */

                echo "Match Expressions";

                /**
                 * 
                 * ---------------------------------------------------------------------------------------------------------
                 * Match Expression : Intoduced in PHP 8 , similar to 'switch' statement but with more expresive syntex
                 * ---------------------------------------------------------------------------------------------------------
                 * 
                 * $data = match($value){
                 *          'value_1' => 'DO SOMETHING',
                 *          'value_2','value_3' => 'DO SOMETHING',
                 *          'value_4' => {
                 *                  DO SOMETHING
                 *                  CODE BLOCK
                 *          },
                 *          default => 'DEFAULT ACTION',
                 *      };
                 * 
                 * 
                 * 
                 * 
                 */


                $objOop = new Oop();

                /**
                 * 
                 * PSR :  
                 * 
                 * 
                 * 
                 * 
                 * 
                 */

                ?>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>