<x-layout>
    <x-slot:title>
        {{ $product['name'] }}
        </x-slot>
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Created @</th>
                <th>Updated @</th>
            </tr>
            <tr>
                <td> {{ $product['name'] }} </a></td>
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
        </table>
        <x-slot:buttons>
            <a href="/product/edit/{{ $product['id'] }}">Edit product</a>
            </x-slot>
</x-layout>
