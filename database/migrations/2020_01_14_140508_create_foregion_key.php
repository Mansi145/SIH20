<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForegionKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tnc_user', function (Blueprint $table) {
            $table->foreign('tnc_id')->references('id')->on('tnc')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tnc_user', function (Blueprint $table) {
            $table->dropForeign('tnc_tnc_id_foreign');
            $table->dropIndex('tnc_tnc_id_foreign');
            $table->dropForeign('tnc_user_id_foreign');
            $table->dropIndex('tnc_user_id_foreign');
        });
    }
}
