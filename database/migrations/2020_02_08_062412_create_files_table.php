<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100)->unique('UK_File_Name')->index('UX_File_Name');
            $table->string('title',100)->unique('UK_File_Title');
            $table->string('alt',100)->nullable()->default(null);
            $table->string('caption',50)->nullable()->default(null);
            $table->string('mime',50);
            $table->string('size',50);
            $table->string('dimension',100);
            $table->enum('storage', ['local', 's3'])->default('s3');
            $table->unsignedInteger('attached')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('last_modified_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
