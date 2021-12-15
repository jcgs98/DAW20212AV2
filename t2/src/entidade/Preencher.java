package entidade;
import java.util.Random;

public class Preencher {

	String[] referencia = { "RO", "AC", "AM", "RR", "PA", "AP", "TO", "MA", "PI", "CE", "RN", "PB", "PE", "AL", "SE",
			"BA", "MG", "ES", "RJ", "SP", "PR", "SC", "RS", "MS", "MT", "GO", "DF" };

	Random gerador = new Random();

	public void Preenchimento(Veiculo[] veiculo) {

		for (int i = 0; i < 12; i++) {

			String origem = null, destino = null;

			int disponiveis = 0, total = 0, id = 0;

			veiculo[i] = new Veiculo(origem, destino, disponiveis, total, id);

			do {

				veiculo[i].origem = referencia[gerador.nextInt(26)];

				veiculo[i].destino = referencia[gerador.nextInt(26)];

			} while (veiculo[i].origem.equals(veiculo[i].destino));

			do {

				veiculo[i].total = gerador.nextInt(100);

				veiculo[i].disponiveis = gerador.nextInt(100);

			} while (veiculo[i].disponiveis>veiculo[i].total);

			veiculo[i].id = i + 1;

		}
	}
}
