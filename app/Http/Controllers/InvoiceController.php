<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceFormRequest;
use App\Models\Invoice;
use App\Models\Tag;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();
        $successMessage = session('message.success');

        return view('invoices.index')
                ->with('invoices', $invoices)
                ->with('successMessage', $successMessage);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        
        return view('invoices.create')
                ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceFormRequest $request)
    {
        $invoice = Invoice::create($request->all());

        $invoice->tags()->attach($request->tags);

        return to_route('invoices.index')
                ->with('message.success', 'Gasto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        $tags = Tag::all();
        $invoiceTagsIds = $invoice->tagsIds()->toArray();

        return view('invoices.edit')
                ->with('invoice', $invoice)
                ->with('tags', $tags)
                ->with('invoiceTagsIds', $invoiceTagsIds); #query feita aqui pra ser feita só 1 vez
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvoiceFormRequest $request, Invoice $invoice)
    {
        $invoice->fill($request->all());
        $invoice->save();

        $invoice->tags()->sync($request->tags);

        return to_route('invoices.index')
                ->with('message.success', 'Gasto alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
