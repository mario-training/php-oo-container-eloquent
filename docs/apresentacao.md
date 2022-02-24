# Apresentação

O presente projeto foi concebido para treinamento na construção de modelos e implementação de regras de negócio na aplicação.
São abordados tópicos abaixo relacionados: 

# Sumário
## Modelagem Conceitual e o DDD - Domain-driven design
- Linguagem Ubíqua: seja criativo e dê o nome às coisas que elas já tem em um dado _contexto de aplicação_.
- O objetivo de construção determina o modelo e o modelo determina a implementação - implementa-se o que foi definido por conveniência.
- Evite retrabalho desnecessário: nem um Conceito a menos!
- Descobrindo e extraindo so conceitos do contexto, recortados pela conveniência;
- Mapeando as relações necessárias para a satisfação dos requisitos; 
- Modelando a estrutura conceitual;
- A Relação entre:

    a) O Modelo Conceitual: o modelo a ser implementado de acordo com o fluxo do projeto, descobertas acontecem;

    b) A Estrutura do DB, o sgdb e seus objetos: a gravidade aqui é a de um buraco negro; descuide da modelagem e o sistema começa a entrar no horizonte de eventos, de onde nem a informação volta.

    c) O Modelo de Classes e a implementação das regras de negócio em uma tecnologia: no fim, é pra isso que vc é pago! Conheça padrões e ferramentas de desenvolvimento e produtividade!

## Modelagem Estrutural
### Modelagem em camadas - cada coisa em seu lugar.
- MVC e abreviações similares - organize como for mais adequado para a demanda estrutural/contextual da aplicação: celular não é ‘desktop’.
- Onion Style, Hexagonal Architecture e Clean Architecture - separe por e com responsabilidade - o reuso, o desenvolvimento e a manutenção do código.

#### Camada de Modelo e de Aceso a A dados - Eloquent
- ORMs e o acesso a dados: quanto mais simples, estável e rápido, melhor.
- Mapeando e descrevendo o DB: modelagem antes!
- A manipulação de  _Objetos_ e _Coleções_ com o Eloquent: como fazer.
- Eloquent, eleve o poder da expressividade com a camada de dados!

#### Camada de Modelo: acessando o modelo a ser manipulado.
- Repositories (reuse as estruturas de acesso do modelo e reduza o trabalho) X Eloquente Models (é só o mapeamento estrutural do DB).
- Repositories: um bom lugar para usar _dependency inversion_, mas não vamos.

### Camada de Modelo: os serviços (Service Layers) enfim, o fim.
- Services (as regras de negócio ficam aqui) X Repositories (reuse as estruturas de acesso do modelo e reduza o trabalho);
- Service, a dinâmica da aplicação acontece aqui!
- Para ter um serviço atendido, só pedir adequadamente.

### Camada Comunicação da Aplicação
- Controllers
- Chamadas (Requests)
- Respostas (Responses/Views)


## Dicas de implementação
- Em primeiro: implemente a partir do modelo, entenda primeiro e implemente depois.
- Em segundo: teste - código não testado é tempo perdido, código testado é avanço validado;
- Seja pró-ativo: Automatise os testes e economize tempo no desenvolvimento e na identificação e tratamento de falhas.
- Implemente de acordo com a demanda, mas implemente todos os conceitos necessários, mesmo que não estejam totalmente definidos.
- Implemente no DB o modelo e suas relações: a economia de uma chave primária, pode custar caro em termos acesso ao DB e tornar a implementação da lógica de negócios extremamente mais custosa.
- Otimize a aplicação depois de ter a aplicação, não existe aplicação ótima primeira, mas existem aplicações não otimizáveis ou não entregues.
- Por fim: implemente a partir do modelo e da demanda, entenda primeiro e implemente depois - VOLTE AO PRIMEIRO.

## Dicas de modelagem

- Em grande parte das vezes, senão na maioria, os modelos não são conhecidos em totalidade, logo: descubra o modelo!
- Se não sabe, pergunte, levante e organise informações e investigue!
- Os seres descritos são da terra: 

  a) Dê nomes significativos ao contexto e evite abreviaturas; 

  b) Seres representam-se por nomes, ou seja, são substantivos ou adjetivos e até verbo não flexionado em pessoa, se a origem de um objeto for um processo - i.e. O Processamento ou O Processar.

  c) Relações são representações de processos, logo são verbos flexionados em 3 pessoa e no presente, pra ficar simples.


- As relações e regras de negócio são contextuais e não universais: oriente a implementação da modelagem por casos de uso!
- Escale as entregas de acordo com os recursos e os casos de uso.
- Casos de uso podem ser como: Sistema **A** obtêm acesso ao Sistema **B**; sistemas também são seres.
- Use ferramentas para a produtividade (IDEs, frameworks...), mas lembre-se: é vc que faz e uma ferramenta é tão boa quanto quem usa!
- Defina e registre as regras de negócio envolvidas na implementação e valide novamente, se necessário - evite de validar desnecessariamente, analise antes!
- Tente manter a comunicação mais direta e enxuta para evitar ruídos - seja direto!
- Quanto mais bem modelado, mais simples fica o desenvolvimento: Se não sabe, pergunte, levante e organise informações e investigue!
- Modelou: implemente, teste e valide!

## Referências rápidas
### DDD - Domain-driven design
<a href="https://en.wikipedia.org/wiki/Domain-driven_design#Kinds_of_models">https://en.wikipedia.org/wiki/Domain-driven_design#Kinds_of_models</a>
### Layer (object-oriented design)
<a href="https://en.wikipedia.org/wiki/Layer_(object-oriented_design)">https://en.wikipedia.org/wiki/Layer_(object-oriented_design)</a>
### Design Patterns
<a href="https://en.wikipedia.org/wiki/Design_Patterns">https://en.wikipedia.org/wiki/Design_Patterns</a>
### GRASP
<a href="https://en.wikipedia.org/wiki/GRASP_(object-oriented_design)">https://en.wikipedia.org/wiki/GRASP_(object-oriented_design)</a>
### MVC 
<a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller</a>
### Hexagonal architecture
<a href="https://en.wikipedia.org/wiki/Hexagonal_architecture_(software)">https://en.wikipedia.org/wiki/Hexagonal_architecture_(software)</a>
### Inversion of control
<a href="https://en.wikipedia.org/wiki/Inversion_of_control">https://en.wikipedia.org/wiki/Inversion_of_control</a>