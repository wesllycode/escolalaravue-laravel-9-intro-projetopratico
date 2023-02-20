@extends('layouts.default')

@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Produtos</h1>
                <a class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
            </div>
            <table class="table-auto w-full text-left whitespace-no-wrap">
                <thead class="bg-gray-300">
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm">#</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm" style="width: 150px">Imagem</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm">Valor</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm">Estoque</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm text-right">Ações</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($products as $product)
                <tr @if($loop->even) class="bg-gray-300" @endif>
                    <td class="px-4 py-3">{{$product->id}}</td>
                    <td class="px-4 py-3">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{$product->cover}}">
                    </td>
                    <td class="px-4 py-3">{{$product->name}}</td>
                    <td class="px-4 py-3">{{ $product->price }}</td>
                    <td class="px-4 py-3">{{$product->stock}}</td>
                    <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Deletar</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <nav class="mx-auto flex justify-center">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Avançar</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
@endsection()
