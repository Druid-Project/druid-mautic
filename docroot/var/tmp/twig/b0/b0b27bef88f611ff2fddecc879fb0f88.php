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

/* @bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php */
class __TwigTemplate_872e7fe6617acfaa864899692ed05107 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Unit\\Model;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportModel;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

final class ReportModelTest extends MauticMysqlTestCase
{
    public function testThatGetReportDataUsesCorrectDataRange(): void
    {
        \$report = new Report();
        \$report->setName('Test Report');
        \$report->setSource('form.submissions');
        \$report->setColumns(['fs.date_submitted']);
        \$report->setSettings([]);

        \$form = new Form();
        \$form->setName('Test Form');
        \$form->setAlias('create_a_c');

        \$ip = new IpAddress('127.0.0.1');

        \$this->em->persist(\$ip);
        \$this->em->persist(\$report);
        \$this->em->persist(\$form);
        \$this->em->flush();

        // I know I can use \\DateTimeImmutable, but getReportData expects \\DateTime
        \$now        = new \\DateTime('now', new \\DateTimeZone('UTC'));
        \$aDayAgo    = (clone \$now)->modify('-1 day');
        \$twoDaysAgo = (clone \$now)->modify('-2 days');

        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$twoDaysAgo));
        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$aDayAgo));
        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$now));

        \$this->em->flush();

        \$session = \$this->createMock(Session::class);
        \$request = new Request();
        \$request->setSession(\$session);
        /** @var RequestStack \$requestStack */
        \$requestStack = self::getContainer()->get('request_stack');
        \$requestStack->push(\$request);
        \$reportModel = self::getContainer()->get('mautic.report.model.report');
        \\assert(\$reportModel instanceof ReportModel);

        \$aDayAgoBeginningOfTheDay = (clone \$aDayAgo)->setTime(0, 0, 0);

        \$reportData = \$reportModel->getReportData(\$report, null, [
            'dateFrom' => \$aDayAgoBeginningOfTheDay,
            'dateTo'   => clone \$aDayAgoBeginningOfTheDay,
        ]);

        Assert::assertSame(1, \$reportData['totalResults']);
        Assert::assertCount(1, \$reportData['data']);
    }

    private function makeSubmission(Form \$form, IpAddress \$ipAddress, \\DateTime \$dateSubmitted): Submission
    {
        \$submission = new Submission();
        \$submission->setForm(\$form);
        \$submission->setIpAddress(\$ipAddress);
        \$submission->setDateSubmitted(\$dateSubmitted);
        \$submission->setReferer('');

        return \$submission;
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
        return "@bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php");
    }
}
