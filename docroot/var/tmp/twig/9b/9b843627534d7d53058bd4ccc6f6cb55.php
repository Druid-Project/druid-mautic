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

/* @MauticLead/Lead/grid_card.html.twig */
class __TwigTemplate_a74566f3e363028aaee7cc78723970fd extends Template
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
        // line 6
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 6, $this->source); })()), "fields", [], "any", false, false, false, 6);
        // line 7
        $context["color"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "color", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "color", [], "any", false, false, false, 7), "a0acb8")) : ("a0acb8"));
        // line 8
        $context["img"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 8, $this->source); })()));
        // line 9
        yield "<div class=\"shuffle shuffle-item grid col-sm-6 col-lg-4 contact-cards\">
    <div data-color=\"#";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\" class=\"panel ";
        if (array_key_exists("highlight", $context)) {
            yield "highlight";
        }
        yield " card ovf-h\" style=\"border-top: 3px solid #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 10, $this->source); })()), "html", null, true);
        yield ";\">
        <div class=\"box-layout\">
            <div class=\"col-xs-4 va-m\">
                <div class=\"panel-body\">
                  <span class=\"img-wrapper img-rounded\">
                      <img class=\"img\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" />
                  </span>
                </div>
            </div>
            <div class=\"col-xs-8 va-t\">
                <div class=\"panel-body\">
                    ";
        // line 21
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), Twig\Extension\CoreExtension::keys((isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 21, $this->source); })())))) {
            // line 22
            yield "                        <div class=\"pull-right label label-danger\"><i class=\"ri-prohibited-line\"></i></div>
                    ";
        }
        // line 24
        yield "                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" data-toggle=\"ajax\">
                            <span>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 26, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 26), "html", null, true);
        yield "</span>
                        </a>
                    </h4>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"ri-fw ri-building-2-line mr-xs\"></i>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 30), "company", [], "any", false, true, false, 30), "value", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 30), "company", [], "any", false, true, false, 30), "value", [], "any", false, false, false, 30), "")) : ("")), "html", null, true);
        yield "
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"ri-fw ri-map-pin-2-line mr-xs\"></i>
                        ";
        // line 34
        $context["location"] = [];
        // line 35
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 35), "city", [], "any", true, true, false, 35)) {
            // line 36
            yield "                          ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 36, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 36, $this->source); })()), "core", [], "any", false, false, false, 36), "city", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36)]);
            // line 37
            yield "                        ";
        }
        // line 38
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 38), "state", [], "any", true, true, false, 38)) {
            // line 39
            yield "                          ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 39, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 39, $this->source); })()), "core", [], "any", false, false, false, 39), "state", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39)]);
            // line 40
            yield "                        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 40), "country", [], "any", true, true, false, 40)) {
            // line 41
            yield "                          ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 41, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 41, $this->source); })()), "core", [], "any", false, false, false, 41), "country", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41)]);
            // line 42
            yield "                        ";
        }
        // line 43
        yield "                        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 43, $this->source); })()), ", "), "html", null, true);
        yield "
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"ri-earth-line mr-xs\"></i>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 46), "country", [], "any", false, true, false, 46), "value", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 46), "country", [], "any", false, true, false, 46), "value", [], "any", false, false, false, 46), "")) : ("")), "html", null, true);
        yield "
                    </div>
                    ";
        // line 48
        $context["flag"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 48), "country", [], "any", true, true, false, 48) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 48, $this->source); })()), "core", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 48, $this->source); })()), "core", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48))) : (""));
        // line 49
        yield "                    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 49, $this->source); })()))) {
            // line 50
            yield "                        <div style=\"position: absolute; right: 30px; bottom: 30px\">
                            <img src=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "\" style=\"max-height: 24px;\" class=\"ml-sm\" />
                        </div>
                    ";
        }
        // line 54
        yield "                    ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("lead.grid", $context);
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/grid_card.html.twig";
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
        return array (  153 => 54,  147 => 51,  144 => 50,  141 => 49,  139 => 48,  134 => 46,  127 => 43,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  103 => 35,  101 => 34,  94 => 30,  87 => 26,  83 => 25,  80 => 24,  76 => 22,  74 => 21,  65 => 15,  51 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/grid_card.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/grid_card.html.twig");
    }
}
