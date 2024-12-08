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

/* @MauticLead/Note/_list.html.twig */
class __TwigTemplate_3ad66a1ce81008140dcb86cc9e2545c7 extends Template
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
        yield "<ul class=\"notes\" id=\"LeadNotes\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 3
            yield "        ";
            // line 4
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Note/note.html.twig", ["note" =>             // line 5
$context["note"], "lead" =>             // line 6
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 6, $this->source); })()), "permissions" =>             // line 7
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 7, $this->source); })())]);
            // line 8
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
        unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</ul>
";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            yield "  <div class=\"notes-pagination\">
      ";
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 14
(isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 14, $this->source); })())), "target" => "#NoteList", "page" =>             // line 16
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "limit" =>             // line 17
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 17, $this->source); })()), "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)) . ".note"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_index", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)])]);
            // line 20
            yield "
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Note/_list.html.twig";
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
        return array (  100 => 20,  98 => 19,  97 => 18,  96 => 17,  95 => 16,  94 => 14,  93 => 13,  90 => 12,  88 => 11,  85 => 10,  70 => 8,  68 => 7,  67 => 6,  66 => 5,  64 => 4,  62 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Note/_list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Note/_list.html.twig");
    }
}
