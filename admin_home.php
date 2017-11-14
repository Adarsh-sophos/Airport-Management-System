<?php session_start(); 
if(!isset($_SESSION["id"]) or $_SESSION["id"]==0)
header('Location: https://ide50-sakshamagarwal51d3.cs50.io/admin_login.php');
?>
<!DOCTYPE html>
<html class=""><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">


    <meta charset="utf-8">
<title>adarsh | admin_home</title>
<meta name="fb_admins_meta_tag" content="">
<link rel="shortcut icon" href="https://www.wix.com/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="https://www.wix.com/favicon.ico" type="image/x-icon">
    <script type="text/javascript">
    var santaBase = 'https://static.parastorage.com/services/santa/1.2555.21';
                var clientSideRender = true;
                </script>

<script defer="defer" src="admin_files/require.js"></script>
<script defer="defer" src="admin_files/main-r.js"></script>

    <meta http-equiv="X-Wix-Renderer-Server" content="app-jvm-23-103.42.wixprod.net">
<meta http-equiv="X-Wix-Meta-Site-Id" content="96805060-17cb-49d1-9235-cbf4217a53b5">
<meta http-equiv="X-Wix-Application-Instance-Id" content="c5e1d1c6-77ee-4b99-a958-42f76c36bf21">
<meta http-equiv="X-Wix-Published-Version" content="191">

<meta http-equiv="etag" content="70681f69c07a80e9b1e01a89fb0a22f9">

<meta property="og:type" content="article">

<meta property="og:site_name" content="adarsh">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

<meta id="wixMobileViewport" name="viewport" content="width=980, user-scalable=yes">





    <script>
    // BEAT MESSAGE
    try {
        window.wixBiSession = {
            initialTimestamp : Date.now(),
                        viewerSessionId: 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c)
                    { var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); return v.toString(16); }
            )

                                };
        (new Image()).src = 'https://frog.wix.com/bt?src=29&evid=3&pn=1&et=1&v=1.2555.21&msid=96805060-17cb-49d1-9235-cbf4217a53b5&vsi=' + wixBiSession.viewerSessionId +
                '&url=' + encodeURIComponent(location.href.replace(/^http(s)?:\/\/(www\.)?/, '')) +
                '&isp=0&st=2&ts=0&iss=0&c=' + wixBiSession.initialTimestamp;
    } catch (e){}
    // BEAT MESSAGE END
</script>



    <!-- META DATA -->
