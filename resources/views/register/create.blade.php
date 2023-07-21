<x-layout>
    <section class="p-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form action="/register" class="mt-10" method="POST">
               @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
                    <input type="text" name="name" id="name" class="border border-gray-400 border-1 p-2 w-full" value ="{{old('name')}}" required />
                    @error('name')
                    <p class="text-red-500 text-tx-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-400 border-1 p-2 w-full" value ="{{old('email')}}" required>
                    @error('email')
                    <p class="text-red-500 text-tx-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
                    <input type="text" name="username" id="username" class="border border-gray-400 border-1 p-2 w-full" value ="{{old('username')}}" required >
                    @error('username')
                    <p class="text-red-500 text-tx-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 border-1 p-2 w-full" required>
                    @error('password')
                    <p class="text-red-500 text-tx-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"  class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" >
                        Submit
                    </button>
                </div>
            </form>

        </main>
    </section>
</x-layout>
