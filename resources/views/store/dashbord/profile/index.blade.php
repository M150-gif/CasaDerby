@extends('store.dashbord.layouts.template')
@section('content')
<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <style>
        .sidebar {
            min-width: 200px;
        }

        .profile-img {
            cursor: pointer;
        }

        .clickable {
            cursor: pointer;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container mt-5 ">
    @if (session('success'))
    <div class="alert alert-success my-2">{{ session('success') }}</div>
    @endif
        <div class="row mx-auto">
            <div class="col-md-4 sidebar">
                <div class="d-flex align-items-center mb-4">
                    <img src="https://via.placeholder.com/50" data-bs-toggle="modal" data-bs-target="#profileImageModal" class="rounded-circle profile-img" id="profileImage" alt="Profile Image">
                    <div class="ml-3">
                        <h5>{{$profile->name}}</h5>
                        <p>{{$profile->email}}</p>
                    </div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item clickable" id="personalInfoTab">Personal Information</li>
                    <li class="list-group-item clickable" id="securitySettingsTab">Security Settings</li>
                </ul>
            </div>
            <div class="col-md-8">
                <div id="personalInfo">
                    <h3>Personal Information</h3>
                    <p><strong>Full Name:</strong> <span class="clickable" data-toggle="modal" data-target="#editModal" data-field="Full Name">{{$profile->name}}</span></p>
                    <p><strong>Email:</strong> <span class="clickable" data-toggle="modal" data-target="#editemail" data-field="Email">{{$profile->email}}</span></p>
                    <button type="submit" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#change_infos" class="rounded-circle profile-img" id="profileImage">Change infos</button>
                
                </div>
                <div id="securitySettings" class="d-none">
                    <h3>Security Settings</h3>
                    <form method="POST" action="{{route('profile.updatePassword')}}">
                        @csrf
                        <div class="form-group">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" name="currentPassword" class="form-control" id="currentPassword" >
                            @error('currentPassword')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" name="newPassword" class="form-control" id="newPassword" >
                            @error('newPassword')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit email-->
    <div class="modal fade" id="change_infos" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST" action="{{route('profile.update',$profile->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="editField">name</label>
                            <input type="text" name="name" class="form-control" value="{{$profile->name}}">
                        </div>
                        <div class="form-group">
                            <label for="editField">email</label>
                            <input type="text" name="email" class="form-control" value="{{$profile->email}}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add file input in the modal for profile image update -->
    <!-- Profile Image Modal -->
    <div class="modal fade" id="profileImageModal" tabindex="-1" aria-labelledby="profileImageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileImageModalLabel">Change Profile Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="profileImageForm" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="profileImageInput">Choose new profile image</label>
                            <input type="file" class="form-control" id="profileImageInput" name="profile_image" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Upload Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#personalInfoTab').click(function() {
                $('#personalInfo').removeClass('d-none');
                $('#securitySettings').addClass('d-none');
            });

            $('#securitySettingsTab').click(function() {
                $('#personalInfo').addClass('d-none');
                $('#securitySettings').removeClass('d-none');
            });

           
        });
    </script>

</body>

</html>

@endsection