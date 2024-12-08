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

/* @bundles/AssetBundle/Tests/EventListener/DetermineWinnerSubscriberTest.php */
class __TwigTemplate_18221fcdd93448a60af5312dc060f32d extends Template
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

namespace Mautic\\AssetBundle\\Tests\\EventListener;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\AssetBundle\\Entity\\DownloadRepository;
use Mautic\\AssetBundle\\EventListener\\DetermineWinnerSubscriber;
use Mautic\\CoreBundle\\Event\\DetermineWinnerEvent;
use Mautic\\PageBundle\\Entity\\Page;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DetermineWinnerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EntityManagerInterface
     */
    private MockObject \$em;

    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    private DetermineWinnerSubscriber \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->em         = \$this->createMock(EntityManagerInterface::class);
        \$this->translator = \$this->createMock(TranslatorInterface::class);
        \$this->subscriber = new DetermineWinnerSubscriber(\$this->em, \$this->translator);
    }

    public function testOnDetermineDownloadRateWinner(): void
    {
        \$parentMock    = \$this->createMock(Page::class);
        \$childMock     = \$this->createMock(Page::class);
        \$children      = [2 => \$childMock];
        \$repoMock      = \$this->createMock(DownloadRepository::class);
        \$parameters    = ['parent' => \$parentMock, 'children' => \$children];
        \$event         = new DetermineWinnerEvent(\$parameters);
        \$startDate     = new \\DateTime();

        \$transDownloads = 'downloads';
        \$transHits      = 'hits';

        \$counts = [
            1 => [
                'count' => 20,
                'id'    => 1,
                'name'  => 'Test 5',
                'total' => 100,
            ],
            2 => [
                'count' => 25,
                'id'    => 2,
                'name'  => 'Test 6',
                'total' => 150,
            ],
        ];

        \$this->translator->method('trans')
            ->willReturnOnConsecutiveCalls(\$transDownloads, \$transHits);

        \$this->em->expects(\$this->once())
            ->method('getRepository')
            ->willReturn(\$repoMock);

        \$parentMock->expects(\$this->any())
            ->method('isPublished')
            ->willReturn(true);

        \$childMock->expects(\$this->any())
            ->method('isPublished')
            ->willReturn(true);

        \$parentMock->expects(\$this->any())
            ->method('getId')
            ->willReturn(1);

        \$childMock->expects(\$this->any())
            ->method('getId')
            ->willReturn(2);

        \$parentMock->expects(\$this->once())
            ->method('getVariantStartDate')
            ->willReturn(\$startDate);

        \$repoMock->expects(\$this->once())
            ->method('getDownloadCountsByPage')
            ->with([1, 2], \$startDate)
            ->willReturn(\$counts);

        \$this->subscriber->onDetermineDownloadRateWinner(\$event);

        \$expectedData = [
            \$transDownloads => [\$counts[1]['count'], \$counts[2]['count']],
            \$transHits      => [\$counts[1]['total'], \$counts[2]['total']],
        ];

        \$abTestResults = \$event->getAbTestResults();

        \$this->assertEquals(\$abTestResults['winners'], [1]);
        \$this->assertEquals(\$abTestResults['support']['data'], \$expectedData);
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
        return "@bundles/AssetBundle/Tests/EventListener/DetermineWinnerSubscriberTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/EventListener/DetermineWinnerSubscriberTest.php", "/app/docroot/app/bundles/AssetBundle/Tests/EventListener/DetermineWinnerSubscriberTest.php");
    }
}
