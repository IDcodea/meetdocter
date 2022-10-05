<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
                ->index('fk_role_user_to_role');
            $table->foreignId('type_user_id')->nullable()
                ->index('fk_role_user_to_users');
            $table->string('contact')->nullable();
            $table->longText('adress')->nullable();
            $table->longText('photo')->nullable();
            $table->enum('gender', [1, 2])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
};
