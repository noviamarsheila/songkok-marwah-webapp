<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_company', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('deskripsi');
            $table->string('nama_brand');
            $table->string('logo');
            $table->string('akta_pendiri')->nullable();
            $table->string('alamat');
            $table->string('workshop');
            $table->string('no_hp');
            $table->string('web');
            $table->string('email');
            $table->text('link_map');
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
        Schema::dropIfExists('about_companies');
    }
}
