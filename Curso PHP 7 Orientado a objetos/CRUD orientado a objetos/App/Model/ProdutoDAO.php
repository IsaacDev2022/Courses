<?php 

    class ProdutoDAO {

        public function create(Produto $p) {
            $sql = "INSERT INTO produtos (nome, descricao) VALUES (?, ?)";
            $stmt = Connection::getCon()->prepare($sql);
            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getDescricao());

            $stmt->execute();
        }

        public function read() {
            $sql = "SELECT * FROM produtos";

            $stmt = Connection::getCon()->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }
        }

        public function update(Produto $p) {
            $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";
            $stmt = Connection::getCon()->prepare($sql);
            $stmt->bindValue(1, $p->getNome());
            $stmt->bindValue(2, $p->getDescricao());
            $stmt->bindValue(1, $p->getId());

            $stmt->execute();
        }
        
        public function delete($id) {
            $sql = "DELETE FROM produtos WHERE = ?";
            $stmt = Connection::getCon()->prepare($sql);
            $stmt->bindValue(1, $p->getId());

            $stmt->execute();
        }
    }
?>