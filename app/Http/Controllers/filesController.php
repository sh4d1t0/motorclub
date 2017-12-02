<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefilesRequest;
use App\Http\Requests\UpdatefilesRequest;
use App\Repositories\filesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class filesController extends AppBaseController
{
    /** @var  filesRepository */
    private $filesRepository;

    public function __construct(filesRepository $filesRepo)
    {
        $this->filesRepository = $filesRepo;
    }

    /**
     * Display a listing of the files.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->filesRepository->pushCriteria(new RequestCriteria($request));
        $files = $this->filesRepository->all();

        return view('files.index')
            ->with('files', $files);
    }

    /**
     * Show the form for creating a new files.
     *
     * @return Response
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created files in storage.
     *
     * @param CreatefilesRequest $request
     *
     * @return Response
     */
    public function store(CreatefilesRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('filename')) {
            $input['filename'] = $request->file('filename')->store('documents', 'public');
        }

        $files = $this->filesRepository->create($input);

        Flash::success('Archivo guardado.');

        return redirect(route('files.index'));
    }

    /**
     * Display the specified files.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $files = $this->filesRepository->findWithoutFail($id);

        if (empty($files)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        return view('files.show')->with('files', $files);
    }

    /**
     * Show the form for editing the specified files.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $files = $this->filesRepository->findWithoutFail($id);

        if (empty($files)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        return view('files.edit')->with('files', $files);
    }

    /**
     * Update the specified files in storage.
     *
     * @param  int              $id
     * @param UpdatefilesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefilesRequest $request)
    {
        $files = $this->filesRepository->findWithoutFail($id);

        if (empty($files)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        $files = $this->filesRepository->update($request->all(), $id);

        Flash::success('Archivo actualizado.');

        return redirect(route('files.index'));
    }

    /**
     * Remove the specified files from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $files = $this->filesRepository->findWithoutFail($id);

        if (empty($files)) {
            Flash::error('Archivo no encontrado');

            return redirect(route('files.index'));
        }

        $this->filesRepository->delete($id);

        Flash::success('Archivo eliminado.');

        return redirect(route('files.index'));
    }
}
