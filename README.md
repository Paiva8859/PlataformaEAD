# Plataforma de Ensino à Distância

## Escopo

Desenvolver uma plataforma web interativa para cursos online, destinada a professores e alunos. A plataforma permitirá a criação e gerenciamento de cursos, matrícula de alunos, visualização de aulas e realização de atividades. Será desenvolvida utilizando o Laravel Framework para o back-end e PostgreSQL para o banco de dados.

**Funcionalidades Principais:**

1. **CRUD de Cursos:**
    - **Criar:** Professores podem criar novos cursos com título, descrição e categorização.
    - **Ler:** Visualização de cursos ativos e suas informações detalhadas.
    - **Atualizar:** Edição das informações dos cursos.
    - **Deletar:** Remoção de cursos não desejados.
2. **Sistema de Autenticação:**
    - **Cadastro e Login:** Professores e alunos podem se registrar e acessar a plataforma.
    - **Gestão de Perfil:** Usuários podem atualizar suas informações pessoais e de contato.
3. **Gestão de Conteúdo:**
    - **Aulas:** Upload e gerenciamento de materiais de aula, vídeos e documentos.
    - **Atividades:** Criação e acompanhamento de tarefas e avaliações.
4. **Inscrição em Cursos:**
    - **Matrícula:** Alunos podem se inscrever em cursos disponíveis.
    - **Acompanhamento:** Alunos podem visualizar o progresso e realizar atividades.

## Objetivos

1. Implementar um CRUD completo para cursos.
2. Desenvolver um sistema de autenticação robusto para professores e alunos.
3. Permitir que alunos se inscrevam em cursos e acompanhem seu progresso.
4. Facilitar a criação e gerenciamento de cursos pelos professores.

## Cronograma

1. **Análise de Requisitos e Definição do Escopo (Semana 1-2):**
    - Reuniões com stakeholders para levantamento de requisitos.
    - Documentação e aprovação do escopo.
2. **Implementação do CRUD para Cursos (Semana 3-5):**
    - Desenvolvimento do modelo de dados.
    - Implementação das funcionalidades de criação, leitura, atualização e exclusão de cursos.
    - Testes iniciais e ajustes.
3. **Implementação do Sistema de Autenticação (Semana 6-7):**
    - Configuração de autenticação e autorização.
    - Desenvolvimento das funcionalidades de registro e login.
    - Implementação de gerenciamento de perfil.
4. **Gerenciamento de Conteúdo e Inscrição em Cursos (Semana 8-10):**
    - Implementação do upload e gerenciamento de conteúdos de aula.
    - Desenvolvimento do sistema de inscrição e acompanhamento de cursos.
    - Testes e ajustes.
5. **Documentação e Entrega (Semana 11-12):**
    - Preparação da documentação do usuário e técnica.
    - Revisões finais e preparação para a entrega.
    - Treinamento de usuários e suporte inicial.

## Recursos

- **Laravel Framework:** Para desenvolvimento de back-end e gestão de rotas.
- **PostgreSQL Database:** Para armazenamento de dados.
- **Bootstrap 5:** Para desenvolvimento da interface de usuário.
- **GitHub:** Para controle de versão e colaboração.

## Análise de Riscos

1. **Problemas com Disponibilização de Conteúdos:**
    - **Risco:** Dificuldades no upload e gerenciamento de arquivos.
    - **Mitigação:** Implementar validações e testes rigorosos de upload. Fornecer suporte técnico e instruções claras aos usuários.
2. **Desafios na Implementação da Interface de Usuário:**
    - **Risco:** Interface pouco intuitiva e difícil de usar.
    - **Mitigação:** Realizar testes de usabilidade com usuários finais. Ajustar o design com base no feedback.
3. **Segurança de Dados e Controle de Acesso:**
    - **Risco:** Acesso não autorizado e vazamento de dados.
    - **Mitigação:** Implementar criptografia para dados sensíveis e controle rigoroso de permissões. Realizar auditorias de segurança regulares.
4. **Problemas de Performance e Escalabilidade:**
    - **Risco:** A plataforma pode não suportar um grande número de usuários simultâneos.
    - **Mitigação:** Realizar testes de carga e otimizar consultas ao banco de dados. Planejar e implementar soluções de escalabilidade.

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
