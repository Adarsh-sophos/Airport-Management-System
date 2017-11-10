function _defineProperty(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}define("imageZoom/data/svgShapesData",[],function(){"use strict";return{buttonClose:{svg:{viewBox:"0 0 180 180",className:"svgButtonClose"},content:'<path d="M5 5 L175 175 M175 5 L5 175"/>'},buttonPrevious:{svg:{viewBox:"0 0 180 310",className:"svgNavButton"},content:'<path d="M170 10 L10 161 M10 150 L170 300"/>'},buttonNext:{svg:{viewBox:"0 0 180 310",className:"svgNavButton"},content:'<path d="M10 10 L170 161 M170 150 L10 300"/>'}}}),define("imageZoom/components/imageZoomDisplayer",["react","lodash","core","santaProps","coreUtils","image"],function(e,t,i,o,s,n){"use strict";function a(e,i,o,n){var a=t.assign({},e,{alt:e.title,itemProp:"contentUrl"}),r={id:this.props.id+"image",ref:"image",key:e.id,imageData:a,quality:n,containerWidth:i.imageContainerWidth,containerHeight:i.imageContainerHeight,displayMode:s.imageUtils.fittingTypes.LEGACY_FULL,onClick:this.props.goToNextItem,filterEffect:this.props.compProp.filterEffect,labelledById:this.props.id+"title",describedById:this.props.id+"description"};return o&&(r.onClick=this.props.toggleButtons,r.onTap=this.props.toggleButtons),this.createChildComponent(a,"core.components.Image","image",r)}var r=i.compMixins,p=s.linkRenderer,d={goToLinkText:"Go to link"},c={displayName:"ImageZoomDisplayer",mixins:[r.skinBasedComp],propTypes:t.assign({id:o.Types.Component.id,compData:o.Types.Component.compData.isRequired,compProp:o.Types.Component.compProp,isMobileDevice:o.Types.Device.isMobileDevice,isTabletDevice:o.Types.Device.isTabletDevice,rootNavigationInfo:o.Types.Component.rootNavigationInfo.isRequired,linkRenderInfo:o.Types.Link.linkRenderInfo.isRequired,goToNextItem:e.PropTypes.func,toggleButtons:e.PropTypes.func,zoomDimensions:e.PropTypes.object,quality:e.PropTypes.object},o.santaTypesUtils.getSantaTypesByDefinition(n)),statics:{useSantaTypes:!0},getInitialState:function(){var e="desktop";return this.props.isMobileDevice?e="mobile":this.props.isTabletDevice&&(e="tablet"),{$device:e}},getSkinProperties:function(){var e=this.props.compData,t=this.props.compProp,i=this.props.zoomDimensions,o=this.props.quality,s={"":{itemScope:!0,itemType:"http://schema.org/ImageObject"},title:{children:e.title,itemProp:"name","aria-hidden":"true"},description:{children:e.description,itemProp:"description"},image:a.call(this,e,i,this.props.isMobileDevice||this.props.isTabletDevice,o)};return e.link&&(s.link=p.renderLink(e.link,this.props.linkRenderInfo,this.props.rootNavigationInfo),s.link.children=t&&t.goToLinkText?t.goToLinkText:d.goToLinkText),s}};return i.compRegistrar.register("wysiwyg.components.ImageZoomDisplayer",c),c}),define("imageZoom/components/mediaZoom",["zepto","react","lodash","core","imageZoom/data/svgShapesData","reactDOM","santaProps","image","imageZoom/components/imageZoomDisplayer","utils"],function(e,t,i,o,s,n,a,r,p,d){"use strict";function c(e){return e&&!e.target.href}function l(e){return e.isMobileDevice||e.isTabletDevice}var h=o.compMixins,g={width:240,height:60},u={width:0,height:0},m={displayName:"MediaZoom",mixins:[h.skinBasedComp,h.animationsMixin,h.skinInfo,o.compMixins.galleryImageExpandedActionMixin,h.popupPagesMixin],propTypes:i.assign({styleId:a.Types.Component.styleId.isRequired,isZoomAllowed:a.Types.RenderFlags.isZoomAllowed.isRequired,isMobileDevice:a.Types.Device.isMobileDevice.isRequired,isTabletDevice:a.Types.Device.isTabletDevice.isRequired,rootNavigationInfo:a.Types.Component.rootNavigationInfo.isRequired,navigateToPage:a.Types.navigateToPage.isRequired,passClickEvent:a.Types.passClickEvent.isRequired,exitFullScreenMode:a.Types.exitFullScreenMode.isRequired,enterFullScreenMode:a.Types.enterFullScreenMode.isRequired,isExperimentOpen:a.Types.isExperimentOpen,getPrevAndNextStateFunc:t.PropTypes.func,isDataChangedFunc:t.PropTypes.func,getChildCompFunc:t.PropTypes.func,getBoxDimensionsFunc:t.PropTypes.func,actualNavigateToItemFunc:t.PropTypes.func,closeFunction:t.PropTypes.func,dataChanged:t.PropTypes.bool},a.santaTypesUtils.getSantaTypesByDefinition(r),a.santaTypesUtils.getSantaTypesByDefinition(p)),statics:{useSantaTypes:!0},getSvgButton:function(e,o){var n=s[e],a=i.clone(n.svg),r=this.props.styleId+"_";return i.assign(a,{className:r+n.svg.className,dangerouslySetInnerHTML:{__html:n.content},tabIndex:0,role:"button",onKeyDown:d.accessibility.keyboardInteractions.activateBySpaceOrEnterButton},o),t.DOM.svg(a)},getInitialState:function(){this.isAnimating=!1,this.shouldUpdateSizeOnLayout=!0;var e="desktop";return this.props.isMobileDevice?e="mobile":this.props.isTabletDevice&&(e="tablet"),i.assign({$buttonsState:"showButtons",$device:e},this.props.getPrevAndNextStateFunc())},componentWillReceiveProps:function(e){if(this.props.isZoomAllowed){var t=this.props.dataChanged||this.props.isDataChangedFunc(this.props,e);this.shouldUpdateSizeOnLayout=t,t&&this.setState(this.props.getPrevAndNextStateFunc())}else setTimeout(this.closeMediaZoom,0)},getSkinProperties:function(){var e=!!this.state.next?{}:{display:"none"},t=l(this.props)?u:g,i=this.props.getChildCompFunc({toggleButtons:this.toggleButtons,goToNextItem:this.clickOnNextButton,goToPrevItem:this.clickOnPreviousButton},t),o={"":{onKeyDown:this.preventTabbingOut,"data-width-spacer":t.width,"data-height-spacer":t.height},blockingLayer:{onClick:this.onBlockingLayerClick},xButton:{onClick:this.closeMediaZoom,children:[this.getSvgButton("buttonClose",{"aria-label":"close"})]},dialogBox:{onClick:this.handleDialogBoxClick},itemsContainer:{children:i,"aria-live":"polite",tabIndex:-1},buttonPrev:{onClick:this.clickOnPreviousButton,style:e,children:[this.getSvgButton("buttonPrevious",{"aria-label":"previous"})]},buttonNext:{onClick:this.clickOnNextButton,style:e,children:[this.getSvgButton("buttonNext",{"aria-label":"next"})]}};return l(this.props)&&(o.blockingLayer.onSwipeLeft=this.clickOnNextButton,o.blockingLayer.onSwipeRight=this.clickOnPreviousButton),o},onBlockingLayerClick:function(e){c(e)&&(this.closeMediaZoom(),e.preventDefault(),e.stopPropagation())},componentDidLayout:function(){var t=this.props.getBoxDimensionsFunc(),i={width:t.dialogBoxWidth,height:t.dialogBoxHeight,"margin-top":t.marginTop,"margin-left":t.marginLeft,padding:t.padding},o={width:t.dialogBoxWidth,height:t.dialogBoxHeight,marginTop:t.marginTop,marginLeft:t.marginLeft,padding:t.padding};if(this.shouldUpdateSizeOnLayout){this.shouldUpdateSizeOnLayout=!1;var s=this;this.sequence().add("dialogBox","BaseDimensions",.5,0,{to:o}).add("itemsContainer","FadeIn",.5,0).onCompleteAll(function(){s.unBlockNavigation(),s.handleImageExpandedAction()}).execute()}else e(n.findDOMNode(this.refs.dialogBox)).css(i)},clickOnNextButton:function(e){this.navigateToOtherPageWithAnimations(this.state.next),e&&(e.preventDefault(),e.stopPropagation())},clickOnPreviousButton:function(e){this.navigateToOtherPageWithAnimations(this.state.prev),e&&(e.preventDefault(),e.stopPropagation())},navigateToOtherPageWithAnimations:function(e){if(!this.isNavigationBlocked()){var t=this;this.blockNavigation(),this.animate("itemsContainer","FadeOut",.5,0,null,{onComplete:function(){t.props.actualNavigateToItemFunc(e)}})}},closeMediaZoom:function(){if(this.props.closeFunction)this.props.closeFunction();else{var e=i.omit(this.props.rootNavigationInfo,["imageZoom","pageItemId","title"]);this.props.navigateToPage(e)}},handleDialogBoxClick:function(e){c(e)&&(e.preventDefault(),e.stopPropagation(),this.props.passClickEvent(e))},unBlockNavigation:function(){this.isAnimating=!1},blockNavigation:function(){this.isAnimating=!0},isNavigationBlocked:function(){return this.isAnimating},componentDidMount:function(){this.props.enterFullScreenMode(),this._focusedElementBeforeMediaZoom=window.document.activeElement,n.findDOMNode(this.refs.itemsContainer).focus()},componentWillUnmount:function(){this.props.exitFullScreenMode(),e(this._focusedElementBeforeMediaZoom).focus()},toggleButtons:function(e){var t="showButtons"===this.state.$buttonsState?"hideButtons":"showButtons";this.setState({$buttonsState:t}),e&&(e.preventDefault(),e.stopPropagation())}};return o.compRegistrar.register("wysiwyg.viewer.components.MediaZoom",m),m}),define("imageZoom/bi/events.json",[],function(){return _defineProperty({ENTER_EXPAND_MODE:{eventId:376,adapter:"ugc-viewer",params:{site_id:"site_id"}},ZOOM_IN_EXPAND_MODE:{eventId:375,adapter:"ugc-viewer",params:{site_id:"site_id",zoomType:"zoomType"}}},"ENTER_EXPAND_MODE",{eventId:376,adapter:"ugc-viewer",params:{site_id:"site_id"}})}),define("imageZoom/components/imageZoom",["react","lodash","core","santaProps","imageZoom/components/mediaZoom","utils","imageZoom/bi/events.json"],function(e,t,i,o,s,n,a){"use strict";var r={displayName:"ImageZoom",mixins:[i.compMixins.mediaZoomWrapperMixin],propTypes:t.assign({id:o.Types.Component.id,compData:o.Types.Component.compData.isRequired,rootNavigationInfo:o.Types.Component.rootNavigationInfo.isRequired,reportBI:o.Types.reportBI.isRequired,siteId:o.Types.RendererModel.siteId.isRequired,siteWidth:o.Types.siteWidth,navigateToPage:o.Types.navigateToPage.isRequired,getScreenHeight:o.Types.getScreenHeight.isRequired,getScreenWidth:o.Types.getScreenWidth.isRequired,getWindowInnerHeight:o.Types.__DangerousSantaTypes.getWindowInnerHeight.isRequired,getCustomMeasureMap:o.Types.__DangerousSantaTypes.getCustomMeasureMap.isRequired,isMobileDevice:o.Types.Device.isMobileDevice,isTabletDevice:o.Types.Device.isTabletDevice,pageItemAdditionalData:e.PropTypes.object,galleryCompId:e.PropTypes.string,zoom:o.Types.NonPageItemZoom.zoom,unzoom:o.Types.NonPageItemZoom.unzoom,currentZoomItem:o.Types.NonPageItemZoom.currentItem},o.santaTypesUtils.getSantaTypesByDefinition(s)),statics:{useSantaTypes:!0},isNonOptimizedView:function(){return this.props.isMobileDevice||this.props.isTabletDevice},fireEnterExpandModeEvent:function(){this.props.reportBI(a.ENTER_EXPAND_MODE,{site_id:this.props.siteId})},componentWillMount:function(){this.fireEnterExpandModeEvent()},getInitialState:function(){return this.isNonOptimizedView()&&(this.enableInnerScrolling=!0),{}},getPrevAndNextState:function(){var e,i,o=this.props.pageItemAdditionalData,s={next:null,prev:null};return o&&(e=t.map(o.items,"id")).length>1&&(i=e.indexOf(this.props.compData.id),s.next=e[(i+1)%e.length],s.prev=e[(i-1+e.length)%e.length]),s},isDataChanged:function(e,t){return e.compData!==t.compData},getChildComp:function(e,i){var o={isMobileDevice:this.props.isMobileDevice,isTabletDevice:this.props.isTabletDevice,siteWidth:this.props.siteWidth},s={width:this.props.getScreenWidth(),height:this.props.getScreenHeight(),innerHeight:this.props.getWindowInnerHeight()},a=t.every(s),r={zoomDimensions:(this.isNonOptimizedView()?n.mediaZoomCalculations.getNonOptimizedViewDimensions:n.mediaZoomCalculations.getDesktopViewDimensions)(this.props.compData,o,a?s:null,i),quality:{quality:90}};return t.assign(r,e),this.createChildComponent(this.props.compData,"wysiwyg.components.ImageZoomDisplayer","imageItem",r)},getBoxDimensions:function(){return this.props.getCustomMeasureMap(this.props.id+this.props.compData.id)},actualNavigateToItem:function(e){if(this.props.currentZoomItem)if(e){var i=t.find(this.props.currentZoomItem.galleryData.items,{id:e});this.props.zoom(i,this.props.currentZoomItem.galleryData)}else this.props.unzoom();else{var o=t.clone(this.props.rootNavigationInfo);o.pageItemId=e,this.props.navigateToPage(o)}},getChildZoomComponentType:function(){return"wysiwyg.viewer.components.MediaZoom"},getImageIndex:function(){var e=t.get(this.props.pageItemAdditionalData,"items");if(e)return t.findIndex(e,{id:this.props.compData.id})},getChildZoomExtraProps:function(){return t.assign({},t.pickBy({galleryCompId:this.props.galleryCompId}),{imageIndex:this.getImageIndex()})}};return i.compRegistrar.register("wysiwyg.components.imageZoom",r),r}),define("imageZoom/components/mobileMediaZoom",["lodash","core","react","santaProps"],function(e,t,i,o){"use strict";var s={displayName:"MobileMediaZoom",mixins:[t.compMixins.skinBasedComp],propTypes:{compData:o.Types.Component.compData.isRequired,forceBackground:o.Types.forceBackground.isRequired,disableForcedBackground:o.Types.disableForcedBackground.isRequired,isMobileDevice:o.Types.Device.isMobileDevice.isRequired,isZoomAllowed:o.Types.RenderFlags.isZoomAllowed.isRequired,siteWidth:o.Types.siteWidth.isRequired,siteScrollingBlocker:o.Types.SiteAspects.siteScrollingBlocker.isRequired,navigateToPage:o.Types.navigateToPage.isRequired,enterFullScreenMode:o.Types.enterFullScreenMode.isRequired,exitFullScreenMode:o.Types.exitFullScreenMode.isRequired,isDataChangedFunc:i.PropTypes.func.isRequired,getPrevAndNextStateFunc:i.PropTypes.func.isRequired,getChildCompFunc:i.PropTypes.func.isRequired,enableInnerScrolling:i.PropTypes.bool.isRequired,actualNavigateToItemFunc:i.PropTypes.func.isRequired,closeFunction:i.PropTypes.func,rootNavigationInfo:i.PropTypes.object},statics:{useSantaTypes:!0},getInitialState:function(){var t=this.props.getPrevAndNextStateFunc();return e.assign(t,{$viewerType:this.props.isMobileDevice?"mobile":"tablet",$buttonState:""}),this.props.enableInnerScrolling&&(t.$scrollState="scrollEnabled"),t},componentWillReceiveProps:function(e){this.props.isZoomAllowed?this.props.isDataChangedFunc(this.props,e)&&this.setState(this.props.getPrevAndNextStateFunc()):setTimeout(this.closeMediaZoom,0)},createOverlay:function(e){return t.componentUtils.fullScreenOverlay.createOverlay(e,{siteWidth:this.props.siteWidth,isMobileDevice:this.props.isMobileDevice,siteScrollingBlocker:this.props.siteScrollingBlocker,forceBackground:this.props.forceBackground,disableForcedBackground:this.props.disableForcedBackground})},getSkinProperties:function(){var e=this.props.getChildCompFunc({key:this.props.compData.id,hideMediaZoomButtons:this.hideButtons,showMediaZoomButtons:this.showButtons},{width:0,height:0}),t=!this.state.next,i={"":{onSwipeLeft:this.clickOnNextButton,onSwipeRight:this.clickOnPreviousButton},itemsContainer:{children:e},xButton:{onClick:this.closeMediaZoom,style:{}},buttonPrev:{onClick:this.clickOnPreviousButton,style:{}},buttonNext:{onClick:this.clickOnNextButton,style:{}}};return i=this.props.enableInnerScrolling?i:this.createOverlay(i),(t||this.props.enableInnerScrolling)&&(i.buttonNext.style.display="none",i.buttonPrev.style.display="none"),i},clickOnNextButton:function(e){this.showButtons(),this.props.actualNavigateToItemFunc(this.state.next),e&&(e.preventDefault&&e.preventDefault(),e.stopPropagation&&e.stopPropagation())},closeMediaZoom:function(){this.props.closeFunction?this.props.closeFunction():this.props.navigateToPage({pageId:this.props.rootNavigationInfo.pageId})},clickOnPreviousButton:function(e){this.showButtons(),this.props.actualNavigateToItemFunc(this.state.prev),e&&(e.preventDefault&&e.preventDefault(),e.stopPropagation&&e.stopPropagation())},hideButtons:function(){this.setState({$buttonState:"hideButtons"})},showButtons:function(){this.setState({$buttonState:""})},componentDidMount:function(){this.props.enterFullScreenMode({scrollable:this.props.enableInnerScrolling})},componentWillUnmount:function(){this.props.exitFullScreenMode()}};return t.compRegistrar.register("wysiwyg.viewer.components.MobileMediaZoom",s),s}),define("imageZoom/components/touchMediaZoom",["zepto","lodash","siteUtils","core","react","santaProps","imageZoom/bi/events.json"],function(e,t,i,o,s,n,a){"use strict";var r=o.compMixins,p=i.linkRenderer,d=i.touchMediaZoomUtils,c={displayName:"TouchMediaZoom",mixins:[r.skinBasedComp],propTypes:{browser:n.Types.Browser.browser.isRequired,id:n.Types.Component.id.isRequired,compData:n.Types.Component.compData.isRequired,compProp:n.Types.Component.compProp.isRequired,rootNavigationInfo:n.Types.Component.rootNavigationInfo.isRequired,styleId:n.Types.Component.styleId.isRequired,devicePixelRatio:n.Types.Device.devicePixelRatio.isRequired,isMobileDevice:n.Types.Device.isMobileDevice.isRequired,screenSize:n.Types.screenSize.isRequired,linkRenderInfo:n.Types.Link.linkRenderInfo.isRequired,isLandscape:n.Types.mobile.isLandscape.isRequired,isZoomed:n.Types.mobile.isZoomed.isRequired,isZoomedIn:n.Types.mobile.isZoomedIn.isRequired,navigateToPage:n.Types.navigateToPage.isRequired,isZoomAllowed:n.Types.RenderFlags.isZoomAllowed.isRequired,siteId:n.Types.RendererModel.siteId.isRequired,reportBI:n.Types.reportBI.isRequired,staticMediaUrl:n.Types.ServiceTopology.staticMediaUrl.isRequired,windowKeyboardEvent:n.Types.SiteAspects.windowKeyboardEvent.isRequired,updateUrlIfNeeded:n.Types.Navigation.updateUrlIfNeeded.isRequired,currentZoomItem:n.Types.NonPageItemZoom.currentItem,unzoom:n.Types.NonPageItemZoom.unzoom,isExperimentOpen:n.Types.isExperimentOpen,pageItemAdditionalData:s.PropTypes.object},getSwipeOffset:function(){return this.nonReactState.swipeOffset},setSwipeOffset:function(e){this.nonReactState.swipeOffset=e;var t=this.generateTransformString(e);this.refs.swipeStage.style.transform=t,this.refs.swipeStage.style.webkitTransform=t},generateTransformString:function(e){return"translate3d("+-1*e*this.stagePercentFactor+"%, 0, 0)"},getCurrentSlideIndex:function(){return this.nonReactState.currentSlideIndex},setCurrentSlideIndex:function(e){this.nonReactState.currentSlideIndex=e},getIsZoomed:function(){return this.nonReactState.isZoomed},setIsZoomed:function(e){this.nonReactState.isZoomed=e},getStagePercentFactor:function(){return 100/this.stageData.fullWidth},getItems:function(){return t.get(this.props.pageItemAdditionalData,"items",[this.props.compData])},enterZoomMode:function(){this.isZoomed=!0,this.refs.xButton.classList.add(this.classSet({"force-hide":!0})),this.fireZoomInExpandModeEvent("pinch")},exitZoomMode:function(){this.isZoomed=!1,this.refs.xButton.classList.remove(this.classSet({"force-hide":!0}))},onTouchMove:function(e){1!==e.touches.length||this.isZoomed?1===e.touches.length||this.isZoomed||this.enterZoomMode():e.preventDefault()},onTouchEnd:function(){this.isZoomed&&(this._touchEndTimeoutHandle=window.setTimeout(function(){this.props.isZoomedIn()||this.exitZoomMode()}.bind(this),300))},fireEnterExpandModeEvent:function(){this.props.reportBI(a.ENTER_EXPAND_MODE,{site_id:this.props.siteId})},fireZoomInExpandModeEvent:function(e){this.props.reportBI(a.ZOOM_IN_EXPAND_MODE,{site_id:this.props.siteId,zoomType:e})},componentWillMount:function(){this.fireEnterExpandModeEvent(),this.props.windowKeyboardEvent.registerToArrowLeftKey(this),this.props.windowKeyboardEvent.registerToArrowRightKey(this),Object.defineProperty(this,"swipeOffset",{get:this.getSwipeOffset,set:this.setSwipeOffset}),Object.defineProperty(this,"currentSlideIndex",{get:this.getCurrentSlideIndex,set:this.setCurrentSlideIndex}),Object.defineProperty(this,"isZoomed",{get:this.getIsZoomed,set:this.setIsZoomed}),Object.defineProperty(this,"stagePercentFactor",{get:this.getStagePercentFactor}),this.stageData=d.createStageData(.2),this.resetNonReactState(),this.setState({showInfo:!0,isZoomed:!1})},componentDidMount:function(){if(this.nonReactState.firstRender=!1,this.setSwipeOffset(this.swipeOffset),this.refs.swipeStage.addEventListener("transitionend",this.onSwipeEnd),this.pageScroll=window.scrollY,this.pageMarginTop=e("html").css("marginTop"),e("html").addClass("media-zoom-mode"),e("html").css({marginTop:0}),this.props.isMobileDevice){var t=this;requirejs(["hammer"],function(e){t.setupTouchHandlers(e)}),this.refs[""].addEventListener("touchend",this.onTouchEnd),this.refs[""].addEventListener("touchcancel",this.onTouchEnd),this.refs[""].addEventListener("touchmove",this.onTouchMove)}},componentWillUnmount:function(){window.clearTimeout(this._touchEndTimeoutHandle),e("html").removeClass("media-zoom-mode"),e("html").css({marginTop:this.pageMarginTop}),window.scrollTo(0,this.pageScroll)},setupTouchHandlers:function(e){this.hammertime=new e.Manager(this.refs[""],{cssProps:{touchCallout:"default"},touchAction:"auto"}),this.hammertime.add(new e.Pan({event:"pan",direction:e.DIRECTION_HORIZONTAL})),this.hammertime.add(new e.Pan({event:"panstart",direction:e.DIRECTION_HORIZONTAL})),this.hammertime.add(new e.Pan({event:"panend",direction:e.DIRECTION_HORIZONTAL})),this.hammertime.on("panstart pan panend",this.onSwipe),this.hammertime.add(new e.Tap({event:"doubletap",taps:2,threshold:30,posThreshold:30})),this.hammertime.on("doubletap",t.partial(this.fireZoomInExpandModeEvent,"doubleTap"))},componentWillUpdate:function(){this.props.isMobileDevice&&this.setSwipeOffset(this.stageData.centerPart_begin)},componentWillReceiveProps:function(){this.props.isZoomAllowed||setTimeout(this.closeMediaZoom,0)},resetNonReactState:function(e){var i=e||this.props.compData,o=t.findIndex(this.getItems(),{id:i.id}),s=this.props.isZoomed();this.nonReactState={currentSlideIndex:o,swipeOffset:this.stageData.centerPart_begin,isZoomed:s,firstRender:!0}},onSwipe:function(e){if(!(this.isZoomed||e.center.x-e.deltaX<29))switch(e.type){case"panstart":break;case"pan":this.swipeOffset=t.clamp(this.stageData.centerPart_begin-e.deltaX/window.innerWidth,this.currentSlideIndex>0?this.stageData.leftPart_leftMargin:this.stageData.centerPart_leftMargin,this.currentSlideIndex<this.getItems().length-1?this.stageData.rightPart_rightMargin:this.stageData.centerPart_rightMargin);break;case"panend":this.startTransition();break;default:throw"unsupported event type: "+e.type}},calcTransitionTarget:function(){return this.swipeOffset<this.stageData.centerPart_leftMargin?{offset:this.stageData.leftPart_begin,index:this.currentSlideIndex-1}:this.swipeOffset>this.stageData.centerPart_rightMargin?{offset:this.stageData.rightPart_begin,index:this.currentSlideIndex+1}:{offset:this.stageData.centerPart_begin,index:this.currentSlideIndex}},startTransition:function(e){var t=e||this.calcTransitionTarget();this.refs.swipeStage.classList.add(this.props.styleId+"_animate"),this.swipeOffset=t.offset,this.currentSlideIndex=t.index},onSwipeEnd:function(){this.refs.swipeStage.classList.remove(this.props.styleId+"_animate"),this.swipeOffset=this.stageData.centerPart_begin,this.navigateToSlide(this.currentSlideIndex),this.setState({})},navigateToSlide:function(e){var i=this.getItems()[e].id,o=t.clone(this.props.rootNavigationInfo);o.pageItemId=i,this.props.updateUrlIfNeeded(o)},closeMediaZoom:function(){this.props.currentZoomItem?this.props.unzoom():this.props.navigateToPage({pageId:this.props.rootNavigationInfo.pageId})},onXButton:function(e){this.closeMediaZoom(),e.preventDefault()},onArrowLeftKey:function(){this.currentSlideIndex>0&&this.startTransition({offset:this.stageData.leftPart_begin,index:this.currentSlideIndex-1})},onArrowRightKey:function(){this.currentSlideIndex<this.getItems().length-1&&this.startTransition({offset:this.stageData.rightPart_begin,index:this.currentSlideIndex+1})},toggleInfoPanel:function(e){e.target!==this.refs.stage_CENTER.refs.link&&this.setState({showInfo:!this.isManipulated()&&!this.state.showInfo})},getGotoLink:function(e){var i=e.link;if(i){var o=p.renderLink(i,this.props.linkRenderInfo,this.props.rootNavigationInfo);return o.children=t.get(this.props.compProp,"goToLinkText","Go to link"),o}},getStageParts:function(){return t.filter([{id:"LEFT",imageIndex:this.currentSlideIndex-1,offset:this.stageData.leftPart_leftMargin},{id:"CENTER",imageIndex:this.currentSlideIndex,offset:this.stageData.centerPart_leftMargin},{id:"RIGHT",imageIndex:this.currentSlideIndex+1,offset:this.stageData.rightPart_leftMargin}],function(e){return e.imageIndex>=0&&e.imageIndex<this.getItems().length}.bind(this))},isManipulated:function(){return this.props.isMobileDevice&&this.props.isLandscape()||this.state.isZoomed},buildStageChildren:function(){var e=[];return t.forEach(this.getStageParts(),function(t){var i=t.offset*this.stagePercentFactor,o="stage_"+t.id,s=this.getItems()[t.imageIndex],n=this.nonReactState.firstRender?null:this.props.screenSize,a={pixelAspectRatio:this.props.devicePixelRatio,browser:this.props.browser,staticMediaUrl:this.props.staticMediaUrl,screenSize:n},r=this.createChildComponent(s,"wysiwyg.viewer.components.TouchMediaZoomItem","image",{key:this.props.id+"_item"+t.imageIndex,id:o,ref:o,imageData:s,clientData:a,link:this.getGotoLink(s),screenSize:n,itemToScreenRatio:1.4,showInfo:this.state.showInfo&&!this.isManipulated(),itemLeft:i,firstRender:this.nonReactState.firstRender});e.push(r)}.bind(this)),e},getSkinProperties:function(){return{"":{onClick:this.toggleInfoPanel},swipeStage:{style:{width:100*this.stageData.fullWidth+"%"},children:this.buildStageChildren()},xButton:{onClick:this.onXButton,className:this.classSet({hidden:this.isManipulated()})}}}};return o.compRegistrar.register("wysiwyg.viewer.components.TouchMediaZoom",c,!0),c}),define("imageZoom/components/touchMediaZoomItem",["lodash","react","core","siteUtils"],function(e,t,i,o){"use strict";var s=o.touchMediaZoomUtils,n={displayName:"TouchMediaZoomItem",mixins:[i.compMixins.skinBasedComp],propTypes:{itemToScreenRatio:t.PropTypes.number.isRequired,itemLeft:t.PropTypes.number.isRequired,imageData:t.PropTypes.object.isRequired,clientData:t.PropTypes.object.isRequired,showInfo:t.PropTypes.bool.isRequired,firstRender:t.PropTypes.bool.isRequired,link:t.PropTypes.object,screenSize:t.PropTypes.object},getTitle:function(){var t=e.get(this.props.imageData,"title");return{className:this.classSet({hidden:!t}),children:t}},getDescription:function(){var t=e.get(this.props.imageData,"description");return{className:this.classSet({hidden:!t}),children:t}},getLink:function(){return e.assign({},this.props.link,{className:this.classSet({hidden:!this.props.link})})},hasInfo:function(){return this.props.imageData.title||this.props.imageData.description||this.props.link},isImageFullWidth:function(){return!e.has(this.props.screenSize,"width")||this.props.screenSize<=e.get(this.props.imageApiFastData,"css.img.width")},getImageProps:function(t,i){if(this.props.firstRender)return{"data-imgdata":JSON.stringify(e.pick(t,["width","height","uri","quality"])),"data-imgscale":i||1};var o=s.getImageApiData(t,this.props.clientData,i||1);return{src:o.uri,style:o.css.img}},getSkinProperties:function(){var t=e.assign(this.getImageProps(this.props.imageData,.25),{className:this.classSet({fast:!0})}),i=e.assign(this.getImageProps(this.props.imageData),{className:this.classSet({heavy:!0})}),o=e.has(this.props.screenSize,"width")?{width:this.props.screenSize.width+"px"}:{},s=e.has(this.props.screenSize,"width")?{width:this.props.screenSize.width*this.props.itemToScreenRatio+"px"}:{};return{"":{className:this.classSet({parallax:this.isImageFullWidth()}),style:e.assign({},s,{left:this.props.itemLeft+"%"}),"data-firstrender":this.props.firstRender},imageContainer:{style:o},hirRes:i,lowRes:t,info:{className:this.classSet({hidden:!this.props.showInfo||!this.hasInfo()}),style:o},description:this.getDescription(),title:this.getTitle(),link:this.getLink()}}};return i.compRegistrar.register("wysiwyg.viewer.components.TouchMediaZoomItem",n,!0),n}),define("imageZoom/skins/skins.json",[],function(){"use strict";var e={};return e["wysiwyg.skins.ImageZoomDisplayerSkin"]={react:[["div","image",[],{}],["div","panel",[],{},["div",null,["_meta"],{},["h3","title",[],{}],["p","description",[],{}],["a","link",[],{}]]]],exports:{image:{skin:"skins.core.ImageSkin"}},mediaQueries:[{query:"@media (orientation: landscape)",css:{"%[data-state~='mobile'] %panel":"font-size:1.5em;"}},{query:"@media (orientation: landscape)",css:{"%[data-state~='tablet'] %panel":"font-size:1em;"}}],css:{"%":'width:100%;height:100%;text-align:center;font:12px "Helvetica Neue","HelveticaNeueW01-55Roma","HelveticaNeueW02-55Roma","HelveticaNeueW10-55Roma",Helvetica, Arial, sans-serif;',"%panel":"position:absolute;text-align:center;color:#fff;font-family:Helvetica;font-weight:100;letter-spacing:0.2px;","%title":"font-size:16px;margin:20px auto;max-width:100%;font-weight:100;","%description":"width:465px;margin:20px auto;white-space:pre-line;font-size:12px;line-height:17px;letter-spacing:0.3px;max-width:100%;","%link":"font-family:'Times New Roman';color:#ffffff;font-size:13px;font-style:italic;text-decoration:underline;","%[data-state~='mobile'] %panel":"font-size:2em;","%[data-state~='tablet'] %panel":"font-size:1.1em;","%[data-state~='mobile'] %panel,%[data-state~='tablet'] %panel":"padding:30px 85px;box-sizing:border-box;","%[data-state~='mobile'] %image,%[data-state~='tablet'] %image":"margin:0 auto;box-sizing:border-box;","%[data-state~='mobile'] %title,%[data-state~='tablet'] %title":"font-size:1.6em;margin-top:0;","%[data-state~='mobile'] %description,%[data-state~='tablet'] %description":"font-size:1.2em;line-height:1.7em;width:100%;","%[data-state~='mobile'] %link,%[data-state~='tablet'] %link":"font-size:1.3em;"}},e["wysiwyg.skins.ImageZoomSkin"]={react:[],exports:{imageItem:{skin:"wysiwyg.skins.ImageZoomDisplayerSkin"},mediaZoom:{skin:"wysiwyg.viewer.skins.MediaZoomSkin"}},css:{}},e["wysiwyg.skins.NonOptimizedImageZoomSkin"]={react:[],exports:{imageItem:{skin:"wysiwyg.skins.ImageZoomDisplayerSkin"},mediaZoom:{skin:"wysiwyg.viewer.skins.NonOptimizedMediaZoomSkin"}},css:{}},e["wysiwyg.viewer.skins.AppPartMediaZoomSkin"]={react:[["div","blockingLayer",[],{},["div","dialogBox",[],{},["div","xButton",[],{}],["div","itemsContainer",[],{}]],["div","buttonPrev",["_btn"],{}],["div","buttonNext",["_btn"],{}]]],params:{tdr:"URL",trns:"TRANSITION",bg:"BG_COLOR",heightSpacer:"SIZE"},paramsDefaults:{tdr:"BASE_THEME_DIRECTORY",trns:"opacity 0.5s ease 0s",bg:"#000",heightSpacer:["pad","pad"]},paramsMutators:{bg:[["alpha",.75]]},css:{"%":"position:fixed !important;width:100% !important;height:100% !important;z-index:99999;","%blockingLayer":"background-color:[bg];position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;","%[data-state~='mobile'] %blockingLayer,%[data-state~='tablet'] %blockingLayer":"background-color:#5F6360;","%dialogBox":"margin:auto;background:#fff;min-width:500px;position:relative;text-align:right;width:500px;padding:10px 10px 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;box-sizing:border-box;","%xButton":"display:inline-block;right:-25px;width:25px;height:25px;background:#fff url([tdr]close.gif) no-repeat 50% 50%;cursor:pointer;position:absolute;top:0;z-index:500;","%_btn":"position:fixed;top:0;width:100px;height:100%;background:url([tdr]arrows_white.png) no-repeat;overflow:hidden;text-indent:-9999px;cursor:pointer;opacity:0.3;[trns]","%buttonNext":"right:20px;background-position:-30px 50%;","%buttonPrev":"left:20px;background-position:70px 50%;","%_btn:hover":"opacity:1;"}},e["wysiwyg.viewer.skins.AppPartMobileMediaZoomSkin"]={react:[["div","blockingLayer",[],{},["div","dialogBox",["_z-dialog"],{},["div","itemsContainer",[],{}],["div","xButton",["_btn"],{}],["div","buttonPrev",["_btn"],{}],["div","buttonNext",["_btn"],{}]]]],params:{tdr:"URL",zoom:"INVERTED_ZOOM_FIXED",bg:"BG_COLOR"},paramsDefaults:{tdr:"BASE_THEME_DIRECTORY",zoom:"1",bg:"#000"},paramsMutators:{bg:[["alpha",1]]},mediaQueries:[{query:"@media (orientation: landscape)",css:{"%buttonPrev,%buttonNext":"top:45%;"}}],css:{"%":"position:static;width:100%;height:100%;-webkit-tap-highlight-color:transparent;z-index:500;","%blockingLayer":"background-color:[bg];position:fixed;top:0;right:0;bottom:0;left:0;","%dialogBox":"position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;background:#000;z-index:1000;","%buttonNext,%buttonPrev":"top:50%;background-size:cover;background-repeat:no-repeat;","%buttonPrev":"background-image:url([tdr]prev_button.png);left:0;","%buttonNext":"background-image:url([tdr]next_button.png);right:0;","%xButton":"top:0;right:0;background:url([tdr]x_button.png) no-repeat;background-size:cover;",'%buttonNext [data-state~="tablet"],%buttonPrev [data-state~="tablet"],%xButton [data-state~="tablet"]':"[zoom]","%_btn":"[zoom]  position:fixed;overflow:hidden;cursor:pointer;",'%[data-state~="tablet"] %_btn':"width:80px;height:80px;",'%[data-state~="mobile"] %_btn':"width:43px;height:43px;",'%[data-state~="hideButtons"] %_btn':"display:none;",'%[data-state~="scrollEnabled"] %blockingLayer':"position:static;height:100%;"}},e["wysiwyg.viewer.skins.MediaZoomSkin"]={react:[["div","blockingLayer",[],{},["div","dialogBox",[],{},["div","itemsContainer",[],{}]],["div","xButton",[],{}],["div","buttonNext",["_btn"],{}],["div","buttonPrev",["_btn"],{}]]],params:{trns:"TRANSITION",bg:"BG_COLOR",heightSpacer:"SIZE"},paramsDefaults:{trns:"opacity 0.5s ease 0s",bg:"#000",heightSpacer:["pad","pad"]},paramsMutators:{bg:[["alpha",.9]]},css:{"%":"position:fixed !important;width:100% !important;height:100% !important;z-index:99999;","%blockingLayer":"background-color:[bg];position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;","%dialogBox":"margin:auto;max-width:100%;position:relative;width:500px;padding:35px 0 50px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;box-sizing:border-box;","%xButton":"display:inline-block;right:50px;top:50px;cursor:pointer;position:fixed;z-index:500;","%xButton %_svgButtonClose":"width:18px;height:18px;stroke:#fff;stroke-width:15;position:absolute;right:0;top:0;","%_btn":"position:fixed;top:0;width:33%;height:100%;overflow:hidden;text-indent:-9999px;cursor:pointer;opacity:0.9;[trns]","%_btn %_svgNavButton":"width:18px;height:31px;stroke:#fff;stroke-width:20;position:absolute;top:50%;","%buttonNext":"right:0;","%buttonNext %_svgNavButton":"right:50px;","%buttonPrev":"left:0;","%buttonPrev %_svgNavButton":"left:50px;","%_btn:hover":"opacity:1;"}},e["wysiwyg.viewer.skins.NonOptimizedMediaZoomSkin"]={react:[["div","blockingLayer",[],{},["div","dialogBox",["_z-dialog"],{},["div","itemsContainer",[],{}],["div","buttonPrev",["_btn"],{}],["div","buttonNext",["_btn"],{}],["div","xButton",["_btn"],{}]]]],params:{trns:"TRANSITION",bg:"BG_COLOR",heightSpacer:"SIZE"},paramsDefaults:{trns:"opacity 0.5s ease 0s",bg:"#000",heightSpacer:["pad","pad"]},paramsMutators:{bg:[["alpha",.5]]},mediaQueries:[{query:"@media (orientation: portrait)",css:{"%xButton":"width:75px;height:75px;","%[data-state~='mobile'] %_svgButtonClose":"width:45px;height:45px;right:15px;top:15px;","%[data-state~='mobile'] %_svgNavButton":"width:45px;height:45px;margin-top:-22px;","%[data-state~='mobile'] %buttonNext %_svgNavButton":"padding:15px 12px 15px 18px;","%[data-state~='mobile'] %buttonPrev %_svgNavButton":"padding:15px 18px 15px 12px;","%[data-state~='tablet'] %_svgButtonClose":"width:35px;height:35px;right:20px;top:20px;","%[data-state~='tablet'] %_svgNavButton":"width:35px;height:35px;margin-top:-17px;","%[data-state~='tablet'] %buttonNext %_svgNavButton":"padding:20px 18px 20px 22px;","%[data-state~='tablet'] %buttonPrev %_svgNavButton":"padding:20px 22px 20px 18px;"}},{query:"@media (orientation: landscape)",css:{"%xButton":"width:45px;height:45px;","%_svgNavButton":"width:25px;height:25px;margin-top:-12px;","%buttonNext %_svgNavButton":"padding:10px 9px 10px 11px;","%buttonPrev %_svgNavButton":"padding:10px 11px 10px 9px;","%[data-state~='tablet'] %_svgButtonClose":"width:19px;height:19px;right:13px;top:13px;","%[data-state~='mobile'] %_svgButtonClose":"width:25px;height:25px;right:10px;top:10px;"}}],css:{"%":"position:fixed !important;width:100% !important;height:100% !important;-webkit-tap-highlight-color:transparent;z-index:500;","%blockingLayer":"background-color:#000;position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;","%dialogBox":"position:relative;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;box-sizing:border-box;","%_btn":"display:inline-block;cursor:pointer;position:fixed;overflow:hidden;text-indent:-9999px;opacity:0.9;[trns]  z-index:500;","%xButton":"background-color:[bg];right:15px;top:15px;","%xButton %_svgButtonClose":"stroke:#fff;stroke-width:15;position:absolute;","%_svgNavButton":"stroke:#fff;stroke-width:25;position:absolute;top:50%;background-color:[bg];margin:15px;","%buttonNext":"top:0;right:0;width:33%;height:100%;","%buttonNext %_svgNavButton":"right:0;","%buttonPrev":"top:0;left:0;width:33%;height:100%;","%buttonPrev %_svgNavButton":"left:0;","%_btn:hover":"opacity:1;",'%[data-state~="hideButtons"] %_btn':"display:none;"}},e}),define("imageZoom",["imageZoom/components/imageZoom","imageZoom/components/imageZoomDisplayer","imageZoom/components/mediaZoom","imageZoom/components/mobileMediaZoom","imageZoom/components/touchMediaZoom","imageZoom/components/touchMediaZoomItem","skins","imageZoom/skins/skins.json"],function(e,t,i,o,s,n,a,r){"use strict";return a.skinsMap.addBatch(r),{imageZoom:e,imageZoomDisplayer:t,mediaZoom:i,mobileMediaZoom:o,touchMediaZoom:s,touchMediaZoomItem:n}});
//# sourceMappingURL=imageZoom.min.js.map