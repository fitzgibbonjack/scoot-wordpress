export default class Navigation {
	constructor() {
		this.toggleButton = document.querySelector(".header__toggle");
		this.navigation = document.querySelector(".header__links");
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
		window.addEventListener("resize", () => this.closeNavigation());
		this.toggleButton.setAttribute("aria-expanded", "true");
		document.body.classList.add("nav-open");
	}

	closeNavigation() {
		window.removeEventListener("resize", () => this.closeNavigation());
		this.toggleButton.setAttribute("aria-expanded", "false");
		document.body.classList.remove("nav-open");
	}
}
