<?php

namespace App\Models\DAO;

use App\Models\Entities\User;

class UserDAO extends BaseDAO
{
    public function checksEmail($email)
    {
        try {

            $query = $this->select(
                "SELECT email_usuario FROM usuario WHERE email_usuario = '$email'"
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro ao acessar os dados.", 500);
        }
    }

    public  function save(User $user)
    {
        try {

            $nameUser   = $user->getNameUser();
            $emailUser  = $user->getEmailUser();
            $passUser   = $user->getPassUser();
            $typeUser   = $user->getTypeUser();
            $statusUser = $user->getStatusUser();

            return $this->insert(
                'usuario', // Nome da tabela do banco
                ":nome_usuario,:email_usuario,:senha_usuario,:tipo_usuario,:status_usuario", // Colunas a serem populadas
                [
                    ':nome_usuario'   =>$nameUser, // Valores a serem persitidos no banco de dados
                    ':email_usuario'  =>$emailUser,
                    ':senha_usuario'  =>$passUser,
                    ':tipo_usuario'   =>$typeUser,
                    ':status_usuario' =>$statusUser
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }
}
