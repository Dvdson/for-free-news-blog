<?php

require_once __DIR__.'/../Helper/Database.php';

class Funcionario
{
    public $codigo;
    public $nome;
    public $cargo;
    public $descricaocargo;
    public $setor;
    public $salario;

    public function save()
    {
        // Verificar se o funcionário já possui um código
        if ($this->codigo) {
            // Atualizar o registro no banco de dados
            $query = "UPDATE funcionarios SET nome = :nome, cargo = :cargo, descricaocargo = :descricaocargo, setor = :setor, salario = :salario WHERE codigo = :codigo";
        } else {
            // Inserir um novo registro no banco de dados
            $query = "INSERT INTO funcionarios (nome, cargo, descricaocargo, setor, salario) VALUES (:nome, :cargo, :descricaocargo, :setor, :salario)";
        }

        // Preparar a consulta
        $stmt = Database::getInstance()->getPdo()->prepare($query);

        // Bind dos parâmetros
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':cargo', $this->cargo);
        $stmt->bindValue(':descricaocargo', $this->descricaocargo);
        $stmt->bindValue(':setor', $this->setor);
        $stmt->bindValue(':salario', $this->salario);

        // Se já existir um código, bind também do código
        if ($this->codigo) {
            $stmt->bindValue(':codigo', $this->codigo);
        }

        // Executar a consulta
        $result = $stmt->execute();

        // Verificar se a consulta foi executada com sucesso
        if ($result) {
            // Se for uma inserção, obter o código gerado
            if (!$this->codigo) {
                $this->codigo = Database::getInstance()->getPdo()->lastInsertId();
            }
            return true; // Sucesso
        } else {
            return false; // Falha
        }
    }
}


