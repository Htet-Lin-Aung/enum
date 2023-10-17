<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                            href="{{ route('products.index') }}">{{ __('Back Product List') }}</a>
                    </div>  
                    <table>
                        <tr>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>

                        <tr>
                            <th scope="col" class="px-6 py-3">Body</th>
                            <td>{{ $product->body }}</td>
                        </tr>

                        <tr>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <td>{{ $product->status->name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>