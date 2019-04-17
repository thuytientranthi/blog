<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert( array(
            [
                'id' => 1,
                'fullname' => 'Trần Thị Thủy Tiên',
                'email' => 'tt.thuytien@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'id' => 2,
                'fullname' => 'Supper Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456')
            ],
            [
                'id' => 3,
                'fullname' => 'Nguyễn Văn A',
                'email' => 'nguyen_a@gmail.com',
                'password' => bcrypt('123456')
            ],
        ));
        \DB::statement('ALTER TABLE users AUTO_INCREMENT = 4;');
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
