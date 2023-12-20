@extends('layouts.navuser')
@section('content')

@if (session('message'))
<div id="success-alert" class="alert alert-success" style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; z-index:999;">
    {{ session('message') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; z-index:999;">
    {{ session('error') }}
</div>
@endif

@if (session('status'))
<div id="status-alert" class="alert alert-success" style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 100%; z-index:999;">
    {{ session('status') }}
</div>
@endif


<div id="side-bar-admin">
    <div>
        <div class="box4" style="z-index: 999;">
            <div class="group">
                <div>
                    <a href="#" onclick="showMainPage()">
                        <div class="div">
                            <img class="house-chimney" alt="House chimney" src="img/house-chimney-1.png" />
                            <div class="text-wrapper">Home</div>
                        </div>
                    </a>
                </div>
                <div>
                    <div class="div">
                        <img class="fire-flame-curved" alt="Fire flame curved" src="img/fire-flame-curved-1-1.png" />
                        <div class="text-wrapper">Popular</div>
                    </div>
                </div>
                <div>
                    <a href="#" onclick="showUsers()">
                        <div class="div">
                            <img class="fire-flame-curved" alt="Fire flame curved" src="img/control-panel.png" />
                            <div class="text-wrapper">User List</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="line4">
            <img class="line-stroke" alt="Line stroke" src="img/line-2-stroke.svg" />
        </div>
        <div class="line-horizontal4">
            <img class="line" alt="Line" src="img/line-6.svg" />
        </div>
        <div class="box4-1">
            <div class="group">
                <div class="text-wrapper">See More....</div>
                <div class="div">
                    <img class="arrow-down-sign-to" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-2">CATEGORIES</div>
                </div>
                <div class="group-2">
                    <img class="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-3">Vegetables</div>
                    <img class="group-3" src='img/vegetables-2.png' />
                </div>
                <div class="group-4">
                    <img class="arrow-down-sign-to-2" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-3">Fruits</div>
                    <img class="vegetable" alt="Vegetable" src="img/vegetable-1.png" />
                </div>
                <div class="group-5">
                    <img class="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-3">Whole Grains</div>
                    <img class="group-6" src='img/bread-1.png' />
                </div>
                <div class="group-7">
                    <img class="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-3">Lean Protein</div>
                    <img class="group-8" src='img/protein-1.png' />
                </div>
                <div class="group-9">
                    <img class="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-3">Water</div>
                    <img class="group-10" src='img/water.png' />
                </div>
                <div class="group-11">
                    <img class="arrow-down-sign-to-3" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-4">Low-Fat Dairy</div>
                    <img class="group-12" src='img/dairy-products-1.png' />
                </div>
                <div class="group-13">
                    <img class="arrow-down-sign-to-4" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    <div class="text-wrapper-5">Healthy Fats</div>
                    <img class="group-14" src='img/nutrition-1.png' />
                </div>
            </div>
        </div>
        <div class="line-horizontal4">
            <img class="line" alt="Line" src="img/line-6.svg" />
        </div>
        <div class="box4-2">
            <div class="group">
                <div class="div">
                    <div class="text-wrapper-2">RESOURCES</div>
                    <img class="arrow-down-sign-to" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                </div>
                <div class="group-5">
                    <div class="text-wrapper-4 gray">About The Healthy Hub</div>
                    <img class="about" alt="About" src="img/about.png" />
                </div>
                <div class="group-2">
                    <div class="text-wrapper-3 gray">Advertise</div>
                    <img class="group-3" src="img/laptop-1.png" />
                </div>
                <div class="group-4">
                    <div class="text-wrapper-4 gray">Help</div>
                    <img class="help" alt="Help" src="img/help-1.png" />
                </div>
                <div div class="text-wrapper">See More....</div>
            </div>
        </div>
    </div>
</div>

<div id="user-table" class="col-12 col-md-6 col-lg-9" style="display:none;left: 27rem;top: 8rem;position: absolute;">
    <div name="container" style="
    border: 2px solid black;
    width: 100%;
    height: fit-content;
    color: white;
    padding: 1rem 1rem;
    background-color: #005280;
    border-radius: 15px;
    margin-bottom: 2rem;
    ">
        <div>
            <table class="table table-bordered table-bordered-black" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Admin Rights?</th>
                        <th>Actions</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                        <td style="display: flex;gap:0.5rem;justify-content:center;">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editUserModal" onclick="openEditModal({{ $user->id }}, '{{ $user->username }}', {{ $user->is_admin ? 'true' : 'false' }})">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="border-color: black;">
                                @csrf
                                @method('DELETE')
                                <button style="border-color: black;" type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div id="sections-to-hide">

    <div id="pic-nav">
        <div class="pic-nav">
            <div class="group">
                <div class="overlap-group">
                    <p class="text-wrapper">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque a nulla suscipit tincidunt. Sed non
                        arcu nec augue iaculis luctus. Pellentesque ac tortor in libero consectetur tincidunt.
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="overlap-group1">
                    <p class="text-wrapper">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque a nulla suscipit tincidunt. Sed non
                        arcu nec augue iaculis luctus. Pellentesque ac tortor in libero consectetur tincidunt.
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="overlap-group2">
                    <p class="text-wrapper">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque a nulla suscipit tincidunt. Sed non
                        arcu nec augue iaculis luctus. Pellentesque ac tortor in libero consectetur tincidunt.
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="overlap-group3">
                    <p class="text-wrapper">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque a nulla suscipit tincidunt. Sed non
                        arcu nec augue iaculis luctus. Pellentesque ac tortor in libero consectetur tincidunt.
                    </p>
                </div>
            </div>
            <div class="arrowbox">
                <a href=""><img class="icon-arrow-circle" alt="Icon arrow circle" src="img/icon-arrow-circle-right.png" /></a>
            </div>
        </div>
    </div>

    <div id="pop-box">
        <div class="pop-box">
            <div class="group">
                <div class="overlap-group">
                    <div class="text-wrapper">Popular Communities</div>
                    <img class="line" alt="Line" src="img/line-10.svg" />
                    <ul class="thh-intermittent">
                        <li>thh/Intermittent-Fasting</li>
                        <li>thh/Mediterranean-Diet </li>
                        <li>thh/Plant-Based</li>
                        <li>thh/SuperFoods</li>
                    </ul>
                    <a class="div">See More....</a>
                </div>
            </div>
        </div>
    </div>

    <div id="post-create">
        <div class="post-create">
            <div class="group">
                <a href="#" data-toggle="modal" data-target="#createPostModal" style="text-decoration: none;">
                    <div>
                        <img class="add" alt="Add" src="img/add-1-1.png" />
                        <div class="text-wrapper">Create a post</div>
                    </div>
                </a>
                <div class="divider">
                    <div>
                        <div class="text-wrapper-2">Home</div>
                        <img class="play" alt="Play" src="img/play-1.png" />
                    </div>
                    <div>
                        <div class="div">Philippines</div>
                        <img class="img" alt="Play" src="img/play-1.png" />
                    </div>
                    <img class="fullscreen" alt="Fullscreen" src="img/fullscreen-1.png" />
                </div>
            </div>
        </div>
    </div>

    <div id="post-display">
        <div class="post-display">
            @foreach ($posts as $post)
            <div style="border: 2px solid black;
            width: 100%;
            height: fit-content;
            color: white;
            padding: 1rem 1rem;
            background-color: #005280;
            border-radius: 15px;
            margin-bottom: 2rem;">
                <div class="row-tabi-ini d-flex" style="justify-content: space-between;">
                    <div class="d-flex gap-2" style="align-items: center;">
                        <img src="{{ asset('images/' . $post->user->picture) }}" alt="User Picture" style="width: 45px;height: 45px;border-radius: 2rem;border: 2px solid black;" />
                        <p class=" textshadowgodz" style="margin: 0;">{{ $post->user->username }}&nbsp;&nbsp;|&nbsp;&nbsp;{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="d-flex gap-4" style="align-items: center;">
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/ellipsis.png" />
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item edit-button" data-id="{{ $post->id }}" data-body="{{ $post->body }}" href="#">Edit</a></li>
                            </ul>
                        </div>
                        <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none;background: none;">
                                <img src="img/close.png" />
                            </button>
                        </form>
                    </div>
                </div>
                @if ($post->photo)
                <div class="row-tabi-ini d-flex mt-3 mb-3" style="justify-content: center;">
                    <div style="width: 100%;height: 379px;overflow: hidden;position: relative;">
                        <img src="{{ asset('uploads/' . $post->photo) }}" style="border:2px solid black; width: 100%; height: 100%; object-fit: contain; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);background: black;" />
                    </div>
                </div>
                @endif
                <div class="row-tabi-ini textshadowgodz mt-3">
                    <p style="font-size: 2rem;">{{ $post->body }}</p>
                </div>
                <hr style="border: 1px solid black;margin: 0.5rem 0;">
                <div class="row-tabi-ini gap-3 d-flex align-items-center">
                    <p>{{ $post->likeposts->count() }} likes</p>
                    @if($post->likeposts->where('user_id', auth()->id())->count())
                    <form method="POST" action="/posts/{{ $post->id }}/likepost">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Unlike</button>
                    </form>
                    @else
                    <form method="POST" action="/posts/{{ $post->id }}/likepost">
                        @csrf
                        <button type="submit" class="btn btn-primary">Like</button>
                    </form>
                    @endif
                    <button id="comment-button" type="button" class="btn btn-info">Comment</button>
                    <!-- <button type="button" class="btn btn-secondary">Share</button> -->
                </div>
                <hr style="border: 1px solid black;margin: 0.5rem 0;">
                <div id="comment-section">
                    <h5 style="letter-spacing: 0.09rem;font-size: 1.5rem;color: #3d3d5a;" class="textshadowgodz commentgodz mb-3">Comments</h5>
                    @if ($post->comments)
                    @foreach ($post->comments->whereNull('parent_id') as $comment)
                    <div class="d-flex justify-content-between align-items-center textshadowgodz">
                        <div class="d-flex gap-2">
                            <div>
                                <img class="border border-2 border-dark" src="{{ asset('images/' . $comment->user->picture) }}" alt="User Picture" style="width: 30px; height: 30px; border-radius: 2rem;" />
                            </div>
                            <div>
                                <strong>{{ $comment->user->username }}</strong>
                                <p>{{ $comment->body }}</p>
                                <small>{{ $comment->likes->count() }} likes</small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            @if ($comment->likes->where('user_id', Auth::id())->count() > 0)
                            <form method="POST" action="{{ route('likes.destroy', ['comment' => $comment->id, 'like' => $comment->likes->where('user_id', Auth::id())->first()->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="butones" type="submit">Unlike</button>
                            </form>
                            @else
                            <form method="POST" action="{{ route('likes.store', ['comment' => $comment->id]) }}">
                                @csrf
                                <button class="butones" type="submit">Like</button>
                            </form>
                            @endif
                            @if ($comment->user_id == Auth::id())
                            <form method="POST" action="{{ route('comments.destroy', ['comment' => $comment->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="butones" type="submit">Delete</button>
                            </form>
                            @endif
                        </div>
                    </div>
                    @foreach ($comment->replies as $reply)
                    <div style="margin-left: 40px;">
                        <div style="margin: 0.5rem 0;" class="d-flex justify-content-between align-items-center textshadowgodz">
                            <div class="d-flex gap-2">
                                <div>
                                    <img class="border border-2 border-dark" src="{{ asset('images/' . $reply->user->picture) }}" alt="User Picture" style="width: 30px; height: 30px; border-radius: 2rem;" />
                                </div>
                                <div>
                                    <strong>{{ $reply->user->username }}</strong>
                                    <p>{{ $reply->body }}</p>
                                    <small>{{ $reply->likes->count() }} likes</small>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                @if ($reply->likes->where('user_id', Auth::id())->count() > 0)
                                <form method="POST" action="{{ route('likes.destroy', ['comment' => $reply->id, 'like' => $reply->likes->where('user_id', Auth::id())->first()->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="butones" type="submit">Unlike</button>
                                </form>
                                @else
                                <form method="POST" action="{{ route('likes.store', ['comment' => $reply->id]) }}">
                                    @csrf
                                    <button class="butones" type="submit">Like</button>
                                </form>
                                @endif
                                @if ($reply->user_id == Auth::id())
                                <form method="POST" action="{{ route('comments.destroy', ['comment' => $reply->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="butones" type="submit">Delete</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Add a form here for replying to the comment -->
                    <form method="POST" class="d-flex gap-2 m-3" action="{{ route('comments.store', ['post' => $post->id]) }}">
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                        <textarea name="body" cols="" rows="1"></textarea>
                        <button class="butones" type="submit">Reply</button>
                    </form>
                    @endforeach
                    @endif
                    <form method="POST" class="d-flex gap-2" action="{{ route('comments.store', ['post' => $post->id]) }}">
                        @csrf
                        <textarea name="body" cols="" rows="1"></textarea>
                        <button class="butones" type="submit">Add Comment</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

<!-- Create Modal -->

<div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-top: 0;max-width:40%;">
        <div class="modal-content textshadowgodz" style="height: 50%;transform: translate(0, 50%);border: 2px solid black;border-radius: 15px;background-color: #005280;color: white;">
            <div class="modal-header border-0" style="padding: 0.5rem 1rem;">
                <h5 class="modal-title" id="createPostModalLabel">Create Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <!-- form for creating a post -->
                <form style="width: 100%;" id="postForm" action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" id="file" name="photo" accept=".jpg,.jpeg,.png" style="display: none;" />
                        <button type="button" id="custom-button">Choose File</button>
                        <span id="file-name">No file chosen</span>
                    </div>
                    <div class="form-group m-0">
                        <textarea style="width: 100%;border:2px solid black;padding: 0;margin: 0;" name="body" id="body" cols="30" rows="10" placeholder="Post something!"></textarea>
                    </div>

                    <div class="modal-footer border-0 p-2">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->

<div class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="editPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-top: 0;max-width:40%;">
        <div class="modal-content textshadowgodz" style="height: 50%;transform: translate(0, 50%);border: 2px solid black;border-radius: 15px;background-color: #005280;color: white;">
            <div class="modal-header border-0" style="padding: 0.5rem 1rem;">
                <h5 class="modal-title" id="editPostModalLabel">Edit Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="editPostModalCloseButton">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <!-- form for editing a post -->
                <form style="width: 100%;" id="editPostForm" action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="edit-id" />
                    <div class="form-group">
                        <input type="file" id="edit-file" name="photo" accept=".jpg,.jpeg,.png" style="display: none;" />
                        <button type="button" id="edit-custom-button">Choose File</button>
                        <span id="edit-file-name">No file chosen</span>
                    </div>
                    <div class="form-group m-0">
                        <textarea style="width: 100%;border:2px solid black;padding: 0;margin: 0;" name="body" id="edit-body" cols="30" rows="10" placeholder="Post something!"></textarea>
                    </div>

                    <div class="modal-footer border-0 p-2">
                        <!-- <button type="button" class="btn btn-secondary" id="editPostModalCloseButton">Close</button> -->
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit User Form -->
                <form id="editUserForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="is_admin">Admin Rights</label>
                        <select class="form-control" id="is_admin" name="is_admin">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    #success-alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
    }

    #custom-button {
        padding: 10px;
        color: white;
        background-color: black;
        border: 1px solid white;
        border-radius: 5px;
        cursor: pointer;
    }

    #custom-button:hover {
        color: red;
    }

    .table-bordered td,
    .table-bordered thead th {
        background-color: transparent;
        text-align: center;
        align-items: center;
    }

    .table-bordered td,
    .table-bordered th {
        border-color: black;
    }

    .table-bordered thead th {
        background-color: white;
        font-size: 2rem;
    }

    .table-bordered-black td,
    .table-bordered-black th {
        border-color: black !important;
    }
