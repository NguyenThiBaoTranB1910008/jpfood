<?php

namespace App\Controllers\auth;
    
    use App\Models\cart;
    session_start();
    
    class BillController{

        public function showBill(){
            view('bill');
        }

    }