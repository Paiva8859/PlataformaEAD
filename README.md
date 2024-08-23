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

### Objetivo 1: Implementar um CRUD completo para cursos

- **Específico:** Desenvolver uma aplicação web para gerenciar cursos.
- **Mensurável:** Incluir funcionalidades para criar, ler, atualizar e deletar cursos.
- **Alcançável:** Utilizar tecnologias apropriadas para frontend (Laravel) e backend (PostgreSQL).

### Objetivo 2: Desenvolver um sistema de autenticação robusto para professores e alunos

- **Específico:** Implementar um sistema seguro de login e logout.
- **Mensurável:** Incluir cadastro, login, logout e gerenciamento de senhas.
- **Alcançável:** Usar bibliotecas de autenticação e seguir melhores práticas de segurança.

### Objetivo 3: Permitir que alunos se inscrevam em cursos.

- **Específico:** Desenvolver funcionalidades para inscrição.
- **Mensurável:** Incluir inscrição em cursos.
- **Alcançável:** Criar interfaces e conectar com o backend para gestão de dados.

### Objetivo 4: Facilitar a criação e gerenciamento de cursos pelos professores

- **Específico:** Criar uma interface para que professores gerenciem seus cursos.
- **Alcançável:** Desenvolver uma interface intuitiva e funcional.

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

## Recursos Necessários

### Tecnológicos

- **Laravel Framework**
  - **Descrição:** Framework PHP para desenvolvimento de back-end. Facilita a criação de APIs, gestão de rotas, e implementações de funcionalidades complexas.
  - **Função:** Gerenciar a lógica de negócios e interações com o banco de dados, além de proporcionar uma estrutura organizada para o desenvolvimento.

- **PostgreSQL Database**
  - **Descrição:** Sistema de gerenciamento de banco de dados relacional. Oferece robustez, escalabilidade e suporte a transações complexas.
  - **Função:** Armazenar e gerenciar dados sobre cursos, usuários, inscrições e progresso dos alunos.

- **Bootstrap 5**
  - **Descrição:** Framework CSS para desenvolvimento de front-end responsivo. Fornece componentes e estilos pré-definidos.
  - **Função:** Desenvolver a interface de usuário de maneira consistente e responsiva, melhorando a experiência do usuário em diferentes dispositivos.

- **GitHub**
  - **Descrição:** Plataforma de controle de versão baseada em Git. Facilita o gerenciamento de código-fonte e colaboração entre equipes.
  - **Função:** Gerenciar o controle de versão do código, facilitar o trabalho colaborativo e realizar revisões de código.

### Recursos Humanos

- **Desenvolvedor Back-end**
  - **Descrição:** Profissional responsável pelo desenvolvimento da lógica de servidor, integração com o banco de dados e implementação das funcionalidades de back-end.
  - **Habilidades Necessárias:** Experiência com Laravel Framework e PostgreSQL, conhecimento em APIs RESTful e segurança de aplicações.

- **Desenvolvedor Front-end**
  - **Descrição:** Profissional responsável pelo desenvolvimento da interface de usuário, garantindo que a aplicação seja visualmente atraente e funcional.
  - **Habilidades Necessárias:** Experiência com Bootstrap 5, HTML, CSS, JavaScript, e frameworks modernos como React ou Vue.js pode ser um diferencial.

- **Designer UI/UX**
  - **Descrição:** Profissional que cria a interface visual da aplicação e assegura uma experiência de usuário intuitiva e agradável.
  - **Habilidades Necessárias:** Experiência em design de interfaces e usabilidade, familiaridade com ferramentas de design como Figma ou Adobe XD.

- **Especialista em Segurança (para sistemas sensíveis)**
  - **Descrição:** Profissional responsável por garantir a segurança dos dados e proteger a aplicação contra vulnerabilidades e ataques.
  - **Habilidades Necessárias:** Conhecimento em práticas de segurança, como criptografia, gestão de sessões, e proteção contra ataques comuns (e.g., SQL Injection, XSS).

### Outros Recursos

