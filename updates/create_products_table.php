<?php namespace Viamage\RelationsBug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('viamage_relationsbug_products', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('metadata');
            $table->boolean('is_enabled')->default(false);
            $table->integer('category_id')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('viamage_relationsbug_products');
    }
}
