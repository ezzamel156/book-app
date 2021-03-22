<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="my-8 px-4 flex flex-row">
                        <div class="w-3/4 mr-8">
                            <table class="w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr class="bg-gray-100">
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                    </tr> 
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($books as $book)                       
                                        <tr>
                                            <td class="px-6 py-4">{{$loop->iteration}}</td>
                                            <td class="px-6 py-4">{{$book->name}}</td>
                                            <td class="px-6 py-4">{{$book->address}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <span>
                                grand total : RM {{$grandTotal}}
                            </span>
                        </div>
                        <div class="w-1/4">
                            <form method="POST"action="/book">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">name</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="text" name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" >                                   
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <textarea type="text" name="address" id="address" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"></textarea>                                
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="qty" class="block text-sm font-medium text-gray-700">quantity</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="qty" id="qty" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" >                                   
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" >                                   
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>         
                    </div>           
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
