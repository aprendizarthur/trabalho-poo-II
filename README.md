**AVALIADO 85/100**
Desenvolva um sistema em PHP orientado a objetos para gerenciar um hospital veterinário, utilizando o Composer para gerenciar dependências e autoload de classes, interfaces e traits. O sistema deve implementar os conceitos de propriedades, métodos, construtores, herança, relacionamentos, strict types, interfaces, encapsulamento, getters e traits, conforme especificado abaixo:

1. **Classes e Relacionamentos**:
   - Crie uma classe abstrata `Animal` com propriedades protegidas para `nome` (string), `especie` (string) e `idade` (int). Inclua um construtor para inicializar essas propriedades e métodos getters para acessá-las.
   - Implemente uma interface `Atendivel` com os métodos `atender()` e `finalizarAtendimento()`, que devem ser implementados por classes que representem animais que podem receber atendimento veterinário.
   - Crie as classes `Cachorro` e `Gato`, que herdam de `Animal`. A classe `Cachorro` deve implementar a interface `Atendivel` e ter uma propriedade privada `raca` (string) com getter. A classe `Gato` não será atendível e deve ter uma propriedade privada `corPelagem` (string) com getter.
   - Crie uma classe `Dono` com propriedades privadas `nome` (string) e `cpf` (string), um construtor para inicializá-las e getters. Esta classe deve manter uma lista de animais atendidos (relacionamento 1:N com `Cachorro`).

2. **Regras de Negócio**:
   - Utilize *strict types* (`declare(strict_types=1);`) em todos os arquivos PHP.
   - A classe `Cachorro` deve ter um método `atender()` que verifica se o animal está disponível para atendimento (propriedade booleana `disponivel`) antes de permitir o atendimento. O método `finalizarAtendimento()` deve liberar o animal.
   - Encapsule todas as propriedades usando modificadores de acesso apropriados (`private` ou `protected`) e forneça getters para acessar os valores.
   - Implemente um método na classe `Dono` para adicionar um cachorro à lista de atendimentos, verificando se o cachorro está disponível antes de associá-lo.

3. **Traits**:
   - Crie um **trait** chamado `Informavel` que forneça um método `exibirInformacoes()` para formatar e retornar informações do objeto (ex.: nome, espécie, idade, e propriedades específicas como raça ou cor da pelagem). Este trait deve ser usado por `Cachorro` e `Gato` para evitar duplicação de código.
   - Crie um **trait** chamado `Logavel` that implemente um método `adicionarLog(string $mensagem)` para registrar ações (ex.: atendimento iniciado ou finalizado) e um método `getLogs()` para retornar os logs. Este trait deve ser usado por `HospitalVeterinario` e `Dono`.

4. **Requisitos Técnicos**:
   - Crie uma classe `HospitalVeterinario` que gerencie uma coleção de animais (`Cachorro` e `Gato`) e donos. Esta classe deve ter métodos para:
     - Adicionar animais à coleção.
     - Registrar donos.
     - Realizar o atendimento de um cachorro para um dono, utilizando os métodos da interface `Atendivel`.
     - Exibir uma lista de todos os animais e seus detalhes (nome, espécie, idade, raça ou cor da pelagem, e disponibilidade, se aplicável), usando o método do trait `Informavel`.
   - Todas as classes, interfaces e traits devem estar em arquivos separados, com uma estrutura de diretórios organizada (ex.: `src/Models`, `src/Interfaces`, `src/Traits`).
   - Utilize o **Composer** para gerenciar o projeto, configurando o autoload no arquivo `composer.json` para carregar automaticamente todas as classes, interfaces e traits. Inclua o arquivo de autoload (`vendor/autoload.php`) no arquivo principal.

5. **Entrega**:
   - Forneça o código-fonte completo, incluindo o arquivo `composer.json` configurado para autoload, com comentários explicando o uso de cada conceito (propriedades, métodos, construtores, herança, relacionamentos, strict types, interfaces, encapsulamento, getters e traits).
   - Inclua um arquivo principal (`index.php`) que demonstre o funcionamento do sistema, criando instâncias de `Cachorro`, `Gato`, `Dono`, e simulando operações de atendimento e finalização de atendimento.
   - O código deve ser funcional, com tipagem estrita, autoload via Composer e sem erros de execução.

**Avaliação**:
- Corretude na implementação dos conceitos de orientação a objetos, incluindo herança e interfaces (40%).
- Uso adequado de *strict types*, encapsulamento, getters e Composer com autoload (25%).
- Implementação e uso correto de **traits** para reutilização de código (20%).
- Organização do código, clareza dos comentários e estrutura do projeto (15%).
