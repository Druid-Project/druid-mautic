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

/* @MauticApi/Client/authorized.html.twig */
class __TwigTemplate_41c3134839984394ed8f8dc932c6b989 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th style=\"width: 50px;\"></th>
            <th>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.name"), "html", null, true);
        yield "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 11
            yield "        <tr>
            <td>";
            // line 13
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/confirm.html.twig", ["btnClass" => "btn btn-danger btn-xs", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.confirmrevoke", ["%name%" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
$context["k"], "getName", [], "method", false, false, false, 15)]), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.revoke"), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_client_action", ["objectAction" => "revoke", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 17
$context["k"], "getId", [], "method", false, false, false, 17)]), "iconClass" => "ri-delete-bin-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.revoke")]);
            // line 21
            yield "</td>
            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["k"], "getName", [], "method", false, false, false, 22), "html", null, true);
            yield "</td>
        </tr>
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
        unset($context['_seq'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticApi/Client/authorized.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  111 => 25,  94 => 22,  91 => 21,  89 => 17,  88 => 15,  87 => 13,  84 => 11,  67 => 10,  60 => 6,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticApi/Client/authorized.html.twig", "/app/docroot/app/bundles/ApiBundle/Resources/views/Client/authorized.html.twig");
    }
}
