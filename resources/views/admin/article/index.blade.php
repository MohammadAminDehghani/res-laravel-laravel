@extends('admin.layouts.main')

@section('title', 'posts')

@section('custom-css')

@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <p>This is posts content.</p>
    <table id="posts" class="display">
        <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">row</th>
            <th class="text-center">content</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 1; $i < 40; $i++)
            <tr>
                <td class="text-center">{{ $i }}</td>
                <td class="text-center">Row {{ $i }}</td>
                <td class="text-center">Data {{ $i }}</td>
            </tr>
        @endfor
        </tbody>
    </table>
@endsection

@section('custom-js')
    <script src="/admin/js/custom/post/index.js"></script>
@endsection

