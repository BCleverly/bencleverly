<?php

namespace App\Http\Controllers;

use App\{Http\Requests\WorkStoreRequest, Http\Requests\WorkUpdateRequest, Work};
use Illuminate\Http\Request;

class WorkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'delete', 'edit', 'update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::published()->orderBy('updated_at', 'desc')->paginate(10);
        return view('work.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $work = Work::create($data);

        if ($data['hero']) {
            $work->addMediaFromRequest('hero')->toMediaCollection('hero')->singleFile();
        }

        return response()->redirectToRoute('work.show', $work->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('work.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WorkUpdateRequest $request
     * @param \App\Work $work
     * @return \Illuminate\Http\Response
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\DiskDoesNotExist
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\FileDoesNotExist
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded\FileIsTooBig
     */
    public function update(WorkUpdateRequest $request, Work $work)
    {
        $work->update($request->validated());

        if ($request->validated()['hero']) {
            $work->addMediaFromRequest('hero')->toMediaCollection('hero');
        }

        return response()->redirectToRoute('work.show', $work->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        try {
            $work->delete();
        } catch(\Exception $e) {

        }

        return response()->redirectToRoute('work.index');
    }
}
