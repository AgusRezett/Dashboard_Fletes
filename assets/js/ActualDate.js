function getCurrentDate(id) {
	const fechapedido = document.getElementById(id);
	let today = new Date();
	const dd = String(today.getDate()).padStart(2, "0");
	const mm = String(today.getMonth() + 1).padStart(2, "0"); //January is 0. Format 1-12 not 0-11
	const yyyy = today.getFullYear();

	today = yyyy + "-" + mm + "-" + dd;
	fechapedido.value = today;
}
