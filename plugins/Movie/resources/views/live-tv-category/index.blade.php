@extends('mymo_core::layouts.backend')

@section('title', trans('movie::app.live_tv_categories'))

@section('content')

{{ Breadcrumbs::render('manager', [
        'name' => trans('movie::app.live_tv_categories'),
        'url' => route('admin.live-tv.category')
    ]) }}

<div class="cui__utils__content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-0 card-title font-weight-bold">@lang('movie::app.live_tv_categories')</h5>
                </div>

                <div class="col-md-6">
                    <div class="float-right">

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary status-button" data-status="1"><i class="fa fa-check"></i> @lang('movie::app.enabled')</button>

                            <button type="button" class="btn btn-warning status-button" data-status="0"><i class="fa fa-times"></i> @lang('movie::app.disabled')</button>
                        </div>

                        <div class="btn-group">
                            <a href="{{ route('admin.live-tv.category.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> @lang('movie::app.add_new')</a>
                            <button type="button" class="btn btn-danger" id="delete-item"><i class="fa fa-trash"></i> @lang('movie::app.delete')</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-12">
                    <form method="get" class="form-inline" id="form-search">

                        <div class="form-group mb-2 mr-1">
                            <label for="search" class="sr-only">@lang('movie::app.search')</label>
                            <input name="search" type="text" id="search" class="form-control" placeholder="@lang('movie::app.search')" autocomplete="off">
                        </div>

                        <div class="form-group mb-2 mr-1">
                            <label for="inputStatus" class="sr-only">@lang('movie::app.status')</label>
                            <select name="status" id="inputStatus" class="form-control">
                                <option value="">--- @lang('movie::app.status') ---</option>
                                <option value="1">@lang('movie::app.enabled')</option>
                                <option value="0">@lang('movie::app.disabled')</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> @lang('movie::app.search')</button>
                    </form>
                </div>

            </div>

            <div class="table-responsive mb-5">
                <table class="table mymo-table">
                    <thead>
                        <tr>
                            <th data-width="3%" data-field="state" data-checkbox="true"></th>
                            <th data-width="10%" data-field="thumbnail" data-formatter="thumbnail_formatter">@lang('movie::app.thumbnail')</th>
                            <th data-field="name" data-formatter="name_formatter">@lang('movie::app.name')</th>
                            <th data-width="15%" data-field="created">@lang('movie::app.created_at')</th>
                            <th data-width="15%" data-field="status" data-align="center" data-formatter="status_formatter">@lang('movie::app.status')</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        function thumbnail_formatter(value, row, index) {
            return '<img src="'+ row.thumb_url +'" class="w-100">';
        }

        function name_formatter(value, row, index) {
            return '<a href="'+ row.edit_url +'">'+ value +'</a>';
        }

        function status_formatter(value, row, index) {
            if (value == 1) {
                return '<span class="text-success">@lang('movie::app.enabled')</span>';
            }
            return '<span class="text-danger">@lang('movie::app.disabled')</span>';
        }

        var table = new MymoTable({
            url: '{{ route('admin.live-tv.category.getdata') }}',
            remove_url: '{{ route('admin.live-tv.category.remove') }}',
            status_url: '{{ route('admin.live-tv.category.publish') }}',
        });
    </script>
@endsection