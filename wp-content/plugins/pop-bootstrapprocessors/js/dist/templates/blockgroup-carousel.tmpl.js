!function(){var a=Handlebars.template,e=Handlebars.templates=Handlebars.templates||{};e["blockgroup-carousel"]=a({1:function(a,e,n,l,t){var s;return a.escapeExpression((s=null!=(s=n.id||(null!=e?e.id:e))?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"id",hash:{},data:t}):s))},3:function(a,e,n,l,t){var s,r=a.escapeExpression;return" "+r((s=null!=(s=n.key||t&&t.key)?s:n.helperMissing,"function"==typeof s?s.call(e,{name:"key",hash:{},data:t}):s))+'="'+r(a.lambda(e,e))+'"'},5:function(a,e,n,l,t,s,r){var o,c;return'		<div class="carousel-indicators '+a.escapeExpression((c=null!=(c=n["panelheader-class"]||(null!=e?e["panelheader-class"]:e))?c:n.helperMissing,"function"==typeof c?c.call(e,{name:"panelheader-class",hash:{},data:t}):c))+'" '+(null!=(o=n.each.call(e,null!=e?e["panelheader-params"]:e,{name:"each",hash:{},fn:a.program(3,t,0,s,r),inverse:a.noop,data:t}))?o:"")+">\n"+(null!=(o=n.each.call(e,null!=e?e["panel-headers"]:e,{name:"each",hash:{},fn:a.program(6,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"		</div>\n"},6:function(a,e,n,l,t,s,r){var o,c,i=n.helperMissing,p=a.escapeExpression,d="function";return'				<div class="'+(null!=(o=(n.compare||e&&e.compare||i).call(e,null!=r[1]?r[1].active:r[1],null!=e?e["settings-id"]:e,{name:"compare",hash:{},fn:a.program(7,t,0,s,r),inverse:a.noop,data:t}))?o:"")+'" data-target="#'+p((n.lastGeneratedId||e&&e.lastGeneratedId||i).call(e,{name:"lastGeneratedId",hash:{group:null!=r[1]?r[1]["bootstrap-type"]:r[1],context:r[1]},data:t}))+'" data-slide-to="'+p((c=null!=(c=n.index||t&&t.index)?c:i,typeof c===d?c.call(e,{name:"index",hash:{},data:t}):c))+'">\n					'+(null!=(c=null!=(c=n.title||(null!=e?e.title:e))?c:i,o=typeof c===d?c.call(e,{name:"title",hash:{},data:t}):c)?o:"")+"\n				</div>\n"},7:function(a,e,n,l,t){return"active"},9:function(a,e,n,l,t,s,r){var o,c=n.helperMissing,i=a.escapeExpression,p=a.lambda;return'			<div id="'+i((n.lastGeneratedId||e&&e.lastGeneratedId||c).call(e,{name:"lastGeneratedId",hash:{group:null!=e?e["bootstrap-type"]:e,context:r[1]},data:t}))+"-"+i(p(e,e))+'" class="item '+(null!=(o=(n.compare||e&&e.compare||c).call(e,null!=r[1]?r[1].active:r[1],e,{name:"compare",hash:{},fn:a.program(7,t,0,s,r),inverse:a.noop,data:t}))?o:"")+" "+i(p(null!=r[1]?r[1]["panel-class"]:r[1],e))+" "+i((n.get||e&&e.get||c).call(e,null!=r[1]?r[1]["custom-panel-class"]:r[1],e,{name:"get",hash:{},data:t}))+'" '+(null!=(o=n.each.call(e,null!=r[1]?r[1]["panel-params"]:r[1],{name:"each",hash:{},fn:a.program(3,t,0,s,r),inverse:a.noop,data:t}))?o:"")+" "+(null!=(o=(n.withget||e&&e.withget||c).call(e,null!=r[1]?r[1]["custom-panel-params"]:r[1],e,{name:"withget",hash:{},fn:a.program(10,t,0,s,r),inverse:a.noop,data:t}))?o:"")+'>\n				<div id="'+i((n.lastGeneratedId||e&&e.lastGeneratedId||c).call(e,{name:"lastGeneratedId",hash:{group:null!=e?e["bootstrap-type"]:e,context:r[1]},data:t}))+"-"+i(p(e,e))+'-container" class="body '+i((n.get||e&&e.get||c).call(e,null!=r[1]?r[1]["body-class"]:r[1],e,{name:"get",hash:{},data:t}))+" "+i(p(null!=(o=null!=r[1]?r[1].classes:r[1])?o.container:o,e))+'">\n'+(null!=(o=(n.compare||e&&e.compare||c).call(e,null!=r[1]?r[1]["panel-header-type"]:r[1],"indicators-internal",{name:"compare",hash:{},fn:a.program(12,t,0,s,r),inverse:a.noop,data:t}))?o:"")+(null!=(o=(n.withBlock||e&&e.withBlock||c).call(e,null!=r[1]?r[1]["root-context"]:r[1],e,{name:"withBlock",hash:{},fn:a.program(15,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"				</div>\n			</div>\n"},10:function(a,e,n,l,t){var s;return null!=(s=n.each.call(e,e,{name:"each",hash:{},fn:a.program(3,t,0),inverse:a.noop,data:t}))?s:""},12:function(a,e,n,l,t,s,r){var o;return'						<div class="carousel-indicators '+a.escapeExpression(a.lambda(null!=r[1]?r[1]["panelheader-class"]:r[1],e))+'" '+(null!=(o=n.each.call(e,null!=r[1]?r[1]["panelheader-params"]:r[1],{name:"each",hash:{},fn:a.program(3,t,0,s,r),inverse:a.noop,data:t}))?o:"")+">\n"+(null!=(o=n.each.call(e,null!=r[2]?r[2]["panel-headers"]:r[2],{name:"each",hash:{},fn:a.program(13,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"						</div>\n"},13:function(a,e,n,l,t,s,r){var o,c,i=n.helperMissing,p=a.escapeExpression,d="function";return'								<div class="'+(null!=(o=(n.compare||e&&e.compare||i).call(e,null!=r[3]?r[3].active:r[3],null!=e?e["settings-id"]:e,{name:"compare",hash:{},fn:a.program(7,t,0,s,r),inverse:a.noop,data:t}))?o:"")+'" data-target="#'+p((n.lastGeneratedId||e&&e.lastGeneratedId||i).call(e,{name:"lastGeneratedId",hash:{group:null!=r[3]?r[3]["bootstrap-type"]:r[3],context:r[3]},data:t}))+'" data-slide-to="'+p((c=null!=(c=n.index||t&&t.index)?c:i,typeof c===d?c.call(e,{name:"index",hash:{},data:t}):c))+'">\n									<h5>'+(null!=(c=null!=(c=n.title||(null!=e?e.title:e))?c:i,o=typeof c===d?c.call(e,{name:"title",hash:{},data:t}):c)?o:"")+"</h5>\n								</div>\n"},15:function(a,e,n,l,t,s,r){return"						"+a.escapeExpression((n.enterModule||e&&e.enterModule||n.helperMissing).call(e,e,{name:"enterModule",hash:{parentContext:r[2]},data:t}))+"\n"},compiler:[7,">= 4.0.0"],main:function(a,e,n,l,t,s,r){var o,c=n.helperMissing,i=a.lambda,p=a.escapeExpression;return"<div "+(null!=(o=(n.generateId||e&&e.generateId||c).call(e,{name:"generateId",hash:{group:null!=e?e["bootstrap-type"]:e},fn:a.program(1,t,0,s,r),inverse:a.noop,data:t}))?o:"")+' class="carousel '+p(i(null!=(o=null!=e?e.classes:e)?o["bootstrap-component"]:o,e))+" "+p(i(null!=(o=null!=e?e.classes:e)?o.carousel:o,e))+'" '+(null!=(o=n.each.call(e,null!=e?e["carousel-params"]:e,{name:"each",hash:{},fn:a.program(3,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"> \n"+(null!=(o=(n.compare||e&&e.compare||c).call(e,null!=e?e["panel-header-type"]:e,"indicators",{name:"compare",hash:{},fn:a.program(5,t,0,s,r),inverse:a.noop,data:t}))?o:"")+'	<div class="carousel-inner" role="listbox">\n'+(null!=(o=n.each.call(e,null!=(o=null!=e?e["settings-ids"]:e)?o.blockunits:o,{name:"each",hash:{},fn:a.program(9,t,0,s,r),inverse:a.noop,data:t}))?o:"")+"	</div>\n</div>"},useData:!0,useDepths:!0})}();