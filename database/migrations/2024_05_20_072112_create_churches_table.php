<?php

use App\Enums\ChurchStatusEnum;
use App\Models\Church;
use App\Models\User;
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
        Schema::create('churches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbreviation')->nullable();
            $table->string('logo')->nullable();
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED', 'SUSPENDED'])->default('PENDING');
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
        });

        Church::create([
            'name'=>'MY CHURCH',
            'status'=>ChurchStatusEnum::PENDING,
            'user_id'=>1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('churches');
    }
};
