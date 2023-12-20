<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn('city');
            $table->dropColumn('government');
            $table->dropColumn('rewards');
            $table->dropColumn('dividends_interest');
            $table->dropColumn('real_estate_income');
            $table->dropColumn('profits');
            $table->dropColumn('other_income');
            $table->dropColumn('total');
            $table->dropColumn('cash_in_bank');
            $table->dropColumn('profits_sharing');
            $table->dropColumn('guarantees');
            $table->dropColumn('money_papers');
            $table->dropColumn('real_estate_value');
            $table->dropColumn('other_properties');
            $table->dropColumn('total_assets');
            $table->dropColumn('notes_loans');
            $table->dropColumn('accounts_bills_payable');
            $table->dropColumn('mortgages');
            $table->dropColumn('debt');
            $table->dropColumn('total_liabilities');
            $table->dropColumn('net_worth');
            $table->text('income_source');
            $table->text('financial');
            $table->text('projects_owned');
            $table->string('c_r_num')->nullable()->change();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('r_eservations', function (Blueprint $table) {
            //
        });
    }
};
