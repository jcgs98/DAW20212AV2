# 3POB-FAETERJ
Programação Orientada a Objetos

[CalcINSS] Faça um programa que instancie um vetor de 10 elementos da classe funcionário. Cada funcionário armazena as informações: matrícula, nome e salário. No programa principal da aplicação, leia os dados de 10 funcionários e preencha cada uma das posições do vetor com as instâncias da classe Funcionário (objetos). Na classe funcionário, crie um método chamado calcularInss que, ao ser invocado, retorna o valor do INSS a ser pago, considerando nas seguintes faixas: até 720,00 paga 7,65%; de 720,01 até 1200,00 paga 9%; e de 1200,01 até 2400,00 paga 11%. Faça com que seu programa exiba o valor do INSS a ser pago de cada funcionário, invocando esse método em cada um deles.



[CavalinhoDoBozo] O jogo de corrida de cavalos do BOZO tem 3 cavalos: o pretinho, o branquinho e o malhadinho, todos 3 pertencentes à classe cavalo. Um cavalo armazena uma string com o nome do cavalo, onde somente serão válidas as strings pretinho, branquinho ou malhadinho, uma string que será seu avatar (B> caso o cavalo seja branco, M> se for o malhado e P> se for o preto), e a distância atual que ele já conseguiu percorrer (número real). Todos esses atributos são privados. Ao ser criado um dos três cavalos, indicamos o nome do cavalo (entre os válidos) e a distância percorrida é iniciada com zero. A classe cavalo implementa três métodos: 1) o construtor, conforme descrito acima; 2) a correr, que sorteia um número real entre 0 e 1, acumula esse valor a sua distância percorrida (número real) e chama a função privada mostrar do objeto, e retorna a distância atual já percorrida pelo cavalo; e 3) o método privado mostrar, que exibe no console um linha com o nome do cavalo e, ao lado, o caractere avatar dele, distante n caracteres da posição do dois pontos, sendo n a parte inteira da distância percorrida. Considerando a distância zero, a situação inicial da tela será a seguinte:

BRANQUINHO: B>

MALHADINHO: M>

PRETINHO: P>

O programa principal deverá: criar os três cavalos, e iniciar um repetição enquanto nenhum dos cavalos tenha atingido a linha de chegada (60 caracteres da largada). Em cada repetição, o método correr de cada um dos 3 cavalos deverá ser invocado e devem ser executadas 25 quebras de linhas, para forçar a limpeza do console. Ao final, o cavalo campeão deve ser exibido e o programa finalizado. Exemplo:

BRANQUINHO: B>

MALHADINHO: M>

PRETINHO: P>

BRANQUINHO GANHOU !!!



[ViacaoTartaruga] A viação tartaruga possui um frota de 12 veículos. Cada veículo tem uma capacidade única de passageiros, um estado de origem (RJ, SP, MG, etc.) e um de destino. Quando cada veículo for criado, deveremos iniciar essas variáveis somente pelo construtor da classe Veículo. A classe veículo deve implementar o método comprar, que aloca um dos assentos do veículo (se disponível), retornando um valor lógico, indicando se houve sucesso ou não, o método getNumAssentosDisponiveis, que retorna o número de assentos ainda não vendidos, e o método getNumAssentos, que retorna o total de assentos que o veículo dispõe.

Faça um programa principal que crie a frota de veículos num array de 12 posições, com valores fictícios e diferentes entre si para cada objeto. A partir de então, inicie um repetição que exibe a lista de ocupação de cada ônibus (mostrada abaixo) e espere no console que o usuário digite o número do ônibus. Ao digitar o número do ônibus, o programa deverá vender um assento e mostrar novamente a lista de ocupação. Quando o usuário digitar 0, o programa deve ser finalizado:

01: RJ-SP (5 assentos disponíveis de 20)

02: MG-RS (10 assentos disponíveis de 15)

03: MS-RO (3 assentos disponíveis de 21)

04: BA-SE (6 assentos disponíveis de 10)

05: SC-RJ (1 assentos disponíveis de 20)

06 AM-AC (0 assentos disponíveis de 60)

07: AL-CE (20 assentos disponíveis de 20)

09: RR-GO (14 assentos disponíveis de 45)

10: RN-PE (1 assentos disponíveis de 30)

11: SP-BA (30 assentos disponíveis de 40)

12: SC-ES (0 assentos disponíveis de 10)



[ObjUnico] Podemos construir uma classe que tenha uma única instância que é facilmente acessível. Essa classe tem que garantir que nenhuma outra instância dela pode ser criada. Construa a classe Unica que atenda a descrição acima. A classe Teste, que não deve ser modificada, contém o método main responsável por testá-la. Observe que todas as instâncias da classe Unica criadas no método main da classe Teste são referências para o mesmo objeto.

class Teste {

   public static void main(String[] args) {

      Unica u = Unica.pegaInstancia();

      Unica v = Unica.pegaInstancia();

      Unica x = Unica.pegaInstancia();

      System.out.println((u == v) && (x == v)); // Deve retornar true

   }

}
