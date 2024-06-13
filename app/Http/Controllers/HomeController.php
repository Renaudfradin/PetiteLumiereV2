<?php

namespace App\Http\Controllers;

/**
 * @OA\Get(
 *     path="/api/",
 *     summary="Home page",
 *     tags={"Home"},
 *
 *     @OA\Response(response="200", description="Success"),
 * )
 */
class HomeController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello API Petite lumiere',
        ], 200);
    }
}
