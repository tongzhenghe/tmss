/**
 * [ xTaber 切换 ]
 * @param  {[type]} $ [description]
 * @return {[type]}   [description]
 */
(function($){
    $.fn.extend({
        xTaber: function(opt){
            var def = $.extend({
                /* @tab 触发事件标签 [true|false|obj]
                 * true 自动生成带数字的标签
                 * false 不显示tab
                 * obj 自定义tab
                 */
                tab: true, //默认为自动生成
                content:$('#xtaberWrap'),
                prev: null, //上一个按钮
                next: null, //下一个按钮
                /* @style 滚动的样式 [opacity|left|top|none]
                 * opacity 淡出淡入
                 * left 向左
                 * top 向上
                 * none 无效果
                 */
                style: 'opacity', //默认为opacity
                activeClass: 'current', //当前样式
                delay: 100, //操作延时
                speed: 300, //移动速度
                timeout: 10000, //间歇时间
                auto: false, //是否自动滚动
                setup: 1,//每次滚动多少个
                defaultShow: 1, //默认显示第n个
                mouseEvent: 'mouseover', //鼠标事件
                tabedCallback: null //切换后的回调函数
            }, opt);

            if(typeof def.setup != Number && def.setup < 1) def.setup = 1;
            // 内部通用变量
            var self = def.content,
                content = self.find('[rel="xtaberItems"]'),
                subItem = content.find('li'),
                itemLength = subItem.length,
                subItemHeight = 
                    parseInt(subItem.height())+
                    parseInt(subItem.css('marginTop'))+
                    parseInt(subItem.css('marginBottom'))+
                    parseInt(subItem.css('paddingTop'))+
                    parseInt(subItem.css('paddingBottom')),
                subItemWidth = 
                    parseInt(subItem.width())+
                    parseInt(subItem.css('marginLeft'))+
                    parseInt(subItem.css('marginRight'))+
                    parseInt(subItem.css('paddingLeft'))+
                    parseInt(subItem.css('paddingRight')),
                scrollHeight = subItemHeight * def.setup,
                scrollWidth = subItemWidth * def.setup,
                screenNum,
                current = 0,
                autoTimer,
                itemTimer,
                tabItem = null;
            //滚动屏数          
			    
            if(def.setup == 1){
                screenNum = itemLength;
            }
            else{
                var inAll = (itemLength % def.setup),
                    num = parseInt(itemLength / def.setup);
                screenNum = (inAll > 0) ? (num+1) : num;
            }                

            var init = function(){
                // 自动生成tab
                if(def.tab && typeof def.tab != 'obj'){
					
                    var tabHTML = '<ul rel="xtaberTabs" class="xtaber-tabs">';
                    for(var i=1; i<=screenNum; i++){
                        tabHTML += '<li rel="xtaberTabItem">'+subItem.find('a.idx-focus-img').eq(i-1).html()+'</li>';
                    }
                    tabHTML += '</ul>';
                    self.append(tabHTML);
                    def.tab = self.find('[rel="xtaberTabs"]');
                }
                else if(typeof def.tab == 'object'){
                    def.tab = self.find('[rel="xtaberTabs"]');
                }
                else{
                    def.tab = null;
                }

                if(def.tab != null){
                    tabItem = def.tab.find('[rel="xtaberTabItem"]');
                }

                if(typeof def.next == 'boolean' && def.next){
                    def.next = $('<span rel="xtaberNext">next</span>');
                    def.next.appendTo(self);
                }
                if(typeof def.prev == 'boolean' && def.prev){
                    def.prev = $('<span rel="xtaberPrev">prev</span>');
                    def.prev.appendTo(self);
					
                }

                switch(def.style){
                    case 'left':
                        setParent('left');
                        break;
                    case 'top':
                        setParent('top');
                        break;
                }

                goTo(def.defaultShow - 1);
                
                bindEvent();
                if(def.auto){
                    auto();
                }

            }
            //设置父级的样式
            var setParent = function(type){
                var wrapHeight,wrapWidht,contentWidth,contentHeight;
                if(type == 'top'){
                    contentHeight = subItemHeight * itemLength;
                    contentWidth = subItemWidth;
                }
                else if(type == 'left'){
                    contentHeight = subItemHeight;
                    contentWidth = subItemWidth * itemLength;
                }
                //alert(typeof(subItemWidth));
                content.css({
                    left: 0,
                    top: 0,
                    position: 'absolute',
                    width: contentWidth,
                    height: contentHeight
                });
            }

            var goTo = function(index){
                clearInterval(autoTimer);
                clearTimeout(itemTimer);
                current = index;
                switch(def.style){
                    case 'top':
                        content.stop().animate({'top': -(index * scrollHeight)}, def.speed);
                        break;
                    case 'left':
                        content.stop().animate({'left': -(index * scrollWidth)}, def.speed);
						
                        break;
                    case 'opacity':
                        subItem.eq(index).fadeIn().siblings().hide();
                        break;
                    default:
                        subItem.eq(index).show().siblings().hide();
                        break;
                }
                if(def.tab != null){
                   tabItem.eq(index).addClass(def.activeClass).siblings().removeClass(def.activeClass);
                }
                if(def.auto){
                    auto()
                };
                if(def.tabedCallback){
                    tabedCallback();
                }
            }

            var auto = function(){
                if(def.auto){
                    clearInterval(autoTimer);
                    autoTimer = setInterval(function(){
                        if(current + 1 >= screenNum){
                                goTo(0);
                        }else{
                            goTo(current + 1);
                        }
                    }, def.timeout);
                }
            }
            //绑定事件
            var bindEvent = function(){
                if(def.tab != null){
                    tabItem.each(function(){
                        var el = $(this);
                        el.bind(def.mouseEvent, function(){
                            clearInterval(autoTimer);
                            clearTimeout(itemTimer);
                            itemTimer = setTimeout(function(){
                                goTo(el.index());
                            }, def.delay);
                        });
                        
                        el.bind('mouseleave', function(){
                            clearTimeout(itemTimer);
                            auto();
                        });
                    });
                }

                if(def.next){
                    def.next.click(function(){
                        var currentNum = (current + 1 >= screenNum) ? 0 : current + 1;
                        goTo(currentNum);  
                    });
                }
                
                if(def.prev){
                    def.prev.click(function(){
                        var currentNum = (current - 1 < 0) ? screenNum - 1 : current - 1;
                        goTo(currentNum);
                    });
                }
                
            }
            init();           
        }
    });
})(jQuery);

var isNeeded = function(selectors){
    var selectors = (typeof selectors == 'string') ? [selectors] : selectors,
        isNeeded;
    for(var i=0;i<selectors.length;i++){
        var selector = selectors[i];
        if( $(selector).length > 0 ) { 
            isNeeded = true; 
            break; 
        }
    };
    return isNeeded ;
};
