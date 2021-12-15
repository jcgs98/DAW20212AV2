package entidade;

public class Cavalo {

	private String nome, avatar;
	private double distancia;

	public Cavalo(String n) {
		nome = n;
		distancia = 0;
		avatar = (n == "  pretinho") ? ("P>") : ((n == "malhadinho") ? "M>" : ((n == "branquinho") ? "B>" : null));
	}

	public String getNome() {
		return this.nome;
	}

	public void mostrar(double galopes) {
		System.out.print(this.nome.toUpperCase() + ":");
		for (double i = 0; i < galopes; i++) {
			System.out.print(":");
		}
		System.out.print(this.avatar);
		System.out.println("");
	}

	public double correr() {		
		this.mostrar(distancia+= Math.random());
		return distancia;
	}
}