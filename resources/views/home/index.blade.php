<?php $title = 'Início' ?>

<x-layout title="{{ $title }}">
    
    <x-header title="{{ $title }}" />

    <a href="{{ route('invoices.index') }}" class="btn btn-secondary m-1">Gastos</a>
    <a href="{{ route('tags.index') }}" class="btn btn-secondary m-1">Classificações</a>
</x-layout>
