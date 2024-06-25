@extends('layouts.app')

@section('style')
<style>
    .group-container {
        margin-top: 20px;
    }
    .group-list a {
        display: block;
        padding: 10px;
        margin-bottom: 5px;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-decoration: none;
        color: #333;
    }
    .group-list a:hover {
        background-color: #e2e6ea;
        border-color: #ced4da;
    }
</style>
@endsection

@section('content')
<div class="container group-container">
    <div class="d-flex justify-content-between mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">
            Tạo nhóm
        </button>
        <a href="{{route('chat' )}}" class="btn btn-warning">Vào khung chát</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h5>Nhóm của bạn</h5>
            <div class="group-list">
                @foreach ($myGroup as $value)
                    <a href="{{route('chatGroup', $value->id)}}">{{$value->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <h5>Nhóm bạn làm thành viên</h5>
            <div class="group-list">
                @foreach ($myGroupNotLeader as $value)
                    <a href="{{route('chatGroup', $value->groupchatId)}}">{{$value->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddLabel">Tạo nhóm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('createGroup')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên nhóm</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="leader" class="form-label">Trưởng nhóm</label>
                        <input type="text" class="form-control" id="leader" name="leader" value="{{ Auth::user()->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="menber" class="form-label">Danh sách thành viên</label>
                        <select class="form-control" id="menber" name="menber[]" multiple required>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Tạo nhóm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
