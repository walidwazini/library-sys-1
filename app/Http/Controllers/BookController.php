<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private $allBooks = [
        [
            'id' => '1',
            'isbnCode' => 'DFG-6127-OKA',
            'title' => 'Pure Mathematics 1 - Practice Book',
            'category' => ['mathematics','engineering'],
            'available' => true
        ],
        [
            'id' => '2',
            'isbnCode' => 'DFG-6127-OKA',
            'title' => 'Pure Mathematics 1 - Practice Book',
            'category' => ['mathematics','engineering'],
            'available' => false
        ],
        [
            'id' => '3',
            'isbnCode' => 'APQ-8863-X7C',
            'title' => 'Nanofluid Heat Transfer',
            'category' => ['engineering'],
            'available' => true
        ],
    ];

    public function index(Request $req){
        
    }
}