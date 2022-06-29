<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWord;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::paginate(12);

        return view('words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWord $request)
    {
        Word::create([
            'word_en' => $request->word_en,
            'word_ja' => $request->word_ja,
            'part_of_speech' => $request->part_of_speech,
            'memory' => $request->memory,
            'memo' => $request->memo,
        ]);

        return redirect()
        ->route('words.index')
        ->with(['message' => '単語の登録をしました。',
        'status' => 'info']);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = Word::findOrFail($id);

        return view('words.edit', compact('word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWord $request, $id)
    {
        $word = Word::findOrFail($id);
        $word->word_en = $request->word_en;
        $word->word_ja = $request->word_ja;
        $word->part_of_speech = $request->part_of_speech;
        $word->memory = $request->memory;
        $word->memo = $request->memo;
        $word->save();

        return redirect()
        ->route('words.index')
        ->with(['message' => '単語の編集をしました。',
        'status' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Word::findOrFail($id)->delete();

        return redirect()->route('words.index')
        ->with(['message' => '単語を削除しました。',
        'status' => 'alert']);
    }
}
