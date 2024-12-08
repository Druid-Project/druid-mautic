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

/* @bundles/NotificationBundle/Tests/Form/Type/NotificationTypeTest.php */
class __TwigTemplate_f80b5d1aabaa7b171d509e4b593cd20a extends Template
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

namespace Mautic\\NotificationBundle\\Tests\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\NotificationBundle\\Form\\Type\\NotificationType;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\FormErrorIterator;
use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\PreloadedExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class NotificationTypeTest extends TypeTestCase
{
    /**
     * @return array<FormExtensionInterface>
     */
    protected function getExtensions(): array
    {
        \$validatorBuilder = Validation::createValidatorBuilder();
        \$validatorBuilder->addMethodMapping('loadValidatorMetadata');

        return [
            new ValidatorExtension(\$validatorBuilder->getValidator()),
            new PreloadedExtension([
                new CategoryListType(
                    \$this->createMock(EntityManager::class),
                    \$this->createMock(TranslatorInterface::class),
                    \$this->createMock(CategoryModel::class),
                    \$this->createMock(RouterInterface::class),
                ),
            ], []),
        ];
    }

    public function testSubmitInvalidData(): void
    {
        \$form = \$this->factory->create(NotificationType::class);

        \$expected = new Notification();
        \$expected->setLanguage(null);
        \$expected->setUtmTags([
            'utmSource'   => null,
            'utmMedium'   => null,
            'utmCampaign' => null,
            'utmContent'  => null,
        ]);
        \$expected->setIsPublished(false);

        \$form->submit([]);

        Assert::assertTrue(\$form->isSynchronized());

        \$formData = \$form->getData();
        \\assert(\$formData instanceof Notification);

        \$expected->setChanges(\$formData->getChanges());
        Assert::assertEquals(\$expected, \$formData);

        Assert::assertFalse(\$form->isValid());

        \$view          = \$form->createView();
        \$invalidFields = ['name', 'heading', 'message'];
        \$errorCount    = 0;
        foreach (\$view->children as \$fieldName => \$child) {
            \$errors = \$view->children[\$fieldName]->vars['errors'];
            \\assert(\$errors instanceof FormErrorIterator);

            if (in_array(\$fieldName, \$invalidFields, true)) {
                ++\$errorCount;
                self::assertCount(1, \$errors);
                continue;
            }

            self::assertCount(0, \$errors);
        }

        self::assertCount(\$errorCount, \$invalidFields);
        self::assertCount(0, \$view->vars['errors']);
    }

    public function testSubmitValidData(): void
    {
        \$form = \$this->factory->create(NotificationType::class);

        \$expected = new Notification();
        \$expected->setLanguage(null);
        \$expected->setName('The name');
        \$expected->setHeading('The heading');
        \$expected->setMessage('The message');
        \$expected->setUtmTags([
            'utmSource'   => null,
            'utmMedium'   => null,
            'utmCampaign' => null,
            'utmContent'  => null,
        ]);
        \$expected->setIsPublished(false);

        \$form->submit([
            'name'    => 'The name',
            'heading' => 'The heading',
            'message' => 'The message',
        ]);

        Assert::assertTrue(\$form->isSynchronized());

        \$formData = \$form->getData();
        \\assert(\$formData instanceof Notification);

        \$expected->setChanges(\$formData->getChanges());
        Assert::assertEquals(\$expected, \$formData);

        Assert::assertTrue(\$form->isValid());

        \$view = \$form->createView();
        foreach (\$view->children as \$fieldName => \$child) {
            \$errors = \$view->children[\$fieldName]->vars['errors'];
            \\assert(\$errors instanceof FormErrorIterator);
            self::assertCount(0, \$errors);
        }

        self::assertCount(0, \$view->vars['errors']);
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
        return "@bundles/NotificationBundle/Tests/Form/Type/NotificationTypeTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Form/Type/NotificationTypeTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Form/Type/NotificationTypeTest.php");
    }
}
