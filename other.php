<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p> Linkek<p>
   </br>

<a href="https://www.youtube.com/watch?v=Rg0DxPO1D4M">Because</a>
<a href="https://www.youtube.com/watch?v=QP-nPJbTgTs">Charisma</a>
<a href="https://translate.google.hu/?sl=en&tl=hu&text=ruse%0Acongregation%0Aflake%0Aarson%0Achardonnay%0Aenforcing%0Ascheme%0Awrinkles%0Achunk%0Arepealed%0Arigitidy%0Aspank%0Ablimp%0Aeloped%0A%0Asubstances%0Afetus%0Arandsom%0Aransom%0A&op=translate">tr</a>
<a href="https://translate.google.hu/?sl=en&tl=hu&text=detained%20%0Aconfinement%0A%20brig%2C%0A%20confined%20%0Astaunch%20%0Ascrutiny%0A%20indictment%20%0Aallegations%0A%20steamroll%20%0Aironclad%20evidence%0A%20amend%20%0Aprocedure%20%0Adeposition%20p%0Aplea%20offer%20%0Ajockeys%20%0Aculpable%20p%0Aarasailing&op=translate">t2</a>
<a href="https://www.youtube.com/watch?v=sNwZIhlHVUk">Fast</a>
<a href="https://www.youtube.com/watch?v=Hfuy2lTEdKI">Habits</a>
   </br>


    <?php
echo "Here are our files";
echo "<br>";
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='$path/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 
</body>
</html>