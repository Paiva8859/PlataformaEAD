classDiagram
    class Usuario {
        -ID: int
        -nome: string
        -email: string
        -password: string
        -tipo: string
        -cpf: string
        -materia: string
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

    Usuario "0..*" -- "1" Curso: professor
    Inscricao "0..1" --> "1" Usuario: usuario
    Inscricao "0..1" --> "1" Curso: curso
    Usuario "1" -- "0..*" Inscricao: inscricoes
