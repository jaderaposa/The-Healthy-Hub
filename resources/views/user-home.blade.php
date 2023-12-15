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

<div id="side-bar">
    <div>
        <div class="box4">
            <div class="group">
                <div>
                    <div class="div">
                        <img class="house-chimney" alt="House chimney" src="img/house-chimney-1.png" />
                        <div class="text-wrapper">Home</div>
                    </div>
                </div>
                <div>
                    <div class="div">
                        <img class="fire-flame-curved" alt="Fire flame curved" src="img/fire-flame-curved-1-1.png" />
                        <div class="text-wrapper">Popular</div>
                    </div>
                </div>
                <div>
                    <div class="div">
                        <img class="fire-flame-curved" alt="Fire flame curved" src="img/control-panel.png" />
                        <div class="text-wrapper">Dashboard</div>
                    </div>
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
                    <img src="img/funny-food.png" alt="funny food" style="width: 45px;height:45px" />
                    <p class="textshadowgodz" style="margin: 0;">{{ $post->user->username }}&nbsp;&nbsp;|&nbsp;&nbsp;{{ $post->created_at->diffForHumans() }}</p>
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
                <p>{{ $post->body }}</p>
            </div>
            <hr style="border: 1px solid black;">
            <div class="row-tabi-ini gap-3 d-flex">
                <button type="button" class="btn btn-primary">Like</button>
                <button type="button" class="btn btn-info">Comment</button>
                <button type="button" class="btn btn-secondary">Share</button>
            </div>
        </div>
        @endforeach
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
</style>

<script>
    //success alert and error alert
    window.onload = function() {
        setTimeout(function() {
            $('#success-alert').fadeOut('slow');
            $('.alert-danger').fadeOut('slow');
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
</script>

@stop
