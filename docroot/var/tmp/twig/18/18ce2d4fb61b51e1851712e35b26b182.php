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

/* @bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php */
class __TwigTemplate_a73b0a52ac32859ef97c7983c7536f9b extends Template
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

declare(strict_types=1);

namespace Mautic\\EmailBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Model\\EmailModel;

class EmailModelBuildUrlTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['site_url'] = 'https://foo.bar.com';
        parent::setUp();
    }

    public function testSiteUrlAlwaysTakesPrecedenceWhenBuildingUrls(): void
    {
        /** @var EmailModel \$emailModel */
        \$emailModel = static::getContainer()->get('mautic.email.model.email');
        \$idHash     = uniqid();
        \$url        = \$emailModel->buildUrl('mautic_email_unsubscribe', ['idHash' => \$idHash]);

        self::assertSame('https://foo.bar.com/email/unsubscribe/'.\$idHash, \$url);
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
        return "@bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php");
    }
}
