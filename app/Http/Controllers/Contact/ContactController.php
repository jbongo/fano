<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Manager;
use App\Models\Commercial;
use App\Models\Deliverer;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.contact_list', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.add_contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contacts'],
            'phone1' => ['required', 'min:10', 'unique:contacts'],
            'phone2' => ['required', 'min:10', 'unique:contacts'],
        ]);
        //dd($request);
        // return response()->json($validate);

        $contact = Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'address' => $request->address,
        ]);
        //dd($contact->id);
        if ($request->post == "manager") {
            $manager = Manager::create([
                'contact_id' => $contact->id,

            ]);
        } elseif ($request->post == "commercial") {
            $commercial = Commercial::create([
                'contact_id' => $contact->id,

            ]);
        } elseif ($request->post == "deliverer") {
            $deliverer = Deliverer::create([
                'contact_id' => $contact->id,

            ]);
        }

        return redirect()->route('contact_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone1' => ['required', 'min:10'],
            'phone2' => ['required', 'min:10'],
        ]);

        // return response()->json($validate);
        $contact = Contact::where('email', $request->email)->first();

        $contact->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'address' => $request->address,
        ]);
        if ($request->post == "manager" && $request->ancien_post == "commercial") {
            //dd( $id);
            $manager = Manager::create([
                'contact_id' => $id,

            ]);

            $ancien_post = Commercial::where('contact_id', $id)->delete();
            return response()->json($ancien_post);

        } elseif ($request->post == "manager" and $request->ancien_post == "deliverer") {
            $manager = Manager::create([
                'contact_id' => $id,

            ]);
            $ancien_post = Deliverer::where('contact_id', $id)->delete();
            return response()->json($ancien_post);

        } elseif ($request->post == "manager" and $request->ancien_post == "manager") {
            return $contact;
        }elseif ($request->post == "commercial" and $request->ancien_post == "manager") {
            //dd($request->ancien_post);
            $commercial = Commercial::create([
                'contact_id' => $id,

            ]);

            $ancien_post = Manager::where('contact_id', $id)->delete();
            return response()->json($ancien_post);

        } elseif ($request->post == "commercial" and $request->ancien_post == "deliverer") {
            $commercial = Commercial::create([
                'contact_id' => $id,

            ]);
            $ancien_post = Deliverer::where('contact_id', $id)->delete();
            return response()->json($ancien_post);
        } elseif ($request->post == "commercial" and $request->ancien_post == "commercial") {
            return $contact;
        }elseif ($request->post == "deliverer" and $request->ancien_post == "manager") {

            $deliverer = Deliverer::create([
                'contact_id' => $id,

            ]);
            $ancien_post = Manager::where('contact_id', $id)->delete();
            return response()->json($ancien_post);
        } elseif ($request->post == "deliverer" and $request->ancien_post == "commercial") {
            $deliverer = Deliverer::create([
                'contact_id' => $id,

            ]);
            $ancien_post = Deliverer::where('contact_id', $id)->delete();
            return response()->json($ancien_post);
        } elseif ($request->post == "deliverer" and $request->ancien_post == "deliverer") {
            return $contact;
        }else{
            return $request->ancien_post;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $contact = Contact::find($id)->delete();
        return $contact;
    }
}
