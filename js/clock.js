/**
 * Created by Jurii on 16.04.2015.
 */


$(document).ready(function () {

	var monthNames = ["������", "�������", "�����", "������", "���", "����", "����", "�������", "��������", "�������", "������", "�������"];
	var dayNames = ["�����������", "�����������", "�������", "�����", "�������", "�������", "�������"];

	var newDate = new Date();

	newDate.setDate(newDate.getDate());

	$('#Date').html("<b>" + dayNames[newDate.getDay()] + "</b><br>" + newDate.getDate() + " " + monthNames[newDate.getMonth()] + " " + newDate.getFullYear());

	setInterval(function () {

		var seconds = new Date().getSeconds();

		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	}, 1000);

	setInterval(function () {

		var minutes = new Date().getMinutes();

		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
	}, 1000);

	setInterval(function () {

		var hours = new Date().getHours();

		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
	}, 1000);

});
