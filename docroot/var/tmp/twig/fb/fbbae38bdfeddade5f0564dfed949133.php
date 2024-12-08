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

/* @bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php */
class __TwigTemplate_ed003e3041873d60e4311e7e1b85d72f extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<LeadField|null, int|null>
 */
class FieldToOrderTransformer implements DataTransformerInterface
{
    public function __construct(
        private LeadFieldRepository \$leadFieldRepository
    ) {
    }

    /**
     * Transforms an object to an integer (order).
     *
     * @param int|null \$order
     *
     * @return LeadField|null
     */
    public function transform(\$order)
    {
        if (!\$order) {
            return null;
        }

        return \$this->leadFieldRepository->findOneBy(['order' => \$order]);
    }

    /**
     * Transforms a integer to an object.
     *
     * @param LeadField|null \$field
     *
     * @return int|null
     */
    public function reverseTransform(\$field)
    {
        if (null === \$field) {
            return null;
        }

        return \$field->getOrder();
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
        return "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php", "/app/docroot/app/bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php");
    }
}
