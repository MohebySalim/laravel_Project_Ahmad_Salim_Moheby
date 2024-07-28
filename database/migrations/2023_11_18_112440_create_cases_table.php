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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("case_id")->nullable();
            $table->unsignedBigInteger("zone_id");
            $table->unsignedBigInteger("province_id");
            $table->unsignedBigInteger("district_id");
            $table->string("name_dr");
            $table->string("name_ps");
            $table->string("name_en");
            $table->string("phone");
            $table->string("email");
            $table->string("date");
            $table->text("description")->nullable();
            $table->boolean("status")->default(0);
            $table->string("case_file")->nullable();

            $table->index("zone_id");
            $table->index("province_id");
            $table->index("district_id");

            $table->timestamps();

            $table->foreign('case_id')->references('id')->on('cases')->onDelete('cascade');
            $table->foreign('zone_id')->references('id')->on('zones')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
