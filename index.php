<?php
include("conexao.php");
$consulta = "SELECT * FROM questionario";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
</head>
<body>

    <?php while($dado = $con->fetch_array()){?>
        <?php $dado["id"];
            $dado["v1"];
            $dado["v2"];
            $dado["v3"];
            $dado["v4"];
            $dado["v6"];
            $dado["v7"];
            $dado["v8"];
            $dado["v9"];
            $dado["v10"];
            $dado["v11"];
            $dado["v12"];
            $dado["v13"];
            $dado["v14"];
            $dado["v15"];
            $dado["v16"];
            
            if($dado["v1"] != "")
            {
                if($dado["v1"] == 1)
                {
                    if($dado["v2"] == "")
                    {
                        echo "Problema encontrado: Pessoa com celular não respondeu a pergunta 2
                        no questionario. id = ".$dado["id"]."<br>";
                    }
                    
                    if($dado["v2"] == "1")
                    {
                        if($dado["v3"] == "")
                        {
                            echo "Problema encontrado: Pessoa com celular do tipo smartphone não respondeu a pergunta 3
                            no questionario. id = ".$dado["id"]."<br>";
                        }

                        if($dado["v3"] != "" && $dado["v4"] == "")
                        {
                            echo "Problema encontrado: Pessoa com celular do tipo smartphone não respondeu a pergunta 4
                            no questionario. id = ".$dado["id"]."<br>";
                        }
                        if($dado["v3"] != "" && $dado["v4"] == "1")
                        {
                            if($dado["v5"] == "")
                            {
                                echo "Problema encontrado: Pessoa que respondeu SIM na pergunta 4 não respondeu a pergunta 5
                                no questionario. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v5"] == 1)
                            {
                                if($dado["v6"] != "")
                                {
                                    echo "Problema encontrado: Pessoa com app da Empresa X respondeu a pergunta 6
                                    no questionário. id = ".$dado["id"]."<br>";
                                }
                                if($dado["v7"] != "")
                                {
                                    echo "Problema encontrado: Pessoa com app da Empresa X respondeu a pergunta 7
                                    no questionário. id = ".$dado["id"]."<br>";
                                }
                                if($dado["v8"] == "")
                                {
                                    echo "Problema encontrado: Pessoa que baixou o app da Empresa X não respondeu a pergunta 8
                                    no questionario. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v8"] == 1)
                                {
                                   if($dado["v9"] == "" or $dado["v10"] == "" or $dado["v11"] == "" or $dado["v12"] == "" or $dado["v13"] == "")
                                   {
                                        echo "Problema encontrado: Pessoa que tem conta em rede social não respondeu a pergunta 9
                                        no questionario. id = ".$dado["id"]."<br>";
                                   }
                                   elseif($dado["v9"] != "" && $dado["v10"] != "" && $dado["v11"] != "" && $dado["v12"] != "" && $dado["v13"] != "")
                                   {
                                        if($dado["v14"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                            no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        elseif($dado["v14"] != "")
                                        {
                                            if($dado["v15"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                            if($dado["v16"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                        }
                                   }                                    
                                }
                                elseif($dado["v8"] == 2)   
                                {
                                    if($dado["v14"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 8 não respondeu 
                                        a pergunta 10 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    elseif($dado["v14"] != "")
                                    {
                                        if($dado["v15"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        if($dado["v16"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                    }
                                }
                            }
                            elseif($dado["v5"] != 1)
                            {
                                if($dado["v6"] == "")
                                {
                                    echo "Problema encontrado: Pessoa sem ou que não sabe se baixou o app da Empresa X não respondeu
                                    a pergunta 6 no questionário. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v6"] != "")   
                                {
                                    if($dado["v7"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa que respondeu a pergunta 6 não respondeu 
                                        a pergunta 7 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    elseif($dado["v7"] == 1)
                                    {   
                                        if($dado["v8"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa que respondeu SIM na pergunta 7 não respondeu 
                                            a pergunta 8 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        elseif($dado["v8"] == 1)
                                        {
                                            if($dado["v9"] == "" or $dado["v10"] == "" or $dado["v11"] == "" or $dado["v12"] == "" or $dado["v13"] == "")
                                                {
                                                    echo "Problema encontrado: Pessoa que tem conta em rede social não respondeu a pergunta 9
                                                    no questionario. id = ".$dado["id"]."<br>";
                                                }
                                                elseif($dado["v9"] != "" && $dado["v10"] != "" && $dado["v11"] != "" && $dado["v12"] != "" && $dado["v13"] != "")
                                                {
                                                    if($dado["v14"] == "")
                                                    {
                                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                                        no questionário. id = ".$dado["id"]."<br>";
                                                    }
                                                    elseif($dado["v14"] != "")
                                                    {
                                                        if($dado["v15"] == "")
                                                        {
                                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                                        }
                                                        if($dado["v16"] == "")
                                                        {
                                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                                        }
                                                    }
                                                }
                                        }
                                        elseif($dado["v8"] == 2)    
                                        {
                                            if($dado["v14"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                                no questionário. id = ".$dado["id"]."<br>";
                                            }
                                            elseif($dado["v14"] != "")
                                            {
                                                if($dado["v15"] == "")
                                                {
                                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                                }
                                                if($dado["v16"] == "")
                                                {
                                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                                }
                                            }
                                        }
                                    }
                                    elseif($dado["v7"] == 2)
                                    {
                                        if($dado["v14"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 7 não respondeu 
                                            a pergunta 10 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        elseif($dado["v14"] != "")
                                        {
                                            if($dado["v15"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                            if($dado["v16"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        elseif($dado["v3"] != "" && $dado["v4"] == "2")
                        {
                            if($dado["v5"] != "")
                            {
                                echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 4 respondeu a pergunta 5
                                no questionário. id = ".$dado["id"]."<br>";
                            }
                            if($dado["v6"] == "")
                            {
                                echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 4 não respondeu a pergunta 6
                                no questionário. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v6"] != "")
                            {
                                if($dado["v7"] == "")
                                {
                                    echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 2 não respondeu 
                                    a pergunta 7 no questionário. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v7"] == 1)
                                {
                                    if($dado["v8"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa que respondeu SIM na pergunta 7 não respondeu 
                                        a pergunta 8 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    elseif($dado["v8"] == 1)
                                    {
                                        if($dado["v9"] == "" or $dado["v10"] == "" or $dado["v11"] == "" or $dado["v12"] == "" or $dado["v13"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa que tem conta em rede social não respondeu a pergunta 9
                                            no questionario. id = ".$dado["id"]."<br>";
                                        }
                                        elseif($dado["v9"] != "" && $dado["v10"] != "" && $dado["v11"] != "" && $dado["v12"] != "" && $dado["v13"] != "")
                                        {
                                            if($dado["v14"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                                no questionário. id = ".$dado["id"]."<br>";
                                            }
                                            elseif($dado["v14"] != "")
                                            {
                                                if($dado["v15"] == "")
                                                {
                                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                                }
                                                if($dado["v16"] == "")
                                                {
                                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                                }
                                            }
                                        }
                                    }
                                    elseif($dado["v8"] == 2)    
                                    {
                                        if($dado["v14"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                            no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        elseif($dado["v14"] != "")
                                        {
                                            if($dado["v15"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                            if($dado["v16"] == "")
                                            {
                                                echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                            }
                                        }
                                    }
                                }
                                elseif($dado["v7"] == 2)
                                {
                                    if($dado["v14"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 7 não respondeu 
                                        a pergunta 10 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    elseif($dado["v14"] != "")
                                    {
                                        if($dado["v15"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        if($dado["v16"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    elseif($dado["v2"] == 2)
                    {
                        if($dado["v3"] != "")
                        {
                            echo "Problema encontrado: Pessoa sem celular do tipo smartphone respondeu a pergunta 3
                            no questionário. id = ".$dado["id"]."<br>";
                        }
                        if($dado["v4"] != "")
                        {
                            echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 4
                            no questionário. id = ".$dado["id"]."<br>";
                        }
                        if($dado["v5"] != "")
                        {
                            echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 5
                            no questionário. id = ".$dado["id"]."<br>";
                        }
                        if($dado["v6"] != "")
                        {
                            echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 6
                            no questionário. id = ".$dado["id"]."<br>";
                        }
                        if($dado["v7"] == "")
                        {
                            echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 2 não respondeu 
                            a pergunta 7 no questionário. id = ".$dado["id"]."<br>";
                        }
                        elseif($dado["v7"] == 1)
                        {
                            if($dado["v8"] == "")
                            {
                                echo "Problema encontrado: Pessoa que respondeu SIM na pergunta 7 não respondeu 
                                a pergunta 8 no questionário. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v8"] == 1)
                            {
                                if($dado["v9"] == "" or $dado["v10"] == "" or $dado["v11"] == "" or $dado["v12"] == "" or $dado["v13"] == "")
                                {
                                    echo "Problema encontrado: Pessoa que tem conta em rede social não respondeu a pergunta 9
                                    no questionario. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v9"] != "" && $dado["v10"] != "" && $dado["v11"] != "" && $dado["v12"] != "" && $dado["v13"] != "")
                                {
                                    if($dado["v14"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                        no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    elseif($dado["v14"] != "")
                                    {
                                        if($dado["v15"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                        if($dado["v16"] == "")
                                        {
                                            echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                        }
                                    }
                                }
                            }
                            elseif($dado["v8"] == 2)    
                            {
                                if($dado["v14"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                    no questionário. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v14"] != "")
                                {
                                    if($dado["v15"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    if($dado["v16"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                }
                            }
                        }
                        elseif($dado["v7"] == 2)
                        {
                            if($dado["v14"] == "")
                            {
                                echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 7 não respondeu 
                                a pergunta 10 no questionário. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v14"] != "")
                            {
                                if($dado["v15"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                }
                                if($dado["v16"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                }
                            }
                        }
                            
                    }
                }
                else if($dado["v1"] == 2)
                {
                    if($dado["v2"] != "")
                    {
                        echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 2
                        no questionário. id = ".$dado["id"]."<br>";
                    }
                    if($dado["v3"] != "")
                    {
                        echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 3
                        no questionário. id = ".$dado["id"]."<br>";
                    }
                    if($dado["v4"] != "")
                    {
                        echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 4
                        no questionário. id = ".$dado["id"]."<br>";
                    }
                    if($dado["v5"] != "")
                    {
                        echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 5
                        no questionário. id = ".$dado["id"]."<br>";
                    }
                    if($dado["v6"] != "")
                    {
                        echo "Problema encontrado: Pessoa sem celular respondeu a pergunta 6
                        no questionário. id = ".$dado["id"]."<br>";
                    }
                    if($dado["v7"] == "")
                    {
                        echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 1 não respondeu 
                        a pergunta 7 no questionário. id = ".$dado["id"]."<br>";
                    }
                    elseif($dado["v7"] == 1)
                    {
                        if($dado["v8"] == "")
                        {
                            echo "Problema encontrado: Pessoa que respondeu SIM na pergunta 7 não respondeu 
                            a pergunta 8 no questionário. id = ".$dado["id"]."<br>";
                        }
                        elseif($dado["v8"] == 1)
                        {
                            if($dado["v9"] == "" or $dado["v10"] == "" or $dado["v11"] == "" or $dado["v12"] == "" or $dado["v13"] == "")
                            {
                                echo "Problema encontrado: Pessoa que tem conta em rede social não respondeu a pergunta 9
                                 no questionario. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v9"] != "" && $dado["v10"] != "" && $dado["v11"] != "" && $dado["v12"] != "" && $dado["v13"] != "")
                            {
                                if($dado["v14"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                    no questionário. id = ".$dado["id"]."<br>";
                                }
                                elseif($dado["v14"] != "")
                                {
                                    if($dado["v15"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                    if($dado["v16"] == "")
                                    {
                                        echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                    }
                                }
                            }
                        }
                        elseif($dado["v8"] == 2)    
                        {
                            if($dado["v14"] == "")
                            {
                                echo "Problema encontrado: Pessoa não respondeu a pergunta 10 
                                no questionário. id = ".$dado["id"]."<br>";
                            }
                            elseif($dado["v14"] != "")
                            {
                                if($dado["v15"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                                }
                                if($dado["v16"] == "")
                                {
                                    echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                                }
                            }
                        }
                    }
                    elseif($dado["v7"] == 2)
                    {
                        if($dado["v14"] == "")
                        {
                            echo "Problema encontrado: Pessoa que respondeu NÃO na pergunta 7 não respondeu 
                            a pergunta 10 no questionário. id = ".$dado["id"]."<br>";
                        }
                        elseif($dado["v14"] != "")
                        {
                            if($dado["v15"] == "")
                            {
                                echo "Problema encontrado: Pessoa não respondeu a pergunta 11 no questionário. id = ".$dado["id"]."<br>";
                            }
                            if($dado["v16"] == "")
                            {
                                echo "Problema encontrado: Pessoa não respondeu a pergunta 12 no questionário. id = ".$dado["id"]."<br>";
                            }
                        }
                    }

                }    
            }
            else{
                echo "Pergunta 1 não foi respondida";
            }
            
        ?>     
    <?php } ?>
</body>
</html>
