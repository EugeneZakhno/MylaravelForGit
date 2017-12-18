@extends('admin.admin-index')

@section('title', 'Все посты')

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Ярлык</th>
            <th>Контент</th>
            <th style="width: 260px">Управление</th>
        </tr>
        </thead>
        <tbody>
        @foreach($post as $p)
            <tr>
                <th scope="row">{{ $p->id }}</th>
                <td>{{ $p->title }}</td>
                <td>{{ $p->slug }}</td>
                <td>{!! $p->content !!}</td>
                <td>
                    <a href="{{ URL::to('admin-panel/' . $p->id) . '/edit' }}" class="btn btn-default"  style="float: left;margin-right: 10px">Редактировать</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['admin-panel.destroy', $p->id]]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $post->links() }}

@endsection