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
        DB::unprepared("DROP PROCEDURE IF EXISTS update_admin");
        DB::unprepared(
          "CREATE PROCEDURE update_admin(
                id_pengguna INT(11),
                username VARCHAR(50),
                email VARCHAR(50),
                hashing_password VARCHAR(255),
                current_nama VARCHAR(50),
                nama VARCHAR(50),
                kontak VARCHAR(20)
            )
            BEGIN

            DECLARE admin INT(11);

            SELECT admin.id_admin INTO admin FROM admin WHERE admin.nama = current_nama;

            UPDATE pengguna
            SET
                pengguna.username = username,
                pengguna.email = email,
                pengguna.password = hashing_password
            WHERE pengguna.id_pengguna = id_pengguna;

            UPDATE admin
            INNER JOIN pengguna ON admin.id_admin = pengguna.id_pengguna
            SET
                admin.nama = nama,
                admin.kontak = kontak
            WHERE admin.id_admin = admin ;

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
        Schema::dropIfExists('procedure_update_admin');
    }
};
