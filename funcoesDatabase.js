
$(document).ready(function () {
	recebeDados();

	$('#form').on('submit', function formSubmit (e) {
        e.preventDefault();
		var descricao = document.getElementById('descricao').value;
		var data_limite= document.getElementById('data_limite').value;

		$.ajax({
			type: "POST",
			url: "sendData.php",
			data: {descricao:descricao, data_limite:data_limite},
			dataType: "html",
			success: function chamaFuncaoCriarTabela(data) {
				$(".tRows").remove();
	        	recebeDados();
			},
			error: function(err) {
				alert("erro");
			}
		});
		document.getElementById("x'xform").reset();
	});
});

function excluir(objeto) {
	console.log("teste: " + objeto.value);
	var id = objeto.value;
	$.ajax({
		type: "POST",
		url: "deleteData.php",
		data: {id:id},
		dataType: "html",
		success: function(data) {
			$(".tRows").remove();
        	recebeDados();
		},
		error: function(err) {
			alert("erro");
		}
	});
}

function recebeDados() {
	$.ajax({
		type: "POST",
		url: "retrieveData.php",
		dataType: "text json",
		success: function(data) {
			criaTabela(data);
        	//populaTabela(data);
		},
		error: function(err) {
			alert("erro");
		}
	});
}

function criaTabela(dados) {
	for (var i = 0; i < dados.length; i++ ) {
		var dateString = dados[i].data_limite;
		var data = new Date(dateString);
		var dia = ("0" + (data.getDate() + 1)).slice(-2);
		var mes = ("0" + (data.getMonth() +1)).slice(-2); 
		var resultado = dia + '/' + mes + '/' + data.getFullYear();
		$('#tabela').append(
			"<tr class='tRows'>" +
				"<td class='descricao'>" + dados[i].descricao + "</td>" + 
				"<td>" + resultado + "</td>" +
				"<td>" + "<button type='button' class='excluir btn btn-danger' value='" + dados[i].id + "' onclick='excluir(this)'><i class='fas fa-trash-alt'></i></button>" + "</td>" +
			"</tr>"
		);
	}
}





