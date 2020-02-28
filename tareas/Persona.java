public class Persona {

	private String nombre;
	private String sexo;
	private int edad;

	void caminar(){

	}

	void hablar(){
		System.out.println("Hola mundo");
	}

	void respirar(){

	}

	void dormir(){

	}	

public Persona(String nombre, String sexo, int edad){
	
	this.nombre = nombre;
	this.sexo = sexo;
	this.edad = edad;
	
	}

public static void main(String[] args){
	
	
	 new Persona("Pedro", "Masculino", 20 ).hablar();
	 new Persona("Laura", "Femenino", 19).hablar();
	 new Persona("Mario", "Masculino", 30).hablar();
	}
}
