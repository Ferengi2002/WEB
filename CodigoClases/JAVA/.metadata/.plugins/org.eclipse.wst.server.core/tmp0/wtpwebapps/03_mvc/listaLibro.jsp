<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
   <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Lista de libros</title>
</head>
<body>
<h1> LISTA DE LIBROS</h1>
<table border="1">
	<tr>
		<td>ISBN</td>
		<td>Titulo</td>
		<td>Autor</td>
		<td></td>
	</tr>
	<c:forEach items="${listaLibros}" var="libro">
		<tr>
			<td>${libro.isbn}</td>
			<td>${libro.titulo}</td>
			<td>${libro.autor}</td>
			
			<td>
                    <form action="bibliotecaController" method="get">
                        <input type="hidden" name="isbn" value="${libro.isbn}" />
                        <input type="hidden" name="action" value="eliminar" />
                        <input type="submit" value="Eliminar" />
                    </form>
                    <form action="actualizarLibro.jsp" method="post">
                        <input type="hidden" name="isbn" value="${libro.isbn}" />
                        <input type="hidden" name="titulo" value="${libro.titulo}" />
                        <input type="hidden" name="autor" value="${libro.autor}" />
                        <input type="submit" value="Actualizar" />
                    </form>
                </td>		
		</tr>
		
	</c:forEach>


</table>
	
</body>
</html>