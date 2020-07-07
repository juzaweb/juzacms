@extends('layouts.backend')

@section('title', trans('app.upload'))

@section('content')

    {{ Breadcrumbs::render('multiple_parent', [
        [
            'name' => trans('app.movies'),
            'url' => route('admin.movies')
        ],
        [
            'name' => $movie->name,
            'url' => route('admin.movies.edit', ['id' => $movie->id])
        ],
        [
            'name' => $server->name,
            'url' => route('admin.movies.servers', ['movie_id' => $movie->id])
        ],
        [
            'name' => trans('app.upload_videos'),
            'url' => route('admin.movies.servers.upload', ['server_id' => $server->id])
        ]
    ]) }}

    <div class="cui__utils__content">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-0 card-title font-weight-bold">@lang('app.upload_videos')</h5>
                    </div>

                    <div class="col-md-6">
                        <div class="btn-group float-right">
                            <a href="javascript:void(0)" class="btn btn-success add-new-video"><i class="fa fa-plus-circle"></i> @lang('app.add_new')</a>
                            <button type="button" class="btn btn-danger" id="delete-item"><i class="fa fa-trash"></i> @lang('app.delete')</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @include('backend.movie_upload.form_add')

                <div class="row mb-3">
                    <div class="col-md-12">
                        <form method="get" class="form-inline" id="form-search">

                            <div class="form-group mb-2 mr-1">
                                <label for="inputName" class="sr-only">@lang('app.search')</label>
                                <input name="search" type="text" id="inputName" class="form-control" placeholder="@lang('app.search')" autocomplete="off">
                            </div>

                            <div class="form-group mb-2 mr-1">
                                <label for="inputStatus" class="sr-only">@lang('app.status')</label>
                                <select name="status" id="inputStatus" class="form-control">
                                    <option value="">--- @lang('app.status') ---</option>
                                    <option value="1">@lang('app.enabled')</option>
                                    <option value="0">@lang('app.disabled')</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> @lang('app.search')</button>
                        </form>
                    </div>
                </div>

                <div class="table-responsive mb-5">
                    <table class="table load-bootstrap-table">
                        <thead>
                        <tr>
                            <th data-width="3%" data-field="state" data-checkbox="true"></th>
                            <th data-field="name">@lang('app.name')</th>
                            <th data-width="10%" data-field="order" data-align="center">@lang('app.order')</th>
                            <th data-width="15%" data-field="created">@lang('app.created_at')</th>
                            <th data-width="15%" data-field="status" data-align="center" data-formatter="status_formatter">@lang('app.status')</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function status_formatter(value, row, index) {
            if (value == 1) {
                return '<span class="text-success">@lang('app.enabled')</span>';
            }
            return '<span class="text-danger">@lang('app.disabled')</span>';
        }

        var table = new LoadBootstrapTable({
            url: '{{ route('admin.movies.servers.upload.getdata', ['server_id' => $id]) }}',
            remove_url: '{{ route('admin.movies.servers.upload.remove', ['server_id' => $id]) }}',
        });
        
        $('.add-new-video').on('click', function () {
            if ($('.form-upload-video').is(":hidden")) {
                $('.form-upload-video').show('slow');
            }
            else {
                $('.form-upload-video').hide('slow');
            }
        });

        $('#source').on('change', function () {
            if ($(this).val() === "upload") {
                $('.form-url').hide('slow');
                $('.form-upload').show('slow');
            }
            else {
                $('.form-upload').hide('slow')
                $('.form-url').show('slow');
            }
        });

    </script>
@endsection