<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('messages')) {
            Schema::table('messages', function (Blueprint $table) {
                if (! Schema::hasColumn('messages', 'type_service')) {
                    $table->string('type_service')->nullable()->after('telephone');
                }

                if (! Schema::hasColumn('messages', 'is_read')) {
                    $table->boolean('is_read')->default(false)->after('message');
                }
            });

            if (Schema::hasColumn('messages', 'service')) {
                DB::table('messages')
                    ->whereNull('type_service')
                    ->update(['type_service' => DB::raw('service')]);
            }
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('messages')) {
            Schema::table('messages', function (Blueprint $table) {
                if (Schema::hasColumn('messages', 'is_read')) {
                    $table->dropColumn('is_read');
                }
            });
        }
    }
};
