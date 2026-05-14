# Resumo dos relacionamentos dos exercícios

## Conceitos UML essenciais
- Associação: linha simples entre classes. Representa que uma classe conhece ou usa outra.
- Direcionalidade:
  - unidirecional: seta em apenas um sentido. Ex: `Festa --> Cliente` (Festa conhece Cliente, mas Cliente não conhece Festa).
  - bidirecional: sem seta ou seta dupla. Ex: `Pessoa -- Telefone -- Pessoa` se ambos os lados possuírem referência.
- Agregação: linha com losango vazio na extremidade do todo. Indica relação "parte de" onde a parte pode existir independentemente.
- Composição: linha com losango preenchido na extremidade do todo. Indica relação forte de propriedade onde a parte depende do todo.
- Classe associativa: classe que representa a própria relação entre duas outras classes, geralmente com atributos próprios.
- Multiplicidade: indica quantas instâncias participam.
  - `1` = exatamente um
  - `0..1` = zero ou um
  - `*` ou `0..*` = muitos
  - `1..*` = pelo menos um

## Como identificar pelo diagrama
- linha simples: associação
- losango vazio no lado do todo: agregação
- losango preenchido no lado do todo: composição
- seta simples: navegação unidirecional
- sem seta ou dois sentidos: navegação bidirecional
- classe no meio de uma linha ou ligada por uma linha tracejada: classe associativa

---

## Exercício 1
### Relações
- `Pessoa` -> `Telefone[]`
  - tipo: composição
  - multiplicidade: `1..*` (Pessoa tem muitos telefones)
  - direcionalidade: unidirecional de `Pessoa` para `Telefone` no código. Se `Telefone.pessoa` for usado, torna-se bidirecional.
- `Festa` -> `Cliente`
  - tipo: agregação / associação
  - multiplicidade: `1` (Festa conhece exatamente um Cliente)
  - direcionalidade: unidirecional (`Festa` conhece `Cliente`, mas `Cliente` não referencia `Festa` no código)
- `Festa` -> `Contratado`
  - tipo: agregação / associação
  - multiplicidade: `1`
  - direcionalidade: unidirecional
- `Festa` -> `Decoracao`
  - tipo: agregação / associação
  - multiplicidade: `1`
  - direcionalidade: unidirecional
- `Cliente` e `Contratado` herdam de `Pessoa`
  - tipo: generalização / especialização
  - representado por seta triangular aberta voltada para `Pessoa`

### Como desenhar
- `Pessoa` ─⬤─> `Telefone` (composição)
- `Festa` ──> `Cliente` (associação unidirecional)
- `Festa` ──> `Contratado` (associação unidirecional)
- `Festa` ──> `Decoracao` (associação unidirecional)

---

## Exercício 2
### Relações
- `Pessoa` é abstrata e base para `Chef` e `Avaliador`
  - tipo: generalização/inheritance
- `Chef` -> `Receita[]`
  - tipo: associação
  - multiplicidade: `0..*` (Chef pode ter várias receitas)
  - direcionalidade: unidirecional no código
- `Avaliador` -> `Receita[]`
  - tipo: associação
  - multiplicidade: `0..*`
  - direcionalidade: unidirecional no código
- `Receita` -> `Chef`
  - tipo: associação
  - multiplicidade: `1`
  - direcionalidade: unidirecional
- `Receita` -> `Avaliador[]`
  - tipo: associação
  - multiplicidade: `0..*`
  - direcionalidade: unidirecional
- `Avaliacao` conecta `Avaliador` e `Receita`
  - tipo: classe associativa / relação com atributo
  - multiplicidade: `1` Avaliacao possui `1` Avaliador e `1` Receita
  - direcionalidade: unidirecional pelos atributos da classe
- `Pessoa` -> `Telefone`
  - tipo: composição (Telefone criado dentro de Pessoa)

### Como desenhar
- `Chef` ──|> `Pessoa`
- `Avaliador` ──|> `Pessoa`
- `Chef` ──> `Receita`
- `Receita` ──> `Avaliador`
- `Avaliador` ──> `Avaliacao` ──> `Receita`
  - `Avaliacao` funciona como classe associativa entre `Avaliador` e `Receita`

---

## Exercício 3
### Relações
- `Pessoa` é abstrata e base para `Cliente` e `Prestador`
  - tipo: generalização/inheritance
- `Agenda` -> `Cliente`
  - tipo: associação
  - multiplicidade: `1`
  - direcionalidade: unidirecional
- `Agenda` -> `Itens[]`
  - tipo: composição
  - multiplicidade: `1..*` (Agenda cria e contém Itens)
  - direcionalidade: unidirecional
- `Itens` -> `Servico`
  - tipo: associação
  - multiplicidade: `0..1`
  - direcionalidade: unidirecional
- `Itens` -> `Prestador`
  - tipo: associação
  - multiplicidade: `0..1`
  - direcionalidade: unidirecional

### Como desenhar
- `Agenda` ─⬤─> `Itens`
- `Agenda` ──> `Cliente`
- `Itens` ──> `Servico`
- `Itens` ──> `Prestador`

---

## Exercício 4
### Relações
- `Pessoa` é abstrata e base para `Shopping` e `Proprietario`
  - tipo: generalização/inheritance
- `Shopping` -> `Loja[]`
  - tipo: composição ou agregação forte
  - multiplicidade: `1..*`
  - direcionalidade: unidirecional de `Shopping` para `Loja`
- `Loja` -> `Shopping`
  - tipo: associação de retorno
  - multiplicidade: `0..1`
  - direcionalidade: se definido, pode ser bidirecional
- `Loja` -> `Proprietario[]`
  - tipo: associação
  - multiplicidade: `0..*`
  - direcionalidade: bidirecional potencial se `Proprietario` também lista `Loja`
- `Proprietario` -> `Loja[]`
  - tipo: associação
  - multiplicidade: `0..*`
  - direcionalidade: unidirecional no código
- `Condominio` -> `Loja`
  - tipo: associação
  - multiplicidade: `0..1`
  - direcionalidade: unidirecional

### Como desenhar
- `Shopping` ─⬤─> `Loja`
- `Loja` ──> `Proprietario`
- `Proprietario` ──> `Loja`
- `Condominio` ──> `Loja`

---

## Observações gerais para identificar relações
- Se a classe contém diretamente objetos do outro lado e cria eles, pense em composição.
- Se a classe referencia outra sem criar ou sem controlar sua vida, pense em associação ou agregação.
- Se uma classe existe apenas para ligar duas outras e tem atributos próprios, é uma classe associativa.
- Se o diagrama usa triângulo aberto, é herança/especialização.
- Se o código mostra propriedade de um lado apenas, a associação é unidirecional.
- Se ambos os lados mantêm referências um ao outro, a associação é bidirecional.
