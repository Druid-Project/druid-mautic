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

/* @bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php */
class __TwigTemplate_6dcf3a7bbedb5fae422836cd9f3865cb extends Template
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
        yield "<?php

namespace Mautic\\UserBundle\\Security\\SAML\\Store;

use LightSaml\\Meta\\TrustOptions\\TrustOptions;
use LightSaml\\Store\\TrustOptions\\TrustOptionsStoreInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class TrustOptionsStore implements TrustOptionsStoreInterface
{
    private ?TrustOptions \$trustOptions = null;

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private string \$entityId
    ) {
    }

    public function get(\$entityId): TrustOptions
    {
        if (\$this->trustOptions) {
            return \$this->trustOptions;
        }

        return \$this->createTrustOptions();
    }

    public function has(\$entityId): bool
    {
        // SAML is not enabled
        if (!\$this->coreParametersHelper->get('saml_idp_metadata')) {
            return false;
        }

        // EntityIds do not match
        if (\$entityId !== \$this->entityId) {
            return false;
        }

        return true;
    }

    private function createTrustOptions(): TrustOptions
    {
        \$this->trustOptions = \$trustOptions = new TrustOptions();

        if (!\$this->coreParametersHelper->get('saml_idp_own_certificate')) {
            return \$trustOptions;
        }

        \$trustOptions->setSignAuthnRequest(true);
        \$trustOptions->setEncryptAssertions(true);
        \$trustOptions->setEncryptAuthnRequest(true);
        \$trustOptions->setSignAssertions(true);
        \$trustOptions->setSignResponse(true);

        return \$trustOptions;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php", "/app/docroot/app/bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php");
    }
}
