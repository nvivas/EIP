# Actividad 7. Formulario de Login

## Descripci贸n r谩pida 馃搵

Formulario de Login de usuario que haga validaciones de email y contrase帽a.
Si hay error mostrar por pantalla un mensaje. Si se pasan las validaciones, mostramos informaci贸n del usuario.

## Descripci贸n

1. Completar el form html con los atributos necesario para enviar la informaci贸n al mismo arhivo index.php. Petici贸n POST.
2. Recoger la informaci贸n y proteger las validaciones.
3. Validar los campos:
   3.1 Campos obligatorios: email y contrase帽a (no pueden ser vac铆os)
   3.2 El correo tenga formato de correo (texto@texto.texto)
   3.3 La contrase帽a tiene que tener al menos 6 caracteres, y no puede contener las palabras "password" ni "123456"
4. Si la validaci贸n completa es OK:
   4.1 NO mostramos el formulario
   4.2 Mostramos un div con informaci贸n de login del estilo: "Bienvenido: correo@usuario.com"
   4.3 En el navegador ocultar bot贸n de Login y mostrar uno de Logout
5. Si la validaci贸n completa NO ES OK:
   5.1 Mostramos el formulario
   5.2 Mostramos el error que ha ocasionado el no login.

## Recomendaciones

1 Utiliza funciones que tengan un 煤nico prop贸sito

- Validar si los campos obligatorios est谩n o no
- Validar si el correo tiene el formato adecuado
- Validar si la contrase帽a ...

2 Utiliza una 煤nica funci贸n que resuelva si se ha validado el login o no.

3 Haz m贸dulos diferentes y c谩rgalos con requires o includes. Por ejemplo funciones.php, formlogin.php, data.php...
