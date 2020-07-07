@extends('layouts.backend')

@section('title', $title)

@section('content')
    {{ Breadcrumbs::render('manager', [
            'name' => trans('app.movies'),
            'url' => route('admin.movies')
        ], $model) }}

    <div class="cui__utils__content">
        <form action="{{ route('admin.movies.save') }}" method="post" class="form-ajax">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-0 card-title font-weight-bold">{{ $title }}</h5>
                        </div>

                        <div class="col-md-6">
                            <div class="float-right">
                                @if($model->id)
                                <div class="btn-group mr-5">
                                    <a href="{{ route('admin.movies.servers', ['movie_id' => $model->id]) }}" class="btn btn-success"><i class="fa fa-upload"></i> @lang('app.upload_videos')</a>
                                </div>
                                @endif

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> @lang('app.save')</button>
                                    <a href="{{ route('admin.movies') }}" class="btn btn-warning"><i class="fa fa-times-circle"></i> @lang('app.cancel')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-8">

                            <div class="form-group">
                                <label class="col-form-label" for="name">@lang('app.name')</label>

                                <input type="text" name="name" class="form-control" id="name" value="{{ $model->name }}" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="other_name">@lang('app.other_name')</label>

                                <input type="text" name="other_name" class="form-control" id="other_name" value="{{ $model->other_name }}" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="baseDescription">@lang('app.description')</label>
                                <textarea class="form-control" name="description" id="baseDescription" rows="6">{{ $model->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="rating">@lang('app.rating')</label>

                                <input type="text" name="rating" class="form-control" id="rating" value="{{ $model->rating }}" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="release">@lang('app.release')</label>

                                <input type="text" name="release" class="form-control datepicker" id="release" value="{{ $model->release }}" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="runtime">@lang('app.runtime')</label>
                                <input type="text" name="runtime" class="form-control" id="runtime" value="{{ $model->runtime }}" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="trailer_link">@lang('app.trailer')</label>
                                <input type="text" name="trailer_link" class="form-control" id="trailer_link" value="{{ $model->trailer_link }}" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="video_quality">@lang('app.video_quality')</label>
                                <select class="form-control" name="video_quality" id="video_quality">
                                    <option value="4K" @if($model->video_quality == '4K') selected @endif>4K</option>
                                    <option value="HD" @if($model->video_quality == 'HD' || empty($model->video_quality)) selected @endif>HD</option>
                                    <option value="SD" @if($model->video_quality == 'SD') selected @endif>SD</option>
                                    <option value="CAM" @if($model->video_quality == 'CAM') selected @endif>CAM</option>
                                    <option value="LQ" @if($model->video_quality == 'LQ') selected @endif>LQ</option>
                                    <option value="DVD" @if($model->video_quality == 'DVD') selected @endif>DVD</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label" for="baseStatus">@lang('app.status')</label>
                                <select name="status" id="baseStatus" class="form-control" required>
                                    <option value="1" @if($model->status == 1) selected @endif>@lang('app.enabled')</option>
                                    <option value="0" @if($model->status == 0 && !is_null($model->status)) selected @endif>@lang('app.disabled')</option>
                                </select>
                            </div>

                            @include('backend.seo_form')
                        </div>

                        <div class="col-md-4">
                            @include('backend.movies.form_sidebar')
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $model->id }}">
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        CKEDITOR.replace('baseDescription', {
            filebrowserImageBrowseUrl: '/admin/filemanager?type=Images',
            filebrowserBrowseUrl: '/admin/filemanager?type=Files'
        });
    </script>
@endsection
