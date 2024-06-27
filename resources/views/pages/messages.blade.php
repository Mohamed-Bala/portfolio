  
  <div class="table-responsive">
	<table class="table align-items-center table-flush display" id="table_id">
					<thead >
					  <tr>
						<th scope="col">#</th>
					  
						<th scope="col">Group Name  </th>
					   
						<th scope="col">Permissions</th>
						<th scope="col">Action</th>
					  </tr>
					</thead>
					<tbody>
					
					@isset($groups)
					<?php $i=0;?>                            
					 @foreach($groups as $group)
	
	
	
	<!--edit mymodal--->
	
	<div class="modal fade" class="edit_group" id="edit_group{{$group->id}}" role="dialog">
		<div class="modal-dialog">
		
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <h4 class="breadcrumb">  Update Group  </h4>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
	
	
			<div class="modal-body">
			   
					<div class="pl-lg-4">
					  <div class="row">
					  <form method="post" action="{{route('update_groups',$group->id)}}">
		@csrf
			<input type="hidden" value="{{$group->id}}" id="id" name="id">
			
					  
					  <div class="col-lg-6">
						<div class="form-group">
							<label class="form-control-label" for="input-username">Group Name  </label>
							<input type="text" id="name" name="name" class="form-control form-control-alternative" placeholder="Group Name " value="{{$group->group_name}}" required>
							@error('name')
								<span id="nameError" class="text-danger">{{$message}}</span>
							  @enderror
						  </div>
						</div>
	
	
					  
					   
					  
		<!-- row-->  </div>
	
		<div class="modal-footer">
		<button type="submit" class="btn btn-success">
														<i class="la la-check-square-o"></i> Save
													</button>
	
	  
		 <!--modal-footer--></div>
		 </form>
		<!--pl-lg-4--> </div>
	  <!-- modal-body--></div>
	 <!-- Modal content--></div>
	<!-- modal-dialog--> </div>
	 <!-- modal fadet--></div>
	
	
	 
	
														<tr>
															<td>{{++$i}}</td>
														  
															<td>{{$group->group_name}}</td>
															  <td><a href="{{route('permissions_en',$group->id)}}" class="btn btn-success btn-sm" >Permissions</a>
						   </td>
						   <td >
						   <a href="#" class="btn btn-success btn-sm" data-toggle="modal"
						   data-target="#edit_group{{$group->id}}" >Update</a>
						   
							<a href="{{route('delete_groups',$group ->id)}}" class="btn btn-danger btn-sm"> Delete</a>
						</td>
					 
					  
	</tr>
	
	</div>
	