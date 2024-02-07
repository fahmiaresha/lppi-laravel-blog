@extends('layouts.template')
@section('title','Home - Blog')
@section('head')


@endsection

@section('content')
<section id="in-breadcrumb" class="in-breadcrumb-section">
		<div class="in-breadcrumb-content position-relative" data-background="assets/img/bg/error-bg.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-breadcrumb-title-content position-relative headline ul-li">
					<h2>Todo App </h2>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="active-page">Todo</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<br>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="todo-form">
                <div class="input-group">
                    <input type="text" class="form-control todo-input" placeholder="Add a new todo">
                    <div class="input-group-append">
                        <button class="btn btn-success add-button" type="submit">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-3" style="background-color: #0163ea;">
        <div class="card-header" style="color: white;">
            Your Todo List
        </div>
        <ul class="list-group list-group-flush todo-items">

        </ul>
    </div>

</div>
<br>
@endsection

@section('script')
<script src="script/scripts.js"></script>
@endsection