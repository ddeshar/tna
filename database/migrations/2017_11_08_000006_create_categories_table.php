<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'categories';

    /**
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable()->default(null);
            $table->integer('order')->default('1');
            $table->string('name', 191);
            $table->string('slug', 191);

            $table->index(["parent_id"], 'categories_parent_id_foreign');

            $table->unique(["slug"], 'categories_slug_unique');
            $table->nullableTimestamps();


            $table->foreign('parent_id', 'categories_parent_id_foreign')
                ->references('id')->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
