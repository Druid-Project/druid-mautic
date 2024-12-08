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

/* @MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig */
class __TwigTemplate_21ec8126201b2ac1eb4fbdb8af4a9b5a extends Template
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
        $context["class"] = ((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()), "table")) : ("table"));
        // line 10
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 10, $this->source); })()), 30)) : (30));
        // line 11
        $context["showHeaders"] = ["mautic.dashboard.label.contact.email.address", "mautic.dashboard.label.contact.open", "mautic.dashboard.label.contact.click", "mautic.dashboard.label.email.name", "mautic.dashboard.label.segment.name", "mautic.dashboard.label.company.name", "mautic.dashboard.label.campaign.name"];
        // line 20
        $context["showValues"] = ["contact_email", "open", "click", "email_name", "segment_name", "company_name", "campaign_name"];
        // line 29
        yield "<table class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 30
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "        <thead>
          <tr>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 34
                yield "              ";
                if (CoreExtension::inFilter($context["headItem"], (isset($context["showHeaders"]) || array_key_exists("showHeaders", $context) ? $context["showHeaders"] : (function () { throw new RuntimeError('Variable "showHeaders" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    yield "                <th>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                    yield "</th>
              ";
                }
                // line 37
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['headItem'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "          </tr>
        </thead>
    ";
        }
        // line 41
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "        <tbody>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["row"]) {
                // line 44
                yield "                <tr>
                    ";
                // line 45
                if (is_iterable($context["row"])) {
                    // line 46
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["row"]);
                    foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                        // line 47
                        yield "                            ";
                        if (CoreExtension::inFilter($context["key"], (isset($context["showValues"]) || array_key_exists("showValues", $context) ? $context["showValues"] : (function () { throw new RuntimeError('Variable "showValues" does not exist.', 47, $this->source); })()))) {
                            // line 48
                            yield "                            <td>
                                ";
                            // line 49
                            if ((("contact_email" == $context["key"]) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "contact_id", [], "any", false, false, false, 49)))) {
                                // line 50
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "contact_id", [], "any", false, false, false, 50)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 51
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 53
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 53, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } elseif ((("email_name" ==                             // line 55
$context["key"]) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 55)))) {
                                // line 56
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 56)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 57
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 59
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 59, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } elseif ((("segment_name" ==                             // line 61
$context["key"]) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "segment_id", [], "any", false, false, false, 61)))) {
                                // line 62
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "segment_id", [], "any", false, false, false, 62)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 63
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 65
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 65, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } elseif ((("company_name" ==                             // line 67
$context["key"]) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "company_id", [], "any", false, false, false, 67)))) {
                                // line 68
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "company_id", [], "any", false, false, false, 68)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 69
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 71
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 71, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } elseif ((("campaign_name" ==                             // line 73
$context["key"]) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "campaign_id", [], "any", false, false, false, 73)))) {
                                // line 74
                                yield "                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], "campaign_id", [], "any", false, false, false, 74)]), "html", null, true);
                                yield "\"
                                        title=\"";
                                // line 75
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"]);
                                yield "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 77
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 77, $this->source); })())), "html", null, true);
                                yield "
                                    </a>
                                ";
                            } else {
                                // line 80
                                yield "                                    ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                                yield "
                                ";
                            }
                            // line 82
                            yield "                            </td>
                            ";
                        }
                        // line 84
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    yield "                    ";
                }
                // line 86
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        </tbody>
    ";
        }
        // line 90
        yield "</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig";
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
        return array (  227 => 90,  223 => 88,  216 => 86,  213 => 85,  207 => 84,  203 => 82,  197 => 80,  191 => 77,  186 => 75,  181 => 74,  179 => 73,  174 => 71,  169 => 69,  164 => 68,  162 => 67,  157 => 65,  152 => 63,  147 => 62,  145 => 61,  140 => 59,  135 => 57,  130 => 56,  128 => 55,  123 => 53,  118 => 51,  113 => 50,  111 => 49,  108 => 48,  105 => 47,  100 => 46,  98 => 45,  95 => 44,  91 => 43,  88 => 42,  85 => 41,  80 => 38,  74 => 37,  68 => 35,  65 => 34,  61 => 33,  57 => 31,  55 => 30,  50 => 29,  48 => 20,  46 => 11,  44 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig");
    }
}
