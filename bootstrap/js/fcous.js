// JavaScript Document

/*璇存槑锛�
浠ヤ笅鏄彃浠堕粯璁ゅ€硷紝閮戒负绌�	
$.fn.adfocus.defaults = {
  drection:"",   //鎺у埗鏂瑰悜锛屽垎涓哄悜涓婃粴锛屽悜宸︽粴 ,鍜屾笎鍙樻晥鏋滐紝濉玪eft涓哄乏婊氬姩锛屽～up鍚戜笂婊氬姩锛宖ilter涓烘笎鍙樻晥鏋滐紝褰損ull涓簍rue鐨勬椂鍊欙紝pull_right涓哄彸锛宲ull_left涓哄乏锛宲ull_top涓轰笂锛宲ull_bottom涓轰笅銆�
  numbox:"",   //杞崲鏁板瓧鐨勫眰鐨刢lass鍚嶆垨鑰匢D鍚� 瑕佸姞" . "鎴栬€�" # "
  imgbox:"",  //杞崲鍥剧殑灞傦紝鏀惧叆鍥剧墖鐨勫眰锛屽～class鍚嶆垨鑰卛d鍚� 瑕佸姞" . "鎴栬€�" # "
  text:"",//鏂囧瓧灞�
  speed:"" , //閫熷害鎺у埗
  addClass: "" //杞崲鏁板瓧灞傞噷鐨刲i鏍囩class鏍峰紡鏇挎崲,鍒囧繉姝ゅ涓嶈鍔犱笂 " . ",鐩存帴濉玞lass鍚�
  imgboxWidth:"" //杞崲鐨勫搴﹁缃� 杈撳叆鏃惰鍘绘帀寮曞彿
  imgboxHeight:""//杞崲鐨勯珮搴︾殑璁剧疆 杈撳叆鏃惰鍘绘帀寮曞彿
  imgLen:""//鍥剧墖鏁伴噺璁剧疆 杈撳叆鏃惰鍘绘帀寮曞彿
  pull:""//鎷夊姩鏁堟灉鍚姩寮€鍏筹紝鑻ヤ笉鏄媺鍔ㄦ晥鏋滐紝璇蜂笉瑕佸～浠讳綍鍙傛暟銆�
  usevent:""//浜嬩欢閫夋嫨...click   mouseover  mouseenter 鐐瑰嚮鍜岄紶鏍囨粦鍔ㄤ簨浠�
  鎻掍欢鐗堟湰: 1.0.4
  淇敼浜嗘煡璇㈡柟寮�..閬垮厤缁撴瀯涓嶅悓鑰屾彃浠朵笉鑳戒娇鐢ㄧ殑闂銆�
  澧炲姞浜嗘枃瀛楀眰銆�
  淇敼浜嗘媺鍔ㄦ晥鏋滐紝瀵规媺鍔ㄦ晥鏋滄敼鎴愬彟涓€绉嶆ā寮�...
  鎻掍欢鐗堟湰: 1.0.4
  澧炲姞浜嗕簨浠堕€夋嫨usevent, 鍙互閫夋嫨鐐瑰嚮浜嬩欢瑙﹀彂鍜岄紶鏍囨粦鍔ㄨЕ鍙�
  淇敼浜嗛紶鏍囨粦鍔ㄤ簨浠剁殑鏃跺€欑敱浜庨紶鏍囪繃蹇粦鍔ㄦ护闀滄晥鏋滀細鏈夊欢杩燂紝鍋滈】鐨勯棶棰�..
  瀵规媺鍔╬ull鏁堟灉鍋氫簡淇敼锛屼絾鏄ソ瀛樺湪涓€鐐归棶棰橈紝澶揩鐨勭偣鍑诲拰婊戝姩锛屼細浣垮緱鍥剧墖鏄剧ず鎱㈡垨鑰呭仠椤�...
  
  浠ュ線鏇存柊锛�
  鎻掍欢鐗堟湰: 1.0.3
  鐢变簬杩戞湡椤圭洰鐨勮繘琛岋紝闇€瑕佹洿澶氱殑鐒︾偣鍥炬晥鏋滐紝浜庢槸鎴戝湪缃戜笂鐪嬪埌涓€浜涙晥鏋滆洰涓嶉敊鐨勶紝鍙樿嚜宸卞啓浜嗕笅锛岀劧鍚庡張瀵规媺鍔ㄦ晥鏋滆繘琛屽欢浼革紝涓€鍏卞鍔犱簡4涓晥鏋滐紒
  缁忚繃鎶€鏈€荤洃鐨勬彁閱掞紝鎶婂墠鍑犱釜鐗堟湰鐨勮疆鎹㈠搴﹀拰楂樺害鐨勬敼涓鸿嚜瀹氫箟鍙橀噺锛屾妧鏈汉鍛樺彲浠ユ牴鎹嚜宸辫瀹氳疆鎹㈤珮搴﹀拰瀹藉害銆�
  澧炲姞浜嗗浘鐗囨暟閲忕殑璁剧疆锛屾彁楂樼淮鎶ゆ€с€�
  浼樺寲浜嗕笅浠ｇ爜
  
  娉ㄦ剰浜嬮」锛氬綋榧犳爣鏉ュ洖婊戣繃閫熷害澶揩鐨勬椂鍊欙紝浼氬瓨鍦ㄥ浘鐗囦笉鍒囨崲锛佸師鍥犳槸鍥犱负鍔ㄧ敾鏁堟灉娌℃湁鍋滄閫犳垚锛�
  
};*/
$.fn.adfocus = function (options) {
     var opts={
	drection: "",
     //鎺у埗鏂瑰悜锛屽垎涓哄悜涓婃粴锛屽悜宸︽粴 ,鍜屾笎鍙樻晥鏋滐紝濉玪eft涓哄乏婊氬姩锛屽～up鍚戜笂婊氬姩锛宖ilter涓烘笎鍙樻晥鏋滐紝褰損ull涓簍rue鐨勬椂鍊欙紝pull_right涓哄彸锛宲ull_left涓哄乏锛宲ull_top涓轰笂锛宲ull_bottom涓轰笅銆�
    numbox: "",
    //杞崲鏁板瓧鐨勫眰鐨刢lass鍚嶆垨鑰匢D鍚� 瑕佸姞" . "鎴栬€�" # "
    imgbox: "",
    //杞崲鍥剧殑灞傦紝鏀惧叆鍥剧墖鐨勫眰锛屽～class鍚嶆垨鑰卛d鍚� 瑕佸姞" . "鎴栬€�" # "
	text:"",
	//鏂囧瓧灞�
    speed: "",
    //閫熷害鎺у埗
    addClass: "", 
	//杞崲鏁板瓧灞傞噷鐨刲i鏍囩class鏍峰紡鏇挎崲,鍒囧繉姝ゅ涓嶈鍔犱笂 " . ",鐩存帴濉玞lass鍚�
	imgboxWidth:"",
	//瀹藉害
	imgboxHeight:"",
	//楂樺害
	imgLen:"",
	//鍥剧墖鏁伴噺
	pull:"",
	//鎷夊姩鏁堟灉寮€鍚彉閲�
	usevent:""
		 }
    $.extend(opts, options);
    return this.each(function () {

        var adTimer = null;
		var _this = $(this);
		var index = 0; 
		var oNumList =_this.find(opts.numbox).children();
		var txList =_this.find(opts.text).children();
		var len = opts.imgLen;
		var imgListBox = _this.find(opts.imgbox);
		var imglistWidth =  opts.imgboxWidth;
		var imglistHeight = opts.imgboxHeight;
		var imglistBoxChid=imgListBox.children();
		timer();
		if(opts.pull=="true"){
			imglistBoxChid.not("script").css({
										   "position":"absolute",
											"z-index":1}).first().css({"z-index":2})

			}
          oNumList.bind(opts.usevent,function(){
									index = oNumList.index(this);
                                      action(index);
											   }).eq(0).trigger("mouseleave");

       _this.hover(function () {
            clearInterval(adTimer);
        }, function () {timer();
           
        })
        //浠ヤ笅鏄帶鍒舵粦鍔ㄧ殑鏂规硶
	  function timer(){
		 adTimer = setInterval(function () {
                action(index)
                index++;
                if (index == len) {
                    index = 0;
                }
            }, opts.speed)
	  }
        function action(index) {
			//alert(1);
            if (opts.drection == "left") {         //鍍忓乏绉诲姩
			   imgListBox.width(imglistWidth*len);
                imglistBoxChid.css({
                    float: "left"
                });
                imgListBox.stop().animate({
                    left: -imglistWidth * index
                }, 1000);
            } else if(opts.drection == "up") {             //鍍忎笂绉诲姩  
			 // alert(1);
                imgListBox.stop().animate({
                    top: -imglistHeight * index
                }, 1000);
            }else if(opts.drection == "filter"){   //娓愬彉鏁堟灉 
			     _this.css({"position":"relative"})
				imglistBoxChid.eq(index).css({"position":"absolute",
										   "left":"0px",
										   "top":"0px" }).stop()
				                   .animate({opacity:1},500)
								   .css({"z-index": "1"})
								   .siblings().stop().animate({opacity:0},500)
								   .css({"z-index": "0"});
			}else if(opts.pull=="true"){
				var pull_drection = {}
				var pull_drection2 = {}
			    if(opts.drection == "pull_right"){
					key="left";
					pull_drection[key]="0";
					pull_drection2[key]=-opts.imgboxWidth;
					pull(pull_drection,pull_drection2);
					}
				else if(opts.drection == "pull_left"){
					key="left";
					pull_drection[key]="0";
					pull_drection2[key]= opts.imgboxWidth;
					pull(pull_drection,pull_drection2);
					}
			   else if(opts.drection == "pull_top"){
					key="top";
					pull_drection[key]="0";
					pull_drection2[key]=-opts.imgboxHeight;
					pull(pull_drection,pull_drection2);
					}
			   else if(opts.drection == "pull_bottom"){
					key="top";
					pull_drection[key]="0";
					pull_drection2[key]=opts.imgboxHeight;
					pull(pull_drection,pull_drection2);
					}
				
				
				}

			txList.eq(index).stop().animate({"top":0},500).siblings().stop().animate({"top":-30},0);//鏂囧瓧
            oNumList.removeClass(opts.addClass).eq(index).addClass(opts.addClass);
			function pull(pull_drection,pull_drection2){
						imglistBoxChid.not("script").eq(index)
					                            .css({ "z-index": 3 })
												.siblings().css({ "z-index": 1 });	
						imgListBox.children().not("script").eq(index).stop()
					                                   .animate( pull_drection,500)
													   .siblings().stop().animate(pull_drection2,500).css({"z-index": 1})
						
					}//pull()
        }
		
		
		
    });
};

