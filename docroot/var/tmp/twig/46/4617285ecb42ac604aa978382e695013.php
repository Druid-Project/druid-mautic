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

/* @bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php */
class __TwigTemplate_5ed86a3808384e94518759af0d1470da extends Template
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

namespace Mautic\\FormBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;

class FieldModelFunctionalTest extends MauticMysqlTestCase
{
    public function testGetObjectFieldsUnpublishedField(): void
    {
        /** @var \\Mautic\\FormBundle\\Model\\FieldModel \$fieldModel */
        \$fieldModel   = static::getContainer()->get('mautic.form.model.field');
        \$fieldsBefore = \$fieldModel->getObjectFields('lead');

        /** @var LeadFieldRepository \$leadFieldRepository */
        \$leadFieldRepository = \$this->em->getRepository(LeadField::class);
        \$field               = \$leadFieldRepository->findOneBy(['alias' => 'firstname']);
        \$field->setIsPublished(false);
        \$leadFieldRepository->saveEntity(\$field);

        \$fieldsAfter = \$fieldModel->getObjectFields('lead');

        self::assertTrue(array_key_exists('firstname', array_flip(\$fieldsBefore[1]['Core'])));
        self::assertFalse(array_key_exists('firstname', array_flip(\$fieldsAfter[1]['Core'])));
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
        return "@bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php");
    }
}
