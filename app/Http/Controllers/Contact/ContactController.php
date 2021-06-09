<?php

namespace App\Http\Controllers\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  public function view()
  {
    $model = 'contact';
    $datas = Contact::get();
    return view('layouts.contact.view', compact('model', 'datas'));
  }

  public function add()
  {
    $contacts = Contact::orderBy('name', 'asc')->get();
    return view('layouts.contact.add', compact('contacts'));
  }

  public function store(Request $request)
  {
    $product = new Contact();
    $product->name = $request['name'];
    $product->slug = time() . $request['slug'];
    $product->price = $request['price'];
    $product->save();
    return redirect('admin/view/contact')
      ->withSuccess('Contact Add Successfully');
  }
  public function edit($slug)
  {
    $data = Contact::Where('slug', $slug)->firstOrFail();

    return view('layouts.contact.edit', compact('data'));
  }
  public function update(Request $request, $slug)
  {
    $product = Contact::where('slug', $slug)
      ->firstOrFail();
    $product->name = $request['name'];
    $product->price = $request['price'];
    $product->update();
    return back()->withSuccess('Contact Updated Successfully');;
  }
}
