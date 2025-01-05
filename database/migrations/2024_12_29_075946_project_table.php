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
        Schema::create('projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->date('commencement_date');
            $table->date('completion_date');
            $table->string('project_cost');
            $table->string('consultancy_cost');
            $table->string('share');
            $table->integer('placement');
            $table->boolean('status');
            $table->bigInteger('project_category_id')->unsigned()->foreign('project_category_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->bigInteger('project_client_id')->unsigned()->foreign('project_client_id')->references('id')->on('project_client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};