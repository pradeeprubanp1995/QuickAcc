@include('dashboard.header')
@extends('dashboard.leftpanel')
@section('content')


<style type="text/css">
	.table thead th 
	{
		font-weight: bolder !important;
	}
</style>


<div class="row">
		<div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
	<h1>Generate</h1>
    <br />
    @if (\Session::has('success'))
	<div class="alert alert-success">
	<p>{{ \Session::get('success') }}</p>
	</div><br />
	@endif
	@if (\Session::has('warning'))
	<div class="alert alert-warning">
	<p>{{ \Session::get('warning') }}</p>
	</div><br />
	@endif
	@if (\Session::has('danger'))
	<div class="alert alert-danger">
	<p>{{ \Session::get('danger') }}</p>
	</div><br />
	@endif
    
    <a href="{{route('admin.add_generate')}}"><button type="button" class="btn btn-primary" style="float:right;margin:10px;">+ Add Generate</button></a>
	<table class="table datatable_simple" style="clear:both;float:none;" width="100%">
		<thead>
			<tr>
				<th>S.No</th>
				
		    	<th>Services</th>
		    	<th>Name</th>
		    	<th>User Name</th>
		    	<th>Password</th>
		    	<!-- <th colspan=2>Actions</th> -->
            </tr>
		</thead>
		<tbody>
			@foreach($dept_data as $key => $data)
			<tr>

				<td>{{ $key+1 }}</td>
				
				<td>{{ ucfirst($data->service_name) }}</td>
				<td>{{ ucfirst($data->gname) }}</td>
				<td>{{ ucfirst($data->username) }}</td>
				<td>{{ ucfirst($data->password) }}</td>
				


				<!-- <td>
				<a href="{{ url('/admin/department/edit/'.$data->gen_id) }}"  class="btn btn-warning editt"><i class="fa fa-edit"></i>Edit</a>
				<td>
					<form action="{{ url('/admin/gen_delete/'.$data->gen_id) }}" method="get">
						<button class="btn  btn-danger" type="submit" name="remove_levels" value="delete" data-toggle="modal" data-target="#deleteModal" data-deptname="{{$data->service_name}}"><i class="fa fa-trash-o"></i>Delete</span>
						</button>
					</form>
				</td> -->


			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $dept_data->links() }}
</div>
</div>
</div>
</div>

  <!-- Add Modal-->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel">Add a New Department</h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">×</span>
	          </button>
            </div>
           <div>
            <form id="for" method="post" action="{{route('admin.depart_add')}}">
         	 {{ csrf_field() }}
	         <div class="modal-body">
	           <div>Name :</div>
	          	<input type="text" name="dept_name" id="dept_name" placeholder=" Add Department" style="width:100%;height: 39px;"/>
	      	 </div>
	         <div class="modal-footer">
	            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	            <button class="btn btn-primary" type="submit">Add</button>
            </div>
           </form>
          </div>
         </div>
        </div>
    </div>

    <!-- Edit Modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form id="edit-depart-form" method="post">
         	{{ csrf_field() }}
         	<div class="modal-body">
          	<input type="text" name="dept_name" id="dept_name_edit" placeholder=" Add Department" style="width:100%;height: 39px;"/>
      		</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary confirm-btn" type="submit">Update</button>
          </div>
         </form>
        </div>
      </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Notification</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div> -->
          <div class="modal-body">Do you want to delete <span id='data'><span></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" type="button" data-dismiss="modal" id="delete">Delete</a>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    	$(document).ready(function () {

		    // edit modal
		    $('.edit').on('click', function (evn) 
		    { // this is the "a" tag
			    evn.preventDefault();
			    var $updateModal = $('#editModal');
			    // $updateModal.modal('show');
			    var department = $(this).data('deptname');
			    var resourceId = $(this).data('itemId'),
			        $pressedButton = $(this);
			        $('#dept_name_edit').val(department);


			    $updateModal.find('.confirm-btn').on('click', function (e) 
			    {
			        e.preventDefault();
			        var submitUrl = '/admin/department/edit/' + resourceId,
			            form = $('#edit-depart-form'); // change with your form

			        form.attr('action', submitUrl);
			        form.submit();
			    });
		  	});
		    // delete modal
		    $('button[name="remove_levels"]').on('click', function(e) 
		    {
		    	var department = $(this).data('deptname');
		    	var data = '"'+department+'" ?';
		    	 $('#data').html(data);
			      var $form = $(this).closest('form');
			      e.preventDefault();
			      $('#deleteModal').one('click', '#delete', function(e) 
			      {
			          $form.trigger('submit');
			       });
		    });
		});
    </script>
@include('dashboard.footer')
@endsection