/* 滚动条
------------------------------------------------ */
var handleSlimScroll = function() {
    "use strict";
    $('[data-scrollbar=true]').each( function() {
        generateSlimScroll($(this));
    });
};
var generateSlimScroll = function(element) {
    "use strict";
    var dataHeight = $(element).attr('data-height');
        dataHeight = (!dataHeight) ? $(element).height() : dataHeight;
    
    var scrollBarOption = {
        height: dataHeight, 
        alwaysVisible: true
    };
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $(element).css('height', dataHeight);
        $(element).css('overflow-x','scroll');
    } else {
        $(element).slimScroll(scrollBarOption);
    }
};

/* 菜单点击收缩效果
------------------------------------------------ */
var handleSidebarMenu = function() {
    "use strict";
    $('.sidebar .nav > .has-sub > a').click(function() {
        var target = $(this).next('.sub-menu');
        var otherMenu = '.sidebar .nav > li.has-sub > .sub-menu';
    
        if ($('.page-sidebar-minified').length === 0) {
            $(otherMenu).not(target).slideUp(250, function() {
                $(this).closest('li').removeClass('expand');
            });
            $(target).slideToggle(250, function() {
                var targetLi = $(this).closest('li');
                if ($(targetLi).hasClass('expand')) {
                    $(targetLi).removeClass('expand');
                } else {
                    $(targetLi).addClass('expand');
                }
            });
        }
    });
    $('.sidebar .nav > .has-sub .sub-menu li.has-sub > a').click(function() {
        if ($('.page-sidebar-minified').length === 0) {
            var target = $(this).next('.sub-menu');
            $(target).slideToggle(250);
        }
    });
};

/* mobile视图,点击菜单
------------------------------------------------ */
var handleMobileSidebarToggle = function() {
    var sidebarProgress = false;
    $('.sidebar').on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length !== 0) {
            sidebarProgress = true;
        } else {
            sidebarProgress = false;
            e.stopPropagation();
        }
    });
    
    $(document).on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length === 0) {
            sidebarProgress = false;
        }
        if (!e.isPropagationStopped() && sidebarProgress !== true) {
            if ($('#page-container').hasClass('page-sidebar-toggled')) {
                sidebarProgress = true;
                $('#page-container').removeClass('page-sidebar-toggled');
            }
            if ($('#page-container').hasClass('page-right-sidebar-toggled')) {
                sidebarProgress = true;
                $('#page-container').removeClass('page-right-sidebar-toggled');
            }
        }
    });
    
    $('[data-click=right-sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var targetContainer = '#page-container';
        var targetClass = 'page-right-sidebar-collapsed';
            targetClass = ($(window).width() < 979) ? 'page-right-sidebar-toggled' : targetClass;
        if ($(targetContainer).hasClass(targetClass)) {
            $(targetContainer).removeClass(targetClass);
        } else if (sidebarProgress !== true) {
            $(targetContainer).addClass(targetClass);
        } else {
            sidebarProgress = false;
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-sidebar-toggled');
        }
    });
    
    $('[data-click=sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var sidebarClass = 'page-sidebar-toggled';
        var targetContainer = '#page-container';

        if ($(targetContainer).hasClass(sidebarClass)) {
            $(targetContainer).removeClass(sidebarClass);
        } else if (sidebarProgress !== true) {
            $(targetContainer).addClass(sidebarClass);
        } else {
            sidebarProgress = false;
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-right-sidebar-toggled');
        }
    });
};


/* 当#page-loader加载完以后,显示#page-container
------------------------------------------------ */
var handlePageContentView = function() {
    "use strict";
    $.when($('#page-loader').addClass('hide')).done(function() {
        $('#page-container').addClass('in');
    });
};

/* 工具提示和弹出框处理
------------------------------------------------ */
var handelTooltipPopoverActivation = function() {
    "use strict";
	//动态设置tooltip
	$('body').tooltip({ selector: '[data-toggle="tooltip"]' });
	$('.help-global').tooltip({
		title: '其他语言数据同此项'	
	});
    $('[data-toggle=popover]').popover();
};

/* 修正IE高度
------------------------------------------------ */
var handleIEFullHeightContent = function() {
    "use strict";
    var userAgent = window.navigator.userAgent;
    var msie = userAgent.indexOf("MSIE");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        $('.vertical-box-row [data-scrollbar="true"][data-height="100%"]').each(function() {
            var targetRow = $(this).closest('.vertical-box-row');
            var targetHeight = $(targetRow).height();
            $(targetRow).find('.vertical-box-cell').height(targetHeight);
        });
    }
};

