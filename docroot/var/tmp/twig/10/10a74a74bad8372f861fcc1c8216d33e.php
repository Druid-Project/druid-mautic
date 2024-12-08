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

/* @bundles/LeadBundle/Tests/Controller/LeadCompanySingleControllerTest.php */
class __TwigTemplate_805efa58d340dac87cae39eddb76a0fe extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class LeadCompanyControllerTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['contact_allow_multiple_companies']   = 0;
        parent::setUp();
    }

    public function testSimpleCompanyFeature(): void
    {
        \$crawler     = \$this->client->request('GET', 's/contacts/new/');
        \$multiple    = \$crawler->filterXPath('//*[@id=\"lead_companies\"]')->attr('multiple');
        self::assertNull(\$multiple);
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
        return "@bundles/LeadBundle/Tests/Controller/LeadCompanySingleControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/LeadCompanySingleControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/LeadCompanySingleControllerTest.php");
    }
}
