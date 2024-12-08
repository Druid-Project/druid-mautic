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

/* @bundles/FormBundle/EventListener/FormConditionalSubscriber.php */
class __TwigTemplate_395b842d34e1fc99f9e20b4dc6eb0b12 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\FormBundle\\Event\\FormEvent;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class FormConditionalSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FormModel \$formModel,
        private FieldModel \$fieldModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_POST_SAVE => ['onFormPostSave', 0],
        ];
    }

    /**
     * Replace session field Id with field Id after save entity.
     */
    public function onFormPostSave(FormEvent \$event): void
    {
        \$form = \$event->getForm();

        // Process temporary field ID to real field ID
        \$actualFieldIds = [];
        foreach (\$form->getFields() as \$field) {
            \$actualFieldIds[] = \$field->getId();
            if (str_contains((string) \$field->getParent(), 'new')) {
                foreach (\$form->getFields() as \$parentField) {
                    if (\$field->getParent() === \$parentField->getSessionId()) {
                        \$field->setParent((string) \$parentField->getId());
                        \$this->fieldModel->saveEntity(\$field);
                    }
                }
            }
        }

        // Delete child fields
        \$deleteIds = [];
        foreach (\$form->getFields() as \$field) {
            if (\$field->getParent() && !in_array(\$field->getParent(), \$actualFieldIds)) {
                \$deleteIds[] = \$field->getId();
            }
        }

        if (!empty(\$deleteIds)) {
            \$this->formModel->deleteFields(\$form, \$deleteIds);
        }
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
        return "@bundles/FormBundle/EventListener/FormConditionalSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/FormConditionalSubscriber.php", "/app/docroot/app/bundles/FormBundle/EventListener/FormConditionalSubscriber.php");
    }
}
