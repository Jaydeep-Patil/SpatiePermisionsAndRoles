<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
<x-admin-layout>
   <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <!-- add role -->
                <div class="flex justify-end p-2">
                    <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 hover:text-white rounded-md"> Create Role</a>
                </div>
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($roles as $role)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                        <p class="font-semibold text-black">{{ ucfirst($role->name) }}</p>
                                        <!-- <p class="text-xs text-gray-600">Developer</p> -->
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 border flex">
                                    <a href="{{ route('admin.roles.edit', $role->id) }}" class="mx-2">
                                        <i class="material-icons-outlined text-base" title="Edit {{ ucfirst($role->name) }}" >edit</i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" onsubmit="return confirm('Are you sure to delete {{  ucfirst($role->name) }} Role?')">
                                        @CSRF
                                        @method('delete')
                                        <button type="submit" class="material-icons-round text-base" title="Delete {{ ucfirst($role->name) }}" >
                                            <i class="material-icons-round text-base" title="Delete {{ ucfirst($role->name) }}" >delete_outline</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
