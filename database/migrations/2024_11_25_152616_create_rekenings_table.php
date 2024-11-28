<?php

use App\Enums\JenisKelamin;
use App\Enums\StatusPembukaanRekening;
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
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', [JenisKelamin::L->value, JenisKelamin::W->value]);
            $table->char('pekerjaan', 4);
            $table->text('alamat');
            $table->decimal('nominal_setor', 14, 2);
            $table->enum('status', [StatusPembukaanRekening::MENUNGGU->value, StatusPembukaanRekening::DISETUJUI->value])->default(StatusPembukaanRekening::DISETUJUI->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekenings');
    }
};
