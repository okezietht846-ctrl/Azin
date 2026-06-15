<div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">{{ __('Latest Registered User') }}</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="data-table mb-0">
                        <thead>
                        <tr>
                            <th>{{ __('Avatar') }}</th>
                            <th>{{ __('User') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Balance') }}</th>
                            <th>{{ __('Profit') }}</th>
                            <th>{{ __('KYC') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($data['latest_user']))
                            @foreach($data['latest_user'] as $user)
                                <tr>
                                    <td>
                                        @if(!empty($user->avatar))
                                            <img class="avatar avatar-round" src="{{ asset($user->avatar) }}" alt=""
                                                 height="40" width="40">
                                        @else
                                            <span
                                                class="avatar-text">{{ $user->first_name[0] ?? '' }}{{ $user->last_name[0] ?? '' }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="link">
                                            {{ safe($user->username ?? 'N/A') }}
                                        </a>
                                    </td>
                                    <td>
                                        <strong>{{ safe($user->email ?? 'N/A') }}</strong>
                                    </td>
                                    <td>
                                        <strong>{{ $currencySymbol . ($user->balance ?? 0) }}</strong>
                                    </td>
                                    <td>
                                        <strong>{{ $currencySymbol . ($user->total_profit ?? 0) }}</strong>
                                    </td>
                                    <td>
                                        <div class="site-badge {{ $user->kyc ? 'success' : 'pending' }}">
                                            {{ $user->kyc ? __('Verified') : __('Unverified') }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="site-badge {{ $user->status ? 'success' : 'danger' }}">
                                            {{ $user->status ? __('Active') : __('DeActivated') }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="round-icon-btn primary-btn">
                                            <i icon-name="edit-3"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">{{ __('No Data Found') }}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">{{ __('Latest Investment') }}</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="data-table mb-0">
                        <thead>
                        <tr>
                            <th>{{ __('Avatar') }}</th>
                            <th>{{ __('User') }}</th>
                            <th>{{ __('Schema') }}</th>
                            <th>{{ __('ROI') }}</th>
                            <th>{{ __('Profit') }}</th>
                            <th>{{ __('Capital Back') }}</th>
                            <th>{{ __('Timeline') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($data['latest_invest']))
                            @foreach($data['latest_invest'] as $invest)
                                @php
                                    $calculateInterest = ($invest->interest * $invest->invest_amount) / 100;
                                    $interest = $invest->interest_type != 'percentage' ? $invest->interest : $calculateInterest;
                                @endphp
                                <tr>
                                    <td>
                                        @if(!empty($invest->user->avatar))
                                            <img class="avatar" src="{{ asset($invest->user->avatar) }}" alt=""
                                                 height="40" width="40">
                                        @else
                                            <span
                                                class="avatar-text">{{ $invest->user->first_name[0] ?? '' }}{{ $invest->user->last_name[0] ?? '' }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user.edit', $invest->user_id) }}" class="link">
                                            {{ safe($invest->user->username ?? 'N/A') }}
                                        </a>
                                    </td>
                                    <td>
                                        <strong>{{ $invest->schema->name ?? 'N/A' }} <i icon-name="arrow-big-right"></i> {{ $currencySymbol . ($invest->invest_amount ?? 0) }}</strong>
                                    </td>
                                    <td>
                                        <strong>{{ $invest->interest_type == 'percentage' ? $invest->interest . '%' : $currencySymbol . $invest->interest }}</strong>
                                    </td>
                                    <td>
                                        <strong>{{ ($invest->already_return_profit ?? 0) . ' x ' . $interest . ' = ' . (($invest->already_return_profit ?? 0) * $interest) . ' ' . $currency }}</strong>
                                    </td>
                                    <td>
                                        <div class="site-badge {{ $invest->capital_back ? 'success' : 'pending' }}">
                                            {{ $invest->capital_back ? 'Yes' : 'No' }}
                                        </div>
                                    </td>
                                    <td>
                                        @if($invest->status == App\Enums\InvestStatus::Ongoing)
                                            <div>
                                                <strong>
                                                    <span id="days{{ $invest->id }}"></span>D :
                                                    <span id="hours{{ $invest->id }}"></span>H :
                                                    <span id="minutes{{ $invest->id }}"></span>M :
                                                    <span id="seconds{{ $invest->id }}"></span>S
                                                </strong>
                                                <span class="site-badge primary-bg ms-2" id="percentage{{ $invest->id }}"></span>
                                            </div>
                                            <div class="progress investment-timeline">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                     id="time-progress{{ $invest->id }}" role="progressbar"
                                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        @elseif($invest->status == App\Enums\InvestStatus::Completed)
                                            <div class="site-badge success">{{ __('Completed') }}</div>
                                            <div class="progress investment-timeline">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                     role="progressbar" style="width: 100%"></div>
                                            </div>
                                        @else
                                            <div class="site-badge pending">{{ __('Pending') }}</div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">{{ __('No Data Found') }}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
