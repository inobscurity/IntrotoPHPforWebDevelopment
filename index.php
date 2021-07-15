<?php include("variables.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php include("navbar.php"); ?>
    <br />
    <center>
        <h1></h1>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to <?php echo $company_name ?></h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
            <?php


            



/*

            $stuff = "David Weekes is a freaky-deaky freakazoid! ";
            echo $stuff . "<br/>";
            $freakazoid = "freakazoid";
            $goddamn_guru = "goddamn Guru";

            $stuff = str_replace($freakazoid, $goddamn_guru, $stuff);
            echo $stuff . "<br/>";


            echo strtoupper($stuff) . "<br/>";
            echo ucwords($stuff) . "<br/>";
            echo ucfirst($stuff) . "<br/>";
            echo strtoupper($stuff) . "<br/>";
            echo lcfirst($stuff) . "<br/>";
            echo strtolower($stuff) . "<br/>";
            echo strlen($stuff) . "<br/>";
            echo str_shuffle($stuff) . "<br/>";
            echo str_repeat($stuff, 3) . "<br/>";


            echo date("Y")."<br/>";
            echo date("y")."<br/>";
            date_default_timezone_set("Australia/Brisbane");
            echo date("g:i A")." on ".date("l jS \of F, Y")."<br/>";

            $today_is = date("l");
            echo "Today is " . $today_is;
            echo "<br/>";
            $year_is = date("Y");
            echo "Copyright (c) " . $year_is . " - All Rights Reserved.";



            $number_to_guess = mt_rand(1,10);
            $number_guessed = mt_rand(1,10);
            echo "Your guess: " . $number_guessed . "<br/>";
            if($number_guessed == $number_to_guess) {
                
                echo "You guessed it!";
            } else {
                echo "Sorry... Guess again...<br/>";
                echo "I was thinking of $number_to_guess";
            }






            $our_names = array("David","Orla","Holliday","Sara");
            $rando = mt_rand(0,3);
            echo $our_names[$rando] . "<br/>";

            
           // echo mt_rand(0,100);

            $random_numbers = array();

            for($counter = 0; $counter <10; $counter++) {
                $random_numbers[$counter] = mt_rand(0,100);
                echo $random_numbers[$counter] . "<br/>";
            }


            


            function helloThere($parameter, $parameter2){
                echo "Hello... There... ". $parameter . " and " . $parameter2;
            }

            helloThere("Sara", "David");


            function anotherFunction($parameter, $parameter2){
                $end_of_greeting = "<br/> It's been " . $parameter - $parameter2 . " years...";
                return $end_of_greeting;
            }

            $last_line = anotherFunction(2021, 2002);

            echo $last_line;









            $last_names = array("Weekes", "Weekes", "Weekes", "none", "Gunn");
            $her_name = "Sara";
            $first_names = array("David", "Orla", "Holliday", 47, $her_name);    //, $last_names);


            $counter = 0;
            while($counter < 5){
                echo $first_names[$counter] . "<br/>";
                $counter++;
            }

            for ($counter = 0; $counter < 5; $counter++){
                echo $first_names[$counter] . "<br/>";
            }

            foreach ($first_names as $index_value){
                echo $index_value . "<br/>";
            }



 
            $x = 0;
            for ($x = 0; $x <= 10; $x++) {
                 echo "The number is: $x <br>";
            }

            $count = 0;
            for ($count = 0; $count <= 5; $count++) {
                echo "The count is: $count<br />";
            }

            $counter = 0;
            while($counter < 5){
                //$counter++; //here adds before code so 1 to 5 in this case
                echo "The count is: " . $counter . "<br />";
                $counter++; //here adds after code so 0 to 4 in this case
            }


            $counter = 0;
            do {
                //$counter++; //here adds before code so 1 to 5 in this case
                echo "The count is: " . $counter . "<br />";
                $counter++; //here adds after code so 0 to 4 in this case
            } while($counter < 5)

            

          


            $fav_pizza = array(
                "David" => "Supreme",
                "Orla" => "Cheese",
            );

            echo "David's favourite pizza is " . $fav_pizza["David"].".";
            echo "<br />";
            echo "Orla's favourite pizza is " . $fav_pizza["Orla"].".";





            $last_names = array("Weekes", "Weekes", "Weekes", "none", "Gunn");
            $her_name = "Sara";
            $first_names = array("David", "Orla", "Holliday", 47, $her_name, $last_names);

            echo $first_names[0];
            echo "<br />";
            echo $first_names[1];
            echo "<br />";
            echo $first_names[2];
            echo "<br />";
            echo $first_names[3];
            echo "<br />";
            echo ++$first_names[3];
            echo "<br />";
            echo $first_names[3];
            echo "<br />";
            echo $first_names[4];
            echo "<br />";
            echo $first_names[4] . " " . $first_names[5][4];
            echo "<br />";
            echo "<br />";
            echo count($first_names);
            echo "<br />";
            echo "<br />";
            echo $first_names[count($first_names)-2];



            $num_1 = 10;
            $num_2 = 10;

            if($num_1 > 10){
                echo $num_1 . " is greater than 10.";
            } elseif ($num_1 == $num_2) {
                echo $num_1 . " is equal to 10.";
            } else {
                echo $num_1 . " is smaller than 10";
            }




            //$first_name = "David";
            $first_name = "Pete";
            $last_name = "Weekes";
            $num_1 = 41;
            $num_2 = 4;

            if($first_name == "David"){
                echo "It's " . $first_name . "!";
            } else {
                echo "Where's David, " . $first_name . "?";
            }

            echo "<br/>";

            if($num_1 > $num_2){
                echo $num_1 . " is greater than " . $num_2;
            } else {
                echo $num_1 . " is smaller than " . $num_2;
            }


            echo "...and then she said, \"You're ugly!\""


            $num_1 = 41;
            $num_2 = 4;
            $first_name = "David";

            var_dump($num_1 == $num_2);
            echo "<br/>";
            var_dump($num_1 != $num_2);
            echo "<br/>";
            var_dump($num_1 > $num_2);
            echo "<br/>";
            var_dump($num_1 < $num_2);
            echo "<br/>";
            var_dump($num_1 >= $num_2);
            echo "<br/>";
            var_dump($num_1 <= $num_2);
            echo "<br/>";
            var_dump($first_name == "Pete");
            echo "<br/>";
            var_dump($first_name == "david");
            echo "<br/>";
            var_dump(!$num_1);



            
            $first_name = "David";
            $last_name = "Weekes";
            $num_1 = 41;
            $num_2 = 4;

            echo $first_name;
            echo $last_name;
            echo "<br/>";
            echo $first_name . " " . $last_name;
	        echo "<br/>";
            echo $num_1 . " " . $num_2;

            $num_1 = 41;
            $num_2 = 4;
            echo $num_1 + $num_2;
            echo "<br/>";
            echo 41 + 4;
            echo "<br/>";
            echo $num_1 - $num_2;
            echo "<br/>";
            echo $num_1 * $num_2;
            echo "<br/>";
            echo $num_1 / $num_2;
            echo "<br/>";
            echo $num_1 % $num_2;
            echo "<br/>";
            echo $num_1 ** $num_2;
            echo "<br/>";
            echo ++$num_1;
            echo "<br/>";
            echo ++$num_1;
            echo "<br/>";
            echo ++$num_1;
            echo "<br/>";
            $num_1--;
            echo $num_1;
            echo "<br/>";
            echo --$num_1;
            echo "<br/>";
            $num_1--;
            echo $num_1;
            echo "<br/>";
            echo ++$num_1;

*/
/*	            
	            multi-line 
	            comment
	            
		
	            echo "Hello World <br />";  print to screen

                $first_name = "David";
                $favourite_number = 47;
                echo $first_name;
                echo "<br />";
                $last_name = $first_name;
*/                
            ?>
        
    </center>

    <!--<?php //echo $last_name; ?>-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <?php include("footer.php"); ?>
</html>


