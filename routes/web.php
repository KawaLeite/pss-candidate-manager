<?php 
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\EditalController;
    use App\Http\Controllers\InscricaoController;
    use App\Http\Controllers\CandidatoController;


    Route::get('/', [EditalController::class, 'index'])->name('index');
    Route::get('/edital', [EditalController::class, 'show'])->name('index.edital');
    Route::get('/inscricao', [InscricaoController::class, 'create'])->name('create');
    Route::post('/inscricao', [InscricaoController::class, 'store'])->name('store');
    Route::get('/candidatos', [CandidatoController::class, 'index'])->name('candidatos.index');
    Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy']) ->name('destroy');
    Route::get('/candidatos/{id}/edit', [CandidatoController::class, 'edit'])->name('edit');
    Route::put('/candidatos/{id}', [CandidatoController::class, 'update']) -> name('update');
  
    



?>




