@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit $ S C H E M A  F I L E</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($$SCHEMAFILE, ['route' => ['$SCHEMAFILES.update', $$SCHEMAFILE->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('$_s_c_h_e_m_a__f_i_l_e_s.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('$SCHEMAFILES.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
