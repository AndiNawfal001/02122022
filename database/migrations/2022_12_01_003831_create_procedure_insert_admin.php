<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS tambah_admin");
        DB::unprepared(
          "CREATE PROCEDURE tambah_admin(
                username VARCHAR(50),
                email VARCHAR(50),
                hashing_password VARCHAR(255),
                nama VARCHAR(50),
                kontak VARCHAR(20)
            )
            BEGIN

            DECLARE id_pengguna INT(11);

            INSERT INTO pengguna
            (id_level, username, email, password)
            VALUES ('B001', username, email, hashing_password);

            SELECT pengguna.id_pengguna INTO id_pengguna FROM pengguna WHERE pengguna.username = username;

            INSERT INTO admin
            (id_pengguna, nama, kontak)
            VALUES (id_pengguna, nama, kontak);

          END;"
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedure_insert_admin');
    }
};