<script type="text/javascript">

    var serviceTopology = {"serverName":"app-jvm-23-103.42.wixprod.net","cacheKillerVersion":"1","staticServerUrl":"https://static.parastorage.com/","usersScriptsRoot":"https://static.parastorage.com/services/wix-users/2.660.0","biServerUrl":"https://frog.wix.com/","userServerUrl":"https://users.wix.com/","billingServerUrl":"https://premium.wix.com/","mediaRootUrl":"https://static.wixstatic.com/","logServerUrl":"https://frog.wix.com/plebs","monitoringServerUrl":"https://TODO/","usersClientApiUrl":"https://users.wix.com/wix-users","publicStaticBaseUri":"https://static.parastorage.com/services/wix-public/1.235.0","basePublicUrl":"https://www.wix.com/","postLoginUrl":"https://www.wix.com/my-account","postSignUpUrl":"https://www.wix.com/new/account","baseDomain":"wix.com","staticMediaUrl":"https://static.wixstatic.com/media","staticAudioUrl":"https://music.wixstatic.com/mp3","staticDocsUrl":"https://docs.wixstatic.com/ugd","emailServer":"https://assets.wix.com/common-services/notification/invoke","blobUrl":"https://static.parastorage.com/wix_blob","htmlEditorUrl":"http://editor.wix.com/html","siteMembersUrl":"https://users.wix.com/wix-sm","scriptsLocationMap":{"dbsm-viewer-app":"https://static.parastorage.com/services/dbsm-viewer-app/1.162.0","wix-music-embed":"https://static.parastorage.com/services/wix-music-embed/1.26.0","santa-resources":"https://static.parastorage.com/services/santa-resources/1.2.0","wixapps":"https://static.parastorage.com/services/wixapps/2.486.0","ecommerce":"https://static.parastorage.com/services/ecommerce/1.203.0","dbsm-editor-app":"https://static.parastorage.com/services/dbsm-editor-app/1.350.0","langs":"https://static.parastorage.com/services/langs/2.572.0","semi-native-sdk":"https://static.parastorage.com/services/semi-native-sdk/1.6.0","automation":"https://static.parastorage.com/services/automation/1.23.0","web":"https://static.parastorage.com/services/web/2.1229.79","sitemembers":"https://static.parastorage.com/services/sm-js-sdk/1.31.0","js-wixcode-sdk":"https://static.parastorage.com/services/js-wixcode-sdk/1.165.0","tpa":"https://static.parastorage.com/services/tpa/2.1062.0","wix-form-builder":"https://static.parastorage.com/services/wix-form-builder/1.48.0","wix-code-platform":"https://static.parastorage.com/services/wix-code-platform/1.20.0","santa":"https://static.parastorage.com/services/santa/1.2555.21","skins":"https://static.parastorage.com/services/skins/2.1229.79","core":"https://static.parastorage.com/services/core/2.1229.79","santa-members-viewer-app":"https://static.parastorage.com/services/santa-members-viewer-app/1.22.0","ck-editor":"https://static.parastorage.com/services/ck-editor/1.87.3","bootstrap":"https://static.parastorage.com/services/bootstrap/2.1229.79","santa-members-editor-app":"https://static.parastorage.com/services/santa-members-editor-app/1.58.0"},"developerMode":false,"productionMode":true,"staticServerFallbackUrl":"https://sslstatic.wix.com/","staticVideoUrl":"https://video.wixstatic.com/","cloudStorageUrl":"https://static.wixstatic.com/","usersDomainUrl":"https://users.wix.com/wix-users","scriptsDomainUrl":"https://static.parastorage.com/","userFilesUrl":"https://static.parastorage.com/","staticHTMLComponentUrl":"https://adarshjain583-wixsite-com.filesusr.com/","secured":true,"ecommerceCheckoutUrl":"https://www.safer-checkout.com/","premiumServerUrl":"https://premium.wix.com/","digitalGoodsServerUrl":"https://dgs.wixapps.net/","wixCloudBaseDomain":"wix-code.com","mailServiceSuffix":"/_api/common-services/notification/invoke","staticVideoHeadRequestUrl":"https://storage.googleapis.com/video.wixstatic.com","protectedPageResolverUrl":"https://site-pages.wix.com/_api/wix-public-html-info-webapp/resolve_protected_page_urls","mediaUploadServerUrl":"https://files.wix.com/","staticServerWixDomainUrl":"https://www.wix.com/_partials","publicStaticsUrl":"https://static.parastorage.com/services/wix-public/1.235.0"};
    var santaModels = true;
    var rendererModel = {"metaSiteId":"96805060-17cb-49d1-9235-cbf4217a53b5","siteInfo":{"documentType":"UGC","applicationType":"HtmlWeb","siteId":"c5e1d1c6-77ee-4b99-a958-42f76c36bf21","siteTitleSEO":"adarsh"},"clientSpecMap":{"2109":{"type":"public","applicationId":2109,"appDefinitionId":"134139f3-f2a0-2c2c-693c-ed22165cfd84","appDefinitionName":"Table Master","instance":"SQvb8wscqWUjj9gkUz8okcZWezHF4Y_TtZsy7ltR6n0.eyJpbnN0YW5jZUlkIjoiOTFmNTBmN2MtMzA0OC00OTJkLWFjOGMtZTVhNTdhMzliZDcxIiwiYXBwRGVmSWQiOiIxMzQxMzlmMy1mMmEwLTJjMmMtNjkzYy1lZDIyMTY1Y2ZkODQiLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQxWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOmZhbHNlLCJhaWQiOiJlZWYyYTVkYS01ZTQzLTQ1YjctYTZiMy0yOTgyM2M4YTYwOGYiLCJiaVRva2VuIjoiMDc3NTVmMWMtMjc4My0wMGZjLTNlYjktMmU1MTViNDNlZWM0Iiwic2l0ZU93bmVySWQiOiI5ZmI1Y2EzMi01M2RjLTQzMjctOGY2OC0yMmYzMTc2YWEwNDgifQ","sectionPublished":true,"sectionMobilePublished":false,"sectionSeoEnabled":true,"widgets":{"13413a43-5f07-2918-9924-bc7506a64d36":{"widgetUrl":"https:\/\/wix-visual-data.appspot.com\/app\/widget","widgetId":"13413a43-5f07-2918-9924-bc7506a64d36","refreshOnWidthChange":true,"mobileUrl":"https:\/\/wix-visual-data.appspot.com\/app\/widgetmobile","published":true,"mobilePublished":true,"seoEnabled":true,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":null}},"appRequirements":{"requireSiteMembers":false},"isWixTPA":true,"installedAtDashboard":false,"permissions":{"revoked":false},"appFields":null},"5":{"type":"onboarding","applicationId":5,"storyId":"15b81b4d-c26e-499f-8520-26c160b54286","inUse":false},"3983":{"type":"public","applicationId":3983,"appDefinitionId":"133c8e95-912a-8826-fa26-5a00a9bcf574","appDefinitionName":"Form Builder Plus+","instance":"RfeTnlzLK5yah5NvbOTRiJzFMx9tTVFcJtfDTQnftkg.eyJpbnN0YW5jZUlkIjoiMGVkZDhhMWYtZDZiMC00ZTk0LWJlMTYtMTExMjI4MTdkYzkyIiwiYXBwRGVmSWQiOiIxMzNjOGU5NS05MTJhLTg4MjYtZmEyNi01YTAwYTliY2Y1NzQiLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQyWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOmZhbHNlLCJhaWQiOiJlZWYyYTVkYS01ZTQzLTQ1YjctYTZiMy0yOTgyM2M4YTYwOGYiLCJzaXRlT3duZXJJZCI6IjlmYjVjYTMyLTUzZGMtNDMyNy04ZjY4LTIyZjMxNzZhYTA0OCJ9","sectionPublished":true,"sectionMobilePublished":false,"sectionSeoEnabled":true,"widgets":{"133c8eb5-1cf8-3b17-ea6e-02ae4cc2e2a6":{"widgetUrl":"https:\/\/www.powr.io\/plugins\/form-builder\/wix_cached_view","widgetId":"133c8eb5-1cf8-3b17-ea6e-02ae4cc2e2a6","refreshOnWidthChange":true,"mobileUrl":"https:\/\/www.powr.io\/plugins\/form-builder\/wix_cached_view","published":true,"mobilePublished":true,"seoEnabled":true,"preFetch":false,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}}},"appRequirements":{"requireSiteMembers":false},"isWixTPA":false,"installedAtDashboard":true,"permissions":{"revoked":false},"appFields":{}},"3018":{"type":"public","applicationId":3018,"appDefinitionId":"12aacf69-f3fb-5334-2847-e00a8f13c12f","appDefinitionName":"123 Form Builder","instance":"ptiNvOrymbas9XSfxRxk2g4LBRh1C-icM1ExmWZxYGk.eyJpbnN0YW5jZUlkIjoiZWNjZmUwM2UtYThhYS00YWY5LWI3YmYtMmE0MDRkM2EwZTRiIiwiYXBwRGVmSWQiOiIxMmFhY2Y2OS1mM2ZiLTUzMzQtMjg0Ny1lMDBhOGYxM2MxMmYiLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQyWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOmZhbHNlLCJhaWQiOiJlZWYyYTVkYS01ZTQzLTQ1YjctYTZiMy0yOTgyM2M4YTYwOGYiLCJzaXRlT3duZXJJZCI6IjlmYjVjYTMyLTUzZGMtNDMyNy04ZjY4LTIyZjMxNzZhYTA0OCJ9","sectionPublished":true,"sectionMobilePublished":false,"sectionSeoEnabled":true,"widgets":{"12aacf69-f3be-4d15-c1f5-e10b8281822e":{"widgetUrl":"https:\/\/www.123contactform.com\/wix.php","widgetId":"12aacf69-f3be-4d15-c1f5-e10b8281822e","refreshOnWidthChange":true,"mobileUrl":"https:\/\/www.123contactform.com\/wix.php?forcemobile=1","published":true,"mobilePublished":true,"seoEnabled":true,"preFetch":false,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}}},"appRequirements":{"requireSiteMembers":false},"isWixTPA":false,"installedAtDashboard":false,"permissions":{"revoked":true},"appFields":{}},"13":{"type":"sitemembers","applicationId":13,"collectionType":"Open","collectionFormFace":"Register","smcollectionId":"0766893d-1e38-47ae-8912-3980c7c677b5"},"2":{"type":"appbuilder","applicationId":2,"appDefinitionId":"3d590cbc-4907-4cc4-b0b1-ddf2c5edf297","instanceId":"1a4daf15-8768-4981-9d35-eb309cfb988c","state":"Initialized"},"1801":{"type":"public","applicationId":1801,"appDefinitionId":"13d21c63-b5ec-5912-8397-c3a5ddb27a97","appDefinitionName":"Wix Bookings","instance":"Mc2JyeaN8In204WDZHMPTYlF4wElOKwE_LDX0rY1WhY.eyJpbnN0YW5jZUlkIjoiYWUzYzhjMTgtNjk2OC00NGZhLWJlNzMtYTQwZDQwZTk3MzI4IiwiYXBwRGVmSWQiOiIxM2QyMWM2My1iNWVjLTU5MTItODM5Ny1jM2E1ZGRiMjdhOTciLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQxWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOmZhbHNlLCJhaWQiOiJlZWYyYTVkYS01ZTQzLTQ1YjctYTZiMy0yOTgyM2M4YTYwOGYiLCJiaVRva2VuIjoiMzhiY2RjNzgtN2VhMy0wZDJiLTJjNDYtNmZmOTYxOTMyMDlkIiwic2l0ZU93bmVySWQiOiI5ZmI1Y2EzMi01M2RjLTQzMjctOGY2OC0yMmYzMTc2YWEwNDgifQ","sectionUrl":"https:\/\/bookings.wixapps.net\/index","sectionMobileUrl":"https:\/\/bookings.wixapps.net\/mobile","sectionPublished":true,"sectionMobilePublished":true,"sectionSeoEnabled":true,"sectionDefaultPage":"","sectionRefreshOnWidthChange":true,"widgets":{"13d27016-697f-b82f-7512-8e20854c09f6":{"widgetUrl":"https:\/\/bookings.wixapps.net\/index","widgetId":"13d27016-697f-b82f-7512-8e20854c09f6","refreshOnWidthChange":true,"mobileUrl":"https:\/\/bookings.wixapps.net\/mobile","appPage":{"id":"scheduler","name":"Book Online","defaultPage":"","hidden":false,"multiInstanceEnabled":false,"order":1,"indexable":true,"fullPage":false,"landingPageInMobile":false,"hideFromMenu":false},"published":true,"mobilePublished":true,"seoEnabled":true,"preFetch":true,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}},"14edb332-fdb9-2fe6-0fd1-e6293322b83b":{"widgetUrl":"https:\/\/bookings.wixapps.net\/member-area","widgetId":"14edb332-fdb9-2fe6-0fd1-e6293322b83b","refreshOnWidthChange":true,"mobileUrl":"https:\/\/bookings.wixapps.net\/member-area-mobile","appPage":{"id":"bookings_member_area","name":"My Bookings","defaultPage":"","hidden":true,"multiInstanceEnabled":false,"order":2,"indexable":true,"fullPage":false,"landingPageInMobile":false,"hideFromMenu":false},"published":true,"mobilePublished":true,"seoEnabled":false,"preFetch":false,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}},"14756c3d-f10a-45fc-4df1-808f22aabe80":{"widgetUrl":"https:\/\/bookings.wixapps.net\/widget-viewer","widgetId":"14756c3d-f10a-45fc-4df1-808f22aabe80","refreshOnWidthChange":true,"mobileUrl":"https:\/\/bookings.wixapps.net\/widget-viewer","published":true,"mobilePublished":false,"seoEnabled":true,"preFetch":false,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}}},"appRequirements":{"requireSiteMembers":false},"isWixTPA":true,"installedAtDashboard":true,"permissions":{"revoked":false},"appFields":{"platform":{"editorScriptUrl":"https:\/\/static.parastorage.com\/services\/bookings-member-area-statics\/1.4.0\/statics\/editor-script.bundle.js"}}},"3":{"type":"public","applicationId":3,"appDefinitionId":"135c3d92-0fea-1f9d-2ba5-2a1dfb04297e","appDefinitionName":"Email Marketing","instance":"6cETSOoOcyvTVNFJI3H-AazU2UjsFJeAipKMJIBa8Bg.eyJpbnN0YW5jZUlkIjoiYmJkNTcyNTMtOGE1Ni00NWFkLTlhN2YtYzNjM2UxMzY0ODRhIiwiYXBwRGVmSWQiOiIxMzVjM2Q5Mi0wZmVhLTFmOWQtMmJhNS0yYTFkZmIwNDI5N2UiLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQwWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOnRydWUsImFpZCI6ImVlZjJhNWRhLTVlNDMtNDViNy1hNmIzLTI5ODIzYzhhNjA4ZiIsImJpVG9rZW4iOiIyZDU1MjIzMy05ZDlkLTBjN2MtMDg0YS0wODM3YzA0YzFiZmYiLCJzaXRlT3duZXJJZCI6IjlmYjVjYTMyLTUzZGMtNDMyNy04ZjY4LTIyZjMxNzZhYTA0OCJ9","sectionPublished":true,"sectionMobilePublished":false,"sectionSeoEnabled":true,"widgets":{"141995eb-c700-8487-6366-a482f7432e2b":{"widgetUrl":"https:\/\/so-feed.codev.wixapps.net\/widget","widgetId":"141995eb-c700-8487-6366-a482f7432e2b","refreshOnWidthChange":true,"mobileUrl":"https:\/\/so-feed.codev.wixapps.net\/widget","published":true,"mobilePublished":true,"seoEnabled":true,"preFetch":false,"shouldBeStretchedByDefault":false,"shouldBeStretchedByDefaultMobile":false,"componentFields":{}}},"appRequirements":{"requireSiteMembers":false},"isWixTPA":true,"installedAtDashboard":true,"permissions":{"revoked":false},"appFields":null},"4":{"type":"public","applicationId":4,"appDefinitionId":"139ef4fa-c108-8f9a-c7be-d5f492a2c939","appDefinitionName":"Automated Emails","instance":"8rzwq_3AaNW1a5Ahw5x9qMEM0He45Bz94JN6NUvCtZo.eyJpbnN0YW5jZUlkIjoiMGUxODFiMDUtYmU0ZC00ZmY5LTk2YWEtNjE1YTcxYzYxNWMzIiwiYXBwRGVmSWQiOiIxMzllZjRmYS1jMTA4LThmOWEtYzdiZS1kNWY0OTJhMmM5MzkiLCJzaWduRGF0ZSI6IjIwMTctMTEtMTRUMTA6NTU6MTUuNjQxWiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiNDcuOS4xNjAuMC81MzQzNiIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOnRydWUsImFpZCI6ImVlZjJhNWRhLTVlNDMtNDViNy1hNmIzLTI5ODIzYzhhNjA4ZiIsImJpVG9rZW4iOiI5ODk4NGI2NS1hOTg2LTA2MjgtMDQ5Zi1hYWFlNTBiYzQ2NzYiLCJzaXRlT3duZXJJZCI6IjlmYjVjYTMyLTUzZGMtNDMyNy04ZjY4LTIyZjMxNzZhYTA0OCJ9","sectionPublished":true,"sectionMobilePublished":false,"sectionSeoEnabled":true,"widgets":{},"appRequirements":{"requireSiteMembers":false},"isWixTPA":true,"installedAtDashboard":true,"permissions":{"revoked":false}}},"premiumFeatures":[],"geo":"IND","languageCode":"en","previewMode":false,"userId":"9fb5ca32-53dc-4327-8f68-22f3176aa048","siteMetaData":{"preloader":{"uri":"","enabled":false},"adaptiveMobileOn":true,"quickActions":{"socialLinks":[],"colorScheme":"dark","configuration":{"quickActionsMenuEnabled":false,"navigationMenuEnabled":true,"phoneEnabled":false,"emailEnabled":false,"addressEnabled":false,"socialLinksEnabled":false}},"contactInfo":{"companyName":"","phone":"","fax":"","email":"","address":""}},"runningExperiments":{"sv_fullstory":"new","appMarketCache":"new","reactAppMarketModals":"new","sv_hoverBox":"new","sv_dpages":"new","selectiveWixapps":"new","sv_ampLinkTag":"new","sv_twitterMetaTags":"new","sv_mobileBgFixed":"new","sv_blogTranslateErrorMessage":"new","sv_expandModeBi":"new","sv_splitRouterUrls":"new","unescapeHeadTags":"old","sv_cssDesignData":"new","useBeaconForPerformanceEvent":"new","checkRenderTime":"new","sv_blogCountersHttpsRequest":"new","viewPortImageLoadingBi":"3000","reactAppMarket":"new","fontsTrackingInViewer":"new","sv_blogSocialCounters":"new","enableNewWixAds":"new","viewPortImageLoading":"new","allowScriptTagTypeJsonOnSeoMetatag":"old","se_proGalleryBGDataFixer":"new","permalinkWithoutDate":"new","sv_qabUnhide":"new","sv_inlineExternalStyles":"new","sv_mobileBG":"new","sv_blogAuthorAsALink":"new","packagescache":"new","fontScaling":"new","sv_markSkinsForDeletion":"new","selectiveDownload":"new","sv_tpaAddChatApp":"new","prefetchComps":"new","sv_permissionInfoUpdateOnFirstSave":"new","sv_blogOldUrlShareFix":"new","sv_SendSdkMethodBI":"new","sv_fullPartialSave":"new","sv_horizontalContactFormSkin":"old","sv_qab":"new","sv_browserLangFix":"new","sv_robotsIndexingMetaTag":"new","sv_grid":"new","vsiCoin":"new","sv_mobileSpachtelPattern":"new","sv_tpaPerformanceBi":"new","sv_unpackTextMeasureByMinHeight":"new","sv_requireSplitError":"new","sv_alwaysEnableMobileZoom":"new","sv_tpaFilterSubSections":"new"},"urlFormatModel":{"format":"slash","forbiddenPageUriSEOs":["app","apps","_api","robots.txt","sitemap.xml","feed.xml","sites"],"pageIdToResolvedUriSEO":{}},"passwordProtectedPages":[],"useSandboxInHTMLComp":true,"siteMediaToken":"eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhcHA6MzQ2NjQ5MDcwMDI5NzIwNiIsInN1YiI6InVzZXI6OWZiNWNhMzItNTNkYy00MzI3LThmNjgtMjJmMzE3NmFhMDQ4IiwiYXVkIjoidXJuOnNlcnZpY2U6ZmlsZS51cGxvYWQiLCJleHAiOjE1MTEyNjE3MTUsImlhdCI6MTUxMDY1NjkxNSwianRpIjoiSGtBTTQ1MGxaNlQtMDBTbmlOUUs1QSJ9.36kmIkyEnMHiCgqugPDULsM4touHSMEFlGJ4s0nN6Hg","pagesPlatformApplications":{}};
    var publicModel = {"domain":"wixsite.com","externalBaseUrl":"https:\/\/adarshjain583.wixsite.com\/adarsh","unicodeExternalBaseUrl":"https:\/\/adarshjain583.wixsite.com\/adarsh","pageList":{"pages":[{"pageId":"ou95p","title":"Metro","pageUriSEO":"copy-of-transport-and-directions-1","pageJsonFileName":"9fb5ca_9abe2822cb4cd64c39f635f4eaf0cbe4_179.json"},{"pageId":"kpwkb","title":"Shop","pageUriSEO":"copy-of-eat","pageJsonFileName":"9fb5ca_75a35c4d8ece165fe7d2b0bc417ebaf2_179.json"},{"pageId":"x9vxn","title":"airport_names","pageUriSEO":"airport-names","pageJsonFileName":"9fb5ca_748704aad60e577360c73fe65ae504db_157.json"},{"pageId":"ltfha","title":"Transport and Directions","pageUriSEO":"copy-of-flight-information","pageJsonFileName":"9fb5ca_d353f46e567466fbf9cd9207b49f6bd9_117.json"},{"pageId":"dy11g","title":"Parking","pageUriSEO":"copy-of-inter-terminal-transfers","pageJsonFileName":"9fb5ca_8ad102870cd5589076a213abe1340b18_179.json"},{"pageId":"me2kk","title":"Restaurants","pageUriSEO":"restaurants","pageJsonFileName":"9fb5ca_a1f168e97c016ce702a49e1d3a80b86d_163.json"},{"pageId":"j7h1a","title":"Departures","pageUriSEO":"departures-1","pageJsonFileName":"9fb5ca_36096994cd6234bc66e22e23e68d06d0_179.json"},{"pageId":"h6ze9","title":"Flight Timetable","pageUriSEO":"copy-of-departures","pageJsonFileName":"9fb5ca_9e719378d490a782a7828a7d7de2b1b8_179.json"},{"pageId":"fzxjr","title":"Coffee Shop","pageUriSEO":"coffee-shop","pageJsonFileName":"9fb5ca_822ebfc8289fa2486dde0cd8a74f0026_179.json"},{"pageId":"r9oc4","title":"admin_home","pageUriSEO":"copy-of-time-table","pageJsonFileName":"9fb5ca_cf22b5e2a1f986169b8524c273690e19_191.json"},{"pageId":"lvvdu","title":"Home","pageUriSEO":"blank","pageJsonFileName":"9fb5ca_202cc659f22983bf66e86e898f36ae1d_163.json"},{"pageId":"rdd1r","title":"Train","pageUriSEO":"copy-of-taxi","pageJsonFileName":"9fb5ca_5e994ced39ec14a0ed3b092232e8ad1a_179.json"},{"pageId":"brzyp","title":"Flight Information","pageUriSEO":"flight-information","pageJsonFileName":"9fb5ca_b9838483d55c796279adb9af7ae1ab36_117.json"},{"pageId":"pni4e","title":"Departures","pageUriSEO":"departures","pageJsonFileName":"9fb5ca_92185e8deefb0be5deb1971fb88ebbc0_163.json"},{"pageId":"e4uto","title":"Time Table","pageUriSEO":"time-table","pageJsonFileName":"9fb5ca_ed98d3c11b8854763e9da9cb6c65ba8d_179.json"},{"pageId":"b32fp","title":"Food Court","pageUriSEO":"copy-of-coffee-shop","pageJsonFileName":"9fb5ca_2bdecea55f8ae8904c6d23197abd491a_179.json"},{"pageId":"f9d9i","title":"Bus","pageUriSEO":"copy-of-transport-and-directions","pageJsonFileName":"9fb5ca_49d2aec7c2252e8c94e262cb1e6ffdfc_179.json"},{"pageId":"fxc5e","title":"car_rentals_op","pageUriSEO":"copy-of-parking-op","pageJsonFileName":"9fb5ca_a7efda169e808aacabc12313b0e567a8_179.json"},{"pageId":"wpcav","title":"Quick Service Restaurants ","pageUriSEO":"copy-of-food-court","pageJsonFileName":"9fb5ca_b1a68b0502544f6291b3dfc83631f1b0_179.json"},{"pageId":"o7cvb","title":"Electronics","pageUriSEO":"copy-of-casual-dining-1","pageJsonFileName":"9fb5ca_bd20d2930c2226c967c25647a62bc74a_179.json"},{"pageId":"iptmg","title":"Car Rentals","pageUriSEO":"copy-of-parking","pageJsonFileName":"9fb5ca_f6e40ed9a33c3a84a81a02f42dbe4bf0_179.json"},{"pageId":"zsovm","title":"Book Online","pageUriSEO":"book-online","pageJsonFileName":"9fb5ca_8216d2325d63a80852f819aac6f55834_157.json"},{"pageId":"fu7s8","title":"Casual Dining","pageUriSEO":"casual-dining","pageJsonFileName":"9fb5ca_490d4b285377559b2b2be71e7b52200f_179.json"},{"pageId":"jxe2t","title":"Arrivals","pageUriSEO":"arrivals","pageJsonFileName":"9fb5ca_8d90ce7258fa04b0ddc42dd2e2a6dd3e_179.json"},{"pageId":"zaea6","title":"Shops","pageUriSEO":"shops","pageJsonFileName":"9fb5ca_76fbb7b185c058154201b04a25828313_163.json"},{"pageId":"je0pa","title":"parking_op","pageUriSEO":"copy-of-parking-1","pageJsonFileName":"9fb5ca_98d115040a1eb5536a13c4b8d9c8f6d6_179.json"},{"pageId":"rl1d5","title":"Arrivals","pageUriSEO":"adarshkijaiho","pageJsonFileName":"9fb5ca_ae1a52fa4071a6ea3dfc912ed11f6277_159.json"},{"pageId":"z04wv","title":"Shops & Restaurants","pageUriSEO":"copy-of-flight-information-1","pageJsonFileName":"9fb5ca_f956cc42ca4f7fd161e85545ba719e74_118.json"},{"pageId":"ooozh","title":"To and From Airport","pageUriSEO":"copy-of-transport-and-directions-2","pageJsonFileName":"9fb5ca_e8b0d71df56a75ec34719e3a9b92d89b_117.json"},{"pageId":"bjuc9","title":"Taxi","pageUriSEO":"copy-of-bus","pageJsonFileName":"9fb5ca_7e38ac19ea093fcf7bc98d39ed4b40a2_179.json"},{"pageId":"xr8b8","title":"Eat","pageUriSEO":"copy-of-casual-dining","pageJsonFileName":"9fb5ca_93181406bbd9fa8e47f23e2024c81d7f_179.json"},{"pageId":"bwmgo","title":"Inter Terminal Transfers","pageUriSEO":"copy-of-train","pageJsonFileName":"9fb5ca_80c341b163d7a4c78aae679f31303f95_179.json"}],"mainPageId":"lvvdu","masterPageJsonFileName":"9fb5ca_26094d1623b9751a4149b30507fa9918_190.json","topology":[{"baseUrl":"https:\/\/static.wixstatic.com\/","parts":"sites\/{filename}.z?v=3"},{"baseUrl":"https:\/\/staticorigin.wixstatic.com\/","parts":"sites\/{filename}.z?v=3"},{"baseUrl":"https:\/\/fallback.wix.com\/","parts":"wix-html-editor-pages-webapp\/page\/{filename}"}]},"timeSincePublish":558309,"favicon":"","deviceInfo":{"deviceType":"Desktop","browserType":"Firefox","browserVersion":56},"siteRevision":191,"sessionInfo":{"hs":60342522,"svSession":"da972d648fc0fde81454d66c1ca389aee3c09acdb821b595644a83bcdd54ace78b4aa0294e6cca9fb4f372418e5760601e60994d53964e647acf431e4f798bcd49eaaf753177eed504583180abf277f2db3c0c337ef5aac5011839b3c730a347","ctToken":"YjA3NG5tQzZmcm9SdVFmZHpsbW5TdFpiand4Q3hHS0pKOEJKVGNWLVRmc3x7InVzZXJBZ2VudCI6Ik1vemlsbGEvNS4wIChXaW5kb3dzIE5UIDEwLjA7IFdpbjY0OyB4NjQ7IHJ2OjU2LjApIEdlY2tvLzIwMTAwMTAxIEZpcmVmb3gvNTYuMCIsInZhbGlkVGhyb3VnaCI6MTUxMTI2MTcxNTY0MH0","isAnonymous":false},"metaSiteFlags":[],"siteMembersProtectedPages":[],"indexable":true,"hasBlogAmp":false,"renderTime":1510656915643};



    var googleAnalytics = "UA-2117194-61"
    ;

    var ipAnonymization = false;

    var googleRemarketing = "";
    var facebookRemarketing = "";
    var yandexMetrika = "";

</script>



            <meta name="fragment" content="!">

    </head>

<body class="" style="">
        <div id="SITE_CONTAINER" data-santa-render-status="CLIENT"><div data-reactroot="" class="noop" data-santa-version="1.2555.21"><div><style type="text/css" data-styleid="theme_fonts">.font_0 {font: normal normal normal 32px/1.25em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_1 {font: normal normal normal 14px/1.43em 'Open Sans',sans-serif ;color:#393F44;}
.font_2 {font: normal normal normal 40px/1.25em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_3 {font: normal normal normal 88px/1.14em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_4 {font: normal normal normal 72px/1.18em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_5 {font: normal normal normal 56px/1.25em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_6 {font: normal normal normal 48px/1.25em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_7 {font: normal normal normal 24px/1.46em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_8 {font: normal normal normal 20px/1.5em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_9 {font: normal normal normal 16px/1.55em brandon-grot-w01-light,sans-serif ;color:#393F44;}
.font_10 {font: normal normal normal 14px/1.43em 'Open Sans',sans-serif ;color:#393F44;}
</style><style type="text/css" data-styleid="theme_colors">.color_0 {color: #FFFFFF;}
.backcolor_0 {background-color: #FFFFFF;}
.color_1 {color: #FFFFFF;}
.backcolor_1 {background-color: #FFFFFF;}
.color_2 {color: #000000;}
.backcolor_2 {background-color: #000000;}
.color_3 {color: #ED1C24;}
.backcolor_3 {background-color: #ED1C24;}
.color_4 {color: #0088CB;}
.backcolor_4 {background-color: #0088CB;}
.color_5 {color: #FFCB05;}
.backcolor_5 {background-color: #FFCB05;}
.color_6 {color: #727272;}
.backcolor_6 {background-color: #727272;}
.color_7 {color: #B0B0B0;}
.backcolor_7 {background-color: #B0B0B0;}
.color_8 {color: #FFFFFF;}
.backcolor_8 {background-color: #FFFFFF;}
.color_9 {color: #727272;}
.backcolor_9 {background-color: #727272;}
.color_10 {color: #B0B0B0;}
.backcolor_10 {background-color: #B0B0B0;}
.color_11 {color: #FFFFFF;}
.backcolor_11 {background-color: #FFFFFF;}
.color_12 {color: #D8D8D8;}
.backcolor_12 {background-color: #D8D8D8;}
.color_13 {color: #9A9FA5;}
.backcolor_13 {background-color: #9A9FA5;}
.color_14 {color: #6D7377;}
.backcolor_14 {background-color: #6D7377;}
.color_15 {color: #393F44;}
.backcolor_15 {background-color: #393F44;}
.color_16 {color: #9A9FA5;}
.backcolor_16 {background-color: #9A9FA5;}
.color_17 {color: #6D7377;}
.backcolor_17 {background-color: #6D7377;}
.color_18 {color: #393F44;}
.backcolor_18 {background-color: #393F44;}
.color_19 {color: #252F35;}
.backcolor_19 {background-color: #252F35;}
.color_20 {color: #000000;}
.backcolor_20 {background-color: #000000;}
.color_21 {color: #E8F8FA;}
.backcolor_21 {background-color: #E8F8FA;}
.color_22 {color: #BFDFE3;}
.backcolor_22 {background-color: #BFDFE3;}
.color_23 {color: #9FD1D6;}
.backcolor_23 {background-color: #9FD1D6;}
.color_24 {color: #87C1C7;}
.backcolor_24 {background-color: #87C1C7;}
.color_25 {color: #70B2B9;}
.backcolor_25 {background-color: #70B2B9;}
.color_26 {color: #FFFFFF;}
.backcolor_26 {background-color: #FFFFFF;}
.color_27 {color: #F6F6F6;}
.backcolor_27 {background-color: #F6F6F6;}
.color_28 {color: #D8D8D8;}
.backcolor_28 {background-color: #D8D8D8;}
.color_29 {color: #B1ABAB;}
.backcolor_29 {background-color: #B1ABAB;}
.color_30 {color: #918D8D;}
.backcolor_30 {background-color: #918D8D;}
.color_31 {color: #F8F8F8;}
.backcolor_31 {background-color: #F8F8F8;}
.color_32 {color: #E5F0F1;}
.backcolor_32 {background-color: #E5F0F1;}
.color_33 {color: #C8E4E7;}
.backcolor_33 {background-color: #C8E4E7;}
.color_34 {color: #8EBABE;}
.backcolor_34 {background-color: #8EBABE;}
.color_35 {color: #70B2B9;}
.backcolor_35 {background-color: #70B2B9;}
</style><style type="text/css" data-styleid="fc1">.fc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
.fc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
.fc1[data-state~="fixedPosition"].fc1_footer {top:auto;bottom:0;}
.fc1_bg {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(255, 255, 255, 1);  border-top:1px solid rgba(57, 63, 68, 0.15);border-bottom:0px solid rgba(57, 63, 68, 0.15);}
.fc1[data-state~="mobileView"] .fc1bg {left:10px;right:10px;}
.fc1bg {position:absolute;top:1px;right:0;bottom:0px;left:0;background-color:rgba(255, 255, 255, 1);border-radius:0;}
.fc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
.fc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="txtNew">.txtNew {word-wrap:break-word;}
.txtNew_override-left * {text-align:left !important;}
.txtNew_override-right * {text-align:right !important;}
.txtNew_override-center * {text-align:center !important;}
.txtNew_override-justify * {text-align:justify !important;}
.txtNew li {font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
.txtNew ol,.txtNew ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
.txtNew ul {list-style-type:disc;}
.txtNew ol {list-style-type:decimal;}
.txtNew ul ul,.txtNew ol ul {list-style-type:circle;}
.txtNew ul ul ul,.txtNew ol ul ul {list-style-type:square;}
.txtNew ul ol ul,.txtNew ol ol ul {list-style-type:square;}
.txtNew ul[dir="rtl"],.txtNew ol[dir="rtl"] {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
.txtNew ul[dir="rtl"] ul,.txtNew ul[dir="rtl"] ol,.txtNew ol[dir="rtl"] ul,.txtNew ol[dir="rtl"] ol {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
.txtNew p {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h1 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h2 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h3 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h4 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h5 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew h6 {margin:0;line-height:normal;letter-spacing:normal;}
.txtNew a {color:inherit;}</style><style type="text/css" data-styleid="lb1">.lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:nowrap;}
.lb1itemsContainer > li:last-child {margin:0 !important;}
.lb1[data-state~="mobileView"] .lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:normal;}
.lb1 a {display:block;height:100%;}
.lb1imageItemlink {cursor:pointer;}
.lb1imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-styleid="hc1">.hc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
.hc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
.hc1[data-state~="fixedPosition"].hc1_footer {top:auto;bottom:0;}
.hc1_bg {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(255, 255, 255, 1);  border-top:0px solid rgba(57, 63, 68, 1);border-bottom:0px solid rgba(57, 63, 68, 1);}
.hc1[data-state~="mobileView"] .hc1bg {left:10px;right:10px;}
.hc1bg {position:absolute;top:0px;right:0;bottom:0px;left:0;background-color:rgba(255, 255, 255, 1);border-radius:0;}
.hc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
.hc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="wp1">.wp1_zoomedin {cursor:url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
.wp1_zoomedout {cursor:url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
.wp1link {display:block;overflow:hidden;}
.wp1img {overflow:hidden;}
.wp1imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-styleid="style-j9b0cgbd">.style-j9b0cgbditemsContainer {width:calc(100% - 0px);height:calc(100% - 0px);white-space:nowrap;display:inline-block;overflow:visible;position:relative;}
.style-j9b0cgbdmoreContainer {overflow:visible;display:inherit;white-space:nowrap;width:auto;background-color:rgba(255, 255, 255, 1);border-radius:0;  }
.style-j9b0cgbddropWrapper {z-index:99999;display:block;opacity:1;visibility:hidden;position:absolute;margin-top:7px;}
.style-j9b0cgbddropWrapper[data-dropMode="dropUp"] {margin-top:0;margin-bottom:7px;}
.style-j9b0cgbdrepeaterButton {height:100%;position:relative;box-sizing:border-box;display:inline-block;cursor:pointer;font:normal normal normal 14px/1.43em 'Open Sans',sans-serif ;}
.style-j9b0cgbdrepeaterButton[data-state~="header"] a,.style-j9b0cgbdrepeaterButton[data-state~="header"] div {cursor:default !important;}
.style-j9b0cgbdrepeaterButtonlinkElement {display:inline-block;height:100%;width:100%;}
.style-j9b0cgbdrepeaterButton_gapper {padding:0 5px;}
.style-j9b0cgbdrepeaterButtonlabel {display:inline-block;padding:0 10px;color:#393F44;transition: color 0.4s ease 0s;}
.style-j9b0cgbdrepeaterButton[data-state~="drop"] {width:100%;display:block;}
.style-j9b0cgbdrepeaterButton[data-state~="drop"] .style-j9b0cgbdrepeaterButtonlabel {padding:0 .5em;}
.style-j9b0cgbdrepeaterButton[data-state~="over"] .style-j9b0cgbdrepeaterButtonlabel {color:#70B2B9;transition: color 0.4s ease 0s;}
.style-j9b0cgbdrepeaterButton[data-state~="selected"] .style-j9b0cgbdrepeaterButtonlabel {color:#70B2B9;transition: color 0.4s ease 0s;}</style><style type="text/css" data-styleid="style-j9tuyl5u">.style-j9tuyl5u[data-state~="shouldUseFlex"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-state~="shouldUseFlex"] .style-j9tuyl5ulabelwrapper {text-align:initial;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;}
.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="center"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="center"] .style-j9tuyl5ulabelwrapper {-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;}
.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="left"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="left"] .style-j9tuyl5ulabelwrapper {-webkit-box-pack:start;-webkit-justify-content:flex-start;justify-content:flex-start;}
.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="right"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-state~="shouldUseFlex"][data-state~="right"] .style-j9tuyl5ulabelwrapper {-webkit-box-pack:end;-webkit-justify-content:flex-end;justify-content:flex-end;}
.style-j9tuyl5ulink {border-radius:20px;  position:absolute;top:0;right:0;bottom:0;left:0;transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
.style-j9tuyl5ulabel {font:normal normal normal 14px/1.4em raleway,sans-serif;  transition: color 0.4s ease 0s;  color:#FFFFFF;display:inline-block;margin:calc(-1 * 0px) 0px 0;position:relative;white-space:nowrap;}
.style-j9tuyl5u[data-state~="shouldUseFlex"] .style-j9tuyl5ulabel {margin:0;}
.style-j9tuyl5u[data-disabled="false"] .style-j9tuyl5ulink {background-color:rgba(61, 155, 233, 1);border:solid rgba(43, 104, 156, 1) 0px;cursor:pointer !important;}
.style-j9tuyl5u[data-disabled="false"]:active[data-state~="mobile"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-disabled="false"]:hover[data-state~="desktop"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-disabled="false"][data-preview~="hover"] .style-j9tuyl5ulink {background-color:rgba(43, 104, 156, 1);border-color:rgba(61, 155, 233, 1);}
.style-j9tuyl5u[data-disabled="false"]:active[data-state~="mobile"] .style-j9tuyl5ulabel,.style-j9tuyl5u[data-disabled="false"]:hover[data-state~="desktop"] .style-j9tuyl5ulabel,.style-j9tuyl5u[data-disabled="false"][data-preview~="hover"] .style-j9tuyl5ulabel {color:#FFFFFF;}
.style-j9tuyl5u[data-disabled="true"] .style-j9tuyl5ulink,.style-j9tuyl5u[data-preview~="disabled"] .style-j9tuyl5ulink {background-color:rgba(204, 204, 204, 1);border-color:rgba(204, 204, 204, 1);}
.style-j9tuyl5u[data-disabled="true"] .style-j9tuyl5ulabel,.style-j9tuyl5u[data-preview~="disabled"] .style-j9tuyl5ulabel {color:#FFFFFF;}</style><style type="text/css" data-styleid="pc1">.pc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
.pc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
.pc1[data-state~="fixedPosition"].pc1_footer {top:auto;bottom:0;}
.pc1bg {position:absolute;top:0;right:0;bottom:0;left:0;}
.pc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
.pc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="s_VOwPageGroupSkin">.s_VOwPageGroupSkin {height:100px;width:100px;}
.s_VOwPageGroupSkinoverlay {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(0, 0, 0, 0.664);}
.s_VOwPageGroupSkininlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="p2">.p2bg {position:absolute;top:0;right:0;bottom:0;left:0;}
.p2[data-state~="mobileView"] .p2bg {left:10px;right:10px;}
.p2inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="tpaw0">.tpaw0 {overflow:hidden;}
.tpaw0 iframe {position:absolute;width:100%;height:100%;overflow:hidden;}
.tpaw0preloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
.tpaw0preloaderOverlaycontent {width:100%;height:100%;}
.tpaw0unavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
.tpaw0unavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
.tpaw0unavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
.tpaw0unavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
.tpaw0unavailableMessageOverlayiconContainer {display:none;}
.tpaw0unavailableMessageOverlaydismissButton {display:none;}
.tpaw0unavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
.tpaw0unavailableMessageOverlay[data-state~="hideIframe"] .tpaw0unavailableMessageOverlay_buttons {opacity:1;}
.tpaw0unavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}</style><style type="text/css" data-styleid="style-j9tr0rtm">.style-j9tr0rtm a span {pointer-events:none;}
.style-j9tr0rtm_noLink {cursor:default !important;}
.style-j9tr0rtm_counter {margin:0 10px;}
.style-j9tr0rtmmenuContainer {padding:0;margin:0;border:solid 0px rgba(61, 155, 233, 1);position:relative;  border-radius:0;}
.style-j9tr0rtmmenuContainer .style-j9tr0rtm_emptySubMenu {display:none !important;}
.style-j9tr0rtm_itemHoverArea {box-sizing:content-box;border-bottom:solid 0px rgba(61, 155, 233, 1);}
.style-j9tr0rtm_itemHoverArea:first-child > .style-j9tr0rtm_item {border-radius:0;    border-bottom-left-radius:0;border-bottom-right-radius:0;}
.style-j9tr0rtm_itemHoverArea:last-child {border-bottom:0 solid transparent;}
.style-j9tr0rtm_itemHoverArea:last-child > .style-j9tr0rtm_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_hover > .style-j9tr0rtm_item,.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selected > .style-j9tr0rtm_item,.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selectedContainer > .style-j9tr0rtm_item {transition: background-color 0.4s ease 0s;}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_hover .style-j9tr0rtm_subMenu {opacity:1;display:block;}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_hover:not(.style-j9tr0rtm_noLink) > .style-j9tr0rtm_item {background-color:rgba(61, 155, 233, 1);}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_hover:not(.style-j9tr0rtm_noLink) > .style-j9tr0rtm_item > .style-j9tr0rtm_label {color:#FFFFFF;}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selected > .style-j9tr0rtm_item,.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selectedContainer > .style-j9tr0rtm_item {background-color:rgba(61, 155, 233, 1);}
.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selected > .style-j9tr0rtm_item > .style-j9tr0rtm_label,.style-j9tr0rtm_itemHoverArea.style-j9tr0rtm_selectedContainer > .style-j9tr0rtm_item > .style-j9tr0rtm_label {color:#FFFFFF;}
.style-j9tr0rtm_item {height:100%;padding-left:15px;padding-right:15px;transition: background-color 0.4s ease 0s;  margin:0;position:relative;cursor:pointer;list-style:none;background-color:rgba(43, 108, 163, 1);}
.style-j9tr0rtm_label {font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;  color:black;display:inline;white-space:nowrap;overflow:hidden;}
.style-j9tr0rtm_subMenu {z-index:999;min-width:100%;display:none;opacity:0;transition: all 0.4s ease 0s;  position:absolute;border:solid 0px rgba(61, 155, 233, 1);border-radius:0;  }
.style-j9tr0rtm_subMenu .style-j9tr0rtm_item {background-color:rgba(43, 108, 163, 1);}
.style-j9tr0rtm_subMenu .style-j9tr0rtm_label {font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;}
.style-j9tr0rtm_subMenu > .style-j9tr0rtm_itemHoverArea:first-child > .style-j9tr0rtm_item,.style-j9tr0rtm_subMenu > .style-j9tr0rtm_itemHoverArea:first-child:last-child > .style-j9tr0rtm_item {border-radius:0;}
.style-j9tr0rtm_subMenu > .style-j9tr0rtm_itemHoverArea:first-child > .style-j9tr0rtm_item {border-bottom-left-radius:0;border-bottom-right-radius:0;}
.style-j9tr0rtm_subMenu > .style-j9tr0rtm_itemHoverArea:last-child {border-bottom:0 solid transparent;}
.style-j9tr0rtm_subMenu > .style-j9tr0rtm_itemHoverArea:last-child > .style-j9tr0rtm_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
.style-j9tr0rtm_subMenu:before {background-color:#fff;opacity:0;z-index:999;content:" ";display:block;width:calc(0px + 0px);height:100%;position:absolute;top:0;}
.style-j9tr0rtm[data-state~="items-align-left"] .style-j9tr0rtm_item {text-align:left;}
.style-j9tr0rtm[data-state~="items-align-center"] .style-j9tr0rtm_item {text-align:center;}
.style-j9tr0rtm[data-state~="items-align-right"] .style-j9tr0rtm_item {text-align:right;}
.style-j9tr0rtm[data-state~="subItems-align-left"] .style-j9tr0rtm_subMenu > .style-j9tr0rtm_item {text-align:left;padding-left:15px;padding-right:22px;}
.style-j9tr0rtm[data-state~="subItems-align-center"] .style-j9tr0rtm_subMenu > .style-j9tr0rtm_item {text-align:center;padding-left:15px;padding-right:15px;}
.style-j9tr0rtm[data-state~="subItems-align-right"] .style-j9tr0rtm_subMenu > .style-j9tr0rtm_item {text-align:right;padding-left:22px;padding-right:15px;}
.style-j9tr0rtm[data-state~="subMenuOpenSide-right"] .style-j9tr0rtm_subMenu {left:100%;float:left;margin-left:0px;}
.style-j9tr0rtm[data-state~="subMenuOpenSide-right"] .style-j9tr0rtm_subMenu:before {right:100%;}
.style-j9tr0rtm[data-state~="subMenuOpenSide-left"] .style-j9tr0rtm_subMenu {right:100%;float:right;margin-right:0px;}
.style-j9tr0rtm[data-state~="subMenuOpenSide-left"] .style-j9tr0rtm_subMenu:before {left:100%;}
.style-j9tr0rtm[data-open-direction~="subMenuOpenDir-down"] .style-j9tr0rtm_subMenu {top:calc(-1 * 0px);}
.style-j9tr0rtm[data-open-direction~="subMenuOpenDir-up"] .style-j9tr0rtm_subMenu {bottom:calc(-1 * 0px);}
.style-j9tr0rtmmenuContainer_with-validation-indication select:not(:focus):invalid {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9tr0rtmmenuContainer select {border-radius:0;  -webkit-appearance:none;-moz-appearance:none;  font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;  background-color:rgba(43, 108, 163, 1);color:#FFFFFF;border:solid 0px rgba(61, 155, 233, 1);margin:0;padding:0 45px;cursor:pointer;position:relative;max-width:100%;min-width:100%;min-height:10px;height:100%;text-overflow:ellipsis;white-space:nowrap;display:block;}
.style-j9tr0rtmmenuContainer select option {text-overflow:ellipsis;white-space:nowrap;overflow:hidden;}
.style-j9tr0rtmmenuContainer select.style-j9tr0rtmmenuContainer_placeholder-style {color:#393F44;}
.style-j9tr0rtmmenuContainer select:hover,.style-j9tr0rtmmenuContainer select[data-preview~="hover"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(61, 155, 233, 1);}
.style-j9tr0rtmmenuContainer select:focus,.style-j9tr0rtmmenuContainer select[data-preview~="focus"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9tr0rtmmenuContainer select[data-error="true"],.style-j9tr0rtmmenuContainer select[data-preview~="error"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9tr0rtmmenuContainer select:disabled,.style-j9tr0rtmmenuContainer select[data-disabled="true"],.style-j9tr0rtmmenuContainer select[data-preview~="disabled"] {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;background-color:rgba(204, 204, 204, 1);}
.style-j9tr0rtmmenuContainer select:disabled + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer select[data-disabled="true"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer select[data-preview~="disabled"] + .style-j9tr0rtmmenuContainerarrow {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;border:none;}
.style-j9tr0rtmmenuContainer select:-moz-focusring {color:transparent;text-shadow:0 0 0 #000;}
.style-j9tr0rtmmenuContainer select::-ms-expand {display:none;}
.style-j9tr0rtmmenuContainer select:focus::-ms-value {background:transparent;}
.style-j9tr0rtmmenuContainerarrow {position:absolute;pointer-events:none;top:0;box-sizing:border-box;padding-left:20px;padding-right:20px;height:inherit;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;}
.style-j9tr0rtmmenuContainerarrow .style-j9tr0rtmmenuContainer_svg_container {width:12px;}
.style-j9tr0rtmmenuContainerarrow .style-j9tr0rtmmenuContainer_svg_container svg {height:100%;fill:rgba(216, 216, 216, 1);}
.style-j9tr0rtmmenuContainer_left-direction {text-align-last:left;}
.style-j9tr0rtmmenuContainer_left-direction .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select:hover + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select[data-preview~="hover"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select:focus + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select[data-preview~="focus"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction[data-preview~="focus"] .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select[data-error="true"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_left-direction select[data-preview~="error"] + .style-j9tr0rtmmenuContainerarrow {border-left:0;}
.style-j9tr0rtmmenuContainer_left-direction .style-j9tr0rtmmenuContainerarrow {right:0;}
.style-j9tr0rtmmenuContainer_right-direction {text-align-last:right;}
.style-j9tr0rtmmenuContainer_right-direction .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select:hover + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select[data-preview~="hover"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select:focus + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select[data-preview~="focus"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction[data-preview~="focus"] .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select[data-error="true"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_right-direction select[data-preview~="error"] + .style-j9tr0rtmmenuContainerarrow {border-right:0;}
.style-j9tr0rtmmenuContainer_right-direction .style-j9tr0rtmmenuContainerarrow {left:0;}
.style-j9tr0rtmmenuContainer_center-direction {text-align-last:left;text-align-last:center;}
.style-j9tr0rtmmenuContainer_center-direction .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select:hover + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select[data-preview~="hover"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select:focus + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select[data-preview~="focus"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction[data-preview~="focus"] .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select[data-error="true"] + .style-j9tr0rtmmenuContainerarrow,.style-j9tr0rtmmenuContainer_center-direction select[data-preview~="error"] + .style-j9tr0rtmmenuContainerarrow {border-left:0;}
.style-j9tr0rtmmenuContainer_center-direction .style-j9tr0rtmmenuContainerarrow {right:0;}</style><style type="text/css" data-styleid="style-j9zfx18l2">.style-j9zfx18l2 a span {pointer-events:none;}
.style-j9zfx18l2_noLink {cursor:default !important;}
.style-j9zfx18l2_counter {margin:0 10px;}
.style-j9zfx18l2menuContainer {padding:0;margin:0;border:solid 0px rgba(61, 155, 233, 1);position:relative;  border-radius:0;}
.style-j9zfx18l2menuContainer .style-j9zfx18l2_emptySubMenu {display:none !important;}
.style-j9zfx18l2_itemHoverArea {box-sizing:content-box;border-bottom:solid 0px rgba(61, 155, 233, 1);}
.style-j9zfx18l2_itemHoverArea:first-child > .style-j9zfx18l2_item {border-radius:0;    border-bottom-left-radius:0;border-bottom-right-radius:0;}
.style-j9zfx18l2_itemHoverArea:last-child {border-bottom:0 solid transparent;}
.style-j9zfx18l2_itemHoverArea:last-child > .style-j9zfx18l2_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_hover > .style-j9zfx18l2_item,.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selected > .style-j9zfx18l2_item,.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selectedContainer > .style-j9zfx18l2_item {transition: background-color 0.4s ease 0s;}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_hover .style-j9zfx18l2_subMenu {opacity:1;display:block;}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_hover:not(.style-j9zfx18l2_noLink) > .style-j9zfx18l2_item {background-color:rgba(61, 155, 233, 1);}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_hover:not(.style-j9zfx18l2_noLink) > .style-j9zfx18l2_item > .style-j9zfx18l2_label {color:#FFFFFF;}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selected > .style-j9zfx18l2_item,.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selectedContainer > .style-j9zfx18l2_item {background-color:rgba(61, 155, 233, 1);}
.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selected > .style-j9zfx18l2_item > .style-j9zfx18l2_label,.style-j9zfx18l2_itemHoverArea.style-j9zfx18l2_selectedContainer > .style-j9zfx18l2_item > .style-j9zfx18l2_label {color:#FFFFFF;}
.style-j9zfx18l2_item {height:100%;padding-left:15px;padding-right:15px;transition: background-color 0.4s ease 0s;  margin:0;position:relative;cursor:pointer;list-style:none;background-color:rgba(43, 108, 163, 1);}
.style-j9zfx18l2_label {font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;  color:#FFFFFF;display:inline;white-space:nowrap;overflow:hidden;}
.style-j9zfx18l2_subMenu {z-index:999;min-width:100%;display:none;opacity:0;transition: all 0.4s ease 0s;  position:absolute;border:solid 0px rgba(61, 155, 233, 1);border-radius:0;  }
.style-j9zfx18l2_subMenu .style-j9zfx18l2_item {background-color:rgba(43, 108, 163, 1);}
.style-j9zfx18l2_subMenu .style-j9zfx18l2_label {font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;}
.style-j9zfx18l2_subMenu > .style-j9zfx18l2_itemHoverArea:first-child > .style-j9zfx18l2_item,.style-j9zfx18l2_subMenu > .style-j9zfx18l2_itemHoverArea:first-child:last-child > .style-j9zfx18l2_item {border-radius:0;}
.style-j9zfx18l2_subMenu > .style-j9zfx18l2_itemHoverArea:first-child > .style-j9zfx18l2_item {border-bottom-left-radius:0;border-bottom-right-radius:0;}
.style-j9zfx18l2_subMenu > .style-j9zfx18l2_itemHoverArea:last-child {border-bottom:0 solid transparent;}
.style-j9zfx18l2_subMenu > .style-j9zfx18l2_itemHoverArea:last-child > .style-j9zfx18l2_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
.style-j9zfx18l2_subMenu:before {background-color:#fff;opacity:0;z-index:999;content:" ";display:block;width:calc(0px + 0px);height:100%;position:absolute;top:0;}
.style-j9zfx18l2[data-state~="items-align-left"] .style-j9zfx18l2_item {text-align:left;}
.style-j9zfx18l2[data-state~="items-align-center"] .style-j9zfx18l2_item {text-align:center;}
.style-j9zfx18l2[data-state~="items-align-right"] .style-j9zfx18l2_item {text-align:right;}
.style-j9zfx18l2[data-state~="subItems-align-left"] .style-j9zfx18l2_subMenu > .style-j9zfx18l2_item {text-align:left;padding-left:15px;padding-right:22px;}
.style-j9zfx18l2[data-state~="subItems-align-center"] .style-j9zfx18l2_subMenu > .style-j9zfx18l2_item {text-align:center;padding-left:15px;padding-right:15px;}
.style-j9zfx18l2[data-state~="subItems-align-right"] .style-j9zfx18l2_subMenu > .style-j9zfx18l2_item {text-align:right;padding-left:22px;padding-right:15px;}
.style-j9zfx18l2[data-state~="subMenuOpenSide-right"] .style-j9zfx18l2_subMenu {left:100%;float:left;margin-left:0px;}
.style-j9zfx18l2[data-state~="subMenuOpenSide-right"] .style-j9zfx18l2_subMenu:before {right:100%;}
.style-j9zfx18l2[data-state~="subMenuOpenSide-left"] .style-j9zfx18l2_subMenu {right:100%;float:right;margin-right:0px;}
.style-j9zfx18l2[data-state~="subMenuOpenSide-left"] .style-j9zfx18l2_subMenu:before {left:100%;}
.style-j9zfx18l2[data-open-direction~="subMenuOpenDir-down"] .style-j9zfx18l2_subMenu {top:calc(-1 * 0px);}
.style-j9zfx18l2[data-open-direction~="subMenuOpenDir-up"] .style-j9zfx18l2_subMenu {bottom:calc(-1 * 0px);}
.style-j9zfx18l2menuContainer_with-validation-indication select:not(:focus):invalid {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9zfx18l2menuContainer select {border-radius:0;  -webkit-appearance:none;-moz-appearance:none;  font:normal normal normal 16px/1.4em 'open sans condensed',sans-serif;  background-color:rgba(43, 108, 163, 1);color:#FFFFFF;border:solid 0px rgba(61, 155, 233, 1);margin:0;padding:0 45px;cursor:pointer;position:relative;max-width:100%;min-width:100%;min-height:10px;height:100%;text-overflow:ellipsis;white-space:nowrap;display:block;}
.style-j9zfx18l2menuContainer select option {text-overflow:ellipsis;white-space:nowrap;overflow:hidden;}
.style-j9zfx18l2menuContainer select.style-j9zfx18l2menuContainer_placeholder-style {color:#393F44;}
.style-j9zfx18l2menuContainer select:hover,.style-j9zfx18l2menuContainer select[data-preview~="hover"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(61, 155, 233, 1);}
.style-j9zfx18l2menuContainer select:focus,.style-j9zfx18l2menuContainer select[data-preview~="focus"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9zfx18l2menuContainer select[data-error="true"],.style-j9zfx18l2menuContainer select[data-preview~="error"] {border:solid 2px rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
.style-j9zfx18l2menuContainer select:disabled,.style-j9zfx18l2menuContainer select[data-disabled="true"],.style-j9zfx18l2menuContainer select[data-preview~="disabled"] {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;background-color:rgba(204, 204, 204, 1);}
.style-j9zfx18l2menuContainer select:disabled + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer select[data-disabled="true"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer select[data-preview~="disabled"] + .style-j9zfx18l2menuContainerarrow {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;border:none;}
.style-j9zfx18l2menuContainer select:-moz-focusring {color:transparent;text-shadow:0 0 0 #000;}
.style-j9zfx18l2menuContainer select::-ms-expand {display:none;}
.style-j9zfx18l2menuContainer select:focus::-ms-value {background:transparent;}
.style-j9zfx18l2menuContainerarrow {position:absolute;pointer-events:none;top:0;box-sizing:border-box;padding-left:20px;padding-right:20px;height:inherit;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;}
.style-j9zfx18l2menuContainerarrow .style-j9zfx18l2menuContainer_svg_container {width:12px;}
.style-j9zfx18l2menuContainerarrow .style-j9zfx18l2menuContainer_svg_container svg {height:100%;fill:rgba(216, 216, 216, 1);}
.style-j9zfx18l2menuContainer_left-direction {text-align-last:left;}
.style-j9zfx18l2menuContainer_left-direction .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select:hover + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select[data-preview~="hover"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select:focus + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select[data-preview~="focus"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction[data-preview~="focus"] .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select[data-error="true"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_left-direction select[data-preview~="error"] + .style-j9zfx18l2menuContainerarrow {border-left:0;}
.style-j9zfx18l2menuContainer_left-direction .style-j9zfx18l2menuContainerarrow {right:0;}
.style-j9zfx18l2menuContainer_right-direction {text-align-last:right;}
.style-j9zfx18l2menuContainer_right-direction .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select:hover + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select[data-preview~="hover"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select:focus + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select[data-preview~="focus"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction[data-preview~="focus"] .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select[data-error="true"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_right-direction select[data-preview~="error"] + .style-j9zfx18l2menuContainerarrow {border-right:0;}
.style-j9zfx18l2menuContainer_right-direction .style-j9zfx18l2menuContainerarrow {left:0;}
.style-j9zfx18l2menuContainer_center-direction {text-align-last:left;text-align-last:center;}
.style-j9zfx18l2menuContainer_center-direction .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select:hover + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select[data-preview~="hover"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select:focus + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select[data-preview~="focus"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction[data-preview~="focus"] .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select[data-error="true"] + .style-j9zfx18l2menuContainerarrow,.style-j9zfx18l2menuContainer_center-direction select[data-preview~="error"] + .style-j9zfx18l2menuContainerarrow {border-left:0;}
.style-j9zfx18l2menuContainer_center-direction .style-j9zfx18l2menuContainerarrow {right:0;}</style><style type="text/css" data-styleid="style-j9zg3pk7">.style-j9zg3pk7bg {border:0px solid rgba(50, 65, 88, 1);background-color:rgba(61, 155, 233, 1);border-radius:0;  }
.style-j9zg3pk7inlineContent,.style-j9zg3pk7bg {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="deadComp">.deadComp {background:transparent;}</style><style type="text/css" data-styleid="siteBackground">.siteBackground {width:100%;position:absolute;}
.siteBackgroundbgBeforeTransition {position:absolute;top:0;}
.siteBackgroundbgAfterTransition {position:absolute;top:0;}</style><style type="text/css" data-styleid="loginDialog">.loginDialog {position:fixed;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;}
.loginDialogblockingLayer {background-color:rgba(85, 85, 85, 0.75);position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;}
.loginDialogdialog {background-color:rgba(170, 170, 170, 0.7);width:455px;position:fixed;padding:20px;}
.loginDialog_wrapper {background-color:rgba(255, 255, 255, 1);padding:45px 40px 0 40px;}
.loginDialogxButton {position:absolute;top:-14px;right:-14px;cursor:pointer;background:transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;height:30px;width:30px;}
.loginDialogxButton:hover {background-position:right -80px;}
.loginDialogheader {padding-bottom:25px;line-height:30px;}
.loginDialogfavIcon {float:left;margin:7px 7px 0 0;width:16px;height:16px;}
.loginDialogtitle {font-size:20px;font-weight:bold;color:#555555;}
.loginDialog[data-state~="mobile"] {position:absolute;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;top:0;}
.loginDialog[data-state~="mobile"] .loginDialogheader {padding-bottom:10px;line-height:30px;}
.loginDialog[data-state~="mobile"] .loginDialogfavIcon {display:none;}
.loginDialog[data-state~="mobile"] .loginDialogtitle {font-size:14px;}
.loginDialog[data-state~="mobile"] .loginDialogdialog {width:260px;padding:10px;position:absolute;}
.loginDialog[data-state~="mobile"] .loginDialog_footer {margin-top:0;padding-bottom:10px;}
.loginDialog[data-state~="mobile"] .loginDialogcancel {font-size:14px;line-height:30px;}
.loginDialog[data-state~="mobile"] .loginDialog_wrapper {padding:14px 12px 0 12px;}
.loginDialog[data-state~="mobile"] .loginDialogsubmitButton {height:30px;width:100px;font-size:14px;}
.loginDialog_forgot {text-align:left;font-size:12px;}
.loginDialog_forgot a {color:#0198ff;border-bottom:1px solid #0198ff;}
.loginDialog_forgot a:hover {color:#0044ff;border-bottom:1px solid #0044ff;}
.loginDialog_error {font-size:12px;color:#d74401;text-align:right;}
.loginDialog_footer {width:100%;margin-top:27px;padding-bottom:40px;}
.loginDialogcancel {color:#9C9C9C;font-size:18px;text-decoration:underline;line-height:36px;}
.loginDialogcancel:hover {color:#9c3c3c;}
.loginDialogpasswordInput label {font-size:14px;}
.loginDialogpasswordInput label[data-type="password"] {font-size:14px;line-height:30px;height:30px;}
.loginDialogsubmitButton {float:right;cursor:pointer;border:solid 2px #0064a8;height:36px;width:143px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;color:#ffffff;font-size:24px;font-weight:bold;box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);}
.loginDialogsubmitButton:hover {background-position:right -352px;border-color:#004286;}
.loginDialog[data-state="normal"] .loginDialogerror {display:none;}
.loginDialog[data-state="error"] .loginDialogerror {display:block;font-size:12px;color:#d74401;text-align:right;}
.loginDialog[data-state="error"] .loginDialogpasswordInput {border-color:#d74401;}
.loginDialogpasswordInput {font-size:1em;}
.loginDialogpasswordInput label {float:none;font-size:17px;line-height:25px;color:#585858;}
.loginDialogpasswordInput[data-state~="mobile"] label {float:none;font-size:14px;line-height:20px;color:#585858;}
.loginDialogpasswordInputinput {padding:0 15px;width:100%;height:42px;font-size:19px;line-height:42px;color:#0198ff;margin:0 -3px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:30px;font-size:14px;line-height:30px;color:#0198ff;margin:0 -3px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
.loginDialogpasswordInputinput[data-type="password"] {font-size:38px;}
.loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {font-size:14px;}
.loginDialogpasswordInputerrorMessage {display:block;font-size:12px;color:#d74401;text-align:right;height:15px;}
.loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {visibility:hidden;}
.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {visibility:visible;}
.loginDialogpasswordInput[data-state~="invalid"] input {border-color:#d74401;}
.loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {border-color:#ff0000;}</style><style type="text/css" data-styleid="strc1">.strc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css">.testStyles {position:absolute; display: none; z-index: 3}</style><div class="testStyles"></div><style type="text/css" data-styleid="uploadedFonts"></style><div style="overflow: hidden; visibility: hidden; max-height: 0px; max-width: 0px; position: absolute;"><style>.font-ruler-content::after {content:"@#$%%^&*~IAO"}</style></div></div><div id="SITE_BACKGROUND" class="siteBackground" style="position: absolute; top: 0px; height: 1412px; width: 1519px;"><div id="SITE_BACKGROUND_previous_noPrev" class="siteBackgroundprevious" style="width: 100%; height: 100%;"><div id="SITE_BACKGROUNDpreviousImage" class="siteBackgroundpreviousImage"></div><div id="SITE_BACKGROUNDpreviousVideo" class="siteBackgroundpreviousVideo"></div><div id="SITE_BACKGROUND_previousOverlay_noPrev" class="siteBackgroundpreviousOverlay"></div></div><div id="SITE_BACKGROUND_current_e4uto_desktop_bg" data-position="absolute" class="siteBackgroundcurrent" style="top: 0px; background-color: rgb(186, 218, 85); position: absolute; width: 100%; height: 100%;"><div id="SITE_BACKGROUND_currentImage_e4uto_desktop_bg" data-type="bgimage" data-height="100%" class="siteBackgroundcurrentImage" style="position: absolute; top: 0px; width: 100%; opacity: 0.2; background-size: contain; background-position: center center; background-repeat: no-repeat; height: 100%; background-image: url(&quot;https://static.wixstatic.com/media/2862c4fe37404ff3b16fda70b010df31.jpg/v1/fill/w_1920,h_1280,al_c,q_85,usm_0.66_1.00_0.01/2862c4fe37404ff3b16fda70b010df31.jpg&quot;);" data-image-css="{&quot;backgroundSize&quot;:&quot;contain&quot;,&quot;backgroundPosition&quot;:&quot;center center&quot;,&quot;backgroundRepeat&quot;:&quot;no-repeat&quot;,&quot;height&quot;:&quot;100%&quot;}"></div><div id="SITE_BACKGROUNDcurrentVideo" class="siteBackgroundcurrentVideo"></div><div id="SITE_BACKGROUND_currentOverlay_e4uto_desktop_bg" class="siteBackgroundcurrentOverlay" style="position: absolute; top: 0px; width: 100%; height: 100%;"></div></div></div><div class="SITE_ROOT" id="SITE_ROOT" style="width: 980px; padding-bottom: 40px;"><div id="masterPage" style="width: 980px; position: static; top: 0px; height: 1412px;"><footer class="fc1_footer fc1" data-state=" " id="SITE_FOOTER" style="width: 980px; position: absolute; left: 0px; height: 206px; bottom: auto; top: 1206px;"><div id="SITE_FOOTERscreenWidthBackground" class="fc1screenWidthBackground" style="width: 1519px; left: -270px;"><div class="fc1_bg"></div></div><div id="SITE_FOOTERcenteredContent" class="fc1centeredContent"><div id="SITE_FOOTERbg" class="fc1bg"></div><div id="SITE_FOOTERinlineContent" class="fc1inlineContent"><div class="txtNew" id="comp-j9b0443n" style="left: 335px; width: 347px; position: absolute; top: 37px;"><p class="font_8" style="line-height:1.5em; text-align:center;"><span class="color_15"><object height="0"><a class="auto-generated-link" data-auto-recognition="true" data-content="malaviyairport@gmail.com" href="mailto:malaviyairport@gmail.com" data-type="mail">malaviyairport@gmail.com</a></object></span></p></div><div class="txtNew" id="comp-j9b0443n1" style="left: 360px; width: 298px; position: absolute; top: 74px;"><p class="font_8" style="text-align:center; line-height:1.5em;"><span class="color_15">Jaipur, Rajasthan, India</span></p></div><div class="txtNew" id="comp-j9b0443o" style="left: 234px; width: 550px; position: absolute; top: 150px;"><p class="font_10" style="line-height:1.43em; text-align:center;"><span class="color_15"><span>©2017 BY MALAVIYA INTERNATIONAL AIRPORT</span></span></p></div><div class="lb1" id="comp-j9hjlv4l" style="width: 100px; left: 459px; position: absolute; top: 117px; height: 24px;"><ul aria-label="Social bar" id="comp-j9hjlv4litemsContainer" class="lb1itemsContainer"><li class="lb1imageItem" id="comp-j9hjlv4l0image" style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 14px; display: inline-block;"><a href="https://www.facebook.com/NITJaipur/" target="_blank" data-content="https://www.facebook.com/NITJaipur/" data-type="external" id="comp-j9hjlv4l0imagelink" class="lb1imageItemlink"><div data-style="position:absolute" class="lb1imageItemimage" id="comp-j9hjlv4l0imageimage" style="position: absolute; width: 24px; height: 24px;"><div class="lb1imageItemimagepreloader" id="comp-j9hjlv4l0imageimagepreloader"></div><img id="comp-j9hjlv4l0imageimageimage" alt="Facebook - Black Circle" data-type="image" style="width: 24px; height: 24px; object-fit: cover;" src="admin_files/4057345bcf57474b96976284050c00df.png"></div></a></li><li class="lb1imageItem" id="comp-j9hjlv4l1image" style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 14px; display: inline-block;"><a href="https://www.facebook.com/NITJaipur/" target="_blank" data-content="https://www.facebook.com/NITJaipur/" data-type="external" id="comp-j9hjlv4l1imagelink" class="lb1imageItemlink"><div data-style="position:absolute" class="lb1imageItemimage" id="comp-j9hjlv4l1imageimage" style="position: absolute; width: 24px; height: 24px;"><div class="lb1imageItemimagepreloader" id="comp-j9hjlv4l1imageimagepreloader"></div><img id="comp-j9hjlv4l1imageimageimage" alt="Twitter - Black Circle" data-type="image" style="width: 24px; height: 24px; object-fit: cover;" src="admin_files/870f97661ed14a5bb2d96ecbddec0aed.png"></div></a></li><li class="lb1imageItem" id="comp-j9hjlv4l2image" style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 14px; display: inline-block;"><a href="https://www.facebook.com/NITJaipur/" target="_blank" data-content="https://www.facebook.com/NITJaipur/" data-type="external" id="comp-j9hjlv4l2imagelink" class="lb1imageItemlink"><div data-style="position:absolute" class="lb1imageItemimage" id="comp-j9hjlv4l2imageimage" style="position: absolute; width: 24px; height: 24px;"><div class="lb1imageItemimagepreloader" id="comp-j9hjlv4l2imageimagepreloader"></div><img id="comp-j9hjlv4l2imageimageimage" alt="Instagram - Black Circle" data-type="image" style="width: 24px; height: 24px; object-fit: cover;" src="admin_files/e1aa082f7c0747168d9cf43e77046142.png"></div></a></li></ul></div></div></div></footer><header class="hc1" data-state=" " id="SITE_HEADER" style="width: 980px; position: absolute; top: 0px; height: 209px; left: 0px;"><div id="SITE_HEADERscreenWidthBackground" class="hc1screenWidthBackground" style="width: 1519px; left: -270px;"><div class="hc1_bg"></div></div><div id="SITE_HEADERcenteredContent" class="hc1centeredContent"><div id="SITE_HEADERbg" class="hc1bg"></div><div id="SITE_HEADERinlineContent" class="hc1inlineContent"><div data-exact-height="80" data-content-padding-horizontal="0" data-content-padding-vertical="0" title="" class="wp1" id="comp-j9b0afp8" style="left: 20px; position: absolute; top: 39px; width: 159px; height: 80px;"><a href="https://adarshjain583.wixsite.com/adarsh" target="_self" id="comp-j9b0afp8link" class="wp1link" style="cursor: pointer; width: 159px; height: 80px;"><div data-style="" class="wp1img" id="comp-j9b0afp8img" style="position: relative; width: 159px; height: 80px;"><div class="wp1imgpreloader" id="comp-j9b0afp8imgpreloader"></div><img id="comp-j9b0afp8imgimage" alt="Untitled" data-type="image" style="width: 159px; height: 80px; object-fit: cover;" src="admin_files/9fb5ca_2e6cafceba2146f082b20184c86d223bmv2.jpg"></div></a></div><div class="txtNew" id="comp-j9b0443m" style="left: 194px; width: 613px; position: absolute; top: 50px;"><p class="font_7" style="text-align:left; line-height:1.46em;"><span class="color_15"><span style="text-transform:uppercase;">MALAVIYA INTERNATIONAL AIRPORT</span></span></p></div><div class="txtNew" id="comp-j9b0a3bh" style="left: 194px; width: 417px; position: absolute; top: 83px;"><p class="font_9" style="text-align:left; line-height:1.55em;"><span class="color_15">Reliable. Prompt. Professional.</span></p></div><nav id="comp-j9b0cgpg" data-menuborder-y="0" data-menubtn-border="0" data-ribbon-els="0" data-label-pad="0" data-ribbon-extra="0" data-drophposition="" data-dropalign="left" dir="ltr" class="style-j9b0cgbd" data-state="left notMobile" style="left: 5px; width: 850px; position: absolute; top: 153px; height: 30px;" data-dropmode="dropDown"><ul aria-label="Site navigation" role="navigation" id="comp-j9b0cgpgitemsContainer" class="style-j9b0cgbditemsContainer" style="text-align: left;"><li data-direction="ltr" data-listposition="left" data-data-id="dataItem-j9b035ky" class="style-j9b0cgbdrepeaterButton" data-state="menu  idle link notMobile" id="comp-j9b0cgpg0" data-original-gap-between-text-and-btn="10" style="width: 69px; height: 30px; position: relative; box-sizing: border-box; overflow: visible;" aria-hidden="false"><a role="button" tabindex="0" aria-haspopup="true" data-listposition="left" href="https://adarshjain583.wixsite.com/adarsh" target="_self" id="comp-j9b0cgpg0linkElement" class="style-j9b0cgbdrepeaterButtonlinkElement"><div class="style-j9b0cgbdrepeaterButton_gapper"><div id="comp-j9b0cgpg0bg" class="style-j9b0cgbdrepeaterButtonbg" style="text-align: left;"><p id="comp-j9b0cgpg0label" class="style-j9b0cgbdrepeaterButtonlabel" style="text-align: left; line-height: 30px;">Home</p></div></div></a></li><li data-direction="ltr" data-listposition="center" data-data-id="dataItem-j9e3hs8u" class="style-j9b0cgbdrepeaterButton" data-state="menu  idle link notMobile" id="comp-j9b0cgpg1" data-original-gap-between-text-and-btn="10" style="width: 165px; height: 30px; position: relative; box-sizing: border-box; overflow: visible;" aria-hidden="false"><a role="button" tabindex="0" aria-haspopup="true" data-listposition="center" href="https://adarshjain583.wixsite.com/adarsh/copy-of-flight-information-1" target="_self" id="comp-j9b0cgpg1linkElement" class="style-j9b0cgbdrepeaterButtonlinkElement"><div class="style-j9b0cgbdrepeaterButton_gapper"><div id="comp-j9b0cgpg1bg" class="style-j9b0cgbdrepeaterButtonbg" style="text-align: left;"><p id="comp-j9b0cgpg1label" class="style-j9b0cgbdrepeaterButtonlabel" style="text-align: left; line-height: 30px;">Shops &amp; Restaurants</p></div></div></a></li><li data-direction="ltr" data-listposition="center" data-data-id="dataItem-j9b0giaz" class="style-j9b0cgbdrepeaterButton" data-state="menu  idle link notMobile" id="comp-j9b0cgpg2" data-original-gap-between-text-and-btn="10" style="width: 146px; height: 30px; position: relative; box-sizing: border-box; overflow: visible;" aria-hidden="false"><a role="button" tabindex="0" aria-haspopup="true" data-listposition="center" href="https://adarshjain583.wixsite.com/adarsh/flight-information" target="_self" id="comp-j9b0cgpg2linkElement" class="style-j9b0cgbdrepeaterButtonlinkElement"><div class="style-j9b0cgbdrepeaterButton_gapper"><div id="comp-j9b0cgpg2bg" class="style-j9b0cgbdrepeaterButtonbg" style="text-align: left;"><p id="comp-j9b0cgpg2label" class="style-j9b0cgbdrepeaterButtonlabel" style="text-align: left; line-height: 30px;">Flight Information</p></div></div></a></li><li data-direction="ltr" data-listposition="center" data-data-id="dataItem-j9e139f1" class="style-j9b0cgbdrepeaterButton" data-state="menu  idle link notMobile" id="comp-j9b0cgpg3" data-original-gap-between-text-and-btn="11" style="width: 192px; height: 30px; position: relative; box-sizing: border-box; overflow: visible;" aria-hidden="false"><a role="button" tabindex="0" aria-haspopup="true" data-listposition="center" href="https://adarshjain583.wixsite.com/adarsh/copy-of-flight-information" target="_self" id="comp-j9b0cgpg3linkElement" class="style-j9b0cgbdrepeaterButtonlinkElement"><div class="style-j9b0cgbdrepeaterButton_gapper"><div id="comp-j9b0cgpg3bg" class="style-j9b0cgbdrepeaterButtonbg" style="text-align: left;"><p id="comp-j9b0cgpg3label" class="style-j9b0cgbdrepeaterButtonlabel" style="text-align: left; line-height: 30px;">Transport and Directions</p></div></div></a></li><li data-listposition="center" class="style-j9b0cgbdrepeaterButton" data-state="menu  idle header notMobile" id="comp-j9b0cgpg__more__" data-original-gap-between-text-and-btn="11" style="height: 0px; overflow: hidden; position: absolute;" aria-hidden="true"><a role="button" tabindex="-1" aria-haspopup="true" data-listposition="center" id="comp-j9b0cgpg__more__linkElement" class="style-j9b0cgbdrepeaterButtonlinkElement"><div class="style-j9b0cgbdrepeaterButton_gapper"><div id="comp-j9b0cgpg__more__bg" class="style-j9b0cgbdrepeaterButtonbg" style="text-align: left;"><p id="comp-j9b0cgpg__more__label" class="style-j9b0cgbdrepeaterButtonlabel" style="text-align: left;">More</p></div></div></a></li></ul><div id="comp-j9b0cgpgmoreButton" class="style-j9b0cgbdmoreButton"></div><nav data-drophposition="" data-dropalign="left" id="comp-j9b0cgpgdropWrapper" class="style-j9b0cgbddropWrapper" style="visibility: hidden; left: 0px; right: auto; bottom: auto;"><ul id="comp-j9b0cgpgmoreContainer" class="style-j9b0cgbdmoreContainer" style="visibility: hidden; left: 0px; right: auto;"></ul></nav></nav><div class="txtNew" id="comp-j9ctqbfh" style="left: 847px; width: 375px; position: absolute; top: 157px;"><p class="font_9"><a>For flight related information - 011-61234567</a></p></div><div id="comp-j9tuyms9" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" class="style-j9tuyl5u" data-state="desktop shouldUseFlex center" style="left: 921px; position: absolute; top: 68px; height: 40px; min-height: 20px; width: 142px;" data-prev-text="Admin Login" data-prev-min-width="82" data-prev-width="142"><a href="https://adarshjain583.wixsite.com/adarsh" target="_self" role="button" id="comp-j9tuyms9link" class="g-transparent-a style-j9tuyl5ulink"><span id="comp-j9tuyms9label" class="style-j9tuyl5ulabel" style="">Admin Login</span></a></div><div class="txtNew" id="comp-j9zfv5da" style="left: 1094px; width: 116px; position: absolute; top: 39px;"><p class="font_8" style="font-size:15px;"><span style="font-size:15px;">Show airport list</span></p></div></div></div></header><div class="pc1" data-state="" id="PAGES_CONTAINER" style="width: 980px; position: absolute; top: 209px; height: 997px; left: 0px;"><div id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground" style="width: 1519px; left: -270px;"></div><div id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent"><div id="PAGES_CONTAINERbg" class="pc1bg"></div><div id="PAGES_CONTAINERinlineContent" class="pc1inlineContent"><div class="s_VOwPageGroupSkin" id="SITE_PAGES" style="left: 0px; width: 980px; position: absolute; top: 0px; height: 997px;"><div class="p2" id="e4uto" style="left: 0px; width: 980px; position: absolute; top: 0px; height: 713px; display: none; visibility: hidden;"><div id="e4utobg" class="p2bg"></div><div id="e4utoinlineContent" class="p2inlineContent"><div class="tpaw0" id="comp-j9slsik5" style="min-height: 535px; min-width: 478px; left: 502px; width: 478px; position: absolute; top: 67px; height: 535px;"><iframe scrolling="no" allowtransparency="true" allowfullscreen="" name="comp-j9slsik5" title="Form Builder Plus+" aria-label="Form Builder Plus+" id="comp-j9slsik5iframe" class="tpaw0iframe" style="display: block; width: 100%; height: 100%; overflow: hidden; position: absolute;" src="admin_files/wix_cached_view.html" frameborder="0"></iframe><div id="comp-j9slsik5overlay" class="tpaw0overlay"></div></div></div></div>

<div class="p2" id="r9oc4" style="left: 0px; width: 980px; position: absolute; top: 0px; height: 997px;"><div id="r9oc4bg" class="p2bg"></div><div id="r9oc4inlineContent" class="p2inlineContent">

    <nav style="left: -89px; position: absolute; top: 138px; height: 220px; width: 268px; min-width: 127px;" class="style-j9tr0rtm" data-state="subMenuOpenSide-right items-align-left subItems-align-left" id="comp-j9tr0ssx" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx" data-param-border="0" data-param-separator="0" data-param-padding="15" data-open-direction="subMenuOpenDir-down">

    <ul class="style-j9tr0rtmmenuContainer" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer">

        <li class="style-j9tr0rtm_selected style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root0_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_home.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0.0">Home</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root0_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_arrivals.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0.0">Arrivals</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root0_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root1_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root1_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root1_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_departures.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root1_.0.0">Departures</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root1_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root2_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root2_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root2_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_timetable.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root2_.0.0">Time Table</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root2_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root3_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_shops.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.0">Shops</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root3_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_restaurants.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.0">Restaurants</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root3_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_employee.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.0">Employee</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.1"></ul></div></li>

        <li class="style-j9tr0rtm_itemHoverArea style-j9tr0rtm_itemWrapper " style="height:54px;" id="root3_" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_"><div class="style-j9tr0rtm_item " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0"><a class=" style-j9tr0rtm_label level0" style="line-height: 56px;" role="button" aria-haspopup="true" href="admin_airlines.php" target="_self" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.0">Airline</a><ul style="margin-bottom:0px;" class="style-j9tr0rtm_subMenu " data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.$centeredContent.$inlineContent.$SITE_PAGES.$e4uto_DESKTOP.$inlineContent.$comp-j9tr0ssx.$menuContainer.$root3_.0.1"></ul></div></li>
    </ul>
</nav>



    <div class="style-j9zg3pk7" id="comp-j9zg3pn8" style="left: 350px; width: 670px; position: absolute; top: 83px; height: 193px;"><div id="comp-j9zg3pn8bg" class="style-j9zg3pk7bg"></div><div id="comp-j9zg3pn8inlineContent" class="style-j9zg3pk7inlineContent"><div class="txtNew" id="comp-j9zg4f8z" style="left: 53px; width: 286px; position: absolute; top: 69px;"><p class="font_8" style="font-size:14px;"><span style="color:#FFFFFF;"><span style="font-family:open sans,sans-serif;">Total Number of Employee : 234</span></span></p>

<p class="font_8" style="font-size:14px;">&nbsp;</p>

<p class="font_8" style="font-size:14px;"><span style="color:#FFFFFF;"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; Male : 34&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Day Shift : 23 </span></span></p>

<p class="font_8" style="font-size:14px;"><span style="color:#FFFFFF;"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; Female : 12&nbsp; &nbsp; &nbsp; Night Shift : 12</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="wixGuard">​</span></p></div><div class="txtNew" id="comp-j9zg6rc9" style="left: 356px; width: 247px; position: absolute; top: 69px;"><p class="font_8" style="font-size:14px;"><span class="color_31"><span style="font-family:open sans,sans-serif;">Administrative Support&nbsp;: 23</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="color_31"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Airport&nbsp;Authority&nbsp;: 12</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="color_31"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Traffic&nbsp;Monitor&nbsp;: 45</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="color_31"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Engineer&nbsp;: 13</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="wixGuard">​</span></p></div><div class="txtNew" id="comp-j9zge421" style="left: 218px; width: 220px; position: absolute; top: 13px;"><h2 class="font_2" style="font-size:25px;"><span style="font-weight:bold;"><span style="font-size:25px;">Employee Summary</span></span></h2></div></div></div><div class="style-j9zg3pk7" id="comp-j9zgh0ic" style="left: 350px; width: 670px; position: absolute; top: 325px; height: 125px;"><div id="comp-j9zgh0icbg" class="style-j9zg3pk7bg"></div><div id="comp-j9zgh0icinlineContent" class="style-j9zg3pk7inlineContent"><div class="txtNew" id="comp-j9zghbwh" style="left: 251px; width: 220px; position: absolute; top: 16px;"><h2 class="font_2" style="font-size:25px;"><span style="font-weight:bold;"><span style="font-size:25px;">Airline Summary</span></span></h2></div><div class="txtNew" id="comp-j9zghrd6" style="left: 237px; width: 234px; position: absolute; top: 67px;"><p class="font_8" style="font-size:14px;"><span style="color:#FFFFFF;"><span style="font-family:open sans,sans-serif;">Total Number of&nbsp; Airlines&nbsp;: 14</span></span></p></div></div></div><div class="style-j9zg3pk7" id="comp-j9zgkdv3" style="left: 350px; width: 670px; position: absolute; top: 515px; height: 230px;"><div id="comp-j9zgkdv3bg" class="style-j9zg3pk7bg"></div><div id="comp-j9zgkdv3inlineContent" class="style-j9zg3pk7inlineContent"><div class="txtNew" id="comp-j9zgm1fs" style="left: 178px; width: 366px; position: absolute; top: 21px;"><h2 class="font_2" style="font-size:25px;"><span style="font-weight:bold;"><span style="font-size:25px;">Car Rental &amp; Parking Summary</span></span></h2></div><div class="txtNew" id="comp-j9zgmsnx" style="left: 70px; width: 263px; position: absolute; top: 79px;"><p class="font_8" style="font-size:14px;"><span class="color_26"><span style="font-family:open sans,sans-serif;">&nbsp; Total Number of&nbsp; Cars&nbsp;: 234</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">Cars currently available : 23</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">&nbsp; &nbsp;Cars currently in used : 45</span></span></p>

<p class="font_8" style="font-size:14px;">&nbsp;</p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">Total amount received : Rs. 12000</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="wixGuard">​</span></span></p></div><div class="txtNew" id="comp-j9zgsorc" style="left: 374px; width: 271px; position: absolute; top: 79px;"><p class="font_8" style="font-size:14px;"><span class="color_26"><span style="font-family:open sans,sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Parking capacity : 123</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">Cars currently in parking&nbsp;: 23</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">&nbsp; &nbsp; Slots available for cars : 45</span></span></p>

<p class="font_8" style="font-size:14px;"><span class="wixGuard">​</span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">&nbsp; &nbsp; Total amount received : Rs. 12000</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="wixGuard">​</span></span></p></div></div></div><div class="style-j9zg3pk7" id="comp-j9zgxuxk" style="left: 350px; width: 670px; position: absolute; top: 807px; height: 127px;"><div id="comp-j9zgxuxkbg" class="style-j9zg3pk7bg"></div><div id="comp-j9zgxuxkinlineContent" class="style-j9zg3pk7inlineContent"><div class="txtNew" id="comp-j9zgyclb" style="left: 193px; width: 352px; position: absolute; top: 12px;"><h2 class="font_2" style="font-size:25px;"><span style="font-weight:bold;"><span style="font-size:25px;">Shops &amp; Restaurants&nbsp;Summary</span></span></h2></div><div class="txtNew" id="comp-j9zgzdac" style="left: 63px; width: 245px; position: absolute; top: 58px;"><p class="font_8" style="font-size:14px;"><span class="color_26"><span style="font-family:open sans,sans-serif;">Total Number of&nbsp; Shops&nbsp;: 234</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Categories&nbsp;: 8</span></span></p></div><div class="txtNew" id="comp-j9zh10lg" style="left: 374px; width: 256px; position: absolute; top: 58px;"><p class="font_8" style="font-size:14px;"><span class="color_26"><span style="font-family:open sans,sans-serif;">Total Number of&nbsp; Restaurants&nbsp;: 13</span></span></p>

<p class="font_8" style="font-size:14px;"><span style="font-family:open sans,sans-serif;"><span class="color_26">&nbsp;
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Categories&nbsp;: 4</span></span></p></div></div></div></div></div></div></div></div></div></div></div>




<!-- No Footer -->







</body></html>