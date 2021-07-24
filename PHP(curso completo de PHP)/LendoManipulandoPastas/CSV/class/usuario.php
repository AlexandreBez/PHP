<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $desenha;
    private $dtcadastro;

    public function getIDusuario() {

        return $this->idusuario;
    }

    public function setIDusuario($value) {

        $this->idusuario = $value;
    }

    public function getdeslogin() {

        return $this->deslogin;
    }

    public function setdeslogin($value) {

        $this->deslogin = $value;
    }

    public function getdesenha() {

        return $this->desenha;
    }

    public function setdesenha($value) {

        $this->desenha = $value;
    }

    public function getdtcadastro() {

        return $this->dtcadastro;
    }

    public function setdtcadastro($value) {

        $this->dtcadastro = $value;
    }

    public function loadByID($id) {

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE idusuarui = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0) {

            $this->setData($result[0]);
        };
    }

    public function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuario ORDER BY deslogin");
    }

    public function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuario WEHRE deslogin LIKE ? ORDER BY deslogin", array(
            ':SEARCH'=>'%'.$login.'%')
        );
    }

    public function login($login, $password) {

        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :LOGIN AND desenha= :PASSWORD", array(
            ":LOGIN" => $login,
            ":PASSWORD"=> $password
        ));

        if (count($result) > 0) {

            $this->setData($result[0]);

        }else {

            throw new Exception("Login e/ou Senha Incorretos");
        }
    }

    public function setData($data) {

        $this -> setIDusuario($data['idusuario']);
        $this -> setdeslogin($data['deslogin']);
        $this -> setdesenha($data['desenha']);
        $this -> setdtcadastro(new DateTime($data['dtcadastro']));

        if(count($results) > 0) {

            $this->setData($results[0]);
        }

    }

    public function insert(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORLD)",array(
            ':LOGIN' => $this->getdeslogin(),
            ':PASSWORLD' => $this->getdesenha()
        ));

    }

    public function update($login, $password) {

        $this->setdeslogin($login);
        $this->setdesenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, desenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getdeslogin,
            ':PASSWORD'=>$this->getdesenha,
            ':ID'=>$this->getIDusuario
        ));
    }

    public function delete(){

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuario WHERE idusuario = :ID", array(

            ':ID'=>$this->getIDusuario()

        ));

        $this->setIDusuario(0);
        $this->setdeslogin("");
        $this->setdesenha("");
        $this->setdtcadastro(new DateTime());
    }

    public function __construct($Login="" , $Password="")
    {
        $this->setdeslogin($Login);
        $this->setdesenha($Password);
    }

    public function __toString(){

        return json_encode(array(
            "idusuario" => $this->getIDusuario(),
            "deslogin" => $this->getdeslogin(),
            "desenha" => $this->getdesenha(),
            "dtcadastro" => $this->getdtcadastro()->format("d/m/Y H:i:s")

        ));
    }

}

