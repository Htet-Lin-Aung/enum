<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input type="text" name="name" class="block w-full mt-1 rounded-md" placeholder=""
                                    value="{{old('name')}}" />
                            </label>
                            @error('name')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Body</span>
                                <textarea class="block w-full mt-1 rounded-md" name="body"
                                    rows="3">{{old('body')}}</textarea>
                            </label>
                            @error('body')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="flex flex-col block">
                                <span class=""> Select Status: </span>
                                <select class="block w-full mt-1" name="status">
                                    <option value="pending">Pending</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </label>
                            @error('status')
                            <div class="flex items-center text-sm text-red-600">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>