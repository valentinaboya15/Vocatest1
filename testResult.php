<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vocatest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/chartjs.css" rel="stylesheet" type="text/css">
   
</head>

<body>
    <?php
    if ($_POST) {
        $preg1 = $_POST["preg1"];
        $preg2 = $_POST["preg2"];
        $preg3 = $_POST["preg3"];
        $preg4 = $_POST["preg4"];
        $preg5 = $_POST["preg5"];
        $preg6 = $_POST["preg6"];
        $preg7 = $_POST["preg7"];
        $preg8 = $_POST["preg8"];
        $preg9 = $_POST["preg9"];
        $preg10 = $_POST["preg10"];
        $preg11 = $_POST["preg11"];
        $preg12 = $_POST["preg12"];
        $preg13 = $_POST["preg13"];
        $preg14 = $_POST["preg14"];
        $preg15 = $_POST["preg15"];

        //variables de conteo 
        $e = 0; //variable espacial
        $c = 0; //variable cinetico_corporal
        $m = 0; //variable musical
        $i = 0; //variable interpersonal
        $r = 0; //variable intrapersonal
        $n = 0; //variable naturalista
        $l = 0; //variable linguistica
        $g = 0; //variable logica_matematica
    
        //pregunta 1
        if ($preg1 == "espacial") {
            $e += 1;

        } else {
            if ($preg1 == "interpersonal") {
                $i += 1;
            } else {
                if ($preg1 == "naturalista") {
                    $n += 1;
                } else {
                    $r += 1;

                }
            }
        }

        //pregunta 2
    
        if ($preg2 == "espacial") {
            $e += 1;

        } else {
            if ($preg2 == "cinetico_corporal") {
                $c += 1;
            } else {
                if ($preg2 == "musical") {
                    $m += 1;
                } else {
                    if ($preg2 == "interpersonal") {
                        $i += 1;
                    } else {
                        if ($preg2 == "intrapersonal") {
                            $r += 1;
                        } else {
                            if ($preg2 == "naturalista") {
                                $n += 1;
                            } else {
                                if ($preg2 == "linguistica") {
                                    $l += 1;
                                } else {
                                    $g += 1;
                                }
                            }
                        }
                    }
                }
            }
        }

        //pregunta 3
    
        if ($preg3 == "espacial") {
            $e += 1;
        } else {
            if ($preg3 == "cinetico_corporal") {
                $c += 1;
            } else {
                if ($preg3 == "musical") {
                    $m += 1;
                } else {
                    if ($preg3 == "naturalista") {
                        $n += 1;
                    } else {
                        if ($preg3 == "linguistica") {
                            $l += 1;
                        } else {
                            $g += 1;
                        }
                    }
                }
            }
        }

        //pregunta 4
    
        if ($preg4 == "cinetico_corporal") {
            $c += 1;
        } else {
            if ($preg4 == "musical") {
                $m += 1;
            } else {
                if ($preg4 == "interpersonal") {
                    $i += 1;
                } else {
                    if ($preg4 == "intrapersonal") {
                        $r += 1;
                    } else {
                        $g += 1;

                    }
                }
            }
        }

        //pregunta 5
    
        if ($preg5 == "logica_matematica") {
            $g += 1;

        } else {
            if ($preg5 == "linguistica") {
                $l += 1;
            } else {
                if ($preg5 == "naturalista") {
                    $n += 1;
                } else {
                    if ($preg5 == "intrapersonal") {
                        $r += 1;
                    } else {
                        if ($preg5 == "interpersonal") {
                            $i += 1;
                        } else {
                            if ($preg5 == "musical") {
                                $m += 1;
                            } else {
                                if ($preg5 == "cinetico_corporal") {
                                    $c += 1;
                                } else {
                                    $e += 1;
                                }
                            }
                        }
                    }
                }
            }
        }

        //pregunta 6
        if ($preg6 == "espacial") {
            $e += 1;

        } else {
            if ($preg6 == "cinetico_corporal") {
                $c += 1;
            } else {
                if ($preg6 == "interpersonal") {
                    $i += 1;
                } else {
                    if ($preg6 == "intrapersonal") {
                        $r += 1;
                    } else {
                        if ($preg6 == "naturalista") {
                            $n += 1;
                        } else {
                            if ($preg6 == "linguistica") {
                                $l += 1;
                            } else {
                                $g += 1;
                            }

                        }
                    }
                }
            }
        }


        //pregunta 7
        if ($preg7 == "espacial") {
            $e += 1;

        } else {
        }
        // pregunta 8
        if ($preg8 == "cinetico_corporal") {
            $c += 1;

        } else {
        }
        // pregunta 9
        if ($preg9 == "musical") {
            $m += 1;

        } else {
        }
        //pregunta 10
        if ($preg10 == "interpersonal") {
            $i += 1;

        } else {
        }
        //pregunta 11
        if ($preg11 == "intrapersonal") {
            $r += 1;

        } else {
        }
        // pregunta 12
        if ($preg12 == "naturalista") {
            $n += 1;

        } else {
        }
        // pregunta 13
        if ($preg13 == "linguistica") {
            $l += 1;

        } else {
        }
        // pregunta 14
        if ($preg14 == "logica_matematica") {
            $g += 1;

        } else {
        }
        //pregunta 15
        if ($preg15 == "musical") {
            $m += 1;

        } else {
        }
        /*print "espacial".$e; 
        print "cinetico_corporal".$c;
        print "musical".$m;
        print "interpersonal".$i;
        print "intrapersonal".$r;
        print "naturalista".$n;
        print "linguistica".$l;
        print "logica_matematica".$g;*/
    }
    
    ?>
    <nav class="navbar navbar-success bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-success" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Proceso de admision</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.udenar.edu.co/ocara/admisiones/">Proceso de admision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://sapiens.udenar.edu.co:5032/">Calcula tu ponderado</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ofertas por extensión
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="https://www.udenar.edu.co/tumaco/">Sede Tumaco</a></li>
              <li><a class="dropdown-item" href="https://www.udenar.edu.co/Ipiales/">Sede Ipiales</a></li>
              <li><a class="dropdown-item" href="https://www.udenar.edu.co/tuquerres/">Sede Tuquerres</a></li>
              
            </ul>
          </li>
        </ul>
       
      </div>
    </div>
  </div>
