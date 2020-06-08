<!DOCTYPE html>
<html>
<head>
    <title>Crear Libros</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="Mi Agenda Telefonica" />
    <link rel="stylesheet" type="text/css" href="../../css/crearU.css">
</head>

<body>
    <header >
        <div id="encabezado">  
            <div id="logo1">
                <img src="../../imagenes/log.png"  width="250" height="150" alt="Imagen de Portada" >
            </div>
            <div id="buscar">
                <form method="get" action="https://www.google.com/search">
                <input title="busqueda" name="q" type="text" class="floatright" id="cajabusqueda" value="" size="31" 
                 maxlength="255">
                <input name="botonbusq" type="submit" class="floatright" id="botonbusqueda" value="Buscar">
                </form> 	
            </div>  
            <div id="info">
                <a href="tel:+5930998801982"><img src="../../imagenes/contacto.png"  width="50" height="50" alt="Correo electronico" ></a>
                <a href="mailto:dtixi@est.ups.edu.ec"><img src="../../imagenes/sobre.jpg"  width="50" height="50" alt="Contactos Telefonico" ></a>
                <button><a href="index.html" >Regresar</a></button>
            </div>
        </div>  
    </header>
    
    <section class="secciones">
        <hr><hr>
        <form id="formulario01" method="POST" action="agregarLibros.php" >
        <h2> Registrar Libros </h2>
        <br>
        <label for="cedula">Titulo: </label><br>
        <input type="text" id="nombre" name="nombre" value="" placeholder="Ingrese el nombre ..."  required />
        <div id="mensaje1" class="mensaje"></div>
        <br>
        <label for="nombres">ISBM: </label><br>
        <input type="text" id="isbm" name="isbm" value="" placeholder="Ingrese el codigo de barra..." required/>
        <div id="mensaje2" class="mensaje"></div>
        <br>
        <label for="apellidos">Numero Paginas: </label><br>
        <input type="text" id="pag" name="pag" value="" placeholder="Ingrese el numero de paginas" required/>
        <div id="mensaje3" class="mensaje"></div>
        <br>
        <h2> Registar Capitulos </h2>
        <br>
        <label for="cedula">Numero Capitulo: </label><br>
        <input type="text" id="numeroC" name="numeroC" value="" placeholder="Ingrese el numero de capitulo ..."  required />
        <div id="mensaje1" class="mensaje"></div>
        <br>
        <label for="nombres">Titulo Capitulo: </label><br>
        <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese el titulo del capitulo" required/>
        <div id="mensaje2" class="mensaje"></div>
        <br>
        <label for="nombres">Autor: </label><br>
        <input type="text" id="autor" name="autor" value="" placeholder="Ingrese el titulo del capitulo" required/>
        <div id="mensaje2" class="mensaje"></div>
        <br>
        <br>
        <input type="submit" id="crear" name="crear" value="Aceptar" />
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
        </form>
</section>

 <footer>
    <hr><hr>
    <div class="footer1">
        <div id="caja3">
            <a href="https://www.wizardingworld.com/"><img src="../../imagenes/face.jpg"  width="50" height="50" alt="Imagen de Portada" ></a>
        </div>
        <div id="caja4">        
            <a href="https://www.instagram.com/harrypotterfilm/"><img src="../../imagenes/insta.jpg"  width="50" height="50" alt="Imagen de Portada" ></a>
        </div>
        <div class="footer2">
            <img src="../../imagenes/log.png"  width="230" height="120" alt="Imagen de Portada">
        </div>
    </div>

    <div class="info1">
        <h3>Informaci&oacute;n</h3>
        <p>&#8226; Nombre: Diana Fernanda Tixi Uyaguari </p>
        <p>&#8226; Universidad Polit&eacute;cnica Salesiana </p>
        <p>&#8226; Email: <a href="mailto:dtixi@est.ups.edu.ec">dtixi@est.ups.edu.ec</a></p>
        <p>&#8226; Call: <a href="tel:+5930998801982">(593) 0998801982</a></p>
        <p>&#169;Todos los derechos reservados</p>
    </div>

</footer>
 
</body>
</html>
