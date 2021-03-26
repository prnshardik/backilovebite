<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable()->unsigned();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });

        DB::table('products')->insert(
            array(
                'category_id' => 1,
                'name' => 'Oil Dabeli',
                'image' => 'dabeli.png',
                'price' => '20',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 1,
                'name' => 'Butter Dabeli',
                'image' => 'dabeli.png',
                'price' => '25',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 2,
                'name' => 'Oil Vadapau',
                'image' => 'vadapau.png',
                'price' => '20',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 2,
                'name' => 'Butter Vadapau',
                'image' => 'vadapau.png',
                'price' => '25',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 3,
                'name' => 'Simple Puff',
                'image' => 'puff.png',
                'price' => '15',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 3,
                'name' => 'Special Puff',
                'image' => 'puff.png',
                'price' => '20',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 4,
                'name' => 'Vegitable Pizza',
                'image' => 'pizza.png',
                'price' => '90',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 5,
                'name' => 'Margerita Pizza',
                'image' => 'pizza.png',
                'price' => '110',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 5,
                'name' => 'Vegitable Burger',
                'image' => 'burger.png',
                'price' => '50',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('products')->insert(
            array(
                'category_id' => 5,
                'name' => 'Vegitable Cheese Burger',
                'image' => 'burger.png',
                'price' => '65',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        if(file_exists(public_path('/back/dummy/dabeli.png')) && !file_exists(public_path('/back/uploads/products/dabeli.png')) ){
            File::copy(public_path('/back/dummy/dabeli.png'), public_path('/back/uploads/products/dabeli.png'));
        }

        if(file_exists(public_path('/back/dummy/vadapau.png')) && !file_exists(public_path('/back/uploads/products/vadapau.png'))){
            File::copy(public_path('/back/dummy/vadapau.png'), public_path('/back/uploads/products/vadapau.png'));
        }

        if(file_exists(public_path('/back/dummy/puff.png')) && !file_exists(public_path('/back/uploads/products/puff.png'))){
            File::copy(public_path('/back/dummy/puff.png'), public_path('/back/uploads/products/puff.png'));
        }

        if(file_exists(public_path('/back/dummy/pizza.png')) && !file_exists(public_path('/back/uploads/products/pizza.png'))){
            File::copy(public_path('/back/dummy/pizza.png'), public_path('/back/uploads/products/pizza.png'));
        }

        if(file_exists(public_path('/back/dummy/burger.png')) && !file_exists(public_path('/back/uploads/products/burger.png'))){
            File::copy(public_path('/back/dummy/burger.png'), public_path('/back/uploads/products/burger.png'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
