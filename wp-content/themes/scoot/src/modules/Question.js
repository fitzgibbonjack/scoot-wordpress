export default class Question {
	constructor() {
		this.headers = document.querySelectorAll(".question__header");
		this.events();
	}

	events() {
		this.headers.forEach((header) => {
			header.addEventListener("click", (event) => this.handleToggle(event));
		});
	}

	handleToggle(event) {
		const question = event.currentTarget.parentElement;
		question.classList.toggle("question--open");
	}
}
