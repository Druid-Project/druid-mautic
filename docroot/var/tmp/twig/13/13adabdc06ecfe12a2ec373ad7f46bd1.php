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

/* @bundles/MessengerBundle/Retry/RetryStrategy.php */
class __TwigTemplate_3a9e2493b45f81f6243a130e9713007a extends Template
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

namespace Mautic\\MessengerBundle\\Retry;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Retry\\MultiplierRetryStrategy;
use Symfony\\Component\\Messenger\\Retry\\RetryStrategyInterface;

class RetryStrategy implements RetryStrategyInterface
{
    private RetryStrategyInterface \$retryStrategy;

    public function __construct(
        private CoreParametersHelper \$parametersHelper
    ) {
    }

    public function isRetryable(Envelope \$message): bool
    {
        return \$this->getRetryStrategy()->isRetryable(\$message);
    }

    public function getWaitingTime(Envelope \$message): int
    {
        return \$this->getRetryStrategy()->getWaitingTime(\$message);
    }

    private function getRetryStrategy(): RetryStrategyInterface
    {
        if (!isset(\$this->retryStrategy)) {
            \$this->retryStrategy = new MultiplierRetryStrategy(
                (int) \$this->parametersHelper->get('messenger_retry_strategy_max_retries'),
                (int) \$this->parametersHelper->get('messenger_retry_strategy_delay'),
                (float) \$this->parametersHelper->get('messenger_retry_strategy_multiplier'),
                (int) \$this->parametersHelper->get('messenger_retry_strategy_max_delay'),
            );
        }

        return \$this->retryStrategy;
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
        return "@bundles/MessengerBundle/Retry/RetryStrategy.php";
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
        return new Source("", "@bundles/MessengerBundle/Retry/RetryStrategy.php", "/app/docroot/app/bundles/MessengerBundle/Retry/RetryStrategy.php");
    }
}
