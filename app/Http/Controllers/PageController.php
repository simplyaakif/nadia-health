<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Str;

    class PageController extends Controller {

        public function index()
        {

        }

        public function nda()
        {
            $text = File::get('../resources/nda.md');
            $nda = Str::markdown($text);
            return view('nda',compact('nda'));
        }

        public function nda_submit(Request $request)
        {
            $request->validate([
                'by'=>'required',
                'name'=>'required|min:3|max:16',
                'title'=>'required|min:3',
                'accept'=>'required'
                               ]);

            return redirect()->route('landing');
        }


    }
