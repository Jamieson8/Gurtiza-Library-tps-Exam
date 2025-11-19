<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        return view('sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'sectionName' => 'required|max:150',
            'yearLevel' => 'required|integer',
    ]);

        Section::create([
            'name' => $request->sectionName,
            'year_level' => $request->yearLevel,
    ]);

        return redirect()->route('sections.index');
}


    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

public function update(Request $request, Section $section)
{
    $request->validate([
        'sectionName' => 'required|max:150',
        'yearLevel' => 'required|integer',
    ]);

    $section->update([
        'name' => $request->sectionName,
        'year_level' => $request->yearLevel,
    ]);

    return redirect()->route('sections.index');
}
    

}
