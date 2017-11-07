<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\TournamentRepository;
use Request;
use Redirect;

class PrototypeController extends Controller
{
    protected $tournament_rp;

    public function __construct(TournamentRepository $tournament_rp){
        $this->tournament_rp = $tournament_rp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {        
        return view('prototype.prototype_2');
    }

    public function show_prototype(){
        $request = Request::all();
        $id = $request['id'];
        return view('prototype.prototype_'.$id);
    }

    public function preview(){
        return view('preview.slide_1');
    }

    public function show_preview(){
        $request = Request::all();
        $id = $request['id'];
        return view('preview.slide_'.$id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        
        $request = Request::all();
        $this->tournament_rp->insertDataTournament($request);

        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}