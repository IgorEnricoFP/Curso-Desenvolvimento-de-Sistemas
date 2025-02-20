<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculo do Quadrado</title>
</head>
<body>
    <div class="container text-center mt-5 display-4">
        <h1>Resultados</h1>
        <hr>
            <?php
                $pi = 3.14;
                
                //Definição das Classes
               class Quadrado {
                    public $lado;
                    public $area;
                    public $perimetro;

                    function set_lado($lado)
                    {
                        $this->lado = $lado;
                    }
                    function get_lado()
                    {
                        return $this->lado;
                    }

                    function set_area($area)
                    {
                        $this->area = $area;
                    }
                    function get_area()
                    {
                        return $this->area;
                    }

                    function set_perimetro($perimetro)
                    {
                        $this->perimetro = $perimetro;
                    }
                    function get_perimetro()
                    {
                        return $this->perimetro;
                    }
               }

               class Retangulo {
                   public $area;
                   public $perimetro;

                   function set_area($area)
                   {
                       $this->area = $area;
                   }
                   function get_area()
                   {
                       return $this->area;
                   }
   
                   function set_perimetro($perimetro)
                   {
                       $this->perimetro = $perimetro;
                   }
                   function get_perimetro()
                   {
                       return $this->perimetro;
                   }                  
               }

               class Circunferencia {
                   public $area;
                   public $perimetro;

                   function set_area($area)
                   {
                       $this->area = $area;
                   }
                   function get_area()
                   {
                       return $this->area;
                   }
   
                   function set_perimetro($perimetro)
                   {
                       $this->perimetro = $perimetro;
                   }
                   function get_perimetro()
                   {
                       return $this->perimetro;
                   }           
               }

               class Triangulo {
                   public $perimetro;

                   function set_perimetro($perimetro)
                   {
                       $this->perimetro = $perimetro;
                   }
                   function get_perimetro()
                   {
                       return $this->perimetro;
                   }  
               }

               class Idade {
                   public $idadeAnos;
                   public $idadeMeses;
                   public $idadeDias;

                   function set_idadeAnos($idadeAnos)
                   {
                       $this->idadeAnos = $idadeAnos;
                   }
                   function get_idadeAnos()
                   {
                       return $this->idadeAnos;
                   }  

                   function set_idadeMeses($idadeMeses)
                   {
                       $this->idadeMeses = $idadeMeses;
                   }
                   function get_idadeMeses()
                   {
                       return $this->idadeMeses;
                   }  

                   function set_idadeDias($idadeDias)
                   {
                       $this->idadeDias = $idadeDias;
                   }
                   function get_idadeDias()
                   {
                       return $this->idadeDias;
                   } 
               }
               

               //Cálculos e Retorno dos Resultados              
                if (isset($_POST['quadrado']))
                {
                    if (empty($_POST['ladoQuadrado']))                
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $quadrado1 = new Quadrado();
                        $quadrado1->set_lado($_POST['ladoQuadrado']);
                        $quadrado1->set_area($_POST['ladoQuadrado'] * $_POST['ladoQuadrado']);
                        $quadrado1->set_perimetro($_POST['ladoQuadrado'] * 4);
                        
                        echo "<p>A Área do <strong>Quadrado</strong> é: ".$quadrado1->get_area()."</p>";
                        echo "<p>E o seu perímetro é: ".$quadrado1->get_perimetro()."</p>";
                    }
                    
                }

                if (isset($_POST['retangulo']))
                {
                    if (empty($_POST['baseRetangulo']) || empty($_POST['alturaRetangulo']))                
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $retangulo1 = new Retangulo();
                        $retangulo1->set_area($_POST['baseRetangulo'] * $_POST['alturaRetangulo']);
                        $retangulo1->set_perimetro(2 * ($_POST['baseRetangulo'] + $_POST['alturaRetangulo']));
                        
                        echo "<p>A Área do <strong>Retângulo</strong> é: ".$retangulo1->get_area()."</p>";
                        echo "<p>E o seu perímetro é: ".$retangulo1->get_perimetro()."</p>";
                    }
                }

                if (isset($_POST['circunferencia']))
                {
                    if (empty($_POST['raioCircunferencia']))                
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $circunferencia1 = new Circunferencia();
                        $circunferencia1->set_area(round($pi * ($_POST['raioCircunferencia'] * $_POST['raioCircunferencia']), 2));
                        $circunferencia1->set_perimetro(round(2 * $pi * $_POST['raioCircunferencia']), 2);
    
                        echo "<p>A Área da <strong>Circunferência</strong> é: ".$circunferencia1->get_area()."</p>";
                        echo "<p>E o seu perímetro é: ".$circunferencia1->get_perimetro()."</p>";
                    }
                }

                if (isset($_POST['triangulo']))
                {
                    if (empty($_POST['ladoTriangulo1']) || empty($_POST['ladoTriangulo2']) || empty($_POST['ladoTriangulo3']))                
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $triangulo1 = new Triangulo();
                        $triangulo1->set_perimetro($_POST['ladoTriangulo1'] + $_POST['ladoTriangulo2'] + $_POST['ladoTriangulo3']);

                        echo "<p>O Perímetro do <strong>Triângulo</strong> é: ".$triangulo1->get_perimetro()."</p>";
                    }
                }

                if (isset($_POST['sucessor']))
                {
                    if (empty($_POST['sucessorInteiro']))
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";
                    
                    else {
                        $sucessor = ($_POST['sucessorInteiro']);
                        $numeroInt = $sucessor++;
                        
                        echo "<p>O <strong>Sucessor</strong> de ".$numeroInt." é: ".$sucessor."</p>";    
                    }
                }

                if (isset($_POST['quociente']))
                {
                    if (empty($_POST['numeroInteiro1']) || empty($_POST['numeroInteiro2']))
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $numeroInt1 = $_POST['numeroInteiro1'];
                        $numeroInt2 = $_POST['numeroInteiro2'];

                        $quociente = $numeroInt1 * $numeroInt2;
                        $restoDiv = $numeroInt1 % $numeroInt2;

                        echo "<p>O <strong>Quociente</strong> entre ".$numeroInt1 ." e ".$numeroInt2. " é: ".$quociente."<br>
                        E o <strong>Resto da Divisao</strong> é: ".$restoDiv."</p>";
                    }
                }

                if (isset($_POST['idade']))
                {
                    if (empty($_POST['idadeAnos']))
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                        $diasAno = 365;
                        $MesesAno = 12;
                        $idadeAnos = $_POST['idadeAnos'];

                        $idade1 = new Idade();
                        $idade1->set_idadeAnos($idadeAnos);
                        $idade1->set_idadeDias(round($idadeAnos * $diasAno, 2));
                        $idade1->set_idadeMeses(round($idadeAnos *  $MesesAno, 2));

                        echo "<p>A sua <strong>Idade</strong> em <strong>Anos</strong>: ".$idade1->get_idadeAnos()."<br>
                        Em <strong>Meses</strong>: ".$idade1->get_idadeMeses()."<br>
                        Em <strong>Dias</strong>: ".$idade1->get_idadeDias()."</p>";
                        
                    }
                }

                if (isset($_POST['fahrenheit']))
                {
                    if (empty($_POST['fahrenheitCelsius']))
                    echo "<p style='color:red;'>PREENCHA OS CAMPOS!</p>";

                    else {
                       $fahrenheit = $_POST['fahrenheitCelsius'];
                       $Celsius = round((($fahrenheit - 32) / 1.8), 2);

                       echo "<p>".$fahrenheit." <strong>Fahrenheit</strong> correspondem a: ".$Celsius.
                        "º <strong>Celsius</strong></p>";
                    }
                }
            ?>

        <form action="index.php" method="post">
            <input type="submit" class="btn btn-primary" value="Voltar">
        </form>
    </div>

   
</body>
</html>
