@extends('layouts.admin')

@section('content')
<div id="main" style="margin-top: 80px;">

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="pull-left " style="display: inline-block">Input Information</h4>
				<a href="javascript:void(0);" wire:click="create_post" class="btn btn-success" style="float: right">Create Post</a>
            </div>
            <div class="card-content">
                <div class="card-body">
  <div class="table-responsive">
	<table class="table align-items-center table-flush display" id="table1">
					<thead >
					  <tr>
						<th scope="col">#</th>
					  
						<th scope="col">Image</th>
					   
						<th scope="col">author</th>
						<th scope="col">Title</th>
                        <th scope="col">Blog</th>

                        <th scope="col">Date</th>
                        <th scope="col">Action</th>


					  </tr>
					</thead>
					<tbody>
					
					 @isset($blogs)
					<?php $i=0 ;?>                            
					 @foreach($blogs as $blog) 
	
	
	
	
	 
	
														<tr>
															<td>{{$i++}}</td>
                                                            
															<td>{{$blog->image}}</td>
                                                            <td>{{$blog->author}}</td>
                                                            <td>{{$blog->title}}</td>

                                                            <td><a href="">{{substr($blog->body, 0, 30)}}</a></td>
                                                            <td>{{$blog->created_at}}</td>
						   <td >
						   <a style="  padding: 1px;font-size: 16px;border-radius: .2rem;" href="#" class="btn btn-success btn-sm" data-toggle="modal"
						   data-target="#edit_group" ><i class="bi bi-pen"></i></a>
						   
							<a style="  padding: 1px;font-size: 16px;border-radius: .2rem;"  href="{" class="btn btn-danger btn-sm"> <i class="bi bi-trash"></i></a>
						</td>
					 
					  
	</tr>
    @endforeach
    @endisset
                    </tbody>

    </table>
	</div>
</div>
</div>
</div>
</div>

<footer>
<div class="footer clearfix mb-0 text-muted">
<div class="float-start">
    <p>2021 &copy; Soeng Souy</p>
</div>
<div class="float-end">
    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
    href="http://soengsouy.com">Soeng Souy</a></p>
</div>
</div>
</footer>
</div>
@endsection