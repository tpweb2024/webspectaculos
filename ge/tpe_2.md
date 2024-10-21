TPE - Parte 2

Consigna

Para la segunda etapa del trabajo, se dará continuidad al desarrollo del sitio web dinámico
basado en el modelo de datos propuesto en la primera entrega.
El sitio debe cumplir con los siguientes requerimientos:

Requerimientos Funcionales

Acceso público
    Deben existir diferentes secciones donde se muestre el contenido dinámicamente
    generado desde la base de datos. Estas secciones pueden ser accedidas de manera
    pública, no es necesario loguearse.
    ● (A) Listado de ítems: Se debe poder visualizar todos los ítems cargados
    ● (A) Detalle de ítem: Se debe poder navegar y visualizar cada ítem particularmente
    ● (B) Listado de categorías: Se debe poder visualizar un listado con todas las
    categorías cargadas
    ● (B) Listado de ítems por categoría: Se debe poder visualizar los ítems
    perteneciente a una categoría seleccionada
    Importante: En cada ítem siempre se debe mostrar el nombre de la categoría a la que
    pertenece.

Acceso administrador de datos
    Debe existir una sección para la administración de datos, la cual es accedida solo a
    usuarios administradores del sitio.

    ● (A) El usuario administrador debe loguearse con usuario y contraseña.
    ○ Debe exisitir al menos un administrador con usuario “webadmin” y
    contraseña “admin” para pruebas.
    ● (B) El usuario debe poder desloguearse (logout)
    ● Solo los usuarios logueados pueden modificar las categorías y los ítems.
    Se debe crear servicios de ABM (alta/baja/modificación) para administrar los datos:
    (A) Administrar Ítems (entidad del lado N de la relación).
    ● Lista de Items (Noticias/Productos/…)
    ● Agregar Items (Noticias/Productos/…)
    ● Eliminar Items (Noticias/Productos/…)
    ● Editar Items (Noticias/Productos/…)
    Importante: Al agregar Items (Noticias/Productos/…) se debe poder elegir la
    categoría a la que pertenecen utilizando un select que muestre el nombre de la
    misma.
    (B) Administrar Categorías (entidad del lado 1 de la relación)
    ● Lista de Categorías
    ● Agregar Categorías
    ● Eliminar Categorias
    ● Editar Categorías.
    ● Se puede subir una foto cuando se crea el ítem o categoría (Puede cargarse
    por url).


Base de datos
    El sistema debe acceder a la base de datos a partir de las constantes definidas en un
    config.php. Si la base no existe debe crearse y llenarse con datos iniciales
    automáticamente. (Ver Config & Auto deploy )

Requerimientos Técnicos (no funcionales)
    ● Todos los HTML deben mostrarse utilizando plantillas (phtml o Smarty)**.
    ● Todas las acciones realizadas en la página deben estar manejadas utilizando el
    patrón MVC.
    ● Las URL deben ser semánticas.
    ● El sitio debe incluir el archivo sql para instalar la base de datos.

Notas
    *Autenticación y seguridad: Se recomienda comenzar con la sección “privada” sin
    autenticación. Una vez dada la clase de seguridad es muy sencillo protegerlo con usuario y
    contraseña.
    **Vistas: Se recomienda mantener una UI muy sencilla hasta que se dé la clase de
    Templates.
