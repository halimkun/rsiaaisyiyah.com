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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('-');
            $table->text('description');
            $table->enum('education', ['SMA/SMK', 'D3', 'S1', 'S2', 'S3', 'profesi', 'professional', '-'])->default('-');
            $table->text('major');
            $table->enum('type', ['fulltime', 'parttime', 'internship'])->default('fulltime');
            $table->integer('salary_min')->default(0);
            $table->boolean('active')->default(true);
            $table->date('deadline');
            $table->string('apply_url')->default('-');
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
        Schema::dropIfExists('careers');
    }
};
