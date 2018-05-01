<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cricketer extends Model
{
    public $timestamps = false;
	protected $table = 'cricketers';

	public static $rules = ['name'=>'required', 'number_of_sixes'=>'required', 'number_of_matches'=>'required', 'age'=>'required'];

	protected $fillable = array(
        'name', 'number_of_matches',
        'number_of_sixes', 'age');

	//public $messages;

	/*public function isValid($data)
	{
		$validation = Validator::make($data, Cricketer::$rules);

		if ($validation->passes())
		{
			return true;
		}

		$this->messages = $validation->messages();

		return false;
	}*/
}
