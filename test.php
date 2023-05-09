<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocatest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>



<script type="text/javascript">
    function mayus(e) {

    e.value = e.value.toUpperCase();

            }
</script>
         
<body>
    
<div class="container4">
<div class="imgInte3">
                <img src="img/udenar_logo_3.png" class="d-block w-100" >
            </div>
</div>
<div class="container3">

    <div class="container1">
  
        <div class="abs-center">
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuemin="0"
                    aria-valuemax="100">
                </div>
            </div>
            <legend>Test Vocacional </legend>
            <form name="formulario" id="regiration_form" novalidate action="testResult.php"  method="post">
                <fieldset>
                    <h2>1 ¿Qué te resulta más sencillo hacer?</h2>
                    <div class="form-group">
                    <div class="form-check">
                          <p><b>a.</b> <input type="radio" name="preg1" value="espacial">
                               Me resulta sencillo construir y ver las cosas en tres dimensiones.</p>
                        <p><b>b.</b> <input type="radio" name="preg1" value="interpersonal"> 
                               Me siento cómodo disfrutando de situaciones sociales nuevas.</p>
                        <p><b>c.</b> <input type="radio" name="preg1" value="naturalista"> 
                               Me gusta mucho tener mascotas y procuro que estén sanos y bien cuidados.</p>
                        <p><b>d.</b> <input type="radio" name="preg1" value="intrapersonal">
                               Me gusta escribir un diario, con todas mis experiencias personales.</p>
                    </div>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" name="btn" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>2. ¿En tus tiempos libres, <br>
                    cuál es la actividad que más se acopla a ti?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg2" value="espacial"> 
                              Me gusta dibujar o pintar.</p>
                        <p><b>b.</b> <input type="radio" name="preg2" value="cinetico_corporal"> 
                              Me gusta hacer ejercicio, mantenerme fuerte y sano.</p>
                        <p><b>c.</b> <input type="radio" name="preg2" value="musical"> 
                              La música es un componente altamente significativo de mi existencia.</p>
                        <p><b>d.</b> <input type="radio" name="preg2" value="interpersonal"> 
                              Me encanta compartir con una variedad de personas.</p>
                        <p><b>e.</b> <input type="radio" name="preg2" value="intrapersonal"> 
                              Frecuentemente pienso que la vida hay que aprovecharla al máximo<br> por 
                              lo que no malgasto mi tiempo en cosas sin importancia.</p>
                        <p><b>f.</b> <input type="radio" name="preg2" value="naturalista"> 
                              Observo con agrado, la fauna silvestre y me gusta  dar de comer a los animales.</p>
                        <p><b>g.</b> <input type="radio" name="preg2" value="linguistica"> 
                              Leo y disfruto de la poesía y ocasionalmente escribo poemas.</p>
                        <p><b>h.</b> <input type="radio" name="preg2" value="logica_matematica"> 
                              Siempre trato de buscar la relación causa-efecto de la cosas o acontecimientos.</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>3. ¿En tu vida escolar, qué materias <br>
                    te resultaron más fáciles de aprobar?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg3" value="espacial"> 
                               Puedo combinar bien los colores, formas, sombras y<br> textura en un trabajo que realizo. </p>
                        <p><b>b.</b> <input type="radio" name="preg3" value="cinetico_corporal"> 
                               Me agrada participar y disfruto mucho en actividades deportivas, tanto en<br> grupo como individual.</p>
                        <p><b>c.</b> <input type="radio" name="preg3" value="musical"> 
                               Tengo un sentido muy agudo de los tonos, el tiempo y el ritmo en la música.</p>
                        <p><b>d.</b> <input type="radio" name="preg3" value="naturalista"> 
                               Si pudiera sería miembro de las organizaciones que buscan proteger la <br>
                               flora y la fauna (ecología), preservando el cuidado de la naturaleza.</p>
                        <p><b>e.</b> <input type="radio" name="preg3" value="linguistica"> 
                                Me gusta aprender cada día nuevas palabras y lo hago con facilidad.</p>
                        <p><b>f.</b> <input type="radio" name="preg3" value="logica_matematica"> 
                                Las matemáticas siempre han sido uno de mis cursos favoritos y <br>voluntariamente
                                 he seguido mejorando en el curso de matemáticas.</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>4. ¿Cómo te sientes cuando estas en un<br> ambiente abierto y rodeado de personas?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg4" value="cinetico_corporal"> 
                             Disfruto mucho de actividades al aire libre. </p>
                        <p><b>b.</b> <input type="radio" name="preg4" value="musical"> 
                             Mantengo con música en mi celular o MP4 y disfruto escuchándola.</p>
                        <p><b>c.</b> <input type="radio" name="preg4" value="interpersonal"> 
                             Siento que le agrado y caigo bien a las personas de todas las edades.</p>
                        <p><b>d.</b> <input type="radio" name="preg4" value="intrapersonal"> 
                             Con frecuencia pienso acerca de la influencia que tengo sobre los demás.</p>
                        <p><b>e.</b> <input type="radio" name="preg4" value="logica_matematica"> 
                             Me agrada y discuto con otros sobre temas y datos de estadística y cálculos numéricos.</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente" />
                </fieldset>

                <fieldset>
                    <h2>5. ¿Cuál es la fortaleza que más te<br> sientes orgulloso u orgullosa?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg5" value="logica_matematica"> 
                              Me resulta fácil manejar diversos símbolos numéricos.</p>
                        <p><b>b.</b> <input type="radio" name="preg5" value="linguistica"> 
                              Estoy orgulloso(a) de tener un amplio vocabulario. </p>
                        <p><b>c.</b> <input type="radio" name="preg5" value="naturalista"> 
                              En alguna época de mi vida he sido coleccionista de cosas de la<br> naturaleza
                              (como piedras, hojas, etc.)</p>
                        <p><b>d.</b> <input type="radio" name="preg5" value="intrapersonal">
                              Me agrada como soy y tengo una clara idea de mis fortalezas y debilidades.</p>
                        <p><b>e.</b> <input type="radio" name="preg5" value="interpersonal">
                              Respondo a los demás con entusiasmo sin prejuicios o medias palabras.</p>
                        <p><b>f.</b> <input type="radio" name="preg5" value="musical"> 
                              Tengo intereses musicales amplios que incluyen tanto lo contemporáneo<br> como lo clásico.</p>
                        <p><b>g.</b> <input type="radio" name="preg5" value="cinetico_corporal"> 
                             Tengo excelente equilibrio, buena coordinación ojo/mano y me resulta<br> atrayente los deportes</p>
                        <p><b>h.</b> <input type="radio" name="preg5" value="espacial"> 
                            Tengo habilidad para crear y hacer cosas con las manos</p>          
                             </div>
                             <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    
                    <h2>6. ¿Al momento de aprender un tema nuevo, <br>con cual método te sentirías identificado(a)?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg6" value="espacial"> 
                              Necesito de imágenes, figuras, esquemas para entender mejor los hechos</p>
                        <p><b>b.</b> <input type="radio" name="preg6" value="cinetico_corporal"> 
                              Soy una persona activa y disfruto mucho del movimiento</p>
                        <p><b>c.</b> <input type="radio" name="preg6" value="interpersonal"> 
                              Tengo bien desarrollada mi intuición y pronto me doy cuenta de las cosas usando mi 6º sentido</p>
                        <p><b>d.</b> <input type="radio" name="preg6" value="intrapersonal">
                              A menudo busco en mí las debilidades que yo observo en los demás</p>
                        <p><b>e.</b> <input type="radio" name="preg6" value="naturalista"> 
                              Disfruto y obtengo alegrías del mundo viviente que me rodea</p>
                        <p><b>f.</b> <input type="radio" name="preg6" value="linguistica"> 
                              Me agrada escuchar conferencias que me planteen retos</p>
                        <p><b>g.</b> <input type="radio" name="preg6" value="logica_matematica"> 
                              Con frecuencia establezco razones y relaciones en el mundo físico que me rodea</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>7. No me pierdo con facilidad y se orientarme <br>con mapas o planos sobre puntos
                         y direcciones<br> que me son desconocidas</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg7" value="espacial"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg7" value="no"> NO</p>
                    </div>
                   
                    <h2>8. Disfruto mucho de las actividades de la<br> temporada de verano como nadar, correr, jugar</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg8" value="cinetico_corporal"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg8" value="no"> NO</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>9. Soy una persona con habilidades <br>tanto en música instrumental como vocal</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg9" value="musical"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg9" value="no"> NO</p>
                    </div>
                    
                    <h2>10. ¿Me atrae conocer los procesos<br> y las áreas que hacen funcionar a las empresas?</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg10" value="interpersonal"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg10" value="no"> NO</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>11. Me agrada mucho leer sobre los grandes<br> filósofos que han escrito 
                        sobre sus afanes,<br> sus luchas, las
                        alegrías y el amor de la vida</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg11" value="intrapersonal"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg11" value="no"> NO</p>
                    </div>
                    
                    <h2>12. Me encanta la jardinería y cuidar <br>las plantas de mi casa</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg12" value="naturalista"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg12" value="no"> NO</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <h2>13. Tengo habilidades para usar las <br>palabras en sentido figurado (hacer metáforas)</h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg13" value="linguistica"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg13" value="no"> NO</p>
                    </div>
                    
                    <h2>14. ¿Me actualizó respecto de los avances <br>tecnológicos y me intereso por investigar y conocer?
                    </h2>
                    <div class="form-group">
                        <p><b>a.</b> <input type="radio" name="preg14" value="logica_matematica"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg14" value="no"> NO</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                   
                    <h2>15. Mi educación musical empezó cuando <br>yo era niño(a) y continúa hasta el momento</h2>
                    <div>
                        <p><b>a.</b> <input type="radio" name="preg15" value="musical"> SI</p>
                        <p><b>b.</b> <input type="radio" name="preg15" value="no"> NO</p>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <input type="button" class="next btn btn-success" value="Sigiente"/>
                </fieldset>

                <fieldset>
                    <div class="form-group">
                    <h5>Importante!!Verifica tus respuestas antes enviar! <br>en el boton VERIFICAR RESPUESTA, <br>sino te arroja mensaje de alerta<br> quiere decir que haz selecionado<br> correctamente cada pregunta </h5>
                        <input type="text" class="form-control is-valid" id="userName"
                            placeholder="Ingrese su nombre completo" name="userName" autocomplete="off"
                            pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required minlength="3" maxlength="50" onkeyup="mayus(this);">
                            <br>
                            
                        <div class="valid-feedback">
                            
                        </div>
                    </div>
                    <input type="button" class="previous btn btn-default" value="Anterior"/>
                    <button class="btn btn-warning" type="submit" onclick="return comprobar();">Verificar respuestas</button>
                    <button class="btn btn-success" type="submit" onclick="comprobar();">Continuar test</button>
                </fieldset>
            </form>
            </div>
        </div>        
        <div class="imgInte2">
                <img src="img/inteligencia.png" class="d-block w-100" >
            </div>
          
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/validationForm.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script type="text/javascript" src="js/jquery/jqueryv3.6.0.js"></script>
    
</body>


</html>