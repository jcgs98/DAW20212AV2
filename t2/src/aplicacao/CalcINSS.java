package aplicacao;

import java.util.Scanner;

import entidade.Funcionario;

public class CalcINSS {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		Funcionario[] funcionario = new Funcionario[10];
		String nome;
		String matricula;
		double salario;

		for (int i = 0; i < 10; i++) {

			System.out.print("\nMatrícula do Funcionário: ");
			matricula = sc.nextLine();
			System.out.print("\nNome do Funcionário: ");
			nome = sc.nextLine();
			System.out.print("\nSalario do Funcionário: ");
			salario = sc.nextDouble();
			System.out.print("\n");

			funcionario[i] = new Funcionario(matricula, nome, salario);
			sc.nextLine();
		}
		sc.close();

		for (int i = 0; i < 10; i++) {
			System.out.println(funcionario[i]);
		}
	}
}
