<?php

namespace App\Models\DAO;

use App\Models\Entities\User;

class UserDAO extends BaseDAO
{
    public function list($id_user = null)
    {
        if($id_user)
        {
            $result = $this->select(
                "SELECT * FROM user WHERE id_user = $id_user"
            );

            return $result->fetchObject(User::class);

        } else {

            $result = $this->select(
                "SELECT * FROM user"
            );

            return $result->fetchAll(\PDO::FETCH_CLASS, User::class);
            
        }

        return false;
    }

    public function checksEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT email_user FROM user WHERE email_user = '$email'"
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro ao acessar os dados.", 500);
        }
    }

    public  function save(User $user)
    {
        try {

            $name_user   = $user->getNameUser();
            $email_user  = $user->getEmailUser();
            $pass_user   = $user->getPassUser();
            $type_user   = $user->getTypeUser();
            $status_user = $user->getStatusUser();

            return $this->insert(
                'user', // Nome da tabela do banco
                ":name_user,:email_user,:pass_user,:type_user,:status_user", // Colunas a serem populadas
                [
                    ':name_user'   =>$name_user, // Valores a serem persitidos no banco de dados
                    ':email_user'  =>$email_user,
                    ':pass_user'   =>$pass_user,
                    ':type_user'   =>$type_user,
                    ':status_user' =>$status_user
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }

    public function toupdate(User $user)
    {
        try
        {   
            $name_user   = $user->getNameUser();
            $email_user  = $user->getEmailUser();
            $pass_user   = $user->getPassUser();
            $type_user   = $user->getTypeUser();
            $status_user = $user->getStatusUser();

            return $this->update(
                'user',
                "name_user = :name_user, email_user = :email_user, pass_user = :pass_user, type_user = :type_user, status_user = :status_user",
                [
                    ':name_user'=>$name_user,
                    ':email_user'=>$email_user,
                    ':pass_user'=>$pass_user,
                    ':type_user'=>$type_user,
                    ':status_user'=>$status_user,
                ],
                "name_user = :name_user"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao salvar os dados.", 500);
        }
    }

    public function exclusion(User $user)
    {
        try {
            $id_user = $user->getIdUser();

            return $this->delete('user',"id_user = $id_user");

        }catch (Exception $e){
            throw new \Exception("Erro ao deletar o usuário", 500);
        }
    }
}
