package controlador;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import modelo.LIbro;

/**
 * Servlet implementation class ActualizarController
 */
@WebServlet("/ActualizarController")
public class ActualizarController extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ActualizarController() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		//1. Obtener Paramatro
		String isbn = request.getParameter("id");
		//2. Hablar con el modelo
		LIbro miLibro = LIbro.getLibrosByIsbn(isbn);
		//3. LLamar a la vistaS
		request.setAttribute("libro", miLibro);
		request.getRequestDispatcher("actualizarLibro.jsp").forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		//1. Obtengo Parametros
		String isbn = request.getParameter("isbn");
		String titulo = request.getParameter("titulo");
		String autor = request.getParameter("autor");
		//2. Hablo con el Modelo
		LIbro miLibro =new LIbro(isbn,titulo,autor);
		LIbro.update(miLibro);
		//3. Hablo con la vista
		response.sendRedirect("bibliotecaController");
	}

}
