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

/* @bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php */
class __TwigTemplate_4f0d2343429b94a8533cb54aa199a515 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use Mautic\\LeadBundle\\EventListener\\GeneratedColumnSubscriber;
use Mautic\\LeadBundle\\Model\\ListModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class GeneratedColumnSubscriberTest extends TestCase
{
    /**
     * @var MockObject&TranslatorInterface
     */
    private \$translator;

    private GeneratedColumnSubscriber \$generatedColumnSubscriber;

    protected function setUp(): void
    {
        parent::setUp();
        \$modelTranslator = \$this->createMock(Translator::class);
        \$modelTranslator->expects(self::any())
            ->method('trans')
            ->willReturnArgument(0);

        \$segmentModel = new class(\$modelTranslator) extends ListModel {
            public function __construct(Translator \$translator)
            {
                \$this->translator = \$translator;
            }
        };

        \$this->translator                = \$this->createMock(TranslatorInterface::class);
        \$this->generatedColumnSubscriber = new GeneratedColumnSubscriber(\$segmentModel, \$this->translator);
    }

    public function testInGeneratedColumnsBuild(): void
    {
        \$event = new GeneratedColumnsEvent();

        \$this->generatedColumnSubscriber->onGeneratedColumnsBuild(\$event);

        /** @var GeneratedColumn \$generatedColumn */
        \$generatedColumn = \$event->getGeneratedColumns()->current();

        Assert::assertSame(MAUTIC_TABLE_PREFIX.'leads', \$generatedColumn->getTableName());
        Assert::assertSame('generated_email_domain', \$generatedColumn->getColumnName());
        Assert::assertSame('VARCHAR(255) AS (SUBSTRING(email, LOCATE(\"@\", email) + 1)) COMMENT \\'(DC2Type:generated)\\'', \$generatedColumn->getColumnDefinition());
    }

    public function testOnGenerateSegmentFilters(): void
    {
        \$event = new LeadListFiltersChoicesEvent(
            [],
            [],
            \$this->translator,
            new Request()
        );

        \$this->translator->method('trans')
            ->with('mautic.email.segment.choice.generated_email_domain')
            ->willReturn('translated string');

        \$this->generatedColumnSubscriber->onGenerateSegmentFilters(\$event);

        Assert::assertSame(
            [
                'label'      => 'translated string',
                'properties' => ['type' => 'text'],
                'operators'  => [
                    'mautic.lead.list.form.operator.equals'     => '=',
                    'mautic.lead.list.form.operator.notequals'  => '!=',
                    'mautic.lead.list.form.operator.isempty'    => 'empty',
                    'mautic.lead.list.form.operator.isnotempty' => '!empty',
                    'mautic.lead.list.form.operator.islike'     => 'like',
                    'mautic.lead.list.form.operator.isnotlike'  => '!like',
                    'mautic.lead.list.form.operator.regexp'     => 'regexp',
                    'mautic.lead.list.form.operator.notregexp'  => '!regexp',
                    'mautic.core.operator.starts.with'          => 'startsWith',
                    'mautic.core.operator.ends.with'            => 'endsWith',
                    'mautic.core.operator.contains'             => 'contains',
                ],
                'object' => 'lead',
            ],
            \$event->getChoices()['lead']['generated_email_domain']
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
        return "@bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php");
    }
}
