<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->enum('type', ['logo', 'general', 'smtp', 'sms', 'payment'])->default('general');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('settings')->insert(
            array(
                'key' => 'SITE_TITLE',
                'value' => 'Love Bite',
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SITE_TITLE_SF',
                'value' => 'LB',
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_MAILER',
                'value' => 'smtp',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_HOST',
                'value' => 'smtp.googlemail.com',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_PORT',
                'value' => '465',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_USERNAME',
                'value' => 'h42dik@gmail.com',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_PASSWORD',
                'value' => 'etkblpbpszvvoern',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_ENCRYPTION',
                'value' => 'ssl',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_FROM_ADDRESS',
                'value' => 'info@ilovebite.com',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_FROM_NAME',
                'value' => 'I Love Bite',
                'type' => 'smtp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SMS_NAME',
                'value' => 'HardIk Patel',
                'type' => 'sms',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SMS_NUMBER',
                'value' => '+91 80000 80272',
                'type' => 'sms',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'PAYMENT_ID',
                'value' => 'PAYMENT_ID',
                'type' => 'payment',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'FEVICON',
                'value' => 'fevicon.png',
                'type' => 'logo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'LOGO',
                'value' => 'logo.png',
                'type' => 'logo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SMALL_LOGO',
                'value' => 'small_logo.png',
                'type' => 'logo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        if(file_exists(public_path('/back/dummy/fevicon.png')) && !file_exists(public_path('/back/uploads/logo/fevicon.png')) ){
            File::copy(public_path('/back/dummy/fevicon.png'), public_path('/back/uploads/logo/fevicon.png'));
        }

        if(file_exists(public_path('/back/dummy/logo.png')) && !file_exists(public_path('/back/uploads/logo/logo.png')) ){
            File::copy(public_path('/back/dummy/logo.png'), public_path('/back/uploads/logo/logo.png'));
        }

        if(file_exists(public_path('/back/dummy/small_logo.png')) && !file_exists(public_path('/back/uploads/logo/small_logo.png')) ){
            File::copy(public_path('/back/dummy/small_logo.png'), public_path('/back/uploads/logo/small_logo.png'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
