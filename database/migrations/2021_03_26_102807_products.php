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
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });

        // Dabeli
            DB::table('products')->insert(
                array(
                    'category_id' => 1,
                    'name' => 'Oil Dabeli',
                    'description' => 'Oil Dabeli',
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
                    'description' => 'Butter Dabeli',
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
                    'category_id' => 1,
                    'name' => 'Cheese Dabeli',
                    'description' => 'Cheese Dabeli',
                    'image' => 'dabeli.png',
                    'price' => '40',
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
                    'name' => 'Vegitable Dabeli',
                    'description' => 'Vegitable Dabeli',
                    'image' => 'dabeli.png',
                    'price' => '35',
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
                    'name' => 'Thousan Dabeli',
                    'description' => 'Thousan Dabeli',
                    'image' => 'dabeli.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Dabeli

        // Vadapau
            DB::table('products')->insert(
                array(
                    'category_id' => 2,
                    'name' => 'Oil Vadapau',
                    'description' => 'Oil Vadapau',
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
                    'description' => 'Butter Vadapau',
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
                    'category_id' => 2,
                    'name' => 'Cheese Vadapau',
                    'description' => 'Cheese Vadapau',
                    'image' => 'vadapau.png',
                    'price' => '40',
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
                    'name' => 'Thousand Vadapau',
                    'description' => 'Thousand Vadapau',
                    'image' => 'vadapau.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Vadapau

        // Burger
            DB::table('products')->insert(
                array(
                    'category_id' => 3,
                    'name' => 'Vegitable Burger',
                    'description' => 'Vegitable Burger',
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
                    'category_id' => 3,
                    'name' => 'Vegitable Spicy Burger',
                    'description' => 'Vegitable Spicy Burger',
                    'image' => 'burger.png',
                    'price' => '55',
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
                    'name' => 'Vegitable Cheese Burger',
                    'description' => 'Vegitable Cheese Burger',
                    'image' => 'burger.png',
                    'price' => '65',
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
                    'name' => 'Vegitable Cheese Spicy Burger',
                    'description' => 'Vegitable Cheese Spicy Burger',
                    'image' => 'burger.png',
                    'price' => '70',
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
                    'name' => 'Vegitable Extra Cheese Burger',
                    'description' => 'Vegitable Extra Cheese Burger',
                    'image' => 'burger.png',
                    'price' => '80',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Burger

        // Frankie
            DB::table('products')->insert(
                array(
                    'category_id' => 4,
                    'name' => 'Paneer Frankie',
                    'description' => 'Paneer Frankie',
                    'image' => 'frankie.png',
                    'price' => '60',
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
                    'name' => 'Vegitable Frankie',
                    'description' => 'Vegitable Frankie',
                    'image' => 'frankie.png',
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
                    'category_id' => 4,
                    'name' => 'Chiness Frankie',
                    'description' => 'Chiness Frankie',
                    'image' => 'frankie.png',
                    'price' => '50',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Frankie

        // Bhel
            DB::table('products')->insert(
                array(
                    'category_id' => 5,
                    'name' => 'Special Bhel',
                    'description' => 'Special Bhel',
                    'image' => 'bhel.png',
                    'price' => '30',
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
                    'name' => 'Cheese Bhel',
                    'description' => 'Cheese Bhel',
                    'image' => 'bhel.png',
                    'price' => '50',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Bhel

        // Sev Puri
            DB::table('products')->insert(
                array(
                    'category_id' => 6,
                    'name' => 'Sev Puri',
                    'description' => 'Sev Puri',
                    'image' => 'sev_puri.png',
                    'price' => '30',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 6,
                    'name' => 'Cheese Sev Puri',
                    'description' => 'Cheese Sev Puri',
                    'image' => 'sev_puri.png',
                    'price' => '50',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Sev Puri

        // French Fries
            DB::table('products')->insert(
                array(
                    'category_id' => 7,
                    'name' => 'French Fries',
                    'description' => 'French Fries',
                    'image' => 'french_fries.png',
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
                    'category_id' => 7,
                    'name' => 'Spicy French Fries',
                    'description' => 'Spicy French Fries',
                    'image' => 'french_fries.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 7,
                    'name' => 'Spicy Thousand French Fries',
                    'description' => 'Spicy Thousand French Fries',
                    'image' => 'french_fries.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // French Fries

        // Masala Pau
            DB::table('products')->insert(
                array(
                    'category_id' => 8,
                    'name' => 'Butter Masala Pau',
                    'description' => 'Butter Masala Pau',
                    'image' => 'masala_pau.png',
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
                    'category_id' => 8,
                    'name' => 'Cheese Masala Pau',
                    'description' => 'Cheese Masala Pau',
                    'image' => 'masala_pau.png',
                    'price' => '30',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Masala Pau

        // Maggie
            DB::table('products')->insert(
                array(
                    'category_id' => 9,
                    'name' => 'Masala Maggie',
                    'description' => 'Masala Maggie',
                    'image' => 'maggie.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 9,
                    'name' => 'Vegitable Masala Maggie',
                    'description' => 'Vegitable Masala Maggie',
                    'image' => 'maggie.png',
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
                    'category_id' => 9,
                    'name' => 'Cheese Masala Maggie',
                    'description' => 'Cheese Vegitable Maggie',
                    'image' => 'maggie.png',
                    'price' => '65',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 9,
                    'name' => 'Vegitable Cheese Masala Maggie',
                    'description' => 'Vegitable Cheese Masala Maggie',
                    'image' => 'maggie.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Maggie

        // Pizza
            DB::table('products')->insert(
                array(
                    'category_id' => 10,
                    'name' => 'Margerita Pizza',
                    'description' => 'Margerita Pizza',
                    'image' => 'pizza.png',
                    'price' => '140',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 10,
                    'name' => 'Italian Pizza',
                    'description' => 'Italian Pizza',
                    'image' => 'pizza.png',
                    'price' => '150',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 10,
                    'name' => 'Lovebite Special Pizza',
                    'description' => 'Lovebite Special Pizza',
                    'image' => 'pizza.png',
                    'price' => '160',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 10,
                    'name' => 'Extra Cheese Lovebite Special Pizza',
                    'description' => 'Extra Cheese Lovebite Special Pizza',
                    'image' => 'pizza.png',
                    'price' => '170',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Pizza

        // Sandwich
            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Bread Butter Sandwich',
                    'description' => 'Bread Butter Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Bread Butter Grill Sandwich',
                    'description' => 'Bread Butter Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '35',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Butter Jam Sandwich',
                    'description' => 'Butter Jam Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '30',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Butter Jam Grill Sandwich',
                    'description' => 'Butter Jam Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Vegitable Sandwich',
                    'description' => 'Vegitable Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Vegitable Grill Sandwich',
                    'description' => 'Vegitable Grill Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Alu Mutter Sandwich',
                    'description' => 'Alu Mutter Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Alu Mutter Grill Sandwich',
                    'description' => 'Alu Mutter Grill Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Alu Mutter Vegitable Sandwich',
                    'description' => 'Alu Mutter Vegitable Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Alu Mutter Vegitable Grill Sandwich',
                    'description' => 'Alu Mutter Vegitable Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Sandwich',
                    'description' => 'Cheese Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Cheese Grill Sandwich',
                    'description' => 'Cheese Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Chatni Sandwich',
                    'description' => 'Cheese Chatni Sandwich',
                    'image' => 'sandwich.png',
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
                    'category_id' => 11,
                    'name' => 'Cheese Chatni Grill Sandwich',
                    'description' => 'Cheese Chatni Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Jam Sandwich',
                    'description' => 'Cheese Jam Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '55',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Jam Grill Sandwich',
                    'description' => 'Cheese Jam Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '65',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Chocolate Sandwich',
                    'description' => 'Cheese Chocolate Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Chocolate Grill Sandwich',
                    'description' => 'Cheese Chocolate Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Alu Mutter Cheese Sandwich',
                    'description' => 'Alu Mutter Cheese Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Alu Mutter Cheese Grill Sandwich',
                    'description' => 'Alu Mutter Cheese Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Vegitable Cheese Sandwich',
                    'description' => 'Vegitable Cheese Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Vegitable Cheese Grill Sandwich',
                    'description' => 'Vegitable Cheese Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Cheese Spicy Grill Sandwich',
                    'description' => 'Cheese Spicy Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '70',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Club Grill Sandwich',
                    'description' => 'Club Grill Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '100',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 11,
                    'name' => 'Special Lovebite Grill Sandwich',
                    'description' => 'Special Lovebite Sandwich',
                    'image' => 'sandwich.png',
                    'price' => '120',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Sandwich

        // Slice
            DB::table('products')->insert(
                array(
                    'category_id' => 12,
                    'name' => 'Butter Slice',
                    'description' => 'Butter Slice',
                    'image' => 'slice.png',
                    'price' => '10',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 12,
                    'name' => 'Butter Jam Slice',
                    'description' => 'Butter Jam Slice',
                    'image' => 'slice.png',
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
                    'category_id' => 12,
                    'name' => 'Sing Sev Slice',
                    'description' => 'Sing Sev Slice',
                    'image' => 'slice.png',
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
                    'category_id' => 12,
                    'name' => 'Chocolate Slice',
                    'description' => 'Chocolate Slice',
                    'image' => 'slice.png',
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
                    'category_id' => 12,
                    'name' => 'Cheese Slice',
                    'description' => 'Cheese Slice',
                    'image' => 'slice.png',
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
                    'category_id' => 12,
                    'name' => 'Cheese Jam Slice',
                    'description' => 'Cheese Jam Slice',
                    'image' => 'slice.png',
                    'price' => '35',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 12,
                    'name' => 'Cheese Chocolate Slice',
                    'description' => 'Cheese Chocolate Slice',
                    'image' => 'slice.png',
                    'price' => '30',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 12,
                    'name' => 'Sing Sev Jam Slice',
                    'description' => 'Sing Sev Jam Slice',
                    'image' => 'slice.png',
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
                    'category_id' => 12,
                    'name' => 'Chocolate Sing Sev Slice',
                    'description' => 'Chocolate Sing Sev Slice',
                    'image' => 'slice.png',
                    'price' => '25',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Slice

        // Maska Bun
            DB::table('products')->insert(
                array(
                    'category_id' => 13,
                    'name' => 'Butter Maska bun',
                    'description' => 'Butter Maska bun',
                    'image' => 'maska_bun.png',
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
                    'category_id' => 13,
                    'name' => 'Butter Jam Maska bun',
                    'description' => 'Butter Jam Maska bun',
                    'image' => 'maska_bun.png',
                    'price' => '25',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Maska Bun

        // Milk Shake
            DB::table('products')->insert(
                array(
                    'category_id' => 14,
                    'name' => 'Chocolate Milk Shake',
                    'description' => 'Chocolate Milk Shake',
                    'image' => 'milk_shake.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 14,
                    'name' => 'Butter Scotch Milk Shake',
                    'description' => 'Butter Scotch Milk Shake',
                    'image' => 'milk_shake.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 14,
                    'name' => 'Mango Milk Shake',
                    'description' => 'Mango Milk Shake',
                    'image' => 'milk_shake.png',
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
                    'category_id' => 14,
                    'name' => 'Strawberry Milk Shake',
                    'description' => 'Strawberry Milk Shake',
                    'image' => 'milk_shake.png',
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
                    'category_id' => 14,
                    'name' => 'Green Apple Milk Shake',
                    'description' => 'Green Apple Milk Shake',
                    'image' => 'milk_shake.png',
                    'price' => '55',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 14,
                    'name' => 'Oreo Milk Shake',
                    'description' => 'Oreo Milk Shake',
                    'image' => 'milk_shake.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 14,
                    'name' => 'Venilla Milk Shake',
                    'description' => 'Venilla Milk Shake',
                    'image' => 'milk_shake.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Milk Shake

        // Cold Coffee
            DB::table('products')->insert(
                array(
                    'category_id' => 15,
                    'name' => 'Cold Coffee',
                    'description' => 'Cold Coffee',
                    'image' => 'cold_coffee.png',
                    'price' => '60',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 15,
                    'name' => 'Chocolate Cold Coffee',
                    'description' => 'Chocolate Cold Coffee',
                    'image' => 'cold_coffee.png',
                    'price' => '65',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Cold Coffee

        // Cold Drink
            DB::table('products')->insert(
                array(
                    'category_id' => 16,
                    'name' => 'Pepsi',
                    'description' => 'Pepsi',
                    'image' => 'cold_drink.png',
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
                    'category_id' => 16,
                    'name' => 'Mirinda',
                    'description' => 'Mirinda',
                    'image' => 'cold_drink.png',
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
                    'category_id' => 16,
                    'name' => 'Mazza',
                    'description' => 'Mazza',
                    'image' => 'cold_drink.png',
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
                    'category_id' => 16,
                    'name' => '7 Up',
                    'description' => '7 Up',
                    'image' => 'cold_drink.png',
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
                    'category_id' => 16,
                    'name' => 'Sprite',
                    'description' => 'Sprite',
                    'image' => 'cold_drink.png',
                    'price' => '15',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Cold Drink

        // Puff
            DB::table('products')->insert(
                array(
                    'category_id' => 17,
                    'name' => 'Simple Puff',
                    'description' => 'Simple Puff',
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
                    'category_id' => 17,
                    'name' => 'Simple Grill Puff',
                    'description' => 'Simple Grill Puff',
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
                    'category_id' => 17,
                    'name' => 'Masala Puff',
                    'description' => 'Masala Puff',
                    'image' => 'puff.png',
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
                    'category_id' => 17,
                    'name' => 'Masala Grill Puff',
                    'description' => 'Masala Grill Puff',
                    'image' => 'puff.png',
                    'price' => '35',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 17,
                    'name' => 'Cheese Puff',
                    'description' => 'Cheese Puff',
                    'image' => 'puff.png',
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
                    'category_id' => 17,
                    'name' => 'Cheese Grill Puff',
                    'description' => 'Cheese Grill Puff',
                    'image' => 'puff.png',
                    'price' => '35',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 17,
                    'name' => 'Cheese Masala Puff',
                    'description' => 'Cheese Masala Puff',
                    'image' => 'puff.png',
                    'price' => '30',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );

            DB::table('products')->insert(
                array(
                    'category_id' => 17,
                    'name' => 'Cheese Masala Grill Puff',
                    'description' => 'Cheese Masala Grill Puff',
                    'image' => 'puff.png',
                    'price' => '40',
                    'status' => 'active',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => 1,
                    'updated_by' => 1,
                )
            );
        // Puff

        if(file_exists(public_path('/back/dummy/dabeli.png')) && !file_exists(public_path('/back/uploads/products/dabeli.png')) ){
            File::copy(public_path('/back/dummy/dabeli.png'), public_path('/back/uploads/products/dabeli.png'));
        }

        if(file_exists(public_path('/back/dummy/vadapau.png')) && !file_exists(public_path('/back/uploads/products/vadapau.png'))){
            File::copy(public_path('/back/dummy/vadapau.png'), public_path('/back/uploads/products/vadapau.png'));
        }

        if(file_exists(public_path('/back/dummy/burger.png')) && !file_exists(public_path('/back/uploads/products/burger.png'))){
            File::copy(public_path('/back/dummy/burger.png'), public_path('/back/uploads/products/burger.png'));
        }

        if(file_exists(public_path('/back/dummy/frankie.png')) && !file_exists(public_path('/back/uploads/products/frankie.png'))){
            File::copy(public_path('/back/dummy/frankie.png'), public_path('/back/uploads/products/frankie.png'));
        }

        if(file_exists(public_path('/back/dummy/bhel.png')) && !file_exists(public_path('/back/uploads/products/bhel.png'))){
            File::copy(public_path('/back/dummy/bhel.png'), public_path('/back/uploads/products/bhel.png'));
        }

        if(file_exists(public_path('/back/dummy/sevpuri.png')) && !file_exists(public_path('/back/uploads/products/sevpuri.png'))){
            File::copy(public_path('/back/dummy/sevpuri.png'), public_path('/back/uploads/products/sevpuri.png'));
        }

        if(file_exists(public_path('/back/dummy/french_fries.png')) && !file_exists(public_path('/back/uploads/products/french_fries.png'))){
            File::copy(public_path('/back/dummy/french_fries.png'), public_path('/back/uploads/products/french_fries.png'));
        }

        if(file_exists(public_path('/back/dummy/masala_pau.png')) && !file_exists(public_path('/back/uploads/products/masala_pau.png'))){
            File::copy(public_path('/back/dummy/masala_pau.png'), public_path('/back/uploads/products/masala_pau.png'));
        }

        if(file_exists(public_path('/back/dummy/maggie.png')) && !file_exists(public_path('/back/uploads/products/maggie.png'))){
            File::copy(public_path('/back/dummy/maggie.png'), public_path('/back/uploads/products/maggie.png'));
        }

        if(file_exists(public_path('/back/dummy/pizza.png')) && !file_exists(public_path('/back/uploads/products/pizza.png'))){
            File::copy(public_path('/back/dummy/pizza.png'), public_path('/back/uploads/products/pizza.png'));
        }

        if(file_exists(public_path('/back/dummy/sandwich.png')) && !file_exists(public_path('/back/uploads/products/sandwich.png'))){
            File::copy(public_path('/back/dummy/sandwich.png'), public_path('/back/uploads/products/sandwich.png'));
        }

        if(file_exists(public_path('/back/dummy/slice.png')) && !file_exists(public_path('/back/uploads/products/slice.png'))){
            File::copy(public_path('/back/dummy/slice.png'), public_path('/back/uploads/products/slice.png'));
        }

        if(file_exists(public_path('/back/dummy/maska_bun.png')) && !file_exists(public_path('/back/uploads/products/maska_bun.png'))){
            File::copy(public_path('/back/dummy/maska_bun.png'), public_path('/back/uploads/products/maska_bun.png'));
        }

        if(file_exists(public_path('/back/dummy/milk_shake.png')) && !file_exists(public_path('/back/uploads/products/milk_shake.png'))){
            File::copy(public_path('/back/dummy/milk_shake.png'), public_path('/back/uploads/products/milk_shake.png'));
        }

        if(file_exists(public_path('/back/dummy/cold_coffee.png')) && !file_exists(public_path('/back/uploads/products/cold_coffee.png'))){
            File::copy(public_path('/back/dummy/cold_coffee.png'), public_path('/back/uploads/products/cold_coffee.png'));
        }

        if(file_exists(public_path('/back/dummy/cold_drink.png')) && !file_exists(public_path('/back/uploads/products/cold_drink.png'))){
            File::copy(public_path('/back/dummy/cold_drink.png'), public_path('/back/uploads/products/cold_drink.png'));
        }

        if(file_exists(public_path('/back/dummy/puff.png')) && !file_exists(public_path('/back/uploads/products/puff.png'))){
            File::copy(public_path('/back/dummy/puff.png'), public_path('/back/uploads/products/puff.png'));
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
