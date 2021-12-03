<!-- Layout -->
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Referral list') }}
        </h2>
    </x-slot>
    
    <!-- Referral list widget -->   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
                                <td>{{ $referral->email }}</td>
                                <td>{{ $referral->created_at->toDateString() }}</td>
                                <td>
                                    @if ($referral->completed)
                                        Yes
                                    @else
                                        No <a href="{{ route('index', ['referral' => $referral->token]) }}" target="_blank">Get a link</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                            <p>There is no referrals</p>
                        @endif
                    </div>
                    <!-- /.Referral list -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.Referral list widget -->

</x-app-layout>
<!-- /.Layout -->
