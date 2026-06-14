<?php
namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest; 
use App\Study;


class StudyController extends Controller
{

    private $study;

    public function __construct(study $study)
    {

        $this->study = $study;
    }

    public function index()
    {
        $studys = $this->study->all();

        return view('study.index', ['studys' => $studys]);
    }

    public function create()
{
        return view('study.create');
}

    public function store(TodoRequest $request)
    {
        $inputs = $request->all();

        $this->study->fill($inputs);
        $this->study->save();
        return redirect()->route('study.index');
    }

}