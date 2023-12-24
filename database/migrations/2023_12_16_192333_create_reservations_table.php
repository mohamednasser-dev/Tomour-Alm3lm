<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->bigInteger('id_number');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('c_r_num')->comment('رقم السجل التجارى');
            $table->string('address');
            $table->string('city');
            $table->string('government');
            $table->tinyInteger('is_lawsuit')->default(0);
            $table->tinyInteger('is_employee')->default(0);
            $table->text('how_know')->nullable();
            $table->text('how_satisfied');
            $table->tinyInteger('is_rights')->default(0);
            $table->tinyInteger('is_follow')->default(0);
            $table->tinyInteger('is_financial')->default(0);
            $table->string('company_name')->nullable();
            $table->integer('salary')->default(0);
            $table->integer('rewards')->default(0);
            $table->integer('dividends_interest')->default(0);
            $table->integer('real_estate_income')->default(0);
            $table->integer('profits')->default(0);
            $table->integer('other_income')->default(0);
            $table->integer('total')->default(0);
            $table->integer('cash_in_bank')->default(0);
            $table->integer('profits_sharing')->default(0);
            $table->integer('guarantees')->default(0);
            $table->integer('money_papers')->default(0);
            $table->integer('real_estate_value')->default(0);
            $table->integer('other_properties')->default(0);
            $table->integer('total_assets')->default(0)->comment('إجمالي الأصول');
            $table->integer('notes_loans')->default(0)->comment('ملاحظات / قروض مستحقة الدفع للأصدقاء والأقارب');
            $table->integer('accounts_bills_payable')->default(0)->comment('حسابات وفواتير مستحقة الدفع');
            $table->integer('mortgages')->default(0)->comment('الرهون العقارية');
            $table->integer('debt')->default(0)->comment('ديون أو التزامات أخرى');
            $table->integer('total_liabilities')->default(0)->comment('إجمالي الإلتزامات');
            $table->integer('net_worth')->default(0)->comment('القيمة الصافية');
            $table->tinyInteger('have_granted_brand')->default(0)->comment('هل تم منحك حقوق الامتياز لاي علامة تجارية');
            $table->text('granted_brands')->nullable();
            $table->foreignId('city_id')->constrained('cities')->restrictOnDelete();
            $table->enum('status', ['pending', 'accepted', 'rejected', 'canceled', 'finished'])->default('pending');
            $table->text('reject_reasons')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
