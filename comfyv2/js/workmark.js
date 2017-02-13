/*!
jQuery wookmark plugin
@name jquery.wookmark.js
@author Christoph Ono (chri@sto.ph or @gbks)
@author Sebastian Helzle (sebastian@helzle.net or @sebobo)
@version 1.2.3
@date 06/14/2013
@category jQuery plugin
@copyright (c) 2009-2013 Christoph Ono (www.wookmark.com)
@license Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
*/
(function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t(jQuery)})(function(t){var e,s,h;h=function(t,i){return function(){return t.apply(i,arguments)}},s={align:"center",container:t("body"),offset:2,autoResize:!1,itemWidth:0,flexibleWidth:0,resizeDelay:50,onLayoutChanged:void 0},e=function(){function e(i,e){this.handler=i,this.columns=this.containerWidth=this.resizeTimer=null,this.activeItemCount=0,this.direction="left",this.itemHeightsDirty=!0,t.extend(!0,this,s,e),this.update=h(this.update,this),this.onResize=h(this.onResize,this),this.onRefresh=h(this.onRefresh,this),this.getItemWidth=h(this.getItemWidth,this),this.layout=h(this.layout,this),this.layoutFull=h(this.layoutFull,this),this.layoutColumns=h(this.layoutColumns,this),this.filter=h(this.filter,this),this.clear=h(this.clear,this),this.getActiveItems=h(this.getActiveItems,this);for(var o,n=j=0,r={};i.length>n;n++)if($item=i.eq(n),o=$item.data("filterClass"),"object"==typeof o&&o.length>0)for(j=0;o.length>j;j++)filterClass=t.trim(o[j]).toLowerCase(),filterClass in r||(r[filterClass]=[]),r[filterClass].push($item[0]);this.filterClasses=r,this.autoResize&&t(window).bind("resize.wookmark",this.onResize),this.container.bind("refreshWookmark",this.onRefresh)}return e.prototype.update=function(i){this.itemHeightsDirty=!0,t.extend(!0,this,i)},e.prototype.onResize=function(){clearTimeout(this.resizeTimer),this.itemHeightsDirty=0!=this.flexibleWidth,this.resizeTimer=setTimeout(this.layout,this.resizeDelay)},e.prototype.onRefresh=function(){this.itemHeightsDirty=!0,this.layout()},e.prototype.filter=function(i,e){var s,h,o,n,r,a=[],l=t();if(i=i||[],e=e||"or",i.length){for(h=0;i.length>h;h++)r=t.trim(i[h].toLowerCase()),r in this.filterClasses&&a.push(this.filterClasses[r]);if(s=a.length,"or"==e||1==s)for(h=0;s>h;h++)l=l.add(a[h]);else if("and"==e){var u,f,m,d=a[0],c=!0;for(h=1;s>h;h++)a[h].length<d.length&&(d=a[h]);for(h=0;d.length>h;h++){for(f=d[h],c=!0,o=0;a.length>o&&c;o++)if(m=a[o],d!=m){for(n=0,u=!1;m.length>n&&!u;n++)u=m[n]==f;c&=u}c&&l.push(d[h])}}this.handler.not(l).addClass("inactive")}else l=this.handler;l.removeClass("inactive"),this.columns=null,this.layout()},e.prototype.getActiveItems=function(){return this.handler.not(".inactive")},e.prototype.getItemWidth=function(){var t=this.itemWidth,i=this.container.width(),e=this.handler.eq(0),s=this.flexibleWidth;if(void 0===this.itemWidth||0===this.itemWidth&&!this.flexibleWidth?t=e.outerWidth():"string"==typeof this.itemWidth&&this.itemWidth.indexOf("%")>=0&&(t=parseFloat(this.itemWidth)/100*i),s){"string"==typeof s&&s.indexOf("%")>=0&&(s=parseFloat(s)/100*i-e.outerWidth()+e.innerWidth());var h=~~(1+i/(s+this.offset)),o=(i-(h-1)*this.offset)/h;t=Math.max(t,~~o),this.handler.css("width",t)}return t},e.prototype.layout=function(){if(this.container.is(":visible")){var t,e=this.getItemWidth()+this.offset,s=this.container.width(),h=~~((s+this.offset)/e),o=maxHeight=i=0,n=this.getActiveItems(),r=n.length;if(this.itemHeightsDirty){for(;r>i;i++)t=n.eq(i),t.data("outerHeight",t.outerHeight());this.itemHeightsDirty=!1}h=Math.max(1,Math.min(h,r)),o="left"==this.align||"right"==this.align?~~(h/e+this.offset>>1):~~(.5+(s-(h*e-this.offset))>>1),this.direction="right"==this.align?"right":"left",maxHeight=null!=this.columns&&this.columns.length==h&&this.activeItemCount==r?this.layoutColumns(e,o):this.layoutFull(e,h,o),this.activeItemCount=r,this.container.css("height",maxHeight),void 0!==this.onLayoutChanged&&"function"==typeof this.onLayoutChanged&&this.onLayoutChanged()}},e.prototype.layoutFull=function(t,i,e){var s,h=0,o=0,n=this.getActiveItems(),r=n.length,a=null,l=null,u={position:"absolute"},f=[],m="left"==this.align?!0:!1;for(this.columns=[];i>f.length;)f.push(0),this.columns.push([]);for(;r>h;h++){for($item=n.eq(h),a=f[0],l=0,o=0;i>o;o++)a>f[o]&&(a=f[o],l=o);s=0==l&&m?0:l*t+e,u[this.direction]=s,u.top=a,$item.css(u),f[l]+=$item.data("outerHeight")+this.offset,this.columns[l].push($item)}return Math.max.apply(Math,f)},e.prototype.layoutColumns=function(t,i){for(var e,s,h,o=[],n=0,r=0;this.columns.length>n;n++)for(o.push(0),e=this.columns[n],h=n*t+i,r=0;e.length>r;r++)$item=e[r],s={top:o[n]},s[this.direction]=h,$item.css(s),o[n]+=$item.data("outerHeight")+this.offset;return Math.max.apply(Math,o)},e.prototype.clear=function(){clearTimeout(this.resizeTimer),t(window).unbind("resize.wookmark",this.onResize),this.container.unbind("refreshWookmark",this.onRefresh)},e}(),t.fn.wookmark=function(t){return this.wookmarkInstance?this.wookmarkInstance.update(t||{}):this.wookmarkInstance=new e(this,t||{}),this.wookmarkInstance.layout(),this.show()}});


