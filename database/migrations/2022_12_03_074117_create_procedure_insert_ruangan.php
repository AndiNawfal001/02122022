<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS tambah_ruangan");
        DB::unprepared(
          "CREATE PROCEDURE tambah_ruangan(
                nama_ruangan VARCHAR(50),
                penanggung_jawab VARCHAR(50),
                ket TEXT
            )
            BEGIN
            DECLARE kode_lama CHAR(6);
            DECLARE kode_baru CHAR(6);
            DECLARE ambil_angka INT;
            DECLARE angka_baru CHAR(3);

            SELECT MAX(id_ruangan) INTO kode_lama FROM ruangan;

            SET ambil_angka = SUBSTR(kode_lama, 4, 3) + 1;
            SET angka_baru = LPAD(ambil_angka,3, 0);
            SET kode_lama = SUBSTR(kode_lama, 1, 3);
            SET kode_baru = CONCAT(kode_lama, angka_baru);

            INSERT INTO ruangan
            (id_ruangan, nama_ruangan, penanggung_jawab, ket)
            VALUES(kode_baru, nama_ruangan, penanggung_jawab, ket);

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
        Schema::dropIfExists('procedure_insert_ruangan');
    }
};
