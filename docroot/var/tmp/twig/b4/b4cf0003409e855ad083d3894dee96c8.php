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

/* @bundles/CoreBundle/Assets/css/app.css */
class __TwigTemplate_0db3da26945b5b328322eee14de3a00d extends Template
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
        yield "@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: normal;
  font-weight: 300;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-300.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: italic;
  font-weight: 300;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-300italic.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: normal;
  font-weight: 400;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-regular.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: italic;
  font-weight: 400;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-italic.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: normal;
  font-weight: 600;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-600.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: italic;
  font-weight: 600;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-600italic.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: normal;
  font-weight: 700;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-700.woff2') format('woff2');
}
@font-face {
  font-display: swap;
  font-family: 'Source Sans 3';
  font-style: italic;
  font-weight: 700;
  src: url('../../../../assets/fonts/source-sans-3-v15-cyrillic_cyrillic-ext_greek_greek-ext_latin_latin-ext_vietnamese-700italic.woff2') format('woff2');
}
:root,
:root[theme=\"light\"] {
  --background: #ffffff;
  --background-hover: #f1f1f1;
  --background-active: #8d8d8d80;
  --background-selected: #8d8d8d33;
  --background-selected-hover: #8d8d8d52;
  --background-inverse: #393939;
  --background-inverse-hover: #4c4c4c;
  --background-brand: var(--primary-60);
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
  --layer-accent-01: #e0e0e0;
  --layer-accent-hover-01: #d1d1d1;
  --layer-accent-active-01: #a8a8a8;
  --layer-accent-02: #e0e0e0;
  --layer-accent-hover-02: #d1d1d1;
  --layer-accent-active-02: #a8a8a8;
  --field-01: #f4f4f4;
  --field-02: #fff;
  --field-hover-01: #e8e8e8;
  --field-hover-02: #e8e8e8;
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
  --text-primary: #161616;
  --text-secondary: #525252;
  --text-placeholder: #a8a8a8;
  --text-on-color: #ffffff;
  --text-on-color-disabled: #8d8d8d;
  --text-helper: #6f6f6f;
  --text-error: #da1e28;
  --text-inverse: #ffffff;
  --text-disabled: #16161640;
  --link-primary: var(--primary-60);
  --link-primary-hover: var(--primary-70);
  --link-secondary: var(--primary-70);
  --link-inverse: var(--primary-40);
  --link-visited: #8a3ffc;
  --icon-primary: #161616;
  --icon-secondary: #525252;
  --icon-on-color: #ffffff;
  --icon-on-color-disabled: #8d8d8d;
  --icon-interactive: var(--primary-60);
  --icon-inverse: #ffffff;
  --icon-disabled: #16161640;
  --button-primary: var(--primary-60);
  --button-primary-hover: var(--primary-70);
  --button-primary-active: var(--primary-80);
  --button-secondary: #393939;
  --button-secondary-hover: #4c4c4c;
  --button-secondary-active: #6f6f6f;
  --button-secondary-text: #ffffff;
  --button-tertiary: var(--primary-60);
  --button-tertiary-hover: var(--primary-70);
  --button-tertiary-active: var(--primary-80);
  --button-danger-primary: #da1e28;
  --button-danger-secondary: #da1e28;
  --button-danger-hover: #ba1b23;
  --button-danger-active: #750e13;
  --button-separator: #e0e0e0;
  --button-disabled: #c6c6c6;
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
  --support-error: #da1e28;
  --support-success: #24a148;
  --support-warning: #f1c21b;
  --support-info: #0043ce;
  --support-error-inverse: #ff787f;
  --support-success-inverse: #42be65;
  --support-warning-inverse: #f1c21b;
  --support-info-inverse: #6da2ff;
  --focus: var(--primary-60);
  --focus-inset: #ffffff;
  --focus-inverse: #ffffff;
  --interactive: var(--primary-60);
  --highlight: var(--primary-20);
  --toggle-off: #8d8d8d;
  --overlay: #16161680;
  --skeleton-element: #c6c6c6;
  --skeleton-background: #e5e5e5;
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
:root[theme=\"solarized-light\"] {
  --background: #fdf6e3;
  --background-hover: #eee8d533;
  --background-active: #eee8d580;
  --background-selected: #eee8d566;
  --background-selected-hover: #eee8d599;
  --background-inverse: #002b36;
  --background-inverse-hover: #073642;
  --background-brand: #268bd2;
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
  --layer-accent-01: #dcd4c0;
  --layer-accent-hover-01: #d3cbb7;
  --layer-accent-active-01: #bfb7a3;
  --layer-accent-02: #e9e0cc;
  --layer-accent-hover-02: #e0d7c3;
  --layer-accent-active-02: #ccc3af;
  --field-01: #eee8d5;
  --field-02: #fdf6e3;
  --field-hover-01: #e4decd;
  --field-hover-02: #f5efd5;
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
  --text-primary: #002b36;
  --text-secondary: #586e75;
  --text-placeholder: #93a1a1;
  --text-on-color: #fdf6e3;
  --text-on-color-disabled: #eee8d580;
  --text-helper: #839496;
  --text-error: #dc322f;
  --text-inverse: #fdf6e3;
  --text-disabled: #002b3680;
  --link-primary: #268bd2;
  --link-primary-hover: #1e6ea7;
  --link-secondary: #2aa198;
  --link-inverse: #6c71c4;
  --link-visited: #d33682;
  --icon-primary: #002b36;
  --icon-secondary: #586e75;
  --icon-on-color: #fdf6e3;
  --icon-on-color-disabled: #eee8d580;
  --icon-interactive: #268bd2;
  --icon-inverse: #fdf6e3;
  --icon-disabled: #002b3680;
  --button-primary: #268bd2;
  --button-primary-hover: #1e6ea7;
  --button-primary-active: #15516d;
  --button-secondary: #586e75;
  --button-secondary-hover: #465c62;
  --button-secondary-active: #344a4f;
  --button-secondary-text: #fdf6e3;
  --button-tertiary: #268bd2;
  --button-tertiary-hover: #1e6ea7;
  --button-tertiary-active: #15516d;
  --button-danger-primary: #dc322f;
  --button-danger-secondary: #dc322f;
  --button-danger-hover: #b12825;
  --button-danger-active: #861e1b;
  --button-separator: #dcd4c0;
  --button-disabled: #bfb7a3;
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
  --focus: #268bd2;
  --focus-inset: #fdf6e3;
  --focus-inverse: #fdf6e3;
  --interactive: #268bd2;
  --highlight: #eee8d5;
  --toggle-off: #93a1a1;
  --overlay: #bfb79bcc;
  --skeleton-element: #bfb7a3;
  --skeleton-background: #dcd4c0;
  --support-error: #dc322f;
  --support-success: #859900;
  --support-warning: #b58900;
  --support-info: #268bd2;
  --support-error-inverse: #ffa59a;
  --support-success-inverse: #c6e787;
  --support-warning-inverse: #ffd484;
  --support-info-inverse: #a3c9ff;
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
:root[theme=\"dark\"] {
  --background: #161616;
  --background-hover: #292929;
  --background-active: #8d8d8d66;
  --background-selected: #8d8d8d3d;
  --background-selected-hover: #8d8d8d52;
  --background-inverse: #f4f4f4;
  --background-inverse-hover: #e5e5e5;
  --background-brand: var(--primary-80);
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
  --layer-accent-01: #393939;
  --layer-accent-02: #525252;
  --layer-accent-hover-01: #4c4c4c;
  --layer-accent-hover-02: #656565;
  --layer-accent-active-01: #525252;
  --layer-accent-active-02: #8d8d8d;
  --field-01: #262626;
  --field-02: #393939;
  --field-hover-01: #333333;
  --field-hover-02: #474747;
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
  --text-primary: #f4f4f4;
  --text-secondary: #c6c6c6;
  --text-placeholder: #6f6f6f;
  --text-on-color: #ffffff;
  --text-on-color-disabled: #8d8d8d;
  --text-helper: #8d8d8d;
  --text-error: #ff8389;
  --text-inverse: #161616;
  --text-disabled: #f4f4f440;
  --link-primary: var(--primary-30);
  --link-primary-hover: var(--primary-20);
  --link-secondary: var(--primary-30);
  --link-inverse: var(--primary-60);
  --link-visited: #be95ff;
  --icon-primary: #f4f4f4;
  --icon-secondary: #c6c6c6;
  --icon-on-color: #ffffff;
  --icon-on-color-disabled: #8d8d8d;
  --icon-interactive: #ffffff;
  --icon-inverse: #161616;
  --icon-disabled: #f4f4f4;
  --button-primary: var(--primary-60);
  --button-primary-hover: var(--primary-70);
  --button-primary-active: var(--primary-80);
  --button-secondary: #6f6f6f;
  --button-secondary-hover: #606060;
  --button-secondary-active: #393939;
  --button-secondary-text: #ffffff;
  --button-tertiary: #ffffff;
  --button-tertiary-hover: #f4f4f4;
  --button-tertiary-active: #c6c6c6;
  --button-danger-primary: #da1e28;
  --button-danger-secondary: #fa4d56;
  --button-danger-hover: #ba1b23;
  --button-danger-active: #750e13;
  --button-separator: #161616;
  --button-disabled: #525252;
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
  --support-error: #ff787f;
  --support-success: #42be65;
  --support-warning: #f1c21b;
  --support-info: #6da2ff;
  --support-error-inverse: #da1e28;
  --support-success-inverse: #24a148;
  --support-warning-inverse: #f1c21b;
  --support-info-inverse: #0043ce;
  --focus: #ffffff;
  --focus-inset: #161616;
  --focus-inverse: var(--primary-60);
  --interactive: var(--primary-50);
  --highlight: var(--primary-90);
  --toggle-off: #6f6f6f;
  --overlay: #171717cc;
  --skeleton-element: #525252;
  --skeleton-background: #353535;
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
:root[theme=\"solarized-dark\"] {
  --background: #002b36;
  --background-hover: #073642;
  --background-active: #586e75;
  --background-selected: #073642;
  --background-selected-hover: #586e75;
  --background-inverse: #fdf6e3;
  --background-inverse-hover: #eee8d5;
  --background-brand: #268bd2;
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
  --layer-accent-01: #094352;
  --layer-accent-02: #0b4b5d;
  --layer-accent-hover-01: #0b4b5d;
  --layer-accent-hover-02: #0c5468;
  --layer-accent-active-01: #0c5468;
  --layer-accent-active-02: #0d5d73;
  --field-01: #073642;
  --field-02: #094352;
  --field-hover-01: #094352;
  --field-hover-02: #0b4b5d;
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
  --text-primary: #fdf6e3;
  --text-secondary: #93a1a1;
  --text-placeholder: #657b83;
  --text-on-color: #002b36;
  --text-on-color-disabled: #586e75;
  --text-helper: #839496;
  --text-error: #dc322f;
  --text-inverse: #002b36;
  --text-disabled: #586e75;
  --link-primary: #268bd2;
  --link-primary-hover: #2aa198;
  --link-secondary: #2aa198;
  --link-inverse: #6c71c4;
  --link-visited: #d33682;
  --icon-primary: #fdf6e3;
  --icon-secondary: #eee8d5;
  --icon-on-color: #002b36;
  --icon-on-color-disabled: #586e75;
  --icon-interactive: #268bd2;
  --icon-inverse: #002b36;
  --icon-disabled: #93a1a1;
  --button-primary: #268bd2;
  --button-primary-hover: #2aa198;
  --button-primary-active: #6c71c4;
  --button-secondary: #839496;
  --button-secondary-hover: #93a1a1;
  --button-secondary-active: #586e75;
  --button-secondary-text: #000000;
  --button-tertiary: #268bd2;
  --button-tertiary-hover: #2aa198;
  --button-tertiary-active: #6c71c4;
  --button-danger-primary: #dc322f;
  --button-danger-secondary: #cb4b16;
  --button-danger-hover: #b58900;
  --button-danger-active: #d33682;
  --button-separator: #002b36;
  --button-disabled: #657b83;
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
  --focus: #fdf6e3;
  --focus-inset: #002b36;
  --focus-inverse: #268bd2;
  --interactive: #268bd2;
  --highlight: #6c71c4;
  --toggle-off: #839496;
  --overlay: #000c0fcc;
  --skeleton-element: #657b83;
  --skeleton-background: #586e75;
  --support-error: #ffa59a;
  --support-warning: #ffd484;
  --support-info: #a3c9ff;
  --support-success: #c6e787;
  --support-error-inverse: #dc322f;
  --support-warning-inverse: #b58900;
  --support-info-inverse: #268bd2;
  --support-success-inverse: #859900;
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
  --background: #1C1C2E;
  --background-hover: #232336;
  --background-active: #2A2A40;
  --background-selected: #2A2A40;
  --background-selected-hover: #323248;
  --background-inverse: #F7B84B;
  --background-inverse-hover: #F9C46A;
  --background-brand: #F7B84B;
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
  --layer-accent-01: #323248;
  --layer-accent-hover-01: #3A3A52;
  --layer-accent-active-01: #42425C;
  --layer-accent-02: #2A2A40;
  --layer-accent-hover-02: #323248;
  --layer-accent-active-02: #3A3A52;
  --field-01: #232336;
  --field-02: #1C1C2E;
  --field-hover-01: #2A2A40;
  --field-hover-02: #232336;
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
  --text-primary: #FFFFFF;
  --text-secondary: #A0A0B0;
  --text-placeholder: #6E6E80;
  --text-on-color: #1C1C2E;
  --text-on-color-disabled: #A0A0B080;
  --text-helper: #8D93A6;
  --text-error: #FF6B6B;
  --text-inverse: #1C1C2E;
  --text-disabled: #A0A0B080;
  --link-primary: #F7B84B;
  --link-primary-hover: #F9C46A;
  --link-secondary: #8E8EFF;
  --link-inverse: #1C1C2E;
  --link-visited: #D183FF;
  --icon-primary: #FFFFFF;
  --icon-secondary: #A0A0B0;
  --icon-on-color: #1C1C2E;
  --icon-on-color-disabled: #A0A0B080;
  --icon-interactive: #F7B84B;
  --icon-inverse: #1C1C2E;
  --icon-disabled: #A0A0B080;
  --button-primary: #F7B84B;
  --button-primary-hover: #F9C46A;
  --button-primary-active: #FBCF89;
  --button-secondary: #8c98c6;
  --button-secondary-hover: #aeb6d7;
  --button-secondary-active: #d0d5e8;
  --button-secondary-text: #000000;
  --button-tertiary: #8E8EFF;
  --button-tertiary-hover: #A5A5FF;
  --button-tertiary-active: #BCBCFF;
  --button-danger-primary: #FF6B6B;
  --button-danger-secondary: #FF6B6B;
  --button-danger-hover: #FF8585;
  --button-danger-active: #FF9E9E;
  --button-separator: #323248;
  --button-disabled: #3A3A52;
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
  --focus: #8E8EFF;
  --focus-inset: #1C1C2E;
  --focus-inverse: #FFFFFF;
  --interactive: #F7B84B;
  --highlight: #8E8EFF;
  --toggle-off: #A0A0B0;
  --overlay: #171726cc;
  --skeleton-element: #323248;
  --skeleton-background: #2A2A40;
  --support-error: #B71C1C;
  --support-success: #00C853;
  --support-warning: #FFB300;
  --support-info: #0091EA;
  --support-error-inverse: #FF4D4D;
  --support-success-inverse: #00E676;
  --support-warning-inverse: #FFD740;
  --support-info-inverse: #40C4FF;
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
  --duration-productive: 150ms;
  --duration-expressive: 300ms;
  --easing-standard-productive: cubic-bezier(0.2, 0, 0.38, 0.9);
  --easing-standard-expressive: cubic-bezier(0.4, 0.14, 0.3, 1);
  --transition-all-productive: all var(--duration-productive) var(--easing-standard-productive);
  --transition-all-expressive: all var(--duration-expressive) var(--easing-standard-expressive);
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
  --typography-utility-productive: 12px;
  --typography-utility-expressive: 14px;
  --typography-body-productive: 13px;
  --typography-body-expressive: 15px;
  --border-no-width: 1px solid var(--border-no-color);
  --border-no-color: transparent;
  --border-bottom: 0 0 clamp(0px, calc(1px - 6px), 1px) 0;
  --border-radius-sm: 6px;
  --border-radius-md: 10.8px;
  --border-radius-lg: 15.6px;
  --layer-hover-translucent: var(--layer-translucent);
  --outline-style: solid;
}
:root {
  --accent01: #4e5e9e;
  --accent02: #CE2F27;
  --accent03: #FF9500;
  --accent04: #FFCC00;
  --accent05: #b51963;
  --accent06: #0f62fe;
  --accent07: #32642B;
  --accent08: #5928ed;
  --accent09: #00FFFF;
  --accent10: #00b4c5;
  --accent11: #0f5664;
  --accent12: #123f20;
  --accent13: #00bf7d;
  --accent14: #26643b;
  --accent15: #CCFF00;
  --accent16: #c44601;
  --accent17: #FF2E54;
  --accent18: #ca3b88;
  --accent19: #FF00FF;
  --accent20: #9400D3;
  --accent21: #26A2DD;
  --accent22: #1c0d82;
  --accent23: #ffae02;
  --accent24: #f14231;
  --accent25: #5c1c51;
}
:root[accent=\"03\"][theme=\"light\"],
:root[accent=\"04\"][theme=\"light\"],
:root[accent=\"07\"][theme=\"light\"],
:root[accent=\"09\"][theme=\"light\"],
:root[accent=\"10\"][theme=\"light\"],
:root[accent=\"13\"][theme=\"light\"],
:root[accent=\"15\"][theme=\"light\"],
:root[accent=\"17\"][theme=\"light\"],
:root[accent=\"19\"][theme=\"light\"],
:root[accent=\"21\"][theme=\"light\"],
:root[accent=\"23\"][theme=\"light\"],
:root[accent=\"24\"][theme=\"light\"] {
  --link-primary: var(--primary-80);
  --link-primary-hover: var(--primary-90);
  --link-secondary: var(--primary-90);
  --link-inverse: var(--primary-40);
  --icon-interactive: var(--primary-70);
  --button-tertiary: var(--primary-80);
  --interactive: var(--primary-70);
}
:root[theme=\"light\"]:root[accent=\"02\"],
:root[theme=\"dark\"]:root[accent=\"02\"] {
  --primary-20: #f5cecc;
  --primary-30: #eda4a1;
  --primary-40: #e57b76;
  --primary-50: #dd524b;
  --primary-60: #CE2F27;
  --primary-70: #a3251f;
  --primary-80: #781b17;
  --primary-90: #4d120f;
  --primary-100: #220807;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"03\"],
:root[theme=\"dark\"]:root[accent=\"03\"] {
  --primary-20: #ffeacc;
  --primary-30: #ffd599;
  --primary-40: #ffbf66;
  --primary-50: #ffaa33;
  --primary-60: #FF9500;
  --primary-70: #cc7700;
  --primary-80: #995900;
  --primary-90: #663c00;
  --primary-100: #331e00;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"04\"],
:root[theme=\"dark\"]:root[accent=\"04\"] {
  --primary-20: #fff5cc;
  --primary-30: #ffeb99;
  --primary-40: #ffe066;
  --primary-50: #ffd633;
  --primary-60: #FFCC00;
  --primary-70: #cca300;
  --primary-80: #997a00;
  --primary-90: #665200;
  --primary-100: #332900;
  --text-on-color: #000;
  --text-on-color-disabled: #16161640;
  --icon-on-color: #000;
  --icon-on-color-disabled: #16161640;
}
:root[theme=\"light\"]:root[accent=\"05\"],
:root[theme=\"dark\"]:root[accent=\"05\"] {
  --primary-20: #f3a7cb;
  --primary-30: #ed7ab1;
  --primary-40: #e64e96;
  --primary-50: #e0217c;
  --primary-60: #b51963;
  --primary-70: #88134a;
  --primary-80: #5b0d32;
  --primary-90: #2f0619;
  --primary-100: #020001;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"06\"],
:root[theme=\"dark\"]:root[accent=\"06\"] {
  --primary-20: #dae7ff;
  --primary-30: #a7c6ff;
  --primary-40: #75a4fe;
  --primary-50: #4283fe;
  --primary-60: #0f62fe;
  --primary-70: #014cd9;
  --primary-80: #013aa6;
  --primary-90: #002874;
  --primary-100: #001741;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"07\"],
:root[theme=\"dark\"]:root[accent=\"07\"] {
  --primary-20: #95ce8d;
  --primary-30: #74bf69;
  --primary-40: #56ab4a;
  --primary-50: #44883a;
  --primary-60: #32642B;
  --primary-70: #20401c;
  --primary-80: #0e1d0c;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"08\"],
:root[theme=\"dark\"]:root[accent=\"08\"] {
  --primary-20: #eae4fd;
  --primary-30: #c6b5f9;
  --primary-40: #a286f5;
  --primary-50: #7d57f1;
  --primary-60: #5928ed;
  --primary-70: #4111d1;
  --primary-80: #320ea1;
  --primary-90: #240a72;
  --primary-100: #150643;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"09\"],
:root[theme=\"dark\"]:root[accent=\"09\"] {
  --primary-20: #ccffff;
  --primary-30: #99ffff;
  --primary-40: #66ffff;
  --primary-50: #33ffff;
  --primary-60: #00FFFF;
  --primary-70: #00cccc;
  --primary-80: #009999;
  --primary-90: #006666;
  --primary-100: #003333;
  --text-on-color: #000;
  --text-on-color-disabled: #16161640;
  --icon-on-color: #000;
  --icon-on-color-disabled: #16161640;
}
:root[theme=\"light\"]:root[accent=\"10\"],
:root[theme=\"dark\"]:root[accent=\"10\"] {
  --primary-20: #92f6ff;
  --primary-30: #5ff1ff;
  --primary-40: #2cedff;
  --primary-50: #00e3f8;
  --primary-60: #00b4c5;
  --primary-70: #008592;
  --primary-80: #00575f;
  --primary-90: #00282c;
  --primary-100: #000000;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"11\"],
:root[theme=\"dark\"]:root[accent=\"11\"] {
  --primary-20: #59cfe6;
  --primary-30: #2dc2df;
  --primary-40: #1ca2bd;
  --primary-50: #167c90;
  --primary-60: #0f5664;
  --primary-70: #083038;
  --primary-80: #020a0b;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"12\"],
:root[theme=\"dark\"]:root[accent=\"12\"] {
  --primary-20: #50cd77;
  --primary-30: #34b65c;
  --primary-40: #298e48;
  --primary-50: #1d6734;
  --primary-60: #123f20;
  --primary-70: #07170c;
  --primary-80: #000000;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"13\"],
:root[theme=\"dark\"]:root[accent=\"13\"] {
  --primary-20: #8cffd7;
  --primary-30: #59ffc6;
  --primary-40: #26ffb4;
  --primary-50: #00f29e;
  --primary-60: #00bf7d;
  --primary-70: #008c5c;
  --primary-80: #00593a;
  --primary-90: #002619;
  --primary-100: #000000;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"14\"],
:root[theme=\"dark\"]:root[accent=\"14\"] {
  --primary-20: #85d19f;
  --primary-30: #60c382;
  --primary-40: #42ae67;
  --primary-50: #348951;
  --primary-60: #26643b;
  --primary-70: #183f25;
  --primary-80: #0a1a0f;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"15\"],
:root[theme=\"dark\"]:root[accent=\"15\"] {
  --primary-20: #f5ffcc;
  --primary-30: #ebff99;
  --primary-40: #e0ff66;
  --primary-50: #d6ff33;
  --primary-60: #CCFF00;
  --primary-70: #a3cc00;
  --primary-80: #7a9900;
  --primary-90: #526600;
  --primary-100: #293300;
  --text-on-color: #000;
  --text-on-color-disabled: #16161640;
  --icon-on-color: #000;
  --icon-on-color-disabled: #16161640;
}
:root[theme=\"light\"]:root[accent=\"16\"],
:root[theme=\"dark\"]:root[accent=\"16\"] {
  --primary-20: #feb993;
  --primary-30: #fe9860;
  --primary-40: #fe772d;
  --primary-50: #f75801;
  --primary-60: #c44601;
  --primary-70: #913401;
  --primary-80: #5f2200;
  --primary-90: #2c1000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"17\"],
:root[theme=\"dark\"]:root[accent=\"17\"] {
  --primary-20: #fffafb;
  --primary-30: #ffc7d1;
  --primary-40: #ff94a7;
  --primary-50: #ff617e;
  --primary-60: #FF2E54;
  --primary-70: #fa002d;
  --primary-80: #c70024;
  --primary-90: #94001b;
  --primary-100: #610012;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"18\"],
:root[theme=\"dark\"]:root[accent=\"18\"] {
  --primary-20: #f5dce9;
  --primary-30: #ebb3d1;
  --primary-40: #e08bb9;
  --primary-50: #d563a0;
  --primary-60: #ca3b88;
  --primary-70: #a52d6e;
  --primary-80: #7d2253;
  --primary-90: #551738;
  --primary-100: #2d0c1e;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"19\"],
:root[theme=\"dark\"]:root[accent=\"19\"] {
  --primary-20: #ffccff;
  --primary-30: #ff99ff;
  --primary-40: #ff66ff;
  --primary-50: #ff33ff;
  --primary-60: #FF00FF;
  --primary-70: #cc00cc;
  --primary-80: #990099;
  --primary-90: #660066;
  --primary-100: #330033;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"20\"],
:root[theme=\"dark\"]:root[accent=\"20\"] {
  --primary-20: #e3a0ff;
  --primary-30: #d36dff;
  --primary-40: #c43aff;
  --primary-50: #b507ff;
  --primary-60: #9400D3;
  --primary-70: #7000a0;
  --primary-80: #4c006d;
  --primary-90: #29003a;
  --primary-100: #050007;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"21\"],
:root[theme=\"dark\"]:root[accent=\"21\"] {
  --primary-20: #d6eef9;
  --primary-30: #aadbf2;
  --primary-40: #7ec8eb;
  --primary-50: #52b5e4;
  --primary-60: #26A2DD;
  --primary-70: #1c83b4;
  --primary-80: #156388;
  --primary-90: #0e435c;
  --primary-100: #072330;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"22\"],
:root[theme=\"dark\"]:root[accent=\"22\"] {
  --primary-20: #7c6bf0;
  --primary-30: #533cec;
  --primary-40: #3016df;
  --primary-50: #2612b0;
  --primary-60: #1c0d82;
  --primary-70: #120854;
  --primary-80: #080425;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"23\"],
:root[theme=\"dark\"]:root[accent=\"23\"] {
  --primary-20: #ffefce;
  --primary-30: #ffdf9b;
  --primary-40: #ffcf68;
  --primary-50: #ffbe35;
  --primary-60: #ffae02;
  --primary-70: #ce8c00;
  --primary-80: #9b6900;
  --primary-90: #684700;
  --primary-100: #352400;
  --text-on-color: #000;
  --text-on-color-disabled: #16161640;
  --icon-on-color: #000;
  --icon-on-color-disabled: #16161640;
}
:root[theme=\"light\"]:root[accent=\"24\"],
:root[theme=\"dark\"]:root[accent=\"24\"] {
  --primary-20: #fef1f0;
  --primary-30: #fbc5c0;
  --primary-40: #f79a91;
  --primary-50: #f46e61;
  --primary-60: #f14231;
  --primary-70: #e0220f;
  --primary-80: #b01a0c;
  --primary-90: #801309;
  --primary-100: #510c05;
  --text-on-color: #000;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #000;
  --icon-on-color-disabled: #8d8d8d;
}
:root[theme=\"light\"]:root[accent=\"25\"],
:root[theme=\"dark\"]:root[accent=\"25\"] {
  --primary-20: #d470c3;
  --primary-30: #c849b2;
  --primary-40: #aa3496;
  --primary-50: #832873;
  --primary-60: #5c1c51;
  --primary-70: #35102f;
  --primary-80: #0e040c;
  --primary-90: #000000;
  --primary-100: #000000;
  --text-on-color: #fff;
  --text-on-color-disabled: #8d8d8d;
  --icon-on-color: #fff;
  --icon-on-color-disabled: #8d8d8d;
}
:root,
:root[accent=\"01\"] {
  --primary-20: #d0d5e8;
  --primary-30: #aeb6d7;
  --primary-40: #8c98c6;
  --primary-50: #6a79b5;
  --primary-60: #4e5e9e;
  --primary-70: #3d4a7c;
  --primary-80: #2c355a;
  --primary-90: #1b2138;
  --primary-100: #0b0d15;
}
:root[reduce-motion=\"true\"] {
  --duration-productive: 0;
  --duration-expressive: 0;
  --easing-standard-productive: none;
  --easing-standard-expressive: none;
}
:root[contrast-borders=\"true\"] {
  --outline-style: dashed;
  --border-no-color: var(--border-strong);
  --border-bottom: 1px;
}
:root[contrast-borders=\"true\"] a {
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
:root[contrast-borders=\"true\"] a:hover {
  outline: 2px var(--outline-style) transparent;
}
:root[contrast-borders=\"true\"] a:focus,
:root[contrast-borders=\"true\"] a.focus,
:root[contrast-borders=\"true\"] a:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
:root[reduce-transparency=\"true\"] {
  --layer-translucent: var(--layer);
  --layer-hover-translucent: var(--layer-hover);
  --layer-translucent-inverse: var(--layer-selected-inverse);
}
:root[enable-underlines=\"true\"] p a,
:root[enable-underlines=\"true\"] .alert a,
:root[enable-underlines=\"true\"] .list-group-item-text,
:root[enable-underlines=\"true\"] .accordion-title,
:root[enable-underlines=\"true\"] td a:not(.label):not([class*=\"dropdown-\"]):not(.dropdown-menu a),
:root[enable-underlines=\"true\"] p a:hover,
:root[enable-underlines=\"true\"] .alert a:hover,
:root[enable-underlines=\"true\"] .list-group-item-text:hover,
:root[enable-underlines=\"true\"] .accordion-title:hover,
:root[enable-underlines=\"true\"] td a:not(.label):not([class*=\"dropdown-\"]):not(.dropdown-menu a):hover {
  text-decoration: underline;
}
.ri-spin {
  -webkit-animation: ri-spin 2s infinite linear;
  animation: ri-spin 2s infinite linear;
  display: inline-flex;
}
@-webkit-keyframes ri-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes ri-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
html,
body {
  width: 100%;
  height: 100%;
}
body {
  overflow-y: scroll;
  cursor: default;
  background-color: var(--background);
}
body > #app-wrapper {
  overflow: hidden;
  position: relative;
  height: auto;
  min-height: 100%;
  width: 100%;
}
.sidebar-left-open {
  overflow: hidden;
}
.sidebar-left-open body > section#app-wrapper {
  overflow-x: hidden;
}
@media (min-width: 768px) {
  body {
    overflow-x: hidden;
  }
}
@media (min-width: 970px) {
  .modal {
    overflow-y: auto;
  }
  .modal-open {
    overflow: auto;
  }
}
.no-csstransforms3d.sidebar-open-ltr #app-header.navbar {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-header.navbar {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-header.navbar {
  left: -230px;
  right: 230px;
}
#app-header.navbar {
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  float: left;
  z-index: 1005;
  min-height: 48px;
  border-width: 0;
  border-radius: 0;
  margin-bottom: 0;
  backdrop-filter: blur(6px);
  background-color: var(--layer-translucent);
}
.header-fixed #app-header.navbar {
  position: fixed;
  right: 0;
  left: 0;
  top: 0;
  border-bottom: 1px solid var(--border-subtle);
}
.header-fixed #app-header.navbar ~ #app-content > .content-body {
  padding-top: 48px;
}
#app-header.navbar .navbar-nocollapse:before,
#app-header.navbar .navbar-nocollapse:after {
  display: table;
  content: \" \";
}
#app-header.navbar .navbar-nocollapse:after {
  clear: both;
}
#app-header.navbar .navbar-nocollapse .navbar-header {
  height: 48px;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle {
  display: inline-block;
  float: left;
  margin: 0;
  border-width: 0;
  padding: 18px 15px;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle .icon-bar {
  margin-left: auto;
  margin-right: auto;
  height: 2px;
  width: 18px;
  border-radius: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-header .navbar-toggle .icon-bar + .icon-bar {
  margin-top: 3px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav {
  float: left;
  margin: 0;
  display: flex;
  align-items: center;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > .mautic-brand > .mautic-logo-text {
  opacity: 1;
  margin-left: 3px;
  position: absolute;
  -webkit-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  -o-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  transition: opacity .3s ease .1s, margin-left 0s ease .2s;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > .mautic-brand {
  -webkit-transition: padding-left 0.3s ease;
  -o-transition: padding-left 0.3s ease;
  transition: padding-left 0.3s ease;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li {
  float: left;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a {
  color: var(--text-primary);
  line-height: 48px;
  padding-top: 0;
  padding-bottom: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:before,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:after {
  display: table;
  content: \" \";
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:after {
  clear: both;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a .sli {
  top: 1px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .badge,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .label {
  position: absolute;
  z-index: 1;
  top: 6px;
  right: 8px;
  font-size: 10px;
  padding: 0 4px;
  line-height: 16px;
  height: 16px;
  min-width: 16px;
  border-radius: 16px;
  -webkit-box-shadow: 0 0 0 2px var(--background);
  box-shadow: 0 0 0 2px var(--background);
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .badge.pull-right,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .label.pull-right {
  left: auto;
  right: 4px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .bullet {
  position: absolute;
  z-index: 1;
  top: 12px;
  right: 15px;
  -webkit-box-shadow: 0 0 0 2px var(--background);
  box-shadow: 0 0 0 2px var(--background);
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a > .bullet.pull-right {
  left: auto;
  right: 4px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:hover {
  color: var(--text-primary);
  background-color: transparent;
}
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:active,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a:focus,
#app-header.navbar .navbar-nocollapse .navbar-nav > li > a.active {
  color: var(--text-primary);
  background-color: var(--background-hover);
}
#app-header.navbar .navbar-nocollapse .navbar-nav img,
#app-header.navbar .navbar-nocollapse .navbar-nav .img-wrapper {
  border-radius: 100%;
  width: 28px;
  min-width: 28px;
  aspect-ratio: 1/1;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-menu-user .text {
  line-height: 14px;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom {
  position: static;
}
#app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom .dropdown-menu {
  width: 320px;
  overflow: hidden;
}
@media (max-width: 480px) {
  #app-header.navbar .navbar-nocollapse .navbar-nav .dropdown-custom .dropdown-menu {
    width: auto !important;
    left: 15px !important;
    right: 15px !important;
  }
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open .dropdown-menu {
  background-color: var(--layer);
  position: absolute;
  top: 100%;
  margin-top: 5px;
  left: 15px;
  float: left;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-top-left-radius: var(--border-radius-md);
  border-top-right-radius: var(--border-radius-md);
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a {
  color: var(--text-primary);
  background-color: var(--background-hover);
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a:hover,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a:focus {
  color: var(--text-primary);
  background-color: var(--background-hover);
}
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .badge,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .bullet,
#app-header.navbar .navbar-nocollapse .navbar-nav .open > a > .label {
  -webkit-box-shadow: 0 0 0 2px var(--background-hover);
  box-shadow: 0 0 0 2px var(--background-hover);
}
#app-header.navbar .navbar-nocollapse .navbar-form {
  background-color: var(--background);
  padding-top: 0;
  padding-bottom: 0;
  margin: 0;
  position: absolute;
  z-index: 1000;
  top: -100%;
  left: 0;
  right: 0;
  border-width: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: top 0.3s ease;
  -o-transition: top 0.3s ease;
  transition: top 0.3s ease;
}
#app-header.navbar .navbar-nocollapse .navbar-form.open {
  top: 0;
  -webkit-transition: top 0.3s ease;
  -o-transition: top 0.3s ease;
  transition: top 0.3s ease;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-group,
#app-header.navbar .navbar-nocollapse .navbar-form .input-group {
  margin-top: 8px;
  margin-bottom: 8px;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-group .fa,
#app-header.navbar .navbar-nocollapse .navbar-form .input-group .fa {
  color: var(--text-primary);
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control {
  background-color: var(--background-hover);
  border-color: transparent;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control::-moz-placeholder {
  color: var(--text-placeholder);
  opacity: 1;
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control:-ms-input-placeholder {
  color: var(--text-placeholder);
}
#app-header.navbar .navbar-nocollapse .navbar-form .form-control::-webkit-input-placeholder {
  color: var(--text-placeholder);
}
#app-header.navbar .navbar-nocollapse .navbar-left {
  float: left !important;
}
#app-header.navbar .navbar-nocollapse .navbar-left .open .dropdown-menu {
  left: 0;
  right: auto;
}
#app-header.navbar .navbar-nocollapse .navbar-left .open.dropdown-custom .dropdown-menu {
  left: 15px;
  right: auto;
}
#app-header.navbar .navbar-nocollapse .navbar-right {
  float: right !important;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open > a:after {
  z-index: 1003;
  bottom: -7px;
  margin-left: -8px;
  border-width: 0 8px 8px;
  border-color: transparent transparent var(--layer);
  position: absolute;
  content: \"\";
  left: 50%;
  width: 0;
  height: 0;
  border-style: solid;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open > a:before {
  z-index: 1002;
  bottom: -6px;
  margin-left: -9px;
  border-width: 0 9px 9px;
  border-color: transparent transparent rgba(0, 0, 0, 0.06);
  position: absolute;
  content: \"\";
  left: 50%;
  width: 0;
  height: 0;
  border-style: solid;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open .dropdown-menu {
  left: auto;
  right: 0;
}
#app-header.navbar .navbar-nocollapse .navbar-right .open.dropdown-custom .dropdown-menu {
  left: auto;
  right: 15px;
}
@media (min-width: 768px) {
  .header-fixed #app-header.navbar ~ .app-sidebar {
    padding-top: 48px;
  }
  #app-header.navbar .navbar-nocollapse .navbar-form {
    position: static;
    float: left;
  }
}
.csstransforms3d.sidebar-open-ltr .app-sidebar.sidebar-left {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr .app-sidebar.sidebar-left {
  left: 0;
}
.csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-left {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl .app-sidebar.sidebar-left {
  left: -230px;
}
.app-sidebar {
  position: fixed;
  z-index: 990;
  top: 0;
  bottom: 0;
}
.app-sidebar.sidebar-left {
  width: 230px;
  left: -230px;
  background-color: var(--layer);
  box-shadow: inset -1px 0 0 0 rgba(0, 0, 0, 0.05);
  color: var(--text-secondary);
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.app-sidebar.sidebar-left .sidebar-header,
.app-sidebar.sidebar-left .sidebar-footer {
  -webkit-transition: width 0.3s ease;
  -o-transition: width 0.3s ease;
  transition: width 0.3s ease;
  width: 230px;
  background-color: #4e5e9e;
}
.app-sidebar.sidebar-left .sidebar-content {
  padding-right: 1px;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.nav-group:after {
  content: '';
  position: absolute;
  right: 0;
  left: 50px;
  bottom: 0;
  border-bottom: none;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a {
  color: var(--text-secondary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a:hover,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > a:focus {
  background-color: var(--layer-hover);
  color: var(--text-primary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.active > a,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.open > a {
  background-color: var(--layer-selected);
  color: var(--text-primary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.active > .nav-submenu,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li.open > .nav-submenu {
  background-color: var(--layer-accent);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu {
  background-color: var(--layer-accent);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu:after {
  background-color: var(--layer-accent-alt);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li:after {
  background-color: var(--layer);
  box-shadow: none;
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a {
  color: var(--text-secondary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a:hover,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li > a:focus {
  color: var(--text-primary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li.active > a,
.app-sidebar.sidebar-left .nav-sidebar > .nav > li > .nav-submenu > li.open > a {
  color: var(--text-primary);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav .nav-heading {
  color: rgba(255, 255, 255, 0.25);
}
.app-sidebar.sidebar-left .nav-sidebar > .nav .nav-divider {
  background-color: rgba(255, 255, 255, 0.06);
}
.app-sidebar.sidebar-left .nav.sidebar-left-dark,
.app-sidebar.sidebar-left .nav.sidebar-left-dark > li > a:hover {
  background: var(--layer-accent);
}
.app-sidebar .sidebar-header {
  z-index: 100;
  height: 48px;
  padding-left: 15px;
  padding-right: 15px;
}
.header-fixed .app-sidebar .sidebar-header {
  position: absolute;
  top: 0;
}
.app-sidebar .sidebar-header ~ .sidebar-content {
  top: 48px;
}
.app-sidebar .sidebar-footer {
  position: absolute;
  bottom: 0;
  z-index: 9;
  height: 46px;
  padding-left: 15px;
  padding-right: 15px;
  box-shadow: 0 -1px 0 0 rgba(0, 0, 0, 0.07);
}
.app-sidebar .sidebar-footer .form-control {
  color: transparent;
}
.app-sidebar .sidebar-footer ~ .sidebar-content {
  bottom: 46px;
}
.app-sidebar .sidebar-content {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  margin-top: 50px;
}
.app-sidebar .sidebar-content .nav.nav-tabs {
  border-bottom: 1px solid #1b2128;
  box-shadow: none;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li {
  margin-bottom: 0;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li > a {
  border-width: 0;
  border-radius: 0;
  margin-right: 0;
  padding-top: 12px;
  padding-bottom: 12px;
  color: var(--text-secondary);
  background-color: transparent;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li > a:hover,
.app-sidebar .sidebar-content .nav.nav-tabs > li > a:focus {
  color: var(--text-primary);
  background-color: transparent;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a {
  overflow: visible;
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a,
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:hover,
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:focus {
  color: var(--text-primary);
  background-color: var(--layer-hover);
}
.app-sidebar .sidebar-content .nav.nav-tabs > li.active > a:after {
  top: auto;
  bottom: -1px;
  height: 1px;
}
.app-sidebar .nav-sidebar > .nav > li > a {
  overflow: hidden;
  padding: 12px 22px;
  -webkit-transition: all 0.15s ease;
  -o-transition: all 0.15s ease;
  transition: all 0.15s ease;
}
.app-sidebar .nav-sidebar > .nav > li > a .text {
  -webkit-transition: opacity var(--duration-expressive) ease .1s, line-height;
  -o-transition: opacity var(--duration-expressive) ease .1s, line-height;
  transition: opacity var(--duration-expressive) ease .1s, line-height;
  opacity: 1;
  transition-delay: 0.1s;
  margin-left: 0;
  position: relative;
  top: -1px;
  display: block;
  line-height: 18px;
}
.app-sidebar .nav-sidebar > .nav > li > a .icon {
  font-weight: normal;
  font-size: 14px;
  min-width: 26px;
  display: block;
  transition: var(--transition-all-expressive);
}
.app-sidebar .nav-sidebar > .nav > li > a .arrow {
  -webkit-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  -o-transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  transition: opacity .3s ease .1s, margin-left 0s ease .2s;
  opacity: 1;
  margin-left: 0;
  font-family: 'FontAwesome';
  position: relative;
  top: 1px;
  display: block;
}
.app-sidebar .nav-sidebar > .nav > li > a .arrow:after {
  content: \"\\f0da\";
}
.app-sidebar .nav-sidebar > .nav > li.open > a .arrow:after,
.app-sidebar .nav-sidebar > .nav > li.active > a .arrow:after {
  content: \"\\f0d7\";
}
.app-sidebar .nav-sidebar > .nav > li.open > a .icon,
.app-sidebar .nav-sidebar > .nav > li.active > a .icon {
  color: var(--icon-interactive);
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu {
  position: relative;
  padding-left: 50px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu:after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 26px;
  z-index: 1;
  width: 1px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li {
  position: relative;
  list-style: none;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li:last-child {
  padding-bottom: var(--spacing-05);
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li:after {
  content: '';
  position: absolute;
  z-index: 2;
  top: 11px;
  left: -27px;
  width: 7px;
  height: 7px;
  border-radius: 7px;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li.active:after {
  background-color: #FDB933 !important;
}
.app-sidebar .nav-sidebar > .nav > li > .nav-submenu > li > a {
  display: block;
  padding: 5px 20px 5px 0px;
  -webkit-transition: all 0.15s ease;
  -o-transition: all 0.15s ease;
  transition: all 0.15s ease;
}
.app-sidebar .nav-sidebar > .nav .nav-heading {
  text-transform: uppercase;
  padding: 10px 18px;
}
.app-sidebar .nav-sidebar > .nav .nav-heading:first-child {
  padding-top: 20px;
}
@media (min-width: 768px) {
  .app-sidebar.sidebar-left {
    left: 0;
  }
  .app-sidebar.sidebar-left ~ #app-content {
    margin-left: 230px;
  }
  .sidebar-left-collapse .app-sidebar.sidebar-left ~ #app-content {
    margin-left: 60px;
  }
  .app-sidebar.sidebar-left ~ #app-footer {
    margin-left: 230px;
  }
  .sidebar-left-collapse .app-sidebar.sidebar-left ~ #app-footer {
    margin-left: 60px;
  }
}
.csstransforms3d.sidebar-open-ltr #app-content {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr #app-content {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-content {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-content {
  left: -230px;
}
#app-content {
  position: relative;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#app-content:before,
#app-content:after {
  display: table;
  content: \" \";
}
#app-content:after {
  clear: both;
}
#app-content > .content-body {
  width: 100%;
  float: left;
}
#app-content > .content-body .container-fluid.container-xs {
  padding-left: 5px;
  padding-right: 5px;
}
#app-content > .content-body .container-fluid.container-sm {
  padding-left: 10px;
  padding-right: 10px;
}
#app-content > .content-body .container-fluid.container-md {
  padding-left: 15px;
  padding-right: 15px;
}
#app-content > .content-body .container-fluid.container-lg {
  padding-left: 20px;
  padding-right: 20px;
}
#app-content.content-only {
  width: 100%;
}
#app-content.content-only .page-header {
  padding-top: 30px;
  padding-left: 30px;
  margin: -15px -15px 0 -15px;
}
#app-content.content-only.container {
  padding-left: 0;
  padding-right: 0;
}
@media (min-width: 768px) {
  #app-content {
    position: static;
  }
}
.csstransforms3d.sidebar-open-ltr #app-footer {
  -webkit-transform: translate3d(230px, 0, 0);
  transform: translate3d(230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-ltr #app-footer {
  left: 230px;
}
.csstransforms3d.sidebar-open-rtl #app-footer {
  -webkit-transform: translate3d(-230px, 0, 0);
  transform: translate3d(-230px, 0, 0);
}
.no-csstransforms3d.sidebar-open-rtl #app-footer {
  left: -230px;
  right: 230px;
}
#app-footer {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1000;
  height: 46px;
  line-height: 46px;
  background-color: transparent;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#app-footer ~ #app-content > .content-body {
  padding-bottom: 46px;
}
#app-footer:after {
  content: \"\";
  position: absolute;
  z-index: -1;
  left: 0;
  right: 0;
  top: -1px;
  height: inherit;
  border-top: 1px solid rgba(0, 0, 0, 0.05);
}
body {
  color: var(--text-primary);
}
hr,
.hr-expand {
  margin-top: 15px;
  margin-bottom: 15px;
  border: 0;
  border-top: 0;
  width: auto;
}
hr.hr-w-2,
.hr-expand.hr-w-2 {
  border-width: 2px;
}
hr.hr-w-3,
.hr-expand.hr-w-3 {
  border-width: 3px;
}
.hr-expand a.arrow {
  display: inline-block;
  position: relative;
  top: -1px;
  z-index: 1;
  background-color: var(--layer);
  padding: 0 15px;
  margin: 0 15px;
  border-top-width: 0;
  border-bottom-left-radius: 10.8px;
  border-bottom-right-radius: 10.8px;
  font-size: 9px;
  line-height: 22px;
  text-transform: uppercase;
}
.hr-expand a.arrow > .caret {
  margin-left: 0;
  border-top: 0px;
  border-bottom: 4px solid;
}
.hr-expand a.collapsed > .caret {
  border-top: 4px solid;
  border-bottom: 0px;
}
.hr-expand.hr-w-2 a.arrow {
  top: -2px;
}
.hr-expand.hr-w-3 a.arrow {
  top: -3px;
}
a {
  transition: var(--transition-all-productive);
  color: var(--link-primary);
  outline: 2px solid transparent;
}
a:hover {
  color: var(--link-primary-hover);
  cursor: pointer;
}
a:hover,
a:focus {
  text-decoration: none;
  outline: 2px solid transparent;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-top: 0;
  margin-bottom: 0;
  color: inherit;
}
.ellipsis {
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
::selection {
  background-color: rgb(from var(--background-brand) r g b / 25%);
  color: var(--link-primary);
}
.fs-base {
  font-size: 13px;
}
.fs-2 {
  font-size: 2px !important;
}
.fs-4 {
  font-size: 4px !important;
}
.fs-6 {
  font-size: 6px !important;
}
.fs-8 {
  font-size: 8px !important;
}
.fs-10 {
  font-size: 10px !important;
}
.fs-11 {
  font-size: 11px !important;
}
.fs-12 {
  font-size: 12px !important;
}
.fs-14 {
  font-size: 14px !important;
}
.fs-16 {
  font-size: 16px !important;
}
.fs-18 {
  font-size: 18px !important;
}
.fs-20 {
  font-size: 20px !important;
}
.fs-22 {
  font-size: 22px !important;
}
.fs-24 {
  font-size: 24px !important;
}
.fs-26 {
  font-size: 26px !important;
}
.fs-28 {
  font-size: 28px !important;
}
.fs-30 {
  font-size: 30px !important;
}
.fs-32 {
  font-size: 32px !important;
}
.fs-34 {
  font-size: 34px !important;
}
.fs-36 {
  font-size: 36px !important;
}
.fs-38 {
  font-size: 38px !important;
}
.fs-40 {
  font-size: 40px !important;
}
.fs-42 {
  font-size: 42px !important;
}
.fs-44 {
  font-size: 44px !important;
}
.fs-46 {
  font-size: 46px !important;
}
.fs-48 {
  font-size: 48px !important;
}
.fs-50 {
  font-size: 50px !important;
}
.fs-52 {
  font-size: 52px !important;
}
.fs-54 {
  font-size: 54px !important;
}
.fs-56 {
  font-size: 56px !important;
}
.fs-b-e {
  font-size: var(--typography-body-expressive);
}
.fs-b-p {
  font-size: var(--typography-body-productive);
}
.fs-u-e {
  font-size: var(--typography-utility-expressive);
}
.fs-u-p {
  font-size: var(--typography-utility-productive);
}
.page-header {
  padding: 15px;
  margin: 16px 0 0 0;
  border-bottom: 0;
}
.page-header .breadcrumb {
  padding: 5px 0;
  background-color: inherit;
  border-radius: 0;
}
.container .page-header {
  margin: -15px -15px 15px -15px;
}
.container.container-xs .page-header {
  margin: -5px -5px 5px -5px;
}
.container.container-sm .page-header {
  margin: -10px -10px 10px -10px;
}
.container.container-md .page-header {
  margin: -15px -15px 15px -15px;
}
.container.container-lg .page-header {
  margin: -20px -20px 20px -20px;
}
.fw-b {
  font-weight: 700;
}
.fw-sb {
  font-weight: 600;
}
.fw-n {
  font-weight: 400;
}
.fw-t {
  font-weight: 300;
}
.tt-u {
  text-transform: uppercase;
}
.lh-1 {
  line-height: 1;
}
.text-muted {
  color: var(--text-secondary);
}
.text-placeholder {
  color: var(--text-placeholder);
}
.text-white {
  color: #fff;
}
a.text-white:hover {
  color: #e6e6e6;
}
.text-white.light-xs {
  color: #ffffff;
}
a.text-white.light-xs:hover {
  color: #ffffff;
}
.text-white.dark-xs {
  color: #d9d9d9;
}
a.text-white.dark-xs:hover {
  color: #cccccc;
}
.text-white.dark-sm {
  color: #b3b3b3;
}
a.text-white.dark-sm:hover {
  color: #a6a6a6;
}
.text-white.dark-md {
  color: #8c8c8c;
}
a.text-white.dark-md:hover {
  color: #808080;
}
.text-white.dark-lg {
  color: #666666;
}
a.text-white.dark-lg:hover {
  color: #595959;
}
.text-primary {
  color: var(--interactive);
}
.text-success {
  color: #00B49C;
}
a.text-success:hover {
  color: #008170;
}
.text-success.light-xs {
  color: #01ffdd;
}
a.text-success.light-xs:hover {
  color: #00e7c8;
}
.text-success.dark-xs {
  color: #00685a;
}
a.text-success.dark-xs:hover {
  color: #004e44;
}
.text-success.dark-sm {
  color: #001b17;
}
a.text-success.dark-sm:hover {
  color: #000201;
}
.text-success.dark-md {
  color: #000000;
}
a.text-success.dark-md:hover {
  color: #000000;
}
.text-success.dark-lg {
  color: #000000;
}
a.text-success.dark-lg:hover {
  color: #000000;
}
.text-warning {
  color: #FDB933;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #fba702;
}
.text-danger {
  color: #F86B4F;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #f6421e;
}
.text-info {
  color: var(--support-info);
}
.text-twitter {
  color: #55acee;
}
a.text-twitter:hover,
a.text-twitter:focus {
  color: #2795e9;
}
.text-facebook {
  color: #3b5998;
}
a.text-facebook:hover,
a.text-facebook:focus {
  color: #2d4373;
}
.text-google {
  color: #dd4b39;
}
a.text-google:hover,
a.text-google:focus {
  color: #c23321;
}
.text-disabled {
  color: var(--text-disabled);
}
.text-helper {
  color: var(--text-helper);
}
.text-help {
  color: var(--text-helper);
  font-size: var(--typography-utility-productive);
}
blockquote {
  padding-left: 40px;
  border-width: 0px;
}
blockquote > p {
  position: relative;
  font-style: italic;
  font-size: 18px !important;
}
blockquote > p:before {
  position: absolute;
  top: -1px;
  margin-left: -25px;
  font-family: \"FontAwesome\";
  font-size: 18px;
  content: \"\\f10d\";
  color: #ebedf0;
}
blockquote > p:after {
  position: absolute;
  bottom: -1px;
  margin-left: 5px;
  font-family: \"FontAwesome\";
  font-size: 18px;
  content: \"\\f10e\";
  color: #ebedf0;
}
.blockquote-reverse {
  padding-left: 20px;
  padding-right: 40px;
  border-width: 0px;
}
.help-block {
  font-size: 12px;
  color: var(--text-helper);
}
code {
  padding: var(--spacing-01) var(--spacing-03);
  cursor: pointer;
  overflow: hidden;
  border-radius: clamp(1px, var(--border-radius-sm), 4px);
}
kbd {
  min-width: 20px;
  text-align: center;
  box-shadow: inset 0 -1px 0 #afb8c133;
  border: 1px solid #afb8c133;
  border-radius: 5px;
}
.tooltip-inner {
  padding: 12px;
}
.popover {
  border-radius: 10px;
  padding: 0;
  border: 0;
}
.popover-title {
  padding: 16px 16px 12px;
  border-bottom: 1px solid var(--border-subtle);
  font-weight: 600;
  line-height: 1em;
  font-size: calc(1em + 1px);
  border-radius: 8px 8px 0 0;
  backdrop-filter: blur(6px);
  background-color: var(--layer-translucent);
}
.popover-content {
  padding: 12px 16px 16px;
  border-radius: var(--border-radius-md);
  background-color: var(--layer-02);
}
@media (min-width: 768px) {
  .popover:has([class^=\"col-\"]) {
    max-width: 450px;
    width: 450px;
  }
}
.touchevents .scroll-content {
  height: 100%;
  overflow-y: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  -webkit-overflow-scrolling: touch;
}
.no-touchevents .scroll-wrapper,
.no-touchevents .scroll-wrapper > .scroll-content {
  height: 100%;
}
.no-touchevents .scroll-wrapper > .scroll-rail {
  display: none !important;
}
.no-touchevents .scroll-wrapper > .scroll-bar {
  background-color: gray !important;
  right: 3px !important;
}
.btn {
  transition: var(--transition-all-productive);
  border: 1px solid transparent;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
  border-radius: 20px;
  display: inline-flex;
  align-items: center;
  height: var(--spacing-08);
  line-height: var(--spacing-08);
  font-size: 14px;
  padding: 0 var(--spacing-05);
  gap: var(--spacing-03);
  justify-content: space-between;
  width: fit-content;
}
.btn:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn:focus,
.btn.focus,
.btn:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn:hover {
  border: 1px solid transparent;
}
.btn,
.btn:active,
.btn.active {
  box-shadow: none;
  color: var(--text-primary);
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 2px solid transparent;
}
.btn span {
  display: flex;
  align-items: center;
  min-width: 0;
}
.btn span > span {
  margin-right: 8px;
}
.btn i {
  min-width: 13px;
  order: 2;
  line-height: inherit;
  font-size: 12px;
  vertical-align: -0.05em;
}
.btn > .caret {
  margin-top: -1px;
}
.btn.btn-rounded {
  border-radius: 32px;
  padding-left: 16px;
  padding-right: 16px;
}
.btn.btn-circle {
  width: 32px;
  padding-left: 0;
  padding-right: 0;
  border-radius: 50%;
}
.btn.btn-circle.btn-lg {
  width: 43px;
}
.btn.btn-circle.btn-sm {
  width: 28px;
}
.btn.btn-circle.btn-xs {
  width: 20px;
}
.btn.btn-outline {
  background-color: transparent;
  border-width: 1px;
}
.btn.btn-outline.btn-primary {
  color: #4E5D9D;
}
.btn.btn-outline.btn-success {
  color: #00B49C;
}
.btn.btn-outline.btn-warning {
  color: #FDB933;
}
.btn.btn-outline.btn-danger {
  color: #F86B4F;
}
.btn.btn-outline.btn-info {
  color: #35B4B9;
}
.btn.btn-block {
  width: 100%;
}
.btn ~ .btn,
.btn ~ .btn-group,
.btn-group ~ .btn,
.btn-group ~ .btn-group {
  margin-left: 5px;
}
.btn-primary,
.btn-primary + .dropdown-toggle {
  background-color: var(--button-primary);
  color: var(--text-on-color);
  border: 1px solid var(--button-primary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-primary:hover,
.btn-primary + .dropdown-toggle:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-primary:focus,
.btn-primary + .dropdown-toggle:focus,
.btn-primary.focus,
.btn-primary + .dropdown-toggle.focus,
.btn-primary:focus-visible,
.btn-primary + .dropdown-toggle:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-primary i,
.btn-primary + .dropdown-toggle i {
  color: var(--text-on-color);
}
.btn-primary:hover,
.btn-primary + .dropdown-toggle:hover {
  color: var(--text-on-color);
  background-color: var(--button-primary-hover);
  border: 1px solid var(--button-primary-hover);
}
.btn-primary:hover i,
.btn-primary + .dropdown-toggle:hover i {
  color: var(--text-on-color);
}
.btn-primary:active,
.btn-primary + .dropdown-toggle:active,
.btn-primary.active,
.btn-primary + .dropdown-toggle.active,
.open > .dropdown-toggle.btn-primary,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle {
  color: var(--text-on-color);
  background-color: var(--button-primary-active);
  border: 1px solid transparent;
}
.btn-primary:active i,
.btn-primary + .dropdown-toggle:active i,
.btn-primary.active i,
.btn-primary + .dropdown-toggle.active i,
.open > .dropdown-toggle.btn-primary i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle i {
  color: var(--text-on-color);
}
.btn-primary:active:hover,
.btn-primary + .dropdown-toggle:active:hover,
.btn-primary.active:hover,
.btn-primary + .dropdown-toggle.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle:hover,
.btn-primary:active:focus,
.btn-primary + .dropdown-toggle:active:focus,
.btn-primary.active:focus,
.btn-primary + .dropdown-toggle.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle:focus,
.btn-primary:active.focus,
.btn-primary + .dropdown-toggle:active.focus,
.btn-primary.active.focus,
.btn-primary + .dropdown-toggle.active.focus,
.open > .dropdown-toggle.btn-primary.focus,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.focus {
  color: var(--text-on-color);
  background-color: var(--button-primary-active);
  border-color: var(--button-primary-active);
}
.btn-primary:active:hover i,
.btn-primary + .dropdown-toggle:active:hover i,
.btn-primary.active:hover i,
.btn-primary + .dropdown-toggle.active:hover i,
.open > .dropdown-toggle.btn-primary:hover i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle:hover i,
.btn-primary:active:focus i,
.btn-primary + .dropdown-toggle:active:focus i,
.btn-primary.active:focus i,
.btn-primary + .dropdown-toggle.active:focus i,
.open > .dropdown-toggle.btn-primary:focus i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle:focus i,
.btn-primary:active.focus i,
.btn-primary + .dropdown-toggle:active.focus i,
.btn-primary.active.focus i,
.btn-primary + .dropdown-toggle.active.focus i,
.open > .dropdown-toggle.btn-primary.focus i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.focus i {
  color: var(--text-on-color);
}
.btn-primary:focus,
.btn-primary + .dropdown-toggle:focus,
.btn-primary.focus,
.btn-primary + .dropdown-toggle.focus {
  color: var(--text-on-color);
  background-color: var(--button-primary-active);
  border: 1px solid var(--button-primary-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-primary:focus i,
.btn-primary + .dropdown-toggle:focus i,
.btn-primary.focus i,
.btn-primary + .dropdown-toggle.focus i {
  color: var(--text-on-color);
}
.btn-primary[disabled],
.btn-primary + .dropdown-toggle[disabled],
.btn-primary.disabled,
.btn-primary + .dropdown-toggle.disabled,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary + .dropdown-toggle,
.btn-primary[disabled]:hover,
.btn-primary + .dropdown-toggle[disabled]:hover,
.btn-primary.disabled:hover,
.btn-primary + .dropdown-toggle.disabled:hover,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary + .dropdown-toggle:hover,
.btn-primary[disabled]:focus,
.btn-primary + .dropdown-toggle[disabled]:focus,
.btn-primary.disabled:focus,
.btn-primary + .dropdown-toggle.disabled:focus,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary + .dropdown-toggle:focus,
.btn-primary[disabled].focus,
.btn-primary + .dropdown-toggle[disabled].focus,
.btn-primary.disabled.focus,
.btn-primary + .dropdown-toggle.disabled.focus,
fieldset[disabled] .btn-primary.focus,
fieldset[disabled] .btn-primary + .dropdown-toggle.focus {
  background-color: var(--button-disabled);
  color: var(--text-on-color-disabled);
  border: 1px solid var(--button-disabled);
}
.btn-primary[disabled] i,
.btn-primary + .dropdown-toggle[disabled] i,
.btn-primary.disabled i,
.btn-primary + .dropdown-toggle.disabled i,
fieldset[disabled] .btn-primary i,
fieldset[disabled] .btn-primary + .dropdown-toggle i,
.btn-primary[disabled]:hover i,
.btn-primary + .dropdown-toggle[disabled]:hover i,
.btn-primary.disabled:hover i,
.btn-primary + .dropdown-toggle.disabled:hover i,
fieldset[disabled] .btn-primary:hover i,
fieldset[disabled] .btn-primary + .dropdown-toggle:hover i,
.btn-primary[disabled]:focus i,
.btn-primary + .dropdown-toggle[disabled]:focus i,
.btn-primary.disabled:focus i,
.btn-primary + .dropdown-toggle.disabled:focus i,
fieldset[disabled] .btn-primary:focus i,
fieldset[disabled] .btn-primary + .dropdown-toggle:focus i,
.btn-primary[disabled].focus i,
.btn-primary + .dropdown-toggle[disabled].focus i,
.btn-primary.disabled.focus i,
.btn-primary + .dropdown-toggle.disabled.focus i,
fieldset[disabled] .btn-primary.focus i,
fieldset[disabled] .btn-primary + .dropdown-toggle.focus i {
  color: var(--text-on-color-disabled);
}
.btn-primary.btn-danger,
.btn-primary + .dropdown-toggle.btn-danger {
  background-color: var(--button-danger-primary);
  color: var(--text-inverse);
  border: 1px solid var(--button-danger-primary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-primary.btn-danger:hover,
.btn-primary + .dropdown-toggle.btn-danger:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-primary.btn-danger:focus,
.btn-primary + .dropdown-toggle.btn-danger:focus,
.btn-primary.btn-danger.focus,
.btn-primary + .dropdown-toggle.btn-danger.focus,
.btn-primary.btn-danger:focus-visible,
.btn-primary + .dropdown-toggle.btn-danger:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-primary.btn-danger i,
.btn-primary + .dropdown-toggle.btn-danger i {
  color: var(--text-inverse);
}
.btn-primary.btn-danger:hover,
.btn-primary + .dropdown-toggle.btn-danger:hover {
  color: var(--text-inverse);
  background-color: var(--button-danger-hover);
  border: 1px solid var(--button-danger-hover);
}
.btn-primary.btn-danger:hover i,
.btn-primary + .dropdown-toggle.btn-danger:hover i {
  color: var(--text-inverse);
}
.btn-primary.btn-danger:active,
.btn-primary + .dropdown-toggle.btn-danger:active,
.btn-primary.btn-danger.active,
.btn-primary + .dropdown-toggle.btn-danger.active,
.open > .dropdown-toggle.btn-primary.btn-danger,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid transparent;
}
.btn-primary.btn-danger:active i,
.btn-primary + .dropdown-toggle.btn-danger:active i,
.btn-primary.btn-danger.active i,
.btn-primary + .dropdown-toggle.btn-danger.active i,
.open > .dropdown-toggle.btn-primary.btn-danger i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger i {
  color: var(--text-inverse);
}
.btn-primary.btn-danger:active:hover,
.btn-primary + .dropdown-toggle.btn-danger:active:hover,
.btn-primary.btn-danger.active:hover,
.btn-primary + .dropdown-toggle.btn-danger.active:hover,
.open > .dropdown-toggle.btn-primary.btn-danger:hover,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger:hover,
.btn-primary.btn-danger:active:focus,
.btn-primary + .dropdown-toggle.btn-danger:active:focus,
.btn-primary.btn-danger.active:focus,
.btn-primary + .dropdown-toggle.btn-danger.active:focus,
.open > .dropdown-toggle.btn-primary.btn-danger:focus,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger:focus,
.btn-primary.btn-danger:active.focus,
.btn-primary + .dropdown-toggle.btn-danger:active.focus,
.btn-primary.btn-danger.active.focus,
.btn-primary + .dropdown-toggle.btn-danger.active.focus,
.open > .dropdown-toggle.btn-primary.btn-danger.focus,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border-color: var(--button-danger-active);
}
.btn-primary.btn-danger:active:hover i,
.btn-primary + .dropdown-toggle.btn-danger:active:hover i,
.btn-primary.btn-danger.active:hover i,
.btn-primary + .dropdown-toggle.btn-danger.active:hover i,
.open > .dropdown-toggle.btn-primary.btn-danger:hover i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger:hover i,
.btn-primary.btn-danger:active:focus i,
.btn-primary + .dropdown-toggle.btn-danger:active:focus i,
.btn-primary.btn-danger.active:focus i,
.btn-primary + .dropdown-toggle.btn-danger.active:focus i,
.open > .dropdown-toggle.btn-primary.btn-danger:focus i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger:focus i,
.btn-primary.btn-danger:active.focus i,
.btn-primary + .dropdown-toggle.btn-danger:active.focus i,
.btn-primary.btn-danger.active.focus i,
.btn-primary + .dropdown-toggle.btn-danger.active.focus i,
.open > .dropdown-toggle.btn-primary.btn-danger.focus i,
.open > .dropdown-toggle.btn-primary + .dropdown-toggle.btn-danger.focus i {
  color: var(--text-inverse);
}
.btn-primary.btn-danger:focus,
.btn-primary + .dropdown-toggle.btn-danger:focus,
.btn-primary.btn-danger.focus,
.btn-primary + .dropdown-toggle.btn-danger.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid var(--button-danger-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-primary.btn-danger:focus i,
.btn-primary + .dropdown-toggle.btn-danger:focus i,
.btn-primary.btn-danger.focus i,
.btn-primary + .dropdown-toggle.btn-danger.focus i {
  color: var(--text-inverse);
}
.btn-primary.btn-danger[disabled],
.btn-primary + .dropdown-toggle.btn-danger[disabled],
.btn-primary.btn-danger.disabled,
.btn-primary + .dropdown-toggle.btn-danger.disabled,
fieldset[disabled] .btn-primary.btn-danger,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger,
.btn-primary.btn-danger[disabled]:hover,
.btn-primary + .dropdown-toggle.btn-danger[disabled]:hover,
.btn-primary.btn-danger.disabled:hover,
.btn-primary + .dropdown-toggle.btn-danger.disabled:hover,
fieldset[disabled] .btn-primary.btn-danger:hover,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger:hover,
.btn-primary.btn-danger[disabled]:focus,
.btn-primary + .dropdown-toggle.btn-danger[disabled]:focus,
.btn-primary.btn-danger.disabled:focus,
.btn-primary + .dropdown-toggle.btn-danger.disabled:focus,
fieldset[disabled] .btn-primary.btn-danger:focus,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger:focus,
.btn-primary.btn-danger[disabled].focus,
.btn-primary + .dropdown-toggle.btn-danger[disabled].focus,
.btn-primary.btn-danger.disabled.focus,
.btn-primary + .dropdown-toggle.btn-danger.disabled.focus,
fieldset[disabled] .btn-primary.btn-danger.focus,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger.focus {
  background-color: var(--button-disabled);
  color: var(--text-on-color-disabled);
  border: 1px solid var(--button-disabled);
}
.btn-primary.btn-danger[disabled] i,
.btn-primary + .dropdown-toggle.btn-danger[disabled] i,
.btn-primary.btn-danger.disabled i,
.btn-primary + .dropdown-toggle.btn-danger.disabled i,
fieldset[disabled] .btn-primary.btn-danger i,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger i,
.btn-primary.btn-danger[disabled]:hover i,
.btn-primary + .dropdown-toggle.btn-danger[disabled]:hover i,
.btn-primary.btn-danger.disabled:hover i,
.btn-primary + .dropdown-toggle.btn-danger.disabled:hover i,
fieldset[disabled] .btn-primary.btn-danger:hover i,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger:hover i,
.btn-primary.btn-danger[disabled]:focus i,
.btn-primary + .dropdown-toggle.btn-danger[disabled]:focus i,
.btn-primary.btn-danger.disabled:focus i,
.btn-primary + .dropdown-toggle.btn-danger.disabled:focus i,
fieldset[disabled] .btn-primary.btn-danger:focus i,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger:focus i,
.btn-primary.btn-danger[disabled].focus i,
.btn-primary + .dropdown-toggle.btn-danger[disabled].focus i,
.btn-primary.btn-danger.disabled.focus i,
.btn-primary + .dropdown-toggle.btn-danger.disabled.focus i,
fieldset[disabled] .btn-primary.btn-danger.focus i,
fieldset[disabled] .btn-primary + .dropdown-toggle.btn-danger.focus i {
  color: var(--text-on-color-disabled);
}
.btn-secondary {
  background-color: var(--button-secondary);
  color: var(--button-secondary-text);
  border: 1px solid var(--button-secondary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-secondary:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-secondary:focus,
.btn-secondary.focus,
.btn-secondary:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-secondary i {
  color: var(--button-secondary-text);
}
.btn-secondary:hover {
  color: var(--button-secondary-text);
  background-color: var(--button-secondary-hover);
  border: 1px solid var(--button-secondary-hover);
}
.btn-secondary:hover i {
  color: var(--button-secondary-text);
}
.btn-secondary:active,
.btn-secondary.active,
.open > .dropdown-toggle.btn-secondary {
  color: var(--button-secondary-text);
  background-color: var(--button-secondary-active);
  border: 1px solid transparent;
}
.btn-secondary:active i,
.btn-secondary.active i,
.open > .dropdown-toggle.btn-secondary i {
  color: var(--button-secondary-text);
}
.btn-secondary:active:hover,
.btn-secondary.active:hover,
.open > .dropdown-toggle.btn-secondary:hover,
.btn-secondary:active:focus,
.btn-secondary.active:focus,
.open > .dropdown-toggle.btn-secondary:focus,
.btn-secondary:active.focus,
.btn-secondary.active.focus,
.open > .dropdown-toggle.btn-secondary.focus {
  color: var(--button-secondary-text);
  background-color: var(--button-secondary-active);
  border-color: var(--button-secondary-active);
}
.btn-secondary:active:hover i,
.btn-secondary.active:hover i,
.open > .dropdown-toggle.btn-secondary:hover i,
.btn-secondary:active:focus i,
.btn-secondary.active:focus i,
.open > .dropdown-toggle.btn-secondary:focus i,
.btn-secondary:active.focus i,
.btn-secondary.active.focus i,
.open > .dropdown-toggle.btn-secondary.focus i {
  color: var(--button-secondary-text);
}
.btn-secondary:focus,
.btn-secondary.focus {
  color: var(--button-secondary-text);
  background-color: var(--button-secondary-active);
  border: 1px solid var(--button-secondary-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-secondary:focus i,
.btn-secondary.focus i {
  color: var(--button-secondary-text);
}
.btn-secondary[disabled],
.btn-secondary.disabled,
fieldset[disabled] .btn-secondary,
.btn-secondary[disabled]:hover,
.btn-secondary.disabled:hover,
fieldset[disabled] .btn-secondary:hover,
.btn-secondary[disabled]:focus,
.btn-secondary.disabled:focus,
fieldset[disabled] .btn-secondary:focus,
.btn-secondary[disabled].focus,
.btn-secondary.disabled.focus,
fieldset[disabled] .btn-secondary.focus {
  background-color: var(--button-disabled);
  color: var(--text-on-color-disabled);
  border: 1px solid var(--button-disabled);
}
.btn-secondary[disabled] i,
.btn-secondary.disabled i,
fieldset[disabled] .btn-secondary i,
.btn-secondary[disabled]:hover i,
.btn-secondary.disabled:hover i,
fieldset[disabled] .btn-secondary:hover i,
.btn-secondary[disabled]:focus i,
.btn-secondary.disabled:focus i,
fieldset[disabled] .btn-secondary:focus i,
.btn-secondary[disabled].focus i,
.btn-secondary.disabled.focus i,
fieldset[disabled] .btn-secondary.focus i {
  color: var(--text-on-color-disabled);
}
.btn-tertiary,
.btn-tertiary + .dropdown-toggle,
.btn-primary + .btn-primary:not(.dropdown-toggle),
.btn-primary + .btn-primary + .btn-primary,
.btn-primary + .btn-primary + .btn-secondary,
.open > .btn-tertiary + .dropdown-toggle.btn-primary {
  background-color: transparent;
  color: var(--button-tertiary);
  border: 1px solid var(--button-tertiary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-tertiary:hover,
.btn-tertiary + .dropdown-toggle:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle):hover,
.btn-primary + .btn-primary + .btn-primary:hover,
.btn-primary + .btn-primary + .btn-secondary:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-tertiary:focus,
.btn-tertiary + .dropdown-toggle:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle):focus,
.btn-primary + .btn-primary + .btn-primary:focus,
.btn-primary + .btn-primary + .btn-secondary:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus,
.btn-tertiary.focus,
.btn-tertiary + .dropdown-toggle.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).focus,
.btn-primary + .btn-primary + .btn-primary.focus,
.btn-primary + .btn-primary + .btn-secondary.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.focus,
.btn-tertiary:focus-visible,
.btn-tertiary + .dropdown-toggle:focus-visible,
.btn-primary + .btn-primary:not(.dropdown-toggle):focus-visible,
.btn-primary + .btn-primary + .btn-primary:focus-visible,
.btn-primary + .btn-primary + .btn-secondary:focus-visible,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-tertiary i,
.btn-tertiary + .dropdown-toggle i,
.btn-primary + .btn-primary:not(.dropdown-toggle) i,
.btn-primary + .btn-primary + .btn-primary i,
.btn-primary + .btn-primary + .btn-secondary i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary i {
  color: var(--button-tertiary);
}
.btn-tertiary:hover,
.btn-tertiary + .dropdown-toggle:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle):hover,
.btn-primary + .btn-primary + .btn-primary:hover,
.btn-primary + .btn-primary + .btn-secondary:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:hover {
  color: var(--text-on-color);
  background-color: var(--button-tertiary-hover);
  border: 1px solid var(--button-tertiary-hover);
}
.btn-tertiary:hover i,
.btn-tertiary + .dropdown-toggle:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle):hover i,
.btn-primary + .btn-primary + .btn-primary:hover i,
.btn-primary + .btn-primary + .btn-secondary:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:hover i {
  color: var(--text-on-color);
}
.btn-tertiary:active,
.btn-tertiary + .dropdown-toggle:active,
.btn-primary + .btn-primary:not(.dropdown-toggle):active,
.btn-primary + .btn-primary + .btn-primary:active,
.btn-primary + .btn-primary + .btn-secondary:active,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active,
.btn-tertiary.active,
.btn-tertiary + .dropdown-toggle.active,
.btn-primary + .btn-primary:not(.dropdown-toggle).active,
.btn-primary + .btn-primary + .btn-primary.active,
.btn-primary + .btn-primary + .btn-secondary.active,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active,
.open > .dropdown-toggle.btn-tertiary,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle),
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary {
  color: var(--text-on-color);
  background-color: var(--button-tertiary-active);
  border: 1px solid transparent;
}
.btn-tertiary:active i,
.btn-tertiary + .dropdown-toggle:active i,
.btn-primary + .btn-primary:not(.dropdown-toggle):active i,
.btn-primary + .btn-primary + .btn-primary:active i,
.btn-primary + .btn-primary + .btn-secondary:active i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active i,
.btn-tertiary.active i,
.btn-tertiary + .dropdown-toggle.active i,
.btn-primary + .btn-primary:not(.dropdown-toggle).active i,
.btn-primary + .btn-primary + .btn-primary.active i,
.btn-primary + .btn-primary + .btn-secondary.active i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active i,
.open > .dropdown-toggle.btn-tertiary i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle) i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary i {
  color: var(--text-on-color);
}
.btn-tertiary:active:hover,
.btn-tertiary + .dropdown-toggle:active:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle):active:hover,
.btn-primary + .btn-primary + .btn-primary:active:hover,
.btn-primary + .btn-primary + .btn-secondary:active:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active:hover,
.btn-tertiary.active:hover,
.btn-tertiary + .dropdown-toggle.active:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).active:hover,
.btn-primary + .btn-primary + .btn-primary.active:hover,
.btn-primary + .btn-primary + .btn-secondary.active:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active:hover,
.open > .dropdown-toggle.btn-tertiary:hover,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle:hover,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle):hover,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary:hover,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary:hover,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary:hover,
.btn-tertiary:active:focus,
.btn-tertiary + .dropdown-toggle:active:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle):active:focus,
.btn-primary + .btn-primary + .btn-primary:active:focus,
.btn-primary + .btn-primary + .btn-secondary:active:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active:focus,
.btn-tertiary.active:focus,
.btn-tertiary + .dropdown-toggle.active:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).active:focus,
.btn-primary + .btn-primary + .btn-primary.active:focus,
.btn-primary + .btn-primary + .btn-secondary.active:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active:focus,
.open > .dropdown-toggle.btn-tertiary:focus,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle:focus,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle):focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary:focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary:focus,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus,
.btn-tertiary:active.focus,
.btn-tertiary + .dropdown-toggle:active.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle):active.focus,
.btn-primary + .btn-primary + .btn-primary:active.focus,
.btn-primary + .btn-primary + .btn-secondary:active.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active.focus,
.btn-tertiary.active.focus,
.btn-tertiary + .dropdown-toggle.active.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).active.focus,
.btn-primary + .btn-primary + .btn-primary.active.focus,
.btn-primary + .btn-primary + .btn-secondary.active.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active.focus,
.open > .dropdown-toggle.btn-tertiary.focus,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.focus,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.focus,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.focus {
  color: var(--text-on-color);
  background-color: var(--button-tertiary-active);
  border-color: var(--button-tertiary-active);
}
.btn-tertiary:active:hover i,
.btn-tertiary + .dropdown-toggle:active:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle):active:hover i,
.btn-primary + .btn-primary + .btn-primary:active:hover i,
.btn-primary + .btn-primary + .btn-secondary:active:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active:hover i,
.btn-tertiary.active:hover i,
.btn-tertiary + .dropdown-toggle.active:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).active:hover i,
.btn-primary + .btn-primary + .btn-primary.active:hover i,
.btn-primary + .btn-primary + .btn-secondary.active:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active:hover i,
.open > .dropdown-toggle.btn-tertiary:hover i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle:hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle):hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary:hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary:hover i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary:hover i,
.btn-tertiary:active:focus i,
.btn-tertiary + .dropdown-toggle:active:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle):active:focus i,
.btn-primary + .btn-primary + .btn-primary:active:focus i,
.btn-primary + .btn-primary + .btn-secondary:active:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active:focus i,
.btn-tertiary.active:focus i,
.btn-tertiary + .dropdown-toggle.active:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).active:focus i,
.btn-primary + .btn-primary + .btn-primary.active:focus i,
.btn-primary + .btn-primary + .btn-secondary.active:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active:focus i,
.open > .dropdown-toggle.btn-tertiary:focus i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle:focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle):focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary:focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary:focus i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus i,
.btn-tertiary:active.focus i,
.btn-tertiary + .dropdown-toggle:active.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle):active.focus i,
.btn-primary + .btn-primary + .btn-primary:active.focus i,
.btn-primary + .btn-primary + .btn-secondary:active.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:active.focus i,
.btn-tertiary.active.focus i,
.btn-tertiary + .dropdown-toggle.active.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).active.focus i,
.btn-primary + .btn-primary + .btn-primary.active.focus i,
.btn-primary + .btn-primary + .btn-secondary.active.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.active.focus i,
.open > .dropdown-toggle.btn-tertiary.focus i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.focus i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.focus i {
  color: var(--text-on-color);
}
.btn-tertiary:focus,
.btn-tertiary + .dropdown-toggle:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle):focus,
.btn-primary + .btn-primary + .btn-primary:focus,
.btn-primary + .btn-primary + .btn-secondary:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus,
.btn-tertiary.focus,
.btn-tertiary + .dropdown-toggle.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).focus,
.btn-primary + .btn-primary + .btn-primary.focus,
.btn-primary + .btn-primary + .btn-secondary.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.focus {
  color: var(--text-on-color);
  background-color: var(--button-tertiary-active);
  border: 1px solid var(--button-tertiary-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-tertiary:focus i,
.btn-tertiary + .dropdown-toggle:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle):focus i,
.btn-primary + .btn-primary + .btn-primary:focus i,
.btn-primary + .btn-primary + .btn-secondary:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary:focus i,
.btn-tertiary.focus i,
.btn-tertiary + .dropdown-toggle.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).focus i,
.btn-primary + .btn-primary + .btn-primary.focus i,
.btn-primary + .btn-primary + .btn-secondary.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.focus i {
  color: var(--text-on-color);
}
.btn-tertiary[disabled],
.btn-tertiary + .dropdown-toggle[disabled],
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled],
.btn-primary + .btn-primary + .btn-primary[disabled],
.btn-primary + .btn-primary + .btn-secondary[disabled],
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled],
.btn-tertiary.disabled,
.btn-tertiary + .dropdown-toggle.disabled,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled,
.btn-primary + .btn-primary + .btn-primary.disabled,
.btn-primary + .btn-primary + .btn-secondary.disabled,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled,
fieldset[disabled] .btn-tertiary,
fieldset[disabled] .btn-tertiary + .dropdown-toggle,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle),
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary,
.btn-tertiary[disabled]:hover,
.btn-tertiary + .dropdown-toggle[disabled]:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled]:hover,
.btn-primary + .btn-primary + .btn-primary[disabled]:hover,
.btn-primary + .btn-primary + .btn-secondary[disabled]:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled]:hover,
.btn-tertiary.disabled:hover,
.btn-tertiary + .dropdown-toggle.disabled:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled:hover,
.btn-primary + .btn-primary + .btn-primary.disabled:hover,
.btn-primary + .btn-primary + .btn-secondary.disabled:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled:hover,
fieldset[disabled] .btn-tertiary:hover,
fieldset[disabled] .btn-tertiary + .dropdown-toggle:hover,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle):hover,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary:hover,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary:hover,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary:hover,
.btn-tertiary[disabled]:focus,
.btn-tertiary + .dropdown-toggle[disabled]:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled]:focus,
.btn-primary + .btn-primary + .btn-primary[disabled]:focus,
.btn-primary + .btn-primary + .btn-secondary[disabled]:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled]:focus,
.btn-tertiary.disabled:focus,
.btn-tertiary + .dropdown-toggle.disabled:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled:focus,
.btn-primary + .btn-primary + .btn-primary.disabled:focus,
.btn-primary + .btn-primary + .btn-secondary.disabled:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled:focus,
fieldset[disabled] .btn-tertiary:focus,
fieldset[disabled] .btn-tertiary + .dropdown-toggle:focus,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle):focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary:focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary:focus,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary:focus,
.btn-tertiary[disabled].focus,
.btn-tertiary + .dropdown-toggle[disabled].focus,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled].focus,
.btn-primary + .btn-primary + .btn-primary[disabled].focus,
.btn-primary + .btn-primary + .btn-secondary[disabled].focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled].focus,
.btn-tertiary.disabled.focus,
.btn-tertiary + .dropdown-toggle.disabled.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled.focus,
.btn-primary + .btn-primary + .btn-primary.disabled.focus,
.btn-primary + .btn-primary + .btn-secondary.disabled.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled.focus,
fieldset[disabled] .btn-tertiary.focus,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.focus,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.focus,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.focus {
  background-color: transparent;
  color: var(--text-disabled);
  border: 1px solid transparent;
}
.btn-tertiary[disabled] i,
.btn-tertiary + .dropdown-toggle[disabled] i,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled] i,
.btn-primary + .btn-primary + .btn-primary[disabled] i,
.btn-primary + .btn-primary + .btn-secondary[disabled] i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled] i,
.btn-tertiary.disabled i,
.btn-tertiary + .dropdown-toggle.disabled i,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled i,
.btn-primary + .btn-primary + .btn-primary.disabled i,
.btn-primary + .btn-primary + .btn-secondary.disabled i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled i,
fieldset[disabled] .btn-tertiary i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle) i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary i,
.btn-tertiary[disabled]:hover i,
.btn-tertiary + .dropdown-toggle[disabled]:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled]:hover i,
.btn-primary + .btn-primary + .btn-primary[disabled]:hover i,
.btn-primary + .btn-primary + .btn-secondary[disabled]:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled]:hover i,
.btn-tertiary.disabled:hover i,
.btn-tertiary + .dropdown-toggle.disabled:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled:hover i,
.btn-primary + .btn-primary + .btn-primary.disabled:hover i,
.btn-primary + .btn-primary + .btn-secondary.disabled:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled:hover i,
fieldset[disabled] .btn-tertiary:hover i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle:hover i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle):hover i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary:hover i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary:hover i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary:hover i,
.btn-tertiary[disabled]:focus i,
.btn-tertiary + .dropdown-toggle[disabled]:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled]:focus i,
.btn-primary + .btn-primary + .btn-primary[disabled]:focus i,
.btn-primary + .btn-primary + .btn-secondary[disabled]:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled]:focus i,
.btn-tertiary.disabled:focus i,
.btn-tertiary + .dropdown-toggle.disabled:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled:focus i,
.btn-primary + .btn-primary + .btn-primary.disabled:focus i,
.btn-primary + .btn-primary + .btn-secondary.disabled:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled:focus i,
fieldset[disabled] .btn-tertiary:focus i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle:focus i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle):focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary:focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary:focus i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary:focus i,
.btn-tertiary[disabled].focus i,
.btn-tertiary + .dropdown-toggle[disabled].focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle)[disabled].focus i,
.btn-primary + .btn-primary + .btn-primary[disabled].focus i,
.btn-primary + .btn-primary + .btn-secondary[disabled].focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary[disabled].focus i,
.btn-tertiary.disabled.focus i,
.btn-tertiary + .dropdown-toggle.disabled.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).disabled.focus i,
.btn-primary + .btn-primary + .btn-primary.disabled.focus i,
.btn-primary + .btn-primary + .btn-secondary.disabled.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.disabled.focus i,
fieldset[disabled] .btn-tertiary.focus i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.focus i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.focus i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.focus i {
  color: var(--text-disabled);
}
.btn-tertiary.btn-danger,
.btn-tertiary + .dropdown-toggle.btn-danger,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger,
.btn-primary + .btn-primary + .btn-primary.btn-danger,
.btn-primary + .btn-primary + .btn-secondary.btn-danger,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger {
  background-color: transparent;
  color: var(--button-danger-secondary);
  border: 1px solid var(--button-danger-secondary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-tertiary.btn-danger:hover,
.btn-tertiary + .dropdown-toggle.btn-danger:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-tertiary.btn-danger:focus,
.btn-tertiary + .dropdown-toggle.btn-danger:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus,
.btn-tertiary.btn-danger.focus,
.btn-tertiary + .dropdown-toggle.btn-danger.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus,
.btn-tertiary.btn-danger:focus-visible,
.btn-tertiary + .dropdown-toggle.btn-danger:focus-visible,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus-visible,
.btn-primary + .btn-primary + .btn-primary.btn-danger:focus-visible,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus-visible,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-tertiary.btn-danger i,
.btn-tertiary + .dropdown-toggle.btn-danger i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger i,
.btn-primary + .btn-primary + .btn-primary.btn-danger i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger i {
  color: var(--button-danger-secondary);
}
.btn-tertiary.btn-danger:hover,
.btn-tertiary + .dropdown-toggle.btn-danger:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover {
  color: var(--text-inverse);
  background-color: var(--button-danger-hover);
  border: 1px solid var(--button-danger-hover);
}
.btn-tertiary.btn-danger:hover i,
.btn-tertiary + .dropdown-toggle.btn-danger:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:hover i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover i {
  color: var(--text-inverse);
}
.btn-tertiary.btn-danger:active,
.btn-tertiary + .dropdown-toggle.btn-danger:active,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active,
.btn-tertiary.btn-danger.active,
.btn-tertiary + .dropdown-toggle.btn-danger.active,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active,
.open > .dropdown-toggle.btn-tertiary.btn-danger,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid transparent;
}
.btn-tertiary.btn-danger:active i,
.btn-tertiary + .dropdown-toggle.btn-danger:active i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active i,
.btn-tertiary.btn-danger.active i,
.btn-tertiary + .dropdown-toggle.btn-danger.active i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active i,
.open > .dropdown-toggle.btn-tertiary.btn-danger i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger i {
  color: var(--text-inverse);
}
.btn-tertiary.btn-danger:active:hover,
.btn-tertiary + .dropdown-toggle.btn-danger:active:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active:hover,
.btn-tertiary.btn-danger.active:hover,
.btn-tertiary + .dropdown-toggle.btn-danger.active:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active:hover,
.open > .dropdown-toggle.btn-tertiary.btn-danger:hover,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger:hover,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger:hover,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger:hover,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover,
.btn-tertiary.btn-danger:active:focus,
.btn-tertiary + .dropdown-toggle.btn-danger:active:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active:focus,
.btn-tertiary.btn-danger.active:focus,
.btn-tertiary + .dropdown-toggle.btn-danger.active:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active:focus,
.open > .dropdown-toggle.btn-tertiary.btn-danger:focus,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger:focus,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger:focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus,
.btn-tertiary.btn-danger:active.focus,
.btn-tertiary + .dropdown-toggle.btn-danger:active.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active.focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active.focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active.focus,
.btn-tertiary.btn-danger.active.focus,
.btn-tertiary + .dropdown-toggle.btn-danger.active.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active.focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active.focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active.focus,
.open > .dropdown-toggle.btn-tertiary.btn-danger.focus,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger.focus,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger.focus,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger.focus,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border-color: var(--button-danger-active);
}
.btn-tertiary.btn-danger:active:hover i,
.btn-tertiary + .dropdown-toggle.btn-danger:active:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active:hover i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active:hover i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active:hover i,
.btn-tertiary.btn-danger.active:hover i,
.btn-tertiary + .dropdown-toggle.btn-danger.active:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active:hover i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active:hover i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active:hover i,
.open > .dropdown-toggle.btn-tertiary.btn-danger:hover i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger:hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger:hover i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger:hover i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover i,
.btn-tertiary.btn-danger:active:focus i,
.btn-tertiary + .dropdown-toggle.btn-danger:active:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active:focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active:focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active:focus i,
.btn-tertiary.btn-danger.active:focus i,
.btn-tertiary + .dropdown-toggle.btn-danger.active:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active:focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active:focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active:focus i,
.open > .dropdown-toggle.btn-tertiary.btn-danger:focus i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger:focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger:focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus i,
.btn-tertiary.btn-danger:active.focus i,
.btn-tertiary + .dropdown-toggle.btn-danger:active.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:active.focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:active.focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:active.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:active.focus i,
.btn-tertiary.btn-danger.active.focus i,
.btn-tertiary + .dropdown-toggle.btn-danger.active.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.active.focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.active.focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.active.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.active.focus i,
.open > .dropdown-toggle.btn-tertiary.btn-danger.focus i,
.open > .dropdown-toggle.btn-tertiary + .dropdown-toggle.btn-danger.focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-primary.btn-danger.focus i,
.open > .dropdown-toggle.btn-primary + .btn-primary + .btn-secondary.btn-danger.focus i,
.open > .dropdown-toggle.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus i {
  color: var(--text-inverse);
}
.btn-tertiary.btn-danger:focus,
.btn-tertiary + .dropdown-toggle.btn-danger:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus,
.btn-tertiary.btn-danger.focus,
.btn-tertiary + .dropdown-toggle.btn-danger.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid var(--button-danger-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-tertiary.btn-danger:focus i,
.btn-tertiary + .dropdown-toggle.btn-danger:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger:focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus i,
.btn-tertiary.btn-danger.focus i,
.btn-tertiary + .dropdown-toggle.btn-danger.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus i {
  color: var(--text-inverse);
}
.btn-tertiary.btn-danger[disabled],
.btn-tertiary + .dropdown-toggle.btn-danger[disabled],
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled],
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled],
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled],
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled],
.btn-tertiary.btn-danger.disabled,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled,
fieldset[disabled] .btn-tertiary.btn-danger,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger,
.btn-tertiary.btn-danger[disabled]:hover,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled]:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled]:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled]:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled]:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled]:hover,
.btn-tertiary.btn-danger.disabled:hover,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled:hover,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled:hover,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled:hover,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled:hover,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled:hover,
fieldset[disabled] .btn-tertiary.btn-danger:hover,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger:hover,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger:hover,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger:hover,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover,
.btn-tertiary.btn-danger[disabled]:focus,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled]:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled]:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled]:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled]:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled]:focus,
.btn-tertiary.btn-danger.disabled:focus,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled:focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled:focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled:focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled:focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled:focus,
fieldset[disabled] .btn-tertiary.btn-danger:focus,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger:focus,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger:focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger:focus,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus,
.btn-tertiary.btn-danger[disabled].focus,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled].focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled].focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled].focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled].focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled].focus,
.btn-tertiary.btn-danger.disabled.focus,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled.focus,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled.focus,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled.focus,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled.focus,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled.focus,
fieldset[disabled] .btn-tertiary.btn-danger.focus,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger.focus,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger.focus,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger.focus,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus {
  background-color: var(--button-disabled);
  color: var(--text-disabled);
  border: 1px solid var(--button-disabled);
}
.btn-tertiary.btn-danger[disabled] i,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled] i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled] i,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled] i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled] i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled] i,
.btn-tertiary.btn-danger.disabled i,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled i,
fieldset[disabled] .btn-tertiary.btn-danger i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger i,
.btn-tertiary.btn-danger[disabled]:hover i,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled]:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled]:hover i,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled]:hover i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled]:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled]:hover i,
.btn-tertiary.btn-danger.disabled:hover i,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled:hover i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled:hover i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled:hover i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled:hover i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled:hover i,
fieldset[disabled] .btn-tertiary.btn-danger:hover i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger:hover i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:hover i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger:hover i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger:hover i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:hover i,
.btn-tertiary.btn-danger[disabled]:focus i,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled]:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled]:focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled]:focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled]:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled]:focus i,
.btn-tertiary.btn-danger.disabled:focus i,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled:focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled:focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled:focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled:focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled:focus i,
fieldset[disabled] .btn-tertiary.btn-danger:focus i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger:focus i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger:focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger:focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger:focus i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger:focus i,
.btn-tertiary.btn-danger[disabled].focus i,
.btn-tertiary + .dropdown-toggle.btn-danger[disabled].focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger[disabled].focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger[disabled].focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger[disabled].focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger[disabled].focus i,
.btn-tertiary.btn-danger.disabled.focus i,
.btn-tertiary + .dropdown-toggle.btn-danger.disabled.focus i,
.btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.disabled.focus i,
.btn-primary + .btn-primary + .btn-primary.btn-danger.disabled.focus i,
.btn-primary + .btn-primary + .btn-secondary.btn-danger.disabled.focus i,
.open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.disabled.focus i,
fieldset[disabled] .btn-tertiary.btn-danger.focus i,
fieldset[disabled] .btn-tertiary + .dropdown-toggle.btn-danger.focus i,
fieldset[disabled] .btn-primary + .btn-primary:not(.dropdown-toggle).btn-danger.focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-primary.btn-danger.focus i,
fieldset[disabled] .btn-primary + .btn-primary + .btn-secondary.btn-danger.focus i,
fieldset[disabled] .open > .btn-tertiary + .dropdown-toggle.btn-primary.btn-danger.focus i {
  color: var(--text-disabled);
}
.btn-primary,
.btn-secondary,
.btn-tertiary {
  padding-left: var(--spacing-05);
  padding-right: var(--spacing-10);
  gap: var(--spacing-07);
}
.btn-primary:has(i),
.btn-secondary:has(i),
.btn-tertiary:has(i) {
  padding-right: var(--spacing-05);
}
.btn-primary.btn-icon,
.btn-secondary.btn-icon,
.btn-tertiary.btn-icon {
  padding-right: 0;
}
.btn-primary.btn-icon span,
.btn-secondary.btn-icon span,
.btn-tertiary.btn-icon span {
  width: initial;
}
.btn-primary span,
.btn-secondary span,
.btn-tertiary span {
  justify-content: space-between;
  gap: var(--spacing-07);
  width: 100%;
  height: 100%;
}
.btn-ghost {
  background-color: transparent;
  color: var(--link-primary);
  border: 1px solid transparent;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
  padding-inline: var(--spacing-05);
  justify-content: center;
}
.btn-ghost:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-ghost:focus,
.btn-ghost.focus,
.btn-ghost:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-ghost i {
  color: var(--link-primary);
}
.btn-ghost:hover {
  color: var(--link-primary-hover);
  background-color: var(--background-hover);
  border: 1px solid var(--background-hover);
}
.btn-ghost:hover i {
  color: var(--link-primary-hover);
}
.btn-ghost:active,
.btn-ghost.active,
.open > .dropdown-toggle.btn-ghost {
  color: var(--link-primary-hover);
  background-color: var(--background-active);
  border: 1px solid transparent;
}
.btn-ghost:active i,
.btn-ghost.active i,
.open > .dropdown-toggle.btn-ghost i {
  color: var(--link-primary-hover);
}
.btn-ghost:active:hover,
.btn-ghost.active:hover,
.open > .dropdown-toggle.btn-ghost:hover,
.btn-ghost:active:focus,
.btn-ghost.active:focus,
.open > .dropdown-toggle.btn-ghost:focus,
.btn-ghost:active.focus,
.btn-ghost.active.focus,
.open > .dropdown-toggle.btn-ghost.focus {
  color: var(--link-primary-hover);
  background-color: var(--background-active);
  border-color: var(--background-active);
}
.btn-ghost:active:hover i,
.btn-ghost.active:hover i,
.open > .dropdown-toggle.btn-ghost:hover i,
.btn-ghost:active:focus i,
.btn-ghost.active:focus i,
.open > .dropdown-toggle.btn-ghost:focus i,
.btn-ghost:active.focus i,
.btn-ghost.active.focus i,
.open > .dropdown-toggle.btn-ghost.focus i {
  color: var(--link-primary-hover);
}
.btn-ghost:focus,
.btn-ghost.focus {
  color: var(--link-primary-hover);
  background-color: var(--background-active);
  border: 1px solid var(--background-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-ghost:focus i,
.btn-ghost.focus i {
  color: var(--link-primary-hover);
}
.btn-ghost[disabled],
.btn-ghost.disabled,
fieldset[disabled] .btn-ghost,
.btn-ghost[disabled]:hover,
.btn-ghost.disabled:hover,
fieldset[disabled] .btn-ghost:hover,
.btn-ghost[disabled]:focus,
.btn-ghost.disabled:focus,
fieldset[disabled] .btn-ghost:focus,
.btn-ghost[disabled].focus,
.btn-ghost.disabled.focus,
fieldset[disabled] .btn-ghost.focus {
  background-color: transparent;
  color: var(--text-disabled);
  border: 1px solid transparent;
}
.btn-ghost[disabled] i,
.btn-ghost.disabled i,
fieldset[disabled] .btn-ghost i,
.btn-ghost[disabled]:hover i,
.btn-ghost.disabled:hover i,
fieldset[disabled] .btn-ghost:hover i,
.btn-ghost[disabled]:focus i,
.btn-ghost.disabled:focus i,
fieldset[disabled] .btn-ghost:focus i,
.btn-ghost[disabled].focus i,
.btn-ghost.disabled.focus i,
fieldset[disabled] .btn-ghost.focus i {
  color: var(--text-disabled);
}
.btn-ghost span {
  gap: var(--spacing-03);
}
.btn-ghost.btn-danger,
.btn-ghost.btn-danger.btn-icon {
  background-color: transparent;
  color: var(--button-danger-secondary);
  border: 1px solid transparent;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-ghost.btn-danger:hover,
.btn-ghost.btn-danger.btn-icon:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-ghost.btn-danger:focus,
.btn-ghost.btn-danger.btn-icon:focus,
.btn-ghost.btn-danger.focus,
.btn-ghost.btn-danger.btn-icon.focus,
.btn-ghost.btn-danger:focus-visible,
.btn-ghost.btn-danger.btn-icon:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-ghost.btn-danger i,
.btn-ghost.btn-danger.btn-icon i {
  color: var(--button-danger-secondary);
}
.btn-ghost.btn-danger:hover,
.btn-ghost.btn-danger.btn-icon:hover {
  color: var(--text-inverse);
  background-color: var(--button-danger-hover);
  border: 1px solid var(--button-danger-hover);
}
.btn-ghost.btn-danger:hover i,
.btn-ghost.btn-danger.btn-icon:hover i {
  color: var(--text-inverse);
}
.btn-ghost.btn-danger:active,
.btn-ghost.btn-danger.btn-icon:active,
.btn-ghost.btn-danger.active,
.btn-ghost.btn-danger.btn-icon.active,
.open > .dropdown-toggle.btn-ghost.btn-danger,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid transparent;
}
.btn-ghost.btn-danger:active i,
.btn-ghost.btn-danger.btn-icon:active i,
.btn-ghost.btn-danger.active i,
.btn-ghost.btn-danger.btn-icon.active i,
.open > .dropdown-toggle.btn-ghost.btn-danger i,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon i {
  color: var(--text-inverse);
}
.btn-ghost.btn-danger:active:hover,
.btn-ghost.btn-danger.btn-icon:active:hover,
.btn-ghost.btn-danger.active:hover,
.btn-ghost.btn-danger.btn-icon.active:hover,
.open > .dropdown-toggle.btn-ghost.btn-danger:hover,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon:hover,
.btn-ghost.btn-danger:active:focus,
.btn-ghost.btn-danger.btn-icon:active:focus,
.btn-ghost.btn-danger.active:focus,
.btn-ghost.btn-danger.btn-icon.active:focus,
.open > .dropdown-toggle.btn-ghost.btn-danger:focus,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon:focus,
.btn-ghost.btn-danger:active.focus,
.btn-ghost.btn-danger.btn-icon:active.focus,
.btn-ghost.btn-danger.active.focus,
.btn-ghost.btn-danger.btn-icon.active.focus,
.open > .dropdown-toggle.btn-ghost.btn-danger.focus,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border-color: var(--button-danger-active);
}
.btn-ghost.btn-danger:active:hover i,
.btn-ghost.btn-danger.btn-icon:active:hover i,
.btn-ghost.btn-danger.active:hover i,
.btn-ghost.btn-danger.btn-icon.active:hover i,
.open > .dropdown-toggle.btn-ghost.btn-danger:hover i,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon:hover i,
.btn-ghost.btn-danger:active:focus i,
.btn-ghost.btn-danger.btn-icon:active:focus i,
.btn-ghost.btn-danger.active:focus i,
.btn-ghost.btn-danger.btn-icon.active:focus i,
.open > .dropdown-toggle.btn-ghost.btn-danger:focus i,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon:focus i,
.btn-ghost.btn-danger:active.focus i,
.btn-ghost.btn-danger.btn-icon:active.focus i,
.btn-ghost.btn-danger.active.focus i,
.btn-ghost.btn-danger.btn-icon.active.focus i,
.open > .dropdown-toggle.btn-ghost.btn-danger.focus i,
.open > .dropdown-toggle.btn-ghost.btn-danger.btn-icon.focus i {
  color: var(--text-inverse);
}
.btn-ghost.btn-danger:focus,
.btn-ghost.btn-danger.btn-icon:focus,
.btn-ghost.btn-danger.focus,
.btn-ghost.btn-danger.btn-icon.focus {
  color: var(--text-inverse);
  background-color: var(--button-danger-active);
  border: 1px solid var(--button-danger-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-ghost.btn-danger:focus i,
.btn-ghost.btn-danger.btn-icon:focus i,
.btn-ghost.btn-danger.focus i,
.btn-ghost.btn-danger.btn-icon.focus i {
  color: var(--text-inverse);
}
.btn-ghost.btn-danger[disabled],
.btn-ghost.btn-danger.btn-icon[disabled],
.btn-ghost.btn-danger.disabled,
.btn-ghost.btn-danger.btn-icon.disabled,
fieldset[disabled] .btn-ghost.btn-danger,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon,
.btn-ghost.btn-danger[disabled]:hover,
.btn-ghost.btn-danger.btn-icon[disabled]:hover,
.btn-ghost.btn-danger.disabled:hover,
.btn-ghost.btn-danger.btn-icon.disabled:hover,
fieldset[disabled] .btn-ghost.btn-danger:hover,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon:hover,
.btn-ghost.btn-danger[disabled]:focus,
.btn-ghost.btn-danger.btn-icon[disabled]:focus,
.btn-ghost.btn-danger.disabled:focus,
.btn-ghost.btn-danger.btn-icon.disabled:focus,
fieldset[disabled] .btn-ghost.btn-danger:focus,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon:focus,
.btn-ghost.btn-danger[disabled].focus,
.btn-ghost.btn-danger.btn-icon[disabled].focus,
.btn-ghost.btn-danger.disabled.focus,
.btn-ghost.btn-danger.btn-icon.disabled.focus,
fieldset[disabled] .btn-ghost.btn-danger.focus,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon.focus {
  background-color: transparent;
  color: var(--text-disabled);
  border: 1px solid transparent;
}
.btn-ghost.btn-danger[disabled] i,
.btn-ghost.btn-danger.btn-icon[disabled] i,
.btn-ghost.btn-danger.disabled i,
.btn-ghost.btn-danger.btn-icon.disabled i,
fieldset[disabled] .btn-ghost.btn-danger i,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon i,
.btn-ghost.btn-danger[disabled]:hover i,
.btn-ghost.btn-danger.btn-icon[disabled]:hover i,
.btn-ghost.btn-danger.disabled:hover i,
.btn-ghost.btn-danger.btn-icon.disabled:hover i,
fieldset[disabled] .btn-ghost.btn-danger:hover i,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon:hover i,
.btn-ghost.btn-danger[disabled]:focus i,
.btn-ghost.btn-danger.btn-icon[disabled]:focus i,
.btn-ghost.btn-danger.disabled:focus i,
.btn-ghost.btn-danger.btn-icon.disabled:focus i,
fieldset[disabled] .btn-ghost.btn-danger:focus i,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon:focus i,
.btn-ghost.btn-danger[disabled].focus i,
.btn-ghost.btn-danger.btn-icon[disabled].focus i,
.btn-ghost.btn-danger.disabled.focus i,
.btn-ghost.btn-danger.btn-icon.disabled.focus i,
fieldset[disabled] .btn-ghost.btn-danger.focus i,
fieldset[disabled] .btn-ghost.btn-danger.btn-icon.focus i {
  color: var(--text-disabled);
}
.btn-ghost.btn-icon {
  background-color: transparent;
  color: var(--icon-primary);
  border: 1px solid transparent;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.btn-ghost.btn-icon:hover {
  outline: 2px var(--outline-style) transparent;
}
.btn-ghost.btn-icon:focus,
.btn-ghost.btn-icon.focus,
.btn-ghost.btn-icon:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-ghost.btn-icon i {
  color: var(--icon-primary);
}
.btn-ghost.btn-icon:hover {
  color: var(--icon-primary);
  background-color: var(--background-hover);
  border: 1px solid var(--background-hover);
}
.btn-ghost.btn-icon:hover i {
  color: var(--icon-primary);
}
.btn-ghost.btn-icon:active,
.btn-ghost.btn-icon.active,
.open > .dropdown-toggle.btn-ghost.btn-icon {
  color: var(--icon-primary);
  background-color: var(--background-active);
  border: 1px solid transparent;
}
.btn-ghost.btn-icon:active i,
.btn-ghost.btn-icon.active i,
.open > .dropdown-toggle.btn-ghost.btn-icon i {
  color: var(--icon-primary);
}
.btn-ghost.btn-icon:active:hover,
.btn-ghost.btn-icon.active:hover,
.open > .dropdown-toggle.btn-ghost.btn-icon:hover,
.btn-ghost.btn-icon:active:focus,
.btn-ghost.btn-icon.active:focus,
.open > .dropdown-toggle.btn-ghost.btn-icon:focus,
.btn-ghost.btn-icon:active.focus,
.btn-ghost.btn-icon.active.focus,
.open > .dropdown-toggle.btn-ghost.btn-icon.focus {
  color: var(--icon-primary);
  background-color: var(--background-active);
  border-color: var(--background-active);
}
.btn-ghost.btn-icon:active:hover i,
.btn-ghost.btn-icon.active:hover i,
.open > .dropdown-toggle.btn-ghost.btn-icon:hover i,
.btn-ghost.btn-icon:active:focus i,
.btn-ghost.btn-icon.active:focus i,
.open > .dropdown-toggle.btn-ghost.btn-icon:focus i,
.btn-ghost.btn-icon:active.focus i,
.btn-ghost.btn-icon.active.focus i,
.open > .dropdown-toggle.btn-ghost.btn-icon.focus i {
  color: var(--icon-primary);
}
.btn-ghost.btn-icon:focus,
.btn-ghost.btn-icon.focus {
  color: var(--icon-primary);
  background-color: var(--background-active);
  border: 1px solid var(--background-active);
  box-shadow: inset 0 0 0 1px var(--focus), inset 0 0 0 2px var(--background, #ffffff);
}
.btn-ghost.btn-icon:focus i,
.btn-ghost.btn-icon.focus i {
  color: var(--icon-primary);
}
.btn-ghost.btn-icon[disabled],
.btn-ghost.btn-icon.disabled,
fieldset[disabled] .btn-ghost.btn-icon,
.btn-ghost.btn-icon[disabled]:hover,
.btn-ghost.btn-icon.disabled:hover,
fieldset[disabled] .btn-ghost.btn-icon:hover,
.btn-ghost.btn-icon[disabled]:focus,
.btn-ghost.btn-icon.disabled:focus,
fieldset[disabled] .btn-ghost.btn-icon:focus,
.btn-ghost.btn-icon[disabled].focus,
.btn-ghost.btn-icon.disabled.focus,
fieldset[disabled] .btn-ghost.btn-icon.focus {
  background-color: transparent;
  color: var(--icon-disabled);
  border: 1px solid transparent;
}
.btn-ghost.btn-icon[disabled] i,
.btn-ghost.btn-icon.disabled i,
fieldset[disabled] .btn-ghost.btn-icon i,
.btn-ghost.btn-icon[disabled]:hover i,
.btn-ghost.btn-icon.disabled:hover i,
fieldset[disabled] .btn-ghost.btn-icon:hover i,
.btn-ghost.btn-icon[disabled]:focus i,
.btn-ghost.btn-icon.disabled:focus i,
fieldset[disabled] .btn-ghost.btn-icon:focus i,
.btn-ghost.btn-icon[disabled].focus i,
.btn-ghost.btn-icon.disabled.focus i,
fieldset[disabled] .btn-ghost.btn-icon.focus i {
  color: var(--icon-disabled);
}
.btn-ghost.btn-icon.btn-toggletip {
  color: inherit;
}
.btn-icon {
  justify-content: center;
  padding: 0;
  align-items: center;
  aspect-ratio: 1 / 1;
  border-radius: 20px;
}
.btn-toggletip {
  height: auto;
  line-height: 1em;
  padding: 2px;
}
.btn-xs,
.btn[size=\"xs\"] {
  height: var(--spacing-06);
  line-height: var(--spacing-06);
}
.btn-sm,
.btn[size=\"sm\"] {
  height: var(--spacing-07);
  line-height: var(--spacing-07);
}
.btn-md,
.btn[size=\"md\"] {
  height: var(--spacing-08);
  line-height: var(--spacing-08);
}
.btn-lg,
.btn[size=\"lg\"] {
  height: var(--spacing-09);
  line-height: var(--spacing-09);
}
.btn-xl,
.btn[size=\"xl\"] {
  height: var(--spacing-10);
  line-height: var(--spacing-08);
  align-items: flex-start;
}
.btn-2xl,
.btn[size=\"2xl\"] {
  height: var(--spacing-11);
  line-height: var(--spacing-08);
  align-items: flex-start;
}
.dropdown-toggle,
.dropdown-menu > .active > a,
.open > a,
.btn-group .dropdown-toggle,
.btn-group.open .dropdown-toggle,
.navbar-toggle {
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.dropdown-toggle:hover,
.dropdown-menu > .active > a:hover,
.open > a:hover,
.btn-group .dropdown-toggle:hover,
.btn-group.open .dropdown-toggle:hover,
.navbar-toggle:hover {
  outline: 2px var(--outline-style) transparent;
}
.dropdown-toggle:focus,
.dropdown-menu > .active > a:focus,
.open > a:focus,
.btn-group .dropdown-toggle:focus,
.btn-group.open .dropdown-toggle:focus,
.navbar-toggle:focus,
.dropdown-toggle.focus,
.dropdown-menu > .active > a.focus,
.open > a.focus,
.btn-group .dropdown-toggle.focus,
.btn-group.open .dropdown-toggle.focus,
.navbar-toggle.focus,
.dropdown-toggle:focus-visible,
.dropdown-menu > .active > a:focus-visible,
.open > a:focus-visible,
.btn-group .dropdown-toggle:focus-visible,
.btn-group.open .dropdown-toggle:focus-visible,
.navbar-toggle:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-link {
  font-weight: normal;
  height: auto;
  line-height: normal;
  padding: 0;
}
.btn-link:hover,
.btn-link:focus {
  text-decoration: none;
}
.btn-info {
  color: #3c4650;
}
.btn-info:hover {
  color: #3c4650;
}
.btn-back {
  gap: var(--spacing-02);
  font-size: 92%;
}
.btn-back i {
  order: unset;
}
.modal-footer .modal-form-buttons {
  display: flex;
  justify-content: flex-end;
  gap: 1px;
  margin: -15px;
}
.modal-footer .modal-form-buttons .btn {
  align-items: flex-start;
  height: var(--spacing-10);
  width: var(--spacing-13);
  border-radius: 0;
}
.modal-footer .modal-form-buttons .btn:first-child {
  border-radius: 0 0 0 calc(var(--border-radius-md) + 3px);
}
.modal-footer .modal-form-buttons .btn:last-child {
  border-radius: 0 0 calc(var(--border-radius-md) + 3px) 0;
}
.modal-footer .modal-form-buttons .btn:only-child {
  border-radius: 0 0 calc(var(--border-radius-md) + 3px) calc(var(--border-radius-md) + 3px);
  flex-grow: 1;
}
.modal-footer .modal-form-buttons .btn + .btn {
  margin: 0;
}
.modal-footer .modal-form-buttons:has(.btn:nth-child(2)):not(:has(.btn:nth-child(3))) .btn {
  flex-grow: 0.5;
}
.modal-footer .modal-form-buttons:has(.btn:nth-child(3)) .btn {
  min-width: 25%;
}
.footer-buttons {
  margin-bottom: -15px;
}
.footer-buttons .btn {
  align-items: flex-start;
  min-width: 0;
  width: var(--spacing-13);
  border-radius: 0;
}
.footer-buttons .btn:first-child {
  border-radius: 0 0 0 var(--border-radius-md);
}
.footer-buttons .btn:last-child {
  border-radius: 0 0 var(--border-radius-md) 0;
}
.footer-buttons .btn:only-child {
  border-radius: 0 0 calc(var(--border-radius-md) + 3px) calc(var(--border-radius-md) + 3px);
  flex-grow: 1;
}
.footer-buttons .btn + .btn {
  margin: 0;
}
.footer-buttons:has(.btn:nth-child(2)):not(:has(.btn:nth-child(3))) .btn {
  flex-grow: 0.5;
}
.btn-group .btn ~ .btn,
.btn-group .btn ~ .btn-group,
.btn-group .btn-group ~ .btn,
.btn-group .btn-group ~ .btn-group {
  margin-left: 0px;
}
.btn-group > .btn-primary + .dropdown-toggle {
  margin-left: 1px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.alert-dismissible .close,
.alert-dismissible .close {
  top: -1px;
}
.alert {
  border-width: 0;
  color: var(--text-primary);
  display: flex;
  flex-wrap: nowrap;
  gap: 3px;
  background-color: var(--layer);
  border-radius: var(--border-radius-sm);
  position: relative;
  overflow: hidden;
}
.alert:after {
  display: flex;
  content: \"\";
  width: 5px;
  height: 100%;
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}
.alert[class*=\"col-\"] {
  padding-left: 25px;
}
.alert.alert-success:not([class*=\"col-\"]):before,
.alert.alert-info:not([class*=\"col-\"]):before,
.alert.alert-warning:not([class*=\"col-\"]):before,
.alert.alert-danger:not([class*=\"col-\"]):before {
  font-family: 'remixicon';
  display: inline-flex;
  position: relative;
  font-size: 22px;
  padding: 0px 3px;
  margin-right: 10px;
  line-height: 0.5em;
  top: 0.15em;
}
.alert.alert-success.notification,
.alert.alert-info.notification,
.alert.alert-warning.notification,
.alert.alert-danger.notification {
  position: relative;
  border-radius: 0;
}
.alert.alert-success.notification:before,
.alert.alert-info.notification:before,
.alert.alert-warning.notification:before,
.alert.alert-danger.notification:before {
  position: absolute;
  top: 20px;
  left: 10px;
  font-size: 18px;
}
.alert.alert-success.notification .close,
.alert.alert-info.notification .close,
.alert.alert-warning.notification .close,
.alert.alert-danger.notification .close {
  position: absolute;
  top: 10px;
  right: 5px;
}
.alert .close {
  font-size: 13px;
  position: absolute;
  right: 12px;
  top: 18px;
}
.alert:has(.btn) {
  align-items: center;
}
.alert-success {
  background-color: var(--notification-background-success);
}
.alert-success:after {
  background-color: var(--support-success);
}
.alert-success:not([class*=\"col-\"]):before {
  content: '\\EB80';
  color: var(--support-success);
}
.alert-info {
  background-color: var(--notification-background-info);
}
.alert-info:after {
  background-color: var(--support-info);
}
.alert-info:not([class*=\"col-\"]):before {
  content: '\\F448';
  color: var(--support-info);
}
.alert-warning {
  background-color: var(--notification-background-warning);
}
.alert-warning:after {
  background-color: var(--support-warning);
}
.alert-warning:not([class*=\"col-\"]):before {
  content: '\\ECA0';
  color: var(--support-warning);
}
.alert-danger {
  background-color: var(--notification-background-error);
}
.alert-danger:after {
  background-color: var(--support-error);
}
.alert-danger:not([class*=\"col-\"]):before {
  content: '\\ED94';
  color: var(--support-error);
}
.alert-primary {
  background: #aeb6d7;
}
.alert-secondary {
  background: #feedcb;
}
.alert-tertiary {
  background: #a3e2e4;
}
.alert-growl {
  background: var(--layer-translucent-inverse);
  color: var(--text-inverse);
  border-radius: 0;
  border-left: 4px solid var(--border-interactive);
  border-top: none;
  border-right: none;
  border-bottom: none;
  backdrop-filter: blur(4px);
}
.alert-growl a {
  font-weight: 700;
}
.alert-growl a,
.alert-growl a:hover {
  color: var(--text-inverse);
}
.alert-growl--warning {
  border-left-color: #FDB933;
}
.alert-growl--warning a {
  color: #FDB933;
}
.alert-growl--warning a:hover {
  color: #fedc98;
}
.alert-growl--error {
  border-left-color: #F86B4F;
}
.alert-growl--error a {
  color: #F86B4F;
}
.alert-growl--error a:hover {
  color: #fcbdb1;
}
.alert-growl-container {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 100000;
}
.alert-growl-container.alert-offset {
  top: 50px;
}
.alert-growl-container .alert-growl {
  margin-bottom: 5px;
}
.alert-growl-buttons .btn + .btn {
  margin-left: 5px;
}
.alert-growl .close {
  font-size: 13px;
  color: var(--text-inverse);
  margin-left: 10px;
  font-weight: normal;
  position: relative;
  order: 2;
  top: unset;
  right: unset;
}
.xdsoft_datetimepicker {
  background: var(--layer);
  border-bottom: 1px solid var(--layer);
  border-left: 1px solid var(--layer);
  border-right: 1px solid var(--layer);
  border-top: 1px solid var(--layer);
  color: var(--text-secondary);
  border-radius: var(--border-radius-md);
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: var(--background-brand);
  color: var(--text-on-color);
  box-shadow: none;
}
.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  background: var(--layer-hover) !important;
  color: var(--text-primary) !important;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  background: transparent;
  color: var(--text-secondary);
}
.xdsoft_datetimepicker .xdsoft_calendar td {
  background: transparent;
  border-radius: 20px;
  color: var(--text-secondary);
  padding: 10px;
  transition: var(--transition-all-productive);
}
.xdsoft_datetimepicker .xdsoft_calendar td,
.xdsoft_datetimepicker .xdsoft_calendar th {
  text-align: center;
  height: 38px;
  border: none;
}
.xdsoft_datetimepicker .xdsoft_datepicker {
  width: 290px;
  margin-top: 8px;
}
.xdsoft_datetimepicker .xdsoft_calendar td > div {
  padding-right: 0;
}
.xdsoft_datetimepicker .xdsoft_calendar table {
  border-collapse: separate;
  border-spacing: 3px;
}
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_today_button,
.xdsoft_datetimepicker .xdsoft_label i {
  transition: var(--transition-all-productive);
}
.xdsoft_datetimepicker .xdsoft_today_button {
  background-color: var(--text-primary);
  background-repeat: no-repeat;
  -webkit-mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z%27/%3E%3C/svg%3E\");
  -webkit-mask-repeat: no-repeat;
  -webkit-mask-position: 0 6px;
  mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM11 13V17H6V13H11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z%27/%3E%3C/svg%3E\");
  mask-repeat: no-repeat;
  mask-position: 0 6px;
  margin-left: 12px;
  background-image: none;
}
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next {
  background-color: var(--text-primary);
  background-repeat: no-repeat;
  -webkit-mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M8.36853 12L13.1162 3.03212L14.8838 3.9679L10.6315 12L14.8838 20.0321L13.1162 20.9679L8.36853 12Z%27 fill=%27black%27/%3E%3C/svg%3E\");
  -webkit-mask-repeat: no-repeat;
  mask-image: url(\"data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27%3E%3Cpath d=%27M8.36853 12L13.1162 3.03212L14.8838 3.9679L10.6315 12L14.8838 20.0321L13.1162 20.9679L8.36853 12Z%27 fill=%27black%27/%3E%3C/svg%3E\");
  mask-repeat: no-repeat;
  background-position: 0 6px;
  bottom: -5px;
  background-image: none;
}
.xdsoft_datetimepicker .xdsoft_next {
  transform: scaleX(-1);
}
.xdsoft_datetimepicker .xdsoft_label i {
  margin-left: 2px;
}
.xdsoft_datetimepicker .xdsoft_label {
  text-wrap: nowrap;
  background-color: var(--layer);
}
.xdsoft_datetimepicker .xdsoft_label:hover > span {
  text-decoration: none;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
  padding: 6px 10px 6px 8px;
  text-decoration: none !important;
  transition: var(--transition-all-productive);
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
  color: var(--text-primary);
  background: var(--layer-hover);
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
  box-shadow: none;
  color: var(--text-on-color);
  background: var(--background-brand);
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
  max-height: 180px;
  width: 130px;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
  background: var(--layer-02);
  border-top: none;
  height: 32px;
  line-height: 32px;
  color: var(--text-secondary);
  transition: var(--transition-all-productive);
}
.content-body .cke_chrome {
  background: #f8f8f8;
  border: 1px solid #f0f0f0;
}
.content-body .cke_bottom,
.content-body .cke_top {
  background: #f8f8f8;
}
.ck-mentions span.custom-item {
  color: #000000;
}
.ck-mentions span.custom-item.ck-on,
.ck-mentions span.custom-item.ck-on span.custom-item-id {
  color: #ffffff;
}
.ck-mentions span.custom-item span.custom-item-id {
  margin-left: 10px;
  font-size: smaller;
  color: #cccccc;
}
.ck.ck-dropdown__panel {
  max-height: 180px;
  overflow-y: auto;
}
.ck-editor__editable:not(.ck-editor__nested-editable) {
  min-height: 200px;
}
.ck.ck-balloon-panel.ck-balloon-panel_caret_se.ck-balloon-panel_visible {
  z-index: 99999 !important;
}
.ck-body-wrapper {
  position: fixed;
  z-index: 99999;
}
.ck.ck-content.ck-editor__editable a {
  text-decoration: underline;
  color: var(--link-primary);
}
a.media {
  display: block;
}
.media > a {
  display: block;
}
.media.read {
  opacity: 0.8;
}
.media.read a {
  color: #47535f;
}
.media.new {
  background-color: #f6f7f8;
}
.notification .media-body {
  display: table-cell;
}
.media-body {
  display: block;
}
.media-heading {
  display: block;
}
.media-heading > .bullet {
  margin-top: -1px;
}
.media-list.media-list-feed {
  position: relative;
}
.media-list.media-list-feed .media {
  overflow: visible;
}
.media-list.media-list-feed .media:first-of-type > .media-object > .figure {
  background-color: var(--background-inverse);
  color: var(--text-inverse);
  transition: var(--transition-all-productive);
}
.media-list.media-list-feed .media:first-of-type > .media-object > .figure:hover {
  background-color: var(--background-inverse-hover);
}
.media-list.media-list-feed .media > .media-object {
  position: relative;
  width: 28px;
  text-align: center;
  margin-right: 20px;
}
.media-list.media-list-feed .media > .media-object:before {
  content: '';
  position: absolute;
  top: -200%;
  bottom: -200%;
  width: 1px;
  left: 50%;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9InJnYigyNTUsIDI1NSwgMjU1KSIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSJyZ2IoMjI5LCAyMjksIDIyOSkiIHN0b3Atb3BhY2l0eT0iMCIvPjwvbGluZWFyR3JhZGllbnQ+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNsZXNzaGF0LWdlbmVyYXRlZCkiIC8+PC9zdmc+);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, var(--layer) 5%, var(--layer) 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, var(--layer) 5%, var(--layer) 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, var(--layer) 5%, var(--layer) 90%, rgba(229, 229, 229, 0) 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, var(--layer) 5%, var(--layer) 90%, rgba(229, 229, 229, 0) 100%);
}
.media-list.media-list-feed .media > .media-object > .figure {
  position: relative;
  z-index: 5;
  display: inline-block;
  width: 14px;
  height: 14px;
  text-align: center;
  font-size: 12px;
  border-radius: 20px;
  background-color: var(--layer);
  transition: var(--transition-all-productive);
  left: 5px;
}
.media-list.media-list-feed .media > .media-object > .figure:hover {
  background-color: var(--layer-hover);
}
.media-list.media-list-feed .media > .media-object > .figure.featured {
  width: 30px;
  height: 20px;
  line-height: 20px;
  left: 0;
}
.media-list.media-list-feed .media:first-child > .media-object:before {
  top: 0;
}
.media-list.media-list-contact > .media-heading {
  padding: 15px 15px 5px;
  font-weight: 600;
  font-size: 12px;
  margin-bottom: 0;
}
.media-list.media-list-contact > .media {
  margin: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
.media-list.media-list-contact > .media a {
  padding: 10px 15px;
}
.media-list.media-list-contact > .media a:hover,
.media-list.media-list-contact > .media a:focus {
  background-color: transparent;
}
.media-list.media-list-bubble > .media {
  padding: 15px;
}
.media-list.media-list-bubble > .media:after {
  display: none;
}
.media-list.media-list-bubble > .media .media-object {
  position: relative;
  float: left;
  margin-right: 15px;
}
.media-list.media-list-bubble > .media .media-object:after {
  content: \"\";
  position: absolute;
  top: 7px;
  right: -18px;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 10px 10px 10px 0;
  border-color: transparent #f3f3f3 transparent transparent;
}
.media-list.media-list-bubble > .media .media-body .media-text {
  display: inline-block;
  padding: 8px;
  color: #47535f;
  background-color: #f3f3f3;
  border-radius: 10.8px;
}
.media-list.media-list-bubble > .media.media-right .media-object {
  float: right;
  margin-left: 15px;
  margin-right: 0px;
}
.media-list.media-list-bubble > .media.media-right .media-object:after {
  left: -18px;
  right: auto;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #4E5D9D;
}
.media-list.media-list-bubble > .media.media-right .media-body {
  text-align: right;
}
.media-list.media-list-bubble > .media.media-right .media-body .media-text {
  color: #f2f2f2;
  background-color: #4E5D9D;
}
.extra-menu {
  height: 60px;
  padding-top: 20px;
  position: absolute;
  right: 15px;
}
.extra-menu a {
  font-size: 1.1em;
  color: rgba(255, 255, 255, 0.55);
}
.extra-menu a:hover {
  color: #fff;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin: 0;
  display: flex;
  flex-direction: column;
}
@media (min-width: 768px) {
  .container {
    max-width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.row > * {
  box-sizing: border-box;
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
}
.row-no-gutters {
  margin-right: 0;
  margin-left: 0;
  display: flex;
  flex-wrap: wrap;
}
.row-no-gutters [class*=\"col-\"] {
  padding-right: 0;
  padding-left: 0;
}
[class*=\"col-\"] {
  display: flex;
  flex-direction: column;
}
[class*=\"col-\"] label {
  align-self: start;
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11,
  .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
.list-group {
  border: 1px solid var(--border-inverse);
  border-radius: clamp(4px, var(--border-radius-md), 12px);
  overflow: hidden;
}
.nav-justified .list-group-item.btn {
  border: 1px solid transparent;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.nav-justified .list-group-item.btn:hover {
  outline: 2px var(--outline-style) transparent;
}
.nav-justified .list-group-item.btn:focus,
.nav-justified .list-group-item.btn.focus,
.nav-justified .list-group-item.btn:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.nav-justified .list-group-item.btn:first-child {
  border-top-left-radius: clamp(4px, var(--border-radius-md), 12px);
  border-bottom-left-radius: clamp(4px, var(--border-radius-md), 12px);
}
.nav-justified .list-group-item.btn:last-child {
  border-top-right-radius: clamp(4px, var(--border-radius-md), 12px);
  border-bottom-right-radius: clamp(4px, var(--border-radius-md), 12px);
}
.list-group-item {
  transition: var(--transition-all-productive);
  border: 0;
  padding: 0;
  vertical-align: middle;
}
.list-group-item:first-child > a {
  border-top-left-radius: clamp(4px, var(--border-radius-md), 12px);
  border-top-right-radius: clamp(4px, var(--border-radius-md), 12px);
}
.list-group-item:last-child > a {
  border-bottom-left-radius: clamp(4px, var(--border-radius-md), 12px);
  border-bottom-right-radius: clamp(4px, var(--border-radius-md), 12px);
}
.list-group-item > a,
.list-group-item > label,
.list-group-item .list-group-item-text {
  position: relative;
  z-index: 1;
  display: block;
  padding: 10px 15px;
  cursor: pointer;
  color: var(--text-secondary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.list-group-item > a:hover,
.list-group-item > label:hover,
.list-group-item .list-group-item-text:hover {
  outline: 2px var(--outline-style) transparent;
}
.list-group-item > a:focus,
.list-group-item > label:focus,
.list-group-item .list-group-item-text:focus,
.list-group-item > a.focus,
.list-group-item > label.focus,
.list-group-item .list-group-item-text.focus,
.list-group-item > a:focus-visible,
.list-group-item > label:focus-visible,
.list-group-item .list-group-item-text:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.list-group-item > a input,
.list-group-item > label input,
.list-group-item .list-group-item-text input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  margin: 0;
  padding: 0;
  border: none;
  cursor: pointer;
}
.list-group-item:hover {
  background-color: var(--layer-hover);
}
.list-group-item:hover > a {
  color: var(--text-primary);
}
a.list-group-item:hover,
a.list-group-item:focus {
  z-index: 2;
}
label.list-group-item {
  color: var(--text-secondary);
}
label.list-group-item .list-group-item-heading {
  color: #333;
}
label.list-group-item:hover,
label.list-group-item:focus {
  text-decoration: none;
  color: var(--text-primary);
  background-color: var(--layer-hover);
}
.ds-list-group {
  counter-reset: item;
  list-style-type: none;
  padding-inline-start: 35px;
}
.ds-list-group > li {
  counter-increment: item;
  position: relative;
  padding: 10px 0px;
}
.ds-list-group > li:not(:first-child) {
  border-top: 1px solid var(--border-subtle);
}
.ds-list-group > li:before {
  position: absolute;
  background: var(--layer);
  border-radius: 50%;
  left: -35px;
  width: 16px;
  height: 16px;
  text-align: center;
  line-height: 16px;
  font-size: calc(16px - 5px);
  color: var(--icon-secondary);
  transition: var(--transition-all-productive);
  top: 11.8px;
  vertical-align: middle;
}
.ds-list-group > li:hover:before {
  transform: scale(1.2);
}
.ds-list-alphabet > li:before {
  content: counter(item, upper-alpha);
}
.ds-list-check > li:before {
  content: \"\\EB7B\";
  font-family: 'remixicon';
}
.ds-list-none {
  padding-inline-start: 0;
}
.ds-list-bullet {
  list-style-type: disc;
  padding-inline-start: 18px;
}
.caret {
  margin-top: -1px;
}
.dropdown-menu {
  padding: 0;
  overflow: hidden;
  border-radius: var(--border-radius-md);
  backdrop-filter: blur(6px);
  background-color: var(--layer-translucent);
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06);
}
.dropdown-menu .divider {
  margin: 5px 0;
}
.dropdown-menu .panel {
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
  border-width: 0;
  margin-bottom: 0;
  margin-top: -5px;
  margin-bottom: -5px;
}
.dropdown-menu .panel .panel-heading {
  border-radius: 0;
}
.dropdown-menu > li:first-child > a {
  border-top-left-radius: var(--border-radius-md);
  border-top-right-radius: var(--border-radius-md);
}
.dropdown-menu > li:last-child > a {
  border-bottom-left-radius: var(--border-radius-md);
  border-bottom-right-radius: var(--border-radius-md);
}
.dropdown-menu > li > a {
  display: inline-flex;
  inline-size: 100%;
  align-items: center;
  height: var(--spacing-08);
  position: relative;
  z-index: 1;
  padding: 0 var(--spacing-05);
  outline: 2px solid transparent;
  outline-offset: -2px;
  justify-content: space-between;
}
.dropdown-menu > li > a span {
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  gap: var(--spacing-07);
}
.dropdown-menu > li > a .fa,
.dropdown-menu > li > a i {
  min-width: var(--spacing-05);
  order: 2;
  text-align: center;
}
.dropdown-menu > li > a [class^=\"ri-\"],
.dropdown-menu > li > a [class*=\" ri-\"] {
  font-size: 1.25em;
  vertical-align: -0.05em;
  line-height: 0;
  padding-left: var(--spacing-01);
}
.dropdown-menu > li > a:focus {
  outline: 2px solid var(--focus);
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  z-index: 2;
}
.dropdown-menu > li > a:focus {
  outline: 2px solid var(--focus);
}
.dropdown-menu > li > a:active {
  background-color: var(--layer-active);
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: var(--text-primary);
  background-color: var(--layer-selected);
}
.dropdown-menu > li a.danger:hover,
.dropdown-menu > li a.danger:focus {
  background-color: var(--support-error);
  color: var(--text-on-color);
}
.scrollable-menu {
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
}
ul.dropdown-menu-form {
  padding: 0 5px 0 30px;
  max-height: 300px;
  overflow-y: auto;
}
.dropdown-toggle {
  aspect-ratio: 1 / 1;
  justify-content: center;
  align-items: center;
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.dropdown-toggle:hover {
  outline: 2px var(--outline-style) transparent;
}
.dropdown-toggle:focus,
.dropdown-toggle.focus,
.dropdown-toggle:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.dropdown-header {
  margin: 32px 16px 8px 16px;
  border-bottom: 1px solid var(--border-strong);
  padding: 0 0 4px;
  color: var(--text-secondary);
  font-size: var(--typography-utility-productive);
}
.nav > li > a {
  font-weight: normal;
}
.nav > li > a .text,
.nav > li > a .icon,
.nav > li > a .arrow {
  line-height: 18px;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: transparent;
}
.nav .nav-divider {
  background-color: rgba(0, 0, 0, 0.05);
}
.nav .nav-heading {
  font-size: 12px;
  font-weight: 600;
  padding: 10px 18px;
  padding-bottom: 5px;
  color: #a0acb8;
}
.nav-tabs {
  display: flex;
  flex-wrap: nowrap;
  overflow: hidden;
  position: relative;
  text-wrap: nowrap;
  scroll-behavior: smooth;
}
.nav-tabs > li > a {
  line-height: 20px;
  color: var(--text-secondary);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
.nav-tabs > li > a:hover {
  outline: 2px var(--outline-style) transparent;
}
.nav-tabs > li > a:focus,
.nav-tabs > li > a.focus,
.nav-tabs > li > a:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.nav-tabs > li > a:hover {
  color: var(--text-primary);
}
.nav-tabs > li > a:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 2px;
  background-color: transparent;
}
.nav-tabs > li.active > a {
  overflow: hidden;
  border-top-color: transparent;
  font-weight: bold;
}
.nav-tabs > li.active > a:after {
  background-color: var(--border-interactive);
}
.nav-tabs.nav-tabs-line > li > a {
  background-color: transparent;
  padding: 6px 16px;
  margin-right: -2px;
  border-radius: 0;
}
.nav-tabs.nav-tabs-line > li > a:after {
  top: unset;
  bottom: 0;
  background-color: var(--layer-accent);
  transition: var(--transition-all-productive);
}
.nav-tabs.nav-tabs-line > li > a:hover {
  background-color: transparent;
  color: var(--text-primary);
}
.nav-tabs.nav-tabs-line > li > a:hover:after {
  background-color: var(--layer-accent-hover);
}
.nav-tabs.nav-tabs-line > li.active > a {
  background-color: transparent;
}
.nav-tabs.nav-tabs-line > li.active > a:after {
  background-color: var(--border-interactive);
}
.nav-tabs.nav-tabs-contained > li > a {
  background-color: var(--layer-accent);
  border-radius: var(--border-radius-sm) var(--border-radius-sm) 0 0;
}
.nav-tabs.nav-tabs-contained > li > a:hover {
  background-color: var(--layer-accent-hover);
}
.nav-tabs.nav-tabs-contained > li.active > a {
  background-color: var(--layer);
}
.nav-tabs.nav-tabs-contained > li.disabled {
  cursor: not-allowed;
  color: var(--text-disabled);
}
.nav-tabs.nav-tabs-contained > li.disabled > a {
  background-color: var(--button-disabled);
  pointer-events: none;
}
@media (min-width: 1200px) {
  .nav-tabs {
    flex-wrap: nowrap;
  }
}
/*
.tab-content {
  > .tab-pane {
    border: 1px solid @nav-tabs-active-link-hover-border-color;
    border-top-width: 0;
    border-bottom-right-radius: @nav-pills-border-radius;
    border-bottom-left-radius: @nav-pills-border-radius;
  }
}
*/
.stats-menu__content.tab-content {
  display: flex;
  justify-content: center;
  align-items: center;
}
.stats-menu__content.tab-content > .tab-pane {
  width: 100%;
}
.nav-pills > li + li {
  margin-left: 5px;
}
.stats-menu {
  display: flex;
  justify-content: space-between;
  flex-wrap: nowrap;
}
.stats-menu.stats-menu .date-range {
  padding: 5px;
  border-top-left-radius: 3px;
}
.stats-menu.stats-menu + div {
  min-height: 410px;
}
/* nav-tabs-wrapper styles */
.nav-tabs-wrapper {
  position: relative;
  overflow: hidden;
  margin-bottom: -1px;
}
.scroll-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  border: none;
  background-color: var(--layer-accent);
  cursor: pointer;
  z-index: 10;
  display: none;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  padding: 0;
  inline-size: 40px;
  aspect-ratio: 1 / 1;
}
.scroll-btn:before {
  position: absolute;
  z-index: 1;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), var(--background, #ffffff));
  block-size: 100%;
  content: \"\";
  inline-size: 0.5rem;
  inset-inline-end: -0.5rem;
  background-image: linear-gradient(to right, rgba(255, 255, 255, 0), var(--layer-accent));
}
.left-btn {
  inset-inline-start: 0;
}
.left-btn:before {
  transform: scaleX(-1);
}
.right-btn {
  inset-inline-end: 0;
}
.nav-tabs-wrapper.show-scroll-buttons .scroll-btn:disabled {
  display: none;
}
.nav-tabs-wrapper.show-scroll-buttons .scroll-btn {
  display: flex;
}
.notes {
  overflow: hidden;
  padding: 0px;
  list-style-type: none;
}
.notes > .note-single .icon-wrapper {
  width: 50px;
  aspect-ratio: 1 / 1;
  background-color: var(--layer-02);
  border-top-left-radius: var(--border-radius-md);
  border-bottom-left-radius: var(--border-radius-md);
}
.notes > .note-single .tile {
  background-color: var(--layer-02);
  border-top-left-radius: 0;
}
.bullet {
  display: inline-block;
  vertical-align: middle;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background-color: #a0acb8;
}
.bullet.bullet-primary {
  background-color: #4E5D9D;
}
.bullet.bullet-success {
  background-color: #00B49C;
}
.bullet.bullet-info {
  background-color: #35B4B9;
}
.bullet.bullet-warning {
  background-color: #FDB933;
}
.bullet.bullet-danger {
  background-color: #F86B4F;
}
.label {
  display: inline-flex;
  font-size: 11px;
  font-weight: 600;
  gap: 6px;
  line-height: 1;
  height: 24px;
  padding: 0 var(--spacing-03);
  border-radius: 100px;
  min-width: 30px;
  justify-content: center;
  align-items: center;
  transition: var(--transition-all-productive);
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.label.label-category {
  min-width: auto;
  aspect-ratio: 1/1;
}
a.label,
.label > a {
  color: inherit;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
a.label:hover,
.label > a:hover,
a.label:focus,
.label > a:focus {
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label[size=\"sm\"] {
  height: 18px;
  padding: 0 var(--spacing-03);
}
.label[size=\"md\"] {
  height: 24px;
  padding: 0 var(--spacing-03);
}
.label[size=\"lg\"] {
  height: 32px;
  padding: 0 var(--spacing-04);
}
.label i {
  font-size: calc(1em + 2px);
  font-weight: normal;
}
.label-gray {
  background-color: var(--label-background-gray);
  color: var(--label-color-gray);
}
.label-cool-gray {
  background-color: var(--label-background-cool-gray);
  color: var(--label-color-cool-gray);
}
.label-warm-gray {
  background-color: var(--label-background-warm-gray);
  color: var(--label-color-warm-gray);
}
.label-red {
  background-color: var(--label-background-red);
  color: var(--label-color-red);
}
.label-magenta {
  background-color: var(--label-background-magenta);
  color: var(--label-color-magenta);
}
.label-purple {
  background-color: var(--label-background-purple);
  color: var(--label-color-purple);
}
.label-blue {
  background-color: var(--label-background-blue);
  color: var(--label-color-blue);
}
.label-cyan {
  background-color: var(--label-background-cyan);
  color: var(--label-color-cyan);
}
.label-teal {
  background-color: var(--label-background-teal);
  color: var(--label-color-teal);
}
.label-green {
  background-color: var(--label-background-green);
  color: var(--label-color-green);
}
.label-primary {
  background-color: var(--label-background-brand);
  color: var(--label-color-brand);
}
.label-outline,
.label-selectable {
  background-color: transparent;
  color: var(--text-primary);
}
.label-outline,
.label-selectable,
.label-outline:hover,
.label-selectable:hover {
  border: 1px solid var(--background-inverse);
}
.label-selectable.active {
  background-color: var(--layer-selected-inverse);
  color: var(--text-inverse);
  border-color: var(--layer-selected-inverse);
}
.label-high-contrast {
  background-color: var(--background-inverse);
  color: var(--text-inverse);
}
.label[href],
.label:has(> a) {
  border: 1px solid #00000017;
}
.label[href].label-gray,
.label:has(> a).label-gray {
  border: 1px solid var(--label-border-gray);
  color: var(--label-color-gray);
}
.label[href].label-gray:hover,
.label:has(> a).label-gray:hover {
  background-color: var(--label-background-hover-gray);
}
.label[href].label-cool-gray,
.label:has(> a).label-cool-gray {
  border: 1px solid var(--label-border-cool-gray);
  color: var(--label-color-cool-gray);
}
.label[href].label-cool-gray:hover,
.label:has(> a).label-cool-gray:hover {
  background-color: var(--label-background-hover-cool-gray);
}
.label[href].label-warm-gray,
.label:has(> a).label-warm-gray {
  border: 1px solid var(--label-border-warm-gray);
  color: var(--label-color-warm-gray);
}
.label[href].label-warm-gray:hover,
.label:has(> a).label-warm-gray:hover {
  background-color: var(--label-background-hover-warm-gray);
}
.label[href].label-red,
.label:has(> a).label-red {
  border: 1px solid var(--label-border-red);
  color: var(--label-color-red);
}
.label[href].label-red:hover,
.label:has(> a).label-red:hover {
  background-color: var(--label-background-hover-red);
}
.label[href].label-magenta,
.label:has(> a).label-magenta {
  border: 1px solid var(--label-border-magenta);
  color: var(--label-color-magenta);
}
.label[href].label-magenta:hover,
.label:has(> a).label-magenta:hover {
  background-color: var(--label-background-hover-magenta);
}
.label[href].label-purple,
.label:has(> a).label-purple {
  border: 1px solid var(--label-border-purple);
  color: var(--label-color-purple);
}
.label[href].label-purple:hover,
.label:has(> a).label-purple:hover {
  background-color: var(--label-background-hover-purple);
}
.label[href].label-blue,
.label:has(> a).label-blue {
  border: 1px solid var(--label-border-blue);
  color: var(--label-color-blue);
}
.label[href].label-blue:hover,
.label:has(> a).label-blue:hover {
  background-color: var(--label-background-hover-blue);
}
.label[href].label-cyan,
.label:has(> a).label-cyan {
  border: 1px solid var(--label-border-cyan);
  color: var(--label-color-cyan);
}
.label[href].label-cyan:hover,
.label:has(> a).label-cyan:hover {
  background-color: var(--label-background-hover-cyan);
}
.label[href].label-teal,
.label:has(> a).label-teal {
  border: 1px solid var(--label-border-teal);
  color: var(--label-color-teal);
}
.label[href].label-teal:hover,
.label:has(> a).label-teal:hover {
  background-color: var(--label-background-hover-teal);
}
.label[href].label-green,
.label:has(> a).label-green {
  border: 1px solid var(--label-border-green);
  color: var(--label-color-green);
}
.label[href].label-green:hover,
.label:has(> a).label-green:hover {
  background-color: var(--label-background-hover-green);
}
.label[href].label-primary,
.label:has(> a).label-primary {
  border: 1px solid var(--label-border-brand);
  color: var(--label-color-brand);
}
.label[href].label-primary:hover,
.label:has(> a).label-primary:hover {
  background-color: var(--label-background-hover-brand);
}
.label-default {
  background-color: #a0acb8;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #8392a2;
}
.label-success {
  background-color: var(--support-success);
  color: var(--text-inverse);
}
.label-info {
  background-color: var(--support-info);
  color: var(--text-inverse);
}
.label-warning {
  background-color: var(--support-warning);
  color: #161616;
}
.label-danger {
  background-color: var(--support-error);
  color: var(--text-inverse);
}
.badge {
  padding-top: 0px;
  padding-bottom: 0px;
  font-size: 10px;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}
label {
  font-weight: normal;
  font-size: var(--utility-01);
}
.label-tag {
  white-space: normal;
  text-align: left;
}
.control-label {
  color: var(--text-secondary);
  white-space: nowrap;
}
.control-label.text-left {
  text-align: left;
}
input[style] {
  background-color: var(--field) !important;
}
input[style]:hover {
  background-color: var(--field-hover) !important;
}
.btn-datepicker + input,
.btn-datepicker + input:hover {
  background-color: transparent;
  border-color: transparent;
  padding-left: 6px;
  color: var(--text-secondary);
  cursor: default;
  font-size: 92%;
}
.form-control,
.chosen-container .chosen-single,
.form-control.search.tt-input {
  background-color: var(--field);
  border-width: var(--border-bottom);
  border-color: var(--border-strong);
  transition: var(--transition-all-productive);
  border-radius: var(--border-radius-sm);
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.form-control:hover,
.chosen-container .chosen-single:hover,
.form-control.search.tt-input:hover {
  outline: 2px var(--outline-style) transparent;
}
.form-control:focus,
.chosen-container .chosen-single:focus,
.form-control.search.tt-input:focus,
.form-control.focus,
.chosen-container .chosen-single.focus,
.form-control.search.tt-input.focus,
.form-control:focus-visible,
.chosen-container .chosen-single:focus-visible,
.form-control.search.tt-input:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.form-control.form-control-rounded,
.chosen-container .chosen-single.form-control-rounded,
.form-control.search.tt-input.form-control-rounded {
  border-radius: 32px;
}
.form-control:hover,
.chosen-container .chosen-single:hover,
.form-control.search.tt-input:hover {
  background-color: var(--field-hover);
}
.form-control:focus,
.chosen-container .chosen-single:focus,
.form-control.search.tt-input:focus {
  box-shadow: none;
}
.form-control {
  padding: var(--spacing-04) var(--spacing-05);
  color: var(--text-primary);
}
.form-control + .help-text,
.form-control + p {
  margin-top: 5px;
  font-size: var(--utility-01);
}
.form-control.not-chosen {
  padding: var(--spacing-01) var(--spacing-04);
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  color: var(--text-disabled);
}
.form-control[disabled] {
  cursor: not-allowed;
  border-bottom-color: transparent;
}
.search-container {
  display: flex;
  align-items: center;
  -webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.search-container .search {
  border: none;
  background-color: transparent !important;
  position: absolute;
  left: 0px;
  width: 24px;
  height: 34px;
  padding: 0 0 0 32px;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.search-container a.search-button {
  color: var(--icon-secondary);
  position: absolute;
  display: inline-flex;
  left: 12px;
  z-index: 5;
  transition: var(--transition-all-productive);
}
.search-container a.search-button:hover {
  color: var(--icon-primary);
}
.search-container.active .search {
  width: 225px;
  border: 1px solid #d5d5d5;
}
.search-container.active i {
  color: var(--icon-interactive);
}
.form-stack .form-control {
  position: relative;
  border-radius: 0;
}
.form-stack .form-control:focus {
  z-index: 1;
}
.form-stack .form-control + .form-control {
  margin-top: -1px;
}
.form-stack .form-control:first-child {
  border-radius: 10.8px 10.8px 0 0;
}
.form-stack .form-control:last-child {
  border-radius: 0 0 10.8px 10.8px;
}
.form-stack .form-control.input-lg:first-child {
  border-radius: 15.6px 15.6px 0 0;
}
.form-stack .form-control.input-lg:last-child {
  border-radius: 0 0 15.6px 15.6px;
}
.form-stack .form-control.input-sm:first-child {
  border-radius: 6px 6px 0 0;
}
.form-stack .form-control.input-sm:last-child {
  border-radius: 0 0 6px 6px;
}
.form-stack .form-control-icon:first-child > .form-control {
  border-radius: 10.8px 10.8px 0 0;
}
.form-stack .form-control-icon:first-child > .form-control.input-lg {
  border-radius: 15.6px 15.6px 0 0;
}
.form-stack .form-control-icon:first-child > .form-control.input-sm {
  border-radius: 6px 6px 0 0;
}
.form-stack .form-control-icon:last-child > .form-control {
  border-radius: 0 0 10.8px 10.8px;
}
.form-stack .form-control-icon:last-child > .form-control.input-lg {
  border-radius: 0 0 15.6px 15.6px;
}
.form-stack .form-control-icon:last-child > .form-control.input-sm {
  border-radius: 0 0 6px 6px;
}
.form-stack .form-control-icon + .form-control-icon {
  margin-top: -1px;
}
.form-control-icon {
  position: relative;
}
.form-control-icon .form-control {
  padding-left: 32px;
}
.form-control-icon .form-control.input-lg {
  padding-left: 42px;
}
.form-control-icon .form-control.input-lg + .the-icon {
  font-size: 16px;
  line-height: 42px;
  width: 42px;
}
.form-control-icon .form-control.input-sm {
  padding-left: 29px;
}
.form-control-icon .form-control.input-sm + .the-icon {
  font-size: 12px;
  line-height: 29px;
  width: 29px;
}
.form-control-icon .the-icon {
  position: absolute;
  z-index: 2;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 32px;
  line-height: 31px;
  width: 32px;
  text-align: center;
}
.form-control-icon.form-control-icon-right .the-icon {
  right: 0;
  left: auto;
}
.form-control-icon.form-control-icon-right .form-control {
  padding-left: 12px;
  padding-right: 32px;
}
.form-control-icon.form-control-icon-right .form-control.input-lg {
  padding-left: 16px;
  padding-right: 42px;
}
.form-control-icon.form-control-icon-right .form-control.input-sm {
  padding-left: 10px;
  padding-right: 29px;
}
input[type=file].form-control {
  padding: 6px;
}
input[type=file] {
  outline: 2px var(--outline-style) transparent;
  outline-offset: -2px;
}
input[type=file]:hover {
  outline: 2px var(--outline-style) transparent;
}
input[type=file]:focus,
input[type=file].focus,
input[type=file]:focus-visible {
  outline: 2px var(--outline-style) var(--focus);
}
.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0px;
  right: 0px;
  min-width: 100%;
  min-height: 100%;
  font-size: 999px;
  text-align: right;
  opacity: 0;
  background: red;
  cursor: inherit;
  display: block;
}
.checkbox label,
.radio label,
.checkbox-inline label,
.radio-inline label {
  font-weight: normal;
}
.checkbox[class*=\" custom\"],
.radio[class*=\" custom\"],
.checkbox-inline[class*=\" custom\"],
.radio-inline[class*=\" custom\"],
.checkbox[class^=\"custom\"],
.radio[class^=\"custom\"],
.checkbox-inline[class^=\"custom\"],
.radio-inline[class^=\"custom\"] {
  position: relative;
}
.checkbox[class*=\" custom\"] label,
.radio[class*=\" custom\"] label,
.checkbox-inline[class*=\" custom\"] label,
.radio-inline[class*=\" custom\"] label,
.checkbox[class^=\"custom\"] label,
.radio[class^=\"custom\"] label,
.checkbox-inline[class^=\"custom\"] label,
.radio-inline[class^=\"custom\"] label {
  padding-left: 24px;
}
.checkbox[class*=\" custom\"] label input,
.radio[class*=\" custom\"] label input,
.checkbox-inline[class*=\" custom\"] label input,
.radio-inline[class*=\" custom\"] label input,
.checkbox[class^=\"custom\"] label input,
.radio[class^=\"custom\"] label input,
.checkbox-inline[class^=\"custom\"] label input,
.radio-inline[class^=\"custom\"] label input {
  position: absolute;
  opacity: 0;
}
.checkbox[class*=\" custom\"] label input + span,
.radio[class*=\" custom\"] label input + span,
.checkbox-inline[class*=\" custom\"] label input + span,
.radio-inline[class*=\" custom\"] label input + span,
.checkbox[class^=\"custom\"] label input + span,
.radio[class^=\"custom\"] label input + span,
.checkbox-inline[class^=\"custom\"] label input + span,
.radio-inline[class^=\"custom\"] label input + span {
  display: inline-block;
  vertical-align: top;
  position: relative;
  width: 16px;
  height: 16px;
  margin-left: -25px;
  margin-right: 4px;
  margin-top: 1px;
  background-color: transparent;
  border-radius: 10.8px;
  border: 1px solid var(--text-primary);
}
.checkbox[class*=\" custom\"] label input + span:after,
.radio[class*=\" custom\"] label input + span:after,
.checkbox-inline[class*=\" custom\"] label input + span:after,
.radio-inline[class*=\" custom\"] label input + span:after,
.checkbox[class^=\"custom\"] label input + span:after,
.radio[class^=\"custom\"] label input + span:after,
.checkbox-inline[class^=\"custom\"] label input + span:after,
.radio-inline[class^=\"custom\"] label input + span:after {
  content: \"\";
  display: block;
  position: absolute;
  top: 2px;
  left: 2px;
  background-color: #3c4650;
  height: 10px;
  width: 10px;
  border-radius: 9.8px;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
}
.checkbox[class*=\" custom\"] label input:disabled + span,
.radio[class*=\" custom\"] label input:disabled + span,
.checkbox-inline[class*=\" custom\"] label input:disabled + span,
.radio-inline[class*=\" custom\"] label input:disabled + span,
.checkbox[class^=\"custom\"] label input:disabled + span,
.radio[class^=\"custom\"] label input:disabled + span,
.checkbox-inline[class^=\"custom\"] label input:disabled + span,
.radio-inline[class^=\"custom\"] label input:disabled + span {
  opacity: 0.4;
}
.checkbox[class*=\" custom\"] label input:disabled + span:hover,
.radio[class*=\" custom\"] label input:disabled + span:hover,
.checkbox-inline[class*=\" custom\"] label input:disabled + span:hover,
.radio-inline[class*=\" custom\"] label input:disabled + span:hover,
.checkbox[class^=\"custom\"] label input:disabled + span:hover,
.radio[class^=\"custom\"] label input:disabled + span:hover,
.checkbox-inline[class^=\"custom\"] label input:disabled + span:hover,
.radio-inline[class^=\"custom\"] label input:disabled + span:hover {
  cursor: not-allowed;
}
.checkbox[class*=\" custom\"] label input:checked + span,
.radio[class*=\" custom\"] label input:checked + span,
.checkbox-inline[class*=\" custom\"] label input:checked + span,
.radio-inline[class*=\" custom\"] label input:checked + span,
.checkbox[class^=\"custom\"] label input:checked + span,
.radio[class^=\"custom\"] label input:checked + span,
.checkbox-inline[class^=\"custom\"] label input:checked + span,
.radio-inline[class^=\"custom\"] label input:checked + span {
  border: 1px solid var(--text-primary);
}
.checkbox[class*=\" custom\"] label input:checked + span:after,
.radio[class*=\" custom\"] label input:checked + span:after,
.checkbox-inline[class*=\" custom\"] label input:checked + span:after,
.radio-inline[class*=\" custom\"] label input:checked + span:after,
.checkbox[class^=\"custom\"] label input:checked + span:after,
.radio[class^=\"custom\"] label input:checked + span:after,
.checkbox-inline[class^=\"custom\"] label input:checked + span:after,
.radio-inline[class^=\"custom\"] label input:checked + span:after {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.1s ease;
  -o-transition: all 0.1s ease;
  transition: all 0.1s ease;
}
.checkbox[class*=\" custom\"] label:hover input + span,
.radio[class*=\" custom\"] label:hover input + span,
.checkbox-inline[class*=\" custom\"] label:hover input + span,
.radio-inline[class*=\" custom\"] label:hover input + span,
.checkbox[class^=\"custom\"] label:hover input + span,
.radio[class^=\"custom\"] label:hover input + span,
.checkbox-inline[class^=\"custom\"] label:hover input + span,
.radio-inline[class^=\"custom\"] label:hover input + span {
  border: 1px solid var(--text-primary);
}
.checkbox[class*=\" custom\"] label:hover input:checked + span,
.radio[class*=\" custom\"] label:hover input:checked + span,
.checkbox-inline[class*=\" custom\"] label:hover input:checked + span,
.radio-inline[class*=\" custom\"] label:hover input:checked + span,
.checkbox[class^=\"custom\"] label:hover input:checked + span,
.radio[class^=\"custom\"] label:hover input:checked + span,
.checkbox-inline[class^=\"custom\"] label:hover input:checked + span,
.radio-inline[class^=\"custom\"] label:hover input:checked + span {
  border: 1px solid #3c4650;
}
.checkbox.custom-primary label input + span:after,
.radio.custom-primary label input + span:after,
.checkbox-inline.custom-primary label input + span:after,
.radio-inline.custom-primary label input + span:after {
  background-color: #4E5D9D;
}
.checkbox.custom-primary label input:checked + span,
.radio.custom-primary label input:checked + span,
.checkbox-inline.custom-primary label input:checked + span,
.radio-inline.custom-primary label input:checked + span {
  border: 1px solid #4E5D9D;
}
.checkbox.custom-primary label:hover input + span,
.radio.custom-primary label:hover input + span,
.checkbox-inline.custom-primary label:hover input + span,
.radio-inline.custom-primary label:hover input + span {
  border: 1px solid var(--text-primary);
  opacity: 0.8;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.checkbox.custom-primary label:hover input:checked + span,
.radio.custom-primary label:hover input:checked + span,
.checkbox-inline.custom-primary label:hover input:checked + span,
.radio-inline.custom-primary label:hover input:checked + span {
  border: 1px solid #4E5D9D;
}
.checkbox.custom-info label input + span:after,
.radio.custom-info label input + span:after,
.checkbox-inline.custom-info label input + span:after,
.radio-inline.custom-info label input + span:after {
  background-color: #35B4B9;
}
.checkbox.custom-info label input:checked + span,
.radio.custom-info label input:checked + span,
.checkbox-inline.custom-info label input:checked + span,
.radio-inline.custom-info label input:checked + span {
  border: 1px solid #35B4B9;
}
.checkbox.custom-info label:hover input + span,
.radio.custom-info label:hover input + span,
.checkbox-inline.custom-info label:hover input + span,
.radio-inline.custom-info label:hover input + span {
  border: 1px solid var(--text-primary);
  opacity: 0.8;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.checkbox.custom-info label:hover input:checked + span,
.radio.custom-info label:hover input:checked + span,
.checkbox-inline.custom-info label:hover input:checked + span,
.radio-inline.custom-info label:hover input:checked + span {
  border: 1px solid #35B4B9;
}
.checkbox.custom-success label input + span:after,
.radio.custom-success label input + span:after,
.checkbox-inline.custom-success label input + span:after,
.radio-inline.custom-success label input + span:after {
  background-color: #00B49C;
}
.checkbox.custom-success label input:checked + span,
.radio.custom-success label input:checked + span,
.checkbox-inline.custom-success label input:checked + span,
.radio-inline.custom-success label input:checked + span {
  border: 1px solid #00B49C;
}
.checkbox.custom-success label:hover input + span,
.radio.custom-success label:hover input + span,
.checkbox-inline.custom-success label:hover input + span,
.radio-inline.custom-success label:hover input + span {
  border: 1px solid var(--text-primary);
  opacity: 0.8;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.checkbox.custom-success label:hover input:checked + span,
.radio.custom-success label:hover input:checked + span,
.checkbox-inline.custom-success label:hover input:checked + span,
.radio-inline.custom-success label:hover input:checked + span {
  border: 1px solid #00B49C;
}
.checkbox.custom-warning label input + span:after,
.radio.custom-warning label input + span:after,
.checkbox-inline.custom-warning label input + span:after,
.radio-inline.custom-warning label input + span:after {
  background-color: #FDB933;
}
.checkbox.custom-warning label input:checked + span,
.radio.custom-warning label input:checked + span,
.checkbox-inline.custom-warning label input:checked + span,
.radio-inline.custom-warning label input:checked + span {
  border: 1px solid #FDB933;
}
.checkbox.custom-warning label:hover input + span,
.radio.custom-warning label:hover input + span,
.checkbox-inline.custom-warning label:hover input + span,
.radio-inline.custom-warning label:hover input + span {
  border: 1px solid var(--text-primary);
  opacity: 0.8;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.checkbox.custom-warning label:hover input:checked + span,
.radio.custom-warning label:hover input:checked + span,
.checkbox-inline.custom-warning label:hover input:checked + span,
.radio-inline.custom-warning label:hover input:checked + span {
  border: 1px solid #FDB933;
}
.checkbox.custom-danger label input + span:after,
.radio.custom-danger label input + span:after,
.checkbox-inline.custom-danger label input + span:after,
.radio-inline.custom-danger label input + span:after {
  background-color: #F86B4F;
}
.checkbox.custom-danger label input:checked + span,
.radio.custom-danger label input:checked + span,
.checkbox-inline.custom-danger label input:checked + span,
.radio-inline.custom-danger label input:checked + span {
  border: 1px solid #F86B4F;
}
.checkbox.custom-danger label:hover input + span,
.radio.custom-danger label:hover input + span,
.checkbox-inline.custom-danger label:hover input + span,
.radio-inline.custom-danger label:hover input + span {
  border: 1px solid var(--text-primary);
  opacity: 0.8;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.checkbox.custom-danger label:hover input:checked + span,
.radio.custom-danger label:hover input:checked + span,
.checkbox-inline.custom-danger label:hover input:checked + span,
.radio-inline.custom-danger label:hover input:checked + span {
  border: 1px solid #F86B4F;
}
.radio-group .radio-option {
  margin-bottom: var(--spacing-02);
}
.radio-group label {
  align-self: stretch;
}
.radio-group input[type=\"radio\"] {
  height: 18px;
  width: 18px;
  flex-shrink: 0;
  vertical-align: top;
  appearance: none;
  -webkit-appearance: none;
  background-color: transparent;
  margin: 0;
  border-radius: 50%;
  border: 1px solid var(--icon-primary, #161616);
  outline-offset: -1px;
  margin-right: 4px;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
  outline: 2px solid transparent;
  outline-offset: 1px;
}
.radio-group input[type=\"radio\"]:hover {
  outline: 2px solid transparent;
}
.radio-group input[type=\"radio\"]:focus,
.radio-group input[type=\"radio\"].focus {
  outline: 2px solid var(--focus);
  outline-offset: 1px;
}
.radio-group input[type=\"radio\"]:checked:before {
  position: relative;
  display: inline-block;
  border-radius: 50%;
  background-color: var(--icon-primary, #161616);
  block-size: 100%;
  content: \"\";
  inline-size: 100%;
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
}
.radio-group input[type=\"radio\"]:hover {
  cursor: pointer;
  opacity: 0.7;
}
.radio-cards svg,
.radio-cards img {
  width: 100%;
  border-radius: 4px;
}
.radio-inline[class*=\" custom\"] label input + span,
.radio[class*=\" custom\"] label input + span,
.radio-inline[class^=\"custom\"] label input + span,
.radio[class^=\"custom\"] label input + span,
.radio-inline[class*=\" custom\"] label input + span:after,
.radio[class*=\" custom\"] label input + span:after,
.radio-inline[class^=\"custom\"] label input + span:after,
.radio[class^=\"custom\"] label input + span:after {
  border-radius: 50%;
}
.checkbox-inline[class*=\" custom\"] label,
.radio-inline[class*=\" custom\"] label,
.checkbox-inline[class^=\"custom\"] label,
.radio-inline[class^=\"custom\"] label {
  padding-left: 4px;
}
input[type=\"checkbox\"] {
  --mtc-checkbox-size: 14px;
  aspect-ratio: 1 / 1;
  height: var(--mtc-checkbox-size);
  vertical-align: -3px;
  background-color: transparent;
  appearance: none;
  border: 1px solid var(--interactive);
  border-radius: 4px;
  margin: 0;
  align-items: center;
  display: flex;
  justify-content: center;
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
  outline: 2px solid transparent;
  outline-offset: 1px;
}
input[type=\"checkbox\"]:hover {
  outline: 2px solid transparent;
}
input[type=\"checkbox\"]:focus,
input[type=\"checkbox\"].focus {
  outline: 2px solid var(--focus);
  outline-offset: 1px;
}
input[type=\"checkbox\"]:after {
  content: \"\";
  height: calc(var(--mtc-checkbox-size) - 6px);
  aspect-ratio: 1/1;
  border-radius: 3px;
  -webkit-transform: scale(0.5);
  -ms-transform: scale(0.5);
  -o-transform: scale(0.5);
  transform: scale(0.5);
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
input[type=\"checkbox\"]:checked:after {
  background-color: var(--interactive);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  -webkit-transition: var(--transition-all-productive);
  -o-transition: var(--transition-all-productive);
  transition: var(--transition-all-productive);
}
.time-input select {
  margin: 0 3px 0 3px;
}
.legend-container {
  position: relative;
}
.bar-legend,
.line-legend {
  list-style: none;
  position: absolute;
  top: 0;
}
.bar-legend li,
.line-legend li {
  display: block;
  position: relative;
  margin-bottom: 4px;
  border-radius: 5px;
  padding: 0px 8px 2px 18px;
  font-size: 11px;
  cursor: default;
  -webkit-transition: background-color 200ms ease-in-out;
  -moz-transition: background-color 200ms ease-in-out;
  -o-transition: background-color 200ms ease-in-out;
  transition: background-color 200ms ease-in-out;
}
.bar-legend li:hover,
.line-legend li:hover {
  background-color: #fafafa;
}
.bar-legend li span,
.line-legend li span {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 15px;
  height: 15px;
  border-radius: 5px;
}
ul.line-legend {
  margin: 0;
  padding: 0;
  position: relative;
}
ul.line-legend li {
  display: inline;
}
.input-group .input-group-btn + .form-control {
  margin-left: -1px;
}
.input-group-addon {
  border-width: var(--border-bottom);
  border-radius: var(--border-radius-sm);
  background-color: var(--field-hover);
  color: var(--text-secondary);
  border-color: var(--border-strong);
}
.table .input-group-sm > .input-group-addon {
  line-height: 1em;
  background-color: transparent;
  border: 0;
  padding: 0;
}
.table .input-group-sm .dropdown-toggle {
  border: 0;
  background-color: transparent;
  padding: 5px 8px;
}
.input-group .input-group-btn .btn.btn-ghost {
  height: 32px;
  width: 100%;
  background-color: var(--field);
}
.input-group .input-group-btn .btn.btn-ghost:hover {
  background-color: var(--field-hover);
}
.input-group .input-group-btn:last-child .btn,
.input-group .input-group-btn:only-of-type .btn {
  border-radius: 0 var(--border-radius-sm) var(--border-radius-sm) 0;
}
.input-group .input-group-btn:first-child .btn {
  border-radius: var(--border-radius-sm) 0 0 var(--border-radius-sm);
}
.input-group .input-group-btn:last-child .btn {
  border-radius: 0 var(--border-radius-sm) var(--border-radius-sm) 0;
}
.img-wrapper {
  display: inline-block;
  position: relative;
}
.img-wrapper + .img-wrapper {
  margin-left: 3px;
}
.img-wrapper.pull-right + .img-wrapper {
  margin-right: 3px;
  margin-left: 0;
}
.img-wrapper:after {
  position: absolute;
  content: \"\";
  z-index: 1;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: inherit;
}
.img-wrapper img {
  border-radius: inherit;
  display: block;
  max-width: 100%;
  height: auto;
}
.img-wrapper > .label,
.img-wrapper > .badge {
  position: absolute;
  z-index: 5;
  top: -10px;
  right: -10px;
}
.img-rounded {
  border-radius: 10.8px;
}
.contact-avatar {
  width: 100%;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  vertical-align: middle;
}
.table > thead > tr > th {
  vertical-align: middle;
  border-bottom: 1px solid var(--border-subtle);
  background-color: var(--layer-accent);
}
.table-sort {
  height: 48px;
  border-radius: unset;
  border-color: transparent;
}
.table-sort,
.table-sort:hover,
.table-sort i {
  color: var(--text-primary);
}
.table-sort .table-sort__icon-unsorted {
  visibility: hidden;
}
.table-sort:hover {
  background-color: var(--layer-selected-hover);
  border-color: transparent;
}
.table-sort:hover .table-sort__icon-unsorted {
  visibility: visible;
}
.table-sort:hover i {
  color: var(--text-primary);
}
.table-responsive-force {
  width: 100%;
  margin-bottom: 13.5px;
  overflow-y: hidden;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  border: 1px solid var(--border-subtle);
  -webkit-overflow-scrolling: touch;
}
.table-responsive-force > .table {
  margin-bottom: 0;
}
.table-responsive-force > .table > thead > tr,
.table-responsive-force > .table > tbody > tr,
.table-responsive-force > .table > tfoot > tr {
  background-color: var(--background);
}
.table-responsive-force > .table > thead > tr > th,
.table-responsive-force > .table > tbody > tr > th,
.table-responsive-force > .table > tfoot > tr > th,
.table-responsive-force > .table > thead > tr > td,
.table-responsive-force > .table > tbody > tr > td,
.table-responsive-force > .table > tfoot > tr > td {
  white-space: nowrap;
}
.table-responsive-force > .table-bordered {
  border: 0;
}
.table-responsive-force > .table-bordered > thead > tr > th:first-child,
.table-responsive-force > .table-bordered > tbody > tr > th:first-child,
.table-responsive-force > .table-bordered > tfoot > tr > th:first-child,
.table-responsive-force > .table-bordered > thead > tr > td:first-child,
.table-responsive-force > .table-bordered > tbody > tr > td:first-child,
.table-responsive-force > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.table-responsive-force > .table-bordered > thead > tr > th:last-child,
.table-responsive-force > .table-bordered > tbody > tr > th:last-child,
.table-responsive-force > .table-bordered > tfoot > tr > th:last-child,
.table-responsive-force > .table-bordered > thead > tr > td:last-child,
.table-responsive-force > .table-bordered > tbody > tr > td:last-child,
.table-responsive-force > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.table-responsive-force > .table-bordered > tbody > tr:last-child > th,
.table-responsive-force > .table-bordered > tfoot > tr:last-child > th,
.table-responsive-force > .table-bordered > tbody > tr:last-child > td,
.table-responsive-force > .table-bordered > tfoot > tr:last-child > td {
  border-bottom: 0;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: var(--background);
}
.table-hover > tbody > tr:hover,
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  transition: var(--transition-all-productive);
  background-color: var(--background-hover);
}
.progress {
  background-color: var(--border-subtle);
  -webkit-box-shadow: none;
  box-shadow: none;
}
.progress.progress-md {
  height: 12px;
  border-radius: 6px;
}
.progress.progress-sm {
  height: 8px;
  border-radius: 6px;
  margin-top: 2px;
}
.progress.progress-xs {
  height: 4px;
  border-radius: 6px;
}
.progress-bar {
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: width 4s ease;
  -o-transition: width 4s ease;
  transition: width 4s ease;
}
.progress-bar-success {
  background-color: #00B49C;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #35B4B9;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #FDB933;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #F86B4F;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.app-sidebar .progress {
  background-color: #232b34;
}
.panel,
.panel2 {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex-grow: 1;
  border: 1px solid var(--layer);
  background-color: var(--background);
  transition: var(--transition-all-productive);
}
.panel:hover,
.panel2:hover {
  border-color: var(--border-subtle-02);
}
.panel-heading {
  padding: 0 15px;
}
.panel-heading:before,
.panel-heading:after {
  display: table;
  content: \" \";
}
.panel-heading:after {
  clear: both;
}
.panel-heading .panel-title {
  padding: 10px 0;
  display: table-cell;
  vertical-align: middle;
  font-weight: 600;
}
.panel-heading .panel-toolbar {
  display: table-cell;
  width: 1%;
  vertical-align: middle;
}
.panel-body {
  flex-grow: 1;
}
.panel-group .panel {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.panel-toolbar-wrapper {
  display: block;
  background-color: var(--layer);
  border-bottom: 1px solid var(--border-subtle);
  padding: 0px 15px;
}
.box-layout {
  display: table !important;
  width: 100%;
  table-layout: fixed;
  border-spacing: 0;
}
.box-layout > [class*=\" col-\"],
.box-layout > [class^=\"col-\"] {
  position: static;
  padding: 0;
}
.box-layout > [class*=\" col-\"] > .panel-body,
.box-layout > [class^=\"col-\"] > .panel-body {
  white-space: nowrap;
  overflow: hidden;
}
.box-layout > [class*=\" col-\"].bdr-l.height-auto:before,
.box-layout > [class^=\"col-\"].bdr-l.height-auto:before {
  margin-left: -1px;
}
.box-layout > [class*=\" col-\"].bdr-r.height-auto:before,
.box-layout > [class^=\"col-\"].bdr-r.height-auto:before {
  margin-right: -1px;
}
.box-layout > .col-xs-1,
.box-layout > .col-xs-2,
.box-layout > .col-xs-3,
.box-layout > .col-xs-4,
.box-layout > .col-xs-5,
.box-layout > .col-xs-6,
.box-layout > .col-xs-7,
.box-layout > .col-xs-8,
.box-layout > .col-xs-9,
.box-layout > .col-xs-10,
.box-layout > .col-xs-11,
.box-layout > .cell {
  display: table-cell;
  vertical-align: top;
  height: 100%;
  float: none;
}
.box-layout > .cell {
  width: 100%;
}
@media (min-width: 768px) {
  .box-layout > .col-sm-1,
  .box-layout > .col-sm-2,
  .box-layout > .col-sm-3,
  .box-layout > .col-sm-4,
  .box-layout > .col-sm-5,
  .box-layout > .col-sm-6,
  .box-layout > .col-sm-7,
  .box-layout > .col-sm-8,
  .box-layout > .col-sm-9,
  .box-layout > .col-sm-10,
  .box-layout > .col-sm-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 992px) {
  .box-layout > .col-md-1,
  .box-layout > .col-md-2,
  .box-layout > .col-md-3,
  .box-layout > .col-md-4,
  .box-layout > .col-md-5,
  .box-layout > .col-md-6,
  .box-layout > .col-md-7,
  .box-layout > .col-md-8,
  .box-layout > .col-md-9,
  .box-layout > .col-md-10,
  .box-layout > .col-md-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
@media (min-width: 1200px) {
  .box-layout > .col-lg-1,
  .box-layout > .col-lg-2,
  .box-layout > .col-lg-3,
  .box-layout > .col-lg-4,
  .box-layout > .col-lg-5,
  .box-layout > .col-lg-6,
  .box-layout > .col-lg-7,
  .box-layout > .col-lg-8,
  .box-layout > .col-lg-9,
  .box-layout > .col-lg-10,
  .box-layout > .col-lg-11 {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    float: none;
  }
}
.tab-pane .box-layout > [class*=\" col-\"].height-auto:before,
.tab-pane .box-layout > [class^=\"col-\"].height-auto:before {
  top: auto;
}
.modal .box-layout > [class*=\" col-\"].height-auto:before,
.modal .box-layout > [class^=\"col-\"].height-auto:before {
  width: auto;
}
.modal .box-layout .bg-auto {
  background-color: #fff !important;
}
.switch {
  vertical-align: middle;
  margin-bottom: 0;
  line-height: 0;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: transparent;
  tap-highlight-color: transparent;
}
.switch input {
  position: absolute;
  opacity: 0;
}
.switch input ~ .text {
  display: inline-block;
  font-weight: 400;
  line-height: 24px;
  vertical-align: middle;
}
.switch input ~ .switch {
  font-size: 24px;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  background-color: #fafafa;
  box-shadow: inset 0 0 0 1px #e5e5e5;
  cursor: pointer;
  height: 24px;
  width: 38.4px;
  border-radius: 28px;
  transition: border 0.25s 0.15s, box-shadow 0.25s 0.3s, padding 0.25s;
}
.switch input ~ .switch:after {
  position: absolute;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  border-radius: 24px;
  box-shadow: 0 1px 4px hsla(0, 0%, 0%, 0.01), 0 2px 4px hsla(0, 0%, 0%, 0.05);
  content: '';
  display: block;
  height: 24px;
  width: 24px;
  left: 0;
  top: 0;
  transition: border 0.25s 0.15s, left 0.25s 0.1s, right 0.15s 0.175s;
}
.switch input:checked + .switch {
  border-color: #00B49C;
  box-shadow: inset 0 0 0 0.6em #00B49C;
  transition: border 0.25s, box-shadow 0.25s, padding 0.25s 0.15s;
}
.switch input:checked + .switch:after {
  border-color: #00B49C;
  left: 0.6em;
  right: 0;
  transition: border 0.25s, left 0.15s 0.25s, right 0.25s 0.175s;
}
.switch.switch-primary input:checked + .switch {
  border-color: #4E5D9D;
  box-shadow: inset 0 0 0 0.6em #4E5D9D;
}
.switch.switch-primary input:checked + .switch:after {
  border-color: #4E5D9D;
}
.switch.switch-info input:checked + .switch {
  border-color: #35B4B9;
  box-shadow: inset 0 0 0 0.6em #35B4B9;
}
.switch.switch-info input:checked + .switch:after {
  border-color: #35B4B9;
}
.switch.switch-success input:checked + .switch {
  border-color: #00B49C;
  box-shadow: inset 0 0 0 0.6em #00B49C;
}
.switch.switch-success input:checked + .switch:after {
  border-color: #00B49C;
}
.switch.switch-warning input:checked + .switch {
  border-color: #FDB933;
  box-shadow: inset 0 0 0 0.6em #FDB933;
}
.switch.switch-warning input:checked + .switch:after {
  border-color: #FDB933;
}
.switch.switch-danger input:checked + .switch {
  border-color: #F86B4F;
  box-shadow: inset 0 0 0 0.6em #F86B4F;
}
.switch.switch-danger input:checked + .switch:after {
  border-color: #F86B4F;
}
.switch.switch-lg input ~ .text {
  line-height: 28px;
}
.switch.switch-lg input ~ .switch {
  font-size: 28px;
  height: 28px;
  width: 44.8px;
  border-radius: 28px;
}
.switch.switch-lg input ~ .switch:after {
  border-radius: 28px;
  height: 28px;
  width: 28px;
}
.switch.switch-sm input ~ .text {
  line-height: 20px;
}
.switch.switch-sm input ~ .switch {
  font-size: 20px;
  height: 20px;
  width: 32px;
  border-radius: 20px;
}
.switch.switch-sm input ~ .switch:after {
  border-radius: 20px;
  height: 20px;
  width: 20px;
}
.switch.switch-xs input ~ .text {
  line-height: 16px;
}
.switch.switch-xs input ~ .switch {
  font-size: 16px;
  height: 16px;
  width: 25.6px;
  border-radius: 16px;
}
.switch.switch-xs input ~ .switch:after {
  border-radius: 16px;
  height: 16px;
  width: 16px;
}
.step {
  padding: 0;
  margin: 0;
}
.step > li {
  list-style: none;
}
.step > li + li {
  margin-top: 15px;
}
.step > li + li .steps:after {
  content: \"\";
  position: absolute;
  left: 32px / 2;
  top: -15px;
  height: 15px;
  width: 1px;
  background-color: #a0acb8;
}
.step > li.active .steps {
  color: #3c4650;
}
.step > li.active .steps > .steps-figure {
  border-color: #3c4650;
}
.step > li.active a.steps:hover,
.step > li.active a.steps:focus {
  color: #3c4650;
}
.step > li.active a.steps:hover > .steps-figure,
.step > li.active a.steps:focus > .steps-figure {
  border-color: #3c4650;
}
.step > li a.steps:hover,
.step > li a.steps:focus {
  color: #8392a2;
}
.step > li a.steps:hover > .steps-figure,
.step > li a.steps:focus > .steps-figure {
  border-color: #8392a2;
}
.step .steps {
  position: relative;
  display: inline-block;
  color: #a0acb8;
}
.step .steps > .steps-figure {
  display: inline-block;
  width: 32px;
  height: 32px;
  text-align: center;
  font-size: 14px;
  line-height: 28px;
  border-radius: 50%;
  border: 2px solid #a0acb8;
}
.step .steps > .steps-figure + .steps-text {
  margin-left: 5px;
}
.step .steps > .steps-text + .steps-figure {
  margin-left: 5px;
}
.horizontal-step {
  padding: 0;
  margin: 0;
}
.horizontal-step > li {
  list-style: none;
  display: inline;
}
.horizontal-step > li + li {
  margin-left: 15px;
}
.horizontal-step > li + li .steps:after {
  content: \"\";
  position: absolute;
  left: -18px;
  top: 32px / 2;
  height: 1px;
  width: 18px;
  background-color: #a0acb8;
}
.horizontal-step > li.active .steps {
  color: #3c4650;
}
.horizontal-step > li.active .steps > .steps-figure {
  border-color: #3c4650;
}
.horizontal-step > li.active a.steps:hover,
.horizontal-step > li.active a.steps:focus {
  color: #3c4650;
}
.horizontal-step > li.active a.steps:hover > .steps-figure,
.horizontal-step > li.active a.steps:focus > .steps-figure {
  border-color: #3c4650;
}
.horizontal-step > li a.steps:hover,
.horizontal-step > li a.steps:focus {
  color: #8392a2;
}
.horizontal-step > li a.steps:hover > .steps-figure,
.horizontal-step > li a.steps:focus > .steps-figure {
  border-color: #8392a2;
}
.horizontal-step > li a.steps.disabled {
  color: #bdc5cd;
}
.horizontal-step > li a.steps.disabled > .steps-figure {
  border-color: #bdc5cd;
}
.horizontal-step > li a.steps.disabled:hover {
  color: #bdc5cd;
  cursor: not-allowed;
}
.horizontal-step > li a.steps.disabled:hover > .steps-figure {
  border-color: #bdc5cd;
}
.horizontal-step .steps {
  position: relative;
  display: inline-block;
  color: #a0acb8;
}
.horizontal-step .steps > .steps-figure {
  display: inline-block;
  width: 32px;
  height: 32px;
  text-align: center;
  font-size: 14px;
  line-height: 28px;
  border-radius: 50%;
  border: 2px solid #a0acb8;
}
.horizontal-step .steps > .steps-figure + .steps-text {
  margin-left: 5px;
}
.horizontal-step .steps > .steps-text + .steps-figure {
  margin-left: 5px;
}
.bg-white {
  background-color: #fff !important;
  border-color: #fff !important;
  color: #3c4650 !important;
}
.bg-auto {
  background-color: #fff !important;
  border-color: #fff !important;
  color: #3c4650 !important;
}
.bg-transparent {
  background-color: transparent !important;
  color: #3c4650;
}
.bg-primary {
  background-color: #4E5D9D !important;
  border-color: #4E5D9D !important;
  color: #fff !important;
}
.bg-success {
  background-color: var(--support-success) !important;
  border-color: var(--support-success) !important;
  color: var(--text-inverse) !important;
}
.bg-info {
  background-color: var(--support-info) !important;
  border-color: var(--support-info) !important;
  color: var(--text-inverse) !important;
}
.bg-warning {
  background-color: var(--support-warning) !important;
  border-color: var(--support-warning) !important;
  color: var(--text-inverse) !important;
}
.bg-danger {
  background-color: var(--support-error) !important;
  border-color: var(--support-error) !important;
  color: var(--text-inverse) !important;
}
.pagination,
.pager {
  margin: 0 0 15px 0;
}
lesshat-selector {
  -lh-property: 0; } 
@-webkit-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@-moz-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@-o-keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }}
@keyframes after-anim{ 0% { width: 0%; left: 0%; } 10% { width: 30%; left: 100%; } 19.99% { width: 30%; left: 100%; } 20% { width: 0%; left: 0%; } 30% { width: 80%; left: 100%; } 30.01% { width: 0%; left: 0%; } 40% { width: 5%; left: 30%; } 50% { width: 50%; left: 100%; } 50.01% { width: 0%; left: 0%; } 60% { width: 60%; left: 20%; } 70% { width: 5%; left: 100%; } 70.01% { width: 0%; left: 0%; } 80% { width: 50%; left: 30%; } 90% { width: 10%; left: 80%; } 100% { width: 20%; left: 100%; }} 
lesshat-selector { -lh-property: 0 ;
}
lesshat-selector {
  -lh-property: 0; } 
@-webkit-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@-moz-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@-o-keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }}
@keyframes before-anim{ 0% { width: 0%; left: 0%; } 0% { width: 60%; } 19.99% { width: 40%; left: 100%; } 20% { width: 0%; left: 0%; } 25% { width: 10%; left: 10%; } 30% { width: 40%; left: 30%; } 40% { width: 60%; left: 100%; } 40.01% { width: 0%; left: 0%; } 50% { width: 10%; left: 40%; } 60% { width: 30%; left: 100%; } 60.01% { width: 0%; left: 0%; } 70% { width: 10%; left: 40%; } 80% { width: 5%; left: 100%; } 80.01% { width: 0%; left: 0%; } 90% { width: 70%; left: 10%; } 100% { width: 10%; left: 100%; }} 
lesshat-selector { -lh-property: 0 ;
}
.loading-bar,
.canvas-loading-bar,
.modal-loading-bar {
  opacity: 0;
  position: absolute;
  bottom: -1px;
  z-index: 1;
  left: 0;
  right: 0;
  height: 2px;
  background-color: #adb5d7;
  overflow: hidden;
  -webkit-transition: opacity 0.3s ease;
  -moz-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
}
.loading-bar:after,
.canvas-loading-bar:after,
.modal-loading-bar:after,
.loading-bar:before,
.canvas-loading-bar:before,
.modal-loading-bar:before {
  content: '';
  position: absolute;
  height: 2px;
  background-color: #4E5D9D;
}
.loading-bar.active,
.canvas-loading-bar.active,
.modal-loading-bar.active {
  opacity: 1;
  -webkit-transition: opacity 0.3s ease;
  -moz-transition: opacity 0.3s ease;
  -o-transition: opacity 0.3s ease;
  transition: opacity 0.3s ease;
}
.loading-bar.active:after,
.canvas-loading-bar.active:after,
.modal-loading-bar.active:after {
  left: 50%;
  width: 10%;
  -webkit-animation: after-anim 2.5s infinite linear;
  -moz-animation: after-anim 2.5s infinite linear;
  -o-animation: after-anim 2.5s infinite linear;
  animation: after-anim 2.5s infinite linear;
}
.loading-bar.active:before,
.canvas-loading-bar.active:before,
.modal-loading-bar.active:before {
  left: 0%;
  width: 0%;
  -webkit-animation: before-anim 2.5s infinite linear;
  -moz-animation: before-anim 2.5s infinite linear;
  -o-animation: before-anim 2.5s infinite linear;
  animation: before-anim 2.5s infinite linear;
}
.modal-loading-bar {
  bottom: auto;
  top: 0;
}
.offcanvas-container {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.offcanvas-container .offcanvas-wrapper {
  position: absolute;
  z-index: 1;
  left: 0px;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.offcanvas-container .offcanvas-main {
  position: absolute;
  top: 0px;
  width: 100%;
  height: 100%;
}
.offcanvas-container .offcanvas-left {
  position: absolute;
  z-index: 2;
  top: 0px;
  left: -100%;
  width: 100%;
  height: 100%;
}
.offcanvas-container .offcanvas-right {
  position: absolute;
  z-index: 2;
  top: 0px;
  left: 100%;
  width: 100%;
  height: 100%;
}
.offcanvas-container.offcanvas-open-rtl .offcanvas-wrapper {
  left: 100%;
  -webkit-transition: left 0.2s ease;
  -o-transition: left 0.2s ease;
  transition: left 0.2s ease;
}
.offcanvas-container.offcanvas-open-ltr .offcanvas-wrapper {
  left: -100%;
  -webkit-transition: left 0.2s ease;
  -o-transition: left 0.2s ease;
  transition: left 0.2s ease;
}
.csstransforms3d .offcanvas-container.offcanvas-open-ltr .offcanvas-wrapper {
  left: auto;
  -webkit-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.csstransforms3d .offcanvas-container.offcanvas-open-rtl .offcanvas-wrapper {
  left: auto;
  -webkit-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.timeline {
  overflow: hidden;
  height: auto;
  position: relative;
  padding: 0px;
  list-style-type: none;
}
.timeline:after {
  position: absolute;
  width: 1px;
  left: 50%;
  margin-left: -1px;
  top: 20px;
  bottom: 0px;
  content: \"\";
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9Imxlc3NoYXQtZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9InJnYigyNTUsIDI1NSwgMjU1KSIgc3RvcC1vcGFjaXR5PSIwIi8+PHN0b3Agb2Zmc2V0PSIxMCUiIHN0b3AtY29sb3I9IiNlNWU1ZTUiIHN0b3Atb3BhY2l0eT0iMSIvPjxzdG9wIG9mZnNldD0iOTAlIiBzdG9wLWNvbG9yPSIjZTVlNWU1IiBzdG9wLW9wYWNpdHk9IjEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9InJnYigyMjksIDIyOSwgMjI5KSIgc3RvcC1vcGFjaXR5PSIwIi8+PC9saW5lYXJHcmFkaWVudD48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2xlc3NoYXQtZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #e5e5e5 10%, #e5e5e5 90%, rgba(229, 229, 229, 0) 100%);
}
.timeline .panel {
  position: relative;
  z-index: 1;
}
.timeline .header {
  position: relative;
  z-index: 10;
  clear: both;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 20px;
  margin-left: auto;
  background-color: inherit;
  font-size: 14px;
  font-weight: 600;
  max-width: 120px;
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: center;
  color: #4E5D9D;
}
.timeline .events {
  padding-left: 0px;
  overflow: auto;
}
.timeline .events .figure {
  position: absolute;
  z-index: 5;
  left: 50%;
  margin-top: 10px;
  margin-left: -10px;
  width: 20px;
  height: 20px;
  line-height: 18px;
  text-align: center;
  border-radius: 50%;
  background-color: #fff;
  border: 1px solid var(--border-strong);
  font-size: 12px;
  color: var(--border-strong);
}
.timeline .events > .featured {
  list-style: none;
  width: 45%;
  clear: both;
  float: none !important;
  margin-bottom: 50px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
}
.timeline .events > .featured > .panel:after,
.timeline .events > .featured > .panel:before {
  display: none;
}
.timeline .events > .featured .figure {
  margin-top: -30px;
}
.timeline .events > .wrapper {
  list-style: none;
  width: 46%;
  clear: both;
}
.timeline .events > .wrapper:first-child {
  margin-top: 0 !important;
}
.timeline .events > .wrapper:nth-of-type(odd) {
  float: left;
  margin-top: -30px;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel {
  z-index: 5;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:after,
.timeline .events > .wrapper:nth-of-type(odd) > .panel:before {
  content: \"\";
  position: absolute;
  width: 0px;
  height: 0px;
  border-style: solid;
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:after {
  right: -10px;
  top: 10px;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent var(--layer);
}
.timeline .events > .wrapper:nth-of-type(odd) > .panel:before {
  right: -11px;
  top: 10px;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent var(--layer);
}
.timeline .events > .wrapper:nth-of-type(even) {
  float: right;
  margin-top: -30px;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel {
  z-index: 5;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:after,
.timeline .events > .wrapper:nth-of-type(even) > .panel:before {
  content: \"\";
  position: absolute;
  width: 0px;
  height: 0px;
  border-style: solid;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:after {
  left: -10px;
  top: 10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent #fff transparent transparent;
}
.timeline .events > .wrapper:nth-of-type(even) > .panel:before {
  left: -11px;
  top: 10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent var(--layer) transparent transparent;
}
@media (max-width: 767px) {
  .timeline .events {
    padding-left: 0px;
  }
  .timeline .events > .wrapper {
    width: auto;
  }
  .timeline .events > .wrapper:nth-of-type(odd),
  .timeline .events > .wrapper:nth-of-type(even) {
    float: none;
    clear: both;
    margin-top: 48px;
  }
  .timeline .events > .wrapper:nth-of-type(odd) > .panel:after,
  .timeline .events > .wrapper:nth-of-type(even) > .panel:after,
  .timeline .events > .wrapper:nth-of-type(odd) > .panel:before,
  .timeline .events > .wrapper:nth-of-type(even) > .panel:before {
    display: none;
  }
  .timeline .events > .wrapper > .figure {
    margin-top: -41px;
  }
}
.va-t {
  vertical-align: top !important;
}
.va-m {
  vertical-align: middle !important;
}
.va-b {
  vertical-align: bottom !important;
}
.pull-right-xs {
  float: right;
}
.pull-left-xs {
  float: left;
}
@media (min-width: 768px) {
  .pull-right-sm {
    float: right;
  }
  .pull-left-sm {
    float: left;
  }
  .text-right-sm {
    text-align: right;
  }
  .text-left-sm {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
@media (min-width: 992px) {
  .pull-right-md {
    float: right;
  }
  .pull-left-md {
    float: left;
  }
  .text-right-md {
    text-align: right;
  }
  .text-left-md {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
@media (min-width: 1200px) {
  .pull-right-lg {
    float: right;
  }
  .pull-left-lg {
    float: left;
  }
  .text-right-lg {
    text-align: right;
  }
  .text-left-lg {
    text-align: left;
  }
  .pull-right-xs {
    float: none;
  }
  .pull-left-xs {
    float: none;
  }
}
.bdr-a {
  border: 1px solid var(--border-subtle) !important;
}
.bdr-l {
  border-left: 1px solid var(--border-subtle) !important;
}
.bdr-r {
  border-right: 1px solid var(--border-subtle) !important;
}
.bdr-t {
  border-top: 1px solid var(--border-subtle) !important;
}
.bdr-b {
  border-bottom: 1px solid var(--border-subtle) !important;
}
.bdr-c-info {
  border-color: var(--support-info) !important;
}
.bdr-c-success {
  border-color: var(--support-success) !important;
}
.bdr-c-warning {
  border-color: var(--support-warning) !important;
}
.bdr-c-error {
  border-color: var(--support-error) !important;
}
.bdr-c-t {
  border-color: transparent !important;
}
.bdr-w-0 {
  border-width: 0 !important;
}
.bdr-l-wdh-0 {
  border-left-width: 0 !important;
}
.bdr-r-wdh-0 {
  border-right-width: 0 !important;
}
.bdr-t-wdh-0 {
  border-top-width: 0 !important;
}
.bdr-b-wdh-0 {
  border-bottom-width: 0 !important;
}
.bdr-rds-0 {
  border-radius: 0 !important;
}
.bdr-rds {
  border-radius: 10.8px !important;
}
.bdr-rds-lg {
  border-radius: 15.6px !important;
}
.bdr-rds-sm {
  border-radius: 6px !important;
}
.bdr-rds-circle {
  border-radius: 50% !important;
}
@media (max-width: 767px) {
  .bdr-l-xs {
    border-left: 1px solid var(--border-subtle);
  }
  .bdr-r-xs {
    border-right: 1px solid var(--border-subtle);
  }
  .bdr-t-xs {
    border-top: 1px solid var(--border-subtle);
  }
  .bdr-b-xs {
    border-bottom: 1px solid var(--border-subtle);
  }
}
@media (min-width: 768px) {
  .bdr-l-sm {
    border-left: 1px solid var(--border-subtle);
  }
  .bdr-r-sm {
    border-right: 1px solid var(--border-subtle);
  }
  .bdr-t-sm {
    border-top: 1px solid var(--border-subtle);
  }
  .bdr-b-sm {
    border-bottom: 1px solid var(--border-subtle);
  }
}
@media (min-width: 992px) {
  .bdr-l-md {
    border-left: 1px solid var(--border-subtle);
  }
  .bdr-r-md {
    border-right: 1px solid var(--border-subtle);
  }
  .bdr-t-md {
    border-top: 1px solid var(--border-subtle);
  }
  .bdr-b-md {
    border-bottom: 1px solid var(--border-subtle);
  }
}
@media (min-width: 1200px) {
  .bdr-l-lg {
    border-left: 1px solid var(--border-subtle);
  }
  .bdr-r-lg {
    border-right: 1px solid var(--border-subtle);
  }
  .bdr-t-lg {
    border-top: 1px solid var(--border-subtle);
  }
  .bdr-b-lg {
    border-bottom: 1px solid var(--border-subtle);
  }
}
.bsa-xs {
  border-spacing: 5px;
  border-collapse: separate;
}
.bsv-xs {
  border-spacing: 0 5px;
  border-collapse: separate;
}
.bsh-xs {
  border-spacing: 5px 0;
  border-collapse: separate;
}
.bg-picture {
  position: relative;
  min-height: 260px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.bg-picture > .bg-picture-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
}
.bg-picture > .meta {
  position: absolute;
  left: 0;
  right: 0;
}
.bg-picture > .meta.top {
  top: 0;
}
.bg-picture > .meta.bottom {
  bottom: 0;
}
.shd-0,
.shd-none {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.shd-sm {
  -webkit-box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.05);
  box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.05);
}
.csr-move {
  cursor: move !important;
}
.ma-a {
  margin: auto !important;
}
.mr-a {
  margin-right: auto !important;
}
.mt-a {
  margin-top: auto !important;
}
.mb-a {
  margin-bottom: auto !important;
}
.ml-a {
  margin-left: auto !important;
}
.ma-0 {
  margin: 0px !important;
}
.mr-0 {
  margin-right: 0px !important;
}
.mt-0 {
  margin-top: 0px !important;
}
.mb-0 {
  margin-bottom: 0px !important;
}
.ml-0 {
  margin-left: 0px !important;
}
.ma-1 {
  margin: 1px !important;
}
.mr-1 {
  margin-right: 1px !important;
}
.mt-1 {
  margin-top: 1px !important;
}
.mb-1 {
  margin-bottom: 1px !important;
}
.ml-1 {
  margin-left: 1px !important;
}
.ma-2 {
  margin: 2px !important;
}
.mr-2 {
  margin-right: 2px !important;
}
.mt-2 {
  margin-top: 2px !important;
}
.mb-2 {
  margin-bottom: 2px !important;
}
.ml-2 {
  margin-left: 2px !important;
}
.ma-3 {
  margin: 3px !important;
}
.mr-3 {
  margin-right: 3px !important;
}
.mt-3 {
  margin-top: 3px !important;
}
.mb-3 {
  margin-bottom: 3px !important;
}
.ml-3 {
  margin-left: 3px !important;
}
.ma-4 {
  margin: 4px !important;
}
.mr-4 {
  margin-right: 4px !important;
}
.mt-4 {
  margin-top: 4px !important;
}
.mb-4 {
  margin-bottom: 4px !important;
}
.ml-4 {
  margin-left: 4px !important;
}
.ma-5,
.ma-xs {
  margin: 5px !important;
}
.mr-5,
.mr-xs {
  margin-right: 5px !important;
}
.mt-5,
.mt-xs {
  margin-top: 5px !important;
}
.mb-5,
.mb-xs {
  margin-bottom: 5px !important;
}
.ml-5,
.ml-xs {
  margin-left: 5px !important;
}
.ma-8 {
  margin: var(--spacing-03) !important;
}
.mr-8 {
  margin-right: var(--spacing-03) !important;
}
.mt-8 {
  margin-top: var(--spacing-03) !important;
}
.mb-8 {
  margin-bottom: var(--spacing-03) !important;
}
.ml-8 {
  margin-left: var(--spacing-03) !important;
}
.ma-10,
.ma-sm {
  margin: 10px !important;
}
.mr-10,
.mr-sm {
  margin-right: 10px !important;
}
.mt-10,
.mt-sm {
  margin-top: 10px !important;
}
.mb-10,
.mb-sm {
  margin-bottom: 10px !important;
}
.ml-10,
.ml-sm {
  margin-left: 10px !important;
}
.ma-12 {
  margin: var(--spacing-04) !important;
}
.mr-12 {
  margin-right: var(--spacing-04) !important;
}
.mt-12 {
  margin-top: var(--spacing-04) !important;
}
.mb-12 {
  margin-bottom: var(--spacing-04) !important;
}
.ml-12 {
  margin-left: var(--spacing-04) !important;
}
.ma-15,
.ma-md {
  margin: 15px !important;
}
.mr-15,
.mr-md {
  margin-right: 15px !important;
}
.mt-15,
.mt-md {
  margin-top: 15px !important;
}
.mb-15,
.mb-md {
  margin-bottom: 15px !important;
}
.ml-15,
.ml-md {
  margin-left: 15px !important;
}
.ma-16 {
  margin: var(--spacing-05) !important;
}
.mr-16 {
  margin-right: var(--spacing-05) !important;
}
.mt-16 {
  margin-top: var(--spacing-05) !important;
}
.mb-16 {
  margin-bottom: var(--spacing-05) !important;
}
.ml-16 {
  margin-left: var(--spacing-05) !important;
}
.ma-20,
.ma-lg {
  margin: 20px !important;
}
.mr-20,
.mr-lg {
  margin-right: 20px !important;
}
.mt-20,
.mt-lg {
  margin-top: 20px !important;
}
.mb-20,
.mb-lg {
  margin-bottom: 20px !important;
}
.ml-20,
.ml-lg {
  margin-left: 20px !important;
}
.ma-24 {
  margin: var(--spacing-06) !important;
}
.mr-24 {
  margin-right: var(--spacing-06) !important;
}
.mt-24 {
  margin-top: var(--spacing-06) !important;
}
.mb-24 {
  margin-bottom: var(--spacing-06) !important;
}
.ml-24 {
  margin-left: var(--spacing-06) !important;
}
.ma-32,
.ma-xl {
  margin: var(--spacing-07) !important;
}
.mr-32,
.mr-xl {
  margin-right: var(--spacing-07) !important;
}
.mt-32,
.mt-xl {
  margin-top: var(--spacing-07) !important;
}
.mb-32,
.mb-xl {
  margin-bottom: var(--spacing-07) !important;
}
.ml-32,
.ml-xl {
  margin-left: var(--spacing-07) !important;
}
.ma-40 {
  margin: var(--spacing-08) !important;
}
.mr-40 {
  margin-right: var(--spacing-08) !important;
}
.mt-40 {
  margin-top: var(--spacing-08) !important;
}
.mb-40 {
  margin-bottom: var(--spacing-08) !important;
}
.ml-40 {
  margin-left: var(--spacing-08) !important;
}
.ma-48 {
  margin: var(--spacing-09) !important;
}
.mr-48 {
  margin-right: var(--spacing-09) !important;
}
.mt-48 {
  margin-top: var(--spacing-09) !important;
}
.mb-48 {
  margin-bottom: var(--spacing-09) !important;
}
.ml-48 {
  margin-left: var(--spacing-09) !important;
}
.ma-64 {
  margin: var(--spacing-10) !important;
}
.mr-64 {
  margin-right: var(--spacing-10) !important;
}
.mt-64 {
  margin-top: var(--spacing-10) !important;
}
.mb-64 {
  margin-bottom: var(--spacing-10) !important;
}
.ml-64 {
  margin-left: var(--spacing-10) !important;
}
.ma-80 {
  margin: var(--spacing-11) !important;
}
.mr-80 {
  margin-right: var(--spacing-11) !important;
}
.mt-80 {
  margin-top: var(--spacing-11) !important;
}
.mb-80 {
  margin-bottom: var(--spacing-11) !important;
}
.ml-80 {
  margin-left: var(--spacing-11) !important;
}
.ma-96 {
  margin: var(--spacing-12) !important;
}
.mr-96 {
  margin-right: var(--spacing-12) !important;
}
.mt-96 {
  margin-top: var(--spacing-12) !important;
}
.mb-96 {
  margin-bottom: var(--spacing-12) !important;
}
.ml-96 {
  margin-left: var(--spacing-12) !important;
}
.ma-160 {
  margin: var(--spacing-13) !important;
}
.mr-160 {
  margin-right: var(--spacing-13) !important;
}
.mt-160 {
  margin-top: var(--spacing-13) !important;
}
.mb-160 {
  margin-bottom: var(--spacing-13) !important;
}
.ml-160 {
  margin-left: var(--spacing-13) !important;
}
.pa-0,
.np {
  padding: 0px !important;
}
.pr-0 {
  padding-right: 0px !important;
}
.pt-0 {
  padding-top: 0px !important;
}
.pb-0 {
  padding-bottom: 0px !important;
}
.pl-0 {
  padding-left: 0px !important;
}
.pa-1 {
  padding: 1px !important;
}
.pr-1 {
  padding-right: 1px !important;
}
.pt-1 {
  padding-top: 1px !important;
}
.pb-1 {
  padding-bottom: 1px !important;
}
.pl-1 {
  padding-left: 1px !important;
}
.pa-2 {
  padding: 2px !important;
}
.pr-2 {
  padding-right: 2px !important;
}
.pt-2 {
  padding-top: 2px !important;
}
.pb-2 {
  padding-bottom: 2px !important;
}
.pl-2 {
  padding-left: 2px !important;
}
.pa-3 {
  padding: 3px !important;
}
.pr-3 {
  padding-right: 3px !important;
}
.pt-3 {
  padding-top: 3px !important;
}
.pb-3 {
  padding-bottom: 3px !important;
}
.pl-3 {
  padding-left: 3px !important;
}
.pa-4 {
  padding: 4px !important;
}
.pr-4 {
  padding-right: 4px !important;
}
.pt-4 {
  padding-top: 4px !important;
}
.pb-4 {
  padding-bottom: 4px !important;
}
.pl-4 {
  padding-left: 4px !important;
}
.pa-5,
.pa-xs {
  padding: 5px !important;
}
.pr-5,
.pr-xs {
  padding-right: 5px !important;
}
.pt-5,
.pt-xs {
  padding-top: 5px !important;
}
.pb-5,
.pb-xs {
  padding-bottom: 5px !important;
}
.pl-5,
.pl-xs {
  padding-left: 5px !important;
}
.pa-8 {
  padding: var(--spacing-03) !important;
}
.pr-8 {
  padding-right: var(--spacing-03) !important;
}
.pt-8 {
  padding-top: var(--spacing-03) !important;
}
.pb-8 {
  padding-bottom: var(--spacing-03) !important;
}
.pl-8 {
  padding-left: var(--spacing-03) !important;
}
.pa-10,
.pa-sm {
  padding: 10px !important;
}
.pr-10,
.pr-sm {
  padding-right: 10px !important;
}
.pt-10,
.pt-sm {
  padding-top: 10px !important;
}
.pb-10,
.pb-sm {
  padding-bottom: 10px !important;
}
.pl-10,
.pl-sm {
  padding-left: 10px !important;
}
.pa-12 {
  padding: var(--spacing-04) !important;
}
.pr-12 {
  padding-right: var(--spacing-04) !important;
}
.pt-12 {
  padding-top: var(--spacing-04) !important;
}
.pb-12 {
  padding-bottom: var(--spacing-04) !important;
}
.pl-12 {
  padding-left: var(--spacing-04) !important;
}
.pa-15,
.pa-md {
  padding: 15px !important;
}
.pr-15,
.pr-md {
  padding-right: 15px !important;
}
.pt-15,
.pt-md {
  padding-top: 15px !important;
}
.pb-15,
.pb-md {
  padding-bottom: 15px !important;
}
.pl-15,
.pl-md {
  padding-left: 15px !important;
}
.pa-16 {
  padding: var(--spacing-05) !important;
}
.pr-16 {
  padding-right: var(--spacing-05) !important;
}
.pt-16 {
  padding-top: var(--spacing-05) !important;
}
.pb-16 {
  padding-bottom: var(--spacing-05) !important;
}
.pl-16 {
  padding-left: var(--spacing-05) !important;
}
.pa-20,
.pa-lg {
  padding: 20px !important;
}
.pr-20,
.pr-lg {
  padding-right: 20px !important;
}
.pt-20,
.pt-lg {
  padding-top: 20px !important;
}
.pb-20,
.pb-lg {
  padding-bottom: 20px !important;
}
.pl-20,
.pl-lg {
  padding-left: 20px !important;
}
.pa-24 {
  padding: var(--spacing-06) !important;
}
.pr-24 {
  padding-right: var(--spacing-06) !important;
}
.pt-24 {
  padding-top: var(--spacing-06) !important;
}
.pb-24 {
  padding-bottom: var(--spacing-06) !important;
}
.pl-24 {
  padding-left: var(--spacing-06) !important;
}
.pa-32,
.pa-xl {
  padding: var(--spacing-07) !important;
}
.pr-32,
.pr-xl {
  padding-right: var(--spacing-07) !important;
}
.pt-32,
.pt-xl {
  padding-top: var(--spacing-07) !important;
}
.pb-32,
.pb-xl {
  padding-bottom: var(--spacing-07) !important;
}
.pl-32,
.pl-xl {
  padding-left: var(--spacing-07) !important;
}
.pa-40 {
  padding: var(--spacing-08) !important;
}
.pr-40 {
  padding-right: var(--spacing-08) !important;
}
.pt-40 {
  padding-top: var(--spacing-08) !important;
}
.pb-40 {
  padding-bottom: var(--spacing-08) !important;
}
.pl-40 {
  padding-left: var(--spacing-08) !important;
}
.pa-48 {
  padding: var(--spacing-09) !important;
}
.pr-48 {
  padding-right: var(--spacing-09) !important;
}
.pt-48 {
  padding-top: var(--spacing-09) !important;
}
.pb-48 {
  padding-bottom: var(--spacing-09) !important;
}
.pl-48 {
  padding-left: var(--spacing-09) !important;
}
.pa-64 {
  padding: var(--spacing-10) !important;
}
.pr-64 {
  padding-right: var(--spacing-10) !important;
}
.pt-64 {
  padding-top: var(--spacing-10) !important;
}
.pb-64 {
  padding-bottom: var(--spacing-10) !important;
}
.pl-64 {
  padding-left: var(--spacing-10) !important;
}
.pa-80 {
  padding: var(--spacing-11) !important;
}
.pr-80 {
  padding-right: var(--spacing-11) !important;
}
.pt-80 {
  padding-top: var(--spacing-11) !important;
}
.pb-80 {
  padding-bottom: var(--spacing-11) !important;
}
.pl-80 {
  padding-left: var(--spacing-11) !important;
}
.pa-96 {
  padding: var(--spacing-12) !important;
}
.pr-96 {
  padding-right: var(--spacing-12) !important;
}
.pt-96 {
  padding-top: var(--spacing-12) !important;
}
.pb-96 {
  padding-bottom: var(--spacing-12) !important;
}
.pl-96 {
  padding-left: var(--spacing-12) !important;
}
.pa-160 {
  padding: var(--spacing-13) !important;
}
.pr-160 {
  padding-right: var(--spacing-13) !important;
}
.pt-160 {
  padding-top: var(--spacing-13) !important;
}
.pb-160 {
  padding-bottom: var(--spacing-13) !important;
}
.pl-160 {
  padding-left: var(--spacing-13) !important;
}
.pi-16,
.pi-md {
  padding-inline: var(--spacing-05) !important;
}
.w-44 {
  width: 44px;
}
.h-4 {
  height: 4px;
}
.h-8 {
  height: 8px;
}
.h-12 {
  height: 12px;
}
.h-16 {
  height: 16px;
}
.h-24 {
  height: 24px;
}
.h-32 {
  height: 32px;
}
.h-40 {
  height: 40px;
}
.h-48 {
  height: 48px;
}
.h-56 {
  height: 56px;
}
.h-64 {
  height: 64px;
}
.h-80 {
  height: 80px;
}
.h-96 {
  height: 96px;
}
.h-112 {
  height: 112px;
}
.h-128 {
  height: 128px;
}
.h-144 {
  height: 144px;
}
.h-160 {
  height: 160px;
}
.h-192 {
  height: 192px;
}
.h-224 {
  height: 224px;
}
.h-256 {
  height: 256px;
}
.h-288 {
  height: 288px;
}
.h-320 {
  height: 320px;
}
.h-384 {
  height: 384px;
}
.h-448 {
  height: 448px;
}
.h-512 {
  height: 512px;
}
.h-640 {
  height: 640px;
}
.no-focus.form-control,
.form-control .no-focus {
  border-color: transparent;
}
.no-focus.form-control:focus,
.form-control .no-focus:focus {
  outline: 0;
}
.ovf-h {
  overflow: hidden;
}
.break-word {
  -ms-word-break: break-all;
  word-break: break-all;
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
}
.background-brand {
  background-color: var(--background-brand);
  color: var(--text-on-color);
}
.background-brand a {
  color: var(--text-on-color);
}
.d-inline-flex {
  display: inline-flex;
}
.d-flex {
  display: flex;
}
.fd-row {
  flex-direction: row;
}
.fd-row-reverse {
  flex-direction: row-reverse;
}
.fd-column {
  flex-direction: column;
}
.fd-column-reverse {
  flex-direction: column-reverse;
}
.fw-wrap {
  flex-wrap: wrap;
}
.fw-nowrap {
  flex-wrap: nowrap;
}
.fw-wrap-reverse {
  flex-wrap: wrap-reverse;
}
.jc-start {
  justify-content: flex-start;
}
.jc-end {
  justify-content: flex-end;
}
.jc-center {
  justify-content: center;
}
.jc-space-between {
  justify-content: space-between;
}
.jc-space-around {
  justify-content: space-around;
}
.jc-space-evenly {
  justify-content: space-evenly;
}
.ai-start {
  align-items: flex-start;
}
.ai-end {
  align-items: flex-end;
}
.ai-center {
  align-items: center;
}
.ai-baseline {
  align-items: baseline;
}
.ai-stretch {
  align-items: stretch;
}
.ac-start {
  align-content: flex-start;
}
.ac-end {
  align-content: flex-end;
}
.ac-center {
  align-content: center;
}
.ac-space-between {
  align-content: space-between;
}
.ac-space-around {
  align-content: space-around;
}
.ac-stretch {
  align-content: stretch;
}
.as-start {
  align-self: flex-start;
}
.as-end {
  align-self: flex-end;
}
.as-center {
  align-self: center;
}
.as-baseline {
  align-self: baseline;
}
.as-stretch {
  align-self: stretch;
}
.fg-1 {
  flex-grow: 1;
}
.fg-0 {
  flex-grow: 0;
}
.fs-1 {
  flex-shrink: 1;
}
.fs-0 {
  flex-shrink: 0;
}
.fb-auto {
  flex-basis: auto;
}
.fb-0 {
  flex-basis: 0;
}
.fo-auto {
  order: auto;
}
.fo-0 {
  order: 0;
}
.fo-1 {
  order: 1;
}
.fo-2 {
  order: 2;
}
.fo-3 {
  order: 3;
}
.fo-4 {
  order: 4;
}
.fo-5 {
  order: 5;
}
.gap-20,
.gap-lg {
  gap: 20px !important;
}
.gap-15,
.gap-md {
  gap: 15px !important;
}
.gap-10,
.gap-sm {
  gap: 10px !important;
}
.gap-5,
.gap-xs {
  gap: 5px !important;
}
.gap-4 {
  gap: 4px !important;
}
.gap-3 {
  gap: 3px !important;
}
.gap-2 {
  gap: 2px !important;
}
.gap-1 {
  gap: 1px !important;
}
.gap-0 {
  gap: 0px !important;
}
@media (min-width: 768px) {
  .fd-row-sm {
    flex-direction: row;
  }
  .fd-row-reverse-sm {
    flex-direction: row-reverse;
  }
  .fd-column-sm {
    flex-direction: column;
  }
  .fd-column-reverse-sm {
    flex-direction: column-reverse;
  }
  .fw-wrap-sm {
    flex-wrap: wrap;
  }
  .fw-nowrap-sm {
    flex-wrap: nowrap;
  }
  .fw-wrap-reverse-sm {
    flex-wrap: wrap-reverse;
  }
  .jc-start-sm {
    justify-content: flex-start;
  }
  .jc-end-sm {
    justify-content: flex-end;
  }
  .jc-center-sm {
    justify-content: center;
  }
  .jc-space-between-sm {
    justify-content: space-between;
  }
  .jc-space-around-sm {
    justify-content: space-around;
  }
  .jc-space-evenly-sm {
    justify-content: space-evenly;
  }
  .ai-start-sm {
    align-items: flex-start;
  }
  .ai-end-sm {
    align-items: flex-end;
  }
  .ai-center-sm {
    align-items: center;
  }
  .ai-baseline-sm {
    align-items: baseline;
  }
  .ai-stretch-sm {
    align-items: stretch;
  }
  .ac-start-sm {
    align-content: flex-start;
  }
  .ac-end-sm {
    align-content: flex-end;
  }
  .ac-center-sm {
    align-content: center;
  }
  .ac-space-between-sm {
    align-content: space-between;
  }
  .ac-space-around-sm {
    align-content: space-around;
  }
  .ac-stretch-sm {
    align-content: stretch;
  }
  .as-start-sm {
    align-self: flex-start;
  }
  .as-end-sm {
    align-self: flex-end;
  }
  .as-center-sm {
    align-self: center;
  }
  .as-baseline-sm {
    align-self: baseline;
  }
  .as-stretch-sm {
    align-self: stretch;
  }
  .fg-1-sm {
    flex-grow: 1;
  }
  .fg-0-sm {
    flex-grow: 0;
  }
  .fs-1-sm {
    flex-shrink: 1;
  }
  .fs-0-sm {
    flex-shrink: 0;
  }
  .fb-auto-sm {
    flex-basis: auto;
  }
  .fb-0-sm {
    flex-basis: 0;
  }
  .fo-auto-sm {
    order: auto;
  }
  .fo-0-sm {
    order: 0;
  }
  .fo-1-sm {
    order: 1;
  }
  .fo-2-sm {
    order: 2;
  }
  .fo-3-sm {
    order: 3;
  }
  .fo-4-sm {
    order: 4;
  }
  .fo-5-sm {
    order: 5;
  }
}
@media (min-width: 992px) {
  .fd-row-md {
    flex-direction: row;
  }
  .fd-row-reverse-md {
    flex-direction: row-reverse;
  }
  .fd-column-md {
    flex-direction: column;
  }
  .fd-column-reverse-md {
    flex-direction: column-reverse;
  }
  .fw-wrap-md {
    flex-wrap: wrap;
  }
  .fw-nowrap-md {
    flex-wrap: nowrap;
  }
  .fw-wrap-reverse-md {
    flex-wrap: wrap-reverse;
  }
  .jc-start-md {
    justify-content: flex-start;
  }
  .jc-end-md {
    justify-content: flex-end;
  }
  .jc-center-md {
    justify-content: center;
  }
  .jc-space-between-md {
    justify-content: space-between;
  }
  .jc-space-around-md {
    justify-content: space-around;
  }
  .jc-space-evenly-md {
    justify-content: space-evenly;
  }
  .ai-start-md {
    align-items: flex-start;
  }
  .ai-end-md {
    align-items: flex-end;
  }
  .ai-center-md {
    align-items: center;
  }
  .ai-baseline-md {
    align-items: baseline;
  }
  .ai-stretch-md {
    align-items: stretch;
  }
  .ac-start-md {
    align-content: flex-start;
  }
  .ac-end-md {
    align-content: flex-end;
  }
  .ac-center-md {
    align-content: center;
  }
  .ac-space-between-md {
    align-content: space-between;
  }
  .ac-space-around-md {
    align-content: space-around;
  }
  .ac-stretch-md {
    align-content: stretch;
  }
  .as-start-md {
    align-self: flex-start;
  }
  .as-end-md {
    align-self: flex-end;
  }
  .as-center-md {
    align-self: center;
  }
  .as-baseline-md {
    align-self: baseline;
  }
  .as-stretch-md {
    align-self: stretch;
  }
  .fg-1-md {
    flex-grow: 1;
  }
  .fg-0-md {
    flex-grow: 0;
  }
  .fs-1-md {
    flex-shrink: 1;
  }
  .fs-0-md {
    flex-shrink: 0;
  }
  .fb-auto-md {
    flex-basis: auto;
  }
  .fb-0-md {
    flex-basis: 0;
  }
  .fo-auto-md {
    order: auto;
  }
  .fo-0-md {
    order: 0;
  }
  .fo-1-md {
    order: 1;
  }
  .fo-2-md {
    order: 2;
  }
  .fo-3-md {
    order: 3;
  }
  .fo-4-md {
    order: 4;
  }
  .fo-5-md {
    order: 5;
  }
}
@media (min-width: 1200px) {
  .fd-row-lg {
    flex-direction: row;
  }
  .fd-row-reverse-lg {
    flex-direction: row-reverse;
  }
  .fd-column-lg {
    flex-direction: column;
  }
  .fd-column-reverse-lg {
    flex-direction: column-reverse;
  }
  .fw-wrap-lg {
    flex-wrap: wrap;
  }
  .fw-nowrap-lg {
    flex-wrap: nowrap;
  }
  .fw-wrap-reverse-lg {
    flex-wrap: wrap-reverse;
  }
  .jc-start-lg {
    justify-content: flex-start;
  }
  .jc-end-lg {
    justify-content: flex-end;
  }
  .jc-center-lg {
    justify-content: center;
  }
  .jc-space-between-lg {
    justify-content: space-between;
  }
  .jc-space-around-lg {
    justify-content: space-around;
  }
  .jc-space-evenly-lg {
    justify-content: space-evenly;
  }
  .ai-start-lg {
    align-items: flex-start;
  }
  .ai-end-lg {
    align-items: flex-end;
  }
  .ai-center-lg {
    align-items: center;
  }
  .ai-baseline-lg {
    align-items: baseline;
  }
  .ai-stretch-lg {
    align-items: stretch;
  }
  .ac-start-lg {
    align-content: flex-start;
  }
  .ac-end-lg {
    align-content: flex-end;
  }
  .ac-center-lg {
    align-content: center;
  }
  .ac-space-between-lg {
    align-content: space-between;
  }
  .ac-space-around-lg {
    align-content: space-around;
  }
  .ac-stretch-lg {
    align-content: stretch;
  }
  .as-start-lg {
    align-self: flex-start;
  }
  .as-end-lg {
    align-self: flex-end;
  }
  .as-center-lg {
    align-self: center;
  }
  .as-baseline-lg {
    align-self: baseline;
  }
  .as-stretch-lg {
    align-self: stretch;
  }
  .fg-1-lg {
    flex-grow: 1;
  }
  .fg-0-lg {
    flex-grow: 0;
  }
  .fs-1-lg {
    flex-shrink: 1;
  }
  .fs-0-lg {
    flex-shrink: 0;
  }
  .fb-auto-lg {
    flex-basis: auto;
  }
  .fb-0-lg {
    flex-basis: 0;
  }
  .fo-auto-lg {
    order: auto;
  }
  .fo-0-lg {
    order: 0;
  }
  .fo-1-lg {
    order: 1;
  }
  .fo-2-lg {
    order: 2;
  }
  .fo-3-lg {
    order: 3;
  }
  .fo-4-lg {
    order: 4;
  }
  .fo-5-lg {
    order: 5;
  }
}
.builder,
.builder-slot {
  position: relative;
}
.builder [data-token],
.builder-slot [data-token] {
  cursor: pointer;
}
.builder .btn-block.ui-draggable-dragging,
.builder-slot .btn-block.ui-draggable-dragging {
  width: 104px;
  height: 68px;
  margin: 6px 12px;
  white-space: normal;
}
.builder .builder-panel-top,
.builder-slot .builder-panel-top {
  margin-bottom: 10px;
}
.builder .template-dnd-help,
.builder-slot .template-dnd-help,
.builder .custom-dnd-help,
.builder-slot .custom-dnd-help {
  display: table-cell;
  vertical-align: middle;
  width: 100%;
}
.builder-active {
  background-color: var(--background);
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1030;
}
.builder-panel {
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  width: 30%;
  height: 100%;
  padding: 15px;
  background-color: var(--layer, #d5d4d4);
  overflow-y: auto;
}
.builder-content {
  position: fixed;
  left: 0;
  top: 0;
  width: 70%;
  height: 100%;
}
.code-mode .builder-panel {
  width: 50%;
  position: fixed;
}
.code-mode .builder-content {
  width: 50%;
}
.builder-panel .panel a.btn {
  white-space: normal;
}
/********** SLOT ************/
.builder-active-slot {
  background-color: #fff;
  z-index: 1030;
}
.builder-panel-slot {
  width: 50%;
  padding: 15px;
  background-color: #d5d4d4;
  overflow-y: auto;
}
.builder-content-slot {
  left: 50%;
  width: 50%;
}
.code-mode .builder-panel-slot {
  width: 50%;
}
.code-mode .builder-content-slot {
  width: 50%;
}
.builder-panel-slot .panel a.btn {
  white-space: normal;
}
/************* END SLOT ******************/
.ui-draggable-iframeFix {
  z-index: 9999 !important;
}
.CodeMirror {
  border: 1px solid #eee;
  height: auto;
}
.CodeMirror-hints {
  position: absolute;
  z-index: 9999 !important;
  overflow: hidden;
  list-style: none;
  margin: 0;
  padding: 2px;
  -webkit-box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.2);
  border-radius: 3px;
  border: 1px solid silver;
  background: white;
  font-size: 90%;
  font-family: monospace;
  max-height: 20em;
  overflow-y: auto;
}
.CodeMirror-hint {
  margin: 0;
  padding: 0 4px;
  border-radius: 2px;
  white-space: pre;
  color: black;
  cursor: pointer;
}
li.CodeMirror-hint-active {
  background: #08f;
  color: white;
}
@media (max-width: 767px) {
  .builder .builder-panel {
    width: 100%;
    bottom: 0;
    top: auto;
    height: 35%;
    padding-left: 30px !important;
    padding-right: 30px !important;
    border-top: 1px solid #757575;
    position: fixed;
  }
  .builder .builder-content {
    right: 0;
    width: 100%;
  }
  .builder .builder-panel-top {
    position: relative;
    width: 100%;
  }
  .builder .builder-tokens {
    margin-top: 10px;
  }
}
.mautic-editable {
  min-height: 75px;
  width: 100%;
  border: dashed 1px #000;
  margin-top: 3px;
  margin-bottom: 3px;
}
.mautic-editable.over-droppable {
  border: dashed 2px #4e5e9e;
  -webkit-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.75);
}
.mautic-editable-placeholder {
  height: 100%;
  width: 100%;
  text-align: center;
  margin-top: 25px;
}
div[contentEditable=true]:empty:not(:focus):before {
  content: attr(data-placeholder);
  padding: 5px;
  display: table-cell;
}
.inline-token-list {
  max-height: 200px;
  overflow-y: auto;
  overflow-x: hidden;
  margin-bottom: 20px;
  padding-left: 0;
  width: 240px;
}
.inline-token {
  position: relative;
  display: block;
  padding: 5px;
  margin-bottom: -1px;
  background-color: #ffffff;
  border: 1px solid #f7f7f7;
  color: #f7f7f7;
  font-size: 12px;
}
.inline-token:first-child {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
}
.inline-token:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
a.inline-token {
  color: #000000;
  text-decoration: none;
  font-family: \"Source Sans 3\", Helvetica, Arial, sans-serif;
  line-height: 1.3856;
}
a.inline-token:hover,
a.inline-token:focus {
  background-color: #DBDFEC;
}
a.inline-token .text-muted {
  color: #8393a2;
}
.map-options {
  margin-left: 10px;
  margin-bottom: 10px;
}
.map-options h5 {
  color: #3c4650;
  font-size: 13px;
}
.map-options__cointainer {
  display: flex;
  flex-direction: row;
}
.map-options__item.active,
.map-options__item.active:hover {
  color: #fff;
  background-color: #3a7e6f;
}
.map-options__item:focus,
.map-options__item.focus,
.map-options__item:active,
.map-options__item.active.focus {
  color: #fff;
  background-color: #3a7e6f;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 30px;
  height: 30px;
  line-height: 30px;
  left: 10px;
  padding: 0;
  background-color: var(--button-primary);
  border-radius: 4px;
  box-shadow: 0 -2px 4px 0 rgba(0, 0, 0, 0.04), 0 2px 4px 0 rgba(0, 0, 0, 0.04), 0 6px 12px 0 rgba(0, 0, 0, 0.16);
  font-size: 20px;
  transition: var(--transition-all-productive);
}
.jvectormap-zoomin:hover,
.jvectormap-zoomout:hover {
  background-color: var(--button-primary-hover);
}
.jvectormap-zoomin {
  top: 16px;
}
.jvectormap-zoomout {
  top: 52px;
}
.jvectormap-tip {
  padding: 8px;
  font-size: 14px;
  border-radius: 4px;
  pointer-events: none;
}
.jvectormap-legend-cnt {
  right: auto;
  left: 0;
}
.jvectormap-legend-cnt-h .jvectormap-legend {
  margin: 0 0 16px 10px;
  padding: 8px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-title {
  font-weight: normal;
}
.jvectormap-legend .jvectormap-legend-inner {
  display: none;
}
.map-options__item.btn,
.map-options__item.btn:active,
.map-options__item.btn.focus,
.map-options__item.btn:focus,
.map-options__item.btn.active,
.map-options__item.btn:active:focus,
.map-options__item.btn.active:focus {
  outline: 0 !important;
}
.modal-content {
  border-radius: var(--border-radius-lg);
  box-shadow: none;
}
.form-type-modal-backdrop {
  background-color: var(--background) !important;
  opacity: 1 !important;
  backdrop-filter: blur(10px);
}
.modal-backdrop {
  backdrop-filter: blur(4px);
}
.modal kbd {
  box-shadow: inset 0 -1px 0 #afb8c157;
  border: 1px solid #afb8c157;
}
.accordion {
  --layout-density-padding-inline-local: 16px;
  padding: 0;
  border: 0;
  margin: 0;
  margin-bottom: -1px;
  font-family: inherit;
  font-size: 100%;
  vertical-align: baseline;
  inline-size: 100%;
  list-style: none;
}
.accordion .panel {
  display: list-item;
  border: none;
  border-radius: 0;
  margin: 0;
  overflow: visible;
  border-block-start: 1px solid var(--border-subtle);
  transition: border-color cubic-bezier(0.2, 0, 0.38, 0.9) 110ms;
  background-color: transparent;
  box-shadow: none;
}
.accordion .panel:last-child {
  border-block-end: 1px solid var(--border-subtle);
}
.accordion .panel:not(.panel--active):last-child:hover {
  border-block-end-color: var(--layer-hover);
}
.accordion-heading {
  font-family: inherit;
  font-size: 100%;
  vertical-align: baseline;
  display: inline-block;
  padding: 0;
  border: 0;
  -webkit-appearance: none;
  appearance: none;
  background: 0 0;
  text-align: start;
  position: relative;
  display: flex;
  flex-direction: row-reverse;
  align-items: center;
  justify-content: flex-start;
  margin: 0;
  color: var(--text-primary, #161616);
  cursor: pointer;
  inline-size: 100%;
  min-block-size: 40px;
  padding-inline-end: var(--layout-density-padding-inline-local);
  transition: background-color cubic-bezier(0.2, 0, 0.38, 0.9) 110ms;
}
.accordion-heading::-moz-focus-inner {
  border: 0;
}
.accordion-heading:hover {
  background-color: var(--layer-hover);
  outline: none;
}
.accordion-heading:focus {
  position: relative;
  z-index: 2;
  box-shadow: 0 -1px 0 0 var(--focus, #4e5e9e), inset 0 1px 0 0 var(--focus, #4e5e9e), inset 2px 0 0 0 var(--focus, #4e5e9e), 0 1px 0 0 var(--focus, #4e5e9e), inset 0 -1px 0 0 var(--focus, #4e5e9e), inset -2px 0 0 0 var(--focus, #4e5e9e);
  outline: none;
}
.accordion-heading[disabled] {
  color: var(--text-disabled, rgba(22, 22, 22, 0.25));
  cursor: not-allowed;
}
.accordion-heading[disabled] .accordion-arrow {
  fill: var(--icon-disabled, #16161640);
}
.accordion-heading[disabled]:hover::before {
  background-color: transparent;
}
.accordion-arrow {
  outline: 2px solid transparent;
  outline-offset: -2px;
  flex: 0 0 1rem;
  fill: var(--icon-primary, #161616);
  inline-size: 1rem;
  transform: scaleY(-1);
  transition: var(--transition-all-productive);
}
.accordion-heading.collapsed .accordion-arrow {
  fill: var(--icon-primary, #161616);
  transform: scaleY(1);
}
.accordion-title {
  font-weight: 400;
  line-height: 1.42857;
  color: var(--text-primary);
  z-index: 1;
  inline-size: 100%;
  padding-inline-start: var(--layout-density-padding-inline-local);
  text-align: start;
}
.accordion-content {
  display: flex;
  flex-direction: column;
  padding-inline: var(--layout-density-padding-inline-local);
  margin-block: 20px;
  margin-block-end: 25px;
}
.tile {
  --layout-density-padding-inline-local: 16px;
  position: relative;
  display: flex;
  flex-grow: 1;
  flex-direction: column;
  padding: var(--layout-density-padding-inline-local);
  background-color: var(--layer);
  min-block-size: 4rem;
  min-inline-size: 8rem;
  border-radius: var(--border-radius-md);
  outline: 2px solid transparent;
  outline-offset: -2px;
}
.tile.tile-clickable,
.tile.tile-selectable {
  box-sizing: border-box;
  padding: 0;
  border: 1px solid transparent;
  margin: 0;
  font-family: inherit;
  font-size: 100%;
  vertical-align: baseline;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.28572;
  padding: var(--layout-density-padding-inline-local);
  cursor: pointer;
  transition: var(--transition-all-productive);
  outline-color: transparent;
}
.tile.tile-clickable:hover,
.tile.tile-selectable:hover {
  background: var(--layer-hover);
}
.tile.tile-clickable:focus,
.tile.tile-selectable:focus {
  outline-color: var(--focus, #4e5e9e);
  outline-offset: -2px;
  text-decoration: none;
}
.tile.tile-clickable .tile-icon,
.tile.tile-selectable .tile-icon {
  inset-block-end: var(--layout-density-padding-inline-local);
}
.tile.tile-clickable {
  color: var(--text-primary, #161616);
  text-decoration: none;
}
.tile .tile-icon {
  position: absolute;
  inset-block-start: var(--layout-density-padding-inline-local);
  inset-inline-end: var(--layout-density-padding-inline-local);
  fill: var(--icon-interactive, #4e5e9e);
}
.tile .tile-icon.tile-disabled,
.tile .tile-icon:disabled {
  fill: var(--icon-disabled, rgba(22, 22, 22, 0.25));
}
.tile * {
  box-sizing: inherit;
}
.tile hr {
  margin-inline: calc(-1 * var(--layout-density-padding-inline-local));
  width: auto;
}
.nav-tabs-contained + .tab-content .tile {
  background-color: var(--layer-02);
}
.nav-tabs-contained + .tab-content .tile.tile-clickable:hover,
.nav-tabs-contained + .tab-content .tile.tile-selectable:hover {
  background: var(--layer-hover-02);
}
@media (min-width: 992px) {
  .modal-xl {
    width: 1140px;
  }
}
.label-as-badge {
  border-radius: 9px !important;
}
.media-list .media-body {
  width: auto;
}
form[name=\"lead\"] .media-body,
form[name=\"lead\"] .contact-avatar {
  width: 100%;
}
.bg-auto .tabs-left > li.active > a,
.bg-auto .tabs-left > li.active > a:hover,
.bg-auto .tabs-left > li.active > a:focus {
  border-left-width: 0;
}
.bg-auto .tabs-left,
.bg-auto .tabs-right {
  -webkit-box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 -3px 0 -3px rgba(0, 0, 0, 0.05);
}
.bg-auto .tabs-left li:last-child,
.bg-auto .tabs-right li:last-child {
  margin-bottom: -2px;
}
.bg-auto .tabs-right > li.active > a,
.bg-auto .tabs-right > li.active > a:hover,
.bg-auto .tabs-right > li.active > a:focus {
  border-right-width: 0;
}
.tab-button {
  border-bottom: 1px solid #ebedf0 !important;
}
.modal-body.np .tabs-horizontal {
  margin-top: -1px;
}
.modal-body.np .tabs-left li > a,
.modal-body.np .tabs-right li > a {
  border-radius: 0;
}
.confirmation-modal .modal-content {
  width: 400px;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10% auto;
  padding: 8px;
  border-radius: 8px;
  background: #fff;
  text-align: center;
}
.content-overlay {
  position: absolute;
  background: #fbfbfb;
  z-index: 50;
  width: 100%;
  height: 100%;
  padding-left: 15px;
  font-weight: bold;
}
.stat-boxes .panel {
  height: 164px;
}
.has-click-event {
  cursor: pointer;
}
.mautibot-error {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
}
label.required:after {
  content: \" *\";
  color: #F86B4F;
}
#app-header .nav > li > a {
  padding: 10px 12px;
}
.col-actions {
  width: 100px;
}
/* Shuffle */
.shuffle-item .card {
  height: 150px;
}
.equal,
.equal > div[class*='col-'] {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex: 1 1 auto;
}
.mautic-pleasewait {
  width: 200px;
  height: 50px;
  position: fixed;
  left: 50%;
  top: 10px;
  margin: 0 0 0 -100px;
  text-align: center;
  font-weight: bold;
  font-size: 2em;
  color: #eee;
  z-index: 9999;
}
body.noscroll {
  overflow: hidden;
}
.form-select-modal .panel-body {
  min-height: 150px;
}
@media (max-width: 768px) {
  .form-select-modal .panel-body {
    min-height: 0;
  }
}
.theme-selected {
  outline: 1px solid var(--focus);
  -webkit-box-shadow: 0px 0px 40px var(--focus);
  box-shadow: 0px 0px 40px var(--focus);
}
#app-content.content-only .toolbar-form-buttons.pull-right {
  padding-right: 20px;
}
.fr-toolbar {
  border-top: 2px solid #4e5d9d;
}
.modal-body-content iframe.fr-iframe {
  min-height: 300px;
}
.CodeMirror {
  border: 1px solid #d5d5d5;
  border-radius: 3px;
}
table.table > tbody > tr > td.long-text {
  max-width: 500px;
  min-width: 300px;
  -ms-word-break: break-all;
  word-break: break-word;
  overflow-wrap: break-word;
  word-wrap: break-word;
  white-space: normal;
}
#dynamicContentContainer .remove-item {
  display: block;
}
#dynamicContentContainer > .tab-pane > .panel > ul {
  white-space: nowrap;
  overflow: auto;
  overflow-y: hidden;
  max-width: 100%;
}
#dynamicContentContainer > .tab-pane > .panel > ul li {
  display: inline-block;
  vertical-align: top;
  float: none;
}
div[data-filter-container] .in-group {
  margin-left: 20px;
}
div[data-filter-container] .panel {
  margin-bottom: 0;
  margin-top: 20px;
}
div[data-filter-container] .panel.in-group {
  margin-top: 0;
  border-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
td.col-id,
th.col-id {
  width: 75px;
}
.badge-wrapper {
  float: right;
  vertical-align: middle;
  margin-right: -10px;
}
span.slot-caption {
  font-size: 12px;
}
.imagecard-caption,
figcaption {
  font-size: 16px;
}
.imagecard {
  background-color: #ddd !important;
}
.imagecard .imagecard-caption {
  background-color: #bbb !important;
}
ul.media-list.media-list-feed div.media-body {
  width: auto;
}
.ico-email:before {
  font-family: \"FontAwesome\";
  content: \"\\f1fa\";
}
.ico-sms:before {
  font-family: \"FontAwesome\";
  content: \"\\f27b\";
}
#globalSearchDropdown .list-group-item > a {
  padding-top: 10px;
}
.characters-count {
  z-index: 100;
  float: right;
  position: relative;
}
.ui-sortable-handle {
  cursor: grab;
}
.ui-sortable-handle:active {
  cursor: grabbing;
}
.notification {
  width: inherit !important;
}
.notification-title {
  display: block !important;
}
.flip-vertically {
  transform: scaleY(-1);
  display: inline-flex;
}
.disabled-row {
  opacity: 0.6;
  pointer-events: none;
  background-color: #f2f2f2;
}
.publishstatus_pulse {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  display: block;
}
.publishstatus_pulse:after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  -webkit-animation: circle-pulse 2s infinite;
  animation: circle-pulse 3s infinite;
  border-radius: 50%;
  background-color: inherit;
}
@keyframes circle-pulse {
  0% {
    -webkit-transform: scale(0.55);
    transform: scale(1);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(3);
    opacity: 0;
  }
  100% {
    -webkit-transform: scale(0.95);
    transform: scale(1);
    opacity: 0;
  }
}
.copy-icon {
  display: inline-flex;
  opacity: 0;
  transform: translateX(-0.25rem);
  transition: var(--transition-all-productive);
  margin-right: -18px;
  background-color: var(--layer);
  z-index: 2;
  position: relative;
  border-radius: clamp(1px, var(--border-radius-sm), 4px);
  aspect-ratio: 1 / 1;
  color: var(--icon-interactive);
  height: 18px;
  vertical-align: middle;
  justify-content: center;
  align-items: center;
}
code:hover > .copy-icon {
  opacity: 1;
  transform: none;
}
.mautic-brand {
  display: block;
  height: 48px;
  padding-left: 35px;
  padding-right: 32px;
  width: 100%;
  overflow: hidden;
}
.mautic-brand.pull-left {
  width: 75%;
}
.mautic-brand > svg.mautic-logo-figure {
  width: 32px;
  height: 48px;
}
.mautic-brand > svg.mautic-logo-figure .circle {
  fill: #4e5e9e;
}
.mautic-brand > svg.mautic-logo-figure .m,
.mautic-brand > svg.mautic-logo-figure .m-arrow {
  fill: #FDB933;
}
.mautic-brand > svg.mautic-logo-text {
  height: 48px;
  width: 98px;
}
.mautic-brand > svg.mautic-logo-text .m,
.mautic-brand > svg.mautic-logo-text .a,
.mautic-brand > svg.mautic-logo-text .u,
.mautic-brand > svg.mautic-logo-text .t,
.mautic-brand > svg.mautic-logo-text .i,
.mautic-brand > svg.mautic-logo-text .c {
  fill: #4e5e9e;
}
@media (max-width: 768px) {
  svg.mautic-logo-text {
    display: none;
  }
}
.list-toolbar .input-group .twitter-typeahead:last-child .tt-input,
.list-toolbar .input-group .twitter-typeahead:last-child .tt-hint,
.list-toolbar .form-control.search,
.list-toolbar .input-group .input-group-btn button,
.list-toolbar .btn,
.list-toolbar div {
  height: 48px;
  border-radius: unset;
  margin: 0;
}
.list-toolbar .input-group .twitter-typeahead:last-child .tt-input:hover,
.list-toolbar .input-group .twitter-typeahead:last-child .tt-hint:hover,
.list-toolbar .form-control.search:hover,
.list-toolbar .input-group .input-group-btn button:hover,
.list-toolbar .btn-ghost:hover {
  background-color: var(--field-hover);
}
.list-toolbar > .btn:last-child,
.list-toolbar > .btn:only-of-type + .input-group > input {
  border-radius: 0 var(--border-radius-lg) 0 0;
}
.list-toolbar > .btn:first-child {
  border-radius: var(--border-radius-lg) 0 0 0;
}
.well {
  box-shadow: none;
}
.collapsed .arrow {
  transform: scaleY(-1);
}
.description {
  width: 410px;
  max-width: 410px;
  transition-delay: 2s;
  -webkit-transition: var(--transition-all-expressive);
  -o-transition: var(--transition-all-expressive);
  transition: var(--transition-all-expressive);
}
.description:has(.collapsed) {
  width: 140px;
  -webkit-transition: all 1.5s var(--easing-standard-expressive);
  -o-transition: all 1.5s var(--easing-standard-expressive);
  transition: all 1.5s var(--easing-standard-expressive);
}
.description-content {
  width: 388px;
}
.dropup.quick-help {
  position: fixed;
  z-index: 9999;
  bottom: 15px;
  right: 15px;
}
.dropdown-toggle.quick-help {
  background-color: var(--background);
  border: 1px solid var(--border-subtle);
  box-shadow: rgba(0, 0, 0, 0.07) 0px -1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
}
.toggle {
  display: inline-block;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.toggle__appearance {
  display: inline-grid;
  align-items: center;
  -webkit-column-gap: 0.5em;
  -moz-column-gap: 0.5em;
  column-gap: 0.5em;
  cursor: pointer;
  grid-template-columns: -webkit-max-content -webkit-max-content;
  grid-template-columns: max-content max-content;
}
.toggle__switch {
  --switch-size: 40px;
  position: relative;
  border-radius: var(--switch-size);
  background-color: var(--toggle-off, #8d8d8d);
  block-size: calc(var(--switch-size) - 17px);
  min-block-size: 10px;
  inline-size: var(--switch-size);
  transition: var(--transition-all-productive);
}
.toggle__switch::before {
  position: absolute;
  border-radius: 50%;
  background-color: var(--icon-on-color, #ffffff);
  block-size: calc(var(--switch-size) - 21px);
  content: \"\";
  inline-size: calc(var(--switch-size) - 21px);
  inset-block-start: 2px;
  inset-inline-start: 2px;
  transition: -webkit-transform var(--duration-expressive) cubic-bezier(0.54, 1.85, 0.5, 1);
  transition: transform var(--duration-expressive) cubic-bezier(0.54, 1.85, 0.5, 1);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.toggle__label:focus .toggle__switch,
.toggle:not(.toggle--disabled):not(:has(.disabled)):active .toggle__switch {
  box-shadow: 0 0 0 1px var(--focus-inset, #ffffff), 0 0 0 3px var(--focus, #0f62fe);
}
.toggle__switch--checked {
  background-color: var(--support-success, #24a148);
}
.toggle__switch--checked::before {
  -webkit-transform: translateX(17px);
  transform: translateX(17px);
}
.toggle__text {
  font-size: var(--body-01-font-size, 0.875em);
  font-weight: var(--body-01-font-weight, 400);
  line-height: var(--body-01-line-height, 1.42857);
  letter-spacing: var(--body-01-letter-spacing, 0.16px);
  color: var(--text-primary, #161616);
}
.toggle__appearance[size=\"sm\"] .toggle__switch {
  --switch-size: 33px;
}
.toggle__appearance[size=\"sm\"] .toggle__switch:before {
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}
.toggle__check {
  position: absolute;
  block-size: 0.4125em;
  fill: var(--support-success, #24a148);
  inline-size: 0.475em;
  inset-block-start: 0.375em;
  inset-inline-end: 0.3125em;
  visibility: hidden;
}
.toggle__appearance[size=\"sm\"] .toggle__switch--checked .toggle__check {
  visibility: visible;
}
.toggle--disabled,
.toggle:has(.disabled) {
  cursor: not-allowed;
}
.toggle--disabled .toggle__label,
.toggle:has(.disabled) .toggle__label {
  pointer-events: none;
}
.toggle--disabled .toggle__label-text,
.toggle:has(.disabled) .toggle__label-text,
.toggle--disabled .toggle__text,
.toggle:has(.disabled) .toggle__text {
  color: var(--text-disabled, rgba(22, 22, 22, 0.25));
}
.toggle--disabled .toggle__switch,
.toggle:has(.disabled) .toggle__switch {
  background-color: var(--button-disabled, #c6c6c6);
}
.toggle--disabled .toggle__switch::before,
.toggle:has(.disabled) .toggle__switch::before {
  background-color: var(--icon-on-color-disabled, #8d8d8d);
  box-shadow: none;
}
.toggle--disabled .toggle__check,
.toggle:has(.disabled) .toggle__check {
  fill: var(--button-disabled, #c6c6c6);
}
.toggle--readonly .toggle__appearance {
  cursor: default;
}
.toggle--readonly .toggle__switch {
  border: 1px solid var(--icon-disabled, rgba(22, 22, 22, 0.25));
  background-color: transparent;
}
.toggle--readonly .toggle__switch::before {
  background-color: var(--text-primary, #161616);
  inset-block-start: 1px;
  inset-inline-start: 1px;
}
.toggle--readonly .toggle__check {
  fill: var(--background, #ffffff);
  inset-block-start: 0.3125em;
  inset-inline-end: 0.25em;
}
.toggle--readonly .toggle__text {
  cursor: text;
  -webkit-user-select: text;
  -ms-user-select: text;
  user-select: text;
}
@media screen and (-ms-high-contrast: active), (forced-colors: active) {
  .toggle__switch,
  .toggle__switch::before {
    outline: 1px solid transparent;
  }
}
@media screen and (-ms-high-contrast: active), (forced-colors: active) {
  .toggle__label:focus .toggle__switch,
  .toggle:not(.toggle--disabled):not(:has(.disabled)):active .toggle__switch {
    color: Highlight;
    outline: 1px solid Highlight;
  }
}
[dir=rtl] .toggle__switch--checked::before {
  -webkit-transform: translateX(-17px);
  transform: translateX(-17px);
}
[dir=rtl] .toggle__appearance--sm .toggle__switch--checked::before {
  -webkit-transform: translateX(-1em);
  transform: translateX(-1em);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app.css", "/app/docroot/app/bundles/CoreBundle/Assets/css/app.css");
    }
}