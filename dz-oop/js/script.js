const ajax = createAjaxObject();

// создаем AJAX объект
function createAjaxObject() {
	let ajax = null;
	try {
		ajax = new XMLHttpRequest();
		console.log("запускаю XMLHttpRequest")
	} catch (e) {
		try {
			ajax = new ActiveXObject("MicrosoftXMLHTTP");
			console.log("запускаю MicrosoftXMLHTTP")
		} catch (e) {
			alert("AJAX не поддерживается вашим браузером!")
			return false;
		}
	}
	return ajax;
}
/**
 * @param objectValues - передаваемый на сервер запрос в виде
 * JSON объекта {"key": "value"}
 * */
function ajaxRequest(objectValues) {
	let json = JSON.stringify(objectValues)
	if (ajax.readyState === 4 || ajax.readyState === 0) {
		ajax.open("POST", "handler.php", true);
		ajax.setRequestHeader("Content-type", 'application/json; charset=utf-8');
		ajax.send(json);
		ajax.onreadystatechange = () => {
			if (ajax.readyState === 4 && ajax.status === 200) {
				document.getElementById("result").innerHTML = ajax.responseText;
			}
		}
	}
}

const addProduct = () => {
	const prod_name = document.querySelector('#prod-name')
	const prod_price = document.querySelector('#prod-price')
	ajaxRequest({"prod_name": prod_name.value, "prod_price": prod_price.value})
}

const findProduct = () => {
	const find_name = document.querySelector('#find-name')
	ajaxRequest({"find_name": "find_name.value"})
}