<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PointController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Company
Route::controller(CompanyController::class)->prefix('companies')->group(function () {
    // Listar todas as empresas
    Route::get('/', 'index');

    // Cadastrar uma empresa
    Route::post('/', 'store');

    Route::prefix('/{id}')->group(function () {
        // Buscar uma empresa específica
        Route::get('/', 'show');

        Route::controller(ClientController::class)->prefix('clients')->group(function () {
            // Listar todos os clientes de uma empresa específica
            Route::get('/', 'index');

            // Cadastrar um cliente em uma empresa específica
            Route::post('/', 'store');

            Route::prefix('/{clientId}')->group(function () {
                // Buscar um cliente específico de uma empresa
                Route::get('/', 'show');

                // Lançar pontos para um cliente em uma empresa
                Route::post('points', [PointController::class, 'store']);
            });
        });
    });
});
