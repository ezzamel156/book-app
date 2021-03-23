<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="my-8 px-4 flex flex-row">
                        <div class="w-3/4 mr-8">
                            <table class="w-full divide-y divide-gray-200 border border-gray-200 mb-4">
                                <thead>
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
                            <div class="block">
                                <span class="font-bold">
                                    grand total : RM {{$grandTotal}}
                                </span>
                            </div>
                        </div>
                        <div class="w-1/4">
                            <form method="POST"action="/book">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">name</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="text" name="name" id="name" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">                                        
                                    </div>
                                    @if($errors->has('name')) 
                                        <span class="text-sm text-red-600"> {{ $errors->first('name') }} </span>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <textarea type="text" name="address" id="address" class="block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>                                
                                    </div>
                                    @if($errors->has('address')) 
                                        <span class="text-sm text-red-600"> {{ $errors->first('address') }} </span>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <label for="qty" class="block text-sm font-medium text-gray-700">quantity</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="qty" id="qty" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >                                   
                                    </div>
                                    @if($errors->has('qty')) 
                                        <span class="text-sm text-red-600"> {{ $errors->first('qty') }} </span>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    <label for="price" class="block text-sm font-medium text-gray-700">price</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input type="number" name="price" id="price" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >                                   
                                    </div>
                                    @if($errors->has('price')) 
                                        <span class="text-sm text-red-600"> {{ $errors->first('price') }} </span>
                                    @endif
                                </div>
                                <div class="text-right mt-4">
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
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
