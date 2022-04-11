export default class Header {
	constructor() {
		this.previousScrollPosition;
		this.events();
	}

	events() {
		document.addEventListener("scroll", this.handleScroll);
	}

	handleScroll() {
		const tolerance = 96;
		const scrollPosition = window.scrollY;

		if (scrollPosition > tolerance && scrollPosition > this.previousScrollPosition) {
			document.body.classList.add("header-hidden");
		} else {
			document.body.classList.remove("header-hidden");
		}

		this.previousScrollPosition = scrollPosition;
	}
}
