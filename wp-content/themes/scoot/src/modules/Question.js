export default class Question {
	constructor() {
		this.questions = document.querySelectorAll(".question");
		this.headers = document.querySelectorAll(".question__header");
		this.toggles = document.querySelectorAll(".question__toggle");
		this.events();
	}

	events() {
		this.headers.forEach((header) => {
			header.addEventListener("click", (event) => this.handleToggle(event));
		});
	}

	handleToggle(event) {
		const question = event.currentTarget.parentElement;
		if (question.classList.contains("question--open")) {
			this.closeAnswer(question);
		} else {
			this.openAnswer(question);
		}
	}

	openAnswer(question) {
		question.classList.add("question--open");
	}

	closeAnswer(question) {
		question.classList.remove("question--open");
	}
}
