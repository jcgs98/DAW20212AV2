package aplicacao;

import java.util.Scanner;

import entidade.Menu;
import entidade.Preencher;
import entidade.Veiculo;
import entidade.Comprar;

public class ViacaoTartaruga {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		int opcao = 0;

		Veiculo[] veiculo = new Veiculo[12];

		Preencher preencher = new Preencher();

		preencher.Preenchimento(veiculo);

		do {
			
			System.out.println("Rotas disponíveis:");
			
			Menu.Mostrar(veiculo);

			System.out.println("Escolha a rota:");
			opcao = sc.nextInt();

			if ((opcao < 0) || (opcao > 12)) {
				System.out.println("Rota Inexistente!");
			} else if ((opcao > 0) && (Comprar.Validar(opcao, veiculo) == true)) {
				System.out.println("Compra efetuada!");
			} else if (opcao > 0) {
				System.out.println("Compra não efetuada; sem vaga!");
			} else {
				System.out.println("FIM!");
			}
		} while (opcao != 0);

		sc.close();

	}

}