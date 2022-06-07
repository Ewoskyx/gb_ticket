@extends('welcome')
@section('table')
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
                <h2>{{ $ticket->ticket_no }}</h2>
            </div>
            <div class='box-login'>
                <label for="category">Kategori:</label>
                <input type="text" disabled value="{{ $ticket->category }}">
                <label for="title">Talep:</label>
                <input type="text" disabled value="{{ $ticket->title }}">
                <label for="description">Detay:</label>
                <textarea id="description" rows="4" cols="50" disabled>{{ $ticket->description }}</textarea>
                <label for="severity">Önem Kodu:</label>
                <input type="text" disabled value="{{ $ticket->severity }}">
                <label for="status">Durum:</label>
                <input type="text" disabled value="{{ $ticket->status }}">
                <label for="assignee">Atanan:</label>
                <input type="text" disabled value="{{ $ticket->assignee }}">
                <button class="box-btn">Edit</button>
            </div>
        </div>
    </div>
@endsection
