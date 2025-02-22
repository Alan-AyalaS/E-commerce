<?php
 include_once 'Conexion.php';

 class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function loguearse($user, $pass){
        $sql="SELECT * FROM usuario
        WHERE user=:user and pass=:pass";
        $query= $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function verificar_usuario($user){
        $sql="SELECT * FROM usuario
                WHERE user=:user";
        $query= $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':user'=>$user));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function registrar_usuario($username,$pass,$nombres,$apellidos,$email,$telefono){
        $sql=" INSERT INTO usuario(user,pass,nombres,apellidos,email,telefono,id_tipo) VALUES (:user,:pass,:nombres,:apellidos,:email,:telefono,:id_tipo)";
        $query= $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$username, ':pass'=>$pass, ':nombres'=>$nombres, ':apellidos'=>$apellidos,':email'=>$email, ':telefono'=>$telefono, ':id_tipo'=>"2"));
    }
 }