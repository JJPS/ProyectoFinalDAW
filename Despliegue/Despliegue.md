# DESPLIEGUE

Debemos construir un ejecutable en `shellscrip` que realice lo siguiente:

- Copia del código en la carpeta `/var/www/html`.
- Importación de la estructura de la BBDD y los datos en el servidor WEB.

Se le pasarán como parámetros el usuario y contraseña de la BBDD, si no se le pasa ningún parámetro realizará la importación con los parámetros por defecto.

El script se ejecutará con permisos de `sudo`.