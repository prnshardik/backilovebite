<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive', 'deleted'])->default('inactive');
            $table->enum('is_admin', ['Y', 'N'])->default('N');
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('users')->insert(
            array(
                'firstname' => 'Super',
                'lastname' => 'Admin',
                'phone' => '9624040501',
                'email' => 'info@ilovebite.in',
                'password' => bcrypt('Admin@123'),
                'image' => 'admin-avatar.png',
                'status' => 'active',
                'is_admin' => 'Y',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'Mitul',
                'lastname' => 'Sonigara',
                'phone' => '8200242382',
                'email' => 'mitul@cypherocean.com',
                'password' => bcrypt('Admin@123'),
                'image' => 'admin-avatar.png',
                'status' => 'active',
                'is_admin' => 'N',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('users')->insert(
            array(
                'firstname' => 'HardIk',
                'lastname' => 'Patel',
                'phone' => '8000080272',
                'email' => 'hardik@cypherocean.com',
                'password' => bcrypt('Admin@123'),
                'image' => 'admin-avatar.png',
                'status' => 'active',
                'is_admin' => 'N',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );
        
        if(file_exists(public_path('/back/dummy/admin-avatar.png')) && !file_exists(public_path('/back/uploads/users/admin-avatar.png')) ){
            File::copy(public_path('/back/dummy/admin-avatar.png'), public_path('/back/uploads/users/admin-avatar.png'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
