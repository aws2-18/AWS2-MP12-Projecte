<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
	 private $arrayUsers = array(
        array(
            'name' => 'Lluis',
            'email' => 'lluis_96_13@hotmail.com',
            'password' => 'Admin1',
            'pais' => 'España',
            'provincia' => 'Barcelona',
            'ciudad' => 'Sant Joan Despi',
            'direccion' => 'Carrer Major',
            'cp' => '08970',
            'imagen' => 'foto.png',
            )
        );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
       $this->command->info('Tabla usuarios inicializada con exito');
    }
     public function seedUsers(){
              DB::table('users')->delete();
              foreach ($this->arrayUsers as $user){
                 $u = new User;
                 $u->name = $user['name'];
                 $u->email = $user['email'];
                 $u->password = bcrypt($user['password']);
                 $u->pais = $user['pais'];
                 $u->provincia = $user['provincia'];
                 $u->ciudad = $user['ciudad'];
                 $u->direccion = $user['direccion'];
                 $u->cp = $user['cp'];
                 $u->imagen = $user['imagen'];
                 $u->save();
                }
            }
}
