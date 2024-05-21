<?php

use App\Models\Church;
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
        Schema::create('member_functions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Church::class);
            $table->timestamps();
        });

        $functions=[
            ['name'=>'MEMBRE SIMPLE','church_id'=>1],
            ['name'=>'ADMINISTRATIF','church_id'=>1],
            ['name'=>'PASTEUR','church_id'=>1],
            ['name'=>'DIACRE','church_id'=>1]
        ];
        MemberFunction::insert($functions);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_functions');
    }
};
