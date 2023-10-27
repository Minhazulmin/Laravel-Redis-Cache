<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class WebsiteController extends Controller
{
    public function home(){
        $srartTime = microtime(true);
        $redisCacheCustomers = Redis::get('customers');
        $endTime = microtime(true);

        if(isset($redisCacheCustomers)){
            $executionTime = $endTime -$srartTime;
            $customers = json_decode($redisCacheCustomers, true);
            $redis = 'yes';
            return view('home',compact('customers','executionTime','redis'));
        }else{

            $customers = Customer::get();
            $srartTime = microtime(true);
            Redis::set('customers',json_encode($customers));
            $endTime = microtime(true);
            $executionTime = $endTime -$srartTime;

        return view('home',compact('customers','executionTime'));
        }


    }

    public function feature(){
        return view('feature');
    }

    public function pricing(){
        return view('pricing');
    }

    public function about(){
        return view('about');
    }
}
