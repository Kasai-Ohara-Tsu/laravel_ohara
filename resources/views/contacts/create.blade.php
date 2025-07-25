<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせフォーム
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())     
                    <div class="alert alert-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">         
                        <ul>             
                            @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li>             
                            @endforeach        
                        </ul>     
                    </div> 
                    @endif
                <form action="{{route('contacts.store')}}" method="post">
                    @csrf
                    <section class="text-gray-600 body-font relative ">
                        <div class="container px-5 py-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-4">
                            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">お問い合わせフォーム</h1>
                            </div>

                            <div class="lg:w-1/2 md:w-2/3 mx-auto flex items-center justify-center">
                            <div class="-m-2">


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                                    <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="大原太郎" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                    <input type="text" id="title" name="title" value="{{old('title')}}" placeholder="" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                    <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="example@gmail,com" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="URL" class="leading-7 text-sm text-gray-600">URL</label>
                                    <input type="URL" id="URL" name="URL" value="{{old('URL')}}" placeholder="http://www.example.com" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="gender" class="leading-7 text-sm text-gray-600">性別</label>
                                    <input type="radio" id="gender" name="gender" value="0" {{old('gender' === 0 ? 'checked':'')}} class="mr-1">男性
                                    <input type="radio" id="gender" name="gender" value="1" {{old('gender' === 1 ? 'checked':'')}} class="mr-1">女性
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                    <select name="age" id="age">
                                        <option value="">選択してください</option>
                                        @for ($i = 10;$i<81;$i++)
                                            <option value="{{$i}}">{{$i}}歳</option>
                                        @endfor
                                    </select>
                                </div>
                                </div>


                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                    <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{old('contact')}}</textarea>
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">送信</button>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                <form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
