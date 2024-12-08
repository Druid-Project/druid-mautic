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

/* @MauticDashboard/Widget/detail.html.twig */
class __TwigTemplate_35d74e6d9efc1c4bc79562d1dcfc0ad1 extends Template
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
        yield "<div class=\"tile\" style=\"height: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", false, false, false, 1), "310")) : ("310")) - 10), "html", null, true);
        yield "px;\">
    <div class=\"card-header d-flex jc-space-between ai-center\">
        <h4 class=\"fw-sb\">";
        // line 3
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3));
        yield "</h4>
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "            <div class=\"dropdown\">
                <a class=\"btn btn-ghost btn-icon btn-xs dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"ri-more-2-fill\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"small fw-sb text-muted ma-md ellipsis\">
                        ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 11, $this->source); })()), "isCached", [], "any", false, false, false, 11)) {
                // line 12
                yield "                            <i class=\"ri-history-line mr-xs\"></i>
                            ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.cache"), "html", null, true);
                yield "
                        ";
            } else {
                // line 15
                yield "                            <i class=\"ri-flashlight-line mr-xs\"></i>
                            ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.database"), "html", null, true);
                yield "
                        ";
            }
            // line 18
            yield "                    </li>
                    <li>
                        <a  href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\"
                            data-toggle=\"ajaxmodal\"
                            data-target=\"#MauticSharedModal\"
                            data-header=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.edit"), "html", null, true);
            yield "\">
                            <span>
                                <i class=\"ri-edit-line\"></i>
                                ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.edit"), "html", null, true);
            yield "
                            </span>
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\"
                            data-header=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.delete"), "html", null, true);
            yield "\"
                            class=\"remove-widget danger\">
                            <span>
                                <i class=\"ri-close-line\"></i>
                                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.remove"), "html", null, true);
            yield "
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 43
        yield "    </div>
    <hr class=\"bdr-b\">
    <div class=\"card-body\">
        ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 46, $this->source); })()), "errorMessage", [], "any", false, false, false, 46)) {
            // line 47
            yield "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "errorMessage", [], "any", false, false, false, 48)), "html", null, true);
            yield "
            </div>
        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 50, $this->source); })()), "template", [], "any", false, false, false, 50)) {
            // line 51
            yield "            <!-- start: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 51, $this->source); })()), "template", [], "any", false, false, false, 51), "html", null, true);
            yield " -->
            ";
            // line 52
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 52, $this->source); })()), "template", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 52, $this->source); })()), "templateData", [], "any", false, false, false, 52));
            yield "
            <!-- end: ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 53, $this->source); })()), "template", [], "any", false, false, false, 53), "html", null, true);
            yield " -->
        ";
        }
        // line 55
        yield "    </div>
    <div class=\"widget-overlay d-flex ai-center jc-center\">
        <i class=\"ri-drag-drop-fill ri-4x text-primary\"></i>
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
        return "@MauticDashboard/Widget/detail.html.twig";
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
        return array (  156 => 55,  151 => 53,  147 => 52,  142 => 51,  140 => 50,  135 => 48,  132 => 47,  130 => 46,  125 => 43,  115 => 36,  108 => 32,  104 => 31,  96 => 26,  90 => 23,  84 => 20,  80 => 18,  75 => 16,  72 => 15,  67 => 13,  64 => 12,  62 => 11,  54 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Widget/detail.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Widget/detail.html.twig");
    }
}
