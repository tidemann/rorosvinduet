<div class="navWrap">
  <nav id="Nav" class="navbar navbar-default affix-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <div class="container navInner">

        <ul class="nav nav-justified mainNav">

          <% loop Menu(1) %>
          <% if $NavChildren %>
          <li class="dropdown">
            <a href="$Link" class="dropdown-toggle disabled  $LinkingMode" >
              $MenuTitle.XML <b class="caret"></b>
            </a>
            <% else %>
            <li>
              <a href="$Link" >$MenuTitle.XML</a>
              <% end_if  %>

              <% if $NavChildren %>
              <ul class="dropdown-menu">
                <% loop $NavChildren %>
                <li>
                  <a href="$Link">$MenuTitle.XML</a>
                </li>
                <% end_loop %>
              </ul>
              <% end_if  %>
            </li>

            <% end_loop %>
        </ul>
      </div>
      <div class="stichline"> </div>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>
