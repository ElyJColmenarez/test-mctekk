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
        $this->Menu($series);
        return view('seriestree.index')->with(['series'=> $series]);
    }

    public function Menu($series)
    {

                if ($series->count() > 0)
                {
                    $serie = $series->shift();
//                dd($serie->series_name);
                    echo    "<li>".$serie['series_name']."</li>";
                    $this->Menu($series);
                }


//            if (!$serie->parent_id)
//            {
//                $seriesArray[$serie->series_name] = null;
//                $id = $serie->id;
//                $name = $serie->series_name;
//                unset($series[$key]);
//            }
//            elseif($serie->parent_id && $serie->parent_id === $id)
//            {
//                $seriesArray[$name][] = array('id' => $serie->id, 'name'=>$serie->series_name);
//                unset($series[$key]);
//            }
//            elseif($serie->parent_id && $serie->parent_id !== $id)
//            {
//                $this->Menu($series,$id,$serie->series_name,$seriesArray);
//            }
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
