<?php

namespace Isa\Http\Controllers;

class HomeController extends Controller {

	public function index(){
		return view('home');
	}

	public function getAbout(){
		return view('pages.about');
	}

	public function getLesotho(){
		return view('pages.lesotho');
	}

	public function getAikido(){
		return view('pages.aikido');
	}
	public function getEnterprise(){
		return view('pages.enterprise');
	}
public function getPeople(){
		return view('pages.people');
	}
	public function getContactus(){
		return view('pages.contactus');
	}
	public function getDonate(){
		return view('pages.donate');
	}

}