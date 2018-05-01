<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cricketer;

class CricketersController extends Controller
{

	public function __construct(Cricketer $cricketer)
	{
		$this->cricketer = $cricketer;
	}

    public function index()
	{
		$cricketers = Cricketer::all();
		return view('cricketers.index')->with('cricketers', $cricketers);
	}

	public function show($name)
	{
		$cricketer = Cricketer::where('name', '=', $name)->first();
		return view('cricketers.show')->with('cricketer', $cricketer);
	}

	public function create()
	{
		return view('cricketers.create');
	}

	public function store()
	{
/*		$this->cricketer->fill(Input::all());

		if (! $this->cricketer->isValid($input = Input::all()))
        {
        	return Redirect::back()->withInput()->withErrors($this->cricketer->messages);
        }

        $this->cricketer->create($input);
*/
		
		$cricketer = new Cricketer;

		$cricketer->name = Input::get('name');
		$cricketer->number_of_sixes = Input::get('number_of_sixes');
		$cricketer->number_of_matches = Input::get('number_of_matches');
		$cricketer->age = Input::get('age');

		$cricketer->save();
		
		
		return Redirect::route('cricketers.index');
	}
}
