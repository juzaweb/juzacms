@extends('layouts.backend')

@section('title', $title)

@section('content')

{{ Breadcrumbs::render('manager', [
        'name' => trans('mymo_core::app.email_templates'),
        'url' => route('admin.setting.email_templates')
    ], $model) }}

<div class="cui__utils__content">
    <form method="post" action="{{ route('admin.setting.email_templates.save') }}" class="form-ajax">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-0 card-title font-weight-bold">{{ $title }}</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="btn-group float-right">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> @lang('mymo_core::app.save')</button>
                            <a href="{{ route('admin.setting.email_templates') }}" class="btn btn-warning"><i class="fa fa-times-circle"></i> @lang('mymo_core::app.cancel')</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="col-form-label" for="name">@lang('mymo_core::app.subject')</label>

                            <input type="text" name="subject" class="form-control" id="subject" value="{{ $model->subject }}" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="content">@lang('mymo_core::app.content')</label>
                            <textarea class="form-control" name="content" id="content" rows="6">{{ $model->content }}</textarea>
                        </div>
                    </div>

                </div>

                <input type="hidden" name="id" value="{{ $model->id }}">
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
        lineNumbers: true,
        extraKeys: {"Ctrl-Space": "autocomplete"},
        mode: "text/html",
    });
</script>
@endsection
