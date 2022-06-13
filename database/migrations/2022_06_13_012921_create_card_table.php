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
        create table card
        (
            id         int unsigned auto_increment primary key,
            company_id int unsigned not null,
            client_id  int unsigned not null,
            created_at timestamp    not null,
            constraint client_company_client_id_fk
                foreign key (client_id) references client (id),
            constraint client_company_company_id_fk
                foreign key (company_id) references company (id)
        );
        */

        Schema::create('card', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('client_id');
            //$table->timestamp('created_at');
            $table->foreign('company_id')->references('id')->on('company');
            $table->foreign('client_id')->references('id')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card');
    }
};
