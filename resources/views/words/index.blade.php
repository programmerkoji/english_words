<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            英単語管理アプリ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-gray-600 body-font">
                        <div class="mb-4">
                            <x-flash-message status="info" />
                        </div>
                        <div class="mb-6">
                            <a href="{{ route('words.create') }}" class="inline-block text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">単語を登録する</a>
                        </div>
                        <div class="container mx-auto">
                            <ul class="flex flex-wrap -m-2">
                                @foreach ($words as $word)
                                    <li class="w-full xl:w-1/3 md:w-1/2 p-2">
                                        <div class="border border-gray-200 p-3 rounded-lg flex items-center justify-between">
                                            <div class="flex items-center gap-4 w-4/5">
                                                @if ($word->memory === 1)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-green-500">
                                                        <img src="{{ asset('images/smile_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @elseif ($word->memory === 2)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-yellow-500">
                                                        <img src="{{ asset('images/usually_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @elseif ($word->memory === 3)
                                                    <div class="w-8 h-8 inline-flex items-center justify-center rounded-full bg-red-500">
                                                        <img src="{{ asset('images/cry_icon.svg') }}" alt="" class="w-5 h-5">
                                                    </div>
                                                @endif
                                                <div class="w-4/5">
                                                    <p class="text-lg text-gray-900 font-medium title-font break-words mb-1">{{ $word->word_en }}</p>
                                                    <a href="#" data-micromodal-trigger="modal-{{ $word->id }}" class="text-xs px-2 py-1 rounded-sm border-solid border-indigo-500 border text-indigo-500">答えを見る</a>
                                                </div>
                                            </div>
                                            <div class="w-1/5">
                                                <div class="text-right">
                                                    <a href="" class="mx-auto text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded text-sm">編集</a>
                                                </div>
                                                <div class="text-right mt-2">
                                                    <a href="" class="mx-auto text-white bg-red-500 border-0 py-1 px-4 focus:outline-none hover:bg-red-600 rounded text-sm">削除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <x-answer-modal :word="$word" />
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
