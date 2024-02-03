<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
 <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Actualizar Libro</title>
</head>
<body>
    <h1> Actualizar Libro</h1>
    <!--  <form action="bibliotecaController" method="get">
        <input type="hidden" name="isbn" value="${param.isbn}" />
        <input type="hidden" name="action" value="actualizar" />
        Nuevo ISBN: <input type="text" name="nuevoIsbn" value="${param.isbn}" /><br>
        Nuevo Título: <input type="text" name="nuevoTitulo" value="${param.titulo}" /><br>
        Nuevo Autor: <input type="text" name="nuevoAutor" value="${param.autor}" /><br>
        <input type="submit" value="Actualizar" />
    </form>-->
    
    <form action="ActualizarController" method="post">
    <label>ISBN</label>
    <input type="text" value="${libro.isbn}" name="isbn"><br>
    <label>Titulo</label>
    <input type="text" value="${libro.titulo}" name="titulo"><br>
    <label>Autor</label>
    <input type="text" value="${libro.autor}" name="autor"><br>
    
    <input type="submit" value="Guardar">
    
    
    </form>
    
</body>
</html>