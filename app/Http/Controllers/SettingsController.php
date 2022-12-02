<?php

namespace App\Http\Controllers;


class SettingsController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }
    
public function social()
    {
       return view("settings.app.social");
    }

public function globals()
    {
       return view("settings.app.global");
    }
    
public function notifications()
    {
       return view("settings.app.notification");
    }

public function cod()
    {
       return view('settings.app.cod');
    }

public function applePay()
    {
       return view('settings.app.applepay');
    }

public function stripe()
    {
       return view('settings.app.stripe');
    }

public function mobileGlobals()
{
	return view('settings.mobile.globals');
}

public function razorpay()
{
  return view('settings.app.razorpay');
}

public function paytm()
{
  return view('settings.app.paytm');
}

public function payfast()
{
  return view('settings.app.payfast');
}

public function paypal()
{
  return view('settings.app.paypal');
}

public function adminCommission()
{
  return view("settings.app.adminCommission");
}

public function radiosConfiguration()
{
  return view("settings.app.radiosConfiguration");
}    

public function wallet()
{
  return view('settings.app.wallet');
}
 
 public function bookTable()
{
  return view('settings.app.bookTable');
}

 public function vatSetting()
{
  return view('settings.app.vat');
}

public function paystack()
{
  return view('settings.app.paystack');
}

public function flutterwave()
{
  return view('settings.app.flutterwave');
}

 public function deliveryCharge()
{
   return view("settings.app.deliveryCharge");
} 

public function languages()
{
    return view('settings.languages.index');
}

public function languagesedit($id)
{
    return view('settings.languages.edit')->with('id',$id);
}

public function languagescreate()
{
    return view('settings.languages.create');
}

}