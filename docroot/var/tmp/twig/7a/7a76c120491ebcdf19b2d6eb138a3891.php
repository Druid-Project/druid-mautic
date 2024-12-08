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

/* @bundles/FormBundle/Entity/FieldRepository.php */
class __TwigTemplate_a77e471124cd05da584fdb3eecb78bca extends Template
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

namespace Mautic\\FormBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Field>
 */
class FieldRepository extends CommonRepository
{
    public function fieldExistsByFormAndType(int \$formId, string \$type): bool
    {
        return (bool) \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->select('1')
            ->from(MAUTIC_TABLE_PREFIX.Field::TABLE_NAME, 'f')
            ->where('f.type = :type')
            ->andWhere('f.form_id = :formId')
            ->setParameter('type', \$type)
            ->setParameter('formId', \$formId)
            ->executeQuery()
            ->fetchOne();
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
        return "@bundles/FormBundle/Entity/FieldRepository.php";
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
        return new Source("", "@bundles/FormBundle/Entity/FieldRepository.php", "/app/docroot/app/bundles/FormBundle/Entity/FieldRepository.php");
    }
}
