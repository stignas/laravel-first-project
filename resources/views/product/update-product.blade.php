<x-layout>
    <x-slot:title>
        Update Product
        </x-slot>
        <div class="form-wrapper">
            <form method="post" action="/product/edit/{{ $product['id'] }}" id="update-form">
                @method('PUT')
                <label for="name">Produkto pavadinimas: </label>
                <input name="name" id="name" value="{{ $product['name'] }}"/>
                <label for="desc">Produkto aprašymas: </label>
                <textarea name="description" id="desc"> {{ $product['description'] }}</textarea>
            </form>

            <form method="post" action="/product/delete/{{ $product['id'] }}" id="delete-form">
                @method('DELETE')
            </form>
        </div>
        <x-slot:buttons>
            <a href="#" id="create-link" onclick="document.getElementById('update-form').submit()" > Update </a>
            <a href="#" id="create-link" onclick="document.getElementById('delete-form').submit()" > Delete </a>
            </x-slot>
        @if (@isset( $message ))
            <div class="message">
                {{ $message }}
            </div>
    @unset($message)
    @endif

</x-layout>
