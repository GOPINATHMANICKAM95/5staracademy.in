@extends('layouts.site')
@section('title', 'Learner approvals | 5StarAcadem')
@section('content')
<section class="admin-page section-pad">
    <div class="container">
        <div class="admin-heading"><div><span class="section-kicker">5STARACADEM · ADMIN</span><h1>Learner approvals</h1><p>Review learner details and grant access to the training dashboard.</p></div><span class="admin-chip">ADMIN CONSOLE</span></div>
        <div class="admin-stats"><div><span>AWAITING REVIEW</span><strong>{{ $pendingCount }}</strong><small>completed applications</small></div><div><span>APPROVED LEARNERS</span><strong>{{ $approvedCount }}</strong><small>dashboard access enabled</small></div><div><span>CLASS SIZE</span><strong>10–12</strong><small>learners per batch</small></div></div>
        <div class="approval-panel">
            <div class="panel-heading"><div><span class="section-kicker">APPLICATION QUEUE</span><h2>Pending applications</h2></div><span class="queue-count">{{ $pendingCount }} pending</span></div>
            @if ($pendingLearners->isEmpty())
                <div class="empty-state"><span>✳</span><h3>All caught up.</h3><p>New completed applications will appear here for review.</p></div>
            @else
                <div class="table-scroll"><table class="approval-table"><thead><tr><th>LEARNER</th><th>PHONE</th><th>EDUCATION</th><th>LOCATION</th><th>APPLIED</th><th></th></tr></thead><tbody>
                    @foreach ($pendingLearners as $learner)
                        <tr><td><div class="learner-cell"><span class="learner-avatar">{{ strtoupper(substr($learner->name, 0, 1)) }}</span><span><strong>{{ $learner->name }}</strong><small>{{ $learner->email }}</small></span></div></td><td>{{ $learner->phone }}</td><td>{{ $learner->education }}</td><td>{{ $learner->location }}</td><td>{{ $learner->created_at->format('d M Y') }}</td><td><form method="POST" action="{{ route('admin.learners.approve', $learner) }}">@csrf<button class="button button-dark button-small" type="submit">Approve <span aria-hidden="true">↗</span></button></form></td></tr>
                    @endforeach
                </tbody></table></div>
                <div class="pagination">{{ $pendingLearners->links() }}</div>
            @endif
        </div>
        <div class="admin-footer-note"><span>✳</span><p>Once approved, a learner can sign in with the same Google account to access their dashboard.</p></div>
    </div>
</section>
@endsection
