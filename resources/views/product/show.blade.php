<?php
/**
 * @var \App\Models\Product $item
 */
?>
@section('title', $item->meta_title ?? $item->title)
@section('description', $item->meta_description)
@section('keywords', $item->meta_keyword)
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Новости') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="item">
                        <h1 class="item__title"><?= $item->title ?></h1>
                        <div class="item__footer">
                            <div class="created_at">Дата создания: {{ date("d.m.Y h:i", strtotime($item->created_at)) }}</div>
                            <div class="updated_at">Дата обновления: {{ date("d.m.Y h:i", strtotime($item->updated_at)) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
