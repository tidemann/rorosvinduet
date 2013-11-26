<% if Photo %>
<div class="col-md-4">
<% with Photo.SetWidth(100) %> 	
	<img src="$URL" alt="$Title" class="img-rounded"/>
<% end_with %>
</div>
<div class="col-md-8">
<% end_if %>

<% if Name %><p class="name">$Name</p><% end_if %>
<% if Title %><p class="ital">$Title</p><% end_if %>
<% if Caption %><p>$Caption</p><% end_if %>
<% if Section %><p>$Section</p><% end_if %>
<% if Tlf %><span class="glyphicon glyphicon-phone-alt"></span>$Tlf<br><% end_if %>
<% if Mob %><span class="glyphicon glyphicon-phone"></span>$Mob<br><% end_if %>
<% if Fax %><span class="glyphicon glyphicon-print"></span>$Fax<br><% end_if %>
<% if Email %><span class="glyphicon glyphicon-envelope"></span><a href="mailto:$Email">$Email</a><br><% end_if %>

<% if Photo %>
</div>
<% end_if %>
