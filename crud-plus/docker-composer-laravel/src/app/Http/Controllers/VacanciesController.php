<?php

namespace App\Http\Controllers;

use App\Vacancies;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobs = DB::table('vacancies')->paginate(5);
        // $jobs->withPath('custom/url');
        // dd($request->per_page);
        return view('vacancies.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_company' => 'required|max:100',
            'address' => 'required',
            'office' => 'required',
            'linkedin' => 'required|url',
        ]);

        Vacancies::create($validatedData);

        return redirect(route('vacancies.index'))->with('success', 'Vacancy is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancies $vacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function edit($vacancyId)
    {
        $vacancy = Vacancies::findOrFail($vacancyId);
        return view('vacancies.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vacancyId)
    {

        // dd($vacancyId);

        $validatedData = $request->validate([
            'name_company' => 'required|max:100',
            'address' => 'required',
            'office' => 'required',
            'linkedin' => 'required|url',
        ]);

        Vacancies::whereId($vacancyId)->update($validatedData);

        return redirect(route('vacancies.index'))->with('sucess', 'Vacancy is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy($vacancyId)
    {
        $jobs = Vacancies::findOrFail($vacancyId);
        $jobs->delete();

        return redirect(route('vacancies.index'))->with('sucess', 'Vacancy is successfully deleted');
    }
}



