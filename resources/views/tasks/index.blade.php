@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Status</th>
                <th>Task</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $tasks)
            <tr>
                <td>{!! link_to_route('tasks.show', $tasks->id, ['task' => $tasks->id]) !!}</td>
                <td>{{ $tasks->status }}</td>
                <td>{{ $tasks->content }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary']) !!}

@endsection