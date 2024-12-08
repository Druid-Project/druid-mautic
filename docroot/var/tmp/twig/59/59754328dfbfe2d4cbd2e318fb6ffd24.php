<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/css/app/less/variables.less */
class __TwigTemplate_79ab19c5b7315f731c67fe99026d1b29 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "/////////////////////////////////////////////////////////////////////////
//== Bootstrap variable
//
//## import bootstrap variable.
@import \"../../libraries/bootstrap/bootstrap-mautic-custom-variables\";
@import \"components/brand\";
@import \"mixins\";

//== Logo
//
//## common logo color
@mautic-logo-figure-width:                  32px;
@mautic-logo-figure-circle-fill:            @mautic-primary;
@mautic-logo-figure-m-fill:                 @brand-warning;
@mautic-logo-text-width:                    98px;
@mautic-logo-text-fill:                     @mautic-primary;

// Brand Colors
@mautic-primary:\t\t\t\t\t\t\t#4e5e9e;
@mautic-secondary:\t\t\t\t\t\t\t#fdb933;
@mautic-tertiary:\t\t\t\t\t\t\t#35b5b9;

@alert-mautic-bg:             @brand-primary;
@alert-mautic-text:           #fff;
@alert-mautic-border:         rgba(0,0,0,0.03);

//== Header layout
//
//## common main header variable.
@header-bg:                                 var(--background);
@header-height:                             48px;
@header-zindex:                             @zindex-navbar + 5; // 1005


