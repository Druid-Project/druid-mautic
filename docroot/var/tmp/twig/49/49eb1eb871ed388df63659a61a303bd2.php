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

/* @bundles/SmsBundle/Broadcast/BroadcastResult.php */
class __TwigTemplate_118d9a2835e35af083fb8f228c6fbed2 extends Template
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

namespace Mautic\\SmsBundle\\Broadcast;

class BroadcastResult
{
    private int \$sentCount = 0;

    private int \$failedCount = 0;

    public function process(array \$results): void
    {
        foreach (\$results as \$result) {
            if (isset(\$result['sent']) && true === \$result['sent']) {
                \$this->sent();
            } else {
                \$this->failed();
            }
        }
    }

    public function sent(): void
    {
        ++\$this->sentCount;
    }

    public function failed(): void
    {
        ++\$this->failedCount;
    }

    public function getSentCount(): int
    {
        return \$this->sentCount;
    }

    public function getFailedCount(): int
    {
        return \$this->failedCount;
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
        return "@bundles/SmsBundle/Broadcast/BroadcastResult.php";
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
        return new Source("", "@bundles/SmsBundle/Broadcast/BroadcastResult.php", "/app/docroot/app/bundles/SmsBundle/Broadcast/BroadcastResult.php");
    }
}
