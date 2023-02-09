<x-layout>
    <x-slot:title>
        List
        </x-slot>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Created @</th>
                <th>Updated @</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td><a href="/product/{{ $product['id'] }}"> {{ $product['name'] }} </a></td>
                    <td> {{ $product['description'] }} </td>
                    <td>
                        @if( @isset ($product['created_at']))
                            {{ date('Y-m-d H:i:s', strtotime($product['created_at'])) }}
                        @endif
                    </td>
                    <td>
                        @if( @isset ($product['updated_at']))
                            {{ date('Y-m-d H:i:s',strtotime($product['updated_at'])) }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
</x-layout>
