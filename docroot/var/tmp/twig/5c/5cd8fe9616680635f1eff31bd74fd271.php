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

/* @bundles/SmsBundle/Tests/ArrayTransport.php */
class __TwigTemplate_f077b9a66f25e6e0239591f7e888ee7f extends Template
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

namespace Mautic\\SmsBundle\\Tests;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Sms\\TransportInterface;

class ArrayTransport implements TransportInterface
{
    /**
     * @var array<array{'contact': Lead, 'content': string}>
     */
    public array \$smses = [];

    /**
     * @var array<array{'contact': Lead, 'content': string}>
     */
    public array \$mmses = [];

    public function sendSms(Lead \$lead, \$content): bool
    {
        \$this->smses[] = ['contact' => \$lead, 'content' => \$content];

        return true;
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
        return "@bundles/SmsBundle/Tests/ArrayTransport.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/ArrayTransport.php", "/app/docroot/app/bundles/SmsBundle/Tests/ArrayTransport.php");
    }
}
