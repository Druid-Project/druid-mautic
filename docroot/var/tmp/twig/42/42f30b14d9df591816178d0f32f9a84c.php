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

/* @MauticLead/Lead/form.html.twig */
class __TwigTemplate_fd6fa51073d2675943c291aa604bda59 extends Template
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
        // line 7
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/form.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "lead";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) {
            // line 13
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 14))]), "html", null, true);
            // line 15
            yield "
  ";
        } else {
            // line 17
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        $context["groups"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 22, $this->source); })())));
        // line 23
        yield "  ";
        $context["img"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()));
        // line 24
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- step container -->
      <div class=\"col-md-3 height-auto\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              <div class=\"media\">
                  <div class=\"media-body\">
                      <img class=\"img-rounded img-bordered img-responsive media-object contact-avatar\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" alt=\"\">
                  </div>
              </div>

              <div class=\"row mt-xs\">
                  <div class=\"col-sm-12\">
                      ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 38), 'label');
        yield "
                      ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 39), 'widget');
        yield "
                  </div>
                  <div class=\"col-sm-12 ";
        // line 41
        if ((false == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "custom_avatar", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41))) {
            yield "has-error";
        }
        yield "\"
                       id=\"customAvatarContainer\"
                       style=\"";
        // line 43
        if (("custom" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "data", [], "any", false, false, false, 43))) {
            yield "display: none;";
        }
        yield "\">
                      ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "custom_avatar", [], "any", false, false, false, 44), 'widget');
        yield "
                      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "custom_avatar", [], "any", false, false, false, 45), 'errors');
        yield "
                  </div>
              </div>

              <hr/>

              <ul class=\"list-group list-group-tabs\">
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 52, $this->source); })()));
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
            // line 53
            yield "                      ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 53, $this->source); })()), $context["g"], [], "array", false, false, false, 53))) {
                // line 54
                yield "                          <li class=\"list-group-item ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                    yield "active";
                }
                yield "\">
                              <a href=\"#";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"list-group-item-text steps\" data-toggle=\"tab\">
                                  ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "
                              </a>
                          </li>
                      ";
            }
            // line 60
            yield "                  ";
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
        // line 61
        yield "              </ul>
          </div>
      </div>
      <!--/ step container -->

      <!-- container -->
      <div class=\"col-md-9 height-auto bdr-l\">
          <div class=\"tab-content\">
              <!-- pane -->
              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 70, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 71
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["group"], [], "array", true, true, false, 71)) {
                // line 72
                yield "                      ";
                $context["groupFields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 72, $this->source); })()), $context["group"], [], "array", false, false, false, 72);
                // line 73
                yield "                      ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 73, $this->source); })()))) {
                    // line 74
                    yield "                          <div class=\"tab-pane fade ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                        yield "in active";
                    }
                    yield " bdr-rds-0 bdr-w-0\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
                    yield "\">
                              <div class=\"col-lg-8 pa-md bg-light-xs bdr-b\">
                                ";
                    // line 76
                    if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)) {
                        // line 77
                        yield "                                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Notification/inline_notification.html.twig", ["title" => "mautic.contact.import.tip.title", "content" => "mautic.contact.import.tip.description", "alert_type" => "info", "dismissible" => true, "action_label" => "mautic.contact.import.tip.button", "action_link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_import_action", ["object" => "contacts", "objectAction" => "new"])]);
                        // line 84
                        yield "
                                ";
                    }
                    // line 86
                    yield "
                                  <h4 class=\"fw-sb mt-md\">";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["group"])), "html", null, true);
                    yield "</h4>
                              </div>
                              <div class=\"col-lg-12 pa-md\">
                                  ";
                    // line 90
                    if (("core" == $context["group"])) {
                        // line 91
                        yield "                                      ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 91) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 91)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 91))) {
                            // line 92
                            yield "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 93
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.name"), "html", null, true);
                            yield "</label>
                                              <div class=\"row\">
                                                  ";
                            // line 95
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 95)) {
                                // line 96
                                yield "                                                      <div class=\"col-sm-2\">
                                                          ";
                                // line 97
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "title", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "label", [], "any", false, false, false, 97)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 100
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 100)) {
                                // line 101
                                yield "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 102
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "firstname", [], "any", false, false, false, 102), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "firstname", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "label", [], "any", false, false, false, 102)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 105
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 105)) {
                                // line 106
                                yield "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 107
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "lastname", [], "any", false, false, false, 107), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "lastname", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "label", [], "any", false, false, false, 107)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 110
                            yield "                                              </div>
                                              <hr class=\"mnr-md mnl-md\">
                                          </div>
                                      ";
                        }
                        // line 114
                        yield "                                      <div class=\"form-group mb-0\">
                                          <label class=\"control-label mb-xs\">";
                        // line 115
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "label", [], "any", false, false, false, 115), "html", null, true);
                        yield "</label>
                                          <div class=\"row\">
                                              <div class=\"col-sm-8\">
                                                  ";
                        // line 118
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "label", [], "any", false, false, false, 118)]]);
                        yield "
                                              </div>
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <label>";
                        // line 124
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.company"), "html", null, true);
                        yield "</label>
                                          <div class=\"row\">
                                              ";
                        // line 126
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companies", [], "any", true, true, false, 126)) {
                            // line 127
                            yield "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 128
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "companies", [], "any", false, false, false, 128), 'widget');
                            yield "
                                                  </div>
                                              ";
                        }
                        // line 131
                        yield "                                              ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", true, true, false, 131)) {
                            // line 132
                            yield "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 133
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "position", [], "any", false, false, false, 133), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "position", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "label", [], "any", false, false, false, 133)]]);
                            yield "
                                                  </div>
                                              ";
                        }
                        // line 136
                        yield "                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      ";
                        // line 139
                        if ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 139) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 139)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 139)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 139)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 139)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 139))) {
                            // line 140
                            yield "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 141
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
                            yield "</label>
                                              ";
                            // line 142
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 142)) {
                                // line 143
                                yield "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 145
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "address1", [], "any", false, false, false, 145), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "address1", [], "any", false, false, false, 145), "vars", [], "any", false, false, false, 145), "label", [], "any", false, false, false, 145)]]);
                                yield "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 149
                            yield "                                              ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 149)) {
                                // line 150
                                yield "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 152
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "address2", [], "any", false, false, false, 152), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "address2", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "label", [], "any", false, false, false, 152)]]);
                                yield "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 156
                            yield "                                              <div class=\"row mb-xs\">
                                                  ";
                            // line 157
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 157)) {
                                // line 158
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 159
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "city", [], "any", false, false, false, 159), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "city", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "label", [], "any", false, false, false, 159)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 162
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 162)) {
                                // line 163
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 164
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "state", [], "any", false, false, false, 164), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "state", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "label", [], "any", false, false, false, 164)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 167
                            yield "                                              </div>
                                              <div class=\"row\">
                                                  ";
                            // line 169
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 169)) {
                                // line 170
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 171
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "zipcode", [], "any", false, false, false, 171), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "zipcode", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "label", [], "any", false, false, false, 171)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 174
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 174)) {
                                // line 175
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 176
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "country", [], "any", false, false, false, 176), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "country", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "label", [], "any", false, false, false, 176)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 179
                            yield "                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 183
                        yield "                                      ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attribution", [], "any", true, true, false, 183) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attribution_date", [], "any", true, true, false, 183))) {
                            // line 184
                            yield "                                          <div class=\"form-group mb-0\">
                                              <div class=\"row\">
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 187
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution.tooltip"), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution"), "html", null, true);
                            yield " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 188
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "attribution", [], "any", false, false, false, 188), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "attribution", [], "any", false, false, false, 188), "vars", [], "any", false, false, false, 188), "label", [], "any", false, false, false, 188), "preaddon" => "ri-cash-line"]]);
                            yield "
                                                  </div>
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 191
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date.tooltip"), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date"), "html", null, true);
                            yield " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 192
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "attribution_date", [], "any", false, false, false, 192), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "attribution_date", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "label", [], "any", false, false, false, 192)]]);
                            yield "
                                                  </div>
                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 198
                        yield "                                  ";
                    }
                    // line 199
                    yield "                                  <div class=\"form-group mb-0\">
                                      <div class=\"row\">
                                          ";
                    // line 201
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 201, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["field"]) {
                        // line 202
                        yield "                                              ";
                        if (((("company" != $context["alias"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["alias"], [], "array", true, true, false, 202)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), $context["alias"], [], "array", false, false, false, 202), "isRendered", [], "any", false, false, false, 202))) {
                            // line 203
                            yield "                                                  <div class=\"col-sm-8\">
                                                      ";
                            // line 204
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), $context["alias"], [], "array", false, false, false, 204), 'row');
                            yield "
                                                  </div>
                                              ";
                        } else {
                            // line 207
                            yield "                                                  ";
                            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), $context["alias"], [], "array", false, false, false, 207), "setRendered", [], "any", false, false, false, 207);
                            // line 208
                            yield "                                              ";
                        }
                        // line 209
                        yield "                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['alias'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    yield "                                      </div>
                                  </div>
                                  ";
                    // line 212
                    if (("core" == $context["group"])) {
                        // line 213
                        yield "                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"row\">
                                          <div class=\"col-sm-8\">
                                              ";
                        // line 216
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "stage", [], "any", false, false, false, 216), 'label');
                        yield "
                                              ";
                        // line 217
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "stage", [], "any", false, false, false, 217), 'widget');
                        yield "
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <div class=\"row\">
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 224
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "owner", [], "any", false, false, false, 224), 'label');
                        yield "
                                                  ";
                        // line 225
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "owner", [], "any", false, false, false, 225), 'widget');
                        yield "
                                              </div>
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 228
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "tags", [], "any", false, false, false, 228), 'label');
                        yield "
                                                  ";
                        // line 229
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "tags", [], "any", false, false, false, 229), 'widget');
                        yield "
                                              </div>
                                          </div>
                                      </div>
                                  ";
                    }
                    // line 234
                    yield "                              </div>
                          </div>
                      ";
                }
                // line 237
                yield "                  ";
            }
            // line 238
            yield "              ";
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "              <!--/ #pane -->
          </div>
      </div>
      <!--/ end: container -->
  </div>
  ";
        // line 244
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), 'form_end');
        yield "
  <!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/form.html.twig";
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
        return array (  624 => 244,  617 => 239,  603 => 238,  600 => 237,  595 => 234,  587 => 229,  583 => 228,  577 => 225,  573 => 224,  563 => 217,  559 => 216,  554 => 213,  552 => 212,  548 => 210,  542 => 209,  539 => 208,  536 => 207,  530 => 204,  527 => 203,  524 => 202,  520 => 201,  516 => 199,  513 => 198,  504 => 192,  498 => 191,  492 => 188,  486 => 187,  481 => 184,  478 => 183,  472 => 179,  466 => 176,  463 => 175,  460 => 174,  454 => 171,  451 => 170,  449 => 169,  445 => 167,  439 => 164,  436 => 163,  433 => 162,  427 => 159,  424 => 158,  422 => 157,  419 => 156,  412 => 152,  408 => 150,  405 => 149,  398 => 145,  394 => 143,  392 => 142,  388 => 141,  385 => 140,  383 => 139,  378 => 136,  372 => 133,  369 => 132,  366 => 131,  360 => 128,  357 => 127,  355 => 126,  350 => 124,  341 => 118,  335 => 115,  332 => 114,  326 => 110,  320 => 107,  317 => 106,  314 => 105,  308 => 102,  305 => 101,  302 => 100,  296 => 97,  293 => 96,  291 => 95,  286 => 93,  283 => 92,  280 => 91,  278 => 90,  272 => 87,  269 => 86,  265 => 84,  262 => 77,  260 => 76,  250 => 74,  247 => 73,  244 => 72,  241 => 71,  224 => 70,  213 => 61,  199 => 60,  192 => 56,  188 => 55,  181 => 54,  178 => 53,  161 => 52,  151 => 45,  147 => 44,  141 => 43,  134 => 41,  129 => 39,  125 => 38,  116 => 32,  104 => 24,  101 => 23,  98 => 22,  91 => 21,  82 => 17,  78 => 15,  76 => 14,  74 => 13,  71 => 12,  64 => 11,  53 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/form.html.twig");
    }
}
