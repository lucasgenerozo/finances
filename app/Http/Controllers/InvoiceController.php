<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceFormRequest;
use App\Models\Invoice;
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
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceFormRequest $request)
    {
        Invoice::create($request->all());

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
    public function edit(Request $invoice)
    {
        return view('invoices.edit')
                ->with('invoice', $invoice);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvoiceFormRequest $request, Invoice $invoice)
    {
        $invoice->fill($request->all());
        $invoice->save();

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
