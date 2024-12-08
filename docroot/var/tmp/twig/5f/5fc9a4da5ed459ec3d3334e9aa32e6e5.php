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

/* @bundles/WebhookBundle/Tests/Form/Type/ConfigTypeFunctionalTest.php */
class __TwigTemplate_d2288115180616e3ba6fa1c5951fd05e extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class ConfigTypeFunctionalTest extends MauticMysqlTestCase
{
    public function testSendEmailDetailsToggleIsOnByDefault(): void
    {
        \$crawler = \$this->client->request('GET', '/s/config/edit');

        // get \"Yes\" input for \"Send email details\" toggle
        \$input = \$crawler->filterXPath('//div[label[contains(text(), \"Send email details\")]]')
            ->filterXPath('//label[*[contains(text(), \"Yes\")]]')
            ->filter('input');

        Assert::assertCount(1, \$input);
        Assert::assertSame('checked', \$input->attr('checked'));
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
        return "@bundles/WebhookBundle/Tests/Form/Type/ConfigTypeFunctionalTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Form/Type/ConfigTypeFunctionalTest.php", "/app/docroot/app/bundles/WebhookBundle/Tests/Form/Type/ConfigTypeFunctionalTest.php");
    }
}
