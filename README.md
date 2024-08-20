# Diagramas de classe:

```mermaid
classDiagram
    class Usuario {
        -ID: int
        -nome: string
        -email: string
        -password: string
        -tipo: string
        +inscricoes()
        +isUsuario()
        +isProfessor()
    }

    class Curso {
        -ID: int
        -titulo: string
        -descricao: string
        -localizacao: string
        -usuario_id: int
        +professor()
    }

    class Inscricao {
        -ID: int
        -usuario_id: int
        -curso_id: int
        -status: string
        +usuario()
        +curso()
    }
```

# Diagramas de uso:
## 1. Usuario
```mermaid
flowchart TD
    %% Definindo o Ator
    A1(Usuário)

    %% Definindo os Casos de Uso
    C1[Exibir Formulário de Login]
    C2[Processar Login]
    C3[Exibir Formulário de Registro]
    C4[Processar Registro]
    C5[Realizar Logout]

    %% Relacionamentos
    A1 --> C1
    A1 --> C2
    A1 --> C3
    A1 --> C4
    A1 --> C5

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class A1 actor;
    
    %% Estilizando os Casos de Uso
    classDef usecase fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class C1,C2,C3,C4,C5 usecase;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```
## 2. Inscrição
```mermaid
flowchart TD
    %% Definindo o Ator
    A2(Usuário não professor)

    %% Definindo os Casos de Uso
    C1[Inscrever-se]
    C2[Cancelar Inscrição]

    %% Relacionamentos
    A2 --> C1
    A2 --> C2

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class A2 actor;
    
    %% Estilizando os Casos de Uso
    classDef usecase fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class C1,C2 usecase;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```
## 3. Curso
```mermaid
flowchart TD
    %% Definindo o Ator
    A5(Usuário Professor)

    %% Definindo os Casos de Uso
    C1[Visualizar Todos os Cursos]
    C2[Cadastrar Curso]
    C3[Atualizar Curso]
    C4[Excluir Curso]
    C5[Exibir Curso Detalhado]

    %% Relacionamentos
    A5 --> C1
    A5 --> C2
    A5 --> C3
    A5 --> C4
    A5 --> C5

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class A5 actor;
    
    %% Estilizando os Casos de Uso
    classDef usecase fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class C1,C2,C3,C4,C5 usecase;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```
# Diagramas de fluxo
## Usuário não logado
```mermaid
flowchart TD
    %% Definindo o Ator
    U1(Usuário Não Logado)

    %% Definindo as Ações de Registro
    R1[Acessar Página Inicial]
    R2[Clicar em Registrar]
    R3[Preencher Formulário de Registro]
    R4[Submeter Registro]
    R5[Login Automático]
    R6[Redirecionar para Página Inicial ou Página de Cursos]

    %% Definindo as Ações de Login
    L1[Acessar Página Inicial]
    L2[Clicar em Login]
    L3[Preencher Formulário de Login]
    L4[Submeter Login]
    L5[Redirecionar para Página Inicial ou Página de Cursos]

    %% Definindo as Ações de Visualização de Cursos
    V1[Acessar Página de Cursos]
    V2[Visualizar Cursos]

    %% Fluxo de Registro
    U1 -->|Acessa| R1
    R1 -->|Clica em Registrar| R2
    R2 -->|Preenche Formulário| R3
    R3 -->|Submete Registro| R4
    R4 -->|Login Automático| R5
    R5 -->|Redireciona| R6

    %% Fluxo de Login
    U1 -->|Acessa| L1
    L1 -->|Clica em Login| L2
    L2 -->|Preenche Formulário| L3
    L3 -->|Submete Login| L4
    L4 -->|Redireciona| L5

    %% Fluxo de Visualização de Cursos
    U1 -->|Acessa| V1
    V1 -->|Visualiza| V2

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class U1 actor;

    %% Estilizando as Ações de Registro
    classDef regAction fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class R1,R2,R3,R4,R5,R6 regAction;

    %% Estilizando as Ações de Login
    classDef logAction fill:#c0e0ff,stroke:#333,stroke-width:2px,color:#000;
    class L1,L2,L3,L4,L5 logAction;

    %% Estilizando as Ações de Visualização
    classDef viewAction fill:#e0e0e0,stroke:#333,stroke-width:2px,color:#000;
    class V1,V2 viewAction;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```

## Usuário não professor gerenciando inscrição de cursos
```mermaid
flowchart TD
    %% Definindo o Ator
    A1(Usuário Não Professor)

    %% Definindo as Páginas
    P1[Dashboard com Carrossel]
    P2[Página de Visualização Geral de Cursos]
    P3[Página de Detalhes do Curso]
    P4[Inscrever-se]
    P5[Cancelar inscrição]

    %% Definindo as Ações
    A1 -->|Acessa| P1
    P1 -->|Acessa| P2

    P1 -->|Clica em Curso no Carrossel| P3
    P2 -->|Clica em Curso| P3
    P3 --> |Seleciona| P4
    P3 --> |Seleciona| P5

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class A1 actor;

    %% Estilizando as Páginas
    classDef page fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class P1,P2,P3 page;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```
## Usuário professor gerenciando seus cursos
```mermaid
flowchart TD
    %% Definindo o Ator
    A1(Professor)

    %% Definindo as Ações
    P1[Visualizar Lista de Cursos]
    P2[Criar Novo Curso]
    P3[Editar Curso]
    P4[Deletar Curso]

    %% Definindo os Formulários
    F1[Formulário de Criação de Curso]
    F2[Formulário de Edição de Curso]

    %% Fluxo de Ações
    A1 -->|Acessa| P1
    P1 -->|Clica em Criar Novo Curso| P2
    P1 -->|Clica em Editar| P3
    P1 -->|Clica em Deletar| P4

    P2 -->|Acessa| F1
    P3 -->|Acessa| F2

    F1 -->|Submete| P1
    F2 -->|Submete| P1

    P4 -->|Confirmação| P1

    %% Estilizando o Ator
    classDef actor fill:#ffcccb,stroke:#333,stroke-width:2px,color:#000;
    class A1 actor;

    %% Estilizando as Ações
    classDef action fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    class P1,P2,P3,P4 action;

    %% Estilizando os Formulários
    classDef form fill:#f0f8ff,stroke:#333,stroke-width:2px,color:#000;
    class F1,F2 form;

    %% Estilizando as Conexões
    linkStyle default stroke:#333,stroke-width:2px;
```
