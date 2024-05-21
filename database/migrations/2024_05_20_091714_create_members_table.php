<?php

use App\Models\Church;
use App\Models\CivilState;
use App\Models\MemberFunction;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('civility', ['M', 'F'])->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->dateTime('subscription_date')->nullable();
            $table->foreignIdFor(Church::class)->constrained();
            $table->foreignIdFor(CivilState::class)->constrained();
            $table->foreignIdFor(MemberFunction::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
