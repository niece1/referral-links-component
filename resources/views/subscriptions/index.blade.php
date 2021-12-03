<!-- Layout -->
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>
    
    <!-- Subscriptions form widget -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('subscriptions') }}" method="POST">
                        <button type="submit" class="button">Buy it</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Subscriptions form widget -->

</x-app-layout>
<!-- /.Layout -->
