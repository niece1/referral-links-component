<!-- Layout -->
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Refer something') }}
        </h2>
    </x-slot>
    
    <!-- Referral page -->
    <section class="referral-page">
        <div class="referral-page-wrapper">
            <div class="referral-form">
                <h2>Enter email</h2>
                <!-- Referral form -->
                <form action="{{ route('referrals') }}" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    </div>
                    <button type="submit" class="button">Send</button>
                    @csrf
                </form>
                <!-- /.Referral form -->
            </div>
        </div>
    </section>
<!-- /.Referral page -->
</x-app-layout>
<!-- /.Layout -->
