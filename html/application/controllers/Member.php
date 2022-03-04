<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function index() {
		echo "회원 프로그램";
	}


    public function input() {
        echo "회원 가입";
    }

    public function login() {
        echo "로그인";
    }

    public function update() {
        echo "회원정보수정";
    }
}