</style>

<script>
    //success alert and error alert
    window.onload = function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
            $('.alert-danger').fadeOut('slow');
            $('#status-alert').fadeOut('slow');

        }, 3000); // 3 seconds
    }

    //creating post

    //click event in choose file
    document.getElementById('custom-button').addEventListener('click', function() {
        document.getElementById('file').click();
    });

    document.getElementById('file').addEventListener('change', function() {
        var fileName = document.getElementById('file').value.split('\\').pop();
        document.getElementById('file-name').textContent = fileName ? fileName : "No file chosen";
    });

    //updating post


    //click event in choose file
    document.getElementById('edit-custom-button').addEventListener('click', function() {
        document.getElementById('edit-file').click();
    });

    document.getElementById('edit-file').addEventListener('change', function() {
        var fileName = document.getElementById('edit-file').value.split('\\').pop();
        document.getElementById('edit-file-name').textContent = fileName ? fileName : "No file chosen";
    });

    //value on input when edited
    $(document).ready(function() {
        $('.edit-button').click(function() {
            var postId = $(this).data('id');
            var postBody = $(this).data('body');
            $('#edit-id').val(postId);
            $('#edit-body').val(postBody);
            $('#editPostModal').modal('show');
        });

        $('#editPostModalCloseButton').click(function() {
            $('#editPostModal').modal('hide');
        });
    });

    //hide comment section
    document.getElementById('comment-button').addEventListener('click', function() {
        var commentSection = document.getElementById('comment-section');
        if (commentSection.style.display === "none") {
            commentSection.style.display = "block";
        } else {
            commentSection.style.display = "none";
        }
    });

    //user list button
    function showUsers() {
        document.getElementById('sections-to-hide').style.display = "none";
        document.getElementById('user-table').style.display = "block";
    }

    function showMainPage() {
        document.getElementById('sections-to-hide').style.display = "block";
        document.getElementById('user-table').style.display = "none";
    }

    //edit user modal
    function openEditModal(id, username, isAdmin) {
        document.getElementById('editUserForm').action = '/user/' + id;
        document.getElementById('username').value = username;
        document.getElementById('is_admin').value = isAdmin;
    }
</script>

@stop
