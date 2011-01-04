var arrowimages={down:['downarrowclass', 'down.gif', 23], right:['rightarrowclass', 'right.gif']}

var jqueryslidemenu={

animateduration: {over: 150, out: 100},

buildmenu:function(menuid, arrowsvar, type){
	jQuery(document).ready(function($){
		var $mainmenu=$("#"+menuid+">ul")
		var $headers=$mainmenu.find("ul").parent()
		$headers.each(function(i){
			var $curobj=$(this)
			var $subul=$(this).find('ul:eq(0)')
			this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
			this.istopheader=$curobj.parents("ul").length==1? true : false
			$subul.css({left:this.istopheader? this._dimensions.w+"px" : 0})


			if (type==2)
			{
				$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: "10"} : {}).append(
					'<img src="'+ (arrowsvar.right[1])
					+'" class="' + (arrowsvar.right[0])
					+ '" style="border:0;" vspace="3" />'
				)
			}
			else
			{

				$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
				'<img src="'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
				+'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
				+ '" style="border:0;" />'
			)


			}


			$curobj.hover(
				function(e){
					var $lala=$(this)
					var $targetul=$(this).children("ul:eq(0)")
					this._offsets={left:$(this).offset().left, top:$(this).offset().top}

					$lala.css({})

					if (type==2)
					{
					var menuleft=this._dimensions.w
					$targetul.css({top:"0px"})
					}
					else
					{
					var menuleft=this.istopheader? 0 : this._dimensions.w
					}

					menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
					$targetul.css({left:menuleft+"px",width:this._dimensions.subulw+'px'}).slideDown(jqueryslidemenu.animateduration.over)

				},
				function(e){

					var $targetul=$(this).children("ul:eq(0)")
					$targetul.slideUp(jqueryslidemenu.animateduration.out)
				}
			)
		})
		$mainmenu.find("ul").css({display:'none', visibility:'visible'})
	})
}
}
