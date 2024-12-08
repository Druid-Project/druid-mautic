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

/* @bundles/MessengerBundle/Config/config.php */
class __TwigTemplate_24b9b03a70b44fa34dff917174534f85 extends Template
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

return [
    'parameters' => [
        'messenger_dsn_email'                  => 'sync://', // sync means no queue
        'messenger_dsn_hit'                    => 'sync://', // sync means no queue
        'messenger_dsn_failed'                 => null, // failed transport is optional
        'messenger_retry_strategy_max_retries' => 3, // Maximum number of retries for a failed send
        'messenger_retry_strategy_delay'       => 1000, // Delay in milliseconds between retries
        'messenger_retry_strategy_multiplier'  => 2.0, // Delay multiplier between retries  e.g. 1 second delay, 2 seconds, 4 seconds
        'messenger_retry_strategy_max_delay'   => 0, // maximum delay in milliseconds between retries
    ],
];
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MessengerBundle/Config/config.php";
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
        return new Source("", "@bundles/MessengerBundle/Config/config.php", "/app/docroot/app/bundles/MessengerBundle/Config/config.php");
    }
}
