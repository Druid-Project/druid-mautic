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

/* @bundles/ReportBundle/Scheduler/Model/MessageSchedule.php */
class __TwigTemplate_daeac94e613e788f28de77ce6efe08c2 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FileProperties;
use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class MessageSchedule
{
    public function __construct(
        private TranslatorInterface \$translator,
        private FileProperties \$fileProperties,
        private CoreParametersHelper \$coreParametersHelper,
        private UrlGeneratorInterface \$router
    ) {
    }

    /**
     * @deprecated 2.15.2 to be removed in 3.0. Use getMessageForAttachedFile or getMessageForLinkedFile
     *
     * @param string \$filePath
     *
     * @return string
     */
    public function getMessage(Report \$report, \$filePath)
    {
        \$link = \$this->router->generate('mautic_report_view', ['objectId' => \$report->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        if (\$this->fileCouldBeSend(\$filePath)) {
            \$date = new \\DateTime();

            return \$this->translator->trans(
                'mautic.report.schedule.email.message',
                ['%report_name%' => \$report->getName(), '%date%' => \$date->format('Y-m-d'), '%link%' => \$link]
            );
        }

        return \$this->translator->trans(
            'mautic.report.schedule.email.message_file_not_attached',
            ['%report_name%' => \$report->getName(), '%link%' => \$link]
        );
    }

    public function getMessageForAttachedFile(Report \$report): string
    {
        \$link = \$this->router->generate('mautic_report_view', ['objectId' => \$report->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        \$date = new \\DateTime();

        return \$this->translator->trans(
            'mautic.report.schedule.email.message',
            ['%report_name%' => \$report->getName(), '%date%' => \$date->format('Y-m-d'), '%link%' => \$link]
        );
    }

    public function getMessageForLinkedFile(Report \$report): string
    {
        \$link = \$this->router->generate('mautic_report_download', ['reportId' => \$report->getId()], UrlGeneratorInterface::ABSOLUTE_URL);

        return \$this->translator->trans(
            'mautic.report.schedule.email.message_file_linked',
            ['%report_name%' => \$report->getName(), '%link%' => \$link]
        );
    }

    /**
     * @return string
     */
    public function getSubject(Report \$report)
    {
        \$date = new \\DateTime();

        return \$this->translator->trans(
            'mautic.report.schedule.email.subject',
            ['%report_name%' => \$report->getName(), '%date%' => \$date->format('Y-m-d')]
        );
    }

    /**
     * @deprecated 2.16.0 use \\Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler::fileCanBeAttached instead. To be removed in 3.0.0.
     *
     * @param string \$filePath
     *
     * @throws \\Mautic\\CoreBundle\\Exception\\FileInvalidException
     */
    public function fileCouldBeSend(\$filePath): bool
    {
        \$filesize    = \$this->fileProperties->getFileSize(\$filePath);
        \$maxFileSize = \$this->coreParametersHelper->get('report_export_max_filesize_in_bytes');

        return \$filesize <= \$maxFileSize;
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
        return "@bundles/ReportBundle/Scheduler/Model/MessageSchedule.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/MessageSchedule.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Model/MessageSchedule.php");
    }
}
