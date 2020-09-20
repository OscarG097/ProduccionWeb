##Control de cambios del trabajo
-- Desde 29/08
Cambios en la página de productos (Agregado de colores, marcas)
Cambios en el CSS para complementar lo anterior
Se agrega checkbox para los productos
Se agrega en contacto el apartado "Teléfono", no se consigue crear el radio para área de consulta
Se agregan deportes para el filtrado de productos

--Desde 06/09
Se hicieron cambios en la parte de contacto, agregado de lista desplegable
Se crearon arrays para los productos (Todavía no estan en uso)
Se agregaron productos para utilizarlos como destacados
Se hicieron cambios en el detalle de ordenado de productos (A->Z / Z->A)

--20/09
Borrado de include de contacto.php apuntaba a una parte del menu que no exite
Borrado de blog-details-php quedo del template original
Creacion de carpeta clases, contiene 3 archivos php para que funcione la BD
Creacion de db_con.php ahi esta guardada la configuracion de arranque de sql
Creacion de menu_de_filtrado.php dentro de carpetas partes, lo que hace es hacer el filtrado por marca y categoria
Creacion de carpeta pagina_productos dentro de img, aca estan las imagenes con numero de id, que se usan en la pagina productos
Modificacion de header.php se agrego 2 require_once para agregar el dbo y los productos, ademas del try para que traiga la BD
Modificacion de productos.php se borro todas las imagenes viejas del template y se puso las de la pagina desde BD con el filtrado, ademas al costado funciona el filtrado por marcas y categorias
El que pueda que revise que la pagina productos.php todos los productos quedaron en lista en vez de 1 al lado del otro 
