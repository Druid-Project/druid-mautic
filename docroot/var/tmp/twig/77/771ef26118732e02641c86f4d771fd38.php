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

/* @bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less */
class __TwigTemplate_31964a6d7153cf16ec8b48e18adb7325 extends Template
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
        yield "//
// Layout Sidebar
// --------------------------------------------------

// animate `app-sidebar` on sidebar-left opened
.csstransforms3d.sidebar-open-ltr {
  .app-sidebar.sidebar-left {
    .translate3d(@sidebar-left-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-ltr {
  .app-sidebar.sidebar-left {
    left: 0;
  }
}
.csstransforms3d.sidebar-open-rtl {
  .app-sidebar.sidebar-left {
    .translate3d(-@sidebar-right-width, 0, 0);
  }
}
.no-csstransforms3d.sidebar-open-rtl {
  .app-sidebar.sidebar-left {
    left: -@sidebar-right-width;
  }
}

// The sidebar itself
.app-sidebar {
  position: fixed;
  z-index: @sidebar-zindex;
  top: 0;
  bottom: 0;

  // sidebar left
  // -------------------------
  &.sidebar-left {
    width: @sidebar-left-width;
    left: -@sidebar-left-width;
    background-color: var(--layer);
    box-shadow: inset -1px 0 0 0 rgba(0, 0, 0, 0.05);
    color: var(--text-secondary);
    .transition(all .3s ease);

    // sidebar header & footer
    .sidebar-header,
    .sidebar-footer {
      .transition(width .3s ease);
      width: @sidebar-left-width;
      background-color: @sidebar-left-header-bg;
    }

    // sidebar content
    .sidebar-content {
      padding-right: 1px;
    }

    // nav-sidebar color variants
    .nav-sidebar {
      > .nav {
        .nav-sidebar-variants(@sidebar-left-bg);
      }
    }

    .nav.sidebar-left-dark, .nav.sidebar-left-dark > li > a:hover {
      background: var(--layer-accent);
    }
  }

  // sidebar header
  .sidebar-header {
    z-index: 100;
    height: @header-height;
    padding-left: 15px;
    padding-right: 15px;

    // sidebar header fixed
    .header-fixed & {
      position: absolute;
      top: 0;

      //box-shadow: 0 5px 5px -5px rgba(0,0,0,0.15), 0 1px 0 rgba(0,0,0,0.03);
    }

    // add top space to `sidebar-content` if header is present
    ~ .sidebar-content {
      top: @header-height;
    }
  }

  // sidebar footer
  .sidebar-footer {
    position: absolute;
    bottom: 0;
    z-index: 9;
    height: @footer-height;
    padding-left: 15px;
    padding-right: 15px;
    box-shadow: 0 -1px 0 0 rgba(0,0,0,0.07);

    .form-control {
      color: transparent;
    }

    // add bottom space to `sidebar-content` if footer is present
    ~ .sidebar-content {
      bottom: @footer-height;
    }
  }

  // sidebar content
  .sidebar-content {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
    margin-top: @navbar-height;

    // nav tab
    .nav.nav-tabs {
      border-bottom: 1px solid darken(@sidebar-right-bg, 1%);
      box-shadow: none;
      > li {
        margin-bottom: 0;
        > a {
          border-width: 0;
          border-radius: 0;
          margin-right: 0;
          padding-top: 12px;
          padding-bottom: 12px;
          color: var(--text-secondary);
          background-color: transparent;
          &:hover,
          &:focus {
            color: var(--text-primary);
            background-color: transparent;
          }
        }
        &.active > a {
          overflow: visible;
          &,
          &:hover,
          &:focus {
            color: var(--text-primary);
            background-color: var(--layer-hover);
          }
          &:after {
            top: auto;
            bottom: -1px;
            height: 1px;
          }
        }
      }
    }
  }

  // sidebar nav
  // -------------------------
  .nav-sidebar {
    > .nav {
      > li {
        > a {
          overflow: hidden;
          padding: 12px 22px;
          .transition(all .15s ease);
          .text {
            .transition(~\"opacity var(--duration-expressive) ease .1s, line-height\");
            opacity: 1;
            transition-delay: .1s;
            margin-left: 0;
            position: relative;
            top: -1px;
            display: block;
            line-height: 18px;
          }
          .icon {
            font-weight: normal;
            font-size: 14px;
            min-width: 26px;
            display: block;
            transition: var(--transition-all-expressive);
          }
          .arrow {
            .transition(~\"opacity .3s ease .1s, margin-left 0s ease .2s\");
            opacity: 1;
            margin-left: 0;
            font-family: 'FontAwesome';
            position: relative;
            top: 1px;
            display: block;
            &:after {
              content: \"\\f0da\";
            }
          }
        }
        // Open and active state
        &.open,
        &.active {
          > a {
            .arrow {
              &:after {
                content: \"\\f0d7\";
              }
            }
            .icon {
              color: var(--icon-interactive);
            }
          }
        }

        // nav-submenu style
        > .nav-submenu {
          position: relative;
          padding-left: 50px;


          // the line
          &:after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 26px;
            z-index: 1;
            width: 1px;
          }

          > li {
            position: relative;
            list-style: none;

            &:last-child {
              padding-bottom: var(--spacing-05);
            }

            // the dot
            &:after {
              content: '';
              position: absolute;
              z-index: 2;
              top: 11px;
              left: -27px;
              width: 7px;
              height: 7px;
              border-radius: 7px;
            }
            &.active {
              // the dot
              &:after {
                background-color: @brand-warning !important;
              }
            }

            > a {
              display: block;
              padding: 5px 20px 5px 0px;
              .transition(all .15s ease);
            }
          }
        }
      }

      // nav-heading
      .nav-heading {
        text-transform: uppercase;
        padding: 10px 18px;
        &:first-child {
          padding-top: 20px;
        }
      }
    }
  }
}

// breakpoint screen-sm and up
// -------------------------
@media (min-width: @screen-sm-min) {
  // sidebar
  // -------------------------
  .app-sidebar {
    // sidebar left
    // -------------------------
    &.sidebar-left {
      left: 0;

      // reset app-content
      ~ #app-content {
        margin-left: @sidebar-left-width;

        // sidebar is on collapse state
        .sidebar-left-collapse & {
          margin-left: @sidebar-left-collapse-width;
        }
      }
      // reset app-footer
      ~ #app-footer {
        margin-left: @sidebar-left-width;

        // reset app-footer on sidebar collapse
        .sidebar-left-collapse & {
          margin-left: @sidebar-left-collapse-width;
        }
      }
    }
  }
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/layouts/sidebar.less");
    }
}
