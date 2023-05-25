<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
class Movies extends Controller
{
    //  public function index(){

        public function index(){
            $movies = Movie::all();
            return  view('layouts.movies.index', compact('movies'));
          }

          public function create(){
            return view('layouts.movies.create');
          }

          public function store(Request $request){
            $movie = new Movie();

            $movie->title = $request->title;
            $movie->author = $request->author;
            $movie->description = $request->description;

            $movie->save();

            return redirect()->route('ind3x');
          }

          public function destroy($id){
            $movie = Movie::find($id);
            $movie->delete();

            return redirect()->route('ind3x');
          }

          public function edit($id){

            $movie = Movie::find($id);

            return view('layouts.movies.edit', compact('movie'));
          }

          public function update(Request $request, $id){
            $movie = Movie::find($id);
            $movie->title = $request->title;
            $movie->author = $request->author;
            $movie->description = $request->description;

            $movie->save();

            return redirect()->route('ind3x');
          }
}
