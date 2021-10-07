<?php
/**
 * @var \App\Models\Article $items
 */
?>
@section('title','Продукция')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Продукция') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($items as $item)
                        <div class="item">
                            <h1 class="item__title"><?= $item->title ?></h1>
                            <div class="item__description"><?= $item->description ?></div>
                            <div class="item__footer">
                                <x-link :href="route('article.show', $item)" :active="request()->routeIs('news.show', $item)">Подробнее</x-link>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
