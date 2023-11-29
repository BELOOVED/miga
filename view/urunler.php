<?php

$currentPageURL = $_SERVER['REQUEST_URI'];
$segments = explode('/', $currentPageURL);
$segments = array_filter($segments);
array_shift($segments);
array_shift($segments);
$id = end($segments);
try {
    $sql = "SELECT * FROM kategoriler";
    if ($id !== null) {
        $sql .= " WHERE id = :id";
    }
    $stmt = $pdo->prepare($sql);
    if ($id !== null) {
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    }

    $stmt->execute();
    $kategoriler = $stmt->fetchAll(PDO::FETCH_ASSOC);


} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}

?>


<?php
if ($detect->isMobile()) {?>
<style>
    .header{
        display: none;
    }
    #filtrelere{
        margin-top: 70px;
    }
</style>
<style>sm-mobile-filter-modal{position:relative;display:block;height:100%;--mdc-theme-text-icon-on-background: black;--mdc-typography-caption-font-size: 1rem}sm-mobile-filter-modal .z-index{z-index:1000}sm-mobile-filter-modal .back-button{left:.5rem;top:.5rem;position:absolute}sm-mobile-filter-modal .header{position:relative;top:-1.5rem;margin:0}sm-mobile-filter-modal .actions{position:absolute;bottom:0;width:100%}sm-mobile-filter-modal .actions .button-container{display:flex;padding:1rem}sm-mobile-filter-modal .actions .button-container .button{width:100%;height:3.125rem}sm-mobile-filter-modal .actions .button-container .button:first-of-type{margin-right:.75rem}sm-mobile-filter-modal .content{height:100%}sm-mobile-filter-modal .info-option{display:flex;flex-direction:row-reverse;justify-content:flex-end}sm-mobile-filter-modal .info-option .mdc-list-item__meta{margin:0}sm-mobile-filter-modal .group-option .mdc-list-item__text{display:block;width:100%}sm-mobile-filter-modal .group-option .mat-line{width:100%;display:flex;justify-content:space-between;align-items:center}sm-mobile-filter-modal .mat-mdc-list-item,sm-mobile-filter-modal .mat-mdc-list-option{height:3.5rem}sm-mobile-filter-modal .mdc-list-item__graphic{margin-right:0}
</style>

