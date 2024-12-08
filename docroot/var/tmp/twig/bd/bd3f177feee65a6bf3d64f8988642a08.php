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

/* @bundles/CoreBundle/Service/ProcessQueue.php */
class __TwigTemplate_decbac89aaa741571b16c7d314011231 extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Symfony\\Component\\Process\\Process;

final class ProcessQueue
{
    /**
     * @var \\SplQueue<Process>
     */
    private \\SplQueue \$pending;

    /**
     * @var \\SplObjectStorage<Process,Process>
     */
    private \\SplObjectStorage \$processing;

    /**
     * @var \\SplObjectStorage<Process,Process>
     */
    private \\SplObjectStorage \$processed;

    public function __construct(
        private int \$processLimit = 10
    ) {
        \$this->pending      = new \\SplQueue();
        \$this->processing   = new \\SplObjectStorage();
        \$this->processed    = new \\SplObjectStorage();
    }

    /**
     * @param Process<mixed> \$process
     */
    public function enqueue(Process \$process): void
    {
        \$this->pending->enqueue(\$process);
    }

    public function refresh(): void
    {
        // Remove finished processes from the processing queue
        foreach (\$this->processing as \$process) {
            if (\$process->isRunning()) {
                continue;
            }
            \$this->processing->detach(\$process);
            \$this->processed->attach(\$process);
        }

        // Add new processes to the processing queue
        for (\$i = \$this->processing->count(); \$i < \$this->processLimit; ++\$i) {
            if (\$this->pending->isEmpty()) {
                break;
            }
            \$process = \$this->pending->dequeue();
            \$process->start();
            \$this->processing->attach(\$process);
        }
    }

    public function isProcessing(): bool
    {
        return \$this->getProcessingCount() > 0;
    }

    public function getProcessedCount(): int
    {
        return \$this->processed->count();
    }

    public function getProcessingCount(): int
    {
        return \$this->processing->count();
    }

    /**
     * @return \\SplObjectStorage<Process,Process>
     */
    public function getProcessed(): \\SplObjectStorage
    {
        return \$this->processed;
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
        return "@bundles/CoreBundle/Service/ProcessQueue.php";
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
        return new Source("", "@bundles/CoreBundle/Service/ProcessQueue.php", "/app/docroot/app/bundles/CoreBundle/Service/ProcessQueue.php");
    }
}
