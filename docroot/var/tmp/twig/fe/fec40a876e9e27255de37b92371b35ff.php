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

/* @bundles/MessengerBundle/Transport/NullTransportFactory.php */
class __TwigTemplate_e7554b0fa09ebebce97a7050d57045df extends Template
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

namespace Mautic\\MessengerBundle\\Transport;

use Symfony\\Component\\Messenger\\Transport\\Serialization\\SerializerInterface;
use Symfony\\Component\\Messenger\\Transport\\TransportFactoryInterface;
use Symfony\\Component\\Messenger\\Transport\\TransportInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class NullTransportFactory implements TransportFactoryInterface
{
    /**
     * @param mixed[] \$options
     */
    public function createTransport(string \$dsn, array \$options, SerializerInterface \$serializer): TransportInterface
    {
        return new NullTransport();
    }

    /**
     * @param mixed[] \$options
     */
    public function supports(string \$dsn, array \$options): bool
    {
        return str_starts_with(\$dsn, 'null://');
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
        return "@bundles/MessengerBundle/Transport/NullTransportFactory.php";
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
        return new Source("", "@bundles/MessengerBundle/Transport/NullTransportFactory.php", "/app/docroot/app/bundles/MessengerBundle/Transport/NullTransportFactory.php");
    }
}
