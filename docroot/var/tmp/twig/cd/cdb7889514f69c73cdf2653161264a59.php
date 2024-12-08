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

/* @bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php */
class __TwigTemplate_a43bbfcfdc1ed196c6e25411b7f8a8ea extends Template
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

namespace Mautic\\UserBundle\\Tests\\Security\\SAML\\Store;

use LightSaml\\Meta\\TrustOptions\\TrustOptions;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\UserBundle\\Security\\SAML\\Store\\TrustOptionsStore;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class TrustOptionsStoreTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private MockObject \$coreParametersHelper;

    private TrustOptionsStore \$store;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->store                = new TrustOptionsStore(\$this->coreParametersHelper, 'foobar');
    }

    public function testTrustOptionsConfiguredIfSamlEnabledAndEntityIdMatches(): void
    {
        \$store = \$this->store->get('foobar');
        \$this->assertInstanceOf(TrustOptions::class, \$store);
    }

    public function testHasTrustOptionsIfSamlConfiguredAndEntityIdMatches(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->assertTrue(\$this->store->has('foobar'));
    }

    public function testNotHaveTrustOptionsIfSamlDisabled(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('');

        \$this->assertFalse(\$this->store->has('foobar'));
    }

    public function testNotHaveTrustOptionsIfEntityIdDoesNotMatch(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->assertFalse(\$this->store->has('barfoo'));
    }

    public function testTrustOptionsDoNotSignRequestForDefault(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_own_certificate')
            ->willReturn('');

        \$store = \$this->store->get('foobar');
        \$this->assertFalse(\$store->getSignAuthnRequest());
    }

    public function testTrustOptionsSignRequestForCustom(): void
    {
        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_own_certificate')
            ->willReturn('abc');

        \$store = \$this->store->get('foobar');
        \$this->assertTrue(\$store->getSignAuthnRequest());
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
        return "@bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Security/SAML/Store/TrustOptionsStoreTest.php");
    }
}
