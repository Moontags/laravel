<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::dropIfExists('tags');


        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        Schema::dropIfExists('job_tag');


        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')
                ->constrained('job_listings')
                ->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tag::class)
                ->constrained('tags')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down(): void
    {

        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('tags');
    }
};
