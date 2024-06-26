<<<<<<< HEAD
package modelo;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.Iterator;

public class LIbro implements Serializable {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private String isbn;
	private String Titulo;
	private String autor;
	private static List <LIbro> libros = null;
	
	public LIbro() {
		
	}
	
	public LIbro(String isbn, String titulo, String autor) {
		super();
		this.isbn = isbn;
		Titulo = titulo;
		this.autor = autor;
	}
	

	public static List<LIbro> getLibros(){
		if (libros == null) {
			libros = new ArrayList<LIbro>();
			LIbro lib1 = new LIbro("111", "Las Catilinarios", "Juan Montalvo");
			LIbro lib2 = new LIbro("222", "Las Catildgfinarios", "Juan Monggcgtalvo");
			LIbro lib3 = new LIbro("333", "ilinarios", "Montalvo");
			
			libros.add(lib1);
			libros.add(lib2);
			libros.add(lib3);
			
		}
		return libros;
	}

	public static LIbro getLibrosByIsbn(String isbn){
		for(LIbro libro : libros) {
			if (libro.getIsbn().equals(isbn)) {
				return libro;
			}
		}
		
		return null;
		
	}
	
	/**
	 * @return the isbn
	 */
	public String getIsbn() {
		return isbn;
	}
	/**
	 * @param isbn the isbn to set
	 */
	public void setIsbn(String isbn) {
		this.isbn = isbn;
	}
	/**
	 * @return the titulo
	 */
	public String getTitulo() {
		return Titulo;
	}
	/**
	 * @param titulo the titulo to set
	 */
	public void setTitulo(String titulo) {
		Titulo = titulo;
	}
	/**
	 * @return the autor
	 */
	public String getAutor() {
		return autor;
	}
	/**
	 * @param autor the autor to set
	 */
	public void setAutor(String autor) {
		this.autor = autor;
	}
	@Override
	public int hashCode() {
		return super.hashCode();
	}
	@Override
	public boolean equals(Object obj) {
		return super.equals(obj);
	}
	@Override
	public String toString() {
		return "Libro/n" + "ISBN:" +this.isbn + " Titulo: "+ this.Titulo + " Autor: " + this.autor;
	}
	
	
	 public static void eliminarLibro(String isbn) {
	        Iterator<LIbro> iterator = libros.iterator();
	        while (iterator.hasNext()) {
	            LIbro libro = iterator.next();
	            if (libro.getIsbn().equals(isbn)) {
	                iterator.remove();
	                break;
	            }
	        }
	    }

	    public static void actualizarLibro(String isbn, String nuevoIsbn, String nuevoTitulo, String nuevoAutor) {
	        for (LIbro libro : libros) {
	            if (libro.getIsbn().equals(isbn)) {
	                libro.setIsbn(nuevoIsbn);
	                libro.setTitulo(nuevoTitulo);
	                libro.setAutor(nuevoAutor);
	                break;
	            }
	        }
	    }
=======
package modelo;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.util.Iterator;

public class LIbro implements Serializable {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private String isbn;
	private String Titulo;
	private String autor;
	private static List <LIbro> libros = null;
	
	public LIbro() {
		
	}
	
	public LIbro(String isbn, String titulo, String autor) {
		super();
		this.isbn = isbn;
		Titulo = titulo;
		this.autor = autor;
	}
	

	public static List<LIbro> getLibros(){
		if (libros == null) {
			libros = new ArrayList<LIbro>();
			LIbro lib1 = new LIbro("111", "Las Catilinarios", "Juan Montalvo");
			LIbro lib2 = new LIbro("222", "Las Catildgfinarios", "Juan Monggcgtalvo");
			LIbro lib3 = new LIbro("333", "ilinarios", "Montalvo");
			
			libros.add(lib1);
			libros.add(lib2);
			libros.add(lib3);
			
		}
		return libros;
	}

	public static LIbro getLibrosByIsbn(String isbn){
		for(LIbro libro : libros) {
			if (libro.getIsbn().equals(isbn)) {
				return libro;
			}
		}
		
		return null;
		
	}
	
	/**
	 * @return the isbn
	 */
	public String getIsbn() {
		return isbn;
	}
	/**
	 * @param isbn the isbn to set
	 */
	public void setIsbn(String isbn) {
		this.isbn = isbn;
	}
	/**
	 * @return the titulo
	 */
	public String getTitulo() {
		return Titulo;
	}
	/**
	 * @param titulo the titulo to set
	 */
	public void setTitulo(String titulo) {
		Titulo = titulo;
	}
	/**
	 * @return the autor
	 */
	public String getAutor() {
		return autor;
	}
	/**
	 * @param autor the autor to set
	 */
	public void setAutor(String autor) {
		this.autor = autor;
	}
	@Override
	public int hashCode() {
		return super.hashCode();
	}
	@Override
	public boolean equals(Object obj) {
		return super.equals(obj);
	}
	@Override
	public String toString() {
		return "Libro/n" + "ISBN:" +this.isbn + " Titulo: "+ this.Titulo + " Autor: " + this.autor;
	}
	
	
	 public static void eliminarLibro(String isbn) {
	        Iterator<LIbro> iterator = libros.iterator();
	        while (iterator.hasNext()) {
	            LIbro libro = iterator.next();
	            if (libro.getIsbn().equals(isbn)) {
	                iterator.remove();
	                break;
	            }
	        }
	    }

	    public static void actualizarLibro(String isbn, String nuevoIsbn, String nuevoTitulo, String nuevoAutor) {
	        for (LIbro libro : libros) {
	            if (libro.getIsbn().equals(isbn)) {
	                libro.setIsbn(nuevoIsbn);
	                libro.setTitulo(nuevoTitulo);
	                libro.setAutor(nuevoAutor);
	                break;
	            }
	        }
	    }
>>>>>>> b6917d73b484ac298548f41ba2cb6a8424a246c2
}