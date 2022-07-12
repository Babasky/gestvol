<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Document</title>
</head>
<body>

{{-- Debut Modal ajouter --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un avion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <form action="{{ action('VolController@store') }}" method="POST"> 
        {{ csrf_field() }}

            <div class="modal-body">
            
                    <div class="form-group">
                        <label  class="form-label">Code du vol</label>
                        <input type="text" class="form-control" name="codevol" placeholder="Entrez le code du vol">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Date du départ</label>
                        <input type="date" class="form-control" name="date_depart" placeholder="Entrez la date de depart">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Heure de départ</label>
                        <input type="time" name="heure_depart" placeholder="heure de depart">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Destination</label>
                        <input type="text" class="form-control" name="destination" placeholder="Entrez le lieu de destination">
                    </div>
                    <div class="form-group">
                        <label class="form-label">places classe A</label>
                        <input type="number" class="form-control" name="nb_classa">
                    </div>
                    <div class="form-group">
                        <label class="form-label">places classe B</label>
                        <input type="number" class="form-control" name="nb_classb">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prix classe A</label>
                        <input type="number" class="form-control" name="prix_classa">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prix classe B</label>
                        <input type="number" class="form-control" name="prix_classb">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
  </div>    
</div>
{{-- Fin Modal ajouter --}}

{{-- Debut Modal Editer --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifié les information du vol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <form action='/vol' method="POST" id="editForm"> 
        {{ csrf_field() }}
        {{method_field('PUT')}}

            <div class="modal-body">
            
                    <div class="form-group">
                        <label  class="form-label">Code du vol</label>
                        <input type="text" class="form-control" id="codevol" name="codevol" placeholder="Entrez le code du vol">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Date du départ</label>
                        <input type="date" class="form-control" id="date_depart" name="date_depart" placeholder="Entrez la date de depart">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Heure de départ</label>
                        <input type="time" class="form-control" name="heure_depart" id="heure_depart" placeholder="heure de depart">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Entrez le lieu de destination">
                    </div>
                    <div class="form-group">
                        <label class="form-label">places classe A</label>
                        <input type="number" class="form-control" name="nb_classa" id="nb_classa">
                    </div>
                    <div class="form-group">
                        <label class="form-label">places classe B</label>
                        <input type="number" class="form-control" name="nb_classb" id="nb_classb">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prix classe A</label>
                        <input type="number" class="form-control" name="prix_classa" id="prix_classa">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Prix classe B</label>
                        <input type="number" class="form-control" name="prix_classb" id="prix_classb">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Modifier</button>
            </div>
        </form>
    </div>
  </div>    
</div>
{{-- Fin Modal Editer --}}



{{--Debut Modal Supprimer--}}

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer un avion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <form action='/vol' method="POST" id="deleteForm"> 
        {{ csrf_field() }}
        {{method_field('DELETE')}}

            <div class="modal-body">
                <input type="hidden" name="_method" value="Delete">
                <p>Êtes-vous sûr de vouloir supprimer cet element ?</p>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Oui! supprimer</button>
            </div>
        </form>
    </div>
  </div>    
</div>


{{--Fin Modal Supprimer--}}


{{--Début Modal voir détail--}}


<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informations de l'avion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <form action='/vol' method="POST" id="showForm"> 
        {{ csrf_field() }}
        {{method_field('SHOW')}}

            <div class="modal-body">
                <p></p>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
            </div>
        </form>
    </div>
  </div>    
</div>

{{--Début Modal voir détail--}}

<div class="container-fluid">
        <h1>Liste des vols</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

        <a href="/passager" class="btn btn-primary float-end">Reservations</a>

        
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter un avion
        </button><br><br>
       

        <table id="datatable" class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Codevol</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Place classe A</th>
                    <th scope="col">Place classe B</th>
                    <th scope="col">Prix classe A</th>
                    <th scope="col">Prix classe B</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tfoot>
                <tr>
                <th scope="col">ID</th>
                    <th scope="col">Codevol</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Destination</th>
                    <th scope="col">PlaceclassA</th>
                    <th scope="col">PlaceclassB</th>
                    <th scope="col">PrixclassA</th>
                    <th scope="col">PrixclassB</th>
                    <th scope="col">Action</th>

                </tr>
            </tfoot>
            <tbody>
                @foreach($avions as $avion)
                <tr>
                    <td>{{ $avion->id }}</td>
                    <td>{{ $avion->codevol }}</td>
                    <td>{{ $avion->date_depart }}</td>
                    <td>{{ $avion->heure_depart }}</td>
                    <td>{{ $avion->destination }}</td>
                    <td>{{ $avion->nb_classa }}</td>
                    <td>{{ $avion->nb_classb }}</td>
                    <td>{{ $avion->prix_classa }}</td>
                    <td>{{ $avion->prix_classb }}</td>
                    <td>
                        <a class="edit" style="margin-right: 10px; color:green;"><i class="fa-solid fa-pen"></i></a>
                        <a class="delete" style="margin-left: 5px; color:red;"><i class="fa-solid fa-trash-can"></i></a>
                        <a class="show" style="margin-left: 10px;"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <!-- Button trigger modal -->


<!-- Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function(){
            var table = $('#datatable').DataTable();
            // Start Edit record
            table.on('click','.edit',function(){
                $tr = $(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#codevol').val(data[1]);
                $('#date_depart').val(data[2]);
                $('#heure_depart').val(data[3]);
                $('#destination').val(data[4]);
                $('#nb_classa').val(data[5]);
                $('#nb_classb').val(data[6]);
                $('#prix_classa').val(data[7]);
                $('#prix_classb').val(data[8]);

                $('#editForm').attr('action','/vol/'+data[0]);
                $('#editModal').modal('show');
            })
        })
        // script de suppression

        $(document).ready(function(){
            var table = $('#datatable').DataTable();
        
            table.on('click','.delete',function(){
                $tr = $(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                //$('#id').val(data[0]);

                $('#deleteForm').attr('action','/vol/'+data[0]);
                $('#deleteModal').modal('show');
            })
        })

        $(document).ready(function(){
            var table = $('#datatable').DataTable();
        
            table.on('click','.show',function(){
                $tr = $(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                

                $('#showForm').attr('action','/vol/'+data[0]);
                $('#showModal').modal('show');
            })
        })
    </script>
</body>
</html>