<?php

namespace App\Http\Controllers;

use App\Models\Host;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator; 

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('home');
    }
    public function create(){

        return view('host.registration.signup');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createbnb()
    {
        //
        return view('host.registration.su-bnb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebnb(Request $request)
    { /*
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_LName = $request->get('last_name');
        $host->Host_FName = $request->get('first_name');
        $host->Host_MName = $request->get('mid_name');
        $host->Host_ExtName = $request->get('ext_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'bnb';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return redirect()->back()->with('status','Host Added Successfully');
       
        */
        $this->validate($request, [
            'b_name' => 'required|string|min:3|max:255',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|numeric',
            'Tel_Num' => 'required|numeric',
			'Host_Email' => 'required|string|email|max:255|unique:host',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
        ]);
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_LName = $request->get('last_name');
        $host->Host_FName = $request->get('first_name');
        $host->Host_MName = $request->get('mid_name');
        $host->Host_ExtName = $request->get('ext_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('Host_Email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'bnb';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return back()->with('status','BnB Added Successfully');

        /*
        $rules = [
			'b_name' => 'required|string|min:3|max:255',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'mid_name' => 'required|string|min:3|max:255',
            'ext_name' => 'required|string|min:3|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|min:3|max:255',
            'Tel_Num' => 'required',
            'Website' => 'min:3',
			'email' => 'required|string|email|max:255',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('su-bnb')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$host = new Host;
                $host->Host_BName = $data['b_name'];
                $host->Host_LName = $data['last_name'];
                $host->Host_FName = $data['first_name'];
                $host->Host_MName = $data['mid_name'];
                $host->Host_ExtName = $data['ext_name'];
                $host->Host_City_Muni = $data['city_mun'];
                $host->Host_Brgy = $data['Barangay'];
                $host->Host_Street = $data['Street'];
                $host->Host_ZIP = $data['zip'];
                $host->Host_ContactNum = $data['Tel_Num'];
				$host->Host_Direction = $data['direction'];
				$host->Host_Email = $data['email'];
                $host->Host_Password = $data['password'];
                $host->Host_Website = $data['Website'];
                $host->Host_Type = 'bnb';
				$host->save();
				return redirect('su-bnb')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('su-bnb')->with('failed',"operation failed");
			}
		}
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showbnb($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editbnb($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebnb(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroybnb($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createrentalv()
    {
        //
        return view('registration.su-rentalvehicles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storerentalv(Request $request)
    {
        $this->validate($request, [
            'b_name' => 'required|string|min:3|max:255',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'mid_name' => 'string|min:3|max:255',
            'ext_name' => 'string|min:2|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|numeric',
            'Tel_Num' => 'required|numeric',
            'Website' => 'min:3',
			'Host_Email' => 'required|string|email|max:255|unique:host',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
        ]);
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_LName = $request->get('last_name');
        $host->Host_FName = $request->get('first_name');
        $host->Host_MName = $request->get('mid_name');
        $host->Host_ExtName = $request->get('ext_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('Host_Email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'rental vehicle';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return back()->with('status','Rental Vehicle Business Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showrentalv($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editrentalv($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updaterentalv(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyrentalv($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createresort()
    {
        //
        return view('host.registration.su-resort');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeresort(Request $request)
    {
        $this->validate($request, [
            'b_name' => 'required|string|min:3|max:255',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'mid_name' => 'string|min:3|max:255',
            'ext_name' => 'string|min:2|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|numeric',
            'Tel_Num' => 'required|numeric',
            'Website' => 'min:3',
			'Host_Email' => 'required|string|email|max:255|unique:host',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
        ]);
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_LName = $request->get('last_name');
        $host->Host_FName = $request->get('first_name');
        $host->Host_MName = $request->get('mid_name');
        $host->Host_ExtName = $request->get('ext_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('Host_Email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'resort';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return back()->with('status','Resort Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showresort($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editresort($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateresort(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyresort($id)
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createresto()
    {
        //
        return view('host.registration.su-restoncafe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeresto(Request $request)
    {
        $this->validate($request, [
            'b_name' => 'required|string|min:3|max:255',
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'mid_name' => 'string|min:3|max:255',
            'ext_name' => 'string|min:2|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|numeric',
            'Tel_Num' => 'required|numeric',
            'Website' => 'min:3',
			'Host_Email' => 'required|string|email|max:255|unique:host',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
        ]);
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_LName = $request->get('last_name');
        $host->Host_FName = $request->get('first_name');
        $host->Host_MName = $request->get('mid_name');
        $host->Host_ExtName = $request->get('ext_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('Host_Email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'resto';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return back()->with('status','Resto/Cafe Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showresto($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editresto($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateresto(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyresto($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtour()
    {
        //
        return view('host.registration.su-tourspot');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetour(Request $request)
    {
        $this->validate($request, [
            'b_name' => 'required|string|min:3|max:255',
			'city_mun' => 'required|string|min:3|max:255',
            'Barangay' => 'required|string|min:3|max:255',
            'Street' => 'required|string|min:3|max:255',
            'zip' => 'required|numeric',
            'Tel_Num' => 'required|numeric',
            'Website' => 'min:3',
			'Host_Email' => 'required|string|email|max:255|unique:host',
            'password' => 'required|confirmed|min:6',
            'direction' => 'string|min:3',
        ]);
        $host = new Host;
        $host->Host_BName =  $request->get('b_name');
        $host->Host_City_Muni = $request->get('city_mun');
        $host->Host_Brgy =$request->get('Barangay'); 
        $host->Host_Street = $request->get('Street');
        $host->Host_ZIP = $request->get('zip');
        $host->Host_ContactNum = $request->get('Tel_Num');
        $host->Host_Direction = $request->get('direction');
        $host->Host_Email = $request->get('Host_Email');
        $host->Host_Password = $request->get('password');
        $host->Host_Type = 'tourist spot';
        $host->Host_Website = $request->get('Website');
        $host->save();
        return back()->with('status','Tourist Spot Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showtour($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edittour($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetour(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroytour($id)
    {
        //
    }
}
