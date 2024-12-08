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

/* @MauticLead/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_c17921053dd1c64b7d4da63f8492b468 extends Template
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
        yield "<!-- Contact fields tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingContactFields\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
        data-parent=\"#tokensAccordion\" href=\"#collapseContactFields\" aria-expanded=\"false\"
        aria-controls=\"collapseContactFields\">
        <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
        <span class=\"accordion-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact_fields"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseContactFields\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
        aria-labelledby=\"headingContactFields\">

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.attribution"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=attribution}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.attribution_date"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=attribution_date}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.address1"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=address1}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.address2"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=address2}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.country"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=country}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.city"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=city}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.company"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=company}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.id"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=id}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.email"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=email}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.facebook"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=facebook}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.fax"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=fax}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.firstname"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=firstname}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.foursquare"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=foursquare}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.googleplus"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=googleplus}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.instagram"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=instagram}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.ipaddress"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=ipAddress}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.lastname"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=lastname}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.linkedin"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=linkedin}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.mobile"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=mobile}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.phone"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=phone}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.position"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=position}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.skype"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=skype}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.state"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=state}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.twitter"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=twitter}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.title"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=title}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.website"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=website}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.zipcode"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=zipcode}</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</li>

<!-- Contact Owner fields tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingOwnerFields\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
        data-parent=\"#tokensAccordion\" href=\"#collapseOwnerFields\" aria-expanded=\"false\" aria-controls=\"collapseOwnerFields\">
        <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
        <span class=\"accordion-title\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact_owner_fields"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseOwnerFields\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
        aria-labelledby=\"headingOwnerFields\">

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.owner.firstname"), "html", null, true);
        yield "</td>
                    <td><code>{ownerfield=firstname}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.owner.lastname"), "html", null, true);
        yield "</td>
                    <td><code>{ownerfield=lastname}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.owner.email"), "html", null, true);
        yield "</td>
                    <td><code>{ownerfield=email}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.owner.position"), "html", null, true);
        yield "</td>
                    <td><code>{ownerfield=position}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.owner.signature"), "html", null, true);
        yield "</td>
                    <td><code>{ownerfield=signature}</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</li>

<!-- Company Contact fields tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingCompanyFields\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
        data-parent=\"#tokensAccordion\" href=\"#collapseCompanyFields\" aria-expanded=\"false\"
        aria-controls=\"collapseCompanyFields\">
        <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
        <span class=\"accordion-title\">";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company_contact_fields"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseCompanyFields\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
        aria-labelledby=\"headingCompanyFields\">

        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
                    <th>";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.address1"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyaddress1}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.address2"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyaddress2}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.annual_revenue"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyannual_revenue}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.city"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companycity}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.country"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companycountry}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.description"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companydescription}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.email"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyemail}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.fax"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyfax}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.industry"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyindustry}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.name"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyname}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.number_of_employees"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companynumber_of_employees}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.phone"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyphone}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.state"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companystate}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.website"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companywebsite}</code></td>
                </tr>
                <tr>
                    <td>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.company.zipcode"), "html", null, true);
        yield "</td>
                    <td><code>{contactfield=companyzipcode}</code></td>
                </tr>
            </tbody>
        </table>
    </div>
</li>

<!-- Custom fields tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingCustomFields\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#tokensAccordion\" href=\"#collapseCustomFields\" aria-expanded=\"false\"
      aria-controls=\"collapseCustomFields\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields"), "html", null, true);
        yield "</span>
    </a>

    <div id=\"collapseCustomFields\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingCustomFields\">
      <div class=\"accordion-content\">
        <h4 class=\"mb-xs fw-sb\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.date_and_time"), "html", null, true);
        yield "</h4>
        <p>";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.date_and_time.description"), "html", null, true);
        yield "</p>
      </div>
      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
            <th>";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.datetime"), "html", null, true);
        yield "</td>
            <td><code>{contactfield=aliasofyourcustomdatefield|datetime}</code></td>
          </tr>
          <tr>
            <td>";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.date"), "html", null, true);
        yield "</td>
            <td><code>{contactfield=aliasofyourcustomdatefield|date}</code></td>
          </tr>
          <tr>
            <td>";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.time"), "html", null, true);
        yield "</td>
            <td><code>{contactfield=aliasofyourcustomdatefield|time}</code></td>
          </tr>
        </tbody>
      </table>
      <div class=\"accordion-content\">
        <div class=\"alert alert-info\">
          ";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.custom_fields.note"), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  </li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Tokens/tokens_help_bundle.html.twig";
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
        return array (  534 => 299,  524 => 292,  517 => 288,  510 => 284,  502 => 279,  498 => 278,  490 => 273,  486 => 272,  477 => 266,  460 => 252,  453 => 248,  446 => 244,  439 => 240,  432 => 236,  425 => 232,  418 => 228,  411 => 224,  404 => 220,  397 => 216,  390 => 212,  383 => 208,  376 => 204,  369 => 200,  362 => 196,  354 => 191,  350 => 190,  339 => 182,  322 => 168,  315 => 164,  308 => 160,  301 => 156,  294 => 152,  286 => 147,  282 => 146,  271 => 138,  255 => 125,  248 => 121,  241 => 117,  234 => 113,  227 => 109,  220 => 105,  213 => 101,  206 => 97,  199 => 93,  192 => 89,  185 => 85,  178 => 81,  171 => 77,  164 => 73,  157 => 69,  150 => 65,  143 => 61,  136 => 57,  129 => 53,  122 => 49,  115 => 45,  108 => 41,  101 => 37,  94 => 33,  87 => 29,  80 => 25,  73 => 21,  65 => 16,  61 => 15,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Tokens/tokens_help_bundle.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
