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
        
        //1
        echo"ejercicio1<br>";
        echo "HOLA MUNDO";
        
        //2
        echo"<p>ejercicio2<br>";
        echo "<strong>ADIOS MUNDO</strong>";
        
        //3
        echo"<p>ejercicio3<br>";
            define("destino", "incierto");
            echo "el día de mañana:".destino."";
          
        //4    
        echo"<p>ejercicio4<br>";
            define("destino2", destino);
            echo "el dia de hoy:".destino2."";
        
        //5    
        echo"<p>ejercicio5<br>";
            define(destino2,"");
        
        //6
        echo"<p>ejercicio6<br>";
            define("cookies","<<<PEPE
                    HTML (HyperText Markup Language) es el primer lenguaje que 
                        una persona debe conocer si desea comenzar a realizar 
                            páginas web. HTML no es un lenguaje de programación,
                                sino una lenguaje descriptivo, una serie de 
                                    etiquetas que el navegador interpretará de 
                                        una u otra forma para mostrar distintos 
                                            contenidos por pantalla.
        PEPE");
               
            echo cookies;
        
        
        ?>
        
        
        
        
        
    </body>
</html>
