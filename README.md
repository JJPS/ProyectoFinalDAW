- [TÍTULO DE PROYECTO](#título-de-proyecto)
  - [Antecedentes](#antecedentes)
- [REQUISITOS](#requisitos)
  - [Requisitos funcionales](#requisitos-funcionales)
- [ANÁLISIS Y DISEÑO WEB](#análisis-y-diseño-web)
  - [Guía de estilos](#guía-de-estilos)
  - [Prototipo web y boceto de la estructura](#prototipo-web-y-boceto-de-la-estructura)
  - [Planificación de tareas](#planificación-de-tareas)
  - [Base de datos](#base-de-datos)
    - [Diseño Entidad Relación de la BBDD](#diseño-entidad-relación-de-la-bbdd)
    - [Modelo relacional BBDD](#modelo-relacional-bbdd)
    - [Script de creación BBDD](#script-de-creación-bbdd)
    - [Consultas](#consultas)
  - [Validación de formularios](#validación-de-formularios)
  - [Jerarquía de directorios](#jerarquía-de-directorios)
    - [Contenido directorios](#contenido-directorios)
  - [Diseño de la interface](#diseño-de-la-interface)
    - [Estructura gráfica de la interface](#estructura-gráfica-de-la-interface)
- [PRUEBAS](#pruebas)
  - [Diseño de casos de prueba](#diseño-de-casos-de-prueba)
  - [Implementación de pruebas](#implementación-de-pruebas)
  - [Análisis de resultados](#análisis-de-resultados)
- [DESPLIEGUE](#despliegue)
- [HERRAMIENTAS](#herramientas)
- [LENGUAJES](#lenguajes)
- [PRODUCTO](#producto)
  - [Página de Inicio](#página-de-inicio)
- [BIBLIOGRAFÍA](#bibliografía)

# TÍTULO DE PROYECTO
## Antecedentes
Breve descripción del proyecto.

Este proyecto muestra todos los pasos a seguir para recolectar, organizar, tratar y construir un
portal Web empezando desde cero, para ...

Se han utilizado distintos lenguajes de programación, como pueden ser PHP y JavaScript para
su desarrollo, y para su diseño se ha hecho uso de Photoshop y de estilos CSS...

# REQUISITOS

Se describen de forma concisa los requisitos funcionales de vuestra aplicación.
## Requisitos funcionales

Se enumeran todos los requisitos funcionales de vuestra aplicación. Descripción detallada de cada requisito, incluyendo su funcionamiento, validaciones si fuesen necesarias, y cualqier información relevante.

**Por ejemplo:**

R1: Inicio de sesión con usuario autenticado
R1.1: El usuario podrá recuperar su contraseña 
R1.2: El usuario tendrá que ser autenticado por un administrador
R1.3: El usuario deberá usar una dirección de correo válida
R2: Administración de usuarios
R2.1: El administrador gestionará usuarios, productos y compras.
R2.2: Cualquier operación realizada sobre los usuarios deberá almacenarse en un log.
...

Esto se realiza para cada uno de los requisitos de nuestra aplicación.

Además de los requisitos de vuestra aplicación hay que añadir los siguientes:

- R1. Diseño responsive
- R2. Control de errores en formularios que deben incluir como mínimo un registro de usuario
- R2.1 El registro de usuarios contendrá cómo mínimo los siguientes campos: 
  - DNI
  - Teléfono
  - Mail
  - Fecha de nacimiento
  - Teléfono 
  - Dirección
  - Provincia (elegible desde un desplegable)
  - Población (se rellenará según los datos de la provincia seleccionada.)
- R3. Acceso restringido a parte privada a usuarios no registrados.

# ANÁLISIS Y DISEÑO WEB

## Guía de estilos

Debemos señalar los colores corporativos y el diseño del logo. Justificando su uso.
## Prototipo web y boceto de la estructura

Mookup del proyecto. 

## Planificación de tareas

Con un diagrama de Gantt, planificamos el desarrollo del proyecto. Pautando qué vamos hacer y cuándo lo vamos a finalizar.

## Base de datos
### Diseño Entidad Relación de la BBDD

Realizamos el Esquema Entidad Relación de la BBDD de nuestra aplicación.

Se debe mostrar el diseño relacional. No lo que os muestra la aplicación MySQL Workbench o el gestor que usais. Quiero los diagrmas E-R con cajas para las entidades y rombos para las relaciones. Se deben tener en cuenta las cardinalidades.
### Modelo relacional BBDD

Se muestra el diseño de la BBDD según el GUI que esteís usando. Deben aparecer todas las entidades en la 3FN, los campos de las tablas y las cardinalidades. 
### Script de creación BBDD

Scrip de creación de las BBDD, sin los datos. Cada una de las tablas con sus claves referenciadas. 

El lector debe comprender lo que está leyendo, no se pone el script sin más, hay que explicarlo.

### Consultas 

Se incluyen y describen todas las consultas que se emplean en el desarrollo del proyecto.

## Validación de formularios

Se incluyen todos los formularios que se emplean en la WEB y se especifican qué tipo de validación se va ha realizar.

## Jerarquía de directorios

Mostramos el árbol de directorios de nuestro proyecto WEB, tal y como lo visualizaríamos en la carpeta WWW.

Podemos usar la herramienta `tree -d` en entorno linux.

![ArbolDirectorios](Imagenes/ArbolDirectorios.png)

### Contenido directorios

Breve explicación de lo que tenemos contenido en cada directorio. Por ejemplo:

> `./` -> Contiene los ficheros principales “index.php”, “estilos.css”, “realizar_recomendacion.php”, “realizar_enviao.php”, “descargas.php” y “javascript.js”.
> 
> `descargas` -> Contiene los archivo PDF descargables desde el sitio web.
> 
> `Esp` -> Contiene las imágenes y las páginas web en español.
> 
> `Eus` -> Contiene las imágenes y las páginas web en euskera.
> 
> ...

## Diseño de la interface

En base al apartado [Prototipo web y boceto de la estructura](#prototipo-web-y-boceto-de-la-estructura) describimos el contenido de la interface de nuestra aplicación. Por ejemplo:

> El sitio web consta de cinco partes fundamentales. Esta estructura es común en todas las páginas que forman el sitio web.
> 
> **Cabecera**: Contiene el logo de la empresa, que está formado por las siglas “ostargi” cruzadas por una “O” mayúscula. Además, en la parte superior de la cabecera, está el menú de selección de idioma.
> 
> **Panel horizontal**: Esta ubicado justo debajo de la cabecera. Contiene los enlaces a las páginas: inicio, como llegar, contactar

### Estructura gráfica de la interface

Mostramos la estructura gráfica de nuestro diseño. Por ejemplo.

![EstructuraInterface](Imagenes/EstructuraInterface.png)

# PRUEBAS

El objetivo de las pruebas es garantizar que la aplicación sea confiable, segura, eficiente y fácil de usar para los usuarios. El proceso de pruebas los vamos a dividir en tres etapas:

- Diseño de casos de prueba
- Implementación de pruebas
- Análisis de resultados

## Diseño de casos de prueba

En esta etapa, se definen los casos de prueba que se utilizarán para evaluar la funcionalidad de la aplicación. Estos casos de prueba deben ser lo suficientemente exhaustivos para cubrir todos los aspectos importantes de la aplicación.

Por ejemplo:

> Nombre del caso de prueba: **Inicio de sesión exitoso**
> 
> Descripción: El objetivo de este caso de prueba es verificar que un usuario pueda iniciar sesión en la aplicación web de manera exitosa utilizando sus credenciales de inicio de sesión.
> 
> Precondiciones: 
> - El usuario debe tener una cuenta válida en la aplicación web.
> - El usuario debe tener un nombre de usuario y contraseña válidos.
> 
> Pasos: 
> 
> - Navegar a la página de inicio de sesión de la aplicación web.
> - Ingresar el nombre de usuario del usuario en el campo "Nombre de usuario".
> - Ingresar la contraseña del usuario en el campo "Contraseña".
> - Hacer clic en el botón "Iniciar sesión".
> 
> Resultados esperados:
> - La aplicación web debe validar las credenciales del usuario y permitir el acceso a la página principal de la aplicación.
> - El usuario debe ser redirigido a la página principal de la aplicación web.
> 
> Condiciones de aprobación:
> 
> - Si la aplicación web valida las credenciales del usuario y permite el acceso a la página principal de la aplicación, el caso de prueba se considera aprobado.
> - Si la aplicación web no valida las credenciales del usuario o no permite el acceso a la página principal de la aplicación, el caso de prueba se considera fallido.

## Implementación de pruebas

En esta etapa, se llevan a cabo las pruebas utilizando los casos de prueba definidos. Esto puede incluir pruebas manuales, automatizadas o una combinación de ambas.

Por ejemplo:

> Caso de prueba: CP1. Inicio de sesión exitoso
>
> Se realiza una prueba manual de Inicio de sesión con las siguientes casuísticas:
>
> - CP1.1 Usuario registrado en el sistema y contraseña correcta.
> - CP1.2 Usuario registrado en el sistema y constraseña incorrecta.
> - CP1.3 Usuario no registrado en el sistema.
>
## Análisis de resultados 

En esta etapa, se analizan los resultados de las pruebas para identificar errores y problemas en la aplicación. 

Por ejemplo:

> **Tabla resumen**
> 
> | Casos de prueba       |   |
> |-----------------------|:-:|
> | CP1. Inicio de sesión | Resultado | 
> | CP1.1                 | Ok   | 
> | CP1.2                 | Ok   | 
> | CP1.3                 | Fail | 
>
> Se han realizado 35 pruebas en total, de las cuales 33 fueron exitosas y 2 fallaron. De las 2 pruebas que fallaron fueron debidos a errores de la conexión de internet con el servidor.
> A partir de estos resultados podemos hacer las siguientes observaciones:
> - La mayoría de las pruebas fueron exitosas
> - Los errores fueron debidos a problemas de conectividad, por lo que hay que implementar mecanismos que notifiquen al usuario de este tipo de errores, ya que están fuera del control de la aplicación.
> - ...



# DESPLIEGUE

Creación de un Script en BASH que permita el despliegue en automático de la aplicación en cualquier servidor linux, que contenga un Apache+PHP y una base de datos SQL.

Se copia y describe el funcionamiento del script.

# HERRAMIENTAS

Descripción de todas las herramientas que se han usado para el desarrollo del proyecto. Por ejemplo:

> Para la realización del proyecto se han empleado las siguientes herramientas:
> ## Visual Studio
> 
> Descripción de Visual Studio
> 
> ### Características
> 
> Breve descripción de las características y plugins que hemos usado 
> 

# LENGUAJES

Descripción de los lenguajes y frameworks utilizados para el desarrollo del proyecto. Por ejemplo:

> ## HTML
> 
> Descripción de qué es HTML
> 
> ### Características
> 
> Breve descripción de sus características  
> 

# PRODUCTO

Se muestran diferentes pantallas que constituyen el desarrollo final de la aplicación:

## Página de Inicio

![EjemploInicio](Imagenes/EjemploInicio.png)

Y lo vamos realizando con todas las pantallas.
# BIBLIOGRAFÍA

Incluye la bibliografía y webgrafía que hayas empleado para el desarrollo de tu proyecto.



