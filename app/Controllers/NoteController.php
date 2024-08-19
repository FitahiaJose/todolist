<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoteModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Validation\Exceptions\ValidationException;

class NoteController extends BaseController
{
    protected NoteModel $noteModel;

    public function __construct() {
        $this->noteModel = model('NoteModel');
    }

    public function index()
    {
        $data = $this->noteModel->findAll();
        return view('notes/index', ['notes' => $data]);
    }

    public function create() {
        return view('notes/create');
    }
    
    public function delete(int $id) {
        if ($this->noteModel->delete($id)) {
            return redirect()->to('notes');
        }
    }

    public function edit(int $id) {
        $data = $this->noteModel->find($id);

        return view('notes/edit', ['note' => $data]);
    }

    public function store() {
        $data = $this->request->getPost();
        
        $rules = [
            'title' => 'required|string',
            'content' => 'required|max_length[255]|string',
        ];

        if($this->validateData($data, $rules)) {
            $data = $this->validator->getValidated();
            $this->noteModel->insert($data);

            return redirect()->to('notes');
        }
        return new ValidationException();
    }

    public function update(int $id) {
        $data = $this->request->getPost();
        if ($this->noteModel->update($id, $data)) {
            return redirect()->to('notes');
        }
    }
}   
