<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        $role1 = Role::create(['name' => 'teacher']);
        $role1->givePermissionTo('edit articles');
        $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'student']);
        $role2->givePermissionTo('publish articles');
        $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['name' => 'director']);

        $user = User::factory()->create([
            'email' => 'teacher@gmail.com',
            'password' => 'password',
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'email' => 'student@gmail.com',
            'password' => 'password',
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'email' => 'director@gmail.com',
            'password' => 'password',
        ]);
        $user->assignRole($role2);
        
    }
}
