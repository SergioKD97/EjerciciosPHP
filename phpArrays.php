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
  
        /////////////////////////1
        echo"<p>ejercicio1<br>";
        
        $numPar = array("2","4","6","8","10");
        $numElementosA = count($numPar);
        
        for($i=0;$i< $numElementosA;$i++){
            echo("$numPar[$i]<br>");
        }
        
        /////////////////////////2
        echo"<p>ejercicio2<br>";
        
        $v[1]=90;
        $v[30]=7;
        $v['e']=99;
        $v['hola']=43;
        
        foreach ($v as $prueba) {
            echo("$prueba<br>");
        }
        
        /////////////////////////3
        echo"<p>ejercicio3<br>";        
        
        $MesPeli['enero'] =9;
        $MesPeli['febrero'] =12;
        $MesPeli['marzo'] =0;
        $MesPeli['abril'] =17;
        $numElementosA1 = count($MesPeli);
        
        foreach ($MesPeli as $mes => $pelis) {
            if($pelis != 0){    
            echo("el mes de $mes he visto $pelis peliculas<br>");
            }
            
        }
        
        /////////////////////////5
        echo"<p>ejercicio5<br>";        
        
        $persona['Nombre']='Pedro Torres';
        $persona['Dirección']='C/ Mayor,37';
        $persona['Teléfono']=123456789;
        
        foreach ($persona as $datos => $valor) {
            echo "$datos: $valor<br>";
        }
        
        
        /////////////////////////6
        echo"<p>ejercicio6<br>";         
        
        $ciudad = array("Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago");
        $numElementosA2 = count($ciudad);
        
        for($i=0;$i< $numElementosA2;$i++){
           echo("La ciudad con indice $i tiene el nombre de $ciudad[$i]<br>");
            
        }
        
        
        
        /////////////////////////7
        echo"<p>ejercicio7<br>";        
        $ciudad1['MD'] = 'Madrid';
        $ciudad1['BC'] = 'Barcelona';
        $ciudad1['LD'] = 'Londres';
        $ciudad1['NY'] = 'New York';
        $ciudad1['LA'] = 'Los Ángeles';
        $ciudad1['CG'] = 'Chicago';

        foreach ($ciudad1 as $Abreviado => $nombreC) {
            echo("El índice del array que contiene como valor $nombreC es $Abreviado<br>");
        }
        
        
        ?>
    </body>
</html>
