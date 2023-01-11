<div>
    <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"></path>
            </svg>
        </div>
        <input wire:model="search" type="text"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
               placeholder="Search Users">
    </div>

    <ul>

        @foreach($users as $user)
            <li>
                <div class="bg-white shadow-lg rounded-lg md:max-w-2xl mt-4">
                    <div class="flex items-start px-4 py-6">
                        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                             src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                             alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1"> {{ $user->name }} </h2>
                                <small class="text-sm text-gray-700">ID: {{ $user->id }}</small>
                            </div>
                            <p class="text-gray-700">Joined {{ $user->created_at }} </p>
                            <p class="mt-3 text-gray-700 text-sm">
                                {{ $user->email }}
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach

    </ul>

</div>
