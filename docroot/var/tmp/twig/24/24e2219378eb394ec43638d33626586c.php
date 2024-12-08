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

/* @MauticCore/Translation/index.html.twig */
class __TwigTemplate_fd8671fbaa232802e0ee297556199dc8 extends Template
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
        // line 9
        $___internal_parse_1_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 10
            $context["nameGetter"] = ((array_key_exists("nameGetter", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 10, $this->source); })()), "getName")) : ("getName"));
            // line 11
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "children", [], "any", false, false, false, 11)) > 0) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) === CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11))))) {
                // line 12
                yield "<!-- start: related translations list -->
  <ul class=\"list-group\">
      ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 14, $this->source); })()), "parent", [], "any", false, false, false, 14)) {
                    // line 15
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/row.html.twig", ["translation" => CoreExtension::getAttribute($this->env, $this->source,                     // line 16
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16), "translations" =>                     // line 17
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 17, $this->source); })()), "actionRoute" =>                     // line 18
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 18, $this->source); })()), "activeEntity" =>                     // line 19
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 19, $this->source); })()), "model" =>                     // line 20
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 20, $this->source); })()), "nameGetter" =>                     // line 21
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 21, $this->source); })())]);
                    // line 22
                    yield "
      ";
                }
                // line 24
                yield "      ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24)) > 0)) {
                    // line 25
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 25, $this->source); })()), "children", [], "any", false, false, false, 25));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                        // line 26
                        yield "              ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/row.html.twig", ["translation" =>                         // line 27
$context["translation"], "translations" =>                         // line 28
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 28, $this->source); })()), "actionRoute" =>                         // line 29
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 29, $this->source); })()), "activeEntity" =>                         // line 30
(isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 30, $this->source); })()), "model" =>                         // line 31
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 31, $this->source); })()), "nameGetter" =>                         // line 32
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 32, $this->source); })())]);
                        // line 33
                        yield "
          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    yield "      ";
                }
                // line 36
                yield "  </ul>
  <!--/ end: related translations list -->";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield Twig\Extension\CoreExtension::spaceless($___internal_parse_1_);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Translation/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  121 => 9,  115 => 36,  112 => 35,  97 => 33,  95 => 32,  94 => 31,  93 => 30,  92 => 29,  91 => 28,  90 => 27,  88 => 26,  70 => 25,  67 => 24,  63 => 22,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  54 => 15,  52 => 14,  48 => 12,  46 => 11,  44 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Translation/index.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Translation/index.html.twig");
    }
}
