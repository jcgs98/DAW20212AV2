package entidade;

import java.text.NumberFormat;

import java.util.Locale;

public class Funcionario {
	private String matricula;
	private String nome;
	private double salario;

	Locale localeBR = new Locale("pt", "BR");

	NumberFormat dinheiro = NumberFormat.getCurrencyInstance(localeBR);

	public String getMatricula() {
		return matricula;
	}

	public void setMatricula(String matricula) {
		this.matricula = matricula;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public double getSalario() {
		return salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}

	public double calcularInss() {
		return 	(	salario <= 1100.0	)	?(	salario * 0.075	)	:
				((	salario <= 2203.48	)	?	salario * 0.09 		:
				((	salario <= 3305.22	)	?	salario * 0.12 		:
				((	salario <= 6433.57	)	?	salario * 0.14 		:
												751.99			)))	;
				
	}

	public Funcionario(String matricula, String nome, double salario) {
		setMatricula(matricula);
		setNome(nome);
		setSalario(salario);
	}

	public String toString() {
		return "Funcionário: " + nome + " / Matricula: " + matricula + " / Salário: " + dinheiro.format(getSalario())
				+ ". Vai pagar " + dinheiro.format(calcularInss()) + " de INSS.";
	}
}