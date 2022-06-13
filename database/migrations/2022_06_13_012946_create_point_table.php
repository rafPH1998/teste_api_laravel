<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        create table point
        (
            id         int unsigned auto_increment primary key,
            card_id    int unsigned                not null,
            points     int            default 0    null,
            spent      decimal(10, 2) default 0.00 null,
            created_at timestamp                   not null,
            updated_at timestamp                   not null,
            deleted_at timestamp                   null,
            constraint points_card_id_fk
                foreign key (card_id) references card (id)
        );
        */

        Schema::create('point', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('card_id');
            $table->integer('points')->default(0)->nullable();
            $table->decimal('spent', 10, 2)->default(0.00)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->softDeletes();

            $table->foreign('card_id')->references('id')->on('card');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point');
    }
};