jQuery(document).ready(function($) {
	
    "use strict";


    //MASONARY BLOG
	
    function attWorkGrid_1() {
        var options = {
            itemWidth: 360, // Optional min width of a grid item
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#blog-masonrywrap'), // Optional, used for some extra CSS styling
            offset: 30, // Optional, the distance between grid items
            flexibleWidth: 360 // Optional, the maximum width of a grid item
        };
        var handler = $('#blog-masonrywrap li');
        handler.wookmark(options);
    }

    $(window).load(function() {
        attWorkGrid_1();
    });
	
	$('#blog-masonrywrap li').wookmark({autoResize: true});
	
    $('#blog-masonrywrap li div div a img').load(function() { // (yasir bhai) Only Change this line if you need to
        attWorkGrid_1();
    });
	


    //MASONARY GALLERY GRID 2 COLUMN
	
    function attWorkGrid_2() {
        var options = {
            itemWidth: 555, // Optional min width of a grid item
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#gallery-grid-1-masonrywrap'), // Optional, used for some extra CSS styling
            offset: 30, // Optional, the distance between grid items
            flexibleWidth: 555 // Optional, the maximum width of a grid item
        };
        var handler = $('#gallery-grid-1-masonrywrap li');
        handler.wookmark(options);
    }

    $(window).load(function() {
        attWorkGrid_2();
    });
	
	$('#gallery-grid-1-masonrywrap li').wookmark({autoResize: true});
	
    $('#gallery-grid-1-masonrywrap li div div img').load(function() { // (yasir bhai) Only Change this line if you need to
        attWorkGrid_2();
    });
	

    //Gallery Grid 3 Column

    function attWorkGrid_3() {
        var options = {
            itemWidth: 261, // Optional min width of a grid item
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#blog-masonrywrap-2'), // Optional, used for some extra CSS styling
            offset: 30, // Optional, the distance between grid items
            flexibleWidth: 261 // Optional, the maximum width of a grid item
        };
        var handler = $('#blog-masonrywrap-2 li');
        handler.wookmark(options);
    }

    $(window).load(function() {
        attWorkGrid_3();
    });
	
	$('#blog-masonrywrap-2 li').wookmark({autoResize: true});
	
    $('#blog-masonrywrap-2 li div div a img').load(function() { // (yasir bhai) Only Change this line if you need to
        attWorkGrid_3();
    });


    //Gallery Grid 4 Column
	
    function attWorkGrid_4() {
        var options = {
            itemWidth: 162, // Optional min width of a grid item
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#blog-masonrywrap-3'), // Optional, used for some extra CSS styling
            offset: 30, // Optional, the distance between grid items
            flexibleWidth: 162 // Optional, the maximum width of a grid item
        };
        var handler = $('#blog-masonrywrap-3 li');
        handler.wookmark(options);
    }

    $(window).load(function() {
        attWorkGrid_4();
    });
	
	$('#blog-masonrywrap-3 li').wookmark({autoResize: true});
	
    $('#blog-masonrywrap-3 li div div a img').load(function() { // (yasir bhai) Only Change this line if you need to
        attWorkGrid_4();
    });
	
	//$('.myItems').wookmark({autoResize: true});

    //Function End




});

