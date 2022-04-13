<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeUpdateContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $repository ;

    public function __construct(Contact $contact)
    {
            $this->repository = $contact;
            // $this->middleware(['can:contacts']);
    }
       public function index()
       {
           $contacts = $this->repository->latest()->paginate();
        return view('admin.contacts.index', compact('contacts'));
       }
       public function create()
       {

        return view('admin.contacts.create');
       }
       public function store(storeUpdateContact $request)
       {

              $data = $request->all();
              $this->repository->create($data);

              return redirect()->route('contacts.index')
              ->withMessage('Contact successful created  ');

       }
       public function show( $id)
       {
            $contact = $this->repository->where('id', $id)->first();
            if(!$contact ) {
                return redirect()->back();
            }

            return view('admin.contacts.show', compact('contact'));

       }
       public function destroy($id)
       {
            $contact = $this->repository->where('id', $id)->first();
            if(!$contact ) {
                return redirect()->back();
            }

            $contact->delete();

            return redirect()->route('contacts.index')
            ->withErrors('Contact successful deleted  ');

       }

       public function search(Request $request)
       {
           $filters = $request->all();
            $contacts = $this->repository->search($request->filter);

            return view('admin.contacts.index', compact(['contacts', 'filters']));

       }
       public function edit($id)
       {
        $contact = $this->repository->where('id', $id)->first();
            if(!$contact ) {
                return redirect()->back();
            }


            return view('admin.contacts.edit', compact('contact'));

       }
       public function update(storeUpdateContact $request, $id)
       {
        $contact = $this->repository->where('id', $id)->first();
            if(!$contact ) {
                return redirect()->back();
            }


                    $contact->update($request->all());

            return redirect()->route('contacts.index')
            ->withMessage('Contact successful updated  ');

       }
}
