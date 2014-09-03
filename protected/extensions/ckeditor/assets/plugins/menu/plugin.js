﻿/*
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.plugins.add('menu',{beforeInit:function(a){var b=a.config.menu_groups.split(','),c={};for(var d=0;d<b.length;d++)c[b[d]]=d+1;a._.menuGroups=c;a._.menuItems={};},requires:['floatpanel']});CKEDITOR.tools.extend(CKEDITOR.editor.prototype,{addMenuGroup:function(a,b){this._.menuGroups[a]=b||100;},addMenuItem:function(a,b){if(this._.menuGroups[b.group])this._.menuItems[a]=new CKEDITOR.menuItem(this,a,b);},addMenuItems:function(a){for(var b in a)this.addMenuItem(b,a[b]);},getMenuItem:function(a){return this._.menuItems[a];}});(function(){CKEDITOR.menu=CKEDITOR.tools.createClass({$:function(b,c){var d=this;d.id='cke_'+CKEDITOR.tools.getNextNumber();d.editor=b;d.items=[];d._.level=c||1;},_:{showSubMenu:function(b){var h=this;var c=h._.subMenu,d=h.items[b],e=d.getItems&&d.getItems();if(!e){h._.panel.hideChild();return;}if(c)c.removeAll();else{c=h._.subMenu=new CKEDITOR.menu(h.editor,h._.level+1);c.parent=h;c.onClick=CKEDITOR.tools.bind(h.onClick,h);}for(var f in e)c.add(h.editor.getMenuItem(f));var g=h._.panel.getBlock(h.id).element.getDocument().getById(h.id+String(b));c.show(g,2);}},proto:{add:function(b){if(!b.order)b.order=this.items.length;this.items.push(b);},removeAll:function(){this.items=[];},show:function(b,c,d,e){var f=this.items,g=this.editor,h=this._.panel,i=this._.element;if(!h){h=this._.panel=new CKEDITOR.ui.floatPanel(this.editor,CKEDITOR.document.getBody(),{css:[CKEDITOR.getUrl(g.skinPath+'editor.css')],level:this._.level-1,className:g.skinClass+' cke_contextmenu'},this._.level);h.onEscape=CKEDITOR.tools.bind(function(){this.onEscape&&this.onEscape();this.hide();},this);h.onHide=CKEDITOR.tools.bind(function(){this.onHide&&this.onHide();},this);var j=h.addBlock(this.id);j.autoSize=true;var k=j.keys;k[40]='next';k[9]='next';k[38]='prev';k[CKEDITOR.SHIFT+9]='prev';k[32]='click';k[39]='click';i=this._.element=j.element;i.addClass(g.skinClass);var l=i.getDocument();l.getBody().setStyle('overflow','hidden');l.getElementsByTag('html').getItem(0).setStyle('overflow','hidden');this._.itemOverFn=CKEDITOR.tools.addFunction(function(r){var s=this;clearTimeout(s._.showSubTimeout);s._.showSubTimeout=CKEDITOR.tools.setTimeout(s._.showSubMenu,g.config.menu_subMenuDelay,s,[r]);},this);this._.itemOutFn=CKEDITOR.tools.addFunction(function(r){clearTimeout(this._.showSubTimeout);},this);this._.itemClickFn=CKEDITOR.tools.addFunction(function(r){var t=this;var s=t.items[r];if(s.state==CKEDITOR.TRISTATE_DISABLED){t.hide();return;}if(s.getItems)t._.showSubMenu(r);else t.onClick&&t.onClick(s);
},this);}a(f);var m=['<div class="cke_menu">'],n=f.length,o=n&&f[0].group;for(var p=0;p<n;p++){var q=f[p];if(o!=q.group){m.push('<div class="cke_menuseparator"></div>');o=q.group;}q.render(this,p,m);}m.push('</div>');i.setHtml(m.join(''));if(this.parent)this.parent._.panel.showAsChild(h,this.id,b,c,d,e);else h.showBlock(this.id,b,c,d,e);},hide:function(){this._.panel&&this._.panel.hide();}}});function a(b){b.sort(function(c,d){if(c.group<d.group)return-1;else if(c.group>d.group)return 1;return c.order<d.order?-1:c.order>d.order?1:0;});};})();CKEDITOR.menuItem=CKEDITOR.tools.createClass({$:function(a,b,c){var d=this;CKEDITOR.tools.extend(d,c,{order:0,className:'cke_button_'+b});d.group=a._.menuGroups[d.group];d.editor=a;d.name=b;},proto:{render:function(a,b,c){var i=this;var d=a.id+String(b),e=typeof i.state=='undefined'?CKEDITOR.TRISTATE_OFF:i.state,f=' cke_'+(e==CKEDITOR.TRISTATE_ON?'on':e==CKEDITOR.TRISTATE_DISABLED?'disabled':'off'),g=i.label;if(e==CKEDITOR.TRISTATE_DISABLED)g=i.editor.lang.common.unavailable.replace('%1',g);if(i.className)f+=' '+i.className;c.push('<span class="cke_menuitem"><a id="',d,'" class="',f,'" href="javascript:void(\'',(i.label||'').replace("'",''),'\')" title="',i.label,'" tabindex="-1"_cke_focus=1 hidefocus="true"');if(CKEDITOR.env.opera||CKEDITOR.env.gecko&&CKEDITOR.env.mac)c.push(' onkeypress="return false;"');if(CKEDITOR.env.gecko)c.push(' onblur="this.style.cssText = this.style.cssText;"');var h=(i.iconOffset||0)*(-16);c.push(' onmouseover="CKEDITOR.tools.callFunction(',a._.itemOverFn,',',b,');" onmouseout="CKEDITOR.tools.callFunction(',a._.itemOutFn,',',b,');" onclick="CKEDITOR.tools.callFunction(',a._.itemClickFn,',',b,'); return false;"><span class="cke_icon_wrapper"><span class="cke_icon"'+(i.icon?' style="background-image:url('+CKEDITOR.getUrl(i.icon)+');background-position:0 '+h+'px;"></span>':'')+'></span></span>'+'<span class="cke_label">');if(i.getItems)c.push('<span class="cke_menuarrow"></span>');c.push(g,'</span></a></span>');}}});CKEDITOR.config.menu_subMenuDelay=400;CKEDITOR.config.menu_groups='clipboard,form,tablecell,tablecellproperties,tablerow,tablecolumn,table,anchor,link,image,flash,checkbox,radio,textfield,hiddenfield,imagebutton,button,select,textarea';
