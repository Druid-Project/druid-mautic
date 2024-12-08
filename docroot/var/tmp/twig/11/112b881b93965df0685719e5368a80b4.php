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

/* @bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less */
class __TwigTemplate_e648249ba55176ab6f61cfb39cc4bbc7 extends Template
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
        yield ".ms-container{
  background: transparent url('multiselect/switch.png') no-repeat 50% 50%;
  /*width: 370px;*/
}

.ms-container:after{
  content: \".\";
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
  clear: both;
  min-height: 0;
  visibility: hidden;
}

.ms-container .ms-selectable, .ms-container .ms-selection{
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
}
.ms-container .ms-selection{
  float: right;
}

.ms-container .ms-list{
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  background-color: var(--field);
  -webkit-border-radius: var(--border-radius-sm);
  -moz-border-radius: var(--border-radius-sm);
  border-radius: var(--border-radius-sm);
  position: relative;
  height: 200px;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}

.ms-container .ms-list.ms-focus{
  border-color: var(--focus);
  outline: 0;
  outline: thin dotted \\9;
}

.ms-container ul{
  margin: 0;
  list-style-type: none;
  padding: 0;
}

.ms-container .ms-optgroup-container{
  width: 100%;
}

.ms-container .ms-optgroup-label{
  margin: 0;
  padding: 5px 0px 0px 5px;
  cursor: pointer;
  color: #999;
}

.ms-container .ms-selectable li.ms-elem-selectable,
.ms-container .ms-selection li.ms-elem-selection{
  padding: var(--spacing-03) var(--spacing-04);
  color: var(--text-secondary);
  transition: var(--transition-all-productive);
  line-height: 1em;
}

.ms-container .ms-selectable li.ms-hover,
.ms-container .ms-selection li.ms-hover{
  cursor: pointer;
  color: var(--text-primary);
  text-decoration: none;
  background-color: var(--field-hover);
}

.ms-container .ms-selectable li.disabled,
.ms-container .ms-selection li.disabled{
  background-color: #eee;
  color: #aaa;
  cursor: text;
}

.ms-search {
  width: 100%;
  height: var(--spacing-07);
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/libraries/multiselect/multi-select.less");
    }
}
