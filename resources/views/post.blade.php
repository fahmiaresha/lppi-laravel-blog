@extends('layouts.template')
@section('title','Posts - Blog')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<br><br><br><br>
@endsection

@section('script')

@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Welcome To Dashboard!</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h2>Data Posts</h2>
                <!-- Tambahkan button untuk Add New Post di dalam card body -->
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addPostModal">
                    Add New Post
                </button>

                <table id="postsTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image URL</th>
                            <th>Category Name</th>
                            <th>Username</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->post_id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->image_url }}</td>
                            <td>{{ $post->category_name }}</td>
                            <td>{{ $post->username }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <!-- Tombol untuk membuka modal edit -->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPostModal{{ $post->post_id }}">
                                    Edit
                                </button>

                                <!-- Modal untuk Edit Post -->
                                <div class="modal fade" id="editPostModal{{ $post->post_id }}" tabindex="-1" aria-labelledby="editPostModalLabel{{ $post->post_id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editPostModalLabel{{ $post->post_id }}">Edit Post</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form untuk Edit Post -->
                                                <form action="/posts/{{ $post->post_id }}" method="post">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="edit_title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="edit_title" name="edit_title" value="{{ $post->title }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="edit_content" class="form-label">Content</label>
                                                        <textarea class="form-control" id="edit_content" name="edit_content" rows="3" required>{{ $post->content }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="edit_image_url" class="form-label">Image URL</label>
                                                        <input type="text" class="form-control" id="edit_image_url" name="edit_image_url" value="{{ $post->image_url }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="edit_category_id" class="form-label">Category</label>
                                                        <select class="form-select" id="edit_category_id" name="edit_category_id" required>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->category_id }}" {{ $category->category_id == $post->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePostModal{{ $post->post_id }}">
                                    Delete
                                </button>

                                <div class="modal fade" id="deletePostModal{{ $post->post_id }}" tabindex="-1" aria-labelledby="deletePostModalLabel{{ $post->post_id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deletePostModalLabel{{ $post->post_id }}">Confirm Deletion</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this post?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                                <!-- Form untuk menghapus kategori -->
                                                <form action="/posts/{{ $post->post_id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>



                <!-- Tabel dan kontennya tetap sama seperti sebelumnya -->

                <!-- Modal untuk Add New Post -->
                <div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="addPostModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addPostModalLabel">Add New Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form untuk Add New Post -->
                                <form action="/posts" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image_url" class="form-label">Image URL</label>
                                        <input type="text" class="form-control" id="image_url" name="image_url" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            @foreach($categories as $ct)
                                            <option value="{{ $ct->category_id }}">
                                                {{ $ct->category_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#postsTable').DataTable();
        });
    </script>
</body>

</html>