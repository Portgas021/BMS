<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BookModel;

class BookController extends BaseController
{
    public function index(): string
    {
        $bookModel = new BookModel();
        $data['listOfBooks'] = $bookModel->findAll();
        return view('index', $data);
      
    }

    public function store()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $bookModel = new BookModel();
        $bookModel->insert([
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'genre' => $this->request->getPost('genre')
        ]);
        return redirect()->to('/')->with('success', 'Book added successfully.');
    }

    public function add()
    {
        return view('create');
    }

    public function edit($id)
    {
        $bookModel = new BookModel();
        $data['book'] = $bookModel->find($id);
        return view('edit', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $bookModel = new BookModel();
        $bookModel->update($id, [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'genre' => $this->request->getPost('genre')
        ]);
        return redirect()->to('/')->with('success', 'Book updated successfully.');
    }

    public function delete($id)
    {
        $bookModel = new BookModel();
        $bookModel->delete($id);
        return redirect()->to('/')->with('success', 'Book deleted successfully.');
    }
}
