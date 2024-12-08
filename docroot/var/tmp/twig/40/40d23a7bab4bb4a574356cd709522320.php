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

/* @bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php */
class __TwigTemplate_d783e17bb400b9df7617a0384a66438a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\LeadBundle\\Form\\Type\\ContactChannelsType;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Form\\FormInterface;

final class ContactChannelsTypeTest extends AbstractMauticTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['show_contact_pause_dates'] = true;
        parent::setUp();
    }

    public function testPauseDatesAreProperlyConfigured(): void
    {
        \$form = \$this->createForm(true);
        \$this->assertOptions(\$form, 'contact_pause_start_date_email', true);
        \$this->assertOptions(\$form, 'contact_pause_end_date_email', true);

        \$form = \$this->createForm(false);
        \$this->assertOptions(\$form, 'contact_pause_start_date_email', false);
        \$this->assertOptions(\$form, 'contact_pause_end_date_email', false);
    }

    /**
     * @param FormInterface<FormInterface<mixed>> \$form
     */
    private function assertOptions(FormInterface \$form, string \$name, bool \$hasHtml5): void
    {
        \$config = \$form->get(\$name)->getConfig();
        Assert::assertSame(\$hasHtml5, \$config->getOption('html5'));
        Assert::assertSame('yyyy-MM-dd', \$config->getOption('format'));
    }

    /**
     * @return FormInterface<FormInterface<mixed>>
     */
    private function createForm(bool \$publicView): FormInterface
    {
        return self::getContainer()->get('form.factory')->create(
            ContactChannelsType::class,
            null,
            [
                'channels'    => ['Email' => 'email'],
                'public_view' => \$publicView,
            ]
        );
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
        return "@bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/ContactChannelsTypeTest.php");
    }
}
