
<footer>
	<div class="container">

		<% loop $SiteConfig.FooterCols %>
			<div class="col-sm-6 col-md-4">
				
				<ul>
					<li><h4>$MenuTitle.XML</h4></li>
					<% loop $NavChildren %>
		                <li>
		                  <a href="$Link">$MenuTitle.XML</a>
		                </li>
					<% end_loop %>
				</ul>
			</div>
		<% end_loop %>
		<div class="col-sm-6 col-md-4">
			$SiteConfig.FooterContact
		</div>
	</div><!-- container end -->
	<div class="stichline whiteline"></div><p class="copyright">&copy; 2013 - <a href="http://isola.no">Isola AS</a></p>
</footer>
