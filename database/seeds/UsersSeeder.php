<?php

use Illuminate\Database\Seeder;
use Netflics\Models\User;
use Netflics\Models\Rol;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Rol::find(1);

        $user = new User();
        $user->fill([
                'usuario' => 'admin',
                'contraseña' => bcrypt('admin')
            ]);
        $user->rol()->associate($role)->save();
        $user->idtrabajador()->associate($idtrabajador)->save();
    }
}