- **Documentação e Comunicação**
  - **Descrição:** Ferramentas e práticas para garantir uma documentação clara e comunicação eficaz dentro da equipe.
  - **Ferramentas Sugeridas:** Confluence ou Google Docs para documentação, Slack ou Microsoft Teams para comunicação.

- **Ambiente de Desenvolvimento e Testes**
  - **Descrição:** Infraestrutura para desenvolvimento e testes contínuos.
  - **Ferramentas Sugeridas:** Docker para ambientes de desenvolvimento consistentes, Jenkins ou GitHub Actions para integração contínua e testes automatizados.

- **Serviços de Hospedagem**
  - **Descrição:** Infraestrutura para hospedar a aplicação em produção.
  - **Opções Sugeridas:** Heroku, AWS, ou DigitalOcean, dependendo das necessidades de escalabilidade e orçamento.

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
# Manual do Usuário

Este guia abrange as principais funcionalidades disponíveis em nossa plataforma. Siga as instruções abaixo para navegar e utilizar eficientemente o sistema.

---

## 1. Usuário Não Logado

### **Objetivo:**
Permitir que usuários não logados acessem a página inicial, realizem o registro ou o login, e visualizem os cursos disponíveis.

### **Fluxo de Navegação:**

1. **Página Inicial:**
   - Ao acessar o sistema pela primeira vez, você será direcionado para a **Página Inicial**.

2. **Visualizar Cursos:**
   - Na **Página Inicial**, você pode visualizar os cursos disponíveis clicando no link para **Exibição de Cursos**.

3. **Registro:**
   - Para se registrar, acesse a **Página de Registro** a partir da **Página Inicial**.
   - Preencha o formulário de registro e envie as informações. Após o registro bem-sucedido, você será automaticamente direcionado para a **Página de Cursos**.

4. **Login:**
   - Caso já possua uma conta, acesse a **Página de Login** a partir da **Página Inicial**.
   - Insira suas credenciais e, ao realizar o login com sucesso, você será redirecionado para a **Página de Cursos**.

---

## 2. Usuário Não Professor Gerenciando Inscrições de Cursos

### **Objetivo:**
Permitir que usuários não professores visualizem, inscrevam-se ou cancelem inscrições em cursos.

### **Fluxo de Navegação:**

1. **Dashboard com Carrossel:**
   - Ao fazer login, você será direcionado para o **Dashboard com Carrossel**.

2. **Visualizar Cursos:**
   - A partir do **Dashboard com Carrossel**, você pode acessar a **Página de Visualização Geral de Cursos** ou clicar diretamente em um curso no carrossel para ir para a **Página de Detalhes do Curso**.

3. **Detalhes do Curso:**
   - Na **Página de Detalhes do Curso**, você pode optar por **Inscrever-se** no curso ou **Cancelar Inscrição** se já estiver inscrito.

---

## 3. Usuário Professor Gerenciando Seus Cursos

### **Objetivo:**
Permitir que professores visualizem, criem, editem e excluam seus cursos.

### **Fluxo de Navegação:**

1. **Visualizar Lista de Cursos:**
   - Ao fazer login como professor, você será direcionado para a **Página de Visualização de Lista de Cursos**.

2. **Criar Novo Curso:**
   - Na lista de cursos, você pode clicar em **Criar Novo Curso** para acessar o **Formulário de Criação de Curso**. Preencha o formulário e submeta para adicionar um novo curso à lista.

3. **Editar Curso:**
   - Para editar um curso existente, clique em **Editar** ao lado do curso desejado e acesse o **Formulário de Edição de Curso**. Faça as alterações necessárias e submeta o formulário para atualizar o curso.

4. **Deletar Curso:**
   - Se precisar excluir um curso, clique em **Deletar** e confirme a ação na página de confirmação. O curso será removido da lista.

### **Observação Importante:**
Os professores são adicionados ao sistema manualmente. Caso você precise de acesso como professor e ainda não tenha sido cadastrado, entre em contato com o administrador do sistema para solicitar a inclusão.
