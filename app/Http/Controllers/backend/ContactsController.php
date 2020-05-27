<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\contacts\Store;
use App\models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index(){
        $module_name = 'Contact';
        $page_title = 'Control Contatcs';
        $page_desc = 'Here you can [ Add | Edit | Delete ] Contacts';
        $folder_name = 'contacts';


        $rows = Contact::paginate(10);

        return view('backend.contacts.index',[
            'page_title' => $page_title,
            'page_desc' => $page_desc,
            'rows' => $rows,
            'folder_name' => $folder_name,
            'module_name' => $module_name
        ]);
    }

    public function create(){
        $module_name = 'Contact';
        $page_title = 'Create Contact';
        $page_desc = 'Here you can Add a new Contact';
        $folder_name = 'contacts';


        return view('backend.contacts.create',[
            'page_title' => $page_title,
            'page_desc' => $page_desc,
            'folder_name' => $folder_name,
            'module_name' => $module_name
        ]);
    }

    public function store(Store $request){
        Contact::create($request->all());
        return redirect()->route('contacts.index');
    }

    public function edit($id){
        $module_name = 'Contact';
        $page_title = 'Edit Contact';
        $page_desc = 'Here you can Edit Contact';
        $folder_name = 'contacts';

        $row = Contact::findOrFail($id);

        return view('backend.contacts.edit',[
            'page_title' => $page_title,
            'page_desc' => $page_desc,
            'folder_name' => $folder_name,
            'module_name' => $module_name,
            'row' => $row
        ]);
    }

    public function update($id, Store $request){
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
