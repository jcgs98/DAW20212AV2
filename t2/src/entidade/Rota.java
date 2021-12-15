package entidade;

public class Rota {

	public static boolean ValidarUF(String UF) {

		String[] referencia = { "RO", "AC", "AM", "RR", "PA", "AP", "TO", "MA", "PI", "CE", "RN", "PB", "PE", "AL",
				"SE", "BA", "MG", "ES", "RJ", "SP", "PR", "SC", "RS", "MS", "MT", "GO", "DF" };

		for (int i = 0; i < 27; i++) {
			if (UF.equals(referencia[i]))
				return true;
		}

		System.out.print("\nUF inexistente! Tente novamente!");

		return false;
	}

	public static boolean ValidarAS(int disponivel, int total) {
		
		return (disponivel > total)?false:true;
	}

	public static boolean ValidarIG(String origem, String destino) {

		return (origem.equals(destino))?true:false;
	}

}