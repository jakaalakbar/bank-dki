<?php

namespace App\Enums;

enum StatusPembukaanRekening: string
{
    case MENUNGGU = 'Menunggu';
    case DISETUJUI = 'Disetujui';
}
