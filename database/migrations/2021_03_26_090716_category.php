<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('categories')->insert(
            array(
                'name' => 'Dabeli',
                'image' => 'dabeli.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Vadapau',
                'image' => 'vadapau.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Puff',
                'image' => 'puff.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Pizza',
                'image' => 'pizza.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Burger',
                'image' => 'burger.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        if(file_exists(public_path('/back/dummy/dabeli.png')) && !file_exists(public_path('/back/uploads/category/dabeli.png')) ){
            File::copy(public_path('/back/dummy/dabeli.png'), public_path('/back/uploads/category/dabeli.png'));
        }

        if(file_exists(public_path('/back/dummy/vadapau.png')) && !file_exists(public_path('/back/uploads/category/vadapau.png'))){
            File::copy(public_path('/back/dummy/vadapau.png'), public_path('/back/uploads/category/vadapau.png'));
        }

        if(file_exists(public_path('/back/dummy/puff.png')) && !file_exists(public_path('/back/uploads/category/puff.png'))){
            File::copy(public_path('/back/dummy/puff.png'), public_path('/back/uploads/category/puff.png'));
        }

        if(file_exists(public_path('/back/dummy/pizza.png')) && !file_exists(public_path('/back/uploads/category/pizza.png'))){
            File::copy(public_path('/back/dummy/pizza.png'), public_path('/back/uploads/category/pizza.png'));
        }

        if(file_exists(public_path('/back/dummy/burger.png')) && !file_exists(public_path('/back/uploads/category/burger.png'))){
            File::copy(public_path('/back/dummy/burger.png'), public_path('/back/uploads/category/burger.png'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('categories');
    }
}
