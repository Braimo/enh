<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getIndex() {

    	return view('login');
		}



	 public function getFicheiros() {

    	return view('ficheiro.ficheiros');
		}


	 public function getTeste() {

    	return view('teste');
		}


	public function getCreate() {

    	return view('ficheiro.create');
		}


}