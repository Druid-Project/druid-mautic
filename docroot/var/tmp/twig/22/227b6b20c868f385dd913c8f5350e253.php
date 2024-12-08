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

/* @bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php */
class __TwigTemplate_c7c9e211853bc4c60b9811ff2ae3104d extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\Form\\Type\\FormFieldFileType;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Helper\\FormUploader;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Twig\\Helper\\AvatarHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SetContactAvatarFormSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AvatarHelper \$avatarHelper,
        private FormUploader \$uploader,
        private LeadModel \$leadModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_ON_SUBMIT => ['onFormSubmit', 0],
        ];
    }

    public function onFormSubmit(SubmissionEvent \$submissionEvent): void
    {
        \$fields  = \$submissionEvent->getForm()->getFields();
        \$contact = \$submissionEvent->getLead();
        \$results = \$submissionEvent->getResults();

        if (!\$contact) {
            return;
        }

        /** @var Field \$field */
        foreach (\$fields as \$field) {
            switch (\$field->getType()) {
                case 'file':
                    \$properties = \$field->getProperties();
                    if (empty(\$properties[FormFieldFileType::PROPERTY_PREFERED_PROFILE_IMAGE])) {
                        break;
                    }
                    if (empty(\$results[\$field->getAlias()])) {
                        break;
                    }
                    try {
                        \$filePath = \$this->uploader->getCompleteFilePath(\$field, \$results[\$field->getAlias()]);
                        \$this->avatarHelper->createAvatarFromFile(\$contact, \$filePath);
                        \$contact->setPreferredProfileImage('custom');
                        \$this->leadModel->saveEntity(\$contact);

                        return;
                    } catch (\\Exception) {
                    }

                    break;
            }
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
        return "@bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/SetContactAvatarFormSubscriber.php");
    }
}
