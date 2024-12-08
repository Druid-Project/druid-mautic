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

/* @MauticLead/Social/index.html.twig */
class __TwigTemplate_d53e225f3a24226e10fba9ef704b9c04 extends Template
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
        // line 7
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.lead.socialprofiles.header", "link" => "mautic.lead.socialprofiles.noresults", "href" => "javascript: void(0);", "onclick" => "Mautic.refreshLeadSocialProfile('', {{ lead.id }}, event);"]);
            // line 13
            yield "
";
        } else {
            // line 15
            yield "  <div class=\"row\">
  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 16, $this->source); })()));
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
            foreach ($context['_seq'] as $context["integrationName"] => $context["details"]) {
                // line 17
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "</div><div class=\"row\">"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17)), "html", null, true);
                yield "
      <div class=\"col-md-6\">
          <div class=\"panel panel-default panel-";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["integrationName"]), "html", null, true);
                yield "\">
              <div class=\"panel-heading pr-0\">
                  <h3 class=\"panel-title\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.integration." . $context["integrationName"])), "html", null, true);
                yield "</h3>
                  <div class=\"panel-toolbar text-right\">
                      <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"tooltip\" onclick=\"Mautic.refreshLeadSocialProfile('";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
                yield "', event);\"
                         title=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.lastupdate", ["%datetime%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "lastRefresh", [], "any", false, false, false, 24), "utc")]), "html", null, true);
                yield "\">
                          <i class=\"text-white ri-refresh-line\"></i>
                      </a>
                      <a href=\"javascript:void(0);\" class=\"btn\" onclick=\"Mautic.clearLeadSocialProfile('";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
                yield "', event);\" data-toggle=\"tooltip\"
                         title=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.removecache"), "html", null, true);
                yield "\">
                          <i class=\"text-white ri-close-line\"></i>
                      </a>
                      ";
                // line 32
                yield "                      <a class=\"hide ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "-panelremove\" data-toggle=\"panelremove\" data-parent=\".col-md-6\">&amp;</a>
                  </div>
              </div>
               <div class=\"panel-collapse pull out\" id=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "CompleteProfile\">
                  ";
                // line 36
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["details"], "social_profile_template", [], "any", false, false, false, 36), ["lead" =>                 // line 37
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()), "details" =>                 // line 38
$context["details"], "integrationName" =>                 // line 39
$context["integrationName"], "socialProfileUrls" =>                 // line 40
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 40, $this->source); })())]);
                // line 41
                yield "
              </div>
          </div>
      </div>
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
            unset($context['_seq'], $context['integrationName'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "  </div>
";
        }
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "socialImageModal", "body" => "<img class=\"img-responsive img-thumbnail\" />", "header" => false, "padding" => "np"]);
        // line 53
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Social/index.html.twig";
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
        return array (  151 => 53,  149 => 48,  145 => 46,  127 => 41,  125 => 40,  124 => 39,  123 => 38,  122 => 37,  121 => 36,  117 => 35,  110 => 32,  104 => 28,  98 => 27,  92 => 24,  86 => 23,  81 => 21,  76 => 19,  70 => 17,  53 => 16,  50 => 15,  46 => 13,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Social/index.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Social/index.html.twig");
    }
}
