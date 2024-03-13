<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<<<<<<< HEAD
<<<<<<< Updated upstream
                    You're logged in!
=======
=======
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
>>>>>>> origin/sec07_others
                    <form method="post" action="{{ route('owner.shops.update', ['shop' => $shop->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="-m-2">
                            <div class="p-2 w-1/2 mx-auto">
<<<<<<< HEAD
                                <!--貼り付け1-->
                                <div class="relative">
                                    <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                    <input type="file" id="image" name="image"
                                        accept="image/png,image/jpeg,image/jpg"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                <!--貼り付2-->
                                <div class="p-2 w-full flex justify-around mt-4">
                                    <button type="button" onclick="location.href='{{ route('owner.shops.index') }}'"
                                        class="mx-auto text-black bg-gray-500 border-1 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                                    <button type="submit"
                                        class=" mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
=======

                                <div class="relative">

                                    <label for="name" class="leading-7 text-sm text-gray-600">店名 ※必須</label>

                                    <input type="text" id="name" name="name" value="{{ $shop->name }}"
                                        required
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                                </div>

                            </div>



                            <div class="p-2 w-1/2 mx-auto">

                                <div class="relative">

                                    <label for="information" class="leading-7 text-sm text-gray-600">店舗情報 ※必須</label>

                                    <textarea id="information" name="information" required rows="10"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        {{ $shop->information }}
                                    </textarea>
                                </div>

                            </div>
                            <div class="p-2 w-1/2 mx-auto">

                                <div class="relative">

                                    <div class="w-32">

                                        <x-thumbnail :filename="$shop->filename" type="shops" />

                                    </div>

                                </div>

                            </div>

                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                    <input type="file" id="image" name="image"
                                        accept="image/png,image/jpg,image/jpeg"
                                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>

                                <div class="p-2 w-1/2 mx-auto">

                                    <div class="relative flex justify-around">

                                        <div><input type="radio" name="is_selling" value="1" class="mr-2"
                                                @if ($shop->is_selling === 1) {checked} @endif>販売中</div>

                                        <div><input type="radio" name="is_selling" value="0" class="mr-2"
                                                @if ($shop->is_selling === 0) {checked} @endif>停止中</div>

                                    </div>

                                </div>
                                <div class="p-2 w-full flex justify-around mt-4">
                                    <button class="mx-auto text-black bg-gray-500 border-1 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded text-lg" type="button"
                                        onclick="location.href='{{ route('owner.shops.index') }}'">戻る</button>
                                    <button type="submit"
                                        class=" mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
>>>>>>> origin/sec07_others
                                </div>
                            </div>

                    </form>
<<<<<<< HEAD
>>>>>>> Stashed changes
=======
>>>>>>> origin/sec07_others
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
