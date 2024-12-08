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

/* @MauticDashboard/Dashboard/upcomingemails.html.twig */
class __TwigTemplate_d47f4ee1c106bd215e903443e54dc6da extends Template
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
        if ((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 1, $this->source); })())) {
            // line 2
            yield "    <ul class=\"list-group mb-0\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcomingEmails"]) || array_key_exists("upcomingEmails", $context) ? $context["upcomingEmails"] : (function () { throw new RuntimeError('Variable "upcomingEmails" does not exist.', 3, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                // line 4
                yield "            <li class=\"list-group-item\">
                <div class=\"box-layout\">
                    <div class=\"col-md-1 va-m\">
                        <h3><span class=\"fa ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "email", [], "any", false, false, false, 7), "")) : ("")), "html", null, true);
                yield " fw-sb text-success\"></span></h3>
                    </div>
                    <div class=\"col-md-4 va-m\">
                        <h5 class=\"fw-sb text-primary\">
                            <a href=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_id", [], "any", false, false, false, 11)]), "html", null, true);
                yield "\" data-toggle=\"ajax\">
                                ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "campaign_name", [], "any", false, false, false, 12), "html", null, true);
                yield "
                            </a>
                        </h5>
                        <span class=\"text-white dark-sm\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "event_name", [], "any", false, false, false, 15), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"col-md-4 va-m text-right\">
                        ";
                // line 18
                yield from                 $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticDashboard/Dashboard/upcomingemails.html.twig", 18)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => CoreExtension::getAttribute($this->env, $this->source,                 // line 21
$context["email"], "lead_name", [], "any", false, false, false, 21), "variant" => "success", "size" => "sm", "icon" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 24
($context["icons"] ?? null), "lead", [], "any", true, true, false, 24)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), "lead", [], "any", false, false, false, 24), "ri-user-6-line")) : ("ri-user-6-line")), "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 25
$context["email"], "lead_id", [], "any", false, false, false, 25)]), "attributes" => ["data-toggle" => "ajax"]]]]));
                // line 32
                yield "                    </div>
                    <div class=\"col-md-3 va-m text-right\">
                        ";
                // line 34
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["email"], "trigger_date", [], "any", false, false, false, 34));
                yield "
                    </div>
                </div>
            </li>
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
            unset($context['_seq'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "    </ul>
";
        } else {
            // line 41
            yield "    <div class=\"alert alert-warning\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.note.no.upcoming.emails"), "html", null, true);
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDashboard/Dashboard/upcomingemails.html.twig";
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
        return array (  124 => 41,  120 => 39,  101 => 34,  97 => 32,  95 => 25,  94 => 24,  93 => 21,  92 => 18,  86 => 15,  80 => 12,  76 => 11,  69 => 7,  64 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDashboard/Dashboard/upcomingemails.html.twig", "/app/docroot/app/bundles/DashboardBundle/Resources/views/Dashboard/upcomingemails.html.twig");
    }
}
