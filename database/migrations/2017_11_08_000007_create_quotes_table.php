<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'quotes';

    /**
     * Run the migrations.
     * @table quotes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('quotes_id');
            $table->string('quote_detail')->nullable();
            $table->integer('members_id');

            $table->index(["members_id"], 'fk_quotes_board_members1_idx');


            $table->foreign('members_id', 'fk_quotes_board_members1_idx')
                ->references('board_id')->on('board_members')
                ->onDelete('no action')
                ->onUpdate('no action');
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
