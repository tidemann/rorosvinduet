<div class="stichline pushbottom"></div>
<div class="clearfix">
	<h4>$Title</h4>
	<% if Introduction %>
		<p>$Introduction</p>
	<% end_if %>
	<% loop Contacts %>
	<div class="col-md-6 person">
		<% include Contact %>
	</div>
	<% end_loop %>
</div>