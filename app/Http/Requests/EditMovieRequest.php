<?php namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditMovieRequest extends Request {
    /**
     * @var Route
     */
    private $route;

    /**
     * @param Route $route
     */

    public function __construct(Route $route){

        $this->route = $route;
    }
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name' => 'required|min:6',
            'description' => 'required|min:10'
		];
	}

}
