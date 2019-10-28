const local = window.localStorage;
const todos = local.getItem('list') ? local.getItem('list').split(',') : [];

function isEmpty (todo) {
    return (todo.length === 0 || !todo.trim());
};

function fill(arr) {
	let str = '<h1 id="title">To-do list</h1>';
    arr.forEach(function (cur) {
		return str += '<div class="todo">' + cur + '</div>'
	});
    $('#ft_list').html(str + '<button id="new" name="new">New</button>');
}

fill(todos);

$('#new').click(e => {
	let todo = prompt('Fill to-do');
    if (!isEmpty(todo)) {
		$('#title').after('<div class="todo">' + todo + '</div>');
		todos.unshift(todo);
		local.setItem('list', todos);
	}
});

$('#ft_list').click(e => {
	console.log(e.target)
	if (e.target.classList.contains('todo'))
		if (confirm('Are you sure you want to delete "' + e.target.textContent + '" ?')) {
			todos.forEach(function (cur, i, arr) {
				if (cur == e.target.textContent) return arr.splice(i, 1)
			});
			local.setItem('list', todos);
			e.target.remove();
		}
});