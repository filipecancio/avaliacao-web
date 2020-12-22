# avaliacao-web
## Instruções
- Para marcação e estilização das páginas HTML exigidas nas questões, considere HTML5 e CSS3;
- Imagens a serem usadas nas questões 02 e 03, bem como script de criação de banco de dados a ser usado na questão 04, estão
disponíveis [aqui](https://drive.google.com/file/d/1Sfqpan5RTwiPrmJgBxPAqqeeg_lBMLnD)
- Para construção das páginas PHP sugeridas nas questões 03 e 04, considere versão mais recente da linguagem disponível [aqui](https://www.php.net);
- Para realização das operações de acesso a dados aludidas na questão 04, considere o uso da extensão mysqli;
- Será admitida entrega da resolução apenas através do ambiente da disciplina junto à plataforma G Suite;
- Em caso de identificação de plágio, todos os discentes envolvidos terão sua avaliação anulada, computando-se a este
conceito zero.

## Questões

1) (Peso: 2,5) Considere um prédio que possui 3 andares de determinada instituição de ensino. Em determinadas épocas do ano, os
funcionários da instituição bebem muito café. Por conta disso, a direção da instituição decidiu presentear os funcionários com
uma nova máquina de expresso de café. Esta máquina deve ser instalada em um dos 3 andares, mas a instalação deve ser feita
de forma que as pessoas não percam muito tempo subindo e descendo escadas. Assuma que cada funcionário consuma 1 (uma)
xícara de café expresso por dia. Ele precisa ir do andar onde trabalha até o andar onde está a máquina e voltar para seu posto de
trabalho, levando, para tal, 1 minuto para subir cada andar, assim como 1 minuto para descer cada andar. Dito isto, construa
uma página HTML na qual haja um formulário semelhante àquele mostrado na figura abaixo (à esquerda) para auxiliar na
decisão a ser tomada para posicionar a máquina, de forma a minimizar o tempo total gasto pelos funcionários subindo e
descendo escadas. O formulário deve dispor de campos de texto para entrada da quantidade de funcionários que trabalham em
cada um dos 3 andares do prédio; por sua vez, a identificação e exibição do número total de minutos a serem gastos com o
melhor posicionamento possível da máquina deverá ser acionada após clique em botão posicionado logo abaixo dos campos de
texto (além do tempo mínimo, deverá ser exibido número do andar no qual deverá estar localizada aquela máquina de expresso
para se obter aquele tempo). No quadro abaixo, à direita, é exibido resultado do processamento após preenchimento de
formulário com determinada combinação de quantidade de funcionários por andar e após acionamento do botão.

>Quando da construção da página, considere os seguintes requisitos:
• Certifique-se da validação prévia dos campos de texto antes do acionamento de função JavaScript destinada à identificação
e exibição do número total de minutos a serem gastos com o melhor posicionamento possível da máquina;
• Para exibição do número total de minutos, considere o uso de uma caixa de diálogo de alerta.

2) (Peso: 2,5) Terminais de autoatendimento (ou simplesmente, caixas eletrônicos) são, hoje em dia, os principais equipamentos
de automação bancária presentes nas redes de instituições bancárias. De modo geral, tais dispositivos colocam à disposição dos
clientes inúmeros serviços que podem ser realizados sem a intermediação de um funcionário da instituição bancária. Entre estes
serviços, um dos mais populares é a realização de saques em contas corrente ou contas de poupança. Considere um terminal de
autoatendimento que disponha de cédulas de R$ 50,00, R$ 20,00, R$ 10,00, R$ 5,00 e R$ 2,00. Construa uma página HTML
que disponha de um formulário pelo qual, após entrada da quantia solicitada e acionamento, através de botão, de função
JavaScript para identificação e exibição das quantidades de células de cada valor que seriam fornecidas pelo terminal de
autoatendimento; tais quantidades devem estar acompanhadas, cada uma dela, da respectivas imagens das cédulas. Ao construir
a página, é necessário se atentar para o fato de que se deve minimizar o fornecimento de cédulas de menor valor. Um saque de
R$ 28,00 resultaria, por exemplo, no fornecimento de 1 cédulas de R$ 20,00 e 4 cédulas de R$ 2,00; um saque de R$ 75,00, por
sua vez, resultaria no fornecimento de 1 cédula de R$ 50,00, 1 cédula de R$ 20,00 e 1 cédula de R$ 5,00. No quadro abaixo, é
exibida aparência da página dadas tais simulações.
> Observação: para identificação da quantidade de cédulas, certifique-se da validação apropriada do formulário antes do
acionamento do botão (além da verificação do preenchimento do campo de entrada do valor do saque, se este estiver
preenchido com um valor número, mas este valor número for ímpar, percebe-se facilmente que a realização do saque pelo
terminal de autoatendimento é inviável por não dispor de cédulas de R$ 1,00). Além disso, para a identificação da quantidade
de cédulas de cada valor, adote operações de divisão inteira e resto de divisão (para a obtenção da divisão inteira, considere o
uso da função Math.floor, cuja especificação pode ser encontrada em https://developer.mozilla.org/pt-BR/docs/Web/
JavaScript/Reference/Global_Objects/Math/floor).

3)(Peso: 2,5) Readapte página da questão anterior de modo que o formulário seja submetido, via método POST, a uma página
PHP cujo resultado enviado em resposta à requisição é semelhante àquele que seria obtido através do acionamento de função
JavaScript ali exigida. No quadro abaixo, à esquerda, aparência da página é semelhante ao da questão anterior; à direita, é
ilustrado resultado gerado pela página PHP em resposta à requisição considerando, a título de exemplo, entrada de saque no
montante de R$ 75,00.

4) (Peso: 2,5) Considere um banco de dados que armazena informações sobre avaliações de clientes que visitaram determinado
estabelecimento comercial. O esquema relacional do banco de dados segue-se abaixo.
Construa uma página HTML com aparência semelhante àquela mostrada na figura abaixo (à esquerda), para fins de consulta de
avaliações apenas de determinado nível (excelente, razoável ou ruim). Nele deve constar um formulário que dispõe de apenas
uma caixa de seleção com tais opções, a ser submetido para uma página PHP cuja aparência, quando de sua exibição em
resposta à requisição HTTP, deve ser semelhante àquela mostrada na figura abaixo (à direita), destacando-se, além da exibição
da relação de avaliações, link de redirecionamento para a página de formulário citada anteriormente.
> Observação: ainda em relação à página PHP, exige-se exibição, ao final do quantitativo total de avaliações do nível indicado,
bem como qual percentual correspondente a esse quantitativo em relação ao total de avaliações registradas.