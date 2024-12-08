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

/* @bundles/MarketplaceBundle/Tests/ApiResponse/list.json */
class __TwigTemplate_66feb03879e472d786c271ec5a74128b extends Template
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
        yield "{
    \"results\": [
        {
            \"name\": \"mautic\\/mautic-saelos-bundle\",
            \"description\": \"\",
            \"url\": \"https:\\/\\/packagist.org\\/packages\\/mautic\\/mautic-saelos-bundle\",
            \"repository\": \"https:\\/\\/github.com\\/mautic\\/mautic-saelos-bundle\",
            \"downloads\": 10586,
            \"favers\": 11
        },
        {
            \"name\": \"koco\\/mautic-recaptcha-bundle\",
            \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
            \"url\": \"https:\\/\\/packagist.org\\/packages\\/koco\\/mautic-recaptcha-bundle\",
            \"repository\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\",
            \"downloads\": 2012,
            \"favers\": 20
        },
        {
            \"name\": \"monogramm\\/mautic-ldap-auth-bundle\",
            \"description\": \"This plugin enables LDAP authentication for mautic.\",
            \"url\": \"https:\\/\\/packagist.org\\/packages\\/monogramm\\/mautic-ldap-auth-bundle\",
            \"repository\": \"https:\\/\\/github.com\\/Monogramm\\/MauticLdapAuthBundle\",
            \"downloads\": 307,
            \"favers\": 8
        },
        {
            \"name\": \"maatoo\\/mautic-referrals-bundle\",
            \"description\": \"This plugin enables referrals in mautic.\",
            \"url\": \"https:\\/\\/packagist.org\\/packages\\/maatoo\\/mautic-referrals-bundle\",
            \"repository\": \"https:\\/\\/github.com\\/maatoo-io\\/MauticReferralsBundle\",
            \"downloads\": 527,
            \"favers\": 5
        },
        {
            \"name\": \"thedmsgroup\\/mautic-do-not-contact-extras-bundle\",
            \"description\": \"Adds custom DNC list items to be added to standard Mautic DNC lists and creates phpne and sms channels\",
            \"url\": \"https:\\/\\/packagist.org\\/packages\\/thedmsgroup\\/mautic-do-not-contact-extras-bundle\",
            \"repository\": \"https:\\/\\/github.com\\/TheDMSGroup\\/mautic-dnc-extras\",
            \"downloads\": 532,
            \"favers\": 9
        }
    ],
    \"total\": 58,
    \"next\": \"https:\\/\\/packagist.org\\/search.json?page=2\\u0026type=mautic-plugin\"
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MarketplaceBundle/Tests/ApiResponse/list.json";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/MarketplaceBundle/Tests/ApiResponse/list.json", "/app/docroot/app/bundles/MarketplaceBundle/Tests/ApiResponse/list.json");
    }
}
