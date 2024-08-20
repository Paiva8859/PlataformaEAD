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
    %% Definindo as Páginas como Ações
    P1[Página Inicial]
    P2[Página de Registro]
    P3[Página de Login]
    P4[Página de Cursos]
    P5[Exibição de cursos]

    %% Definindo as Ações e Transições
    A4[Registro Realizado]
    A9[Login Realizado]

    %% Ver cursos
    P1 --> |Visualiza| P5

    %% Fluxo de Registro
    P1 -->|Acessar| P2
    P2 -->|Enviar Registro| A4
    A4 -->|Login Automático| P4

    %% Fluxo de Login
    P1 -->|Acessar| P3
    P3 -->|Realizar Login| A9
    A9 -->|Redirecionar| P4

    %% Estilizando as Ações e Transições
    classDef page fill:#d0f0c0,stroke:#333,stroke-width:2px,color:#000;
    classDef action fill:#c0e0ff,stroke:#333,stroke-width:2px,color:#000;
    class P1,P2,P3,P4,P5 page;
    class A1,A2,A3,A4,A5,A6,A7,A8,A9,A10,A11 action;

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
