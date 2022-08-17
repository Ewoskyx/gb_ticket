@extends('welcome')
@section('table')
    <div class='box' id="big-box">
        <div class='box-form' draggable="true" id="box-form">
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
                <h2>{{ $ticket->ticket_no }}</h2>
            </div>
            <form action="{{ route('edit_ticket',['id'=>$ticket->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='box-login'>
                    <label for="category">Kategori:</label>
                    <input type="text"  value="{{ $ticket->category }}" name="category">
                    <label for="title">Talep:</label>
                    <input type="text"  value="{{ $ticket->title }}" name="title">
                    <label for="description">Detay:</label>
                    <textarea id="description" rows="4" cols="50" name="description">{{ $ticket->description }}</textarea>
                    <label for="severity">Önem Kodu:</label>
                    <input type="text"  value="{{ $ticket->severity }}" name="severity">
                    <label for="status">Durum:</label>
                    <select name="status" id="status">
                    @foreach ($status as $stats)
                        @if ($stats == $ticket->status)
                            <option selected value="{{ $stats }}">{{ $stats }}</option>
                        @else
                            <option value="{{ $stats }}">{{ $stats }}</option>    
                        @endif
                       
                    @endforeach
                    </select>
                    <label for="assignee">Atanan:</label>
                    <input type="text"  value="{{ $ticket->assignee }}" name="assignee">
                    <button class="box-btn" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
