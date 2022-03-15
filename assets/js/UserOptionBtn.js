function focusBtn(id) {
	const userLogin = document.getElementById(id);
	const nameForm = document.getElementById("nameForm");

	userLoginSelected = userLogin.classList.value.includes("selected-ub");
	if (!userLoginSelected) {
		userLogin.classList.toggle("selected-ub");
		nameForm.classList.toggle("showNameForm");
		let otherId;

		if (id === "userOptionLogin") {
			otherId = "userOptionRegister";
		} else {
			otherId = "userOptionLogin";
		}

		const otherUserLogin = document.getElementById(otherId);
		otherUserLogin.classList.toggle("selected-ub");
	}
}
