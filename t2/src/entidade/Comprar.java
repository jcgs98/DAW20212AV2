package entidade;

public class Comprar {

	public static boolean Validar(int opcao, Veiculo[] veiculo) {

		boolean t = true;

		if ((opcao > 12) || (veiculo[opcao - 1].getNumAssentosDisponiveis()) <= 0) {
			t = false;
		} else {
			veiculo[opcao - 1].setNumAssentosDisponiveis(veiculo[opcao - 1].getNumAssentosDisponiveis());
		}
		return t;
	}
}