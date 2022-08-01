
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vol</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Gerer <b>Vols</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter </span></a>
							<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Code vol</th>
							<th>Nombre place/Classe A</th>
							<th>Prix/Affaires</th>
							<th>Nombre Place/Classe B</th>
                            <th>Prix/Business</th>
                            <th>Date depart</th>
                            <th>Heure depart</th>
							<th>Actions</th>
						</tr>
					</thead>
					
					<!-- @foreach ($vols as vol) -->
						
					
					<tbody>
					
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox2" name="options[]" value="1">
									<label for="checkbox2"></label>
								</span>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox3" name="options[]" value="1">
									<label for="checkbox3"></label>
								</span>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox4" name="options[]" value="1">
									<label for="checkbox4"></label>
								</span>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
							</td>
						</tr>					
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox5" name="options[]" value="1">
									<label for="checkbox5"></label>
								</span>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
							</td>
						</tr> 
					</tbody>
					<!-- @endforeach -->
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form id="volform" name="volform" class="form-vertical">
        
		   
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>code_vol</label>
							<input type="text" name='code' class="form-control" required>
						</div>
						<div class="form-group">
							<label>nombre _place_classe_A</label>
							<input type="text" name='nombreA' class="form-control" required>
						</div>
						<div class="form-group">
							<label>nrix_affaires</label>
							<input type="text" name='prixA' class="form-control" required>
						</div>
						<div class="form-group">
							<label>nombre_place_classe_B</label>
							<input type="text" name='nombreB' class="form-control" required>
						</div>		
                        <div class="form-group">
							<label>prix_business</label>
							<input type="text" name='prixB' class="form-control" required>
						</div>		
                        <div class="form-group">
							<label>Date_depart</label>
							<input type="date" name='Ddepart' class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Heure_depart</label>
							<input type="hour" name='Hdepart' class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-success" value="Ajouter">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			<form id="volform" name="volform" class="form-vertical">
        @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Modifier</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Code vol</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombre place/Classe A</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Prix/Affaires</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nombre place/Classe B</label>
							<input type="text" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Prix/Business</label>
							<input type="text" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Date depart</label>
							<input type="date" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label>Heure depart</label>
							<input type="hour" class="form-control" required>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-info" value="Enregistere">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Supprimer Vol</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-danger" value="Modifier">
					</div>
				</form>
			</div>
		</div>
	</div>



	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
    });
    var table = $('.vols').vols({
        processing: true,
        serverSide: true,
        ajax: "{{ route('vol.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'code_vol', name: 'code_vol'},
            {data: 'nombre_place_classe_A', name: 'nombre_place_classe_A'},
			{data: 'prix_affaire', name: 'prix_affaire'},
            {data: 'nombre_place_classe_B', name: 'nombre_place_classe_B'},
			{data: 'prix_business', name: 'prix_business'},
			{data: 'Date_depart', name: 'Date_depart'},
			{data: 'Heure_depart', name: 'Heure_depart'},


            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("create-book");
        $('#book_id').val('');
        $('#bookForm').trigger("reset");
        $('#modelHeading').html("Create New vol");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editBook', function () {
      var vol_id = $(this).data('id');
      $.get("{{ route('vol.index') }}" +'/' + book_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Book");
          $('#saveBtn').val("edit-vol");
          $('#ajaxModel').modal('show');
          $('#vol_id').val(data.id);
          $('#code_vol').val(data.code_vol);
          $('#nombre_place_classe_A').val(data.nombre_place_classe_A);
		  $('#prix_affaire').val(prix_affaire);
		  $('#nombre_place_classe_B').val(data.nombre_place_classe_B);
		  $('#prix_business').val(prix_business);
		  $('#Date_depart').val(Date_depart);
		  $('#Heure_depart').val(Heure_depart);
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#volform').serialize(),
          url: "{{ route('vol.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#volform').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deletevol', function () {
     
        var vol_id = $(this).data("id");
        confirm("Are You sure want to delete !");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('vol.store') }}"+'/'+book_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
});
</script> -->
	</body>
</html>


// <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"
//                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
//                crossorigin="anonymous">
//       </script> -->
//       <!-- Latest compiled and minified JavaScript -->
// <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
//       <script>
//          jQuery(document).ready(function(){
//             jQuery('#ajaxSubmit').click(function(e){
//                e.preventDefault();
//                $.ajaxSetup({
//                   headers: {
//                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//                   }
//               });
//                jQuery.ajax({
//                   url: "{{ url('/gestion_vol') }}",
//                   method: 'post',
//                   data: {
//                      name: jQuery('#code_vol').val(),
//                      club: jQuery('#nombre_place_class_A').val(),
//                      country: jQuery('#prix_affaire').val(),
//                      score: jQuery('#nombre_place_class_B').val(),
// 					 name: jQuery('#prix_business').val(),
// 					 name: jQuery('#Date_depart').val(),
// 					 name: jQuery('#Heure_depart').val(),

//                   },
//                   success: function(result){
//                   	if(result.errors)
//                   	{
//                   		jQuery('.alert-danger').html('');

//                   		jQuery.each(result.errors, function(key, value){
//                   			jQuery('.alert-danger').show();
//                   			jQuery('.alert-danger').append('<li>'+value+'</li>');
//                   		});
//                   	}
//                   	else
//                   	{
//                   		jQuery('.alert-danger').hide();
//                   		$('#open').hide();
//                   		$('#myModal').modal('hide');
//                   	}
//                   }});
//                });
//             });
//       </script>
//  -->
