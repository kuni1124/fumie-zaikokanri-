
@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    @if (count($gyoushas) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gyoushas as $gyousha)
                <tr>
                    <td>{{ $gyousha->id }}</td>
                    <td>{{ $gyousha->gyousha_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('gyousha-create', '業者登録', [], ['class' => 'btn btn-primary']) !!}
@endsection

