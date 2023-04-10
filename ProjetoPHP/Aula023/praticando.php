<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando</title>
</head>
<body>

    <?php

        $registros = array('Título notícia 1', 'Título notícia 2', 'Título notícia 3');
        
        
        $idx = 0;
        while($idx < 3) {

            echo $registros[$idx];
            echo '<hr/>';
            $idx++;
        }
        

    ?>
    
</body>
</html>