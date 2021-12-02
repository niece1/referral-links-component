<!-- Layout -->
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Refer something') }}
        </h2>
    </x-slot>
    
    <!-- Referral form widget -->
    <section class="referral-page">
        <div class="referral-page-wrapper">
            
            <!-- Referral list -->
            <div class="referral-list">
                <h2>List of referrals</h2>
                @if($referrals->count())
                <table>
                    <tr>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Completed</th>
                    </tr>
                    @foreach($referrals as $referral)
                    <tr>
                        <td>
                            {{ $referral->email }}
                        </td>
                        <td>
                            {{ $referral->created_at->toDateString() }}
                        </td>
                        <td>
                            @if ($referral->completed)
                                Yes
                            @else
                            No <a href="{{ route('index', ['referral' => $referral->token]) }}" target="_blank">Link</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p>No referrals</p>
                @endif
            </div>
            <!-- /.Referral list -->
            
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
<!-- /.Referral form widget -->
</x-app-layout>
<!-- /.Layout -->
