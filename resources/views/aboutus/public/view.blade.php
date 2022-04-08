<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Descriptions', (isset($fields['descriptions']['language'])? $fields['descriptions']['language'] : array())) }}</td>
						<td>{{ $row->descriptions}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission', (isset($fields['mission']['language'])? $fields['mission']['language'] : array())) }}</td>
						<td>{{ $row->mission}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vision', (isset($fields['vision']['language'])? $fields['vision']['language'] : array())) }}</td>
						<td>{{ $row->vision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Happy Clients', (isset($fields['happy_clients']['language'])? $fields['happy_clients']['language'] : array())) }}</td>
						<td>{{ $row->happy_clients}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Project Done', (isset($fields['project_done']['language'])? $fields['project_done']['language'] : array())) }}</td>
						<td>{{ $row->project_done}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Skilled Exparts', (isset($fields['skilled_exparts']['language'])? $fields['skilled_exparts']['language'] : array())) }}</td>
						<td>{{ $row->skilled_exparts}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Media Post', (isset($fields['media_post']['language'])? $fields['media_post']['language'] : array())) }}</td>
						<td>{{ $row->media_post}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ex 1', (isset($fields['ex_1']['language'])? $fields['ex_1']['language'] : array())) }}</td>
						<td>{{ $row->ex_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ex 2', (isset($fields['ex_2']['language'])? $fields['ex_2']['language'] : array())) }}</td>
						<td>{{ $row->ex_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:status:id:title') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	