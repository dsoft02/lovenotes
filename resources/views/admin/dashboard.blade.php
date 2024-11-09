@extends('admin.layouts.app')

@push('styles')
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Love Notes
        <small>All Love Notes</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active">Love Notes</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Love Notes</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">

                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive" style="width:100%;">
                        <table id="list-table" class="table table-bordered table-striped dt-responsive display nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Love Note</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lovenotes as $lovenote)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lovenote->name }}</td>
                            <td>{{ $lovenote->gender ?: '-' }}</td>
                            <td>{{ $lovenote->age ?: '-' }}</td>
                            <td>{!! Str::limit($lovenote->message, 50) !!}</td>
                            <td>{{ $lovenote->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('admin.lovenotes.view', $lovenote->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i> View</a>
                                <a href="{{ route('admin.lovenotes.export', $lovenote->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-download"></i> Export
                                </a>
                                <form action="{{ route('admin.lovenotes.destroy', $lovenote->id) }}" method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this note?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@push('scripts')
@endpush
