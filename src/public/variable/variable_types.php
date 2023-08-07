<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       
        <?php
            $firstName = 'Marius';
            $age = 23;
            $eyeColor = 'blue';
            $family = array(
                0=> 'Frédéric',
                1=> 'Anne',
                2=> 'Antoine',
                3=> 'Aline',
                4=> 'Robert',
            );
            // or $family = [''Frédéric,'Anne','Antoine','Aline','Robert']
            $hungry = true;

            $recipee = array("Boulets frites" => "Deux bons boulets avec des frites sauce lapin",
            "Escalopes piccata lombarda"=>"Escalopes avec une sauce aux citrons accompagnée de pâtes");
            
            $movies = ["La Montagne Sacrée", "Apocalypse Now", "Quand passent les cigognes"];

            $me = ["firstname"=>"Marius", "lastname" => "Waseige", "age" => "23", "Religion" =>"Pastafarism"];

            $marraine = ["firstname"=>"Aline", "lastname" => "Counotte", "age" => "82", "Religion" =>"Protestantism"];

            $bestfriend = "Guillaume";

            $soulmate = ["firstname"=>"Eve", "lastname" => "Aubry", "age" => "23", "Religion" =>"Destructionism"];


        ?>

        <p>Hi! My name is <?php echo $firstName?></p>

        <p>I am <?php echo $age?> years old</p>

        <p>My eyes are <?php echo $eyeColor?></p>

        <p>The first person in my family is <?php echo $family[0]?></p>

        <p>Currently, I am <?php echo $hungry?></p>

        <p>This is my family in an array :<?php print_r($family)?></p>
       
        <p>My favorite recipees in an array : <?php print_r($recipee)?></p>

        <p>My favorite movie : <?php echo $movies[0]?></p>

        <p>A var_dump of the $movies var : <?php var_dump($movies) ?></p>

        <!-- Create a new variable in the $me array -->
        <?php $me["hobbies"] = ["Music", "Guitar", "Reading"] ?>
        <!-- Create a new variable in the $soulmate array -->
        <?php $soulmate["hobbies"] = ["Music","Drawing","Reading"] ?> 

        <?php $marraine["hobbies"] = ["Giving to people", "Loving", "Being anxious"]?>

        <?php $me ["marraine"] = [$marraine] ?> 
    

            <h3>This is a first rendering of the $me var :</h3>

        <?php 
            echo '<pre>';
            print_r($me);
            echo '</pre>'; 
        ?> 

        <?php print_r(count($marraine["hobbies"]))?>
        
        <?php print_r(count($me["hobbies"]))?>
        <?php $me["hobbies"][] = "Taxidermy" ?>

        <!-- Change lastname to a new value-->
        <?php $me["lastname"] = "Durand" ?>

        
        <h3>This is a second rendering with an added hobby : </h3>

        <?php echo '<pre>';
        print_r($me);
        echo '</pre>'; ?> 

        <p> This is my favorite manbitch : <?php echo $bestfriend ?></p>
        <!-- Show intersection or merge of two arrays from different variables -->
       <?php 
            $possible_hobbies_via_intersection = array_intersect($me["hobbies"],$soulmate["hobbies"]);
            $possible_hobbies_via_merge = array_merge($me["hobbies"],$soulmate["hobbies"]);
            echo '<pre>';
            print_r($possible_hobbies_via_intersection);
            print_r($possible_hobbies_via_merge);
            echo '</pre>';
        ?>

        <!-- Add variables in preexisting arrays -->
        <?php 
            $web_development = ['frontend','backend'];
            $web_development['frontend'] = [];
            $web_development['backend'] = [];
            $web_development["frontend"][] = "xhtml";
            $web_development["backend"][] = "Ruby on Rails";
            $web_development["frontend"][] = "CSS";
            $web_development["backend"][] = "Flash";
            $web_development["frontend"][] = "Javascript";
            // Change a variable in an array to a new value.
            $web_development["frontend"] [0] = "html";
            // Delete the value of a variable from an array.
            array_splice($web_development["backend"],1);

            echo '<pre>';
            print_r($web_development);
            echo '</pre>';
            
        ?>

        <?php 
            // foreach loop example.
            $names= array('John', 'jeanne', 'Joan', 'emile');
            var_dump($names);

            foreach ($names as $key => $value){
                $names[$key] = ucfirst($value);
            }
            var_dump($names);  
        ?>

        <?php
            $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
                // Pour chaque élément de l'array. Pour chaque pronoun de pronouns.
            foreach ($pronouns as $pronoun){
                // if loop. Pour chaque pronoun qui a pour valur 'He/She', $verb = 'codes', sinon $verb = 'code'
                $verb = ($pronoun == 'He/She') ? 'codes' : 'code';
                
                echo "$pronoun $verb<br>";
            }
        ?>
        <?php
            for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
            {
                echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
            }
             
        ?>

        <?php
            $amount_of_lines = 1;

            while ($amount_of_lines <= 100)
            {
                echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
                // shorthand writing for 
                // $amount_of_lines = $amount_of_lines +1;
                $amount_of_lines ++; 

            }
        ?>

        <?php
            // Write a script that prints the numbers from 1 to 120 using while.
            $numbers = 1;

            while ($numbers <= 120) {
                echo $numbers . '<br>'; 
                $numbers ++ ;
            }
         ?>

        <?php
            // Write a script that prints the numbers from 1 to 120 using for.
            for ($newnumbers = 1; $newnumbers <= 120; $newnumbers ++) {
                echo $newnumbers . '<br>';
            }
        ?>

        <?php
        // Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
            $startups = ['Eve', 'Guillaume', 'Bastien', 'Ziad'];

            foreach ($startups as $startup) {
                echo "$startup<br>";
            }
        ?>
        <!-- Example of html select box -->
            <label for='country'> Select a country : </label>
            <select name='country' id='country'>
                    <?php
                        $countries = ['BE'=>'Belgique','FR'=>'France','NP'=>'Népal','JM'=>'Jamaïque','UY'=>'Uruguay','BB'=>'Barbieland','TES'=>'Tamriel','DE'=>'Allemagne','CN'=>'Chine','VN'=>'Vietnam']; 

                        foreach ($countries as $isoCode => $countryname) {
                           echo "<option value= \"$isoCode\">$countryname </option>";
                        }
                    ?>
            </select>
        
            <?php
            // Break a string into an array of single elements with explode(). Then shuffle its letters with str_shuffle().
                 $str='According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole';
                 $str = explode(" ",$str);
                 foreach($str as $word){
                    echo str_shuffle($word). " ";
                 }
            ?>
            <?php
            // Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile".
                function capitalize($inputString){
                   return ucfirst($inputString);
                }
                $prénom = "emile";
                $capitalized = capitalize($prénom);
                echo $capitalized
            ?>

            <?php
            // display the date, time, minutes and seconds, using the same function, by playing with the arguments.
                echo date('d-m-Y h:i:s') ; 
            ?>

            <?php
            // Crée a "Sum" function that takes 2 numbers and returns their sum.
                $numberstring=[15,27];
                array_sum($numberstring);
                if (is_numeric($numberstring)){
                    echo "This is a numeric";
                } else {
                    echo "Error: argument is not a number";
                }
            ?>

            <?php
            // Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word. Example: "In code we trust!" should return: ICWT).
                function acronym($inputString){
                    $words = explode(' ', $inputString); // Transforme l'input en array de mots.

                    foreach($words as $word){
                        // strtoupper transforme la string en uppercase. substr return une partie de la string -> substr($string, start, lenght)
                        $acronym .= strtoupper(substr($word, 0, 1)); // $acronym .= veut dire $acronym . strtoupper(substr($word, 0, 1) 
                    }
                    return $acronym;
                }
                $input = "Hello, how are you ?";
                $acronym = acronym($input);
                echo $acronym;
            ?>

            <?php
            function replaceletters($input){
                $replacedletters = str_replace(['a','e'], 'æ', $inputString);
                return $replacedletters;
            }
                 $letterreplace = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
                 $output = replaceletters($letterreplace);
                 echo $output;
            ?>
    </body>
</html>


