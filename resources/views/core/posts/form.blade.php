@extends('layouts.app')

@section('content')
<div class="page-header"><h2>  {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>
<div class="toolbar-nav">
	<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-sm  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 

</div>	

<div class="p-5">


		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>			
			
		
		 {!! Form::open(array('url'=>'cms/posts?return='.$return, 'class'=>'form-vertical validated','files' => true )) !!}
		 <div class="row">
			<div class="col-md-9">

						<ul class="nav nav-tabs form-tab" >
						  <li class="nav-item"><a href="#info" data-toggle="tab" class="nav-link active"> Page Content </a></li>
						  <li class="nav-item"><a href="#meta" data-toggle="tab" class="nav-link" > Place & Short-escription </a></li>
						  <li class="nav-item"><a href="#image" data-toggle="tab" class="nav-link"> Images </a></li>
						</ul>	

					<div class="tab-content  bg-white">
						  <div class="tab-pane active m-t" id="info">

							{!! Form::hidden('pageID', $row['pageID']) !!}		
							{!! Form::hidden('pagetype', 'post') !!}
							{!! Form::hidden('pageID', $row['pageID']) !!}		
							<div class="form-group  " >
							<label > Categories    </label>									
							  <select class="form-control form-control-sm" name="cid">
							  	<option value=""> -- Select Category -- </option>
							  	@foreach($categories as $cat)
							  		<option value="{{ $cat->cid }}" @if($cat->cid == $row['cid']) selected @endif >{{ $cat->name }}</option>
							  	@endforeach

							  </select>			
						  </div> 

									  <div class="form-group  " >
										<label > Post Title    </label>									
										  {!! Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 						
									  </div> 					
									  <div class="form-group  " >
										<label for="ipt" class=" btn-success  btn btn-sm">  {!! url('post/read/')!!}  </label>							
											 
										  {!! Form::text('alias', $row['alias'],array('class'=>'form-control input-sm', 'placeholder'=>'', 'style'=>'width:150px; display:inline-block;'   )) !!} 						
											
									  </div> 					
									  <div class="form-group  " >
										<label > Post Content    </label>							
										  <textarea name='note' rows='25' class='form-control editor'  
				           >{{ $row['note'] }}</textarea> 						
									  </div> 					
									   					
							</div>
							<div class="tab-pane m-t" id="meta">		  					
									  <div class="form-group  " >
										<label > Event Place    </label>
										 <textarea name='metakey' rows='5' id='metakey' class='form-control '  
				           >{{ $row['metakey'] }}</textarea> 						
									  </div> 					
									  <div class="form-group  " >
										<label > Event Short-Descripiton    </label>									
										  <textarea name='metadesc' rows='5' id='metadesc' class='form-control '  
				           >{{ $row['metadesc'] }}</textarea> 						
									  </div> 	
							</div>

							<div class="tab-pane m-t" id="image">
								<div class="form-group  " >
									<label > Images    </label>
									<input type="file" name="image"></input> 	
									{!! SiteHelpers::showUploadedFile($row['image'],'/uploads/images/') !!}					
								  </div>


							</div>

					</div>	
			</div>
			
			<div class="col-md-3">
						
							  <div class="form-group  " >
								<label> Post Status :  </label>
								<div class="">					
								  <input  type='radio' name='status'  value="enable" required class="minimal-green" 
								  @if( $row['status'] =='enable')  	checked	  @endif				  
								   /> 
								  <label>Enable</label>
								</div> 
								<div class="">					
								  <input  type='radio' name='status'  value="disable" required class="minimal-green" 
								   @if( $row['status'] =='disable')  	checked	  @endif				  
								   /> 
								  <label>Disabled</label>
								</div> 					 
							  </div>									
									   					
									  <div class="form-group  " >
										<label for="ipt" class=" control-label "> Event Date-Time    </label>								  
										<div class="input-group m-b" style="width:150px !important;">
											<div class="input-group m-b" style="width:150px !important;">
												<input type="datetime-local" name='created' value="{{ $row['created']}}" class="form-control", style='width:150px !important;'>
											</div>	
										</div>				 						
									  </div> 					

									  <div class="form-group  " >
									  <label for="ipt"> Who can view this page ? </label>
										@foreach($groups as $group) 
										<div class="">					
										  <input  type='checkbox' name='group_id[{{ $group['id'] }}]'    value="{{ $group['id'] }}"
										  @if($group['access'] ==1 or $group['id'] ==1)
										  	checked
										  @endif
										  class="minimal-green" 				 
										   /> 
										  <label>{{ $group['name'] }}</label>
										</div>  
										@endforeach	
											  
									  </div>
 		
									   <div class="form-group  " >
										<label> Show for Guest ? unlogged  </label>
										<div class=""><input  type='checkbox' name='allow_guest'  class="minimal-green" 
					 						@if($row['allow_guest'] ==1 ) checked  @endif	
										   value="1"	/> <label>Allow Guest ?  </lable>
										   </div>
									  </div>		

									  <div class="form-group  " >
										<label>  Set as Headline </label>
										<div class=""><input  type='checkbox' name='headline'  class="minimal-green" 
					 						@if($row['headline'] ==1 ) checked  @endif	
										   value="1"	/> <label> headline   </lable>
										   </div>
									  </div>	



				<div class="form-group  " >
					<label > Labels    </label>									
					  <textarea name='labels' rows='2' id='labels' class='form-control '>{{ $row['labels'] }}</textarea> 						
				</div>


					
				  <div class="form-group">
					
					<button type="submit" name="apply" class="btn btn-info btn-sm btn-flat" ><i class="icon-checkmark-circle2"></i> Apply</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm btn-flat" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('cms/posts?return='.$return) }}' " class="btn btn-warning btn-sm btn-flat"><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
						
				</div>	

			
			</div>
			<div style="clear:both;"></div> 
			<input type="hidden" name="action_task" value="save" />
		</div>	
		 {!! Form::close() !!}	
	 
</div>	
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("posts/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>	
			 
@stop