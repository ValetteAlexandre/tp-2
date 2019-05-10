<?php
namespace controllers;
use Ubiquity\utils\http\USession;

/**
 * Controller Messages
 **/
class RandomNumberGame extends ControllerBase{
    
    public function index(){
        
    }
    
    public function genere(){
        $number=\mt_rand(0,10);
        USession::set(self::SESSION_KEY, $number);
        $this->index();
    }

	public function propose(){
		
		$this->loadView('RandomNumberGame/propose.html');

	}

}
