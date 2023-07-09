<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font relative">
                        <form method="POST" action="">
                          @csrf
                            <div class="container px-5 mx-auto">
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                                <input type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                                <input type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                                <label for="r_male" class="leading-7 text-sm text-gray-600">男性 <input type="radio" id="r_male" name="gender" value='0'></label>
                                                <label for="r_female" class="leading-7 text-sm text-gray-600">女性 <input type="radio" id="r_female" name="gender" value='1'></label>
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                          <div class="relative">
                                              <label for="age" class="leading-7 text-sm text-gray-600">年齢</label><br>
                                              <select name="age">
                                                <option value="">選択してください</option>
                                                <option value="20歳未満">20歳未満</option>
                                                <option value="20-29歳">20-29歳</option>
                                                <option value="30-39歳">30-39歳</option>
                                                <option value="40-49歳">40-49歳</option>
                                                <option value="50-59歳">50-59歳</option>
                                                <option value="60-69歳">60-69歳</option>
                                                <option value="70-79歳">70-79歳</option>
                                                <option value="80歳以上">80歳以上</option>
                                                </select>
                                          </div>
                                      </div>
                                        <div class="p-2 w-full">
                                            <div class="relative">
                                                <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ</label>
                                                <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                            </div>
                                        </div>
                                        <div class="p-2 w-full">
                                          <div class="relative">
                                            <label for="caution">
                                              <input type="checkbox" id="caution" name="caution"> 注意事項に同意する
                                            </label>
                                          </div>
                                      </div>
                                        <div class="p-2 w-full">
                                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録する</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>