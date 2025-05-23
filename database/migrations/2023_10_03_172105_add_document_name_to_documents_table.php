<?php

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
        if ( !Schema::hasColumn('documents','other_document_name') ) {
            Schema::table('documents', function (Blueprint $table) {
                $table->string('other_document_name')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if ( Schema::hasColumn('documents','other_document_name') ) {
            Schema::table('documents', function (Blueprint $table) {
                $table->dropColumn('other_document_name');
            });
        }
    }
};
