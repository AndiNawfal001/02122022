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
        DB::unprepared("DROP PROCEDURE IF EXISTS tambah_pengajuan_pb");
        DB::unprepared(
          "CREATE PROCEDURE tambah_pengajuan_pb(
                manajemen VARCHAR(255),
                kaprog VARCHAR(255),
                nama_barang VARCHAR(255), 
                ruangan VARCHAR(255)
            )
            BEGIN

            DECLARE nip_m CHAR(18);
            DECLARE nip_k CHAR(18);
            DECLARE kode_barang INT(11);
            DECLARE spesifikasi VARCHAR(255);

            SELECT manajemen.nip INTO nip_m FROM manajemen WHERE manajemen.nama = manajemen;
            SELECT kaprog.nip INTO nip_k FROM kaprog WHERE kaprog.nama = kaprog;
            SELECT barang_detail.kode_barang INTO kode_barang FROM barang_detail WHERE barang_detail.nama_barang = nama_barang;
            SELECT barang_detail.spesifikasi INTO spesifikasi FROM barang_detail WHERE barang_detail.nama_barang = nama_barang;

            INSERT INTO pengajuan_pb 
            (manajemen, kaprog, kode_barang, nama_barang, spesifikasi, ruangan, tgl)
            VALUES(
                nip_m, nip_k, kode_barang, nama_barang, spesifikasi, ruangan, NOW()
            );

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
        Schema::dropIfExists('procedure_insert_pengajuan_pb');
    }
};
