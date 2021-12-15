package aplicacao;

import entidade.Cavalo;

import java.util.Scanner;

public class CavalinhoDoBozo {

	static int velocidade = 0;

	public static void main(String[] args) {

		@SuppressWarnings("resource")
		Scanner sc = new Scanner(System.in);

		System.out.println("Qual a duração do jogo?");

		velocidade = sc.nextInt();

		Cavalo validar = derby("branquinho", "malhadinho", "  pretinho");
		System.out.println(validar.getNome().toUpperCase() + " GANHOU !!!");
	}

	static void limpar(int i) {

		if (i == 25)
			return;

		System.out.println("");

		limpar(i + 1);
	}

	static Cavalo derby(String nome1, String nome2, String nome3) {
		Cavalo nomeA = new Cavalo(nome1);
		Cavalo nomeB = new Cavalo(nome2);
		Cavalo nomeC = new Cavalo(nome3);
		double trajetoDeA = 0, trajetoDeB = 0, trajetoDeC = 0;
		while (trajetoDeA < 60 && trajetoDeB < 60 && trajetoDeC < 60) {
			trajetoDeA = nomeA.correr();
			trajetoDeB = nomeB.correr();
			trajetoDeC = nomeC.correr();
			try {
				Thread.sleep(velocidade);
			} catch (InterruptedException ex) {
				Thread.currentThread().interrupt();
			}
			limpar(0);
		}
		return (trajetoDeA > trajetoDeB && trajetoDeA > trajetoDeC) ? nomeA
				: ((trajetoDeB > trajetoDeA && trajetoDeB > trajetoDeC) ? nomeB : nomeC);
	}
}