<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rol;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $roles = Rol::create(['nombre' => 'Administrador', 'descripcion' => 'Administrador del sistema']);
        $roles = Rol::create(['nombre' => 'Usuario', 'descripcion' => 'Usuario del sistema']);
        $roles = Rol::create(['nombre' => 'Comprador', 'descripcion' => 'Comprador de divisas']);
        $roles = Rol::create(['nombre' => 'Vendedor', 'descripcion' => 'Vendedor de divisas']);

        $user = New User();
        $user->nombre = 'admin';
        $user->apellido  = 'admin';
        $user->telefono = '04244452741';
        $user->ci = '26162564';
        $user->estado = 'Carabobo';
        $user->pais = 'Venezuela';
        $user->ubicacion = 'San Diego';
        $user->email = 'admin@admin.com';
        $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; //password
        $user->rol_id = 1;
        $user->save();

    }
}
