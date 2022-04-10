export default class Navigation {
	constructor() {
		this.toggleButton = document.querySelector(".nav__toggle");
		this.navigation = document.querySelector(".nav__links");
		this.events();
	}

	events() {
		this.toggleButton.addEventListener("click", () => this.handleToggle());
	}

	handleToggle() {
		if (this.toggleButton.getAttribute("aria-expanded") === "true") {
			this.closeNavigation();
		} else {
			this.openNavigation();
		}
	}

	openNavigation() {
		this.toggleButton.setAttribute("aria-expanded", "true");
		document.body.classList.add("nav-open");
	}

	closeNavigation() {
		this.toggleButton.setAttribute("aria-expanded", "false");
		document.body.classList.remove("nav-open");
	}
}
