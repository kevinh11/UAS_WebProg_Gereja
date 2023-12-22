<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayat;

class AyatController extends Controller
{   
    private $verses = [];
    private $curr_verse= [];
    function read() {
        $this->verses = Ayat::all()->toArray();
    }

    function get_verse() {
        return $this->curr_verse;
        
    }

    function set_verse_cookie($verse) {
        setcookie('ayat', $verse['ayat'], time() + 86400);
        setcookie('kitab', $verse['kitab'], time() + 86400);
    }

    function set_daily_verse() {
        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y-m-d');
        

        if (!isset($_COOKIE['ayat'])) {
            $randomVerse = $this->get_random();

            $this->set_verse_cookie($randomVerse);
            $this->curr_verse = $randomVerse; 
        }
        
        else {
            
            if (isset($_COOKIE['prevDate'])) {
                $prev_date = $_COOKIE['prevDate'];
                if ($date != $prev_date) {
                    $randomVerse = $this->get_random();
                    $this->curr_verse = $randomVerse; 
                    $this->set_verse_cookie($randomVerse);
                    setcookie('prevDate', $date, time() + 86400);
                }
                

                $this->curr_verse = ['ayat'=> $_COOKIE['ayat'], 'kitab' => $_COOKIE['kitab']]; 

            } 
        
            else {
                setcookie('prevDate', $date, time() + 86400);
                $this->curr_verse =['ayat'=> $_COOKIE['ayat'], 'kitab' => $_COOKIE['kitab']] ; 
            }
        }
        

    
    }



    function get_random() {
        $this->read();
        
        $randint = random_int(0,count($this->verses)-1);
        $rand_verse = $this->verses[$randint];
        return $rand_verse;
    }


}
