<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'banners';

    /**
     * Run the migrations.
     * @table banners
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('banner_id');
            $table->string('banner_name', 45)->nullable();
            $table->string('banner_image', 45)->nullable();
            $table->string('banner_description')->nullable();
            $table->string('banner_class', 45)->nullable();
            $table->enum('banner_status', ['PUBLISHED', 'DRAFT', 'PENDING'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
