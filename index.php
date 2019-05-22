<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 

        $nome = "Bruno";

        if($nome == "Bruno"){
            var_dump($nome . "<br>");
        }else{
            echo "Não é o Bruno";
        }

        for ($i=0; $i<5; $i++){
            echo "Olá $nome"."<br>";
        }

         ?> 
    </h1>
</body>
</html>