@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($gyousha, ['route' => 'gyousha-store']) !!}

                <div class="form-group">
                    {!! Form::label('gyousha_name', 'メッセージ:') !!}
                    {!! Form::text('gyousha_name', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection