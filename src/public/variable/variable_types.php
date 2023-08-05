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
        ?>

        <p>Hi! My name is <?php echo $firstName?></p>
        <p>I am <?php echo $age?> years old</p>
        <p>My eyes are <?php echo $eyeColor?></p>
        <p>The first person in my family is <?php echo $family[0]?></p>
        <p>Currently, I am <?php echo $hungry?></p>
        <p><?php print_r($family)?></p>
       

        <?php print_r($recipee) ?>
        <?php echo $movies[0]?>
        <?php var_dump($movies) ?>
        <?php $me["hobbies"] = ["Music", "Guitar", "Reading"] ?>
        <?php $marraine["hobbies"] = ["Giving to people", "Loving", "Being anxious"]?>
        <?php $me ["marraine"] = [$marraine] ?>
        

        <?php echo '<pre>';
        print_r($me);
        echo '</pre>'; ?> 
        <?php print_r(count($marraine["hobbies"]))?>
        
        <?php print_r(count($me["hobbies"]))?>
        <?php $me["hobbies"][] = "taxidermy" ?>
        <?php echo '<pre>';
        print_r($me);
        echo '</pre>'; ?> 
        <p> This is my favorite manbitch : <?php echo $bestfriend ?></p>
    </body>
</html>


