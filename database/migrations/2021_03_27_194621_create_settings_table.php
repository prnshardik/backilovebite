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
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
        });

        DB::table('settings')->insert(
            array(
                'key' => 'SITE_TITLE',
                'value' => 'I Love Bite',
                'type' => 'general',
                'status' => 'active',
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
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_MAILER',
                'value' => 'MAIL_MAILER',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_HOST',
                'value' => 'MAIL_HOST',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_PORT',
                'value' => 'MAIL_PORT',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_USERNAME',
                'value' => 'MAIL_USERNAME',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_PASSWORD',
                'value' => 'MAIL_PASSWORD',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_ENCRYPTION',
                'value' => 'MAIL_ENCRYPTION',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_FROM_ADDRESS',
                'value' => 'MAIL_FROM_ADDRESS',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAIL_FROM_NAME',
                'value' => 'MAIL_FROM_NAME',
                'type' => 'smtp',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SMS_NAME',
                'value' => 'NAME',
                'type' => 'sms',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'SMS_NUMBER',
                'value' => 'number',
                'type' => 'sms',
                'status' => 'active',
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
                'status' => 'active',
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
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        if(file_exists(public_path('/back/dummy/logo.png')) && !file_exists(public_path('/back/uploads/logo/logo.png')) ){
            File::copy(public_path('/back/dummy/logo.png'), public_path('/back/uploads/logo/logo.png'));
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
