<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_accounts', function (Blueprint $table) {
            $table->integer('nip');
            $table->integer('nuptk');
            $table->string('nama', 20);
            $table->enum('jk',['Pria','Wanita']);
            $table->integer('noHP');
            $table->char('id_jabatan');
            $table->text('alamat');

            $table->foreign('nip')->references('nip')->on('accounts');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_accounts');
    }
}