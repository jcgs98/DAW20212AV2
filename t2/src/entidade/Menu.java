package entidade;

import java.util.Scanner;

public class Menu {
	int opcao;
	Scanner sc = new Scanner(System.in);

	public static void Mostrar(Veiculo[] veiculo) {

		for (int i = 0; i < 12; i++) {
			System.out.println(veiculo[i]);
		}
	}

}