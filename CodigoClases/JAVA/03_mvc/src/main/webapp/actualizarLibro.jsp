<<<<<<< HEAD
<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Actualizar Libro</title>
</head>
<body>
    <h1> Actualizar Libro</h1>
    <form action="bibliotecaController" method="get">
        <input type="hidden" name="isbn" value="${param.isbn}" />
        <input type="hidden" name="action" value="actualizar" />
        Nuevo ISBN: <input type="text" name="nuevoIsbn" value="${param.isbn}" /><br>
        Nuevo Título: <input type="text" name="nuevoTitulo" value="${param.titulo}" /><br>
        Nuevo Autor: <input type="text" name="nuevoAutor" value="${param.autor}" /><br>
        <input type="submit" value="Actualizar" />
    </form>
</body>
=======
<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Actualizar Libro</title>
</head>
<body>
    <h1> Actualizar Libro</h1>
    <form action="bibliotecaController" method="get">
        <input type="hidden" name="isbn" value="${param.isbn}" />
        <input type="hidden" name="action" value="actualizar" />
        Nuevo ISBN: <input type="text" name="nuevoIsbn" value="${param.isbn}" /><br>
        Nuevo Título: <input type="text" name="nuevoTitulo" value="${param.titulo}" /><br>
        Nuevo Autor: <input type="text" name="nuevoAutor" value="${param.autor}" /><br>
        <input type="submit" value="Actualizar" />
    </form>
</body>
>>>>>>> b6917d73b484ac298548f41ba2cb6a8424a246c2
</html>