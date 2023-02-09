<x-layout>
    <x-slot:title>
        Create Product
        </x-slot>
        <div class="form-wrapper">
            <form method="post" action="/product/create" id="create-form">
                <label for="name">Produkto pavadinimas: </label>
                <input name="name" id="name" placeholder="Enter product name"/>
                <label for="desc">Produkto aprašymas: </label>
                <textarea name="description" id="desc"></textarea>
{{--                        <input type="submit" value="Create"/>--}}
            </form>
            <x-slot:buttons>
                <a href="#" id="create-link" onclick="document.getElementById('create-form').submit()" > Create </a>
            </x-slot>
        </div>
        @if (@isset( $message ))
            <div class="message">
                {{ $message }}
            </div>
    @unset($message)
    @endif
</x-layout>
