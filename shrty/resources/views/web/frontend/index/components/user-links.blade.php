{{-- @if($links) --}}
<section class="space-y-4">
    <div class="relative w-full">
        <div class="absolute inset-0 flex items-center w-full" aria-hidden="true">
            <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center">
            <span class="px-3 bg-gray-100 text-gray-400 text-sm mb-1">
                Your links
            </span>
        </div>
    </div>

    <div class="h-72">
        <div class="bg-white shadow overflow-hidden rounded text-sm">
            <ul class="divide-y divide-gray-200">
                @foreach($links as $link)
                <li class="link-list">
                    <a class="block hover:bg-gray-50">
                        <div class="flex items-center justify-between p-4 space-x-10">
                            <div class="truncate">{{$link['destination']}}</div>
                            <div class="flex-none flex items-center space-x-2">
                                <span class="text-indigo-600">
                                    {{config('app.url')}}/{{$link['slug']}}
                                </span>
                                <button class="inline text-xs bg-indigo-600 text-white p-1 rounded">copy</button>
                                <svg class="hidden h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                                <svg class="hidden h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg class="hidden h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <svg class="h-4 w-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</section>
{{-- @endif --}}
