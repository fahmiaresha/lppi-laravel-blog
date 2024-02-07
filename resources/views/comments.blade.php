@extends('layouts.template')
@section('title','Comments - Blog')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<br><br><br><br>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="">Manage Comments</h1>
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCommentModal">
                Add Comment
            </button>
            <!-- Tambah Komentar Modal -->
            <div class="modal fade" id="addCommentModal" tabindex="-1" aria-labelledby="addCommentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/comments" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCommentModalLabel">Add New Comment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Title</label>
                                    <select class="form-select" id="post_id" name="post_id" required>
                                        @foreach($posts as $pt)
                                        <option value="{{ $pt->post_id }}">
                                            {{ $pt->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table id="commentsTable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->comment_id }}</td>
                        <td>{{ $comment->title }}</td>
                        <td>{{ $comment->content }}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCommentModal{{ $comment->comment_id }}">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCommentModal{{ $comment->comment_id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <!-- Modal untuk Edit Komentar -->
                    <div class="modal fade" id="editCommentModal{{ $comment->comment_id }}" tabindex="-1" aria-labelledby="editCommentModalLabel{{ $comment->comment_id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/comments/{{ $comment->comment_id }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCommentModalLabel{{ $comment->comment_id }}">Edit Comment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="post_id" class="form-label">Category</label>
                                            <select class="form-select" id="post_id" name="post_id" required>
                                                @foreach($posts as $pt)
                                                <option value="{{ $pt->post_id }}" {{ $comment->post_id == $pt->post_id ? 'selected' : '' }}> {{ $pt->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_content" class="form-label">Content</label>
                                            <textarea class="form-control" id="edit_content" name="content" required>{{ $comment->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal untuk Konfirmasi Hapus Komentar -->
                    <div class="modal fade" id="deleteCommentModal{{ $comment->comment_id }}" tabindex="-1" aria-labelledby="deleteCommentModalLabel{{ $comment->comment_id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteCommentModalLabel{{ $comment->comment_id }}">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this comment?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <!-- Form untuk menghapus komentar -->
                                    <form action="/comments/{{ $comment->comment_id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
<br>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#commentsTable').DataTable();
    });
</script>
@endsection