</nav>
  

    <div class="chartCard">

        <div class="Content" id="report-page">
            <div class="chartContent">
                <div class="chartBox">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="btn-download">
                <button type="button" class="btn btn-outline-success" onclick="btnDownload()">Descargar</button>
            </div>
        </div>

        
        <div class="container5">
        <h5 class="card-title"><strong>LAS INTELIGENCIAS QUE MAS SE ACOPLAN A TU PERFIL VOCACIONAL SON:</strong><br></h5>
        <?php
      
            
            $inteligencias = array("espacial" => $e, "cinetico_corporal" => $c, "musical" => $m, "interpersonal" => $i, "intrapersonal" => $r, "naturalista" => $n, "linguistica" => $l, "logica_matematica" => $g);


            arsort($inteligencias);

            $i = 0;

            foreach ($inteligencias as $inte => $cant) {
                $porcent = $cant / 15 * 100;

                echo " \n <em><strong>  " . $inte . "\n con un\n" . $porcent . "%   \n" . "</em></strong>\n \n";
                $intel = $inte;
                if ($inte == "espacial") {
                    echo "Tienes la Capacidad de percibir el mundo visual-espacial de manera precisa y de llevar a cabo transformaciones basadas en esas
                                          percepciones.<br>";
                } else {
                    if ($inte == "cinetico_corporal") {
                        echo "Tienes el Dominio del propio cuerpo para expresar ideas y sentimientos, y facilidad para utilizar las manos en la creación
                                               o transformación de objetos.<br>";
                    } else {
                        if ($inte == "musical") {
                            echo "Tienes la capacidad de percibir, discriminar (críticos musicales), transformar (compositores) y expresar (intérpretes) 
                                                  las formas musicales.<br> ";
                        } else {
                            if ($inte == "interpersonal") {
                                echo "Tienes la capacidad de percibir y distinguir los estados anímicos, las intenciones, las motivaciones <br> y los sentimientos 
                                                      de otras personas. <br>";
                            } else {
                                if ($inte == "intrapersonal") {
                                    echo "Tienes autoconocimiento y capacidad para actuar según ese conocimiento.<br> ";
                                } else {
                                    if ($inte == "naturalista") {
                                        echo "Tienes la facultad de reconocer y clasificar las numerosas especies de flora y fauna del entorno.<br>";

                                    } else {
                                        if ($inte == "linguistica") {
                                            echo "Tienes la capacidad de utilizar las palabras de manera eficaz, ya sea oralmente o por escrito.<br>";
                                        } else {
                                            if ($inte == "logica_matematica") {
                                                echo "Tienes la capacidad de utilizar los números con eficacia y de razonar bien.<br>";                                          

                                            }
                                        }
                                    }

                                }
                            }
                        }
                    }
                }


                $i++;
                if ($i == 3) {
                    $i = 0;
                    break;

                }

            }

            ?>
                                
                        <div class="container6"  class="card d-grid  mx-auto" style="width: 60rem ">
                        <h5 class="card-title"><strong>LOS PROGRAMAS SEGÚN TU PERFIL VOCACIONAL SON:</strong></h5>
                        <?php
            
            $inteligencias = array("espacial" => $e, "cinetico_corporal" => $c, "musical" => $m, "interpersonal" => $i, "intrapersonal" => $r, "naturalista" => $n, "linguistica" => $l, "logica_matematica" => $g);


            arsort($inteligencias);

            $i = 0;

            foreach ($inteligencias as $inte => $cant) {
               
                if ($inte == "espacial") {
                    echo "<strong>Departamento Arquitectura</strong> <br>"; 
                    $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "espacial." -t halt".';
                    $output = exec($input);
                    echo "<em>".$output . "</em>"."<br>";

                    echo "<strong>Departamento de diseño</strong><br>"; 
                    $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "espacial1." -t halt".';
                    $output1 = exec($input1);
                    echo "<em>".$output1 . "</em>"."<br>";

                    echo "<strong>Departamento de Ingenería Civil</strong> <br>"; 
                    $input2 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "espacial2." -t halt".';
                    $output2 = exec($input2);
                    echo "<em>".$output2 . "</em>"."<br>" . "<br>";
                } else {
                    if ($inte == "cinetico_corporal") {
                        echo "<strong>Departamento Artes Visuales</strong> <br>"; 
                        $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "cinetico_corporal." -t halt".';
                        $output = exec($input);
                        echo "<em>".$output . "</em>"."<br>" . "<br>";
                    } else {
                        if ($inte == "musical") {
                            echo "<strong>Departamento Musica</strong><br>"; 
                            $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "musical." -t halt".';
                            $output = exec($input);
                            echo "<em>".$output . "</em>"."<br>" . "<br>";
                        } else {
                            if ($inte == "interpersonal") {
                                echo "<strong>Departamento de Administración de Empresas</strong><br>"; 
                                $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "interpersonal." -t halt".';
                                $output = exec($input);
                                echo "<em>".$output . "</em>"."<br>";

                                echo "<strong>Departamento de Comercio Internacional Y Mercado</strong><br>"; 
                                $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "interpersonal1." -t halt".';
                                $output1 = exec($input1);
                                echo "<em>".$output1 . "</em>"."<br>";

                                echo "<strong>Departamento de Sociología</strong><br>"; 
                                $input2 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "interpersonal2." -t halt".';
                                $output2 = exec($input2);
                                echo "<em>".$output2 . "</em>"."<br>";

                                echo "<strong>Facultad de Derecho</strong><br>"; 
                                $input3 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "interpersonal3." -t halt".';
                                $output3 = exec($input3);
                                echo "<em>".$output3 . "</em>"."<br>";

                                echo "<strong>Departamento de Medicina</strong><br>"; 
                                $input4 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "interpersonal4." -t halt".';
                                $output4 = exec($input4);
                                echo "<em>".$output4 . "</em>"."<br>" . "<br>";
                            } else {
                                if ($inte == "intrapersonal") {
                                    echo "<strong>Departamento de Humanidades y Filosofía</strong><br>"; 
                                    $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "intrapersonal." -t halt".';
                                    $output = exec($input);
                                    echo "<em>".$output . "</em>"."<br>";

                                    echo "<strong>Departamento de Psicología</strong><br>"; 
                                    $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "intrapersonal1." -t halt".';
                                    $output1 = exec($input1);
                                    echo "<em>".$output1 . "</em>"."<br>" . "<br>";
                                } else {
                                    if ($inte == "naturalista") {
                                        echo "<strong>Departamento de Producción y Sanidad Vegetal</strong><br>"; 
                                        $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista." -t halt".';
                                        $output = exec($input);
                                        echo "<em>".$output . "</em>"."<br>";

                                        echo "<strong>Departamento de Recursos Naturales y Sistemas Agroforestales</strong><br>"; 
                                        $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista1." -t halt".';
                                        $output1 = exec($input1);
                                        echo "<em>".$output1 . "</em>"."<br>";

                                        echo "<strong>Departamento de Biología</strong><br>"; 
                                        $input2 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista2." -t halt".';
                                        $output2 = exec($input2);
                                        echo "<em>".$output2 . "</em>"."<br>";

                                        echo "<strong>Departamento de Química</strong><br>"; 
                                        $input3 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista3." -t halt".';
                                        $output3 = exec($input3);
                                        echo "<em>".$output3 . "</em>"."<br>";

                                        echo "<strong>Facultad de Ciencias Humanas</strong><br>"; 
                                        $input4 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista4." -t halt".';
                                        $output4 = exec($input4);
                                        echo "<em>".$output4 . "</em>"."<br>";

                                        echo "<strong>Departamento de Ciencias Sociales</strong><br>"; 
                                        $input5 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista5." -t halt".';
                                        $output5 = exec($input5);
                                        echo "<em>".$output5 . "</em>"."<br>";

                                        echo "<strong>Departamento de Recursos Hidrobiológicos</strong><br>"; 
                                        $input6 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista6." -t halt".';
                                        $output6 = exec($input6);
                                        echo "<em>".$output6 . "</em>"."<br>";

                                        echo "<strong>Facultad de Educación</strong><br>"; 
                                        $input7 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista7." -t halt".';
                                        $output7 = exec($input7);
                                        echo "<em>".$output7 . "</em>"."<br>";

                                        echo "<strong>Facultad de Ingeniería Agroindustrial</strong><br>"; 
                                        $input8 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista8." -t halt".';
                                        $output8 = exec($input8);
                                        echo "<em>".$output8 . "</em>"."<br>";

                                        echo "<strong>Departamento de Producción y Procesamiento Animal</strong><br>"; 
                                        $input9 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista9." -t halt".';
                                        $output9 = exec($input9);
                                        echo "<em>".$output9 . "</em>"."<br>";

                                        echo "<strong>Departamento de Salud Animal</strong><br>"; 
                                        $input10 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "naturalista10." -t halt".';
                                        $output10 = exec($input10);
                                        echo "<em>".$output10 . "</em>","<br>"."<br>";
                                       

                                    } else {
                                        if ($inte == "linguistica") {
                                            echo "<strong>Departamento de Lingüística e Idiomas</strong><br>"; 
                                            $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "linguistica." -t halt".';
                                            $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "linguistica1." -t halt".';
                                            $output = exec($input);
                                            $output1 = exec($input1);
                                            echo "<em>".$output . "</em>"."<br>";
                                            echo "<em>".$output1 . "</em>"."<br>";

                                            echo "<strong>Facultad de Educación</strong><br>"; 
                                            $input2 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "linguistica2." -t halt".';
                                            $output2 = exec($input2);
                                            echo "<em>".$output2 . "</em>"."<br>"."<br>";
                                            
                                    
                                        } else {
                                            if ($inte == "logica_matematica") {
                                                echo "<strong>Departamento de Administración de Empresas</strong><br>"; 
                                                $input = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica." -t halt".';
                                                $output = exec($input);
                                                echo "<em>".$output . "</em>"."<br>";

                                                echo "<strong>Departamento de Matemáticas y Estadística</strong><br>"; 
                                                $input1 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica1." -t halt".';
                                                $output1 = exec($input1);
                                                echo "<em>".$output1 . "</em>"."<br>";

                                                echo "<strong>Departamento de Sistemas</strong><br>"; 
                                                $input2 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica2." -t halt".';
                                                $output2 = exec($input2);
                                                echo "<em>".$output2 . "</em>"."<br>";

                                                echo "<strong>Departamento de Economía</strong><br>"; 
                                                $input3 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica3." -t halt".';
                                                $output3 = exec($input3);
                                                echo "<em>".$output3 . "</em>"."<br>";

                                                echo "<strong>Departamento de Electrónica</strong><br>"; 
                                                $input4 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica4." -t halt".';
                                                $output4 = exec($input4);
                                                echo "<em>".$output4 . "</em>"."<br>";

                                                echo "<strong>Departamento de Física</strong><br>"; 
                                                $input5 = '"C:\Program Files\swipl\bin\swipl" -s "C:\Program Files\swipl\bin\reglas.pl" -g "logica_matematica5." -t halt".';
                                                $output5 = exec($input5);
                                                echo "<em>".$output5 . "</em>"."<br>"."<br>";


                                                                                         

                                            }
                                        }
                                    }

                                }
                            }
                        }
                    }
                }


                $i++;
                if ($i == 3) {
                    $i = 0;
                    break;

                }

            }

            ?> 
                       
                        
                   
    </div>
    
    </div>
    
  
           
    <div class="btn-test">       
            <div class="d-grid gap-2 d-md-block">
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdC5DKr1GQHGU1LxJWrylzFBRqxuRSJSqoXhgKQTEqHSF6QTg/viewform?vc=0&c=0&w=1&flr=0" class="btn btn-warning" type="submit">REALIZAR ENCUESTA</a>
  <a href="index.php" class="btn btn-danger" type="submit"><strong>X</strong> Salir</a>
</div>
          </div>
            
         
	

    <script>
        <?php
        echo "var userName ='$_POST[userName]';";
        echo "var espacial = '$e';";
        echo "var cinetico_corporal = '$c';";
        echo "var musical = '$m';";
        echo "var interpersonal = '$i';";
        echo "var intrapersonal = '$r';";
        echo "var naturalista = '$n';";
        echo "var linguistica = '$l';";
        echo "var logica_matematica = '$g';";


        ?>
    </script>

    <script type='text/javascript'>
        $(document).ready(function () {
            $(window).resize(function () {
                window.location.href = window.location.href;
            });
        });
    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script type="text/javascript" src="js/myChartjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jspdf/date.js"></script>
    <script type="text/javascript" src="js/jquery/jqueryv3.6.0.js"></script>
    <script type="text/javascript" src="js/jspdf/jspdfv1.4.1.min.js"></script>
    <script type="text/javascript" src="js/jspdf/configuracionExport.js"></script>

    <script type="text/javascript" src="js/logoBase64.js"></script>
</body>

</html>