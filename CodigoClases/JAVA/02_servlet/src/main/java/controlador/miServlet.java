package controlador;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/servlet")
public class miServlet extends HttpServlet{

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	
	@Override
	public void init() throws ServletException {
		// TODO Auto-generated method stub
		super.init();
		System.out.print("Servlet INICIADO");
	}

	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub

		System.out.print("Servlet DOGET/n");

	}

	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub
		System.out.print("Servlet DOPOST/n");
		procesar(req, resp);

		
	}

	@Override
	public void destroy() {
		// TODO Auto-generated method stub
		super.destroy();
		System.out.print("Servlet DESTRUIDO/n");
	}
	
	public void procesar(HttpServletRequest req, HttpServletResponse resp)throws ServletException, IOException {
		
		String nombre = req.getParameter("txtNombre");
		System.out.print(nombre);
		
		
		PrintWriter salida = resp.getWriter();
		salida.print("<html>");
		salida.print("<head>");
		salida.print("</head>");
		salida.print("<body>");
		salida.print("<h1> (POST)El nombre es: " + nombre +"</h1>");
		salida.print("</body>");
		salida.print("</html>");
		
		salida.close();
		
		
		
		
	}


	

}
