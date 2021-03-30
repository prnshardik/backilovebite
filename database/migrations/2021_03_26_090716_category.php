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
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('categories')->insert(
            array(
                'name' => 'Dabeli',
                'description' => 'Dabeli',
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
                'description' => 'Vadapau',
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
                'name' => 'Burger',
                'description' => 'Burger',
                'image' => 'burger.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Frankie',
                'description' => 'Frankie',
                'image' => 'frankie.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Bhel',
                'description' => 'Bhel',
                'image' => 'bhel.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Sevpuri',
                'description' => 'Sevpuri',
                'image' => 'sevpuri.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'French Fries',
                'description' => 'French Fries',
                'image' => 'french_fries.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Masala Pau',
                'description' => 'Masala Pau',
                'image' => 'masala_pau.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Maggie',
                'description' => 'Maggie',
                'image' => 'maggie.png',
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
                'description' => 'Pizza',
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
                'name' => 'Sandwich',
                'description' => 'Sandwich',
                'image' => 'sandwich.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Slice',
                'description' => 'Slice',
                'image' => 'Slice.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Maska bun',
                'description' => 'Maska bun',
                'image' => 'maska_bun.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Milk Shake',
                'description' => 'Milk Shake',
                'image' => 'milk_shake.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Cold Coffee',
                'description' => 'Cold Coffee',
                'image' => 'cold_coffee.png',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Cold Drink',
                'description' => 'Cold Drink',
                'image' => 'cold_drink.png',
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
                'description' => 'Puff',
                'image' => 'puff.png',
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

        if(file_exists(public_path('/back/dummy/burger.png')) && !file_exists(public_path('/back/uploads/category/burger.png'))){
            File::copy(public_path('/back/dummy/burger.png'), public_path('/back/uploads/category/burger.png'));
        }

        if(file_exists(public_path('/back/dummy/frankie.png')) && !file_exists(public_path('/back/uploads/category/frankie.png'))){
            File::copy(public_path('/back/dummy/frankie.png'), public_path('/back/uploads/category/frankie.png'));
        }

        if(file_exists(public_path('/back/dummy/bhel.png')) && !file_exists(public_path('/back/uploads/category/bhel.png'))){
            File::copy(public_path('/back/dummy/bhel.png'), public_path('/back/uploads/category/bhel.png'));
        }

        if(file_exists(public_path('/back/dummy/sevpuri.png')) && !file_exists(public_path('/back/uploads/category/sevpuri.png'))){
            File::copy(public_path('/back/dummy/sevpuri.png'), public_path('/back/uploads/category/sevpuri.png'));
        }

        if(file_exists(public_path('/back/dummy/french_fries.png')) && !file_exists(public_path('/back/uploads/category/french_fries.png'))){
            File::copy(public_path('/back/dummy/french_fries.png'), public_path('/back/uploads/category/french_fries.png'));
        }

        if(file_exists(public_path('/back/dummy/masala_pau.png')) && !file_exists(public_path('/back/uploads/category/masala_pau.png'))){
            File::copy(public_path('/back/dummy/masala_pau.png'), public_path('/back/uploads/category/masala_pau.png'));
        }

        if(file_exists(public_path('/back/dummy/maggie.png')) && !file_exists(public_path('/back/uploads/category/maggie.png'))){
            File::copy(public_path('/back/dummy/maggie.png'), public_path('/back/uploads/category/maggie.png'));
        }

        if(file_exists(public_path('/back/dummy/pizza.png')) && !file_exists(public_path('/back/uploads/category/pizza.png'))){
            File::copy(public_path('/back/dummy/pizza.png'), public_path('/back/uploads/category/pizza.png'));
        }

        if(file_exists(public_path('/back/dummy/sandwich.png')) && !file_exists(public_path('/back/uploads/category/sandwich.png'))){
            File::copy(public_path('/back/dummy/sandwich.png'), public_path('/back/uploads/category/sandwich.png'));
        }

        if(file_exists(public_path('/back/dummy/slice.png')) && !file_exists(public_path('/back/uploads/category/slice.png'))){
            File::copy(public_path('/back/dummy/slice.png'), public_path('/back/uploads/category/slice.png'));
        }

        if(file_exists(public_path('/back/dummy/maska_bun.png')) && !file_exists(public_path('/back/uploads/category/maska_bun.png'))){
            File::copy(public_path('/back/dummy/maska_bun.png'), public_path('/back/uploads/category/maska_bun.png'));
        }

        if(file_exists(public_path('/back/dummy/milk_shake.png')) && !file_exists(public_path('/back/uploads/category/milk_shake.png'))){
            File::copy(public_path('/back/dummy/milk_shake.png'), public_path('/back/uploads/category/milk_shake.png'));
        }

        if(file_exists(public_path('/back/dummy/cold_coffee.png')) && !file_exists(public_path('/back/uploads/category/cold_coffee.png'))){
            File::copy(public_path('/back/dummy/cold_coffee.png'), public_path('/back/uploads/category/cold_coffee.png'));
        }

        if(file_exists(public_path('/back/dummy/cold_drink.png')) && !file_exists(public_path('/back/uploads/category/cold_drink.png'))){
            File::copy(public_path('/back/dummy/cold_drink.png'), public_path('/back/uploads/category/cold_drink.png'));
        }

        if(file_exists(public_path('/back/dummy/puff.png')) && !file_exists(public_path('/back/uploads/category/puff.png'))){
            File::copy(public_path('/back/dummy/puff.png'), public_path('/back/uploads/category/puff.png'));
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
