@php
    $investors = \App\Models\Invest::with(['user', 'schema'])
        ->latest()
        ->take(6)
        ->get()
        ->map(function ($investor) use ($currency) {
            // Safely handle date formatting
            $createdAt = $investor->created_at;
            if ($createdAt instanceof \Carbon\Carbon) {
                $formattedDate = $createdAt->format('Y-m-d H:i:s');
            } else {
                $formattedDate = is_string($createdAt) ? $createdAt : 'N/A';
            }

            // Safely calculate interest
            $interest = $investor->interest_type !== 'percentage' 
                ? ($investor->interest ?? 0)
                : (($investor->interest ?? 0) * ($investor->invest_amount ?? 0)) / 100;
            
            // Handle user relationship safely
            $user = $investor->user;
            
            // Get user display name safely
            $userName = $user ? ($user->username ?? __('Unknown User')) : __('Unknown User');
            
            return [
                'user_name' => $userName,
                'created_at' => $formattedDate,
                'is_active' => $user?->status ?? false,
                'return_profit' => number_format(($investor->already_return_profit ?? 0) * $interest, 2, '.', ''),
                'invest_amount' => number_format($investor->invest_amount ?? 0, 2, '.', ''),
                'user_status' => $user?->status ?? null,
            ];
        });
@endphp

<section class="section-style-2 light-yellow-bg coin-right">
    <div class="container">
        {{-- Section Title --}}
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">
                <div class="section-title text-center">
                    <h4 data-aos="fade-down" data-aos-duration="2000">
                        {{ $data['title_small'] ?? __('Recent Investment Activity') }}
                    </h4>
                    <h2 data-aos="fade-down" data-aos-duration="1500">
                        {{ $data['title_big'] ?? __('Latest Investment Updates') }}
                    </h2>
                </div>
            </div>
        </div>

        {{-- Investors List --}}
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="site-card" data-aos="fade-right" data-aos-duration="2000">
                    <div class="site-card-header">
                        <h3 class="title">{{ __('Recent Investors') }}</h3>
                    </div>
                    <div class="site-card-body">
                        <div class="site-transactions">
                            @forelse($investors as $investor)
                                <div class="single">
                                    {{-- Investor Info --}}
                                    <div class="left">
                                        <div class="icon">
                                            <i icon-name="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <div class="title">
                                                {{ $investor['user_name'] }}
                                            </div>
                                            <div class="date">
                                                {{ $investor['created_at'] }}
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Status Badge --}}
                                    <div class="middle">
                                        <div class="status site-badge {{ $investor['is_active'] ? 'badge-success' : 'badge-pending' }}">
                                            {{ $investor['is_active'] ? __('Active') : __('DeActive') }}
                                        </div>
                                    </div>

                                    {{-- Investment Amount --}}
                                    <div class="right">
                                        <div class="amount">
                                            <div class="net in">
                                                +{{ $investor['return_profit'] }} {{ $currency ?? 'USD' }}
                                            </div>
                                            <div class="total">
                                                {{ $investor['invest_amount'] }} {{ $currency ?? 'USD' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-4">
                                    {{ __('No recent investments found') }}
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>