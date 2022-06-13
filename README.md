ROTAS: 

Route::get('/banco', [BancoController::class, 'index']);

Route::get('/credito', [CreditoController::class, 'index']);

Route::post('/financeiro', [FinanceiroController::class, 'index']);

METODO DE TESTE: POSTMAN

# API_GOSAT
Simulador de crédito  -  GOSAT (API) para processo seletivo

API para processo seletivo  -GOSAT

São três rotas, Banco, Credito e financeiro

Controller's:

BancoController:
Responsável por mater os bancos da API
Os bancos tem um nome para os meios em que o brasileiro realmente recorre a emprestimo que é: Parente, O cartão roxinho famoso e o agi... (Opss!) emprestador não convencional.

Valores nas Model's: 
1 - BancoSusp
2 - VovoBank
3 - Nubank

São separados por chave (key) e valores;

========================== // ======================================

Credito Controller:

Visualiza condições dos bancos sendo elas:

1 - valorAPagar
2 - instituicaoFinanceira
3 - modalidadeCredito
4 - valorSolicitado
5 - taxajuros
6 - qntparcelas

========================== // ======================================

Financeiro Controller:

Lista os bancos fornecedores


Criei a pasta service para listar construir as variaveis principais e realizar o calculo dos juros com base na taxa composta em cima do valor, basicamente...



RESUMO SINCE... 
CONSIDERAÇÕES FINAIS!!! :)

ME CONSIDERO JUNIOR ATÉ O MOMENTO POIS PRECISO CONHECER MELHOR O AMBIENTE EMPRESARIAL E ESTAR CONECTADO COM UMA EQUIPE A NIVEL GOSAT, ESTOU ANSIOSO PARA APRENDER TUDO QUE TEM A E OFERECER.

OBS> COMO PRIMEIRO APRENDIZADO, CONHECI O POSTMAN!
