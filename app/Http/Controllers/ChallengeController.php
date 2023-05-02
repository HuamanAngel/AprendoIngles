<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getChallengesByLevel($idLevel)
    {
        //
        try{
            $theLevel = Level::where('id',$idLevel)->with(['LevelChallenge'])->first();
            if ($theLevel == null) {
                return response()->json([
                    'res' => false,
                    'message' => 'Id invalido, no coincide con ningun registro',
                ], 404);
            }
            // Check if user register in level
            $theAventure = $theLevel->LevelAventure->load(['AventureUseAve']);            
            $theUserAve = $theAventure->first()->AventureUseAve;
            $registerUseAve = $theUserAve->where('us_id',auth()->user()->id)->first();
            if ($registerUseAve == null) {
                return response()->json([
                    'res' => false,
                    'message' => 'El usuario no tiene registrado el mapa y por tanto el challenge',
                ], 404);
            }

            $theChallenges = $theLevel->LevelChallenge->load(['ChallengeGame']);
            return response()->json([
                'res' => true,
                'message' => $theChallenges,
            ], 200);

        } catch (Exception $e) {
            report($e);
            return response()->json([
                'res' => false,
                'exception' => $e->getMessage(),
                'message' => 'Error al intentar obtener los challenge',
            ],500);            
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
