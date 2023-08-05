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
            // Delete a variable from an array.
            array_splice($web_development["backend"],1);

            echo '<pre>';
            print_r($web_development);
            echo '</pre>';
        ?>
    </body>
</html>


