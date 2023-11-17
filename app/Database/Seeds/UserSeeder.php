<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();
        $user_object->insertBatch([
			[
				"nome" => "Welber",
				"sobre_nome"    => "Amaral Gudar",
				"cpf_email"     => "857.547.258-85",
				"phone_no"      => "7899654125",
				"role"          => "admin",
				"cpf_senha"     => password_hash("857.547.258-85", PASSWORD_DEFAULT),
                "status"        => "Ativo",
                "decript_senha" => "857.547.258-85",
			],
			[
				"nome" => "Paciente",
				"sobre_nome" => "Silva dos Santos",
				"cpf_email" => "111.255.895-63",
				"phone_no" => "8888888888",
				"role" => "paciente",
				"cpf_senha" => password_hash("111.255.895-63", PASSWORD_DEFAULT),
                "status" => "Inativo",
                "decript_senha" => "111.255.895-63",
			]
		]);
    }
}
