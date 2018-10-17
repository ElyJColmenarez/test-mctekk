<?php

namespace App\Http\Controllers;

use App\Models\SeriesTree;
use Illuminate\Http\Request;

class SeriesTreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = SeriesTree::all();
        return view('seriestree.index')->with(['series'=> $this->seriesTree($series)]);
    }

    public function seriesTree($series,$id = null)
    {
        $string = "<ul>";
        foreach ($series as $serie)
        {
            if($serie->parent_id === $id)
            {
                $string .= "<li>".$serie->series_name."</li>";
                $string .= $this->seriesTree($series,$serie->id,$string);
            }
        }
        $string .="</ul>";

        return $string;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\SeriesTree  $seriesTree
     * @return \Illuminate\Http\Response
     */
    public function show(SeriesTree $seriesTree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeriesTree  $seriesTree
     * @return \Illuminate\Http\Response
     */
    public function edit(SeriesTree $seriesTree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SeriesTree  $seriesTree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeriesTree $seriesTree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeriesTree  $seriesTree
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeriesTree $seriesTree)
    {
        //
    }
}
