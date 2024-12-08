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

/* @MauticLead/Note/list.html.twig */
class __TwigTemplate_c58ba26ad8f68548410e166aeff24604 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "@MauticCore/Default/raw_output.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->parent = $this->loadTemplate("@MauticCore/Default/raw_output.html.twig", "@MauticLead/Note/list.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "    <div class=\"box-layout mb-lg\">
        <div class=\"col-xs-12 col-md-9 col-lg-10 va-m\">
            ";
            // line 9
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Note/_list_filter_form.html.twig");
            yield "
        </div>
        <div class=\"col-xs-12 col-md-3 col-lg-2 va-t\">
          ";
            // line 12
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Note/list.html.twig", 12)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.lead.add.note", "variant" => "primary", "icon" => "ri-add-line", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,             // line 18
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "objectAction" => "new"]), "attributes" => ["class" => "btn-leadnote-add pull-right", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.header.new")]]]]));
            // line 28
            yield "        </div>
    </div>
    <div id=\"NoteList\">
  ";
        }
        // line 32
        yield "
  ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Note/_list.html.twig");
        yield "

  ";
        // line 35
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 35, $this->source); })())) {
            // line 36
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Note/list.html.twig";
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
        return array (  95 => 36,  93 => 35,  88 => 33,  85 => 32,  79 => 28,  77 => 18,  76 => 12,  70 => 9,  66 => 7,  63 => 6,  56 => 5,  51 => 3,  49 => 2,  47 => 1,  40 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Note/list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Note/list.html.twig");
    }
}