<style>.mdc-icon-button{font-size:24px;width:48px;height:48px;padding:12px}.mdc-icon-button .mdc-icon-button__focus-ring{display:none}.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{display:block;max-height:48px;max-width:48px}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:100%;width:100%}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{border-color:CanvasText}}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{border-color:CanvasText}}.mdc-icon-button.mdc-icon-button--reduced-size .mdc-icon-button__ripple{width:40px;height:40px;margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px}.mdc-icon-button.mdc-icon-button--reduced-size.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button.mdc-icon-button--reduced-size:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{max-height:40px;max-width:40px}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button svg,.mdc-icon-button img{width:24px;height:24px}.mdc-icon-button{display:inline-block;position:relative;box-sizing:border-box;border:none;outline:none;background-color:rgba(0,0,0,0);fill:currentColor;color:inherit;text-decoration:none;cursor:pointer;user-select:none;z-index:0;overflow:visible}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button:disabled{cursor:default;pointer-events:none}.mdc-icon-button--display-flex{align-items:center;display:inline-flex;justify-content:center}.mdc-icon-button__icon{display:inline-block}.mdc-icon-button__icon.mdc-icon-button__icon--on{display:none}.mdc-icon-button--on .mdc-icon-button__icon{display:none}.mdc-icon-button--on .mdc-icon-button__icon.mdc-icon-button__icon--on{display:inline-block}.mdc-icon-button__link{height:100%;left:0;outline:none;position:absolute;top:0;width:100%}.mat-mdc-icon-button{height:var(--mdc-icon-button-state-layer-size, 48px);width:var(--mdc-icon-button-state-layer-size, 48px);font-size:var(--mdc-icon-button-icon-size, 24px);color:var(--mdc-icon-button-icon-color, inherit);border-radius:50%;flex-shrink:0}.mat-mdc-icon-button svg,.mat-mdc-icon-button img{width:var(--mdc-icon-button-icon-size, 24px);height:var(--mdc-icon-button-icon-size, 24px)}.mat-mdc-icon-button:disabled{opacity:var(--mdc-icon-button-disabled-icon-opacity, 0.38)}.mat-mdc-icon-button:disabled{color:var(--mdc-icon-button-disabled-icon-color, #000)}.mat-mdc-icon-button[disabled]{cursor:default;pointer-events:none;opacity:1}.mat-mdc-icon-button .mat-mdc-button-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:inherit}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{content:"";opacity:0;background-color:var(--mat-mdc-button-persistent-ripple-color)}.mat-mdc-icon-button .mat-ripple-element{background-color:var(--mat-mdc-button-ripple-color)}.mat-mdc-icon-button .mdc-button__label{z-index:1}.mat-mdc-icon-button .mat-mdc-focus-indicator{top:0;left:0;right:0;bottom:0;position:absolute}.mat-mdc-icon-button:focus .mat-mdc-focus-indicator::before{content:""}.mat-mdc-icon-button .mat-mdc-button-touch-target{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mat-mdc-icon-button._mat-animation-noopable{transition:none !important;animation:none !important}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple{border-radius:50%}.mat-mdc-icon-button.mat-unthemed:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-primary:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-accent:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-warn:not(.mdc-ripple-upgraded):focus::before{background:rgba(0,0,0,0);opacity:1}</style>
<style>.mat-subheader{display:flex;box-sizing:border-box;padding:16px;align-items:center}.mat-list-base .mat-subheader{margin:0}button.mat-list-item,button.mat-list-option{padding:0;width:100%;background:none;color:inherit;border:none;outline:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0);text-align:left}[dir=rtl] button.mat-list-item,[dir=rtl] button.mat-list-option{text-align:right}button.mat-list-item::-moz-focus-inner,button.mat-list-option::-moz-focus-inner{border:0}.mat-list-base{padding-top:8px;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0)}.mat-list-base .mat-subheader{height:48px;line-height:16px}.mat-list-base .mat-subheader:first-child{margin-top:-8px}.mat-list-base .mat-list-item,.mat-list-base .mat-list-option{display:block;height:48px;-webkit-tap-highlight-color:rgba(0,0,0,0);width:100%;padding:0}.mat-list-base .mat-list-item .mat-list-item-content,.mat-list-base .mat-list-option .mat-list-item-content{display:flex;flex-direction:row;align-items:center;box-sizing:border-box;padding:0 16px;position:relative;height:inherit}.mat-list-base .mat-list-item .mat-list-item-content-reverse,.mat-list-base .mat-list-option .mat-list-item-content-reverse{display:flex;align-items:center;padding:0 16px;flex-direction:row-reverse;justify-content:space-around}.mat-list-base .mat-list-item .mat-list-item-ripple,.mat-list-base .mat-list-option .mat-list-item-ripple{display:block;top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none}.mat-list-base .mat-list-item.mat-list-item-with-avatar,.mat-list-base .mat-list-option.mat-list-item-with-avatar{height:56px}.mat-list-base .mat-list-item.mat-2-line,.mat-list-base .mat-list-option.mat-2-line{height:72px}.mat-list-base .mat-list-item.mat-3-line,.mat-list-base .mat-list-option.mat-3-line{height:88px}.mat-list-base .mat-list-item.mat-multi-line,.mat-list-base .mat-list-option.mat-multi-line{height:auto}.mat-list-base .mat-list-item.mat-multi-line .mat-list-item-content,.mat-list-base .mat-list-option.mat-multi-line .mat-list-item-content{padding-top:16px;padding-bottom:16px}.mat-list-base .mat-list-item .mat-list-text,.mat-list-base .mat-list-option .mat-list-text{display:flex;flex-direction:column;flex:auto;box-sizing:border-box;overflow:hidden;padding:0}.mat-list-base .mat-list-item .mat-list-text>*,.mat-list-base .mat-list-option .mat-list-text>*{margin:0;padding:0;font-weight:normal;font-size:inherit}.mat-list-base .mat-list-item .mat-list-text:empty,.mat-list-base .mat-list-option .mat-list-text:empty{display:none}.mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,.mat-list-base .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,.mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,.mat-list-base .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text{padding-right:0;padding-left:16px}[dir=rtl] .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text{padding-right:16px;padding-left:0}.mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,.mat-list-base .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,.mat-list-base .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text{padding-left:0;padding-right:16px}[dir=rtl] .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text{padding-right:0;padding-left:16px}.mat-list-base .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text,.mat-list-base .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text{padding-right:16px;padding-left:16px}.mat-list-base .mat-list-item .mat-list-avatar,.mat-list-base .mat-list-option .mat-list-avatar{flex-shrink:0;width:40px;height:40px;border-radius:50%;object-fit:cover}.mat-list-base .mat-list-item .mat-list-avatar~.mat-divider-inset,.mat-list-base .mat-list-option .mat-list-avatar~.mat-divider-inset{margin-left:72px;width:calc(100% - 72px)}[dir=rtl] .mat-list-base .mat-list-item .mat-list-avatar~.mat-divider-inset,[dir=rtl] .mat-list-base .mat-list-option .mat-list-avatar~.mat-divider-inset{margin-left:auto;margin-right:72px}.mat-list-base .mat-list-item .mat-list-icon,.mat-list-base .mat-list-option .mat-list-icon{flex-shrink:0;width:24px;height:24px;font-size:24px;box-sizing:content-box;border-radius:50%;padding:4px}.mat-list-base .mat-list-item .mat-list-icon~.mat-divider-inset,.mat-list-base .mat-list-option .mat-list-icon~.mat-divider-inset{margin-left:64px;width:calc(100% - 64px)}[dir=rtl] .mat-list-base .mat-list-item .mat-list-icon~.mat-divider-inset,[dir=rtl] .mat-list-base .mat-list-option .mat-list-icon~.mat-divider-inset{margin-left:auto;margin-right:64px}.mat-list-base .mat-list-item .mat-divider,.mat-list-base .mat-list-option .mat-divider{position:absolute;bottom:0;left:0;width:100%;margin:0}[dir=rtl] .mat-list-base .mat-list-item .mat-divider,[dir=rtl] .mat-list-base .mat-list-option .mat-divider{margin-left:auto;margin-right:0}.mat-list-base .mat-list-item .mat-divider.mat-divider-inset,.mat-list-base .mat-list-option .mat-divider.mat-divider-inset{position:absolute}.mat-list-base[dense]{padding-top:4px;display:block}.mat-list-base[dense] .mat-subheader{height:40px;line-height:8px}.mat-list-base[dense] .mat-subheader:first-child{margin-top:-4px}.mat-list-base[dense] .mat-list-item,.mat-list-base[dense] .mat-list-option{display:block;height:40px;-webkit-tap-highlight-color:rgba(0,0,0,0);width:100%;padding:0}.mat-list-base[dense] .mat-list-item .mat-list-item-content,.mat-list-base[dense] .mat-list-option .mat-list-item-content{display:flex;flex-direction:row;align-items:center;box-sizing:border-box;padding:0 16px;position:relative;height:inherit}.mat-list-base[dense] .mat-list-item .mat-list-item-content-reverse,.mat-list-base[dense] .mat-list-option .mat-list-item-content-reverse{display:flex;align-items:center;padding:0 16px;flex-direction:row-reverse;justify-content:space-around}.mat-list-base[dense] .mat-list-item .mat-list-item-ripple,.mat-list-base[dense] .mat-list-option .mat-list-item-ripple{display:block;top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none}.mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar,.mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar{height:48px}.mat-list-base[dense] .mat-list-item.mat-2-line,.mat-list-base[dense] .mat-list-option.mat-2-line{height:60px}.mat-list-base[dense] .mat-list-item.mat-3-line,.mat-list-base[dense] .mat-list-option.mat-3-line{height:76px}.mat-list-base[dense] .mat-list-item.mat-multi-line,.mat-list-base[dense] .mat-list-option.mat-multi-line{height:auto}.mat-list-base[dense] .mat-list-item.mat-multi-line .mat-list-item-content,.mat-list-base[dense] .mat-list-option.mat-multi-line .mat-list-item-content{padding-top:16px;padding-bottom:16px}.mat-list-base[dense] .mat-list-item .mat-list-text,.mat-list-base[dense] .mat-list-option .mat-list-text{display:flex;flex-direction:column;flex:auto;box-sizing:border-box;overflow:hidden;padding:0}.mat-list-base[dense] .mat-list-item .mat-list-text>*,.mat-list-base[dense] .mat-list-option .mat-list-text>*{margin:0;padding:0;font-weight:normal;font-size:inherit}.mat-list-base[dense] .mat-list-item .mat-list-text:empty,.mat-list-base[dense] .mat-list-option .mat-list-text:empty{display:none}.mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,.mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text{padding-right:0;padding-left:16px}[dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text{padding-right:16px;padding-left:0}.mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,.mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text{padding-left:0;padding-right:16px}[dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,[dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text{padding-right:0;padding-left:16px}.mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,.mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text{padding-right:16px;padding-left:16px}.mat-list-base[dense] .mat-list-item .mat-list-avatar,.mat-list-base[dense] .mat-list-option .mat-list-avatar{flex-shrink:0;width:36px;height:36px;border-radius:50%;object-fit:cover}.mat-list-base[dense] .mat-list-item .mat-list-avatar~.mat-divider-inset,.mat-list-base[dense] .mat-list-option .mat-list-avatar~.mat-divider-inset{margin-left:68px;width:calc(100% - 68px)}[dir=rtl] .mat-list-base[dense] .mat-list-item .mat-list-avatar~.mat-divider-inset,[dir=rtl] .mat-list-base[dense] .mat-list-option .mat-list-avatar~.mat-divider-inset{margin-left:auto;margin-right:68px}.mat-list-base[dense] .mat-list-item .mat-list-icon,.mat-list-base[dense] .mat-list-option .mat-list-icon{flex-shrink:0;width:20px;height:20px;font-size:20px;box-sizing:content-box;border-radius:50%;padding:4px}.mat-list-base[dense] .mat-list-item .mat-list-icon~.mat-divider-inset,.mat-list-base[dense] .mat-list-option .mat-list-icon~.mat-divider-inset{margin-left:60px;width:calc(100% - 60px)}[dir=rtl] .mat-list-base[dense] .mat-list-item .mat-list-icon~.mat-divider-inset,[dir=rtl] .mat-list-base[dense] .mat-list-option .mat-list-icon~.mat-divider-inset{margin-left:auto;margin-right:60px}.mat-list-base[dense] .mat-list-item .mat-divider,.mat-list-base[dense] .mat-list-option .mat-divider{position:absolute;bottom:0;left:0;width:100%;margin:0}[dir=rtl] .mat-list-base[dense] .mat-list-item .mat-divider,[dir=rtl] .mat-list-base[dense] .mat-list-option .mat-divider{margin-left:auto;margin-right:0}.mat-list-base[dense] .mat-list-item .mat-divider.mat-divider-inset,.mat-list-base[dense] .mat-list-option .mat-divider.mat-divider-inset{position:absolute}.mat-nav-list a{text-decoration:none;color:inherit}.mat-nav-list .mat-list-item{cursor:pointer;outline:none}mat-action-list .mat-list-item{cursor:pointer;outline:inherit}.mat-list-option:not(.mat-list-item-disabled){cursor:pointer;outline:none}.mat-list-item-disabled{pointer-events:none}.cdk-high-contrast-active .mat-list-item-disabled{opacity:.5}.cdk-high-contrast-active :host .mat-list-item-disabled{opacity:.5}.cdk-high-contrast-active .mat-list-option:hover,.cdk-high-contrast-active .mat-nav-list .mat-list-item:hover,.cdk-high-contrast-active mat-action-list .mat-list-item:hover{outline:dotted 1px;z-index:1}.cdk-high-contrast-active .mat-list-single-selected-option::after{content:"";position:absolute;top:50%;right:16px;transform:translateY(-50%);width:10px;height:0;border-bottom:solid 10px;border-radius:10px}.cdk-high-contrast-active [dir=rtl] .mat-list-single-selected-option::after{right:auto;left:16px}@media(hover: none){.mat-list-option:not(.mat-list-single-selected-option):not(.mat-list-item-disabled):hover,.mat-nav-list .mat-list-item:not(.mat-list-item-disabled):hover,.mat-action-list .mat-list-item:not(.mat-list-item-disabled):hover{background:none}}</style>
<style>.mat-pseudo-checkbox{width:16px;height:16px;border:2px solid;border-radius:2px;cursor:pointer;display:inline-block;vertical-align:middle;box-sizing:border-box;position:relative;flex-shrink:0;transition:border-color 90ms cubic-bezier(0, 0, 0.2, 0.1),background-color 90ms cubic-bezier(0, 0, 0.2, 0.1)}.mat-pseudo-checkbox::after{position:absolute;opacity:0;content:"";border-bottom:2px solid currentColor;transition:opacity 90ms cubic-bezier(0, 0, 0.2, 0.1)}.mat-pseudo-checkbox.mat-pseudo-checkbox-checked,.mat-pseudo-checkbox.mat-pseudo-checkbox-indeterminate{border-color:rgba(0,0,0,0)}.mat-pseudo-checkbox._mat-animation-noopable{transition:none !important;animation:none !important}.mat-pseudo-checkbox._mat-animation-noopable::after{transition:none}.mat-pseudo-checkbox-disabled{cursor:default}.mat-pseudo-checkbox-indeterminate::after{top:5px;left:1px;width:10px;opacity:1;border-radius:2px}.mat-pseudo-checkbox-checked::after{top:2.4px;left:1px;width:8px;height:3px;border-left:2px solid currentColor;transform:rotate(-45deg);opacity:1;box-sizing:content-box}</style>
<style>.button-icon[_ngcontent-xhn-c243]{display:flex}</style>
<style>.mdc-radio{display:inline-block;position:relative;flex:0 0 auto;box-sizing:content-box;width:20px;height:20px;cursor:pointer;will-change:opacity,transform,border-color,color}.mdc-radio__background{display:inline-block;position:relative;box-sizing:border-box;width:20px;height:20px}.mdc-radio__background::before{position:absolute;transform:scale(0, 0);border-radius:50%;opacity:0;pointer-events:none;content:"";transition:opacity 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1),transform 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__outer-circle{position:absolute;top:0;left:0;box-sizing:border-box;width:100%;height:100%;border-width:2px;border-style:solid;border-radius:50%;transition:border-color 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__inner-circle{position:absolute;top:0;left:0;box-sizing:border-box;width:100%;height:100%;transform:scale(0, 0);border-width:10px;border-style:solid;border-radius:50%;transition:transform 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1),border-color 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__native-control{position:absolute;margin:0;padding:0;opacity:0;cursor:inherit;z-index:1}.mdc-radio--touch{margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px}.mdc-radio--touch .mdc-radio__native-control{top:calc((40px - 48px) / 2);right:calc((40px - 48px) / 2);left:calc((40px - 48px) / 2);width:48px;height:48px}.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:100%;width:100%}@media screen and (forced-colors: active){.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring{border-color:CanvasText}}.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring::after,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}@media screen and (forced-colors: active){.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring::after,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring::after{border-color:CanvasText}}.mdc-radio__native-control:checked+.mdc-radio__background,.mdc-radio__native-control:disabled+.mdc-radio__background{transition:opacity 120ms 0ms cubic-bezier(0, 0, 0.2, 1),transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__outer-circle{transition:border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__inner-circle,.mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{transition:transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1),border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio--disabled{cursor:default;pointer-events:none}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__inner-circle{transform:scale(0.5);transition:transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1),border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:disabled+.mdc-radio__background,[aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background{cursor:default}.mdc-radio__native-control:focus+.mdc-radio__background::before{transform:scale(1);opacity:.12;transition:opacity 120ms 0ms cubic-bezier(0, 0, 0.2, 1),transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-form-field{display:inline-flex;align-items:center;vertical-align:middle}.mdc-form-field>label{margin-left:0;margin-right:auto;padding-left:4px;padding-right:0;order:0}[dir=rtl] .mdc-form-field>label,.mdc-form-field>label[dir=rtl]{margin-left:auto;margin-right:0}[dir=rtl] .mdc-form-field>label,.mdc-form-field>label[dir=rtl]{padding-left:0;padding-right:4px}.mdc-form-field--nowrap>label{text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.mdc-form-field--align-end>label{margin-left:auto;margin-right:0;padding-left:0;padding-right:4px;order:-1}[dir=rtl] .mdc-form-field--align-end>label,.mdc-form-field--align-end>label[dir=rtl]{margin-left:0;margin-right:auto}[dir=rtl] .mdc-form-field--align-end>label,.mdc-form-field--align-end>label[dir=rtl]{padding-left:4px;padding-right:0}.mdc-form-field--space-between{justify-content:space-between}.mdc-form-field--space-between>label{margin:0}[dir=rtl] .mdc-form-field--space-between>label,.mdc-form-field--space-between>label[dir=rtl]{margin:0}.mat-mdc-radio-button .mdc-radio{padding:calc((var(--mdc-radio-state-layer-size, 40px) - 20px) / 2)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-disabled-selected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-disabled-selected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:checked+.mdc-radio__background .mdc-radio__outer-circle{opacity:var(--mdc-radio-disabled-selected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{opacity:var(--mdc-radio-disabled-selected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-disabled-unselected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{opacity:var(--mdc-radio-disabled-unselected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-focus-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-focus-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-hover-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-hover-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-pressed-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-pressed-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-hover-icon-color, #000)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-pressed-icon-color, #000)}.mat-mdc-radio-button .mdc-radio .mdc-radio__background::before{top:calc(-1 * (var(--mdc-radio-state-layer-size, 40px) - 20px) / 2);left:calc(-1 * (var(--mdc-radio-state-layer-size, 40px) - 20px) / 2);width:var(--mdc-radio-state-layer-size, 40px);height:var(--mdc-radio-state-layer-size, 40px)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control{top:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);right:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);left:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);width:var(--mdc-radio-state-layer-size, 40px);height:var(--mdc-radio-state-layer-size, 40px)}.mat-mdc-radio-button .mdc-radio .mdc-radio__background::before{background-color:var(--mat-mdc-radio-ripple-color, transparent)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:not([disabled]):not(:focus)~.mdc-radio__background::before{opacity:.04;transform:scale(1)}.mat-mdc-radio-button.mat-mdc-radio-checked .mdc-radio__background::before{background-color:var(--mat-mdc-radio-checked-ripple-color, transparent)}.mat-mdc-radio-button.mat-mdc-radio-checked .mat-ripple-element{background-color:var(--mat-mdc-radio-checked-ripple-color, transparent)}.mat-mdc-radio-button .mat-radio-ripple{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:50%}.mat-mdc-radio-button .mat-radio-ripple .mat-ripple-element{opacity:.14}.mat-mdc-radio-button .mat-radio-ripple::before{border-radius:50%}.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__background::before,.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__outer-circle,.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__inner-circle{transition:none !important}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:focus:enabled:not(:checked)~.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-focus-icon-color, black)}.mat-mdc-radio-button.cdk-focused .mat-mdc-focus-indicator::before{content:""}.mat-mdc-radio-touch-target{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}[dir=rtl] .mat-mdc-radio-touch-target{left:0;right:50%;transform:translate(50%, -50%)}</style>

<style>sm-mobile-sort-modal{position:relative;display:block;height:100%}sm-mobile-sort-modal .actions{position:absolute;bottom:0;width:100%}sm-mobile-sort-modal .actions .button-container{padding:1rem}sm-mobile-sort-modal .actions .button{width:100%;height:3.125rem}sm-mobile-sort-modal .content{height:100%}sm-mobile-sort-modal .content .radio-group{padding:0 .5rem}sm-mobile-sort-modal .content .radio-group .mdc-form-field{width:90%}sm-mobile-sort-modal .content .radio-group .sortIcon{margin-left:.5rem;font-size:1.25rem}sm-mobile-sort-modal .content .radio-group .sortIcon.turquois{color:#5bc0be}sm-mobile-sort-modal .content .radio-group .sortIcon.orange{color:var(--mdc-theme-primary, #ff7f00)}sm-mobile-sort-modal .content .radio-group .sortIcon.yellow{color:var(--brandColorHemen700)}sm-mobile-sort-modal .content .radio-group .sortIcon.red{color:var(--brandColorYemek700)}
</style>
<style>.mdc-dialog .mdc-dialog__close.mdc-ripple-upgraded--background-focused .mdc-icon-button__ripple::before,.mdc-dialog .mdc-dialog__close:not(.mdc-ripple-upgraded):focus .mdc-icon-button__ripple::before{transition-duration:75ms}.mdc-dialog .mdc-dialog__close:not(.mdc-ripple-upgraded) .mdc-icon-button__ripple::after{transition:opacity 150ms linear}.mdc-dialog .mdc-dialog__close:not(.mdc-ripple-upgraded):active .mdc-icon-button__ripple::after{transition-duration:75ms}.mdc-dialog .mdc-dialog__surface{border-radius:var(--mdc-shape-medium, 4px)}.mdc-elevation-overlay{position:absolute;border-radius:inherit;pointer-events:none;opacity:var(--mdc-elevation-overlay-opacity, 0);transition:opacity 280ms cubic-bezier(0.4, 0, 0.2, 1)}.mdc-dialog,.mdc-dialog__scrim{position:fixed;top:0;left:0;align-items:center;justify-content:center;box-sizing:border-box;width:100%;height:100%}.mdc-dialog{display:none;z-index:var(--mdc-dialog-z-index, 7)}.mdc-dialog .mdc-dialog__content{padding:20px 24px 20px 24px}.mdc-dialog .mdc-dialog__surface{min-width:280px}@media(max-width: 592px){.mdc-dialog .mdc-dialog__surface{max-width:calc(100vw - 32px)}}@media(min-width: 592px){.mdc-dialog .mdc-dialog__surface{max-width:560px}}.mdc-dialog .mdc-dialog__surface{max-height:calc(100% - 32px)}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{max-width:none}@media(max-width: 960px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{max-height:560px;width:560px}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close{right:-12px}}@media(max-width: 720px)and (max-width: 672px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{width:calc(100vw - 112px)}}@media(max-width: 720px)and (min-width: 672px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{width:560px}}@media(max-width: 720px)and (max-height: 720px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{max-height:calc(100vh - 160px)}}@media(max-width: 720px)and (min-height: 720px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{max-height:560px}}@media(max-width: 720px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close{right:-12px}}@media(max-width: 720px)and (max-height: 400px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{height:100%;max-height:100vh;max-width:100vw;width:100vw;border-radius:0}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close{order:-1;left:-12px}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__header{padding:0 16px 9px;justify-content:flex-start}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__title{margin-left:calc(16px - 2 * 12px)}}@media(max-width: 600px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{height:100%;max-height:100vh;max-width:100vw;width:100vw;border-radius:0}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close{order:-1;left:-12px}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__header{padding:0 16px 9px;justify-content:flex-start}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__title{margin-left:calc(16px - 2 * 12px)}}@media(min-width: 960px){.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface{width:calc(100vw - 400px)}.mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close{right:-12px}}.mdc-dialog.mdc-dialog__scrim--hidden .mdc-dialog__scrim{opacity:0}.mdc-dialog__scrim{opacity:0;z-index:-1}.mdc-dialog__container{display:flex;flex-direction:row;align-items:center;justify-content:space-around;box-sizing:border-box;height:100%;transform:scale(0.8);opacity:0;pointer-events:none}.mdc-dialog__surface{position:relative;display:flex;flex-direction:column;flex-grow:0;flex-shrink:0;box-sizing:border-box;max-width:100%;max-height:100%;pointer-events:auto;overflow-y:auto}.mdc-dialog__surface .mdc-elevation-overlay{width:100%;height:100%;top:0;left:0}[dir=rtl] .mdc-dialog__surface,.mdc-dialog__surface[dir=rtl]{text-align:right}@media screen and (forced-colors: active),(-ms-high-contrast: active){.mdc-dialog__surface{outline:2px solid windowText}}.mdc-dialog__surface::before{position:absolute;box-sizing:border-box;width:100%;height:100%;top:0;left:0;border:2px solid rgba(0,0,0,0);border-radius:inherit;content:"";pointer-events:none}@media screen and (forced-colors: active){.mdc-dialog__surface::before{border-color:CanvasText}}@media screen and (-ms-high-contrast: active),screen and (-ms-high-contrast: none){.mdc-dialog__surface::before{content:none}}.mdc-dialog__title{display:block;margin-top:0;position:relative;flex-shrink:0;box-sizing:border-box;margin:0 0 1px;padding:0 24px 9px}.mdc-dialog__title::before{display:inline-block;width:0;height:40px;content:"";vertical-align:0}[dir=rtl] .mdc-dialog__title,.mdc-dialog__title[dir=rtl]{text-align:right}.mdc-dialog--scrollable .mdc-dialog__title{margin-bottom:1px;padding-bottom:15px}.mdc-dialog--fullscreen .mdc-dialog__header{align-items:baseline;border-bottom:1px solid rgba(0,0,0,0);display:inline-flex;justify-content:space-between;padding:0 24px 9px;z-index:1}@media screen and (forced-colors: active){.mdc-dialog--fullscreen .mdc-dialog__header{border-bottom-color:CanvasText}}.mdc-dialog--fullscreen .mdc-dialog__header .mdc-dialog__close{right:-12px}.mdc-dialog--fullscreen .mdc-dialog__title{margin-bottom:0;padding:0;border-bottom:0}.mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__title{border-bottom:0;margin-bottom:0}.mdc-dialog--fullscreen .mdc-dialog__close{top:5px}.mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__actions{border-top:1px solid rgba(0,0,0,0)}@media screen and (forced-colors: active){.mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__actions{border-top-color:CanvasText}}.mdc-dialog__content{flex-grow:1;box-sizing:border-box;margin:0;overflow:auto}.mdc-dialog__content>:first-child{margin-top:0}.mdc-dialog__content>:last-child{margin-bottom:0}.mdc-dialog__title+.mdc-dialog__content,.mdc-dialog__header+.mdc-dialog__content{padding-top:0}.mdc-dialog--scrollable .mdc-dialog__title+.mdc-dialog__content{padding-top:8px;padding-bottom:8px}.mdc-dialog__content .mdc-deprecated-list:first-child:last-child{padding:6px 0 0}.mdc-dialog--scrollable .mdc-dialog__content .mdc-deprecated-list:first-child:last-child{padding:0}.mdc-dialog__actions{display:flex;position:relative;flex-shrink:0;flex-wrap:wrap;align-items:center;justify-content:flex-end;box-sizing:border-box;min-height:52px;margin:0;padding:8px;border-top:1px solid rgba(0,0,0,0)}@media screen and (forced-colors: active){.mdc-dialog__actions{border-top-color:CanvasText}}.mdc-dialog--stacked .mdc-dialog__actions{flex-direction:column;align-items:flex-end}.mdc-dialog__button{margin-left:8px;margin-right:0;max-width:100%;text-align:right}[dir=rtl] .mdc-dialog__button,.mdc-dialog__button[dir=rtl]{margin-left:0;margin-right:8px}.mdc-dialog__button:first-child{margin-left:0;margin-right:0}[dir=rtl] .mdc-dialog__button:first-child,.mdc-dialog__button:first-child[dir=rtl]{margin-left:0;margin-right:0}[dir=rtl] .mdc-dialog__button,.mdc-dialog__button[dir=rtl]{text-align:left}.mdc-dialog--stacked .mdc-dialog__button:not(:first-child){margin-top:12px}.mdc-dialog--open,.mdc-dialog--opening,.mdc-dialog--closing{display:flex}.mdc-dialog--opening .mdc-dialog__scrim{transition:opacity 150ms linear}.mdc-dialog--opening .mdc-dialog__container{transition:opacity 75ms linear,transform 150ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-dialog--closing .mdc-dialog__scrim,.mdc-dialog--closing .mdc-dialog__container{transition:opacity 75ms linear}.mdc-dialog--closing .mdc-dialog__container{transform:none}.mdc-dialog--open .mdc-dialog__scrim{opacity:1}.mdc-dialog--open .mdc-dialog__container{transform:none;opacity:1}.mdc-dialog--open.mdc-dialog__surface-scrim--shown .mdc-dialog__surface-scrim{opacity:1;z-index:1}.mdc-dialog--open.mdc-dialog__surface-scrim--hiding .mdc-dialog__surface-scrim{transition:opacity 75ms linear}.mdc-dialog--open.mdc-dialog__surface-scrim--showing .mdc-dialog__surface-scrim{transition:opacity 150ms linear}.mdc-dialog__surface-scrim{display:none;opacity:0;position:absolute;width:100%;height:100%}.mdc-dialog__surface-scrim--shown .mdc-dialog__surface-scrim,.mdc-dialog__surface-scrim--showing .mdc-dialog__surface-scrim,.mdc-dialog__surface-scrim--hiding .mdc-dialog__surface-scrim{display:block}.mdc-dialog-scroll-lock{overflow:hidden}.mdc-dialog--no-content-padding .mdc-dialog__content{padding:0}.mdc-dialog--sheet .mdc-dialog__close{right:12px;top:9px;position:absolute;z-index:1}.mat-mdc-dialog-content{max-height:65vh}.mat-mdc-dialog-container{position:static;display:block}.mat-mdc-dialog-container,.mat-mdc-dialog-container .mdc-dialog__container,.mat-mdc-dialog-container .mdc-dialog__surface{max-height:inherit;min-height:inherit;min-width:inherit;max-width:inherit}.mat-mdc-dialog-container .mdc-dialog__surface{display:block;width:100%;height:100%}.mat-mdc-dialog-container{outline:0}.mat-mdc-dialog-container .mdc-dialog__surface{background-color:var(--mdc-dialog-container-color, white)}.mat-mdc-dialog-container .mdc-dialog__surface{--mdc-elevation-box-shadow-for-gss:0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);box-shadow:var(--mdc-dialog-container-elevation, var(--mdc-elevation-box-shadow-for-gss))}.mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__title,.mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__actions,.mat-mdc-dialog-container.mdc-dialog--scrollable.mdc-dialog-scroll-divider-footer .mdc-dialog__actions{border-color:var(--mdc-dialog-with-divider-divider-color, black)}.mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__title{border-bottom-color:var(--mdc-dialog-with-divider-divider-color, black)}.mat-mdc-dialog-container .mdc-dialog__title{font-family:var(--mdc-dialog-subhead-font, "Arial");line-height:var(--mdc-dialog-subhead-line-height, 14px);font-size:var(--mdc-dialog-subhead-size, 14px);font-weight:var(--mdc-dialog-subhead-weight, 500);letter-spacing:var(--mdc-dialog-subhead-tracking, 1px)}.mat-mdc-dialog-container .mdc-dialog__title{color:var(--mdc-dialog-subhead-color, black)}.mat-mdc-dialog-container .mdc-dialog__content{font-family:var(--mdc-dialog-supporting-text-font, "Arial");line-height:var(--mdc-dialog-supporting-text-line-height, 14px);font-size:var(--mdc-dialog-supporting-text-size, 14px);font-weight:var(--mdc-dialog-supporting-text-weight, 500);letter-spacing:var(--mdc-dialog-supporting-text-tracking, 1px)}.mat-mdc-dialog-container .mdc-dialog__content{color:var(--mdc-dialog-supporting-text-color, black)}.mat-mdc-dialog-container._mat-animation-noopable .mdc-dialog__container{transition:none}.mat-mdc-dialog-content{display:block}.mat-mdc-dialog-actions{justify-content:start}.mat-mdc-dialog-actions.mat-mdc-dialog-actions-align-center,.mat-mdc-dialog-actions[align=center]{justify-content:center}.mat-mdc-dialog-actions.mat-mdc-dialog-actions-align-end,.mat-mdc-dialog-actions[align=end]{justify-content:flex-end}.mat-mdc-dialog-actions .mat-button-base+.mat-button-base,.mat-mdc-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base{margin-left:8px}[dir=rtl] .mat-mdc-dialog-actions .mat-button-base+.mat-button-base,[dir=rtl] .mat-mdc-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base{margin-left:0;margin-right:8px}</style>
<style>sm-mobile-sort-modal{position:relative;display:block;height:100%}sm-mobile-sort-modal .actions{position:absolute;bottom:0;width:100%}sm-mobile-sort-modal .actions .button-container{padding:1rem}sm-mobile-sort-modal .actions .button{width:100%;height:3.125rem}sm-mobile-sort-modal .content{height:100%}sm-mobile-sort-modal .content .radio-group{padding:0 .5rem}sm-mobile-sort-modal .content .radio-group .mdc-form-field{width:90%}sm-mobile-sort-modal .content .radio-group .sortIcon{margin-left:.5rem;font-size:1.25rem}sm-mobile-sort-modal .content .radio-group .sortIcon.turquois{color:#5bc0be}sm-mobile-sort-modal .content .radio-group .sortIcon.orange{color:var(--mdc-theme-primary, #ff7f00)}sm-mobile-sort-modal .content .radio-group .sortIcon.yellow{color:var(--brandColorHemen700)}sm-mobile-sort-modal .content .radio-group .sortIcon.red{color:var(--brandColorYemek700)}
</style>
<style>.button-icon[_ngcontent-nsa-c243]{display:flex}</style>
<style>.mdc-icon-button{font-size:24px;width:48px;height:48px;padding:12px}.mdc-icon-button .mdc-icon-button__focus-ring{display:none}.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{display:block;max-height:48px;max-width:48px}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:100%;width:100%}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{border-color:CanvasText}}@media screen and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}}@media screen and (forced-colors: active)and (forced-colors: active){.mdc-icon-button.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring::after,.mdc-icon-button:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring::after{border-color:CanvasText}}.mdc-icon-button.mdc-icon-button--reduced-size .mdc-icon-button__ripple{width:40px;height:40px;margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px}.mdc-icon-button.mdc-icon-button--reduced-size.mdc-ripple-upgraded--background-focused .mdc-icon-button__focus-ring,.mdc-icon-button.mdc-icon-button--reduced-size:not(.mdc-ripple-upgraded):focus .mdc-icon-button__focus-ring{max-height:40px;max-width:40px}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button svg,.mdc-icon-button img{width:24px;height:24px}.mdc-icon-button{display:inline-block;position:relative;box-sizing:border-box;border:none;outline:none;background-color:rgba(0,0,0,0);fill:currentColor;color:inherit;text-decoration:none;cursor:pointer;user-select:none;z-index:0;overflow:visible}.mdc-icon-button .mdc-icon-button__touch{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mdc-icon-button:disabled{cursor:default;pointer-events:none}.mdc-icon-button--display-flex{align-items:center;display:inline-flex;justify-content:center}.mdc-icon-button__icon{display:inline-block}.mdc-icon-button__icon.mdc-icon-button__icon--on{display:none}.mdc-icon-button--on .mdc-icon-button__icon{display:none}.mdc-icon-button--on .mdc-icon-button__icon.mdc-icon-button__icon--on{display:inline-block}.mdc-icon-button__link{height:100%;left:0;outline:none;position:absolute;top:0;width:100%}.mat-mdc-icon-button{height:var(--mdc-icon-button-state-layer-size, 48px);width:var(--mdc-icon-button-state-layer-size, 48px);font-size:var(--mdc-icon-button-icon-size, 24px);color:var(--mdc-icon-button-icon-color, inherit);border-radius:50%;flex-shrink:0}.mat-mdc-icon-button svg,.mat-mdc-icon-button img{width:var(--mdc-icon-button-icon-size, 24px);height:var(--mdc-icon-button-icon-size, 24px)}.mat-mdc-icon-button:disabled{opacity:var(--mdc-icon-button-disabled-icon-opacity, 0.38)}.mat-mdc-icon-button:disabled{color:var(--mdc-icon-button-disabled-icon-color, #000)}.mat-mdc-icon-button[disabled]{cursor:default;pointer-events:none;opacity:1}.mat-mdc-icon-button .mat-mdc-button-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple,.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:inherit}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple::before{content:"";opacity:0;background-color:var(--mat-mdc-button-persistent-ripple-color)}.mat-mdc-icon-button .mat-ripple-element{background-color:var(--mat-mdc-button-ripple-color)}.mat-mdc-icon-button .mdc-button__label{z-index:1}.mat-mdc-icon-button .mat-mdc-focus-indicator{top:0;left:0;right:0;bottom:0;position:absolute}.mat-mdc-icon-button:focus .mat-mdc-focus-indicator::before{content:""}.mat-mdc-icon-button .mat-mdc-button-touch-target{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}.mat-mdc-icon-button._mat-animation-noopable{transition:none !important;animation:none !important}.mat-mdc-icon-button .mat-mdc-button-persistent-ripple{border-radius:50%}.mat-mdc-icon-button.mat-unthemed:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-primary:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-accent:not(.mdc-ripple-upgraded):focus::before,.mat-mdc-icon-button.mat-warn:not(.mdc-ripple-upgraded):focus::before{background:rgba(0,0,0,0);opacity:1}</style>
<style>.mdc-radio{display:inline-block;position:relative;flex:0 0 auto;box-sizing:content-box;width:20px;height:20px;cursor:pointer;will-change:opacity,transform,border-color,color}.mdc-radio__background{display:inline-block;position:relative;box-sizing:border-box;width:20px;height:20px}.mdc-radio__background::before{position:absolute;transform:scale(0, 0);border-radius:50%;opacity:0;pointer-events:none;content:"";transition:opacity 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1),transform 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__outer-circle{position:absolute;top:0;left:0;box-sizing:border-box;width:100%;height:100%;border-width:2px;border-style:solid;border-radius:50%;transition:border-color 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__inner-circle{position:absolute;top:0;left:0;box-sizing:border-box;width:100%;height:100%;transform:scale(0, 0);border-width:10px;border-style:solid;border-radius:50%;transition:transform 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1),border-color 120ms 0ms cubic-bezier(0.4, 0, 0.6, 1)}.mdc-radio__native-control{position:absolute;margin:0;padding:0;opacity:0;cursor:inherit;z-index:1}.mdc-radio--touch{margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px}.mdc-radio--touch .mdc-radio__native-control{top:calc((40px - 48px) / 2);right:calc((40px - 48px) / 2);left:calc((40px - 48px) / 2);width:48px;height:48px}.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:100%;width:100%}@media screen and (forced-colors: active){.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring{border-color:CanvasText}}.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring::after,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}@media screen and (forced-colors: active){.mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__focus-ring::after,.mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__focus-ring::after{border-color:CanvasText}}.mdc-radio__native-control:checked+.mdc-radio__background,.mdc-radio__native-control:disabled+.mdc-radio__background{transition:opacity 120ms 0ms cubic-bezier(0, 0, 0.2, 1),transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__outer-circle{transition:border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__inner-circle,.mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{transition:transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1),border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio--disabled{cursor:default;pointer-events:none}.mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__inner-circle{transform:scale(0.5);transition:transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1),border-color 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-radio__native-control:disabled+.mdc-radio__background,[aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background{cursor:default}.mdc-radio__native-control:focus+.mdc-radio__background::before{transform:scale(1);opacity:.12;transition:opacity 120ms 0ms cubic-bezier(0, 0, 0.2, 1),transform 120ms 0ms cubic-bezier(0, 0, 0.2, 1)}.mdc-form-field{display:inline-flex;align-items:center;vertical-align:middle}.mdc-form-field>label{margin-left:0;margin-right:auto;padding-left:4px;padding-right:0;order:0}[dir=rtl] .mdc-form-field>label,.mdc-form-field>label[dir=rtl]{margin-left:auto;margin-right:0}[dir=rtl] .mdc-form-field>label,.mdc-form-field>label[dir=rtl]{padding-left:0;padding-right:4px}.mdc-form-field--nowrap>label{text-overflow:ellipsis;overflow:hidden;white-space:nowrap}.mdc-form-field--align-end>label{margin-left:auto;margin-right:0;padding-left:0;padding-right:4px;order:-1}[dir=rtl] .mdc-form-field--align-end>label,.mdc-form-field--align-end>label[dir=rtl]{margin-left:0;margin-right:auto}[dir=rtl] .mdc-form-field--align-end>label,.mdc-form-field--align-end>label[dir=rtl]{padding-left:4px;padding-right:0}.mdc-form-field--space-between{justify-content:space-between}.mdc-form-field--space-between>label{margin:0}[dir=rtl] .mdc-form-field--space-between>label,.mdc-form-field--space-between>label[dir=rtl]{margin:0}.mat-mdc-radio-button .mdc-radio{padding:calc((var(--mdc-radio-state-layer-size, 40px) - 20px) / 2)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-disabled-selected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-disabled-selected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:checked+.mdc-radio__background .mdc-radio__outer-circle{opacity:var(--mdc-radio-disabled-selected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled+.mdc-radio__background .mdc-radio__inner-circle{opacity:var(--mdc-radio-disabled-selected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-disabled-unselected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio [aria-disabled=true] .mdc-radio__native-control:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:disabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{opacity:var(--mdc-radio-disabled-unselected-icon-opacity, 0.38)}.mat-mdc-radio-button .mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle,.mat-mdc-radio-button .mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-focus-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio.mdc-ripple-upgraded--background-focused .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle,.mat-mdc-radio-button .mdc-radio:not(.mdc-ripple-upgraded):focus .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-focus-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-hover-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-hover-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled:checked+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-selected-pressed-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled+.mdc-radio__background .mdc-radio__inner-circle{border-color:var(--mdc-radio-selected-pressed-icon-color, #6200ee)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-hover-icon-color, #000)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-icon-color, #000)}.mat-mdc-radio-button .mdc-radio:not(:disabled):active .mdc-radio__native-control:enabled:not(:checked)+.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-pressed-icon-color, #000)}.mat-mdc-radio-button .mdc-radio .mdc-radio__background::before{top:calc(-1 * (var(--mdc-radio-state-layer-size, 40px) - 20px) / 2);left:calc(-1 * (var(--mdc-radio-state-layer-size, 40px) - 20px) / 2);width:var(--mdc-radio-state-layer-size, 40px);height:var(--mdc-radio-state-layer-size, 40px)}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control{top:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);right:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);left:calc((var(--mdc-radio-state-layer-size, 40px) - var(--mdc-radio-state-layer-size, 40px)) / 2);width:var(--mdc-radio-state-layer-size, 40px);height:var(--mdc-radio-state-layer-size, 40px)}.mat-mdc-radio-button .mdc-radio .mdc-radio__background::before{background-color:var(--mat-mdc-radio-ripple-color, transparent)}.mat-mdc-radio-button .mdc-radio:hover .mdc-radio__native-control:not([disabled]):not(:focus)~.mdc-radio__background::before{opacity:.04;transform:scale(1)}.mat-mdc-radio-button.mat-mdc-radio-checked .mdc-radio__background::before{background-color:var(--mat-mdc-radio-checked-ripple-color, transparent)}.mat-mdc-radio-button.mat-mdc-radio-checked .mat-ripple-element{background-color:var(--mat-mdc-radio-checked-ripple-color, transparent)}.mat-mdc-radio-button .mat-radio-ripple{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:50%}.mat-mdc-radio-button .mat-radio-ripple .mat-ripple-element{opacity:.14}.mat-mdc-radio-button .mat-radio-ripple::before{border-radius:50%}.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__background::before,.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__outer-circle,.mat-mdc-radio-button._mat-animation-noopable .mdc-radio__inner-circle{transition:none !important}.mat-mdc-radio-button .mdc-radio .mdc-radio__native-control:focus:enabled:not(:checked)~.mdc-radio__background .mdc-radio__outer-circle{border-color:var(--mdc-radio-unselected-focus-icon-color, black)}.mat-mdc-radio-button.cdk-focused .mat-mdc-focus-indicator::before{content:""}.mat-mdc-radio-touch-target{position:absolute;top:50%;height:48px;left:50%;width:48px;transform:translate(-50%, -50%)}[dir=rtl] .mat-mdc-radio-touch-target{left:0;right:50%;transform:translate(50%, -50%)}</style>

<?php }?>
<main _ngcontent-nyw-c368="" class="elektronik">
   <router-outlet _ngcontent-nyw-c368=""></router-outlet>
   <sm-product class="ng-star-inserted">
      <article>
         <router-outlet></router-outlet>
         <sm-list class="ng-star-inserted">
            <fe-mobile-breadcrumb class="mobile-header mobile-only" _nghost-nyw-c391="">
               <div _ngcontent-nyw-c391="" class="breadcrumb mobile-only">
                  <a _ngcontent-nyw-c391="">
                     <fa-icon _ngcontent-nyw-c391="" class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                           <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                        </svg>
                     </fa-icon>
                  </a>
                  <div _ngcontent-nyw-c391="" class="content">
                     <h3 _ngcontent-nyw-c391="">
                     <?php foreach ($kategoriler as $kategori): ?>
                        <?= $kategori['kategori_adi']; ?>
                    <?php endforeach; ?>
                     </h3>
                     <div _ngcontent-nyw-c391="" class="mat-caption-normal text-color-white ng-star-inserted">264 sonuç bulundu</div>
                     <!---->
                  </div>
               </div>
            </fe-mobile-breadcrumb>
            <!---->
            <div class="container ng-star-inserted" id="filtrelere">
               <div class="mat-caption-normal mobile-only mobile-filter-sort-row">
                  <div onclick="openmodal('filtre')">
                     <fa-icon class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="sliders" class="svg-inline--fa fa-sliders" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="currentColor" d="M0 416C0 402.7 10.75 392 24 392H83.66C93.86 359.5 124.2 336 160 336C195.8 336 226.1 359.5 236.3 392H488C501.3 392 512 402.7 512 416C512 429.3 501.3 440 488 440H236.3C226.1 472.5 195.8 496 160 496C124.2 496 93.86 472.5 83.66 440H24C10.75 440 0 429.3 0 416zM192 416C192 398.3 177.7 384 160 384C142.3 384 128 398.3 128 416C128 433.7 142.3 448 160 448C177.7 448 192 433.7 192 416zM352 176C387.8 176 418.1 199.5 428.3 232H488C501.3 232 512 242.7 512 256C512 269.3 501.3 280 488 280H428.3C418.1 312.5 387.8 336 352 336C316.2 336 285.9 312.5 275.7 280H24C10.75 280 0 269.3 0 256C0 242.7 10.75 232 24 232H275.7C285.9 199.5 316.2 176 352 176zM384 256C384 238.3 369.7 224 352 224C334.3 224 320 238.3 320 256C320 273.7 334.3 288 352 288C369.7 288 384 273.7 384 256zM488 72C501.3 72 512 82.75 512 96C512 109.3 501.3 120 488 120H268.3C258.1 152.5 227.8 176 192 176C156.2 176 125.9 152.5 115.7 120H24C10.75 120 0 109.3 0 96C0 82.75 10.75 72 24 72H115.7C125.9 39.54 156.2 16 192 16C227.8 16 258.1 39.54 268.3 72H488zM160 96C160 113.7 174.3 128 192 128C209.7 128 224 113.7 224 96C224 78.33 209.7 64 192 64C174.3 64 160 78.33 160 96z"></path>
                        </svg>
                     </fa-icon>
                     Filtrele <!----><!---->
                  </div>
                  <div onclick="openmodal('sirala')">
                     <fa-icon class="ng-fa-icon">
                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down-arrow-up" class="svg-inline--fa fa-arrow-down-arrow-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="currentColor" d="M150.6 470.6l96-96c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 370.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V370.7L54.6 329.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0zm352-333.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L352 141.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.3l41.4 41.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"></path>
                        </svg>
                     </fa-icon>
                     Sırala
                  </div>
               </div>
               <div class="mobile-only">
                  <sm-legal-description _nghost-nyw-c394="">
                     <!---->
                  </sm-legal-description>
               </div>
               <div class="mobile-sub-header mobile-only">
                  <fe-breadcrumb class="mobile-breadcrumb" _nghost-nyw-c389="">
                     <ul _ngcontent-nyw-c389="" class="breadcrumbs">
                        <li _ngcontent-nyw-c389="" class="breadcrumbs__item"><a _ngcontent-nyw-c389="" title="Anasayfa" class="breadcrumbs__link" href="/">Anasayfa</a></li>
                        <!---->
                        <li _ngcontent-nyw-c389="" class="breadcrumbs__item ng-star-inserted"><a _ngcontent-nyw-c389="" class="breadcrumbs__link" title="Telefon ve Aksesuarları" href="#"> <?php foreach ($kategoriler as $kategori): ?>
                        <?= $kategori['kategori_adi']; ?>
                    <?php endforeach; ?> </a></li>
                        <!----><!----><!---->
                     </ul>
                  </fe-breadcrumb>
                  <a class="mobile-sub-category mat-caption text-color-black ng-star-inserted" ngx-ql="" href="/telefon-c-2add?sayfa=1"> Telefon <span class="overline text-color-grey"></span></a>
               </div>
               <fe-breadcrumb class="breadcrumb desktop-only" _nghost-nyw-c389="">
                  <ul _ngcontent-nyw-c389="" class="breadcrumbs">
                     <li _ngcontent-nyw-c389="" class="breadcrumbs__item"><a _ngcontent-nyw-c389="" title="Anasayfa" class="breadcrumbs__link" href="/">Anasayfa</a></li>
                     <!---->
                     <li _ngcontent-nyw-c389="" class="breadcrumbs__item ng-star-inserted"><a _ngcontent-nyw-c389="" class="breadcrumbs__link" title="Telefon ve Aksesuarları" href="/undefined"> <?php foreach ($kategoriler as $kategori): ?>
                        <?= $kategori['kategori_adi']; ?>
                    <?php endforeach; ?> </a></li>
                     <!----><!----><!---->
                  </ul>
               </fe-breadcrumb>
               <div class="content mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell--span-3 desktop-only">
                     <sm-product-filters-desktop>
                        <div class="filter">
                           <div class="filter__header">
                              <h2>  
                    <?php foreach ($kategoriler as $kategori): ?>
                        <?= $kategori['kategori_adi'] ?>
                    <?php endforeach; ?></h2>
                              <div class="mat-caption-normal text-color-grey">264 ürün</div>
                           </div>
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__subcategories ng-star-inserted">
                              <div class="subtitle-1">Alt Kategoriler</div>
                              <div class="items">
                                <?php 
                                
                                foreach ($kategoriler as $kategori) {
                                    $alt_kategoriler = explode(',', $kategori['altkategoriler']);
                                    foreach ($alt_kategoriler as $alt_kategori) {
                                        $alt_kategori = trim($alt_kategori); 
                                        ?>
                                        <div class="item extra-margin ng-star-inserted">
                                            <a class="text-color-black mat-body-2 ng-star-inserted" ngx-ql="" href="/urunler/<?=seo($alt_kategori)?>/<?=$kategori['id']?>"> <?=$alt_kategori?> <span class="text-color-grey">(71)</span></a>
                                        </div>
                                        <?php }?>

                                <?php  }?>
                              </div>
                           </div>
                           <!---->
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__brands ng-star-inserted">
                              <div class="subtitle-1">Markalar</div>
                              <mat-form-field color="accent" appearance="outline" class="mat-mdc-form-field form-field ng-tns-c186-7 mat-mdc-form-field-type-mat-input mat-form-field-appearance-outline mat-accent ng-star-inserted">
                                 <!---->
                                 <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-7 mdc-text-field--outlined mdc-text-field--no-label">
                                    <!---->
                                    <div class="mat-mdc-form-field-flex ng-tns-c186-7">
                                       <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-7 mdc-notched-outline--no-label ng-star-inserted">
                                          <div class="mdc-notched-outline__leading"></div>
                                          <div class="mdc-notched-outline__notch">
                                             <!----><!----><!---->
                                          </div>
                                          <div class="mdc-notched-outline__trailing"></div>
                                       </div>
                                       <!----><!----><!---->
                                       <div class="mat-mdc-form-field-infix ng-tns-c186-7">
                                          <!----><input matinput="" placeholder="Marka Ara" class="mat-mdc-input-element ng-tns-c186-7 mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-2" data-placeholder="Marka Ara" aria-invalid="false" aria-required="false">
                                       </div>
                                       <!----><!---->
                                    </div>
                                    <!---->
                                 </div>
                                 <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-7">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-7 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                       <!---->
                                       <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-7"></div>
                                    </div>
                                    <!---->
                                 </div>
                              </mat-form-field>
                              <div class="items extra-margin">
                              <?php 
                                
                                foreach ($kategoriler as $kategori) {
                                    $alt_kategoriler = explode(',', $kategori['markalar']);
                                    foreach ($alt_kategoriler as $alt_kategori) {
                                        $alt_kategori = trim($alt_kategori); 
                                        ?>
                                        <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-27">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-27-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-27-input"><span class="mat-body-2"><?=$alt_kategori?> </span><span class="mat-body-2 text-color-grey"></span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                        <?php }?>

                                <?php  }?>
                                 
                                 <!---->
                              </div>
                           </div>
                           <!---->
                           <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                           <div class="filter__discounts ng-star-inserted">
                              <div class="subtitle-1">İndirimler</div>
                              <div class="items">
                                 <div class="item ng-star-inserted">
                                    <mat-checkbox color="primary" class="mat-mdc-checkbox mat-primary" id="mat-mdc-checkbox-52">
                                       <div class="mdc-form-field">
                                          <div class="mdc-checkbox">
                                             <div class="mat-mdc-checkbox-touch-target"></div>
                                             <input type="checkbox" class="mdc-checkbox__native-control" id="mat-mdc-checkbox-52-input" tabindex="0" aria-checked="false">
                                             <div class="mdc-checkbox__ripple"></div>
                                             <div class="mdc-checkbox__background">
                                                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="mdc-checkbox__checkmark">
                                                   <path fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" class="mdc-checkbox__checkmark-path"></path>
                                                </svg>
                                                <div class="mdc-checkbox__mixedmark"></div>
                                             </div>
                                             <div mat-ripple="" class="mat-ripple mat-mdc-checkbox-ripple mat-mdc-focus-indicator"></div>
                                          </div>
                                          <label for="mat-mdc-checkbox-52-input"><span class="mat-body-2">Money İndirimli Market Ürünleri </span><span class="mat-body-2 text-color-grey"></span></label>
                                       </div>
                                    </mat-checkbox>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <!----><!---->
                        </div>
                     </sm-product-filters-desktop>
                     <!---->
                  </div>
                  <div class="products mdc-layout-grid__cell--span-10-phone mdc-layout-grid__cell--span-12-tablet mdc-layout-grid__cell--span-9-desktop">
                     <div class="banner-container">
                        <div class="banner-wrapper">
                           <!---->
                           <div>
                              <div fedeferload="" class="list-page-banner ng-star-inserted" id="div-gpt-ad-1666697140406-0" hidden="" style="transform: scale(1); width: auto; height: auto;"></div>
                              <!---->
                           </div>
                           <!----><!----><!---->
                        </div>
                     </div>
                     <div class="chip-sort-row desktop-only">
                        <div class="chip-list">
                           <mat-chip-list aria-label="Selected search filters" class="mat-chip-list" id="mat-chip-list-1" tabindex="-1" aria-disabled="false" aria-invalid="false" aria-multiselectable="false" aria-orientation="horizontal">
                              <div class="mat-chip-list-wrapper">
                                 <!---->
                              </div>
                           </mat-chip-list>
                           <!---->
                        </div>
                        <fe-dropdown class="sort-dropdown">
                           <mat-form-field appearance="outline" color="accent" class="mat-mdc-form-field ng-tns-c186-5 mat-mdc-form-field-type-mat-select mat-mdc-form-field-has-icon-prefix mat-form-field-appearance-outline mat-accent ng-untouched ng-pristine ng-valid ng-star-inserted">
                              <!---->
                              <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c186-5 mdc-text-field--outlined">
                                 <!---->
                                 <div class="mat-mdc-form-field-flex ng-tns-c186-5">
                                    <div matformfieldnotchedoutline="" class="mdc-notched-outline ng-tns-c186-5 mdc-notched-outline--upgraded ng-star-inserted mdc-notched-outline--notched">
                                       <div class="mdc-notched-outline__leading"></div>
                                       <div class="mdc-notched-outline__notch" style="width: 0px;">
                                          <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c186-5 ng-star-inserted mdc-floating-label--float-above" id="mat-mdc-form-field-label-6" for="mat-select-2" aria-owns="mat-select-2" style="transform: var(
                                             --mat-mdc-form-field-label-transform,
                                             translateY(-50%) translateX(-16px
                                             );">
                                             <mat-label class="subtitle-2 text-color-black ng-tns-c186-5"></mat-label>
                                             <!---->
                                          </label>
                                          <!----><!----><!---->
                                       </div>
                                       <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                    <!---->
                                    <div class="mat-mdc-form-field-icon-prefix ng-tns-c186-5 ng-star-inserted">
                                       <fa-icon matprefix="" class="ng-fa-icon icon-prefix ng-tns-c186-5 ng-star-inserted">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down-arrow-up" class="svg-inline--fa fa-arrow-down-arrow-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M150.6 470.6l96-96c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 370.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V370.7L54.6 329.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l96 96c12.5 12.5 32.8 12.5 45.3 0zm352-333.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L352 141.3V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.3l41.4 41.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3z"></path>
                                          </svg>
                                       </fa-icon>
                                       <!---->
                                    </div>
                                    <!----><!---->
                                    <div class="mat-mdc-form-field-infix ng-tns-c186-5" onclick="openmodal('sirala2')">
                                       <!---->
                                       <mat-select role="combobox" aria-autocomplete="none" aria-haspopup="listbox" class="mat-mdc-select ng-tns-c190-6 ng-tns-c186-5 ng-untouched ng-pristine ng-valid ng-star-inserted" aria-labelledby="mat-mdc-form-field-label-6 mat-select-value-3" id="mat-select-2" tabindex="0" aria-expanded="false" aria-required="false" aria-disabled="false" aria-invalid="false">
                                          <div cdk-overlay-origin="" class="mat-mdc-select-trigger ng-tns-c190-6">
                                             <div class="mat-mdc-select-value ng-tns-c190-6" id="mat-select-value-3">
                                                <!---->
                                                <span class="mat-mdc-select-value-text ng-tns-c190-6 ng-star-inserted">
                                                   <span class="mat-mdc-select-min-line ng-tns-c190-6 ng-star-inserted">Önerilenler</span><!----><!---->
                                                </span>
                                                <!---->
                                             </div>
                                             <div class="mat-mdc-select-arrow-wrapper ng-tns-c190-6">
                                                <div class="mat-mdc-select-arrow ng-tns-c190-6">
                                                   <svg viewBox="0 0 24 24" width="24px" height="24px" focusable="false" class="ng-tns-c190-6">
                                                      <path d="M7 10l5 5 5-5z" class="ng-tns-c190-6"></path>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                          <!---->
                                       </mat-select>
                                    </div>
                                    <!----><!---->
                                 </div>
                                 <!---->
                              </div>
                              <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c186-5">
                                 <!---->
                                 <div class="mat-mdc-form-field-hint-wrapper ng-tns-c186-5 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                    <!---->
                                    <div class="mat-mdc-form-field-hint-spacer ng-tns-c186-5"></div>
                                 </div>
                                 <!---->
                              </div>
                           </mat-form-field>
                        </fe-dropdown>
                     </div>
                     <div class="legal-row desktop-only">
                        <sm-legal-description _nghost-nyw-c394="">
                           <!---->
                        </sm-legal-description>
                     </div>
                     <!---->
                     <div class="mdc-layout-grid__inner product-cards list ng-star-inserted" id="product-details">
                        <?php
                            $sql = "SELECT * FROM urunler WHERE urun_kategori_id = '$id'";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();
                            $urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($urunler as $urun) {?>
                                <sm-list-page-item fegtm="" class="mdc-layout-grid__cell--span-2-desktop mdc-layout-grid__cell--span-4-tablet mdc-layout-grid__cell--span-2-phone ng-star-inserted">
                                <mat-card class="mat-mdc-card mdc-card">
                                    <fa-icon id="fav-add-button-21000039182643" class="ng-fa-icon favourite favourite--empty ng-star-inserted">
                                        <svg role="img" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="heart" class="svg-inline--fa fa-heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L255.1 96zM255.1 141.3L221.4 106.6C196.1 81.31 160 69.77 124.7 75.66C71.21 84.58 31.1 130.9 31.1 185.1V190.9C31.1 223.6 45.55 254.7 69.42 277L250.1 445.7C251.7 447.2 253.8 448 255.1 448C258.2 448 260.3 447.2 261.9 445.7L442.6 277C466.4 254.7 480 223.6 480 190.9V185.1C480 130.9 440.8 84.58 387.3 75.66C351.1 69.77 315.9 81.31 290.6 106.6L255.1 141.3z"></path>
                                        </svg>
                                    </fa-icon>
                                    <?php 
                                    if($urun['urun_indirim'] != 0){?>
                                    
                                    <div id="discount-badge" class="discount-badge ng-star-inserted">
                                        <div><span id="discount-badge--percent" class="discount-badge--percent">%</span><span id="discount-badge--unit" class="discount-badge--unit"><?=$urun['urun_indirim']?></span></div>
                                        <div id="discount-badge--label" class="discount-badge--label">İNDİRİM</div>
                                    </div>
                                    <?php } ?>
                                    <!----><!----><!----><!---->
                                    <div>
                                        <fe-product-image id="product-image" class="image" _nghost-nyw-c159="">
                                            <a _ngcontent-nyw-c159="" id="product-image-link" href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>">
                                            <img _ngcontent-nyw-c159="" felazyload="" alt="/urun/<?=$urun['urun_adi']?>" src="<?=$urun['urun_resim']?>" class="ng-star-inserted"><!----><!----><!---->
                                            </a>
                                        </fe-product-image>
                                        <a id="product-name" class="mat-caption text-color-black product-name" ngx-ql="" href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>"> <?=$urun['urun_adi']?> </a>
                                    </div>
                                    <div class="bottom-row">
                                        <fe-crm-discount-badge _nghost-nyw-c293="">
                                            <!---->
                                        </fe-crm-discount-badge>
                                        <?php 
                                    if($urun['urun_indirim'] != 0){?>
                                        <fe-product-price id="price" class="price" _nghost-nyw-c271="">
                                            <div _ngcontent-nyw-c271="" class="promotion-wrapper">
                                            <div _ngcontent-nyw-c271="" id="price-old" class="price-old ng-star-inserted"><span _ngcontent-nyw-c271="" id="old-amount" class="amount"><?=$urun['urun_fiyat']?> <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                            <!---->
                                            <div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-nyw-c271="" id="new-amount" class="amount"> 
                                            <?php
                                             $orijinal_fiyat = $urun['urun_fiyat'];
                                             $indirim_orani = $urun['urun_indirim'];
                                             $indirimli_fiyat = $orijinal_fiyat - ($orijinal_fiyat * ($indirim_orani / 100));
                                             echo $indirimli_fiyat;
                                            ?>    
                                             <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                            </div>
                                            <!---->
                                        </fe-product-price>
                                     <?php }else{?>
                                 <fe-product-price id="price" class="price" _nghost-nyw-c271="">
                                    <div _ngcontent-nyw-c271="">
                                       <!---->
                                       <div _ngcontent-nyw-c271="" id="price-new" class="price-new subtitle-1 price-new-only"><span _ngcontent-nyw-c271="" id="new-amount" class="amount"> <?=$urun['urun_fiyat']?> <span _ngcontent-nyw-c271="" class="currency">TL</span></span></div>
                                    </div>
                                    <!---->
                                 </fe-product-price>
                                      <?php }?>  
                                        <!---->
                                        <sm-product-actions id="actions" class="actions" _nghost-nyw-c292="">
                                            <!---->
                                            <fa-icon _ngcontent-nyw-c292="" class="ng-fa-icon add-to-cart-button ng-star-inserted" id="product-actions-add-to-cart-button--xiaomi-redmi-buds-3-bluetooth-kulaklik-beyaz-p-255e133">
                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                            </svg>
                                            </fa-icon>
                                            <!----><!---->
                                        </sm-product-actions>
                                    </div>
                                </mat-card>
                                <!----><!---->
                                </sm-list-page-item>
                            <?php }?>

                        
                     </div>
                     <!----><!---->
                     <div class="free-banner-wrapper mobile-only ng-star-inserted">
                        <div fedeferload="" id="div-gpt-ad-1664180136950-0" style="transform: scale(1); height: auto; width: auto;"></div>
                     </div>
                     <!---->
                  </div>
               </div>
               <sm-popup-banner>
                  <!---->
               </sm-popup-banner>
            </div>
            <!---->
         </sm-list>
         <!---->
      </article>
   </sm-product>
   <!---->
</main>
<div class="cdk-overlay-container elektronik hidden" id="filtre">
   <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
   <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
      <div id="cdk-overlay-3" class="cdk-overlay-pane mobile-modal modal-content-no-padding" style="max-width: 80vw; position: static;">
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
         <mat-dialog-container tabindex="-1" class="mat-mdc-dialog-container mdc-dialog cdk-dialog-container mdc-dialog--open" id="mat-mdc-dialog-2" role="dialog" aria-modal="true" aria-labelledby="mat-mdc-dialog-title-2">
            <div class="mdc-dialog__container">
               <div class="mat-mdc-dialog-surface mdc-dialog__surface">
                  <sm-mobile-filter-modal class="ng-star-inserted flatqq" id="filter">
                     <div matdialogtitle="" class="mat-mdc-dialog-title mdc-dialog__title" id="mat-mdc-dialog-title-2">
                        <!---->
                        <fe-icon-button mat-dialog-close="" class="float-right z-index" _nghost-xhn-c243="" type="button" onclick="closemodal()">
                           <button _ngcontent-xhn-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-xhn-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <h3 class="text-align-center header">Filtrele</h3>
                     </div>
                     <div matdialogcontent="" class="mat-mdc-dialog-content mdc-dialog__content content">
                        <mat-selection-list role="listbox" class="mat-selection-list mat-list-base ng-star-inserted" aria-multiselectable="false" aria-disabled="false" tabindex="0">
                           <mat-list-option onclick="openmodals('1')" role="option" class="mat-list-item mat-list-option mat-focus-indicator subtitle-1 group-option mat-list-item-with-avatar mat-accent ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <!---->
                                 <div class="mat-list-text">
                                    <div mat-line="" class="mat-line"> Kategoriler <span class="mat-caption-normal text-color-orange"></span></div>
                                 </div>
                                 <fa-icon mat-list-icon="" class="ng-fa-icon mat-list-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </div>
                           </mat-list-option>
                           <mat-list-option onclick="openmodals('2')" role="option" class="mat-list-item mat-list-option mat-focus-indicator subtitle-1 group-option mat-list-item-with-avatar mat-accent ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <!---->
                                 <div class="mat-list-text">
                                    <div mat-line="" class="mat-line"> İndirimler <span class="mat-caption-normal text-color-orange"></span></div>
                                 </div>
                                 <fa-icon mat-list-icon="" class="ng-fa-icon mat-list-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </div>
                           </mat-list-option>
                           <mat-list-option onclick="openmodals('3')" role="option" class="mat-list-item mat-list-option mat-focus-indicator subtitle-1 group-option mat-list-item-with-avatar mat-accent ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <!---->
                                 <div class="mat-list-text">
                                    <div mat-line="" class="mat-line"> Markalar <span class="mat-caption-normal text-color-orange"></span></div>
                                 </div>
                                 <fa-icon mat-list-icon="" class="ng-fa-icon mat-list-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                       <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </div>
                           </mat-list-option>
                           <!---->
                        </mat-selection-list>
                     </div>
                     <div class="actions">
                        <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                        <div class="button-container">
                           <!----><button mat-flat-button="" color="primary" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Ürünleri Görüntüle (298) </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                        </div>
                     </div>
                  </sm-mobile-filter-modal>
                  <sm-mobile-filter-modal class="ng-star-inserted flatqq hidden " id="filter1">
                     <div matdialogtitle="" class="mat-mdc-dialog-title mdc-dialog__title" id="mat-mdc-dialog-title-1">
                        <fe-icon-button class="back-button z-index ng-star-inserted" _nghost-ecm-c243="" onclick="backmodals()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <!---->
                        <fe-icon-button mat-dialog-close="" class="float-right z-index" _nghost-ecm-c243="" type="button" onclick="closemodal()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <h3 class="text-align-center header" style="display: block !important; ">Kategoriler</h3>
                     </div>
                     <div matdialogcontent="" class="mat-mdc-dialog-content mdc-dialog__content content">
                        <mat-selection-list role="listbox" color="primary" class="mat-selection-list mat-list-base ng-star-inserted" aria-multiselectable="true" aria-disabled="false" tabindex="0">
                        <?php 
                                
                                foreach ($kategoriler as $kategori) {
                                    $alt_kategoriler = explode(',', $kategori['altkategoriler']);
                                    foreach ($alt_kategoriler as $alt_kategori) {
                                        $alt_kategori = trim($alt_kategori); 
                                        ?>
                           <mat-list-option role="option" id="<?=$alt_kategori?>" class="mat-list-item mat-list-option mat-focus-indicator mat-body-2 info-option mat-primary ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <mat-pseudo-checkbox class="mat-pseudo-checkbox ng-star-inserted"></mat-pseudo-checkbox>
                                 <!---->
                                 <div class="mat-list-text"> <?=$alt_kategori?> <span class="text-color-grey"></span></div>
                              </div>
                           </mat-list-option>
                           <?php }}?>
                        </mat-selection-list>
                        <!----><!---->
                     </div>
                     <div class="actions">
                        <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                        <div class="button-container">
                           <button mat-flat-button="" color="accent" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base ng-star-inserted" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Filtreyi Temizle </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><!----><button mat-flat-button="" color="primary" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Ürünleri Görüntüle (200) </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                        </div>
                     </div>
                  </sm-mobile-filter-modal>
                  <sm-mobile-filter-modal class="ng-star-inserted flatqq hidden" id="filter2">
                     <div matdialogtitle="" class="mat-mdc-dialog-title mdc-dialog__title" id="mat-mdc-dialog-title-1">
                        <fe-icon-button class="back-button z-index ng-star-inserted" _nghost-ecm-c243="" onclick="backmodals()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <!---->
                        <fe-icon-button mat-dialog-close="" class="float-right z-index" _nghost-ecm-c243="" type="button" onclick="closemodal()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <h3 class="text-align-center header" style="display: block !important; ">İndirimler</h3>
                     </div>
                     <div matdialogcontent="" class="mat-mdc-dialog-content mdc-dialog__content content">
                        <mat-selection-list role="listbox" color="primary" class="mat-selection-list mat-list-base ng-star-inserted" aria-multiselectable="true" aria-disabled="false" tabindex="0">
                           <mat-list-option role="option" class="mat-list-item mat-list-option mat-focus-indicator mat-body-2 info-option mat-primary ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <mat-pseudo-checkbox class="mat-pseudo-checkbox ng-star-inserted"></mat-pseudo-checkbox>
                                 <!---->
                                 <div class="mat-list-text"> Money İndirimli Market Ürünleri <span class="text-color-grey"></span></div>
                              </div>
                           </mat-list-option>
                           <!---->
                        </mat-selection-list>
                        <!----><!---->
                     </div>
                     <div class="actions">
                        <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                        <div class="button-container">
                           <button mat-flat-button="" color="accent" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base ng-star-inserted" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Filtreyi Temizle </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><!----><button mat-flat-button="" color="primary" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Ürünleri Görüntüle (200) </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                        </div>
                     </div>
                  </sm-mobile-filter-modal>
                  <sm-mobile-filter-modal class="ng-star-inserted flatqq hidden" id="filter3">
                     <div matdialogtitle="" class="mat-mdc-dialog-title mdc-dialog__title" id="mat-mdc-dialog-title-1">
                        <fe-icon-button class="back-button z-index ng-star-inserted" _nghost-ecm-c243="" onclick="backmodals()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M447.1 256c0 13.25-10.76 24.01-24.01 24.01H83.9l132.7 126.6c9.625 9.156 9.969 24.41 .8125 33.94c-9.156 9.594-24.34 9.938-33.94 .8125l-176-168C2.695 268.9 .0078 262.6 .0078 256S2.695 243.2 7.445 238.6l176-168C193 61.51 208.2 61.85 217.4 71.45c9.156 9.5 8.812 24.75-.8125 33.94l-132.7 126.6h340.1C437.2 232 447.1 242.8 447.1 256z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <!---->
                        <fe-icon-button mat-dialog-close="" class="float-right z-index" _nghost-ecm-c243="" type="button" onclick="closemodal()">
                           <button _ngcontent-ecm-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-ecm-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <h3 class="text-align-center header" style="display: block !important; ">Markalar</h3>
                     </div>
                     <div matdialogcontent="" class="mat-mdc-dialog-content mdc-dialog__content content">
                        <mat-selection-list role="listbox" color="primary" class="mat-selection-list mat-list-base ng-star-inserted" aria-multiselectable="true" aria-disabled="false" tabindex="0">
                        <?php 
                                                
                                                foreach ($kategoriler as $kategori) {
                                                      $alt_kategoriler = explode(',', $kategori['markalar']);
                                                      foreach ($alt_kategoriler as $alt_kategori) {
                                                         $alt_kategori = trim($alt_kategori); 
                                                         ?>   
                        <mat-list-option role="option" id="<?=$alt_kategori?>" class="mat-list-item mat-list-option mat-focus-indicator mat-body-2 info-option mat-primary ng-star-inserted" aria-selected="false" aria-disabled="false" tabindex="-1">
                              <div class="mat-list-item-content mat-list-item-content-reverse">
                                 <div mat-ripple="" class="mat-ripple mat-list-item-ripple"></div>
                                 <mat-pseudo-checkbox class="mat-pseudo-checkbox ng-star-inserted"></mat-pseudo-checkbox>
                                 <!---->
                                 <div class="mat-list-text"> <?=$alt_kategori?> <span class="text-color-grey"></span></div>
                              </div>
                           </mat-list-option>
                           <?php }}?>
                           <!---->
                        </mat-selection-list>
                        <!----><!---->
                     </div>
                     <div class="actions">
                        <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                        <div class="button-container">
                           <button mat-flat-button="" color="accent" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-accent mat-mdc-button-base ng-star-inserted" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Filtreyi Temizle </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button><!----><button mat-flat-button="" color="primary" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base" disabled="true"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Ürünleri Görüntüle (200) </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button>
                        </div>
                     </div>
                  </sm-mobile-filter-modal>
               </div>
            </div>
         </mat-dialog-container>
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
      </div>
   </div>
</div>
<div class="cdk-overlay-container elektronik hidden" id="sirala">
   <div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing"></div>
   <div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;">
      <div id="cdk-overlay-2" class="cdk-overlay-pane mobile-modal modal-content-no-padding" style="max-width: 80vw; position: static;">
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
         <mat-dialog-container tabindex="-1" class="mat-mdc-dialog-container mdc-dialog cdk-dialog-container mdc-dialog--open" id="mat-mdc-dialog-1" role="dialog" aria-modal="true" aria-labelledby="mat-mdc-dialog-title-1">
            <div class="mdc-dialog__container">
               <div class="mat-mdc-dialog-surface mdc-dialog__surface">
                  <sm-mobile-sort-modal class="ng-star-inserted">
                     <div matdialogtitle="" class="mat-mdc-dialog-title mdc-dialog__title" id="mat-mdc-dialog-title-1">
                        <fe-icon-button mat-dialog-close="" class="float-right" _nghost-toa-c243="" type="button" onclick="closemodal()">
                           <button _ngcontent-toa-c243="" mat-icon-button="" color="accent" class="mdc-icon-button mat-mdc-icon-button mat-accent mat-mdc-button-base">
                              <span class="mat-mdc-button-persistent-ripple mdc-icon-button__ripple"></span>
                              <fa-icon _ngcontent-toa-c243="" class="ng-fa-icon button-icon">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" class="svg-inline--fa fa-xmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"></path>
                                 </svg>
                              </fa-icon>
                              <span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span>
                           </button>
                        </fe-icon-button>
                        <h3 class="text-align-center">Sırala</h3>
                     </div>
                     <div matdialogcontent="" class="mat-mdc-dialog-content mdc-dialog__content content">
                        <mat-radio-group role="radiogroup" color="primary" class="mat-mdc-radio-group">
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary mat-mdc-radio-checked ng-star-inserted" id="mat-radio-10">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-10-input" name="mat-radio-group-8" value="1" tabindex="0">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-10-input">
                                    Önerilenler <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-11">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-11-input" name="mat-radio-group-8" value="2" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-11-input">
                                    Çok Satanlar <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-12">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-12-input" name="mat-radio-group-8" value="3" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-12-input">
                                    Satın Aldıklarıma Göre <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-13">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-13-input" name="mat-radio-group-8" value="4" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-13-input">
                                    İndirim Yüzdesine Göre <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-14">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-14-input" name="mat-radio-group-8" value="5" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-14-input">
                                    Önce En Düşük Fiyat <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-15">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-15-input" name="mat-radio-group-8" value="6" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-15-input">
                                    Önce En Yüksek Fiyat <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <mat-radio-button class="mat-mdc-radio-button mat-body-2 radio-group mat-primary ng-star-inserted" id="mat-radio-16">
                              <div class="mdc-form-field">
                                 <div class="mdc-radio">
                                    <div class="mat-mdc-radio-touch-target"></div>
                                    <input type="radio" class="mdc-radio__native-control" id="mat-radio-16-input" name="mat-radio-group-8" value="7" tabindex="-1">
                                    <div class="mdc-radio__background">
                                       <div class="mdc-radio__outer-circle"></div>
                                       <div class="mdc-radio__inner-circle"></div>
                                    </div>
                                    <div mat-ripple="" class="mat-ripple mat-radio-ripple mat-mdc-focus-indicator">
                                       <div class="mat-ripple-element mat-radio-persistent-ripple"></div>
                                    </div>
                                 </div>
                                 <label for="mat-radio-16-input">
                                    İndirim Miktarına Göre <!---->
                                 </label>
                              </div>
                           </mat-radio-button>
                           <!---->
                        </mat-radio-group>
                     </div>
                     <div class="actions">
                        <mat-divider role="separator" class="mat-divider mat-divider-horizontal" aria-orientation="horizontal"></mat-divider>
                        <div class="button-container"><button mat-flat-button="" onclick="silra()" color="primary" class="button mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label">Sırala</span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple"></span><span class="mat-mdc-button-touch-target"></span></button></div>
                     </div>
                  </sm-mobile-sort-modal>
                  <!---->
               </div>
            </div>
         </mat-dialog-container>
         <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
      </div>
   </div>
</div>
<div class="cdk-overlay-container elektronik hidden" id="sirala2">
   <div class="cdk-overlay-backdrop cdk-overlay-transparent-backdrop cdk-overlay-backdrop-showing"></div>
   <div class="cdk-overlay-connected-position-bounding-box" dir="ltr" style="top: 0px; left: 0px; height: 100%; width: 100%;">
      <div id="cdk-overlay-2" class="cdk-overlay-pane dialog-shadow" style="width: 223.984px; top: 296.387px; left: 766.973px;">
         <div role="listbox" tabindex="-1" class="ng-trigger ng-trigger-transformPanel ng-tns-c190-2 mat-mdc-select-panel mdc-menu-surface mdc-menu-surface--open mat-accent ng-star-inserted dropdown-panel non-scrollable" id="mat-select-0-panel" aria-multiselectable="false" aria-labelledby="mat-mdc-form-field-label-0">
            <!---->
            <div class="ng-tns-c190-2">
               <!---->
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted mdc-list-item--selected mat-mdc-option-active" id="mat-option-1" tabindex="1" aria-disabled="false" aria-selected="true">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     Önerilenler <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-2" tabindex="2" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     Çok Satanlar <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-3" tabindex="3" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     Satın Aldıklarıma Göre <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-4" tabindex="4" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     İndirim Yüzdesine Göre <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-5" tabindex="5" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     Önce En Düşük Fiyat <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-6" tabindex="6" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     Önce En Yüksek Fiyat <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <mat-option role="option" class="mat-mdc-option mat-mdc-focus-indicator mdc-list-item mat-body-2 ng-star-inserted" id="mat-option-7" tabindex="7" aria-disabled="false">
                  <!---->
                  <span class="mdc-list-item__primary-text">
                     İndirim Miktarına Göre <!---->
                  </span>
                  <!---->
                  <div mat-ripple="" class="mat-ripple mat-mdc-option-ripple"></div>
               </mat-option>
               <!---->
            </div>
         </div>
      </div>
   </div>
</div>

<script>
      $(document).ready(function () {
    $('input[type=radio]').change(function () {
        var selectedValue = $(this).val();
        $.ajax({
            url: 'product_filter.php',
            type: 'POST',
            data: { option: selectedValue, id: <?=$id?> },
            success: function (response) {
                console.log('Success:', response);
                $('#product-details').html(response);
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                alert('Bir hata oluştu. Lütfen tekrar deneyin.');
            }
        });
    });
});
    $(document).ready(function () {
    $('mat-option[role=option]').click(function () {
        var selectedValue = $(this).val();
        $.ajax({
            url: 'product_filter.php',
            type: 'POST',
            data: { option: selectedValue, id: <?=$id?> },
            success: function (response) {
                console.log('Success:', response);
                $('#product-details').html(response);
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                alert('Bir hata oluştu. Lütfen tekrar deneyin.');
            }
        });
    });
});
function silra(){
   $('#spinner').toggleClass('hidden');
       closemodal();
}
</script>