<?php

use App\Http\Controllers\ConsultasController;
use Illuminate\Support\Facades\Route;

Route::prefix('consultas')->group(function () {
    Route::get('reservas-agencia',       [ConsultasController::class, 'reservasPorAgencia']);
    Route::get('reservas-particulares',  [ConsultasController::class, 'reservasPorParticulares']);
    Route::get('hoteles-con-categoria',  [ConsultasController::class, 'hotelesConCategoria']);
});