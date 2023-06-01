<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\StudentInterface;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\UpdateOrCreateStudentRequest;

/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends Controller
{
    /**
     * @var StudentInterface
     */
    protected $studentRepo;

    /**
     * @param StudentInterface $studentRepo
     */
    public function __construct(StudentInterface $studentRepo)
    {
        $this->studentRepo = $studentRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $students = $this->studentRepo->all();

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UpdateOrCreateStudentRequest $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(UpdateOrCreateStudentRequest $request)
    {
        $this->studentRepo->create($request->all());

        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $student = $this->studentRepo->find($id);

        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $student = $this->studentRepo->find($id);

        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOrCreateStudentRequest $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateOrCreateStudentRequest $request, int $id)
    {
        $this->studentRepo->update($id, $request->all());

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(int $id)
    {
        $this->studentRepo->destroy($id);

        return redirect('student');
    }
}
