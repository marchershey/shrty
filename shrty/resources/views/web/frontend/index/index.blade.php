<div class="bg-gray-900 py-10">
    <div class="text-center">
        <h1 class="text-white text-4xl font-bold">Let me shorten that for you...</h1>
    </div>
</div>

<div class="hidden min-h-screen flex flex-col items-center justify-center p-8">
    <div class="max-w-xl w-full space-y-10">

        <section class="flex flex-col space-y-4">
            <div class="text-lg md:text-4xl font-semibold">Let me shorten that for you...</div>
            <form wire:submit.prevent="createLink">
                <div class="flex space-x-2">
                    <div class="w-full">
                        <input wire:click="clearErrors" wire:model.lazy="url" wire:target="createLink" wire:loading.class="bg-gray-100" wire:loading.class.remove="bg-white" wire:loading.attr="disabled" type="text" name="email" id="email" class="block w-full border-gray-300 placeholder-gray-300 rounded focus:outline-none focus:ring-0" placeholder="Paste your link here...">
                    </div>
                    <div class="flex items-center justify-center">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="w-1/4 flex">
                        <button wire:click="createLink" wire:target="createLink" wire:loading.class="bg-gray-300" wire:loading.class.remove="bg-indigo-600" wire:loading.attr="disabled" type="button" class="w-full bg-indigo-600 text-white font-semibold px-4 rounded focus:outline-none">
                            <span wire:loading.remove wire:target="createLink">Shorten</span>
                            <svg wire:loading wire:target="createLink" class="animate-spin h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </form>

            <div class="text-center text-gray-400 text-xs">By shortening a link, you agree to our <a href="#" class="text-indigo-500">Terms of Service</a> & our <a href="#" class="text-indigo-500">Cookie Policy</a></div>

            @if($errors->all())
            <div class="bg-red-500 text-white text-center rounded p-2">
                {{$errors->first()}}
            </div>
            @endif

        </section>


        @livewire('frontend.index.components.user-links')


    </div>
</div>
