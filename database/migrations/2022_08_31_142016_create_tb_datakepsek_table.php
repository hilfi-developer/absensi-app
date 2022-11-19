<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDatakepsekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_datakepsek', function (Blueprint $table) {
            $table->id();
            $table->string('nuptk', 16)
                ->nullable();
            $table->string('nama')
                ->nullable();
            $table->integer('jabatan_id')
                ->nullable();
            $table->string('unit_kerja');
            $table->string('no_hp', 13);
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('foto')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_datakepsek');
    }
}
