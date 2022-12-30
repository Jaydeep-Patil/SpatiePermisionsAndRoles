<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
<x-admin-layout>
   <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <!-- add role -->
                <div class="flex p-2">
                    <a href="{{ route('admin.roles.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 hover:text-white rounded-md"> Role Index</a>
                </div>
                
                <!-- "h-screen flex flex-col 
                    items-center justify-center" -->
                <div class="block p-6 rounded-lg shadow-lg bg-white w-full flex flex-col justify-center ">
                    <form method="POST" action="{{ route('admin.roles.store') }}" >
                        @csrf
                        <div class="form-group mb-6" >
                            <label for="name" class="block text-sm font-medium text-gray-700 pb-2">Role Name</label>
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="role_name" name="name" placeholder="Role Name">
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                       
                        <div class="form-group mb-6">
                            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 hover:text-white rounded-md" >Add Role</button>
                        </div>
                    </form>
                </div>
                <!--  -->

            </div>
        </div>
    </div>
</x-admin-layout>
