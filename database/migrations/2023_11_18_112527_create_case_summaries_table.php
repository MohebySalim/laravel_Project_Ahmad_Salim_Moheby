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
        Schema::create('case_summaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("case_id");
            $table->text("pursuit");
            $table->text("summery");
            $table->string("summary_file")->nullable();

            $table->index("case_id");

            $table->timestamps();

            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_summaries');
    }
};
