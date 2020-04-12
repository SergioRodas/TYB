<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRespuestasIncorrectasToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::table('users', function (Blueprint $table) {
                    $table->integer('respIncorrectas')->nullable()->after('respCorrectas');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn('respIncorrectas');
                });
    }
}
