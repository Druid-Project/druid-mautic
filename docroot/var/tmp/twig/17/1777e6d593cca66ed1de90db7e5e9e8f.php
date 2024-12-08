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

/* @MauticEmail/Send/progress.html.twig */
class __TwigTemplate_44053e915f628241fb21354e71943a17 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["percent"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7)) ? (Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 0, [], "array", false, false, false, 7) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7)) * 100))) : (100));
        // line 8
        $context["id"] = ((("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 8, $this->source); })()))) ? ("emailSendProgressComplete") : ("emailSendProgress"));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Send/progress.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "emailSend";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.list", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]));
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    <div class=\"row ma-lg email-send-progress\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\">
        <div class=\"col-sm-offset-3 col-sm-6 text-center\">
            <div class=\"panel panel-";
        // line 13
        yield ((("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 13, $this->source); })()))) ? ("success") : ("danger"));
        yield "\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        ";
        // line 16
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.email.send." . (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 16, $this->source); })())), ["%subject%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 16, $this->source); })()), "getSubject", [], "method", false, false, false, 16)]));
        yield "
                    </h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 20
        if (("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                        <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.stats", ["%sent%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "sent", [], "any", false, false, false, 21), "%failed%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "failed", [], "any", false, false, false, 21)]), "html", null, true);
            yield "</h4>
                    ";
        }
        // line 23
        yield "                    <div class=\"progress mt-md\" style=\"height:50px;\">
                        <div class=\"progress-bar-send progress-bar progress-bar-striped";
        // line 24
        if (("inprogress" == (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 24, $this->source); })()))) {
            yield " active";
        }
        yield "\"
                             role=\"progressbar\"
                             aria-valuenow=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "html", null, true);
        yield "\"
                             aria-valuemin=\"0\"
                             aria-valuemax=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 28, $this->source); })()), 1, [], "array", false, false, false, 28), "html", null, true);
        yield "\"
                             style=\"width: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "%; height: 50px;\"
                             data-batchlimit=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["batchlimit"]) || array_key_exists("batchlimit", $context) ? $context["batchlimit"] : (function () { throw new RuntimeError('Variable "batchlimit" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\"
                             data-email=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
                            <span class=\"sr-only\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "%</span>
                        </div>
                    </div>
                </div>

                ";
        // line 37
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "failedRecipients", [], "any", false, false, false, 37))) {
            // line 38
            yield "                    <ul class=\"list-group\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "failedRecipients", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["leadId"] => $context["failedEmail"]) {
                // line 40
                yield "                            <li class=\"list-group-item\">
                                <a target=\"_new\" class=\"text-danger\" href=\"";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => $context["leadId"]]), "html", null, true);
                yield "\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["failedEmail"], "html", null, true);
                // line 43
                yield "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['leadId'], $context['failedEmail'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                    </ul>
                ";
        }
        // line 48
        yield "
                <div class=\"panel-footer\">
                    <span class=\"small\">
                      <span class=\"imported-count\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 51, $this->source); })()), 0, [], "array", false, false, false, 51), "html", null, true);
        yield "</span> / <span class=\"total-count\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 51, $this->source); })()), 1, [], "array", false, false, false, 51), "html", null, true);
        yield "</span>
                    </span>
                    ";
        // line 53
        if (("inprogress" == (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 53, $this->source); })()))) {
            // line 54
            yield "                        <div>
                            <a class=\"text-danger mt-md\"
                               href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\"
                               data-toggle=\"ajax\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "html", null, true);
            yield "</a>
                        </div>
                    ";
        } else {
            // line 60
            yield "                        <div>
                            <a class=\"text-success mt-md\"
                               href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\"
                               data-toggle=\"ajax\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.done"), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 66
        yield "                </div>
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
        return "@MauticEmail/Send/progress.html.twig";
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
        return array (  224 => 66,  218 => 63,  214 => 62,  210 => 60,  204 => 57,  200 => 56,  196 => 54,  194 => 53,  187 => 51,  182 => 48,  178 => 46,  170 => 43,  168 => 42,  165 => 41,  162 => 40,  158 => 39,  155 => 38,  153 => 37,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  124 => 26,  117 => 24,  114 => 23,  108 => 21,  106 => 20,  99 => 16,  93 => 13,  87 => 11,  80 => 10,  69 => 5,  58 => 3,  53 => 1,  51 => 8,  49 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Send/progress.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Send/progress.html.twig");
    }
}
