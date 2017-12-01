define("compUtils/core/compFactory",["react","lodash","utils"],function(e,t,r){"use strict";function i(i){var u=p[i];if(!u){var d=t.get(s,[i,"def"]);if(!d)return void r.log.error("Component not implemented:",i);var h=e.createClass({mixins:n[i].concat([d])});if(a[i]=h,u=e.createFactory(h),c[i]=u,t.get(s,[i,"isAPIComp"])){var m=o(i,h);p[i]=e.createFactory(m)}else p[i]=u}}var o,s={},n={},p={},c={},a={};return r.sessionFreezer.freeze(s),r.sessionFreezer.freeze(n),{getCompClass:function(e,t){return i(e),t?c[e]:p[e]},getCompReactClass:function(e){return this.getCompClass(e),a[e]},invalidate:function(e){delete p[e]},extend:function(e,i){s.hasOwnProperty(e)?n[e]=t.union(n[e].concat(i)):r.log.error("Component can't be extended:",e)},register:function(e,t,r){return s[e]={def:t,isAPIComp:r},n[e]=[],this},registerMobxObserver:function(e){return o=e,this},keys:function(){return t.keys(s)}}}),define("compUtils/core/MagicStructure",["lodash","mobx","utils"],function(e,t,r){"use strict";function i(t,r){e.forOwn(r,function(e,r){Object.defineProperty(t,r,{value:e,enumerable:!1})})}function o(e,t,r,o,s,n,p){i(this,{cachedComputedStructureValues:{},siteData:e,displayedDAL:t,pointers:r,compId:o,computedPagePointer:s,computedChildrenToRender:n,computedParentDimensions:p})}function s(e){if(this.cachedComputedStructureValues[e])return this.cachedComputedStructureValues[e].get();var r=t.computed(function(){var t=this.pointers.components.getComponent(this.compId,this.computedPagePointer.get());if(!t||!this.displayedDAL.isExist(t))return null;var r=this.pointers.getInnerPointer(t,[e]);return this.displayedDAL.getStructureProperty(r)},{context:this,compareStructural:!0,name:this.compId+"_MagicStructure_"+e});return this.cachedComputedStructureValues[e]=r,r.get()}var n=e(r.constants.COMP_DATA_QUERY_KEYS).values().concat(["id","componentType","type","modes","layout","skin","styleId","originalStyleId","originCompId"]).value();return o.prototype=e.transform(n,function(e,t){Object.defineProperty(e,t,{get:function(){return s.call(this,t)}})},{}),Object.defineProperty(o.prototype,"components",{get:function(){if(this.cachedComputedStructureValues.components)return this.cachedComputedStructureValues.components.get();var r=t.computed(function(){return e.map(this.computedChildrenToRender.get(),"id")},{context:this,compareStructural:!0,name:this.compId+"_MagicStructure_components"});return this.cachedComputedStructureValues.components=r,r.get()}}),Object.defineProperty(o.prototype,"dimensions",{get:function(){if(this.cachedComputedStructureValues.dimensions)return this.cachedComputedStructureValues.dimensions.get();var e=t.computed(function(){return r.positionAndSize.isVerbsLayout(this.layout)?r.positionAndSize.getVerbsPositionAndSize(this.layout,this.computedParentDimensions.get(),this.siteData.getScreenSize(),this.siteData.getSiteWidth()):r.positionAndSize.getAbsolutePositionAndSize(this.layout)},{context:this,compareStructural:!0,name:this.compId+"_MagicStructure_dimensions"});return this.cachedComputedStructureValues.dimensions=e,e.get()}}),o}),define("compUtils/core/mobxObserverWrapper",["lodash","zepto","react","reactDOM","mobx","mobx-react","utils","coreUtils","compUtils/core/compFactory","compUtils/core/MagicStructure","santaProps"],function(e,t,r,i,o,s,n,p,c,a,u){"use strict";function d(e,t){var r=e.getRootIdsWhichShouldBeRendered();return p.componentUtils.shouldBeRendered(r,t)}function h(e){return"SITE_PAGES"===e}function m(t,r,i,o){var s=t.getSiteData(),n=e.isUndefined(r)?"masterPage":r,p={siteData:s,siteAPI:t},c={structure:i,rootNavigationInfo:s.getExistingRootNavigationInfoWithTransitionInfo(n),rootId:n,id:o};return L.getComputedProps(p,c).get()}function l(t,r,i,o){var s=m(t.mobxObserverWrapperProps.siteAPI,t.rootId,o,t.id);return h(t.id)&&e.assign(s,t.mobxObserverWrapperProps.propsForSitePages),s.isAffectedByModeChanges=r,i&&(s.className=(s.className||"")+" transitioning-comp"),s}function g(e,t){return"SantaTypeObserver("+(e.displayName||e.name||t.split(".").pop())+")"}function P(e){return e&&c.getCompClass(e)||r.DOM.div}function f(e,t,r,i,o){var s=r&&!!o,n=l(i,r,i.compAnimationType===F.TRANSITION||s,e);return n.childrenSet=t,n}function v(t,r,i,o){return e.some([o].concat(i.components.getChildrenRecursively(o)),function(o){var s=r.get(i.getInnerPointer(o,["componentType"]));return e.includes(t.COMPONENTS_TO_KEEP_IN_STUB,s)})}function y(t){return!e.isEmpty(t)}function C(t,r,i){var o=e.map(i,function(e){return!!t||S(e,r)});return e.zipObject(e.map(i,"id"),o)}function b(t,r,i){var o=e.keyBy(t.childrenSet,"id"),s=e.keyBy(r.childrenSet,"id"),n=e.reduce(s,function(t,r,i){return!!o[i]?t:e.set(t,i,F.ENTER)},{});return e.reduce(o,function(t,r,o){return!!s[o]?i[o]?e.set(t,o,F.TRANSITION):t:e.set(t,o,F.LEAVE)},n)}function S(t,r){var i=[],o=e.get(t,"modes.definitions");if(o&&o.length){var s=e.map(o,"modeId"),n=e.keys(r);i=e.intersection(n,s)}return!e.isEmpty(i)}function A(t,r,i){var o=t.getSiteData(),s=o.measureMap;if(!s)return{};var n=t.getSiteAspect("windowScrollEvent").getScrollPosition(),p=e.partial(e.isEqual,F.TRANSITION);return e(r).pickBy(p).mapValues(function(t,r){var p=s.shownInFixed[r]?s.absoluteLeft[r]-n.x:s.absoluteLeft[r]-o.getSiteX()-n.x;return{width:s.width[r],height:s.height[r],left:p,top:s.absoluteTop[r]-n.y,rotation:e.get(i,["rotationDegrees",r])}}).value()}function I(e,t,r,i,o,s){t.getSiteAspect("actionsAspect").executeAction("modeChange",B.MODE_CHANGED_INIT,{modeChanges:r,componentAnimations:i,transitioningComponentsPrevLayout:o,pageId:e,onComplete:s})}function O(t,r,i,o){var s=e.filter(i,function(e){return!!o[e.id]});return e.unionBy(t.childrenSet,s,r.childrenSet,"id")}function x(e){e.getSiteAspect("actionsAspect").executeAction("modeChange",B.MODE_CHANGED_EXECUTE)}function R(t,r,i){return e.map(t,function(e){return{id:r.get(i.getInnerPointer(e,["id"])),componentType:r.get(i.getInnerPointer(e,["componentType"]))}})}function T(e,t,r){var i=e&&t.components.getChildrenContainer(e);return i&&r.get(i)}function D(){var t=this.props.mobxObserverWrapperProps.viewerPrivateServices.displayedDAL,r=this.props.mobxObserverWrapperProps.viewerPrivateServices.pointers,i=this.props.mobxObserverWrapperProps.siteAPI.getSiteData();this.pagePointer=this.props.pagePointer||o.computed(function(){var e=i.getViewMode();return r.components.getPage(this.props.rootId,e)||r.components.getMasterPage(e)},{context:this,compareStructural:!0,name:"pagePointer_"+this.props.id}),this.childrenPointers=o.computed(function(){var e=r.components.getComponent(this.props.id,this.pagePointer.get());return T(e,r,t),e?r.components.getChildren(e):[]},{context:this,compareStructural:!0,name:"childrenPointers_"+this.props.id}),this.isPageStub=this.props.isPageStub||o.computed(function(){return!d(this.props.mobxObserverWrapperProps.siteAPI,this.props.rootId)},{context:this,name:"isPageStub_"+this.props.id}),this.computedChildrenToRender=o.computed(function(){var i=this.childrenPointers.get();return this.isPageStub.get()&&(i=e.filter(this.childrenPointers.get(),v.bind(this,this.props.mobxObserverWrapperProps.siteAPI,t,r))),R(i,t,r)},{context:this,compareStructural:!0,name:"computedChildrenToRender_"+this.props.id}),this.magicStructure=new a(i,t,r,this.props.id,this.pagePointer,this.computedChildrenToRender,this.props.computedParentDimensions),this.computedDimensions=o.computed(function(){return this.magicStructure.dimensions},{name:"computedDimensions_"+this.props.id,context:this}),this.shouldRenderInStub=o.computed(function(){var t=this.isPageStub.get(),r=e.isEmpty(this.computedChildrenToRender.get()),i=this.magicStructure.componentType;return!t||!r||e.includes(this.props.mobxObserverWrapperProps.siteAPI.COMPONENTS_TO_KEEP_IN_STUB,i)},{context:this,name:this.props.id+"_shouldRenderInStub"}),this.compModes=o.computed(function(){var i=e.get(this.magicStructure.modes,"definitions");if(e.isEmpty(i))return{};var o=this.pagePointer.get().id,s=r.activeModes.getPageActiveModes(o),n=t.get(s);return e(n).mapValues(function(t,r){return e.some(i,{modeId:r})}).pickBy().value()},{context:this,compareStructural:!0,name:this.props.id+"_activeModes"}),this.compBehaviors=o.computed(function(){var e=this.props.mobxObserverWrapperProps.siteAPI,t=this.magicStructure.propertyQuery,r=this.magicStructure.behaviorQuery;return V.getCompBehaviors(e,t,r,this.props.rootId)},{context:this,compareStructural:!0})}function E(){var e=this.props.mobxObserverWrapperProps.siteAPI,t=this.props.mobxObserverWrapperProps.siteAPI.getPointers(),r=this.props.mobxObserverWrapperProps.siteAPI.getDisplayedDAL(),i=this.pagePointer.get(),o=t.components.getComponent(this.props.id,i);(this.props.structure||o&&r.isExist(o))&&e.registerCompBehaviours(this.props.rootId,this.props.id,this.compBehaviors.get())}function M(){return o.observe(this.compBehaviors,E.bind(this),{})}function W(e){return e.replace(/[A-Z]/g,function(e){return"-"+e.toLowerCase()})}function _(t,r,i){return e.includes(t.getRenderRealtimeConfigItem("compsToShowOnTop"),r)?p.style.MAX_Z_INDEX:i?t.getRenderFlag("renderFixedPositionContainers")?50:49:""}function N(r,o,s,n,c){var a=r.getComponentByPageAndCompId(o,s);if(a){var u=e.clone(n),d=p.style.getPrefixedTransform(),h=W(d);u[h]=n[d],d!==h&&(u[d]=""),u.zIndex=_(r,s,c),a.hasOwnProperty("getRootStyle")&&e.assign(u,a.getRootStyle(u)),t(i.findDOMNode(a)).css(u)}}function U(t,r,i){var o=e.omitBy(r,function(e,r){return t[r]===e}),s=1===e.size(o)&&!!o.style&&!e.isEqual(t.style,r.style)&&r.style.display===t.style.display;return e.isFunction(i.compSpecificIsDomOnly)?s&&i.compSpecificIsDomOnly(t,r):s}var B=n.triggerTypesConsts,L=u.computedPropsBuilder,V=u.propsBuilderUtil,F={ENTER:n.siteConstants.Animations.Modes.AnimationType.ENTER,LEAVE:n.siteConstants.Animations.Modes.AnimationType.LEAVE,TRANSITION:n.siteConstants.Animations.Modes.AnimationType.TRANSITION};return function(t,i){return s.observer(r.createClass({displayName:g(i,t),mixins:[p.renderDoneMixin],propTypes:{id:r.PropTypes.string.isRequired,structure:r.PropTypes.object,rootId:r.PropTypes.string,mobxObserverWrapperProps:r.PropTypes.object,applyStyleOverrides:r.PropTypes.bool},componentWillMount:function(){this.transitioningChildrenPrevLayout={},this.currentlyAnimatingChildren={},this.childrenAnimations={},this.renderedCompProps={},this.childrenToRender={},this.lastRenderedComp=null,this.isDomOnly=!1,D.call(this),this.prevActiveModes=null,this.disposeReactions=M.call(this),this.props.mobxObserverWrapperProps.siteAPI.setComponentRenderStart(this.props.id||this.props.structure.id)},componentWillUpdate:function(){this.props.mobxObserverWrapperProps.siteAPI.setComponentRenderStart(this.props.id||this.props.structure.id)},componentWillReact:function(){this.props.mobxObserverWrapperProps.siteAPI.getSiteData().reacted=!0,this.props.mobxObserverWrapperProps.siteAPI.setComponentRenderStart(this.props.id||this.props.structure.id)},componentWillUnmount:function(){var t=this.props.mobxObserverWrapperProps.siteAPI;t.cancelReLayoutPending(this.props.id||this.props.structure.id),t.unregisterCompBehaviours(this.props.rootId,this.props.id||this.props.structure.id),e.invoke(this,"disposeReactions")},componentDidMount:function(){E.call(this),this.prevActiveModes=this.compModes.get(),p.displayedOnlyStructureUtil.isDisplayedComponent(this.props.id)&&this.props.mobxObserverWrapperProps.siteAPI.requestEnforceAnchors(),this.props.mobxObserverWrapperProps.siteAPI.setComponentRenderEnd(this.props.id||this.props.structure.id)},getModesChanges:function(){return this.prevActiveModes?n.modes.getModeChanges(this.prevActiveModes,this.compModes.get()):{}},componentDidUpdate:function(){var t=this.props.mobxObserverWrapperProps.siteAPI,r=t.getSiteAspect("WidgetAspect").isContextReady(this.props.rootId);if(this.isDomOnly&&t.isDuringPostUpdatesOperations(this.props.id)||!r)return t.removePostUpdateOperationsRender(this.props.id),void t.cancelReLayoutPending(this.props.id);if(y(this.childrenAnimations)&&(I(this.props.rootId,t,this.getModesChanges(),this.childrenAnimations,this.transitioningChildrenPrevLayout,this.handleModeChangeAnimationsFinished),x(t),this.childrenAnimations={},this.transitioningChildrenPrevLayout={}),this.isDomOnly){this.isDomOnly=!1;var i=this.renderedCompProps.style,o=e.get(this.magicStructure,"layout.fixedPosition",!1);N(t,this.props.rootId,this.props.id,i,o)}var s=this.props.mobxObserverWrapperProps.siteAPI.getPointers(),n=this.props.mobxObserverWrapperProps.siteAPI.getDisplayedDAL(),c=this.pagePointer.get(),a=this.computedChildrenToRender.get();this.childrenData={rotationDegrees:e.reduce(a,function(t,r){var i=r.id,o=s.components.getComponent(i,c);return e.set(t,i,n.get(s.getInnerPointer(o,"layout.rotationInDegrees")))},{})},this.prevActiveModes=this.compModes.get(),p.displayedOnlyStructureUtil.isDisplayedComponent(this.props.id)&&t.requestEnforceAnchors(),t.setComponentRenderEnd(this.props.id||this.props.structure.id)},getRenderedCompProps:function(t,r){var i=t.mobxObserverWrapperProps.siteAPI,o=this.currentlyAnimatingChildren,s=this.getModesChanges(),n=!e.isEmpty(s),p=f(t.structure||this.magicStructure,this.props.structure?[]:this.computedChildrenToRender.get(),n,t,r);if(n){var c=C(p.isAffectedByModeChanges,s,this.computedChildrenToRender.get());this.childrenAnimations=b(r,p,c),this.transitioningChildrenPrevLayout=A(i,this.childrenAnimations,this.childrenData),e.assign(o,this.childrenAnimations)}return y(o)?this.childrenToRender=O(r,p,this.childrenToRender,o):this.childrenToRender=p.childrenSet,e.assign(p,{pageStub:this.isPageStub.get(),ref:this.compRefFunction},this.props)},compRefFunction:function(e){this.props.mobxObserverWrapperProps.addComponentRef&&this.props.mobxObserverWrapperProps.addComponentRef(e,this.props.id)},getChildProps:function(t){return{id:t,rootId:this.props.rootId,anyChangeInParentActiveModes:!(!this.props.anyChangeInParentActiveModes&&e.isEmpty(this.getModesChanges())),computedParentDimensions:this.computedDimensions,mobxObserverWrapperProps:this.props.mobxObserverWrapperProps,pagePointer:this.pagePointer,isPageStub:this.isPageStub,key:t,refInParent:t}},render:function(){var t=this.props.mobxObserverWrapperProps.siteAPI.getSiteAspect("WidgetAspect").isContextReady(this.props.rootId);if(!this.props.structure&&!this.magicStructure.id||!this.shouldRenderInStub.get()||!t&&!this.isPageStub.get())return this.lastRenderedComp;var o=e.clone(this.renderedCompProps);if(this.renderedCompProps=this.getRenderedCompProps(this.props,o),this.isDomOnly=U(o,this.renderedCompProps,i),this.isDomOnly)return this.lastRenderedComp;var s=e.map(this.childrenToRender,function(e){return P(e.componentType)(this.getChildProps(e.id))}.bind(this)),n=e.omit(this.renderedCompProps,["mobxObserverWrapperProps","childrenSet","isPageStub","pagePointer"]);return this.lastRenderedComp=r.createElement(i,n,s),this.lastRenderedComp},handleModeChangeAnimationsFinished:function(t){this.currentlyAnimatingChildren=e.omit(this.currentlyAnimatingChildren,e.keys(t)),y(this.currentlyAnimatingChildren)||this.forceUpdate()}}))}}),define("compUtils",["compUtils/core/compFactory","compUtils/core/mobxObserverWrapper"],function(e,t){"use strict";return{compFactory:e,mobxObserverWrapper:t}});
//# sourceMappingURL=compUtils.min.js.map