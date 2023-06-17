<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case PERUSAHAAN = 'perusahaan';
    case PELAMAR = 'pelamar';
    case VISITOR = 'visitor';
}
