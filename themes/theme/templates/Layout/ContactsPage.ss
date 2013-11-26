<div class="col-sm-12 col-md-9 content" >
	<% if Level(2) %>
		<div class="breadcrumbs">$Breadcrumbs</div>
  	<% end_if %>  
	<iframe class="img-rounded" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.no/maps?f=q&amp;source=s_q&amp;hl=no&amp;geocode=&amp;q=R%C3%B8ros+Bruk+AS,+Osloveien,+7374+R%C3%B8ros&amp;aq=0&amp;oq=R%C3%B8ros+Bruk+as++7374+R%C3%B8ros&amp;sll=61.143235,9.09668&amp;sspn=7.359178,22.214355&amp;ie=UTF8&amp;hq=R%C3%B8ros+Bruk+AS,&amp;hnear=Osloveien,+7374+R%C3%B8ros,+S%C3%B8r-Tr%C3%B8ndelag&amp;t=m&amp;ll=62.567062,11.381268&amp;spn=0.006295,0.023439&amp;iwloc=near&amp;z=13&amp;output=embed"></iframe><br>

	<div class="contact">
		<div class="clearfix contactInfo">
		  <% include Introduction %>  
		    <% include LeftRightBlocks %>
		    $Content
		</div>
		<% loop ContactGroups %>
			<% include ContactGroup %>  
		<% end_loop %>
	</div>
</div>      
<% include SideNav %>





