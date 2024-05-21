<?php

use App\Models\CivilState;
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
        Schema::create('civil_states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $civilStates=[
            ['name'=>'Marié(e)'],
            ['name'=>'Célibataire'],
            ['name'=>'Divorcé(e)'],
            ['name'=>'Veuf(ve)'],
        ];
        CivilState::insert($civilStates);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civil_states');
    }
};
