<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Energía Generada</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="basicoPhp7.php">Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section class="problema">
  <h2>Problema: Cálculo de Energía Generada por un Colector Solar</h2>
  <p>Descripción:</p>
  <p>
    Un colector solar de 4 m² debe calentar agua para uso doméstico. Sabiendo que el coeficiente de radiación solar K = 0.9 cal/min·cm², que el consumo de agua es constante a razón de 6 l/min, y que el sistema funciona durante 2 horas, determina el aumento de temperatura del agua. <br>
    El agua inicialmente está a 8°C y no hay pérdidas de calor.
  </p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
<p>
    Q = K * t * S (en Kcal) <br>

</p>
</section>
<section class="datos">
<h2>Datos:</h2>
   Coeficiente de radiación K  = 0.9 cal/min·cm²<br>
   Área del colector S = (4 m²)<br>
   Tiempo t = 120 minutos (2 horas)<br>
   Flujo de agua = 6 l/min<br>
   Densidad del agua = 1 kg/l<br>
   Calor específico del agua c = 1 kcal/kg·°C<br>
</section>
<section class="calculos">
<h2>Solución</h2>
<p>
    Si no hay pérdidas de calor, el rendimiento es del 100%, y la energía solar o absorbida es igual que la energía útil o calorífica necesaria para calentar agua. <br><br>
    Volumen de agua: 6 l/min , (2,60)min = 720 <br>
    Masa de agua:720 la densidad del agua es 1 kg/l <br>
    Energía generada: Q = K *t * S  <br>
    Energía necesaria: E_t = c,m (T_f - T_i) <br>
</p>
</section>
<?php
    function calcula_resultados() {
        $K = 0.9; 
        $t = 120; 
        $S = 40000; 
        $c = 1; 
        $flujo = 6; 
        $T_i = 8; 

        // Cálculo de la energía generada en kcal
        $volumen = $flujo * $t; // Volumen del agua en litros
        $Q = $K * $t * $S / 1000; // Convertir de cal a kcal
        $m = $volumen; // Masa del agua (dado que 1 kg/l)
        $E_t = $c * $m * ($Q / ($c * $m)); // Energía necesaria
        $T_f = ($Q / ($c * $m)) + $T_i; // Temperatura final

        return array($Q, $E_t, $T_f, $volumen);
    }

    list($Q, $E_t, $T_f, $volumen) = calcula_resultados();
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php 
print "<h1>Volumen del agua calentada: ".$volumen." kg</h1>";
 print "<h1>Energía necesaria (E_t): ".$E_t." kcal</h1>";
 print "<h1>Temperatura final del agua (T_f): ".$T_f." °C</h1>";

?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
