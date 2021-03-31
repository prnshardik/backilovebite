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
            $table->text('value')->nullable();
            $table->enum('type', ['general', 'smtp', 'sms', 'social', 'payment', 'logo'])->default('general');
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
                'key' => 'CONTACT_NUMBER',
                'value' => '+91 96240 40501',
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'CONTACT_EMAIL',
                'value' => 'info@ilovebite.com',
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'CONTACT_ADDRESS',
                'value' => 'G-13, City Plex,<br./>City Center,<br/>Kadi-Thol Road,<br/>Kadi-382715',
                'type' => 'general',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'MAP_LINK',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d458.08540193510476!2d72.33626137795132!3d23.29095764515816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c22a19ad8f8a1%3A0x1c9b19266d4fd0df!2sNew%20Karnavati%20Dabeli%20%26%20VadaPau!5e0!3m2!1sen!2sin!4v1617178976502!5m2!1sen!2sin',
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
                'value' => 'mail.ilovebite.in',
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
                'value' => 'info@ilovebite.in',
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
                'value' => 'lovebIt3!',
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
                'value' => 'info@ilovebite.in',
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
                'value' => 'Love Bite',
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
                'value' => 'Anil Patel',
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
                'value' => '+91 96240 40501',
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
                'key' => 'FACEBOOK',
                'value' => 'www.facebook.com/ilovebite',
                'type' => 'social',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'INSTAGRAM',
                'value' => 'www.instagram.com/ilovebite',
                'type' => 'social',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_by' => 1,
                'updated_by' => 1,
            )
        );

        DB::table('settings')->insert(
            array(
                'key' => 'YOUTUBE',
                'value' => 'www.youtube.com/ilovebite',
                'type' => 'social',
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