/* 多个 nav tabs
------------------------------------------------ */
var handleUnlimitedTabsRender = function() {
    // function handle tab overflow scroll width 
    function handleTabOverflowScrollWidth(obj, animationSpeed) {
        var marginLeft = parseInt($(obj).css('margin-left'));  
        var viewWidth = $(obj).width();
        var prevWidth = $(obj).find('li.active').width();
        var speed = (animationSpeed > -1) ? animationSpeed : 150;
        var fullWidth = 0;

        $(obj).find('li.active').prevAll().each(function() {
            prevWidth += $(this).width();
        });

        $(obj).find('li').each(function() {
            fullWidth += $(this).width();
        });

        if (prevWidth >= viewWidth) {
            var finalScrollWidth = prevWidth - viewWidth;
            if (fullWidth != prevWidth) {
                finalScrollWidth += 40;
            }
            $(obj).find('.nav.nav-tabs').animate({ marginLeft: '-' + finalScrollWidth + 'px'}, speed);
        }

        if (prevWidth != fullWidth && fullWidth >= viewWidth) {
            $(obj).addClass('overflow-right');
        } else {
            $(obj).removeClass('overflow-right');
        }

        if (prevWidth >= viewWidth && fullWidth >= viewWidth) {
            $(obj).addClass('overflow-left');
        } else {
            $(obj).removeClass('overflow-left');
        }
    }
    
    // function handle tab button action - next / prev
    function handleTabButtonAction(element, direction) {
        var obj = $(element).closest('.tab-overflow');
        var marginLeft = parseInt($(obj).find('.nav.nav-tabs').css('margin-left'));  
        var containerWidth = $(obj).width();
        var totalWidth = 0;
        var finalScrollWidth = 0;

        $(obj).find('li').each(function() {
            if (!$(this).hasClass('next-button') && !$(this).hasClass('prev-button')) {
                totalWidth += $(this).width();
            }
        });
    
        switch (direction) {
            case 'next':
                var widthLeft = totalWidth + marginLeft - containerWidth;
                if (widthLeft <= containerWidth) {
                    finalScrollWidth = widthLeft - marginLeft;
                    setTimeout(function() {
                        $(obj).removeClass('overflow-right');
                    }, 150);
                } else {
                    finalScrollWidth = containerWidth - marginLeft - 80;
                }

                if (finalScrollWidth != 0) {
                    $(obj).find('.nav.nav-tabs').animate({ marginLeft: '-' + finalScrollWidth + 'px'}, 150, function() {
                        $(obj).addClass('overflow-left');
                    });
                }
                break;
            case 'prev':
                var widthLeft = -marginLeft;
            
                if (widthLeft <= containerWidth) {
                    $(obj).removeClass('overflow-left');
                    finalScrollWidth = 0;
                } else {
                    finalScrollWidth = widthLeft - containerWidth + 80;
                }
                $(obj).find('.nav.nav-tabs').animate({ marginLeft: '-' + finalScrollWidth + 'px'}, 150, function() {
                    $(obj).addClass('overflow-right');
                });
                break;
        }
    }

    // handle page load active tab focus
    function handlePageLoadTabFocus() {
        $('.tab-overflow').each(function() {
            var targetWidth = $(this).width();
            var targetInnerWidth = 0;
            var targetTab = $(this);
            var scrollWidth = targetWidth;

            $(targetTab).find('li').each(function() {
                var targetLi = $(this);
                targetInnerWidth += $(targetLi).width();
    
                if ($(targetLi).hasClass('active') && targetInnerWidth > targetWidth) {
                    scrollWidth -= targetInnerWidth;
                }
            });

            handleTabOverflowScrollWidth(this, 0);
        });
    }
    
    // handle tab next button click action
    $('[data-click="next-tab"]').live('click', function(e) {
        e.preventDefault();
        handleTabButtonAction(this,'next');
    });
    
    // handle tab prev button click action
    $('[data-click="prev-tab"]').live('click', function(e) {
        e.preventDefault();
        handleTabButtonAction(this,'prev');

    });
    
    // handle unlimited tabs responsive setting
    $(window).resize(function() {
        $('.tab-overflow .nav.nav-tabs').removeAttr('style');
        handlePageLoadTabFocus();
    });
    
    handlePageLoadTabFocus();
};


