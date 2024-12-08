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

/* @MauticLead/Company/form_standalone.html.twig */
class __TwigTemplate_5f304f4b062935419ade23dea9431ac4 extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Company/form_standalone.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "company";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) {
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.menu.edit", ["%name%" => $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14))]), "html", null, true);
        } else {
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.menu.new"), "html", null, true);
        }
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "routeBase" => "company", "langVar" => "lead.company"]);
        yield "
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
        <div class=\"col-md-3 height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                <ul class=\"list-group list-group-tabs\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 31
            yield "                        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 31, $this->source); })()), $context["g"], [], "array", false, false, false, 31))) {
                // line 32
                yield "                            <li class=\"list-group-item ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 32)) {
                    yield "active";
                }
                yield "\">
                                <a href=\"#company-";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"list-group-item-text steps\" data-toggle=\"tab\">
                                    ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "
                                </a>
                            </li>
                        ";
            }
            // line 38
            yield "                    ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                </ul>
                <hr/>

            </div>
        </div>
        <div class=\"col-md-9 height-auto bdr-l\">
            <div class=\"tab-content\">
                ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Company/form_fields.html.twig", ["form" =>         // line 47
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "groups" =>         // line 48
(isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 48, $this->source); })()), "fields" =>         // line 49
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 49, $this->source); })())]);
        // line 50
        yield "
            </div>
        </div>
    </div>
";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Company/form_standalone.html.twig";
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
        return array (  185 => 54,  179 => 50,  177 => 49,  176 => 48,  175 => 47,  174 => 46,  165 => 39,  151 => 38,  144 => 34,  140 => 33,  133 => 32,  130 => 31,  113 => 30,  105 => 25,  98 => 24,  90 => 21,  83 => 20,  77 => 16,  74 => 14,  72 => 13,  65 => 12,  54 => 10,  43 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Company/form_standalone.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Company/form_standalone.html.twig");
    }
}
