<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stu_record', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email',100)->unique();
            $table->enum('class',['09TH','10TH','11TH','12TH']);
            $table->integer('age')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('stu_record');
    }
};
