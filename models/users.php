<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 15:36
 */

class UsersModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM users');
        $rows = $this->resultSet();
        return $rows;
    }
    public function Login(){
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if($post['submit']){
            // $password = md5($post['password']);
            $password = $post['password']; // TODO: Eliminare se si usa la crittografia ed usare l'assegnazione sopra
            $this->query('SELECT * FROM users WHERE email = :email AND pw=:password');
            $this->bind(':email',$post['email']);
            $this->bind(':password',$password);
            $row = $this->singleRecord();
            if($row){
                // Presente
                $_SESSION['syncronia_csv_is_logged'] = true;
                $_SESSION['user_data']=array(
                    "id"    => $row['userID'],
                    "tipo"  => $row['tipo'],
                    "nome"  => $row['nome'].' '.$row['cognome']
                );
                header('Location: '.ROOT_URL.ROOT_PATH.'users?id='. $row['userID']);
            }else{
                Messages::setMsg("Credenziali errate","errore");
            }
        }
       return;
    }
}