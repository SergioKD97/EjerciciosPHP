<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        
$a = "Hola";
$$a = "Mundo";
        echo "$a";
        echo "$Hola";
        
        //////////////////////1
        echo"ejercicio1<br>";
        echo "HOLA MUNDO";
        
        //////////////////////2
        echo"<p>ejercicio2<br>";
        echo "<strong>ADIOS MUNDO</strong>";
        
        //////////////////////3
        echo"<p>ejercicio3<br>";
            $destino="incierto";
            echo "el día de mañana: $destino";
          
        //////////////////////4
        echo"<p>ejercicio4<br>";
            $destino2=$destino;
            echo "el dia de hoy: $destino2";
        
        //////////////////////5
        echo"<p>ejercicio5<br>";
            $$destino2="el nombre de esta variable es el valor de destino2";
            echo $incierto;

            
        //////////////////////6
        echo"<p>ejercicio6<br>";
        $cookies = <<<PACO
HTML (HyperText Markup Language) 
es el primer lenguaje que una persona
debe conocer si desea comenzar a realizar
páginas web. HTML no es un lenguaje de 
programación, sino una lenguaje descriptivo, 
una serie de etiquetas que el navegador 
interpretará de una u otra forma para mostrar
distintos contenidos por pantalla.
PACO;
        echo $cookies;       
            
        
        //////////////////////7
        echo"<p>ejercicio7<br>";        
        
        function revertir ($cookies){
            $paco = strrev($cookies);
            echo $paco;
        }
        revertir($cookies);
        
        
        
        
        //////////////////////8
        echo"<p>ejercicio8<br>";        
        
        $separado = explode(" ", $cookies);
       // print (explode(" ",$cookies));
        
        $numelentos = count($separado);
        for ($i=0; $i < $numelentos; $i++){
        print ("$separado[$i] <BR>\n");
        }
        
        
        /////////////////////////9
        echo"<p>ejercicio9<br>";              

        $meses = array("enero"=>31,"febrero"=>28,"marzo"=>31,"abril"=>30,"mayo"=>31,
                "junio"=>30,"julio"=>31,"agosto"=>31,"septiembre"=>30,"octubre"=>31,
                "noviembre"=>30,"diciembre"=>31);
 
        //reset($visitas); //Nos ponemos al comienzo 
 
        while (list($clave, $valor) = each($meses)) {
            echo "$clave tiene $valor días<br>"; 
        }
        
        
        
        /////////////////////////10
        echo"<p>ejercicio10<br>";         
        
        $directorio = opendir("../"); //ruta actual
        while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente
            echo "$archivo<br />";
        }


        
        
        
        ?>
        
        
        
        
        
    </body>
</html>
