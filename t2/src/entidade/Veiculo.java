package entidade;

public class Veiculo {
	String origem;
	String destino;
	int disponiveis;
	int total;
	int id;
	public int getNumAssentosDisponiveis;

	public Veiculo(String origem, String destino, int disponiveis, int total, int id) {
		this.origem = origem;
		this.destino = destino;
		this.disponiveis = disponiveis;
		this.total = total;
		this.id = id;
	}

	public void setNumAssentosDisponiveis(int disponiveis) {
		this.disponiveis = disponiveis - 1;
	}
	
	public void setNumAssentos(int total) {
		this.total = total;
	}
	
	public void setOrigem(String origem) {
		this.origem = origem;
	}
	
	public void setDestino(String destino) {
		this.destino = destino;
	}
	
	public void setId(int id) {
		this.id = id;
	}	

	public int getNumAssentosDisponiveis() {
		return disponiveis;
	}

	public int getNumAssentos() {
		return total;
	}
	
	public String getOrigem() {
		return origem;
	}
	
	public String getDestino() {
		return destino;
	}
	
	public int getId() {
		return id;
	}

	public String toString() {
		return String.format("%02d", id) + ": " + origem + " - " + destino + " (" + String.format("%02d", disponiveis)
				+ " assentos disponíveis de " + String.format("%02d", total) + ")";
	}
}