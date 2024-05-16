<?php
// database/migrations/2023_02_20_000000_create_search_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSearchTable extends Migration
{
    public function up()
    {
        Schema::create('search', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('search');
    }
}
