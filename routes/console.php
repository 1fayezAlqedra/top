<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('Dev', function () {
    $this->comment('Eng:-Fayez Emad-Aldeen Alqedra');
})->purpose('Display a developer name');


