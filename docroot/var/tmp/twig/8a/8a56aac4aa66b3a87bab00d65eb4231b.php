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

/* @bundles/SmsBundle/Tests/Controller/AjaxControllerFunctionalTest.php */
class __TwigTemplate_fd536cd45aa3c0c65775baf2cb1a7282 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testGetBuilderTokensAction(): void
    {
        \$this->client->request(Request::METHOD_POST, '/s/ajax?action=sms:getBuilderTokens');
        Assert::assertTrue(\$this->client->getResponse()->isOk());
        \$tokens = json_decode(\$this->client->getResponse()->getContent(), true);
        \$this->assertArrayHasKey('tokens', \$tokens);
        \$this->assertArrayHasKey('{contactfield=email}', \$tokens['tokens']);
        \$this->assertArrayHasKey('{ownerfield=email}', \$tokens['tokens']);
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
        return "@bundles/SmsBundle/Tests/Controller/AjaxControllerFunctionalTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Controller/AjaxControllerFunctionalTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Controller/AjaxControllerFunctionalTest.php");
    }
}
