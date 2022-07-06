<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_images', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("cars_id");
            $table->string("filename");
            $table->string("orginal_filename");
            $table->string("filetype");
            $table->string("filesize");
            // $table->binary("file");
            $table->boolean("status")->default("1");
            $table->timestamps();
            $table->foreign("cars_id")->references("id")->on("cars")->onDelete("cascade");
            $table->softDeletes();
        });
        DB::statement("ALTER TABLE car_images ADD file LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_images');
    }
};