/* MobileSidebar
------------------------------------------------ */
var handleMobileSidebar = function() {
    "use strict";
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        if ($('#page-container').hasClass('page-sidebar-minified')) {
            $('#sidebar [data-scrollbar="true"]').css('overflow', 'visible');
            $('.page-sidebar-minified #sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
            $('.page-sidebar-minified #sidebar [data-scrollbar="true"]').removeAttr('style');
            $('.page-sidebar-minified #sidebar [data-scrollbar=true]').trigger('mouseover');
        }
    }
    
    var oriTouch = 0;
    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchstart', function(e) {
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        var touchVertical = touch.pageY;
        oriTouch = touchVertical - parseInt($(this).closest('[data-scrollbar=true]').css('margin-top'));
    });
    
    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchmove',function(e){
        e.preventDefault();
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
            var touchVertical = touch.pageY;
            var elementTop = touchVertical - oriTouch;
            
            $(this).closest('[data-scrollbar=true]').css('margin-top', elementTop + 'px');
        }
    });
    
    $('.page-sidebar-minified .sidebar [data-scrollbar=true] a').live('touchend', function(e) {
        var targetScrollBar = $(this).closest('[data-scrollbar=true]');
        var windowHeight = $(window).height();
        oriTouch = $(targetScrollBar).css('margin-top');
        
        var sidebarHeight = 0;
        $('.sidebar').find('.nav').each(function() {
            sidebarHeight += $(this).height();
        });
        var finalHeight = -parseInt(oriTouch) + $('.sidebar').height();
        
        if (finalHeight >= sidebarHeight) {
            var finalMargin = windowHeight - sidebarHeight;
            $(targetScrollBar).animate({marginTop: finalMargin + 'px'});
        } else if (parseInt(oriTouch) >= 0) {
            $(targetScrollBar).animate({marginTop: '0px'});
        }
        return true;
    });
};


/* ListPage
------------------------------------------------ */
var handleListActionButtonStatus = function() {
    "use strict";
    if ($('[data-checked=list-checkbox]:checked').length !== 0) {
        $('[data-list-action]').removeClass('hide');
    } else {
        $('[data-list-action]').addClass('hide');
    }
};

var handleListCheckboxChecked = function() {
    "use strict";
    $('[data-checked=list-checkbox]').live('click', function() {
        var tr = $(this).closest('tr');
        if ($(this).prop('checked')) {
            $(tr).addClass('active');
        } else {
            $(tr).removeClass('active');
        }
        handleListActionButtonStatus();
    });
};


/* 处理多个弹出框
------------------------------------------------ */
var multipleModal = function() {
    "use strict";
	App.zIndexModal = 1050;
	App.zIndexMask = 1040;
	$('.modal').on('show.bs.modal',function(){
		var $this = $(this);
		setTimeout(function(){
			App.zIndexModal += 11;
			App.zIndexMask += 11;
			$this.css('zIndex',App.zIndexModal);
			$('.modal-backdrop:last').css('zIndex',App.zIndexMask);
			if($this.data('backdrop-class')){
				$('.modal-backdrop:last').addClass($this.data('backdrop-class'));
			}
		},20);
	}).on('hidden.bs.modal',function(){
		App.zIndexModal -= 11;
		App.zIndexMask -= 11;
		if($('.modal:visible').size()){
			$('body').addClass('modal-open');
		}
	});
};


/* 表格拖动排序
------------------------------------------------ */
var fixHelper = function(e, ui) {
    "use strict";
	ui.children().each(function() {
		$(this).width($(this).width()); //在拖动时，拖动行的cell（单元格）宽度会发生改变
	});
	return ui;
};

var handleSortTable = function() {
    "use strict";
    $(".table-sort tbody").sortable({
		helper: fixHelper,
		axis: "y",
		handle:'i',
		cursor: 'move',
		start: function(e, ui) {
			return ui;
		},
		stop: function(e, ui) {  
			return ui;
		}
	}).disableSelection();
};



/* 配置
------------------------------------------------ */
var App = function () {
	return {
		init: function () {
			// slimscroll
			handleSlimScroll();
			
			// sidebar
			handleSidebarMenu();
			handleMobileSidebarToggle();
			handleMobileSidebar();
			
			handelTooltipPopoverActivation();
			handlePageContentView();
			
			// IE heigth
			handleIEFullHeightContent();
			
			// nav tabs
			handleUnlimitedTabsRender();
			
			// listChecked
			handleListCheckboxChecked();
			
			// 多弹出框
			multipleModal();
		}
  };
}();

var SortTable = function () {
	return {
		init: function () {
			handleSortTable();
		}
  };
}();


/*===============
以下未写成方法
===============*/
$(document).ready(function() {
	//分辨率
	$(window).resize(function(){
		$('#content').css({minHeight:$(window).height()-114});
		$('.modal-lg iframe').height($(window).height()-62+'px');
	}).resize();
	
	//切换已选对象、
	$(".added-data .text-success").click(function(){
		$(this).parent(".added-data").addClass("hide");
		$(this).parent().next(".input-group").removeClass("hide");
	});
	$(".input-group input").focus(function(){
		$(this).parent(".dropdown").addClass("open");
	});
	$(".input-group .dropdown a").click(function(){
		$(this).parents(".input-group").addClass("hide");
		$(this).parents(".input-group").prev(".added-data").removeClass("hide");
	});
});

