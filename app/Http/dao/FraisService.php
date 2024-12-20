<?php

namespace App\Http\dao;

use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class FraisService
{
    public function idFrais($idFrais)
    {
        try {
            $idFrais = DB::table('idfrais')
        } catch (Exception $e)
           throw new Exception($e->getMessage())
    }
}
