@extends('layouts.app')

@section('style')
    <style>
        .img-users {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .modal-footer .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Thêm mới</button>
        <a href="{{ route('chat') }}" class="btn btn-warning">Trang chủ</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Image</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($users as $key => $user)
            <tr id="row_{{$user->id}}">
                <td>{{ $key + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <img src="{{ $user->image }}" class="img-users" alt="">
                </td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="{{ $user->id }}">Sửa</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $user->id }}">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Add Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddLabel">Thêm mới</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" placeholder="Name..." class="form-control">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" id="image" placeholder="Image..." class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" placeholder="Email..." class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btnAddUser">Thêm mới</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Chỉnh sửa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userIdUp">
                <div class="mb-3">
                    <label for="nameUp" class="form-label">Name</label>
                    <input type="text" id="nameUp" placeholder="Name..." class="form-control">
                </div>
                <div class="mb-3">
                    <label for="imageUp" class="form-label">Image</label>
                    <input type="text" id="imageUp" placeholder="Image..." class="form-control">
                </div>
                <div class="mb-3">
                    <label for="emailUp" class="form-label">Email</label>
                    <input type="text" id="emailUp" placeholder="Email..." class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="btnUpdateUser">Chỉnh sửa</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bạn có muốn xóa hay không</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-danger" id="btnDeleteUser">Xác nhận xóa</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="module">
    // Add User
    let name = document.querySelector("#name");
    let image = document.querySelector("#image");
    let email = document.querySelector("#email");

    function refresh() {
        name.value = '';
        image.value = '';
        email.value = '';
    }

    let btnAddUser = document.querySelector("#btnAddUser");
    btnAddUser.addEventListener('click', function() {
        axios.post('{{ route("postAddUser") }}', {
            name: name.value,
            image: image.value,
            email: email.value
        })
        .then((data) => {
            console.log(data);
            let modalAdd = document.querySelector('#modalAdd');
            let close = modalAdd.querySelector('.btn-close');
            close.click();
            refresh();
        })
        .catch(error => {
            console.error(error);
        });
    });

    // Edit User
    let nameUp = document.querySelector("#nameUp");
    let imageUp = document.querySelector("#imageUp");
    let emailUp = document.querySelector("#emailUp");
    let userIdUp = document.querySelector("#userIdUp");

    function refreshFormUpdate() {
        nameUp.value = '';
        imageUp.value = '';
        emailUp.value = '';
    }

    var modalEdit = document.getElementById('modalEdit');
    modalEdit.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        axios.post('{{route("postDetailUser")}}', { id })
        .then(data => {
            nameUp.value = data.data.name;
            imageUp.value = data.data.image;
            emailUp.value = data.data.email;
            userIdUp.value = id;
        })
        .catch(error => {
            console.error(error);
        });
    });

    let btnUpdateUser = document.querySelector('#btnUpdateUser');
    btnUpdateUser.addEventListener('click', function() {
        axios.post('{{ route("postUpdateUser") }}', {
            name: nameUp.value,
            image: imageUp.value,
            email: emailUp.value,
            id: userIdUp.value
        })
        .then((data) => {
            console.log(data);
            let modalEdit = document.querySelector('#modalEdit');
            let close = modalEdit.querySelector('.btn-close');
            close.click();
            refreshFormUpdate();
        })
        .catch(error => {
            console.error(error);
        });
    });

    // Delete User
    var idDelete;
    var modalDelete = document.getElementById('modalDelete');
    modalDelete.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        idDelete = button.getAttribute('data-id');
    });

    let btnDeleteUser = document.querySelector("#btnDeleteUser");
    btnDeleteUser.addEventListener('click', function() {
        axios.post('{{route("postDeleteUser")}}', { id: idDelete })
        .then(data => {
            console.log(data);
            let modalDelete = document.querySelector('#modalDelete');
            let close = modalDelete.querySelector('.btn-close');
            close.click();
            document.querySelector(`#row_${idDelete}`).remove();
        })
        .catch(error => {
            console.error(error);
        });
    });

    // Echo events
    Echo.channel('users')
        .listen('UserCreated', event => {
            let UI = `
                <tr id="row_${event.user.id}">
                    <td></td>
                    <td>${event.user.name}</td>
                    <td><img src="${event.user.image}" class="img-users" alt=""></td>
                    <td>${event.user.email}</td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="${event.user.id}">Sửa</button>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="${event.user.id}">Xóa</button>
                    </td>
                </tr>
            `;
            let tbody = document.querySelector('#tbody');
            tbody.insertAdjacentHTML("afterbegin", UI);
        })
        .listen('UserUpdated', event => {
            let tr = document.querySelector(`tr#row_${event.user.id}`);
            let UI = `
                <td></td>
                <td>${event.user.name}</td>
                <td><img src="${event.user.image}" class="img-users" alt=""></td>
                <td>${event.user.email}</td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="${event.user.id}">Sửa</button>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="${event.user.id}">Xóa</button>
                </td>
            `;
            tr.innerHTML = UI;
        })
        .listen('UserDeleted', event => {
            let tr = document.querySelector(`tr#row_${event.user.id}`);
            tr.remove();
        });
    </script>
@endsection
