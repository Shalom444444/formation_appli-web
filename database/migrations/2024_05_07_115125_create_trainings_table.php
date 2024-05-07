<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('trainings')) {
            Schema::create('trainings', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('category');
                $table->text('description')->nullable();
                $table->decimal('price', 8, 2);
                $table->date('start_date');
                $table->date('end_date');
                $table->timestamps();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
