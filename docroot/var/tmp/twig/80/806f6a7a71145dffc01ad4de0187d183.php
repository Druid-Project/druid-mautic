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

/* @bundles/CoreBundle/Entity/Transformer/NotificationArrayTransformer.php */
class __TwigTemplate_c096f8680309412fdf43240985ec49ec extends Template
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

namespace Mautic\\CoreBundle\\Entity\\Transformer;

use Mautic\\CoreBundle\\Entity\\Notification;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;

class NotificationArrayTransformer implements DataTransformerInterface
{
    /** {@inheritdoc} */
    public function transform(\$value)
    {
        /** Notification \$value */
        if (!\$value instanceof Notification) {
            throw new \\InvalidArgumentException('Transformer expects '.Notification::class);
        }

        \$notification = new Notification();
        \$reflection   = new \\ReflectionClass(\$notification);
        \$vars         = \$reflection->getProperties();

        \$propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        \$array = [];

        foreach (\$vars as \$property) {
            \$propertyValue               = \$propertyAccessor->getValue(\$value, \$property->getName());
            \$array[\$property->getName()] = \$propertyValue;
        }

        return \$array;
    }

    /** {@inheritdoc} */
    public function reverseTransform(\$value)
    {
        if (!is_array(\$value)) {
            throw new \\InvalidArgumentException('Method expects array as argument');
        }

        \$vars         = get_class_vars(Notification::class);
        \$notification = new Notification();

        \$propertyAccessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        foreach (\$value as \$property => \$val) {
            if (!in_array(\$property, \$vars)) {
                throw new \\InvalidArgumentException('Object '.Notification::class.' does not have property '.\$property);
            }
            \$propertyAccessor->setValue(\$notification, \"[{\$property}]\", \$val);
        }

        return \$notification;
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
        return "@bundles/CoreBundle/Entity/Transformer/NotificationArrayTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/Transformer/NotificationArrayTransformer.php", "/app/docroot/app/bundles/CoreBundle/Entity/Transformer/NotificationArrayTransformer.php");
    }
}
