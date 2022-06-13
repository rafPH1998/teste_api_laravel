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
        create table company
        (
            id           int unsigned not null primary key,
            company_name varchar(200) null,
            document     varchar(14)  null,
            created_at   timestamp    not null,
            updated_at   timestamp    not null,
            deleted_at   timestamp    null,
            constraint estabelecimento_cnpj_uindex
                unique (document),
            constraint estabelecimento_id_uindex
                unique (id)
        );
        */

        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 200)->nullable();
            $table->string('document', 14)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->softDeletes();
            $table->unique('document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
};
