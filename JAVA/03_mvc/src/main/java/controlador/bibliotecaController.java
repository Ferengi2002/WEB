package controlador;

import java.io.IOException;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import modelo.LIbro;

/**
 * Servlet implementation class bibliotecaController
 */
@WebServlet("/bibliotecaController")
public class bibliotecaController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public bibliotecaController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String action = request.getParameter("action");
		if (action != null) {
	        switch (action) {
	            case "eliminar":
	                String isbnEliminar = request.getParameter("isbn");
	                LIbro.eliminarLibro(isbnEliminar);
	                break;
	            case "actualizar":
	                String isbnActualizar = request.getParameter("isbn");
	                String nuevoIsbn = request.getParameter("nuevoIsbn");
	                String nuevoTitulo = request.getParameter("nuevoTitulo");
	                String nuevoAutor = request.getParameter("nuevoAutor");
	                LIbro.actualizarLibro(isbnActualizar, nuevoIsbn, nuevoTitulo, nuevoAutor);
	                break;
	        }
	    }
		
		//1 obtener parametros
		//2 llamar al modelo
		List<LIbro> lista = LIbro.getLibros();
		//3 llamar a la vista
		request.setAttribute("listaLibros", lista);
		request.getRequestDispatcher("listaLibro.jsp").forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

