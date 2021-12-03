<!-- Layout -->
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>
    
    <!-- Referral form widget -->
    <section class="referral-page">
        <div class="referral-page-wrapper">
            <form action="{{ route('subscriptions') }}" method="POST">
                <button type="submit" class="button">Pay</button>
                    @csrf
            </form>
        </div>
    </section>
<!-- /.Referral form widget -->
</x-app-layout>
<!-- /.Layout -->