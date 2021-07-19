var urlBranch, urlSearch;
var table, tableData;

$(function () {
	urlSearch = '/dias/form/cariFormSkuy';
	urlBranch = '/dias/api/cabang/select';

	$('#daterange').daterangepicker();
	table = $("#table");

	$('select[id="cabang"]').select2({
		placeholder: "Pilih Cabang...",
		allowClear: true,
		theme: 'bootstrap4',
		ajax: {
			url: urlBranch,
			dataType: 'json',
			delay: 250,
			data: function (params) {
				return {
					search: params.term
				};
			},
			processResults: function (data) {
				return {
					results: data
				};
			}
		}
	});

	$('#table').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
	});

	$( "#formCari" ).submit(function( event ) {
		event.preventDefault();

		tableData = table.DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"destroy": true,
			"ajax" : {
				"url" : urlReads,
				"type" : 'GET',
				"data": function ( data ) {
					data.startdates = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD');
					data.enddates = $('#daterange').data('daterangepicker').startDate.format('YYYY-MM-DD');
					data.cabang = $( "#cabang" ).val();
				}
			},
			"order": [[ 1, "asc" ]],
			"columns" :[
				{
					"class":          "details-control",
					"orderable":      false,
					"data":           null,
					"defaultContent": ""
				},
				{"data" : "no"},
				{"data" : "ukode"},
				{"data" : "utipe"},
				{"data" : "GKODE"},
				{"data" : "ucreated"},
				{"data" : "umodifd"}
			],
			"initComplete": function(settings, json) {}
		});
	});
});