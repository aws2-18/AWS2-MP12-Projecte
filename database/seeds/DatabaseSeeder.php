<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Videos;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
       $this->command->info('Tabla usuarios inicializada con exito');

       self::seedvideos();
       $this->command->info('Tabla Videos inicializada con exito');
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

    public function seedvideos(){
        DB::table('videos')->delete();
        foreach ($this->arrayVideos as $video){
            $v = new Videos;
            $v->titulo = $video['titulo'];
            $v->usuario = $video['usuario'];
            $v->url = $video['url'];
            $v->idusuario = $video['idusuario'];
            $v->save();
        }
    }
}
