# Actividad2: Carga de m贸dulos 

## Descripci贸n 馃搵 

Reconvertir archivos a php organizar navegador y footer en m贸dulos y cargarlos con requires. 

## Enunciado 馃搾 

1. Pasar todos los .html a .php, cambiando los links del navegador. 

2. Del producto de index.php, sustituir por variables el: 

- T铆tulo 
- Descripci贸n 
- Precio 

Al inicio del archivo guardamos las variables con la informaci贸n: 

    $titulo = 鈥淟enovo...鈥? etc. 

Y en el html, sacamos por pantalla la informaci贸n mediante echo o <?= ?> 

 

3. Coger el c贸digo html correspondiente al navegador y footer y guardarlo como dos m贸dulos aparte. Por ejemplo: 

    modules/navigator.php 
    modules/footer.php 

4. Cargar el navegador y el footer en todas las p谩ginas (index.php, contacto.phpy servicios.php ) 


6. OPCIONAL:  Clase Activa en el navegador.  

Si clicamos en el enlace de 鈥淐ontacto鈥?, y por lo tanto est谩 cargado contacto.php, el link del navegador tiene que indicar que estamos en la p谩gina de productos mediante un estilo diferente. 

Lo mismo si clicamos en servicios: 

Esto lo podemos hacer del siguiente modo: 

    1. Una clase css  a.link.active { text-decoration: underline } 

    2. Si estamos en la p谩gina contacto --> ponemos clase 鈥渁ctive鈥? al link de contacto. Si estamos en la p谩gina de servicios 鈥?-> ponemos clase 鈥渁ctive鈥? al link de servicios. 