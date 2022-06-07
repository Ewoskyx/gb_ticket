@extends('welcome')

@section('table')
    <table>
        <thead>
            <tr>
                <td><a href="{{ route('sort_by_ticket_no') }}">Talep No</a></td>
                <td><a href="{{ route('sort_by_severity') }}">Önem Kodu</a></td>
                <td><a href="{{ route('sort_by_category') }}">Kategori</a></td>
                <td>Talep</td>
                <td>Detay</td>
                <td><a href="{{ route('sort_by_status') }}">Durum</a></td>
                <td><a href="{{ route('sort_by_assignee') }}">Atanan</a></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $ticket)
                @if ($loop->odd)
                    <tr class="odds" id="{{ $ticket->id }}">
                        <td>
                            <a href="{{ route('show_ticket', $ticket->id) }}">{{ $ticket->ticket_no ?? 'N/A' }} </a>
                        </td>
                        <td>{{ $ticket->severity ?? 'N/A' }}</td>
                        <td>{{ $ticket->category ?? 'N/A' }}</td>
                        <td>{{ $ticket->title ?? 'N/A' }}</td>
                        <td>{{ $ticket->description ?? 'N/A' }}</td>
                        <td><span class="status {{ $ticket->status }}">{{ $ticket->status ?? 'N/A' }}</span></td>
                        <td>{{ $ticket->assignee ?? 'N/A' }}</td>
                    </tr>
                @else
                    <tr id="{{ $ticket->id }}">
                        <td>
                            <a href="{{ route('show_ticket', $ticket->id) }}">{{ $ticket->ticket_no ?? 'N/A' }} </a>
                        </td>
                        <td>{{ $ticket->severity ?? 'N/A' }}</td>
                        <td>{{ $ticket->category ?? 'N/A' }}</td>
                        <td>{{ $ticket->title ?? 'N/A' }}</td>
                        <td>{{ $ticket->description ?? 'N/A' }}</td>
                        <td><span class="status {{ $ticket->status }}">{{ $ticket->status ?? 'N/A' }}</span></td>
                        <td>{{ $ticket->assignee ?? 'N/A' }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
