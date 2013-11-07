{% if page.title == "Vinduer" %}
				<aside class="col-sm-12 col-md-3">
					<ul>
						<li><a href="{{ site.baseurl }}/vinduer" class="activeAside">Vinduer</a></li>
						<li><a href="#">Røros Original Koblet</a></li>
						<li><a href="{{ site.baseurl }}/vinduer/isoler">Røros Isoler</a></li>
						<li><a href="#">Hvordan velge vindu</a></li>
					</ul>
				</aside>
{% endif %}
{% if page.title == "Vinduer - Isoler" %}
				<aside class="col-sm-12 col-md-3">
					<ul>
						<li><a href="{{ site.baseurl }}/vinduer">Vinduer</a></li>
						<li><a href="#">Røros Original Koblet</a></li>
						<li><a href="{{ site.baseurl }}/vinduer/isoler" class="activeAside">Røros Isoler</a></li>
							<ul>
								<li><a href="{{ site.baseurl }}/vinduer/isoler/hengslet">Sidehengslet/Topphengslet</a></li>
								<li><a href="#">Toppsving</a></li>
								<li><a href="#">Sidesving</a></li>
								<li><a href="#">Fastkarm</a></li>
							</ul>
						<li><a href="#">Hvordan velge vindu</a></li>
					</ul>
				</aside>
{% endif %}
{% if page.title == "Vinduer - Isoler - Sidehengslet/Topphengslet" %}
				<aside class="col-sm-12 col-md-3">
					<ul>
						<li><a href="{{ site.baseurl }}/vinduer">Vinduer</a></li>
						<li><a href="#">Røros Original Koblet</a></li>
						<li><a href="{{ site.baseurl }}/vinduer/isoler" class="activeAside">Røros Isoler</a></li>
							<ul>
								<li><a href="{{ site.baseurl }}/vinduer/isoler/hengslet" class="activeAside">Sidehengslet/Topphengslet</a></li>
								<li><a href="#">Toppsving</a></li>
								<li><a href="#">Sidesving</a></li>
								<li><a href="#">Fastkarm</a></li>
							</ul>
						<li><a href="#">Hvordan velge vindu</a></li>
					</ul>
				</aside>
{% endif %}
{% if page.title == "Dører" %}
				<aside class="col-sm-12 col-md-3">
					<ul>
						<li><a href="{{ site.baseurl }}/vinduer" class="activeAside">Dører</a></li>
						<li><a href="#">Speildører</a></li>
						<li><a href="{{ site.baseurl }}/vinduer/isoler">Paneldører</a></li>
						<li><a href="#">Terrassedører</a></li>
					</ul>
				</aside>
{% endif %}
{% if page.title == 'Historien' %}
				<aside class="col-sm-12 col-md-3">
					<ul>
						<li>Om oss</li>
						<li><a href="{{ site.baseurl }}/om-oss/historien" class="activeAside">Historien</a></li>
						<li><a href="#">Salg og produksjon</a></li>
						<li><a href="#">Ledige stillinger</a></li>
						<li><a href="#">Røros miljø og kvalitet</a></li>
					</ul>
				</aside>
{% endif %}
{% if page.title == 'Kundeservice - Kontakt' %}

				<aside class="col-sm-12 col-md-3">
					<ul>
						<li>Kundeservice</li>
						<li><a href="{{ site.baseurl }}/kundeservice/kontakt" class="activeAside">Kontaktinfo/ordrekontor og service</a></li>
						<li><a href="{{ site.baseurl }}/kundeservice/reklamasjoner">Reklamasjoner/Serviceskjema</a></li>
						<li><a href="#">Ofte stilte spørsmål/servicehåndbok</a></li>
						<li><a href="#">Salg og leveringsbetingelser</a></li>
					</ul>
				</aside>
				
{% endif %}
{% if page.title == 'Kundeservice - Reklamasjoner' %}

				<aside class="col-sm-12 col-md-3">
					<ul>
						<li>Kundeservice</li>
						<li><a href="{{ site.baseurl }}/kundeservice/kontakt">Kontaktinfo/ordrekontor og service</a></li>
						<li><a href="{{ site.baseurl }}/kundeservice/reklamasjoner" class="activeAside">Reklamasjoner/Serviceskjema</a></li>
						<li><a href="#">Ofte stilte spørsmål/servicehåndbok</a></li>
						<li><a href="#">Salg og leveringsbetingelser</a></li>
					</ul>
				</aside>
				
{% endif %}