//== Sidebar layout
//
//## common main sidebar variable.
@sidebar-zindex:                           (@header-zindex - 20 + 5);  // 990
//** left sidebar option
@sidebar-left-bg:                           darken(#27303a, 5%);
@sidebar-left-header-bg:                    @mautic-primary;
@sidebar-left-width:                        230px;
@sidebar-left-collapse-width:               60px;
@sidebar-left-dark:\t\t\t\t\t\t\tdarken(@sidebar-left-bg, 8%);

//** right sidebar option - coming soon
@sidebar-right-bg:                          @sidebar-left-bg;
@sidebar-right-header-bg:                   lighten(@sidebar-right-bg, 3%);
@sidebar-right-width:                       230px;



//== Content layout
//
//## common main content variable.
@content-zindex:                            (@header-zindex - 10 + 5);  // 1000
@content-bg:                                #f8f8f8;


//== Footer layout
//
//## common footer variable.
@footer-height:                             46px;
@footer-bg:                                 transparent;
@footer-zindex:                             @content-zindex;  // 1000


@brand-facebook:        #3b5998;
@brand-twitter:         #55acee;
@brand-google:          #dd4b39;

// Themes
/// Light theme
:root,
:root[theme=\"light\"] {
    /// Background
    --background: #ffffff;
    --background-hover: #f1f1f1;
    --background-active: #8d8d8d80;
    --background-selected: #8d8d8d33;
    --background-selected-hover: #8d8d8d52;
    --background-inverse: #393939;
    --background-inverse-hover: #4c4c4c;
    --background-brand: var(--primary-60);

    /// Layer
    --layer-01: #f4f4f4;
    --layer-02: #ffffff;
    --layer-hover-01: #e8e8e8;
    --layer-hover-02: #e8e8e8;
    --layer-active-01: #c6c6c6;
    --layer-active-02: #c6c6c6;
    --layer-selected-01: #e0e0e0;
    --layer-selected-02: #e0e0e0;
    --layer-selected-hover-01: #cacaca;
    --layer-selected-hover-02: #cacaca;
    --layer-selected-inverse: #161616;
    --layer-selected-disabled: #8d8d8d;
    --layer-translucent: hsla(0, 0%, 100%, 0.7);
    --layer-translucent-inverse: rgba(0, 0, 0, 0.8);

    /// Layer accent
    --layer-accent-01: #e0e0e0;
    --layer-accent-hover-01: #d1d1d1;
    --layer-accent-active-01: #a8a8a8;
    --layer-accent-02: #e0e0e0;
    --layer-accent-hover-02: #d1d1d1;
    --layer-accent-active-02: #a8a8a8;

    /// Field
    --field-01: #f4f4f4;
    --field-02: #fff;
    --field-hover-01: #e8e8e8;
    --field-hover-02: #e8e8e8;

    /// Border
    --border-interactive: var(--primary-60);
    --border-subtle-01: #e0e0e0;
    --border-subtle-02: #c6c6c6;
    --border-subtle-selected-01: #c6c6c6;
    --border-subtle-selected-02: #c6c6c6;
    --border-strong-01: #8d8d8d;
    --border-strong-02: #8d8d8d;
    --border-tile-01: #c6c6c6;
    --border-tile-02: #a8a8a8;
    --border-inverse: #161616;
    --border-disabled: #c6c6c6;
    --border-transparent: transparent;

    /// Text
    --text-primary: #161616;
    --text-secondary: #525252;
    --text-placeholder: #a8a8a8;
    --text-on-color: contrast(@primary-color);
    --text-on-color-disabled: contrast(@primary-color, #16161640, #8d8d8d);
    --text-helper: #6f6f6f;
    --text-error: #da1e28;
    --text-inverse: #ffffff;
    --text-disabled: #16161640;

    /// Links
    --link-primary: var(--primary-60);
    --link-primary-hover: var(--primary-70);
    --link-secondary: var(--primary-70);
    --link-inverse: var(--primary-40);
    --link-visited: #8a3ffc;

    /// Icons
    --icon-primary: #161616;
    --icon-secondary: #525252;
    --icon-on-color: contrast(@primary-color);
    --icon-on-color-disabled: contrast(@primary-color, #16161640, #8d8d8d);
    --icon-interactive: var(--primary-60);
    --icon-inverse: #ffffff;
    --icon-disabled: #16161640;

    /// Buttons
    --button-primary: var(--primary-60);
    --button-primary-hover: var(--primary-70);
    --button-primary-active: var(--primary-80);
    --button-secondary: #393939;
    --button-secondary-hover: #4c4c4c;
    --button-secondary-active: #6f6f6f;
    --button-secondary-text: #ffffff; // Workaround for Freire and Solarized Dark themes
    --button-tertiary: var(--primary-60);
    --button-tertiary-hover: var(--primary-70);
    --button-tertiary-active: var(--primary-80);
    --button-danger-primary: #da1e28;
    --button-danger-secondary: #da1e28;
    --button-danger-hover: #ba1b23;
    --button-danger-active: #750e13;
    --button-separator: #e0e0e0;
    --button-disabled: #c6c6c6;

    /// Notifications
    --notification-background-error: #fff1f1;
    --notification-background-success: #defbe6;
    --notification-background-info: #edf5ff;
    --notification-background-warning: #fcf4d6;
    --notification-action-hover: #ffffff;
    --notification-action-tertiary-inverse: #ffffff;
    --notification-action-tertiary-inverse-active: #ffffff;
    --notification-action-tertiary-inverse-hover: #c6c6c6;
    --notification-action-tertiary-inverse-text: #161616;
    --notification-action-tertiary-inverse-text-on-color-disabled: #ffffff;

    /// Support
    --support-error: #da1e28;
    --support-success: #24a148;
    --support-warning: #f1c21b;
    --support-info: #0043ce;
    --support-error-inverse: #ff787f;
    --support-success-inverse: #42be65;
    --support-warning-inverse: #f1c21b;
    --support-info-inverse: #6da2ff;

    /// Focus
    --focus: var(--primary-60);
    --focus-inset: #ffffff;
    --focus-inverse: #ffffff;

    /// Miscellaneous
    --interactive: var(--primary-60);
    --highlight: var(--primary-20);
    --toggle-off: #8d8d8d;
    --overlay: #16161680;
    --skeleton-element: #c6c6c6;
    --skeleton-background: #e5e5e5;

    /// Tag
    --label-background-gray: #e0e0e0;
    --label-color-gray: #161616;
    --label-background-hover-gray: #d1d1d1;
    --label-border-gray: #a8a8a8;
    --label-background-cool-gray: #dde1e6;
    --label-color-cool-gray: #121619;
    --label-background-hover-cool-gray: #cdd3da;
    --label-border-cool-gray: #a2a9b0;
    --label-background-warm-gray: #e5e0df;
    --label-color-warm-gray: #171414;
    --label-background-hover-warm-gray: #d8d0cf;
    --label-border-warm-gray: #ada8a8;
    --label-background-red: #ffd7d9;
    --label-color-red: #a2191f;
    --label-background-hover-red: #ffc2c5;
    --label-border-red: #ff8389;
    --label-background-magenta: #ffd6e8;
    --label-color-magenta: #9f1853;
    --label-background-hover-magenta: #ffbdda;
    --label-border-magenta: #ff7eb6;
    --label-background-purple: #e8daff;
    --label-color-purple: #6929c4;
    --label-background-hover-purple: #dcc7ff;
    --label-border-purple: #be95ff;
    --label-background-blue: #d0e2ff;
    --label-color-blue: #0043ce;
    --label-background-hover-blue: #b8d3ff;
    --label-border-blue: #78a9ff;
    --label-background-cyan: #bae6ff;
    --label-color-cyan: #00539a;
    --label-background-hover-cyan: #99daff;
    --label-border-cyan: #33b1ff;
    --label-background-teal: #9EF0E5;
    --label-color-teal: #005C59;
    --label-background-hover-teal: #57E6D3;
    --label-border-teal: #08BDA5;
    --label-background-green: #a7f0ba;
    --label-color-green: #0e6027;
    --label-background-hover-green: #74e792;
    --label-border-green: #42be65;
    --label-background-brand: var(--primary-60);
    --label-color-brand: var(--text-on-color);
    --label-background-hover-brand: var(--primary-70);
    --label-border-brand: var(--primary-80);
}

/// Solarized Light theme
:root[theme=\"solarized-light\"] {
    /// Background
    --background: #fdf6e3;
    --background-hover: #eee8d533;
    --background-active: #eee8d580;
    --background-selected: #eee8d566;
    --background-selected-hover: #eee8d599;
    --background-inverse: #002b36;
    --background-inverse-hover: #073642;
    --background-brand: #268bd2;

    /// Layer
    --layer-01: #eee8d5;
    --layer-02: #fdf6e3;
    --layer-hover-01: #e4decd;
    --layer-hover-02: #f5efd5;
    --layer-active-01: #d1c9b5;
    --layer-active-02: #e6dcc5;
    --layer-selected-01: #dcd4c0;
    --layer-selected-02: #e9e0cc;
    --layer-selected-hover-01: #d3cbb7;
    --layer-selected-hover-02: #e0d7c3;
    --layer-selected-inverse: #073642;
    --layer-selected-disabled: #93a1a1;
    --layer-translucent: hsla(44, 87%, 94%, 0.7);
    --layer-translucent-inverse: #002d38cc;

    /// Layer accent
    --layer-accent-01: #dcd4c0;
    --layer-accent-hover-01: #d3cbb7;
    --layer-accent-active-01: #bfb7a3;
    --layer-accent-02: #e9e0cc;
    --layer-accent-hover-02: #e0d7c3;
    --layer-accent-active-02: #ccc3af;

    /// Field
    --field-01: #eee8d5;
    --field-02: #fdf6e3;
    --field-hover-01: #e4decd;
    --field-hover-02: #f5efd5;

    /// Border
    --border-interactive: #268bd2;
    --border-subtle-01: #dcd4c0;
    --border-subtle-02: #bfb7a3;
    --border-subtle-selected-01: #bfb7a3;
    --border-subtle-selected-02: #bfb7a3;
    --border-strong-01: #93a1a1;
    --border-strong-02: #93a1a1;
    --border-tile-01: #bfb7a3;
    --border-tile-02: #a6a190;
    --border-inverse: #073642;
    --border-disabled: #bfb7a3;

    /// Text
    --text-primary: #002b36;
    --text-secondary: #586e75;
    --text-placeholder: #93a1a1;
    --text-on-color: #fdf6e3;
    --text-on-color-disabled: #eee8d580;
    --text-helper: #839496;
    --text-error: #dc322f;
    --text-inverse: #fdf6e3;
    --text-disabled: #002b3680;

    /// Links
    --link-primary: #268bd2;
    --link-primary-hover: #1e6ea7;
    --link-secondary: #2aa198;
    --link-inverse: #6c71c4;
    --link-visited: #d33682;

    /// Icons
    --icon-primary: #002b36;
    --icon-secondary: #586e75;
    --icon-on-color: #fdf6e3;
    --icon-on-color-disabled: #eee8d580;
    --icon-interactive: #268bd2;
    --icon-inverse: #fdf6e3;
    --icon-disabled: #002b3680;

    /// Buttons
    --button-primary: #268bd2;
    --button-primary-hover: #1e6ea7;
    --button-primary-active: #15516d;
    --button-secondary: #586e75;
    --button-secondary-hover: #465c62;
    --button-secondary-active: #344a4f;
    --button-secondary-text: #fdf6e3; // Workaround for Freire and Solarized Dark themes
    --button-tertiary: #268bd2;
    --button-tertiary-hover: #1e6ea7;
    --button-tertiary-active: #15516d;
    --button-danger-primary: #dc322f;
    --button-danger-secondary: #dc322f;
    --button-danger-hover: #b12825;
    --button-danger-active: #861e1b;
    --button-separator: #dcd4c0;
    --button-disabled: #bfb7a3;

    /// Notifications
    --notification-background-error: #ffe6e6;
    --notification-background-success: #e6ffe6;
    --notification-background-info: #e6e6ff;
    --notification-background-warning: #fffbe6;
    --notification-action-hover: #fdf6e3;
    --notification-action-tertiary-inverse: #268bd2;
    --notification-action-tertiary-inverse-active: #161616;
    --notification-action-tertiary-inverse-hover: #2aa198;
    --notification-action-tertiary-inverse-text: #002b36;
    --notification-action-tertiary-inverse-text-on-color-disabled: #859900;

    /// Focus
    --focus: #268bd2;
    --focus-inset: #fdf6e3;
    --focus-inverse: #fdf6e3;

    /// Miscellaneous
    --interactive: #268bd2;
    --highlight: #eee8d5;
    --toggle-off: #93a1a1;
    --overlay: #bfb79bcc;
    --skeleton-element: #bfb7a3;
    --skeleton-background: #dcd4c0;

    /// Support
    --support-error: #dc322f;
    --support-success: #859900;
    --support-warning: #b58900;
    --support-info: #268bd2;
    --support-error-inverse: #ffa59a;
    --support-success-inverse: #c6e787;
    --support-warning-inverse: #ffd484;
    --support-info-inverse: #a3c9ff;

    /// Tag
    --label-background-gray: #dcd4c0;
    --label-color-gray: #657b83;
    --label-background-hover-gray: #d3cbb7;
    --label-border-gray: #a6a190;
    --label-background-cool-gray: #e4decd;
    --label-color-cool-gray: #586e75;
    --label-background-hover-cool-gray: #dbd5c4;
    --label-border-cool-gray: #b3ad9d;
    --label-background-warm-gray: #e6dcc5;
    --label-color-warm-gray: #657b83;
    --label-background-hover-warm-gray: #ddd3bc;
    --label-border-warm-gray: #b5ac96;
    --label-background-red: #ffd7d9;
    --label-color-red: #dc322f;
    --label-background-hover-red: #ffc2c5;
    --label-border-red: #ff8389;
    --label-background-magenta: #ffd6e8;
    --label-color-magenta: #d33682;
    --label-background-hover-magenta: #ffbdda;
    --label-border-magenta: #ff7eb6;
    --label-background-purple: #e8daff;
    --label-color-purple: #6c71c4;
    --label-background-hover-purple: #dcc7ff;
    --label-border-purple: #be95ff;
    --label-background-blue: #d0e2ff;
    --label-color-blue: #268bd2;
    --label-background-hover-blue: #b8d3ff;
    --label-border-blue: #78a9ff;
    --label-background-cyan: #bae6ff;
    --label-color-cyan: #2aa198;
    --label-background-hover-cyan: #99daff;
    --label-border-cyan: #33b1ff;
    --label-background-green: #d4e8b0;
    --label-color-green: #5a6800;
    --label-background-hover-green: #c6e787;
    --label-border-green: #859900;
    --label-background-brand: #268bd2;
    --label-color-brand: #fdf6e3;
    --label-background-hover-brand: #1e6ea7;
    --label-border-brand: #15516d;
}

/// Dark theme
:root[theme=\"dark\"] {
    /// Background
    --background: #161616;
    --background-hover: #292929;
    --background-active: #8d8d8d66;
    --background-selected: #8d8d8d3d;
    --background-selected-hover: #8d8d8d52;
    --background-inverse: #f4f4f4;
    --background-inverse-hover: #e5e5e5;
    --background-brand: var(--primary-80);

    /// Layer
    --layer-01: #262626;
    --layer-02: #393939;
    --layer-hover-01: #333333;
    --layer-hover-02: #474747;
    --layer-active-01: #525252;
    --layer-active-02: #6f6f6f;
    --layer-selected-01: #393939;
    --layer-selected-02: #525252;
    --layer-selected-hover-01: #4c4c4c;
    --layer-selected-hover-02: #656565;
    --layer-selected-inverse: #f4f4f4;
    --layer-selected-disabled: #6f6f6f;
    --layer-translucent: hsla(0, 0%, 0%, 0.7);
    --layer-translucent-inverse: hsla(0, 0%, 100%, 0.8);

    /// Layer accent
    --layer-accent-01: #393939;
    --layer-accent-02: #525252;
    --layer-accent-hover-01: #4c4c4c;
    --layer-accent-hover-02: #656565;
    --layer-accent-active-01: #525252;
    --layer-accent-active-02: #8d8d8d;

    /// Field
    --field-01: #262626;
    --field-02: #393939;
    --field-hover-01: #333333;
    --field-hover-02: #474747;

    /// Border
    --border-interactive: var(--primary-50);
    --border-subtle-01: #393939;
    --border-subtle-02: #525252;
    --border-subtle-selected-01: #525252;
    --border-subtle-selected-02: #6f6f6f;
    --border-strong-01: #6f6f6f;
    --border-strong-02: #8d8d8d;
    --border-tile-01: #525252;
    --border-tile-02: #6f6f6f;
    --border-inverse: #f4f4f4;
    --border-disabled: #8d8d8d80;

    /// Text
    --text-primary: #f4f4f4;
    --text-secondary: #c6c6c6;
    --text-placeholder: #6f6f6f;
    --text-on-color: contrast(darken(@primary-color, 20%));
    --text-on-color-disabled: contrast(darken(@primary-color, 20%), #16161640, #8d8d8d);
    --text-helper: #8d8d8d;
    --text-error: #ff8389;
    --text-inverse: #161616;
    --text-disabled: #f4f4f440;

    /// Links
    --link-primary: var(--primary-30);
    --link-primary-hover: var(--primary-20);
    --link-secondary: var(--primary-30);
    --link-inverse: var(--primary-60);
    --link-visited: #be95ff;

    /// Icons
    --icon-primary: #f4f4f4;
    --icon-secondary: #c6c6c6;
    --icon-on-color: contrast(darken(@primary-color, 20%)); // @primary-80
    --icon-on-color-disabled: contrast(darken(@primary-color, 20%), #16161640, #8d8d8d); // @primary-80
    --icon-interactive: #ffffff;
    --icon-inverse: #161616;
    --icon-disabled: #f4f4f4;

    /// Buttons
    --button-primary: var(--primary-60);
    --button-primary-hover: var(--primary-70);
    --button-primary-active: var(--primary-80);
    --button-secondary: #6f6f6f;
    --button-secondary-hover: #606060;
    --button-secondary-active: #393939;
    --button-secondary-text: #ffffff; // Workaround for Freire and Solarized Dark themes
    --button-tertiary: #ffffff;
    --button-tertiary-hover: #f4f4f4;
    --button-tertiary-active: #c6c6c6;
    --button-danger-primary: #da1e28;
    --button-danger-secondary: #fa4d56;
    --button-danger-hover: #ba1b23;
    --button-danger-active: #750e13;
    --button-separator: #161616;
    --button-disabled: #525252;

    /// Notifications
    --notification-background-error: #262626;
    --notification-background-success: #262626;
    --notification-background-info: #262626;
    --notification-background-warning: #262626;
    --notification-action-hover: #333333;
    --notification-action-tertiary-inverse: var(--primary-60);
    --notification-action-tertiary-inverse-active: #161616;
    --notification-action-tertiary-inverse-hover: var(--primary-80);
    --notification-action-tertiary-inverse-text: #ffffff;
    --notification-action-tertiary-inverse-text-on-color-disabled: #ffffff;

    /// Support
    --support-error: #ff787f;
    --support-success: #42be65;
    --support-warning: #f1c21b;
    --support-info: #6da2ff;
    --support-error-inverse: #da1e28;
    --support-success-inverse: #24a148;
    --support-warning-inverse: #f1c21b;
    --support-info-inverse: #0043ce;

    /// Focus
    --focus: #ffffff;
    --focus-inset: #161616;
    --focus-inverse: var(--primary-60);

    /// Miscellaneous
    --interactive: var(--primary-50);
    --highlight: var(--primary-90);
    --toggle-off: #6f6f6f;
    --overlay: #171717cc;
    --skeleton-element: #525252;
    --skeleton-background: #353535;

    /// Tag
    --label-background-gray: #525252;
    --label-color-gray: #e0e0e0;
    --label-background-hover-gray: #636363;
    --label-border-gray: #8d8d8d;
    --label-background-cool-gray: #4d5358;
    --label-color-cool-gray: #dde1e6;
    --label-background-hover-cool-gray: #5d646a;
    --label-border-cool-gray: #878d96;
    --label-background-warm-gray: #565151;
    --label-color-warm-gray: #e5e0df;
    --label-background-hover-warm-gray: #696363;
    --label-border-warm-gray: #8f8b8b;
    --label-background-red: #a2191f;
    --label-color-red: #ffd7d9;
    --label-background-hover-red: #c21e25;
    --label-border-red: #fa4d56;
    --label-background-magenta: #9f1853;
    --label-color-magenta: #ffd6e8;
    --label-background-hover-magenta: #bf1d63;
    --label-border-magenta: #ee5396;
    --label-background-purple: #6929c4;
    --label-color-purple: #e8daff;
    --label-background-hover-purple: #7c3dd6;
    --label-border-purple: #a56eff;
    --label-background-blue: #0043ce;
    --label-color-blue: #d0e2ff;
    --label-background-hover-blue: #0053ff;
    --label-border-blue: #4589ff;
    --label-background-cyan: #00539a;
    --label-color-cyan: #bae6ff;
    --label-background-hover-cyan: #bae6ff;
    --label-border-cyan: #1192e8;
    --label-background-teal: #005D5D;
    --label-color-teal: #9ef0f0;
    --label-background-hover-teal: #007070;
    --label-border-teal: #009d9a;
    --label-background-green: #0e6027;
    --label-color-green: #a7f0ba;
    --label-background-hover-green: #11742f;
    --label-border-green: #24a148;
}

/// Solarized Dark theme
:root[theme=\"solarized-dark\"] {
    /// Background
    --background: #002b36;
    --background-hover: #073642;
    --background-active: #586e75;
    --background-selected: #073642;
    --background-selected-hover: #586e75;
    --background-inverse: #fdf6e3;
    --background-inverse-hover: #eee8d5;
    --background-brand: #268bd2;

    /// Layer
    --layer-01: #073642;
    --layer-02: #094352;
    --layer-hover-01: #094352;
    --layer-hover-02: #0b4b5d;
    --layer-active-01: #0b4b5d;
    --layer-active-02: #0c5468;
    --layer-selected-01: #094352;
    --layer-selected-02: #0b4b5d;
    --layer-selected-hover-01: #0b4b5d;
    --layer-selected-hover-02: #0c5468;
    --layer-selected-inverse: #fdf6e3;
    --layer-selected-disabled: #586e75;
    --layer-translucent: hsla(192, 100%, 9%, 0.7);
    --layer-translucent-inverse: hsla(44, 87%, 94%, 0.8);

    /// Layer accent
    --layer-accent-01: #094352;
    --layer-accent-02: #0b4b5d;
    --layer-accent-hover-01: #0b4b5d;
    --layer-accent-hover-02: #0c5468;
    --layer-accent-active-01: #0c5468;
    --layer-accent-active-02: #0d5d73;

    /// Field
    --field-01: #073642;
    --field-02: #094352;
    --field-hover-01: #094352;
    --field-hover-02: #0b4b5d;

    /// Border
    --border-interactive: #268bd2;
    --border-subtle-01: #094352;
    --border-subtle-02: #0b4b5d;
    --border-subtle-selected-01: #0b4b5d;
    --border-subtle-selected-02: #0c5468;
    --border-strong-01: #586e75;
    --border-strong-02: #657b83;
    --border-tile-01: #0b4b5d;
    --border-tile-02: #0c5468;
    --border-inverse: #fdf6e3;
    --border-disabled: #586e7580;

    /// Text
    --text-primary: #fdf6e3;
    --text-secondary: #93a1a1;
    --text-placeholder: #657b83;
    --text-on-color: #002b36;
    --text-on-color-disabled: #586e75;
    --text-helper: #839496;
    --text-error: #dc322f;
    --text-inverse: #002b36;
    --text-disabled: #586e75;

    /// Links
    --link-primary: #268bd2;
    --link-primary-hover: #2aa198;
    --link-secondary: #2aa198;
    --link-inverse: #6c71c4;
    --link-visited: #d33682;

    /// Icons
    --icon-primary: #fdf6e3;
    --icon-secondary: #eee8d5;
    --icon-on-color: #002b36;
    --icon-on-color-disabled: #586e75;
    --icon-interactive: #268bd2;
    --icon-inverse: #002b36;
    --icon-disabled: #93a1a1;

    /// Buttons
    --button-primary: #268bd2;
    --button-primary-hover: #2aa198;
    --button-primary-active: #6c71c4;
    --button-secondary: #839496;
    --button-secondary-hover: #93a1a1;
    --button-secondary-active: #586e75;
    --button-secondary-text: #000000; // Workaround for Freire and Solarized Dark themes
    --button-tertiary: #268bd2;
    --button-tertiary-hover: #2aa198;
    --button-tertiary-active: #6c71c4;
    --button-danger-primary: #dc322f;
    --button-danger-secondary: #cb4b16;
    --button-danger-hover: #b58900;
    --button-danger-active: #d33682;
    --button-separator: #002b36;
    --button-disabled: #657b83;

    /// Notifications
    --notification-background-error: #5c2023;
    --notification-background-success: #3b5900;
    --notification-background-info: #1c4a7a;
    --notification-background-warning: #6b4c1b;
    --notification-action-hover: #073642;
    --notification-action-tertiary-inverse: #2aa198;
    --notification-action-tertiary-inverse-active: #839496;
    --notification-action-tertiary-inverse-hover: #859900;
    --notification-action-tertiary-inverse-text: #fdf6e3;
    --notification-action-tertiary-inverse-text-on-color-disabled: #93a1a1;

    /// Focus
    --focus: #fdf6e3;
    --focus-inset: #002b36;
    --focus-inverse: #268bd2;

    /// Miscellaneous
    --interactive: #268bd2;
    --highlight: #6c71c4;
    --toggle-off: #839496;
    --overlay: #000c0fcc;
    --skeleton-element: #657b83;
    --skeleton-background: #586e75;

    /// Support
    --support-error: #ffa59a;
    --support-warning: #ffd484;
    --support-info: #a3c9ff;
    --support-success: #c6e787;
    --support-error-inverse: #dc322f;
    --support-warning-inverse: #b58900;
    --support-info-inverse: #268bd2;
    --support-success-inverse: #859900;

    /// Tag
    --label-background-gray: #586e75;
    --label-color-gray: #fdf6e3;
    --label-background-hover-gray: #657b83;
    --label-border-gray: #839496;
    --label-background-cool-gray: #52676f;
    --label-color-cool-gray: #eee8d5;
    --label-background-hover-cool-gray: #5e747c;
    --label-border-cool-gray: #7b929e;
    --label-background-warm-gray: #5d5450;
    --label-color-warm-gray: #fdf6e3;
    --label-background-hover-warm-gray: #6a605c;
    --label-border-warm-gray: #8a7e79;
    --label-background-red: #dc322f;
    --label-color-red: #fdf6e3;
    --label-background-hover-red: #e23636;
    --label-border-red: #cb4b16;
    --label-background-magenta: #d33682;
    --label-color-magenta: #fdf6e3;
    --label-background-hover-magenta: #db3d8c;
    --label-border-magenta: #6c71c4;
    --label-background-purple: #6c71c4;
    --label-color-purple: #fdf6e3;
    --label-background-hover-purple: #7c81d0;
    --label-border-purple: #268bd2;
    --label-background-blue: #268bd2;
    --label-color-blue: #fdf6e3;
    --label-background-hover-blue: #2d9eeb;
    --label-border-blue: #2aa198;
    --label-background-cyan: #2aa198;
    --label-color-cyan: #fdf6e3;
    --label-background-hover-cyan: #30b6ac;
    --label-border-cyan: #859900;
    --label-background-teal: #2aa198;
    --label-color-teal: #fdf6e3;
    --label-background-hover-teal: #30b6ac;
    --label-border-teal: #859900;
    --label-background-green: #859900;
    --label-color-green: #fdf6e3;
    --label-background-hover-green: #96ac00;
    --label-border-green: #b58900;
}

:root[theme=\"freire\"] {
    /// Background
    --background: #1C1C2E;
    --background-hover: #232336;
    --background-active: #2A2A40;
    --background-selected: #2A2A40;
    --background-selected-hover: #323248;
    --background-inverse: #F7B84B;
    --background-inverse-hover: #F9C46A;
    --background-brand: #F7B84B;

    /// Layer
    --layer-01: #232336;
    --layer-02: #1C1C2E;
    --layer-hover-01: #2A2A40;
    --layer-hover-02: #232336;
    --layer-active-01: #323248;
    --layer-active-02: #2A2A40;
    --layer-selected-01: #323248;
    --layer-selected-02: #2A2A40;
    --layer-selected-hover-01: #3A3A52;
    --layer-selected-hover-02: #323248;
    --layer-selected-inverse: #F7B84B;
    --layer-selected-disabled: #3A3A52;
    --layer-translucent: hsla(240, 24%, 15%, 0.7);
    --layer-translucent-inverse: #F7B84BCC;

    /// Layer accent
    --layer-accent-01: #323248;
    --layer-accent-hover-01: #3A3A52;
    --layer-accent-active-01: #42425C;
    --layer-accent-02: #2A2A40;
    --layer-accent-hover-02: #323248;
    --layer-accent-active-02: #3A3A52;

    /// Field
    --field-01: #232336;
    --field-02: #1C1C2E;
    --field-hover-01: #2A2A40;
    --field-hover-02: #232336;

    /// Border
    --border-interactive: #F7B84B;
    --border-subtle-01: #323248;
    --border-subtle-02: #2A2A40;
    --border-subtle-selected-01: #3A3A52;
    --border-subtle-selected-02: #323248;
    --border-strong-01: #A0A0B0;
    --border-strong-02: #8E8EFF;
    --border-tile-01: #323248;
    --border-tile-02: #2A2A40;
    --border-inverse: #F7B84B;
    --border-disabled: #3A3A52;

    /// Text
    --text-primary: #FFFFFF;
    --text-secondary: #A0A0B0;
    --text-placeholder: #6E6E80;
    --text-on-color: #1C1C2E;
    --text-on-color-disabled: #A0A0B080;
    --text-helper: #8D93A6;
    --text-error: #FF6B6B;
    --text-inverse: #1C1C2E;
    --text-disabled: #A0A0B080;

    /// Links
    --link-primary: #F7B84B;
    --link-primary-hover: #F9C46A;
    --link-secondary: #8E8EFF;
    --link-inverse: #1C1C2E;
    --link-visited: #D183FF;

    /// Icons
    --icon-primary: #FFFFFF;
    --icon-secondary: #A0A0B0;
    --icon-on-color: #1C1C2E;
    --icon-on-color-disabled: #A0A0B080;
    --icon-interactive: #F7B84B;
    --icon-inverse: #1C1C2E;
    --icon-disabled: #A0A0B080;

    /// Buttons
    --button-primary: #F7B84B;
    --button-primary-hover: #F9C46A;
    --button-primary-active: #FBCF89;
    --button-secondary: #8c98c6;
    --button-secondary-hover: #aeb6d7;
    --button-secondary-active: #d0d5e8;
    --button-secondary-text: #000000; // Workaround for Freire and Solarized Dark themes
    --button-tertiary: #8E8EFF;
    --button-tertiary-hover: #A5A5FF;
    --button-tertiary-active: #BCBCFF;
    --button-danger-primary: #FF6B6B;
    --button-danger-secondary: #FF6B6B;
    --button-danger-hover: #FF8585;
    --button-danger-active: #FF9E9E;
    --button-separator: #323248;
    --button-disabled: #3A3A52;

    /// Notifications
    --notification-background-error: #5c2023;
    --notification-background-success: #005A3D;
    --notification-background-info: #1C4A7A;
    --notification-background-warning: #6b4c1b;
    --notification-action-hover: #232336;
    --notification-action-tertiary-inverse: #8E8EFF;
    --notification-action-tertiary-inverse-active: #A0A0B0;
    --notification-action-tertiary-inverse-hover: #A5A5FF;
    --notification-action-tertiary-inverse-text: #1C1C2E;
    --notification-action-tertiary-inverse-text-on-color-disabled: #A0A0B0;

    /// Focus
    --focus: #8E8EFF;
    --focus-inset: #1C1C2E;
    --focus-inverse: #FFFFFF;

    /// Miscellaneous
    --interactive: #F7B84B;
    --highlight: #8E8EFF;
    --toggle-off: #A0A0B0;
    --overlay: #171726cc;
    --skeleton-element: #323248;
    --skeleton-background: #2A2A40;

    /// Support
    --support-error: #B71C1C;
    --support-success: #00C853;
    --support-warning: #FFB300;
    --support-info: #0091EA;

    --support-error-inverse: #FF4D4D;
    --support-success-inverse: #00E676;
    --support-warning-inverse: #FFD740;
    --support-info-inverse: #40C4FF;

    /// Tag
    --label-background-gray: #323248;
    --label-color-gray: #FFFFFF;
    --label-background-hover-gray: #3A3A52;
    --label-border-gray: #42425C;
    --label-background-cool-gray: #2A2A40;
    --label-color-cool-gray: #A0A0B0;
    --label-background-hover-cool-gray: #323248;
    --label-border-cool-gray: #3A3A52;
    --label-background-warm-gray: #3A3A52;
    --label-color-warm-gray: #FFFFFF;
    --label-background-hover-warm-gray: #42425C;
    --label-border-warm-gray: #4A4A66;
    --label-background-red: #FF6B6B;
    --label-color-red: #1C1C2E;
    --label-background-hover-red: #FF8585;
    --label-border-red: #FF9E9E;
    --label-background-magenta: #D183FF;
    --label-color-magenta: #1C1C2E;
    --label-background-hover-magenta: #DB9DFF;
    --label-border-magenta: #E5B7FF;
    --label-background-purple: #8E8EFF;
    --label-color-purple: #1C1C2E;
    --label-background-hover-purple: #A5A5FF;
    --label-border-purple: #BCBCFF;
    --label-background-blue: #6B9EFF;
    --label-color-blue: #1C1C2E;
    --label-background-hover-blue: #85B1FF;
    --label-border-blue: #9EC4FF;
    --label-background-cyan: #4FD1C5;
    --label-color-cyan: #1C1C2E;
    --label-background-hover-cyan: #69DAD0;
    --label-border-cyan: #83E3DB;
    --label-background-teal: #4FD1C5;
    --label-color-teal: #1C1C2E;
    --label-background-hover-teal: #69DAD0;
    --label-border-teal: #83E3DB;
    --label-background-green: #4CAF50;
    --label-color-green: #1C1C2E;
    --label-background-hover-green: #66BB6A;
    --label-border-green: #80C783;
    --label-background-brand: #F7B84B;
    --label-color-brand: #1C1C2E;
    --label-background-hover-brand: #F9C46A;
    --label-border-brand: #FBCF89;
}

// General
//
// Brand palette //

/// CKEditor
:root,
:root[theme] {
    --ck-color-base-background: var(--background);
    --ck-color-text: var(--text-primary);
    --ck-color-base-border: var(--border-subtle);
    --ck-color-button-default-hover-background: var(--background-hover);
    --ck-color-focus-border: var(--focus);
    --ck-color-tooltip-background: var(--layer);
    --ck-color-tooltip-text: var(--text-secondary);
}

// Layering model
/// Default
:root,
.layer-one {
    --layer: var(--layer-01);
    --layer-active: var(--layer-active-01);
    --layer-hover: var(--layer-hover-01);
    --layer-selected: var(--layer-selected-01);
    --layer-selected-hover: var(--layer-selected-hover-01);
    --layer-accent: var(--layer-accent-01);
    --layer-accent-hover: var(--layer-accent-hover-01);
    --layer-accent-active: var(--layer-accent-active-01);
    --field: var(--field-01);
    --field-hover: var(--field-hover-01);
    --border-subtle: var(--border-subtle-01);
    --border-subtle-selected: var(--border-subtle-selected-01);
    --border-strong: var(--border-strong-01);
    --border-tile: var(--border-tile-01);
}

.layer-two {
    --layer: var(--layer-02);
    --layer-active: var(--layer-active-02);
    --layer-hover: var(--layer-hover-02);
    --layer-selected: var(--layer-selected-02);
    --layer-selected-hover: var(--layer-selected-hover-02);
    --layer-accent: var(--layer-accent-02);
    --layer-accent-hover: var(--layer-accent-hover-02);
    --layer-accent-active: var(--layer-accent-active-02);
    --field: var(--field-02);
    --field-hover: var(--field-hover-02);
    --border-subtle: var(--border-subtle-01);
    --border-subtle-selected: var(--border-subtle-selected-02);
    --border-strong: var(--border-strong-02);
    --border-tile: var(--border-tile-02);
}

:root {
// Motion //

/// Durations
--duration-productive: 150ms;
--duration-expressive: 300ms;

/// Easing
--easing-standard-productive: cubic-bezier(0.2, 0, 0.38, 0.9);
--easing-standard-expressive: cubic-bezier(0.4, 0.14, 0.3, 1);

/// Transition
--transition-all-productive: all var(--duration-productive) var(--easing-standard-productive);
--transition-all-expressive: all var(--duration-expressive) var(--easing-standard-expressive);


// Spacing //
--spacing-01: 2px;
--spacing-02: 4px;
--spacing-03: 8px;
--spacing-04: 12px;
--spacing-05: 16px;
--spacing-06: 24px;
--spacing-07: 32px;
--spacing-08: 40px;
--spacing-09: 48px;
--spacing-10: 64px;
--spacing-11: 80px;
--spacing-12: 96px;
--spacing-13: 160px;

// Typography //
/// Code, labels, helper text, legal etc
--typography-utility-productive: 12px;
--typography-utility-expressive: 14px;

/// Body
--typography-body-productive: 13px;
--typography-body-expressive: 15px;

// Miscellaneous //
--border-no-width: 1px solid var(--border-no-color);
--border-no-color: transparent;
--border-bottom: 0 0 clamp(0px, calc(1px - @border-radius), 1px) 0;
--border-radius-sm: min(max(@border-radius, 0px), 6px);
--border-radius-md: min(max(1.8 * @border-radius, 0px), 14px);
--border-radius-lg: min(max(2.6 * @border-radius, 0px), 21px);
--layer-hover-translucent: var(--layer-translucent);
--outline-style: solid;
}

//
// Accent colors
@accent02: #CE2F27;
@accent03: #FF9500;
@accent04: #FFCC00;
@accent05: #b51963;
@accent06: #0f62fe;
@accent07: #32642B;
@accent08: #5928ed;
@accent09: #00FFFF;
@accent10: #00b4c5;
@accent11: #0f5664;
@accent12: #123f20;
@accent13: #00bf7d;
@accent14: #26643b;
@accent15: #CCFF00;
@accent16: #c44601;
@accent17: #FF2E54;
@accent18: #ca3b88;
@accent19: #FF00FF;
@accent20: #9400D3;
@accent21: #26A2DD;
@accent22: #1c0d82;
@accent23: #ffae02;
@accent24: #f14231;
@accent25: #5c1c51;

// Making available out of the app accent color for preview in user settings
:root {
    --accent01: @primary-color;
    --accent02: @accent02;
    --accent03: @accent03;
    --accent04: @accent04;
    --accent05: @accent05;
    --accent06: @accent06;
    --accent07: @accent07;
    --accent08: @accent08;
    --accent09: @accent09;
    --accent10: @accent10;
    --accent11: @accent11;
    --accent12: @accent12;
    --accent13: @accent13;
    --accent14: @accent14;
    --accent15: @accent15;
    --accent16: @accent16;
    --accent17: @accent17;
    --accent18: @accent18;
    --accent19: @accent19;
    --accent20: @accent20;
    --accent21: @accent21;
    --accent22: @accent22;
    --accent23: @accent23;
    --accent24: @accent24;
    --accent25: @accent25;
}

// Workaround for all colors that look bad on top of white bg
:root[accent=\"03\"],
:root[accent=\"04\"],
:root[accent=\"07\"],
:root[accent=\"09\"],
:root[accent=\"10\"],
:root[accent=\"13\"],
:root[accent=\"15\"],
:root[accent=\"17\"],
:root[accent=\"19\"],
:root[accent=\"21\"],
:root[accent=\"23\"],
:root[accent=\"24\"] {
    &[theme=\"light\"] {
        --link-primary: var(--primary-80);
        --link-primary-hover: var(--primary-90);
        --link-secondary: var(--primary-90);
        --link-inverse: var(--primary-40);
        --icon-interactive: var(--primary-70);
        --button-tertiary: var(--primary-80);
        --interactive: var(--primary-70);
    }
}

:root[theme=\"light\"],
:root[theme=\"dark\"] {
    &:root[accent=\"02\"] {
        --primary-20: lighten(@accent02, 40%);
        --primary-30: lighten(@accent02, 30%);
        --primary-40: lighten(@accent02, 20%);
        --primary-50: lighten(@accent02, 10%);
        --primary-60: @accent02;
        --primary-70: darken(@accent02, 10%);
        --primary-80: darken(@accent02, 20%);
        --primary-90: darken(@accent02, 30%);
        --primary-100: darken(@accent02, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent02, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent02, #16161640, #8d8d8d);
    }

    &:root[accent=\"03\"] {
        --primary-20: lighten(@accent03, 40%);
        --primary-30: lighten(@accent03, 30%);
        --primary-40: lighten(@accent03, 20%);
        --primary-50: lighten(@accent03, 10%);
        --primary-60: @accent03;
        --primary-70: darken(@accent03, 10%);
        --primary-80: darken(@accent03, 20%);
        --primary-90: darken(@accent03, 30%);
        --primary-100: darken(@accent03, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent03, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent03, #16161640, #8d8d8d);
    }

    &:root[accent=\"04\"] {
        --primary-20: lighten(@accent04, 40%);
        --primary-30: lighten(@accent04, 30%);
        --primary-40: lighten(@accent04, 20%);
        --primary-50: lighten(@accent04, 10%);
        --primary-60: @accent04;
        --primary-70: darken(@accent04, 10%);
        --primary-80: darken(@accent04, 20%);
        --primary-90: darken(@accent04, 30%);
        --primary-100: darken(@accent04, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent04, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent04, #16161640, #8d8d8d);
    }


    &:root[accent=\"05\"] {
        --primary-20: lighten(@accent05, 40%);
        --primary-30: lighten(@accent05, 30%);
        --primary-40: lighten(@accent05, 20%);
        --primary-50: lighten(@accent05, 10%);
        --primary-60: @accent05;
        --primary-70: darken(@accent05, 10%);
        --primary-80: darken(@accent05, 20%);
        --primary-90: darken(@accent05, 30%);
        --primary-100: darken(@accent05, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent05, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent05, #16161640, #8d8d8d);
    }

    &:root[accent=\"06\"] {
        --primary-20: lighten(@accent06, 40%);
        --primary-30: lighten(@accent06, 30%);
        --primary-40: lighten(@accent06, 20%);
        --primary-50: lighten(@accent06, 10%);
        --primary-60: @accent06;
        --primary-70: darken(@accent06, 10%);
        --primary-80: darken(@accent06, 20%);
        --primary-90: darken(@accent06, 30%);
        --primary-100: darken(@accent06, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent06, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent06, #16161640, #8d8d8d);
    }

    &:root[accent=\"07\"] {
        --primary-20: lighten(@accent07, 40%);
        --primary-30: lighten(@accent07, 30%);
        --primary-40: lighten(@accent07, 20%);
        --primary-50: lighten(@accent07, 10%);
        --primary-60: @accent07;
        --primary-70: darken(@accent07, 10%);
        --primary-80: darken(@accent07, 20%);
        --primary-90: darken(@accent07, 30%);
        --primary-100: darken(@accent07, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent07, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent07, #16161640, #8d8d8d);
    }

    &:root[accent=\"08\"] {
        --primary-20: lighten(@accent08, 40%);
        --primary-30: lighten(@accent08, 30%);
        --primary-40: lighten(@accent08, 20%);
        --primary-50: lighten(@accent08, 10%);
        --primary-60: @accent08;
        --primary-70: darken(@accent08, 10%);
        --primary-80: darken(@accent08, 20%);
        --primary-90: darken(@accent08, 30%);
        --primary-100: darken(@accent08, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent08, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent08, #16161640, #8d8d8d);
    }

    &:root[accent=\"09\"] {
        --primary-20: lighten(@accent09, 40%);
        --primary-30: lighten(@accent09, 30%);
        --primary-40: lighten(@accent09, 20%);
        --primary-50: lighten(@accent09, 10%);
        --primary-60: @accent09;
        --primary-70: darken(@accent09, 10%);
        --primary-80: darken(@accent09, 20%);
        --primary-90: darken(@accent09, 30%);
        --primary-100: darken(@accent09, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent09, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent09, #16161640, #8d8d8d);
    }

    &:root[accent=\"10\"] {
        --primary-20: lighten(@accent10, 40%);
        --primary-30: lighten(@accent10, 30%);
        --primary-40: lighten(@accent10, 20%);
        --primary-50: lighten(@accent10, 10%);
        --primary-60: @accent10;
        --primary-70: darken(@accent10, 10%);
        --primary-80: darken(@accent10, 20%);
        --primary-90: darken(@accent10, 30%);
        --primary-100: darken(@accent10, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent10, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent10, #16161640, #8d8d8d);
    }

    &:root[accent=\"11\"] {
        --primary-20: lighten(@accent11, 40%);
        --primary-30: lighten(@accent11, 30%);
        --primary-40: lighten(@accent11, 20%);
        --primary-50: lighten(@accent11, 10%);
        --primary-60: @accent11;
        --primary-70: darken(@accent11, 10%);
        --primary-80: darken(@accent11, 20%);
        --primary-90: darken(@accent11, 30%);
        --primary-100: darken(@accent11, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent11, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent11, #16161640, #8d8d8d);
    }

    &:root[accent=\"12\"] {
        --primary-20: lighten(@accent12, 40%);
        --primary-30: lighten(@accent12, 30%);
        --primary-40: lighten(@accent12, 20%);
        --primary-50: lighten(@accent12, 10%);
        --primary-60: @accent12;
        --primary-70: darken(@accent12, 10%);
        --primary-80: darken(@accent12, 20%);
        --primary-90: darken(@accent12, 30%);
        --primary-100: darken(@accent12, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent12, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent12, #16161640, #8d8d8d);
    }

    &:root[accent=\"13\"] {
        --primary-20: lighten(@accent13, 40%);
        --primary-30: lighten(@accent13, 30%);
        --primary-40: lighten(@accent13, 20%);
        --primary-50: lighten(@accent13, 10%);
        --primary-60: @accent13;
        --primary-70: darken(@accent13, 10%);
        --primary-80: darken(@accent13, 20%);
        --primary-90: darken(@accent13, 30%);
        --primary-100: darken(@accent13, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent13, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent13, #16161640, #8d8d8d);
    }

    &:root[accent=\"14\"] {
        --primary-20: lighten(@accent14, 40%);
        --primary-30: lighten(@accent14, 30%);
        --primary-40: lighten(@accent14, 20%);
        --primary-50: lighten(@accent14, 10%);
        --primary-60: @accent14;
        --primary-70: darken(@accent14, 10%);
        --primary-80: darken(@accent14, 20%);
        --primary-90: darken(@accent14, 30%);
        --primary-100: darken(@accent14, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent14, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent14, #16161640, #8d8d8d);
    }

    &:root[accent=\"15\"] {
        --primary-20: lighten(@accent15, 40%);
        --primary-30: lighten(@accent15, 30%);
        --primary-40: lighten(@accent15, 20%);
        --primary-50: lighten(@accent15, 10%);
        --primary-60: @accent15;
        --primary-70: darken(@accent15, 10%);
        --primary-80: darken(@accent15, 20%);
        --primary-90: darken(@accent15, 30%);
        --primary-100: darken(@accent15, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent15, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent15, #16161640, #8d8d8d);
    }

    &:root[accent=\"16\"] {
        --primary-20: lighten(@accent16, 40%);
        --primary-30: lighten(@accent16, 30%);
        --primary-40: lighten(@accent16, 20%);
        --primary-50: lighten(@accent16, 10%);
        --primary-60: @accent16;
        --primary-70: darken(@accent16, 10%);
        --primary-80: darken(@accent16, 20%);
        --primary-90: darken(@accent16, 30%);
        --primary-100: darken(@accent16, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent16, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent16, #16161640, #8d8d8d);
    }

    &:root[accent=\"17\"] {
        --primary-20: lighten(@accent17, 40%);
        --primary-30: lighten(@accent17, 30%);
        --primary-40: lighten(@accent17, 20%);
        --primary-50: lighten(@accent17, 10%);
        --primary-60: @accent17;
        --primary-70: darken(@accent17, 10%);
        --primary-80: darken(@accent17, 20%);
        --primary-90: darken(@accent17, 30%);
        --primary-100: darken(@accent17, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent17, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent17, #16161640, #8d8d8d);
    }

    &:root[accent=\"18\"] {
        --primary-20: lighten(@accent18, 40%);
        --primary-30: lighten(@accent18, 30%);
        --primary-40: lighten(@accent18, 20%);
        --primary-50: lighten(@accent18, 10%);
        --primary-60: @accent18;
        --primary-70: darken(@accent18, 10%);
        --primary-80: darken(@accent18, 20%);
        --primary-90: darken(@accent18, 30%);
        --primary-100: darken(@accent18, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent18, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent18, #16161640, #8d8d8d);
    }

    &:root[accent=\"19\"] {
        --primary-20: lighten(@accent19, 40%);
        --primary-30: lighten(@accent19, 30%);
        --primary-40: lighten(@accent19, 20%);
        --primary-50: lighten(@accent19, 10%);
        --primary-60: @accent19;
        --primary-70: darken(@accent19, 10%);
        --primary-80: darken(@accent19, 20%);
        --primary-90: darken(@accent19, 30%);
        --primary-100: darken(@accent19, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent19, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent19, #16161640, #8d8d8d);
    }

    &:root[accent=\"20\"] {
        --primary-20: lighten(@accent20, 40%);
        --primary-30: lighten(@accent20, 30%);
        --primary-40: lighten(@accent20, 20%);
        --primary-50: lighten(@accent20, 10%);
        --primary-60: @accent20;
        --primary-70: darken(@accent20, 10%);
        --primary-80: darken(@accent20, 20%);
        --primary-90: darken(@accent20, 30%);
        --primary-100: darken(@accent20, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent20, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent20, #16161640, #8d8d8d);
    }

    &:root[accent=\"21\"] {
        --primary-20: lighten(@accent21, 40%);
        --primary-30: lighten(@accent21, 30%);
        --primary-40: lighten(@accent21, 20%);
        --primary-50: lighten(@accent21, 10%);
        --primary-60: @accent21;
        --primary-70: darken(@accent21, 10%);
        --primary-80: darken(@accent21, 20%);
        --primary-90: darken(@accent21, 30%);
        --primary-100: darken(@accent21, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent21, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent21, #16161640, #8d8d8d);
    }

    &:root[accent=\"22\"] {
        --primary-20: lighten(@accent22, 40%);
        --primary-30: lighten(@accent22, 30%);
        --primary-40: lighten(@accent22, 20%);
        --primary-50: lighten(@accent22, 10%);
        --primary-60: @accent22;
        --primary-70: darken(@accent22, 10%);
        --primary-80: darken(@accent22, 20%);
        --primary-90: darken(@accent22, 30%);
        --primary-100: darken(@accent22, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent22, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent22, #16161640, #8d8d8d);
    }

    &:root[accent=\"23\"] {
        --primary-20: lighten(@accent23, 40%);
        --primary-30: lighten(@accent23, 30%);
        --primary-40: lighten(@accent23, 20%);
        --primary-50: lighten(@accent23, 10%);
        --primary-60: @accent23;
        --primary-70: darken(@accent23, 10%);
        --primary-80: darken(@accent23, 20%);
        --primary-90: darken(@accent23, 30%);
        --primary-100: darken(@accent23, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent23, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent23, #16161640, #8d8d8d);
    }

    &:root[accent=\"24\"] {
        --primary-20: lighten(@accent24, 40%);
        --primary-30: lighten(@accent24, 30%);
        --primary-40: lighten(@accent24, 20%);
        --primary-50: lighten(@accent24, 10%);
        --primary-60: @accent24;
        --primary-70: darken(@accent24, 10%);
        --primary-80: darken(@accent24, 20%);
        --primary-90: darken(@accent24, 30%);
        --primary-100: darken(@accent24, 40%);
        --text-on-color: #000;
        --text-on-color-disabled: contrast(@accent24, #16161640, #8d8d8d);
        --icon-on-color: #000;
        --icon-on-color-disabled: contrast(@accent24, #16161640, #8d8d8d);
    }

    &:root[accent=\"25\"] {
        --primary-20: lighten(@accent25, 40%);
        --primary-30: lighten(@accent25, 30%);
        --primary-40: lighten(@accent25, 20%);
        --primary-50: lighten(@accent25, 10%);
        --primary-60: @accent25;
        --primary-70: darken(@accent25, 10%);
        --primary-80: darken(@accent25, 20%);
        --primary-90: darken(@accent25, 30%);
        --primary-100: darken(@accent25, 40%);
        --text-on-color: #fff;
        --text-on-color-disabled: contrast(@accent25, #16161640, #8d8d8d);
        --icon-on-color: #fff;
        --icon-on-color-disabled: contrast(@accent25, #16161640, #8d8d8d);
    }
}

:root,
:root[accent=\"01\"] {
    --primary-20: lighten(@primary-color, 40%);
    --primary-30: lighten(@primary-color, 30%);
    --primary-40: lighten(@primary-color, 20%);
    --primary-50: lighten(@primary-color, 10%);
    --primary-60: @primary-color;
    --primary-70: darken(@primary-color, 10%);
    --primary-80: darken(@primary-color, 20%);
    --primary-90: darken(@primary-color, 30%);
    --primary-100: darken(@primary-color, 40%);
}

//
// Accessibility features

/// No animations
:root[reduce-motion=\"true\"] {
--duration-productive: 0;
--duration-expressive: 0;
--easing-standard-productive: none;
--easing-standard-expressive: none;
}

/// High contrast
:root[contrast-borders=\"true\"] {
    a {.outline();}
    --outline-style: dashed;
    --border-no-color: var(--border-strong);
    --border-bottom: 1px;
}

/// No transparency and blur
:root[reduce-transparency=\"true\"] {
    --layer-translucent: var(--layer);
    --layer-hover-translucent: var(--layer-hover);
    --layer-translucent-inverse: var(--layer-selected-inverse);
}

/// Underlines
:root[enable-underlines=\"true\"] {
    p a,
    .alert a,
    .list-group-item-text,
    .accordion-title,
    td a:not(.label):not([class*=\"dropdown-\"]):not(.dropdown-menu a) {
        &,
        &:hover {text-decoration: underline;}
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/variables.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/variables.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/variables.less");
    }
}