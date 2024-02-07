$(document).ready(function () {
    const todoForm = $('.todo-form');
    const todoInput = $('.todo-input');
    const todoItemsList = $('.todo-items');

    todoItemsList.on('mouseenter', '.list-group-item', function () {
        $(this).addClass('active');
    });
    
    todoItemsList.on('mouseleave', '.list-group-item', function () {
        $(this).removeClass('active');
    });
    

    let todos = [];
    getFromLocalStorage();

    todoForm.submit(function (event) {
        event.preventDefault();
        addTodo(todoInput.val());
    });

    function addTodo(item) {
        if (item !== '') {
            const todo = {
                id: Date.now(),
                name: item,
                completed: false
            };

            todos.push(todo);
            addToLocalStorage(todos);
            todoInput.val('');
        }
    }

    function addToLocalStorage(todos) {
        localStorage.setItem('todos', JSON.stringify(todos));
        renderTodos(todos);
    }

    function renderTodos(todos) {
        todoItemsList.html('');

        if (todos.length === 0) {
            const emptyMessage = $('<li>').addClass('list-group-item text-center text-muted')
                                          .text('Your todo list is empty. Add some todos!');
            todoItemsList.append(emptyMessage);
        } else {
            todos.forEach(function (item) {
                const checked = item.completed ? 'checked' : '';

                const li = $('<li>').addClass('list-group-item item list-group-item-action').attr('data-key', item.id);

                if (item.completed) {
                    li.addClass('checked');
                }

                li.html(`
                    <input type="checkbox" class="checkbox" ${checked} style="cursor:pointer";>
                    ${item.name}
                    <button class="btn btn-danger delete-button" style="float:right;">X</button>
                `);

                todoItemsList.append(li);
            });
        }
    }

    function getFromLocalStorage() {
        const reference = localStorage.getItem('todos');
        if (reference) {
            todos = JSON.parse(reference);
            renderTodos(todos);
        }
    }

    function toggle(id) {
        todos.forEach(function (item) {
            if (item.id == id) {
                item.completed = !item.completed;
            }
        });

        addToLocalStorage(todos);
    }

    function deleteTodo(id) {
        todos = todos.filter(function (item) {
            return item.id != id;
        });

        addToLocalStorage(todos);
    }

    todoItemsList.on('click', '.checkbox', function () {
        toggle($(this).parent().attr('data-key'));
    });

    todoItemsList.on('click', '.delete-button', function () {
        deleteTodo($(this).parent().attr('data-key'));
    });
});
